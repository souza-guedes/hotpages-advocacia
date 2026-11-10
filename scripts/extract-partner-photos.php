<?php

declare(strict_types=1);

$src = dirname(__DIR__) . '/prototipo-hotpage-atraso-entrega.html';
$out = dirname(__DIR__) . '/public/assets/partners';
if (!is_dir($out)) {
    mkdir($out, 0777, true);
}
$html = file_get_contents($src);
if ($html === false) {
    fwrite(STDERR, "Não li o HTML standalone\n");
    exit(1);
}
if (!preg_match_all('/src="(data:image\/webp;base64,[^"]+)"/', $html, $matches)) {
    fwrite(STDERR, "Nenhuma imagem webp embutida\n");
    exit(1);
}
$names = ['rodrigo.webp', 'lays.webp'];
foreach ($names as $i => $name) {
    $dataUrl = $matches[1][$i] ?? null;
    if ($dataUrl === null) {
        fwrite(STDERR, "Falta imagem {$i}\n");
        exit(1);
    }
    $b64 = substr($dataUrl, strpos($dataUrl, ',') + 1);
    $bin = base64_decode($b64, true);
    if ($bin === false) {
        fwrite(STDERR, "Base64 inválido: {$name}\n");
        exit(1);
    }
    file_put_contents("{$out}/{$name}", $bin);
    echo "{$name} " . strlen($bin) . " bytes\n";
}
