<?php 

// function cetak(Produk $produk){
//     if($produk->durasi == 0 or $produk->tipe == "Komik"){
//         $str = "{$produk->tipe} : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ~ {$produk->halaman} halaman.";
//     }
//     else if($produk->halaman == 0 or $produk->tipe == "Game"){
//     $str = "{$produk->tipe} : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ~ {$produk->durasi} jam.";
//     }
//     return $str;
// }

class Produk{
    public 
    $judul, 
    $penulis, 
    $penerbit, 
    $harga,
    $halaman,
    $durasi,
    $tipe;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0, $halaman=0, $durasi=0, $tipe="tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
        $this->tipe = $tipe;
    }
     public  function getLabel(){
        return "{$this->penulis}, {$this->penerbit}";
    }
    public function cetak(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        if($this->durasi == 0 or $this->tipe == "Komik"){
            $str .= "- {$this->halaman} halaman.";
        }
        else if($this->halaman == 0 or $this->tipe == "Game"){
            $str .= "~ {$this->durasi} jam.";
        }
        return $str;
    }
}

$produk1 = new Produk("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000,223,0,"Komik");
$produk2 = new Produk("Tetris","Alexey Pajitnov","Tetris, Inc.",684000,0,10000,"Game");
var_dump($produk1);
var_dump($produk2);
echo $produk1->cetak()."<br>";
echo $produk2->cetak()."<br>";
// echo cetak($produk1)."<br>";
// echo cetak($produk2)."<br>";
?>