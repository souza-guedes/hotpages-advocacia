<?php

declare(strict_types=1);

$src = dirname(__DIR__) . '/docs/fase-3-design-ui/wdlc-3.1-mockup-hotpage/prototipo.html';
$outDir = dirname(__DIR__) . '/src/Views/partials';
$html = file_get_contents($src);
if ($html === false) {
    fwrite(STDERR, "Não li o protótipo\n");
    exit(1);
}
if (!preg_match('/(<svg width="0" height="0".*?<\/svg>\s*<svg width="0" height="0".*?<\/svg>)/s', $html, $matches)) {
    fwrite(STDERR, "Sprites SVG não encontrados\n");
    exit(1);
}
if (!is_dir($outDir)) {
    mkdir($outDir, 0777, true);
}
$content = "<?php\n/** Logos e ícones SVG (sprite do protótipo WDLC 3.1). */\n?>\n" . $matches[1] . "\n";
file_put_contents($outDir . '/icons.php', $content);
echo 'icons.php ' . strlen($matches[1]) . " bytes\n";
