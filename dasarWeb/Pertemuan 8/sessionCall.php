<?PHP
session_start()
?>

<html lang="en">

<body>
    <?PHP
    echo "Favorite color is " . $_SESSION["favcolor"]."<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"].".";
    ?>
</body>

</html>