<?php 

class TampilkanProduk{
    private $listProduk = [];

    public function setListProduk(array $list){
        $this->listProduk = $list;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK <br>";
        foreach($this->listProduk as $p){
            $str .= "- ".$p->getProduk(). "<br>";
        }
        return $str;
    }
}

interface InfoProduk{
    public function getProduk();
}

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

$doraemon = new Komik("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000,245);
$tetris = new Game("Tetris","Alexey Pajitnov","Tetris, Inc.",684000,10000);

$print = new TampilkanProduk();
$print->setListProduk([$doraemon,$tetris]);
echo $print->cetak();

?>