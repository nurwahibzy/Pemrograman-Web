<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Data Siswa</title>
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#data").slideToggle("slow");
            });
        });
    </script>
    <style>
        #flip {
            text-align: center;
            background-color: aqua;
            padding: 5px;
        }

        .container {
            padding: 20px;
        }

        h1,
        h3 {
            text-align: center;
        }

        th {
            background-color: yellow;
        }

        td {
            width: 100px;
            background-color: greenyellow;
        }

        table {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 10;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1 id="judul">Data siswa</h1>
        <div id="flip">Klik untuk memunculkan data</div>
        <div id="data">
            <table cellpadding="10">
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php
                $siswa = array(
                    array("Nur", 19, "1A", "Malang"),
                    array("Wahib", 20, "1B", "madiun"),
                    array("Zakki", 21, "1C", "Mojokerto"),
                    array("Yahya", 22, "1D", "Kediri"),
                );

                for ($i = 0; $i < count($siswa); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < count($siswa[0]); $j++) {
                        echo "<td>" . $siswa[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                function hitungRata($siswa)
                {
                    // menghitung rata-rata
                    $total = 0;
                    for ($j = 0; $j < count($siswa[0]); $j++) {
                        $total +=  $siswa[$j][1];
                    }
                    $rata = 0;
                    $rata = $total / count($siswa);
                    return $rata;
                }
                ?>

            </table>
            <?php
            echo "<h3>Rata rata umur siswa : " . hitungRata($siswa) . " tahun </h3>";
            ?>
        </div>
        <div> </div>
    </div>

</body>

</html>