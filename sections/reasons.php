<section class="section reasons">
  <h2 class="title reveal">Por que eu te amo</h2>
  <p class="note reveal">toque nos corações</p>
  <div class="cards">
  <?php foreach ($cfg['reasons'] as $r): ?>
    <button class="flip reveal" type="button">
      <span class="face front">♥<strong><?= e($r[0]) ?></strong></span>
      <span class="face back"><?= e($r[1]) ?></span>
    </button>
  <?php endforeach; ?>
  </div>
</section>
