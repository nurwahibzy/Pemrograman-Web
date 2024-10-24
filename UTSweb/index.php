<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tabungan</title>
    <link rel="stylesheet" href="style/styleLogin.css">
    <?php
    session_start();
    if (isset($_SESSION['loginError'])) {
        echo '<script>alert("Username atau password tidak valid!");</script>';
        unset($_SESSION['loginError']);
    }
    ?>

</head>

<body>
    <div class="bodyLogin">
        <div class="form">
            <img src="img/uang.png" alt="uaangg">
            <h2>Tabungan pribadi</h2>
            <h4>Login</h4>
            <form action="proses_login.php" method="POST">
                <label for="name">Username:</label>
                <input type="text" placeholder="username" id="username" name="username" required><br><br>
                <label for="name">Password:</label>
                <input type="password" placeholder="password" id="password" name="password" required><br><br>
                <input type="submit" value="login" name="login">
            </form>
        </div>
    </div>
</body>

</html>