<?php
/**
 * Corpo genérico de uma hotpage, preenchido com os dados de config/pages.php.
 *
 * @var array<string, mixed> $page
 */
?>
<article>
    <p><?= e('Atuação em ' . $page['area']) ?></p>
    <h1><?= e($page['heading']) ?></h1>
    <p><?= e($page['intro']) ?></p>

    <section aria-labelledby="perguntas">
        <h2 id="perguntas">Perguntas frequentes</h2>
        <ul>
            <?php foreach ($page['faq'] as $question): ?>
                <li><?= e($question) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
</article>
