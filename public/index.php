<?php

declare(strict_types=1);

use SouzaGuedes\HotPages\Router;
use SouzaGuedes\HotPages\Utm;
use SouzaGuedes\HotPages\View;

// No servidor embutido (php -S), arquivos reais de public/ são servidos direto.
if (PHP_SAPI === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

require __DIR__ . '/../src/bootstrap.php';

$pages = require HOTPAGES_ROOT . '/config/pages.php';
$firm = require HOTPAGES_ROOT . '/config/firm.php';

$route = (new Router(array_keys($pages)))->resolve($_SERVER['REQUEST_URI'] ?? '/');

if ($route['type'] === 'redirect') {
    header('Location: ' . $route['location'], true, 301);
    exit;
}

// A URL leva os UTM; não deixar que vazem no Referer para wa.me e outros destinos.
header('Referrer-Policy: strict-origin-when-cross-origin');

$utm = Utm::fromQuery($_GET);
$view = new View(HOTPAGES_ROOT . '/src/Views');

if ($route['type'] === 'page') {
    $page = $pages[$route['slug']];
    $content = $view->render('page', ['page' => $page]);
    $meta = [
        'title' => $page['title'],
        'description' => $page['description'],
        'whatsappTopic' => $page['whatsapp_topic'],
    ];
} else {
    http_response_code(404);
    $content = $view->render('404', ['pages' => $pages, 'utm' => $utm]);
    $meta = [
        'title' => 'Página não encontrada | ' . $firm['name'],
        'description' => '',
        'whatsappTopic' => 'as áreas de atuação do escritório',
    ];
}

echo $view->render('layout', $meta + ['content' => $content, 'firm' => $firm, 'utm' => $utm]);
