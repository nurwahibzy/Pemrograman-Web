<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Terindeks</title>
</head>

<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    // Menggunakan indeks
    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";
    echo $Listdosen[1] . "<br>";
    echo "<hr>";
    
    // Menggunakan perulangan
    foreach ($Listdosen as $x) {
        echo "$x <br>";
      }
    ?>

</body>

</html>