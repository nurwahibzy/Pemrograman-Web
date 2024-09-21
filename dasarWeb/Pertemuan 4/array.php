<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilailulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus " . implode(', ', $nilailulus);

echo "<br>";
echo "<br>";
$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun:" . implode(',', $karyawanPengalamanLimaTahun);

echo "<br>";
echo "<br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";
echo "<br>";
echo "Ada soal cerita : <br>
Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. <br>
Guru tersebut memiliki data setiap siswa terdiri dari nama dan nilai. <br>
Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. <br>
Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90";

$daftarNilaiMtk = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$jumlahNilai = 0;
foreach ($daftarNilaiMtk as $nilaiMtk) {
    $jumlahNilai += $nilaiMtk[1];
}
$rataRata = $jumlahNilai / count($daftarNilaiMtk);
echo "<br>";
echo "nilai rata-rata adalah ; $rataRata";
echo "<br>";

foreach ($daftarNilaiMtk as $nilaiMtk) {
   if ($nilaiMtk[1] > $rataRata) {
    echo "$nilaiMtk[0] dengan nilai $nilaiMtk[1] <br>";
   }
}

echo "<br>";
