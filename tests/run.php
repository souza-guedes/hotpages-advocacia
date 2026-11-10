<?php

declare(strict_types=1);

// Testes sem dependências: php tests/run.php

use SouzaGuedes\HotPages\Router;
use SouzaGuedes\HotPages\Utm;
use SouzaGuedes\HotPages\View;

require __DIR__ . '/../src/bootstrap.php';

$failures = 0;
$count = 0;

function check(string $name, mixed $expected, mixed $actual): void
{
    global $failures, $count;
    $count++;
    if ($expected === $actual) {
        echo "ok   {$name}\n";
        return;
    }
    $failures++;
    echo "FAIL {$name}\n     esperado: " . var_export($expected, true) . "\n     obtido:   " . var_export($actual, true) . "\n";
}

$pages = require HOTPAGES_ROOT . '/config/pages.php';
$router = new Router(array_keys($pages));

// Router
check('slugs configurados', ['imobiliario', 'saude', 'consumidor'], array_keys($pages));
check('/saude é página', ['type' => 'page', 'slug' => 'saude'], $router->resolve('/saude'));
check('query não afeta a rota', ['type' => 'page', 'slug' => 'consumidor'], $router->resolve('/consumidor?utm_source=google'));
check(
    'barra final redireciona mantendo a query',
    ['type' => 'redirect', 'location' => '/saude?utm_source=google&utm_campaign=negativa'],
    $router->resolve('/saude/?utm_source=google&utm_campaign=negativa'),
);
check('barra final sem query', ['type' => 'redirect', 'location' => '/imobiliario'], $router->resolve('/imobiliario/'));
check('maiúsculas são 404', ['type' => 'not_found'], $router->resolve('/SAUDE'));
check('nicho fora da banca é 404', ['type' => 'not_found'], $router->resolve('/tributario'));
check('raiz é 404', ['type' => 'not_found'], $router->resolve('/'));
check('subpath é 404', ['type' => 'not_found'], $router->resolve('/saude/extra'));
check('barra final em path desconhecido não redireciona', ['type' => 'not_found'], $router->resolve('//evil.example/'));
check('index.php direto é 404', ['type' => 'not_found'], $router->resolve('/index.php'));

// Utm::fromQuery
check(
    'whitelist de UTM',
    ['utm_source' => 'google', 'utm_medium' => 'cpc', 'utm_campaign' => 'usucapiao'],
    Utm::fromQuery(['utm_source' => 'google', 'utm_medium' => 'cpc', 'utm_campaign' => 'usucapiao', 'gclid' => 'abc', 'page' => 'x']),
);
check('term e content aceitos', ['utm_term' => 'plano de saúde negou cirurgia', 'utm_content' => 'anuncio-1'], Utm::fromQuery(['utm_term' => 'plano de saúde negou cirurgia', 'utm_content' => 'anuncio-1']));
check('trim', ['utm_source' => 'google'], Utm::fromQuery(['utm_source' => '  google ']));
check('HTML descartado', [], Utm::fromQuery(['utm_source' => '<script>alert(1)</script>']));
check('array descartado', [], Utm::fromQuery(['utm_source' => ['google']]));
check('vazio descartado', [], Utm::fromQuery(['utm_source' => '   ']));
check('101 caracteres descartado', [], Utm::fromQuery(['utm_campaign' => str_repeat('a', 101)]));
check('100 caracteres aceito', ['utm_campaign' => str_repeat('a', 100)], Utm::fromQuery(['utm_campaign' => str_repeat('a', 100)]));

// Utm::append
check('append sem UTM', '/saude', Utm::append('/saude', []));
check('append sem query', '/saude?utm_source=google&utm_medium=cpc', Utm::append('/saude', ['utm_source' => 'google', 'utm_medium' => 'cpc']));
check('append com query existente', '/saude?a=1&utm_source=google', Utm::append('/saude?a=1', ['utm_source' => 'google']));
check('append antes do fragmento', '/saude?utm_source=google#perguntas', Utm::append('/saude#perguntas', ['utm_source' => 'google']));
check('append codifica espaço', '/saude?utm_term=plano%20negou', Utm::append('/saude', ['utm_term' => 'plano negou']));

// Schema das páginas (Fase 5)
foreach (['imobiliario', 'saude', 'consumidor'] as $slug) {
    $p = $pages[$slug];
    check("{$slug} tem situations", true, isset($p['situations']) && is_array($p['situations']) && $p['situations'] !== []);
    check("{$slug} faq é q+a", true, isset($p['faq'][0]['q'], $p['faq'][0]['a']));
}
check('imobiliario whatsapp_topic atraso', 'atraso na entrega do imóvel', $pages['imobiliario']['whatsapp_topic']);

// Views
$firm = require HOTPAGES_ROOT . '/config/firm.php';
$view = new View(HOTPAGES_ROOT . '/src/Views');
$whatsappTopic = $pages['saude']['whatsapp_topic'];
$whatsappText = "Olá, vim pela página sobre {$whatsappTopic} e gostaria de apresentar minha situação.";
$whatsappUrl = 'https://wa.me/' . $firm['whatsapp'] . '?text=' . rawurlencode($whatsappText);
$html = $view->render('layout', [
    'title' => 'T <x>',
    'description' => 'D',
    'whatsappTopic' => $whatsappTopic,
    'whatsappUrl' => $whatsappUrl,
    'content' => $view->render('page', [
        'page' => $pages['saude'],
        'firm' => $firm,
        'whatsappUrl' => $whatsappUrl,
    ]),
    'firm' => $firm,
    'utm' => ['utm_source' => 'google', 'utm_campaign' => 'negativa'],
]);
check('título escapado', true, str_contains($html, '<title>T &lt;x&gt;</title>'));
check('UTM em data-*', true, str_contains($html, 'data-utm-source="google" data-utm-campaign="negativa"'));
check('sócio 1 com OAB', true, str_contains($html, 'Rodrigo Guedes da Silva') && str_contains($html, 'OAB/SP nº 538.416'));
check('sócio 2 com OAB', true, str_contains($html, 'Lays Regina de Souza') && str_contains($html, 'OAB/SP nº 511.204'));
check('WhatsApp com tema', true, str_contains($html, rawurlencode($whatsappText)));
check('WhatsApp sem UTM', false, (bool) preg_match('/wa\.me[^"]*utm_/', $html));
check('sem formulário', false, str_contains($html, '<form'));
check('sem float WhatsApp', false, str_contains($html, 'whatsapp-float') || str_contains($html, 'mbar'));
check('seção situações', true, str_contains($html, 'id="situacoes"'));
check('seção perguntas', true, str_contains($html, 'id="perguntas"'));
check('seção canais', true, str_contains($html, 'id="canais"'));
check('FAQ com resposta', true, str_contains($html, '<details name="faq"'));
check('CSS do design-system', true, str_contains($html, '/css/componentes.css'));

$imobTopic = $pages['imobiliario']['whatsapp_topic'];
$imobText = "Olá, vim pela página sobre {$imobTopic} e gostaria de apresentar minha situação.";
$imobUrl = 'https://wa.me/' . $firm['whatsapp'] . '?text=' . rawurlencode($imobText);
$imobHtml = $view->render('layout', [
    'title' => $pages['imobiliario']['title'],
    'description' => $pages['imobiliario']['description'],
    'whatsappTopic' => $imobTopic,
    'whatsappUrl' => $imobUrl,
    'content' => $view->render('page', [
        'page' => $pages['imobiliario'],
        'firm' => $firm,
        'whatsappUrl' => $imobUrl,
    ]),
    'firm' => $firm,
    'utm' => [],
]);
check('imobiliario WhatsApp atraso', true, str_contains($imobHtml, rawurlencode($imobText)));
check('imobiliario heading atraso', true, str_contains($imobHtml, 'A construtora atrasou a entrega do seu imóvel?'));

$notFound = $view->render('404', ['pages' => $pages, 'utm' => ['utm_source' => 'google']]);
check('404 preserva UTM nos links', true, str_contains($notFound, 'href="/saude?utm_source=google"'));

echo "\n{$count} testes, {$failures} falha(s)\n";
exit($failures === 0 ? 0 : 1);
