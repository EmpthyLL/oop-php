<?php 

class Produk{
    public 
    $judul, 
    $penulis, 
    $penerbit, 
    $harga;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
     public  function getInfo(){
        return "{$this->judul} by {$this->penulis}, publish by {$this->penerbit}.";
    }
}

$produk1 = new Produk("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000);
var_dump($produk1);
echo $produk1->getInfo()."<br>";;

$produk2 = new Produk("Naruto");
var_dump($produk2);
echo $produk2->getInfo()."<br>";;
?>