<?php 
abstract class Produk{
    protected 
    $judul, 
    $penulis, 
    $penerbit,
    $harga,
    $diskon = 0;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    abstract public  function getLabel();
    abstract public function cetak();
    public function getDiskon(){
        return $this->diskon;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul($judul){
        if(!is_string($judul)){
            return "Bukan String!";
        }
        $this->judul = $judul;
        return $this->judul;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenulis($penulis){
        if(!is_string($penulis)){
            return "Bukan String!";
        }
        $this->judul = $penulis;
        return $this->penulis;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit($penerbit){
        if(!is_string($penerbit)){
            return "Bukan String!";
        }
        $this->judul = $penerbit;
        return $this->penerbit;
    }
    public function getHarga(){
        return $this->harga - ($this->diskon/100 * $this->harga);
    }
    public function setHarga($harga){
        if(!is_string($harga)){
            return "Bukan String!";
        }
        $this->judul = $harga;
        return $this->harga;
    }
}
?>