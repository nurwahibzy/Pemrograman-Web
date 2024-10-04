<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #383838;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .data {
            margin: 10px 0;
            color: #555;
        }
        .data label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Dosen</h1>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis kelamin' => 'Perempuan'
        ];
        echo "<div class='data'><label>Nama:</label> {$Dosen['nama']} <br></div>";
        echo "<div class='data'><label>Domisili:</label> {$Dosen['domisili']} <br></div>";
        echo "<div class='data'><label>Jenis Kelamin:</label> {$Dosen['jenis kelamin']} <br></div>";
        ?>
    </div>
</body>

</html>
