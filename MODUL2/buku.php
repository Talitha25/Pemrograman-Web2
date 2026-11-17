<?php
class buku{
    //property
    public $kode;
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function tampilkanData(){
    echo "Kode Buku : ".$this->kode."<br>";
    echo "Judul : ".$this->judul."<br>";
    echo "Penulis : ".$this->penulis."<br>";
    echo "Tahun Terbit : ".$this->tahunTerbit."<br>";
    }
}
$buku1 = new Buku();
    $buku1->kode="BK001";
    $buku1->judul="Home Sweet Loan";
    $buku1->penulis="Kalpika Marissa";
    $buku1->tahunTerbit="1975";
   
$buku1->tampilkanData();
?>