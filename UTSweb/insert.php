<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style/styleInsert.css">
</head>

<body>
    <form action="proses_insert.php" method="post">
        <label for="pemasukan">Pemasukan : </label>
        <input type="text" placeholder="contoh :  100000" id="pemasukan" name="pemasukan" required><br><br>
        <label for="pemasukan">Pengeluaran : </label>
        <input type="text" placeholder="contoh : -100000" id="pengeluaran" name="pengeluaran" required><br><br>
        <p><i>nb: Untuk pengeluaran gunakan tanda (-)</i></p>

        <input type="submit" value="submit" name="submit">
        <a href="./dashboard.php"> batal</a>
    </form>
</body>

</html>