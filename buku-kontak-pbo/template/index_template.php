<!-- index_template.php -->
<html>

<head>
    <title>Buku Kontak Online</title>
</head>

<body>
    <h1>Buku Kontak Online V1.0</h1>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td><label for="nama">nama:</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="no_telp">no_telp:</label></td>
                <td><input type="text" name="nomor_telepon" id="nomor_telepon"></td>
            </tr>
            <tr>
                <td><label for="email">email:</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="alamat">alamat:</label></td>
                <td><textarea type="text" name="alamat" id="alamat"></textarea></td>
            </tr>
            <tr>
                <td><button name="submit" type="submit" value="Simpan">tambah</button></td>
            </tr>
        </table>
    </form>
    <table>
        <thead>
            <td>no</td>
            <td>nama</td>
            <td>no telp</td>
            <td>email</td>
            <td>alamat</td>
        </thead>
        <tbody>
            <?PHP foreach ($allKontak as $kontak) { ?>
                <tr>
                    <td><?= $kontak['id'] ?></td>
                    <td><?= $kontak['nama'] ?></td>
                    <td><?= $kontak['nomor_telepon'] ?></td>
                    <td><?= $kontak['email'] ?></td>
                    <td><?= $kontak['alamat'] ?></td>
                    </tr>
            <?PHP } ?>
        </tbody>
    </table>
</body>

</html>