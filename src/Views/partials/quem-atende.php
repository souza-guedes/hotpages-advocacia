<?php
/**
 * @var array<string, mixed> $firm
 * @var string $whatsappUrl
 */
?>
<section class="section dark team" aria-labelledby="team-t">
  <div class="wrap">
    <div class="section__head">
      <p class="eyebrow">Quem atende</p>
      <h2 class="h2" id="team-t"><?= e($firm['name']) ?></h2>
      <p class="muted">Os sócios responsáveis pelo escritório.</p>
    </div>
    <div class="people">
      <?php foreach ($firm['partners'] as $partner): ?>
        <div class="person">
          <div class="portrait"><div class="seal of"><img src="<?= e($partner['photo']) ?>" alt="<?= e($partner['name']) ?>" width="800" height="1000"></div></div>
          <div class="person__txt">
            <h3 class="h3"><?= e($partner['name']) ?></h3>
            <p class="person__oab"><?= e($partner['oab']) ?></p>
            <p class="bio muted"><?= e($partner['bio']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="team__cta">
      <p>Ficou com alguma dúvida?</p>
      <a class="btn btn--ghost" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener" aria-label="Fale com o escritório pelo WhatsApp"><svg aria-hidden="true"><use href="#i-wa"/></svg>Fale com o escritório</a>
    </div>
  </div>
</section>
