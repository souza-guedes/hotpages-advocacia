<?php
/**
 * Corpo genérico de uma hotpage, preenchido com os dados de config/pages.php.
 *
 * @var array<string, mixed> $page
 * @var array<string, mixed> $firm
 * @var string $whatsappUrl
 * @var \SouzaGuedes\HotPages\View $view
 */
$shared = [
    'page' => $page,
    'firm' => $firm,
    'whatsappUrl' => $whatsappUrl,
];
?>
<?= $view->partial('hero', $shared) ?>
<?= $view->partial('situacoes', $shared) ?>
<?= $view->partial('quem-atende', $shared) ?>
<?= $view->partial('documentos', $shared) ?>
<?= $view->partial('faq', $shared) ?>
