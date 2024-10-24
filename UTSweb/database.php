<?php
$serverName = "DESKTOPWAHIB\SQLEXPRESS"; 
$database = "tabungan"; 

try {
    // Membuat koneksi dengan PDO
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database");
    return $conn;

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

