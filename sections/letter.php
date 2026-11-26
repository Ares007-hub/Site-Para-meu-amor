<section class="section letter-wrap">
  <article class="letter reveal">
    <h2 class="script"><?= e($cfg['letter_title']) ?></h2>
    <?php foreach ($cfg['letter'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
    <p class="sign script"><?= e($cfg['letter_sign']) ?>,<br><?= e($cfg['him']) ?></p>
  </article>
</section>
