<?php
$patern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($patern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "\n";
} else {
    echo "Tidak ada yang cocok!" . "\n";
}
