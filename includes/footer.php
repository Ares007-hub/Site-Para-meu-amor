</main>
<footer class="footer">
  <p class="script"><?= e($cfg['her']) ?> &amp; <?= e($cfg['him']) ?></p>
  <p>Feito com todo o amor do mundo.</p>
</footer>
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" hidden>
  <button class="lb-close" id="lbClose" aria-label="Fechar">×</button>
  <figure><img id="lbImg" alt=""><figcaption id="lbCap"></figcaption></figure>
</div>
<script>window.START = "<?= date('c', strtotime($cfg['start'])) ?>";</script>
<script src="assets/js/main.js"></script>
</body>
</html>
