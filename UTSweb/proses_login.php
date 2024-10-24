<?php
session_start();
include "database.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($conn === null) {
    die("Koneksi ke database gagal.");
  }
  $username = $_POST['username'];
  $password = $_POST['password'];


  $sql = "SELECT * FROM dbo.users WHERE username = '$username' AND password = '$password'";
  $data = $conn->query($sql);
  $result = $data->fetch();

  // Memeriksa apakah ada baris yang cocok
  if (!empty($result)) {
    $_SESSION['user'] = "$username";
    header("Location:./dashboard.php");
  } else {
    $_SESSION['loginError'] = "Username atau password tidak valid!";
    header("Location:./index.php");
  }
}
