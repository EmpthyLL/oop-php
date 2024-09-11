<?php 
require_once "app/init.php";

$doraemon = new Komik("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000,245);
$tetris = new Game("Tetris","Alexey Pajitnov","Tetris, Inc.",684000,10000);

$print = new TampilkanProduk();
$print->setListProduk([$doraemon,$tetris]);
echo $print->cetak()."<hr>";

//==================================================================================//

use app\produk\User as ProdukUser;
use app\service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();

?>