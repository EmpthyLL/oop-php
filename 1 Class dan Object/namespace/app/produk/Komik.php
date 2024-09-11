<?php 
class Komik extends Produk implements InfoProduk{
    private $halaman;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$halaman=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->halaman = $halaman;
    }
    public  function getLabel(){
       return "{$this->penulis}, {$this->penerbit}";
   }
   public function cetak(){
       $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
       return $str;
   }
    public function getProduk(){
        $str = "Komik : {$this->cetak()} - {$this->halaman} halaman.";
        return $str;
    }
    public function setHalaman($halaman){
        if(!is_integer($halaman)){
            return "Bukan String!";
        }
        $this->$halaman = $halaman;
        return $this->$halaman;
    }
    public function getHalaman(){
        return $this->halaman;
    }
}
?>