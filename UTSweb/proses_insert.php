<?php
session_start();
include "database.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($conn === null) {
        die("Koneksi ke database gagal.");
    }
    // inisialisasi nilai default
    $pemasukan = 0;
    $pengeluaran = -0;

    $pemasukan = (int) $_POST['pemasukan'];
    $pengeluaran = (int)$_POST['pengeluaran'];
    //mengambil saldo akhir tabungan
    $sql = "SELECT top(1)sisaTabungan FROM dataTabungan ORDER BY id DESC";

    $result = $conn->query($sql);
    $row = $result->fetch();

    $tabunganAwal = $row['sisaTabungan'];

    $sisaTabungan = $tabunganAwal + $pemasukan + $pengeluaran;

    $sql = "INSERT INTO dbo.dataTabungan (timestamp,tabunganAwal,pemasukan,pengeluaran,sisaTabungan) values (FORMAT(GETDATE(), 'yyyy-MM-dd HH:mm'), $tabunganAwal, $pemasukan, $pengeluaran, $sisaTabungan)";
    $data = $conn->query($sql);

    if ($data == true) {
        $_SESSION['insert'] = "sukses";
        header("Location: ./dashboard.php");
    } else {
        $_SESSION['insert'] = "gagal";
        header("Location: ./dashboard.php");
    }
    
}
