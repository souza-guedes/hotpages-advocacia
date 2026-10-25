<?php
/**
 * Estrutura base de todas as hotpages.
 *
 * @var string $title
 * @var string $description
 * @var string $content HTML já renderizado do corpo
 * @var string $whatsappTopic tema que identifica a página na mensagem do WhatsApp
 * @var array<string, mixed> $firm
 * @var array<string, string> $utm
 */

// Mensagem neutra e editável, só com o tema (WDLC 1.2, seção 5, regra 2). Nunca leva UTM.
$whatsappText = "Olá, vim pela página sobre {$whatsappTopic} e gostaria de apresentar minha situação.";
$whatsappUrl = 'https://wa.me/' . $firm['whatsapp'] . '?text=' . rawurlencode($whatsappText);

$utmAttributes = '';
foreach ($utm as $key => $value) {
    $utmAttributes .= ' data-' . e(str_replace('_', '-', $key)) . '="' . e($value) . '"';
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
</head>
<body<?= $utmAttributes ?>>
    <header>
        <p><?= e($firm['name']) ?></p>
    </header>

    <main>
        <?= $content ?>

        <section aria-labelledby="contato">
            <h2 id="contato">Canais de atendimento</h2>
            <p>Se quiser apresentar sua situação, escolha um dos canais oficiais do escritório.</p>
            <ul>
                <li><a href="<?= e($whatsappUrl) ?>" rel="noopener" target="_blank">WhatsApp <?= e($firm['phone_display']) ?></a></li>
                <li><a href="tel:<?= e($firm['phone_e164']) ?>">Telefone <?= e($firm['phone_display']) ?></a></li>
                <li><a href="mailto:<?= e($firm['email']) ?>"><?= e($firm['email']) ?></a></li>
            </ul>
            <p><?= e($firm['hours']) ?>.</p>
        </section>
    </main>

    <footer>
        <p><?= e($firm['name']) ?></p>
        <ul>
            <?php foreach ($firm['partners'] as $partner): ?>
                <li><?= e($partner['name']) ?>, <?= e($partner['oab']) ?></li>
            <?php endforeach; ?>
        </ul>
        <p><?= e($firm['address']) ?></p>
        <p>Conteúdo de caráter meramente informativo, nos termos do Provimento CFOAB nº 205/2021. Não constitui consulta jurídica nem promessa de resultado.</p>
    </footer>
</body>
</html>
