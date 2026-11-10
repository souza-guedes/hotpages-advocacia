<?php
/**
 * @var array<string, mixed> $firm
 * @var string $whatsappUrl
 */
$emailParts = explode('@', $firm['email'], 2);
$emailDisplay = $emailParts[0] . '<wbr>@' . ($emailParts[1] ?? '');
?>
<section class="cta dark canais" id="canais" aria-labelledby="canais-t">
  <span class="cta__bar" aria-hidden="true"></span>
  <div class="wrap">
    <div class="canais__head">
      <p class="eyebrow">Canais de atendimento</p>
      <h2 class="h2" id="canais-t">Se quiser apresentar sua situação, escolha um canal.</h2>
      <p class="muted">Você decide se e por onde quer falar com o escritório.</p>
      <p class="hours"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span><b><?= e($firm['hours']) ?></b></span></p>
    </div>
    <div class="chs">
      <dl class="ch of">
        <dt><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20l1.3-4A8 8 0 1 1 8 18.7z"/><path d="M9.5 9.5c0 2.5 2.5 5 5 5l1-1.5-2-1-1 .8a4 4 0 0 1-2.3-2.3l.8-1-1-2z"/></svg>WhatsApp</dt>
        <dd><strong><?= e($firm['phone_display']) ?></strong>
          <span class="act"><a class="btn btn--light" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener">Abrir WhatsApp</a></span></dd>
      </dl>
      <dl class="ch of">
        <dt><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/></svg>Telefone</dt>
        <dd><strong><?= e($firm['phone_display']) ?></strong>
          <span class="act"><a class="btn btn--light" href="tel:<?= e($firm['phone_e164']) ?>">Ligar</a></span></dd>
      </dl>
      <dl class="ch of">
        <dt><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14"/><path d="M3 7l9 6 9-6"/></svg>E-mail</dt>
        <dd><strong><?= $emailDisplay ?></strong>
          <span class="act"><a class="btn btn--light" href="mailto:<?= e($firm['email']) ?>">Escrever e-mail</a></span></dd>
      </dl>
    </div>
    <details class="after" open>
      <summary><h3 class="cgroup__t">Depois do primeiro contato</h3></summary>
      <ol class="steps">
        <li><b>Você apresenta a situação</b><span>Pelo canal que preferir, com as informações que achar necessárias.</span></li>
        <li><b>Verificamos o tema</b><span>Confirmamos se o assunto está entre as áreas de atuação do escritório.</span></li>
        <li><b>Reunião de análise inicial</b><span>Se estiver, marcamos uma reunião. Honorários só na proposta formal de contratação.</span></li>
      </ol>
    </details>
  </div>
</section>
