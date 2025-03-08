<?PHP

namespace Classes;

use Classes\Burung;

class KakakTua extends Burung
{

    public function __construct($nama)
    {
        parent::__construct($nama, 2,1);
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
