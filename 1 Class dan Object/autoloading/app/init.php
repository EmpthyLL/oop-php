<?php 
// require_once "produk/TampilkanProduk.php";
// require_once "produk/InfoProduk.php";
// require_once "produk/Produk.php";
// require_once "produk/Komik.php";
// require_once "produk/Game.php";

spl_autoload_register(function( $class ) {
    require_once "produk/".$class.".php";
})

?>