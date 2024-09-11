<?php 
class Game extends Produk implements InfoProduk{
    private $durasi;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$durasi=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->durasi = $durasi;
    }
    public function getProduk(){
        $str = "Game : {$this->cetak()} ~ {$this->durasi} jam.";
        return $str;
    }
    public function getHarga(){
        return $this->harga;
    }
    public function setDurasi($durasi){
        if(!is_integer($durasi)){
            return "Bukan String!";
        }
        $this->$durasi = $durasi;
        return $this->$durasi;
    }
    public function getDurasi(){
        return $this->durasi;
    }
    public  function getLabel(){
       return "{$this->penulis}, {$this->penerbit}";
   }
   public function cetak(){
       $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
       return $str;
   }
}
?>