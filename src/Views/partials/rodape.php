<?php
/**
 * @var array<string, mixed> $firm
 */
$addressLines = $firm['address_lines'] ?? [$firm['address']];
?>
<footer class="ftr">
  <div class="wrap">
    <div class="ftr__grid">
      <div style="display:grid;gap:var(--s3);align-content:start">
        <span class="brand" aria-label="<?= e($firm['name']) ?>">
          <svg class="logo-mono" aria-hidden="true"><use href="#logo-monograma"/></svg>
          <svg class="logo-wm" aria-hidden="true"><use href="#logo-wordmark"/></svg>
        </span>
        <ul class="ftr__oab">
          <?php foreach ($firm['partners'] as $partner): ?>
            <li><?= e($partner['name']) ?><span><?= e($partner['oab']) ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h2>Sede</h2>
        <p class="muted"><?= implode('<br>', array_map('e', $addressLines)) ?></p>
        <p class="muted" style="margin-top:8px"><?= e($firm['hours_short'] ?? $firm['hours']) ?></p>
      </div>
      <div>
        <h2>Contato</h2>
        <ul>
          <li><?= e($firm['phone_display']) ?> <span class="muted">· telefone e WhatsApp</span></li>
          <li><?= e($firm['email']) ?></li>
        </ul>
      </div>
      <div>
        <h2>Escritório</h2>
        <ul>
          <li><a href="https://souzaguedesadv.com.br/privacidade" target="_blank" rel="noopener">Privacidade e LGPD</a></li>
        </ul>
      </div>
    </div>
    <div class="ftr__legal">
      <p>Conteúdo de caráter meramente informativo, nos termos do Provimento CFOAB nº 205/2021 e do Código de Ética e Disciplina da OAB. Não constitui consulta jurídica nem promessa de resultado, e a análise de cada caso depende de contratação formal.</p>
      <p>© <?= date('Y') ?> <?= e($firm['name']) ?> · Sociedade de advogados registrada na OAB/SP</p>
    </div>
  </div>
</footer>
