<?php
/**
 * Estrutura base de todas as hotpages.
 *
 * @var string $title
 * @var string $description
 * @var string $content HTML já renderizado do corpo
 * @var string $whatsappTopic tema que identifica a página na mensagem do WhatsApp
 * @var string $whatsappUrl
 * @var array<string, mixed> $firm
 * @var array<string, string> $utm
 * @var bool $showPageChrome se false, omite canais (já no content) — sempre true no fluxo atual
 * @var \SouzaGuedes\HotPages\View $view
 */

$utmAttributes = '';
foreach ($utm as $key => $value) {
    $utmAttributes .= ' data-' . e(str_replace('_', '-', $key)) . '="' . e($value) . '"';
}
$chrome = [
    'firm' => $firm,
    'whatsappUrl' => $whatsappUrl,
];
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500&family=Plus+Jakarta+Sans:wght@500;600;700&family=Source+Sans+3:wght@400;600&display=swap">
    <link rel="stylesheet" href="/css/componentes.css?v=5.1.5">
</head>
<body<?= $utmAttributes ?>>
<div class="site">
    <?= $view->partial('icons') ?>
    <?= $view->partial('cabecalho', $chrome) ?>

    <main>
        <?= $content ?>
        <?= $view->partial('canais', $chrome) ?>
    </main>

    <?= $view->partial('rodape', $chrome) ?>
    <?= $view->partial('cookies') ?>
</div>
<script src="/js/hotpage.js" defer></script>
</body>
</html>
