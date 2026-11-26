<section class="section gallery" id="fotos">
  <h2 class="title reveal">Nossos momentos</h2>
  <div class="grid">
  <?php foreach ($cfg['photos'] as $i => $p):
      $ok = img_exists($p['file']); $tilt = ($i % 2 ? 1 : -1) * (1 + $i % 3); ?>
    <figure class="polaroid reveal" style="--tilt:<?= $tilt ?>deg; --d:<?= $i * 80 ?>ms"
            <?= $ok ? 'data-src="assets/img/' . e($p['file']) . '"' : '' ?> data-cap="<?= e($p['caption']) ?>" tabindex="0">
      <div class="ph">
        <?php if ($ok): ?>
          <img src="assets/img/<?= e($p['file']) ?>" alt="<?= e($p['caption']) ?>" loading="lazy">
        <?php else: ?>
          <div class="ph-empty">♥<small>assets/img/<?= e($p['file']) ?></small></div>
        <?php endif; ?>
      </div>
      <figcaption><?= e($p['caption']) ?><?php if ($p['date']): ?><em><?= e($p['date']) ?></em><?php endif; ?></figcaption>
    </figure>
  <?php endforeach; ?>
  </div>
</section>
