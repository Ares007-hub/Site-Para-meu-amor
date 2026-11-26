(() => {
  'use strict';
  // Pétalas caindo
  const box = document.getElementById('petals');
  if (box && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const n = innerWidth < 600 ? 14 : 26;
    for (let i = 0; i < n; i++) {
      const p = document.createElement('span');
      p.className = 'petal';
      p.style.cssText = `left:${Math.random() * 100}%;--s:${8 + Math.random() * 12}px;--t:${9 + Math.random() * 10}s;--dl:-${Math.random() * 15}s;--x:${(Math.random() - .5) * 200}px`;
      box.appendChild(p);
    }
  }

  // Revelar ao rolar
  const io = new IntersectionObserver(es => es.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
  }), { threshold: .15 });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));

  // Contador ao vivo
  const start = new Date(window.START).getTime();
  const $ = id => document.getElementById(id);
  const pad = n => String(n).padStart(2, '0');
  const tick = () => {
    const s = Math.max(0, Math.floor((Date.now() - start) / 1000));
    $('cD').textContent = Math.floor(s / 86400);
    $('cH').textContent = pad(Math.floor(s % 86400 / 3600));
    $('cM').textContent = pad(Math.floor(s % 3600 / 60));
    $('cS').textContent = pad(s % 60);
  };
  if ($('cD')) { tick(); setInterval(tick, 1000); }

  // Cartas que viram
  document.querySelectorAll('.flip').forEach(c => c.addEventListener('click', () => c.classList.toggle('on')));

  // Lightbox
  const lb = $('lightbox'), img = $('lbImg'), cap = $('lbCap');
  const open = f => { if (!f.dataset.src) return; img.src = f.dataset.src; img.alt = cap.textContent = f.dataset.cap; lb.hidden = false; };
  document.querySelectorAll('.polaroid').forEach(f => {
    f.addEventListener('click', () => open(f));
    f.addEventListener('keydown', e => (e.key === 'Enter') && open(f));
  });
  const close = () => lb.hidden = true;
  $('lbClose').addEventListener('click', close);
  lb.addEventListener('click', e => e.target === lb && close());
  addEventListener('keydown', e => e.key === 'Escape' && close());

  // Música
  const bgm = $('bgm'), btn = $('musicBtn');
  if (bgm && btn) btn.addEventListener('click', () => {
    bgm.paused ? bgm.play() : bgm.pause();
    btn.classList.toggle('on', !bgm.paused);
  });
})();
