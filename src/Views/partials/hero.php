<?php
/**
 * @var array<string, mixed> $page
 * @var array<string, mixed> $firm
 * @var string $whatsappUrl
 */
?>
<section class="hero">
  <div class="wrap">
    <div class="hero__txt">
      <p class="eyebrow">Atuação em <?= e($page['area']) ?></p>
      <h1 class="display"><?= e($page['heading']) ?></h1>
      <p class="lead"><?= e($page['intro']) ?></p>
      <div class="hero__ctas">
        <a class="btn btn--primary" href="#situacoes" data-jump="situacoes">Entenda seus direitos</a>
        <a class="btn btn--ghost" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener" aria-label="Fale com o escritório pelo WhatsApp"><svg aria-hidden="true"><use href="#i-wa"/></svg>Fale com o escritório</a>
      </div>
      <div class="hero__id">
        <?php foreach ($firm['partners'] as $partner): ?>
          <span><b><?= e($partner['name']) ?></b> · <?= e($partner['oab']) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="comp" aria-hidden="true">
    <span class="comp__nevoa of"></span>
    <span class="comp__sq"></span>
    <span class="comp__bar"></span>
    <span class="comp__panel seal of"></span>
  </div>
</section>
