<?php

declare(strict_types=1);

$_SERVER['REQUEST_URI'] = $argv[1] ?? '/imobiliario';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_GET = [];

ob_start();
require dirname(__DIR__) . '/public/index.php';
$html = ob_get_clean();

$needles = ['id="situacoes"', 'id="perguntas"', 'id="canais"', 'id="cookie"', '/css/componentes.css', '<form'];
foreach ($needles as $n) {
    $ok = str_contains($html, $n);
    echo ($ok ? 'OK  ' : 'MISS') . " {$n}\n";
}
echo 'bytes ' . strlen($html) . "\n";
