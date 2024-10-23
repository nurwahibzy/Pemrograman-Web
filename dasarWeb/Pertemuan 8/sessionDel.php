<?PHP
session_start()
?>

<html lang="en">

<body>
    <?PHP
    session_unset();
    session_destroy();

    echo "all session variables are now removed, and the session is destroyed";
    ?>
</body>

</html>