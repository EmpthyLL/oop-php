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
?>