<?PHP

namespace Classes;

abstract class EntitasTerbang
{
    protected $nama;
    protected $jumlahSayap;

    public function __construct($nama = '', $jumlahSayap = 0)
    {
        $this->nama = $nama;
        $this->jumlahSayap = $jumlahSayap;
    }

    public abstract function terbang();

    public abstract function getNama();

    public abstract function setNama($nama);
}
