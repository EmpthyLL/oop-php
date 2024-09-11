<?php 

require_once "app/init.php";

$doraemon = new Komik("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000,245);
$tetris = new Game("Tetris","Alexey Pajitnov","Tetris, Inc.",684000,10000);

$print = new TampilkanProduk();
$print->setListProduk([$doraemon,$tetris]);
echo $print->cetak();
?>