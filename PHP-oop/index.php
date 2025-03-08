<?PHP
require_once 'Classes/EntitasTerbang.php';
require_once 'Classes/KakakTua.php';
use Classes\EntitasTerbang,Classes\KakakTua;
function main() {
    echo ("Program dijalankan <br>");
    $et = new KakakTua("joni",2);
    $et->terbang();
    $et->mendarat();
}

main();