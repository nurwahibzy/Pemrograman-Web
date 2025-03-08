<?PHP
class Model
{
    private $_dbConnection;

    public function __construct()
    {
        $this->_dbConnection = new PDO('mysql:host=localhost:3306;dbname=buku_kontak', 'root', '');

        echo "Koneksi DB berhasil <br>";
    }

    function tambahKontakBaru($nama,$nomorTelepon,$email,$alamat)  {
        $sql = "INSERT INTO kontak (nama,nomor_telepon,email,alamat) VALUES ('$nama','$nomorTelepon','$email','$alamat')";

        $this->_dbConnection->exec($sql);
    }

    function ambilSemuaKontak() {
        $sql = "SELECT * FROM kontak";

        $statement = $this->_dbConnection->prepare($sql);

        $statement->execute();  

        $kontakList = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $kontakList;
    }
}
