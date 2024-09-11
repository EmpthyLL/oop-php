<?php 

// class GetInfo{
//     public function cetak(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//         return $str;
//     }
// }
function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
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
     public  function getLabel(){
        return "{$this->penulis}, {$this->penerbit}";
    }
}

$produk1 = new Produk("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000);
var_dump($produk1);
// $infoProduk1 = new GetInfo();
// echo $infoProduk1->cetak($produk1)."<br>";;
echo cetak($produk1)."<br>";;
?>