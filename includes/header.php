<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= e($cfg['her']) ?> ♥ <?= e($cfg['him']) ?></title>
  <meta name="theme-color" content="#2a0f1e">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,500;1,300;1,500&family=Jost:wght@300;400;500&family=Pinyon+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="petals" id="petals" aria-hidden="true"></div>
<?php if (!empty($cfg['music']) && is_file(__DIR__ . '/../assets/' . basename($cfg['music']))): ?>
  <audio id="bgm" loop src="assets/<?= e($cfg['music']) ?>"></audio>
  <button class="music" id="musicBtn" aria-label="Tocar música">♪</button>
<?php endif; ?>
<main>
