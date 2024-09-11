<?php 

class Produk{
    private 
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
     public  function getLabel(){
        return "{$this->penulis}, {$this->penerbit}";
    }
    public function getDiskon($diskon){
        return $this->diskon;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function cetak(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
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
    public function setHargat($harga){
        if(!is_string($harga)){
            return "Bukan String!";
        }
        $this->judul = $harga;
        return $this->harga;
    }
}

class Komik extends Produk{
    public $halaman;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$halaman=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->halaman = $halaman;
    }
    public function getKomik(){
        $str = "Komik : {$this->cetak()} - {$this->halaman} halaman.";
        return $str;
    }
}
class Game extends Produk{
    public $durasi;
    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$durasi=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->durasi = $durasi;
    }
    public function getGame(){
        $str = "Game : {$this->cetak()} ~ {$this->durasi} jam.";
        return $str;
    }
    public function getHarga(){
        return $this->harga;
    }
}

$doraemon = new Komik("Doraemon","Fujiko Fujio","Shogakukan Inc",1254000,245);
$tetris = new Game("Tetris","Alexey Pajitnov","Tetris, Inc.",684000,10000);
echo $doraemon->getKomik()."<br>";
echo $tetris->getGame()."<hr>";

//==================================================================================//

$doraemon->diskon = 30;
echo $doraemon->setDiskon(20)."<br>";
echo $doraemon->getHarga()."<hr>";

//==================================================================================//

$HP = new Produk("Vivo");
echo $HP->setJudul("Samsung")."<br>";
echo $HP->getJudul()."<br>";
?>