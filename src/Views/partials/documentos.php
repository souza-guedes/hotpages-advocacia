<?php
/**
 * @var array<string, mixed> $page
 */
$documents = $page['documents'];
$paths = $page['paths'];
$lastPath = count($paths) - 1;
?>
<section class="section" id="documentos" aria-labelledby="doc-t">
  <div class="wrap">
    <div class="section__head">
      <p class="eyebrow"><?= e($page['documents_eyebrow']) ?></p>
      <h2 class="h2" id="doc-t"><?= e($page['documents_title']) ?></h2>
    </div>
    <div class="dtabs" role="tablist" aria-label="Documentos e caminhos">
      <button type="button" role="tab" id="tab-kit" aria-controls="pn-kit" aria-selected="true">O que reunir</button>
      <button type="button" role="tab" id="tab-paths" aria-controls="pn-paths" aria-selected="false">Caminhos possíveis</button>
    </div>
    <div class="docs" data-tab="kit">
      <div class="kit of" id="pn-kit" role="tabpanel" aria-labelledby="tab-kit">
        <div class="dblock__head">
          <h3 class="h3">O que reunir</h3>
          <p><?= e($page['documents_lead']) ?></p>
        </div>
        <ul class="checks">
          <?php foreach ($documents as $doc): ?>
            <li><b><?= e($doc['title']) ?></b><span><?= e($doc['text']) ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="dpaths" id="pn-paths" role="tabpanel" aria-labelledby="tab-paths">
        <div class="dblock__head">
          <h3 class="h3">Caminhos possíveis</h3>
          <p><?= e($page['paths_lead']) ?></p>
        </div>
        <ol class="paths">
          <?php foreach ($paths as $i => $path): ?>
            <li>
              <b><?= e($path['title']) ?></b><span><?= e($path['text']) ?></span>
              <?php if ($i === $lastPath): ?>
                <a class="link arrow" href="#canais" data-jump="canais">Ver canais de atendimento</a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>
