<?PHP
session_start();
//menghapus semua session
session_destroy();
header("Location: index.php");