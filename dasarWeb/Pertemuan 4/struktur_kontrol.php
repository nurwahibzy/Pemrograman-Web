<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>";
echo "Atlet tersebut memerlukan $hari  hari untukk mencapai jarak 500 kilometer";

echo "<br>";
echo "<br>";
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 5;
$jumlahBuah = 5;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

echo "<br>";
echo "<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";
echo "<br>";
echo "Ada soal cerita : 
Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika.<br>
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. <br>
Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata <br>
setelah mengabaikan nilai tertinggi dan terendah. <br>
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br>";

$nilaiMahasiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sorting
for ($i = 0; $i < count($nilaiMahasiswa) - 1; $i++) {
    for ($j = 0; $j < count($nilaiMahasiswa) - $i - 1; $j++) {
        if ($nilaiMahasiswa[$j] > $nilaiMahasiswa[$j + 1]) {
            $temp = $nilaiMahasiswa[$j];
            $nilaiMahasiswa[$j] = $nilaiMahasiswa[$j + 1];
            $nilaiMahasiswa[$j + 1] = $temp;
        }
    }
}

$totalNilai = 0;
for ($i = 2; $i < count($nilaiMahasiswa) - 2; $i++) {
    $totalNilai += $nilaiMahasiswa[$i];
}

echo "<br>";
echo "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";

echo "<br>";
echo "<br>";
echo "Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. <br>
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. <br>
Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.";

$total = 120000;
$diskon = 0.2;
if ($total > 100000) {
    $total -= ($total * $diskon);
}
echo "<br>";
echo "<br>";
echo "Jadi total yang harus dibayar setelah diskon sebesar $total";
