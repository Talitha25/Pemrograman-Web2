<?php
class Buku{
    public $judul;
    public $penulis;
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function tampilkanData(){
        echo "Judul: ".$this->judul."<br>";
        echo "Penulis: ".$this->penulis."<br>";
    }
}
$buku1 = new Buku("Pemrograman Web2", "Talitha");
$buku1->tampilkanData();
?>