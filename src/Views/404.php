<?php
/**
 * Página não encontrada. Lista as hotpages mantendo os UTM.
 *
 * @var array<string, array<string, mixed>> $pages
 * @var array<string, string> $utm
 */

use SouzaGuedes\HotPages\Utm;
?>
<section class="section">
  <div class="wrap">
    <div class="section__head">
      <p class="eyebrow">Página não encontrada</p>
      <h1 class="h2">O endereço acessado não existe</h1>
      <p class="muted">Veja as áreas de atuação do escritório:</p>
    </div>
    <ul class="checks">
      <?php foreach ($pages as $slug => $page): ?>
        <li><a class="link arrow" href="<?= e(Utm::append('/' . $slug, $utm)) ?>"><?= e($page['area']) ?></a><span><?= e($page['heading']) ?></span></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
