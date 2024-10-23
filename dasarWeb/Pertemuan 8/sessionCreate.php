<?PHP
session_start()
?>

<html lang="en">

<body>
    <?PHP
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>
</body>

</html>