<?php
/**
 * Página não encontrada. Lista as hotpages mantendo os UTM, para não perder a
 * origem de quem chegou por um link de anúncio errado.
 *
 * @var array<string, array<string, mixed>> $pages
 * @var array<string, string> $utm
 */

use SouzaGuedes\HotPages\Utm;
?>
<article>
    <h1>Página não encontrada</h1>
    <p>O endereço acessado não existe. Veja as áreas de atuação do escritório:</p>
    <ul>
        <?php foreach ($pages as $slug => $page): ?>
            <li><a href="<?= e(Utm::append('/' . $slug, $utm)) ?>"><?= e($page['area']) ?></a></li>
        <?php endforeach; ?>
    </ul>
</article>
