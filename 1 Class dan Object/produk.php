<?php 

class Produk{
    public $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0;
    public  function getInfo(){
        return "{$this->judul} by {$this->penulis}, publish by {$this->penerbit}.";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";

var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Ganja";
$produk2->genre = "Sain";
var_dump($produk2->judul);
var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Fujiko Fujio";
$produk3->penerbit = "Shogakukan Inc";
$produk3->harga = 1254000;
$produk3->genre = "Anak-anak";
var_dump($produk3);
echo $produk3->getInfo()."<br>";;

?>