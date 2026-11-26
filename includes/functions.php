<?php
function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

function img_exists(string $file): bool { return is_file(__DIR__ . '/../assets/img/' . basename($file)); }

function days_together(string $start): int {
    return max(0, (int) floor((time() - strtotime($start)) / 86400));
}
