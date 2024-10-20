<?php
// Lokasi penyimpanan file yang diunggah
$targerDirectory = "documents/";

// periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targerDirectory)) {
    mkdir($targerDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles  = count($_FILES['files']['name']);

    // Loop melalui semua file yang di unggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targerDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah. <br>";
        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }
    }
} else {
    echo "Tidah ada file yang diunggah.";
}
