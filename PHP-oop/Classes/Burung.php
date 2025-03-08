<?PHP

namespace Classes;

use Classes\EntitasTerbang;

class Burung extends EntitasTerbang
{
    private $panjangParuh;
    public function __construct($nama, $jumlahSayap, $panjangParuh = 1)
    {
        parent::__construct($nama, $jumlahSayap);
        $this->panjangParuh = $panjangParuh;
    }

    public function terbang()
    {
        echo ("Burung {$this->nama} terbang, whuss <br>");
    }
    public function mendarat()
    {
        echo ("Burung {$this->nama} mendarat, jesss <br>");
    }

    public  function getNama()
    {
        return $this->nama;
    }

    public  function setNama($nama) {}
}
