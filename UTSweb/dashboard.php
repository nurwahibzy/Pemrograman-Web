<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/styleDashboard.css">
</head>

<body>
    <div class="bodyDashboard">
        <?php
        session_start();
        include "database.php";
        //mengambil saldo terakhir
        $sql = "SELECT top(1) sisaTabungan FROM dataTabungan ORDER BY id DESC";
        $result = $conn->query($sql);
        $row = $result->fetch();

        $tabunganSaatini = $row['sisaTabungan'];


        if (isset($_SESSION['insert'])) {
            if ($_SESSION['insert'] == 'sukses') {
                echo '<script>alert("Data berhasil di masukkan!");</script>';
            } else {
                echo '<script>alert("Data gagal di masukkan!");</script>';
            }
        }
        unset($_SESSION['insert']);

        //mengambil data dari database
        $sql = "SELECT FORMAT(timestamp, 'yyyy-MM-dd HH:mm') AS timestamp,id, tabunganAwal, pemasukan, pengeluaran, sisaTabungan FROM dbo.dataTabungan";
        $stmt = $conn->query($sql);
        $data = $stmt->fetchAll();
        ?>
        <h2>Haii <?= $_SESSION['user'] ?>, Selamat datang &#128513;</h2>
        <h3>Tabungan anda saat ini sejumlah Rp.<?= $tabunganSaatini ?> </h3>
        <div class="table">
            <table border="1px">
                <tr>
                    <td>No</td>
                    <td>Tanggal & Waktu</td>
                    <td>Tabungan Awal</td>
                    <td>Pemasukan</td>
                    <td>Pengeluaran</td>
                    <td>Sisa Tabungan</td>
                </tr>
                <?php
                $nomer = 0;
                if (isset($data)) {
                    foreach ($data as $d) {

                        echo "<tr>";
                        echo "<td>" . $d['id'] . "</td>";
                        echo "<td>" . $d['timestamp'] . "</td>";
                        echo "<td>Rp." . $d['tabunganAwal'] . "</td>";
                        echo "<td>Rp." . $d['pemasukan'] . "</td>";
                        echo "<td>Rp." . $d['pengeluaran'] . "</td>";
                        echo "<td>Rp." . $d['sisaTabungan'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
                }
                ?>

            </table>
        </div>
        <?PHP
        if (isset($_SESSION['user'])) {
            include "layout/footer.html";
        }
        ?>
    </div>
</body>

</html>