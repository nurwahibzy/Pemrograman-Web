<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>

<body>
    <?PHP
    session_start();
    if ($_SESSION['status'] == 'login') {
        # code...
        echo "Selamat datang " . $_SESSION['username'];
    ?>
        <br><a href="sessionLogout.php">Logout</a>
    <?PHP
    } else {
        echo "Anda belum login, silahkan";
    ?>
        <br><a href="sessionLogout.php">Logout</a>
    <?PHP
    }
    ?>
</body>

</html>