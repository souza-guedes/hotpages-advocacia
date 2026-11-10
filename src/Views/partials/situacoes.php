<?php
/**
 * @var array<string, mixed> $page
 */
$situations = $page['situations'];
?>
<section class="section band--branco" id="situacoes" aria-labelledby="sit-t">
  <div class="wrap">
    <div class="section__head">
      <p class="eyebrow"><?= e($page['situations_eyebrow']) ?></p>
      <h2 class="h2" id="sit-t"><?= e($page['situations_title']) ?></h2>
      <p class="muted"><?= e($page['situations_lead']) ?></p>
    </div>
    <div class="sits">
      <?php foreach ($situations as $sit): ?>
        <div class="sit of">
          <h3><?= e($sit['title']) ?></h3>
          <p><?= e($sit['text']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="sits-dots" aria-hidden="true">
      <?php foreach ($situations as $i => $_): ?>
        <span<?= $i === 0 ? ' class="on"' : '' ?>></span>
      <?php endforeach; ?>
    </div>
    <p class="sits-foot nota"><?= e($page['situations_note']) ?></p>
  </div>
</section>
