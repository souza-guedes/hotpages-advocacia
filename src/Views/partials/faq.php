<?php
/**
 * @var array<string, mixed> $page
 */
$faq = $page['faq'];
?>
<section class="section band--branco" id="perguntas" aria-labelledby="faq-t">
  <div class="wrap faq-ed">
    <div class="faq-ed__side">
      <div class="section__head">
        <p class="eyebrow"><?= e($page['faq_eyebrow']) ?></p>
        <h2 class="h2" id="faq-t"><?= e($page['faq_title']) ?></h2>
        <p class="muted"><?= e($page['faq_lead']) ?></p>
      </div>
      <div class="faq-help of">
        <b>Não encontrou sua dúvida?</b>
        <p class="muted">Você pode apresentar sua situação pelos canais oficiais do escritório.</p>
        <a class="link arrow" href="#canais" data-jump="canais">Ver canais de atendimento</a>
      </div>
    </div>
    <div class="faq-ed__main">
      <div class="acc">
        <?php foreach ($faq as $i => $item): ?>
          <details name="faq"<?= $i === 0 ? ' open' : '' ?>>
            <summary><?= e($item['q']) ?></summary>
            <div>
              <?php
              $answers = is_array($item['a']) ? $item['a'] : [$item['a']];
              foreach ($answers as $paragraph):
              ?>
                <p><?= e($paragraph) ?></p>
              <?php endforeach; ?>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
      <p class="faq-note"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 11v5M12 8v.01"/></svg><span><b>Conteúdo informativo.</b> As respostas explicam regras gerais e não substituem a análise individual de cada caso (Provimento CFOAB nº 205/2021).</span></p>
    </div>
  </div>
</section>
