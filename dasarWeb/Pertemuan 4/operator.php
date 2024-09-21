<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah dari $a dan $b adalah $hasilTambah <br>";
echo "Hasil Kurang dari $a dan $b adalah $hasilKurang <br>";
echo "Hasil Kali dari $a dan $b adalah $hasilKali <br>";
echo "Hasil Bagi dari $a dan $b adalah $hasilBagi <br>";
echo "Sisa bagi dari $a dan $b adalah $sisaBagi <br>";
echo "Hasil pangkat dari $a pangkat $b adalah $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "HasilSama = $hasilSama <br>";
echo "hasilTidakSama = $hasilTidakSama <br>";
echo "HasilLebihKecil = $hasilLebihKecil <br>";
echo "HasilLebihBesar = $hasilLebihBesar <br>";
echo "HasilLebihKecilSama = $hasilLebihKecilSama <br>";
echo "HasilLebihBesarSama = $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "HasilAnd = $hasilAnd <br>";
echo "hasilOr = $hasilOr <br>";
echo "HasilNotA = $hasilNotA <br>";
echo "HasilNotB = $hasilNotB <br>";

echo "<br>";
echo "PenugasanTambah $a += $b = " . ($a += $b) ." <br> ";
echo "PenugasanKurang $a -= $b = " . ($a -= $b)." <br> ";
echo "PenugasanKali $a *= $b = " . ($a *= $b) ." <br> ";
echo "PenugasanBagi $a /= $b = " .( $a /= $b) ." <br> ";
echo "PenugasanSisaBagi $a %= $b = " . ($a %= $b) ." <br> ";
