<?php
$cfg = require __DIR__ . '/config/config.php';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
foreach (['hero', 'counter', 'gallery', 'reasons', 'letter'] as $s) {
    require __DIR__ . "/sections/$s.php";
}
require __DIR__ . '/includes/footer.php';
