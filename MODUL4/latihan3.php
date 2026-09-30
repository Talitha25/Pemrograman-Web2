<?php
class Mahasiswa{
    public $nama;
    public $prodi;

    public function __construct($nama, $prodi){
        $this->nama = $nama;
        $this->prodi = $prodi;
    }
    public function tampilkanData(){
        echo "Nama: ".$this->nama."<br>";
        echo "Prodi: ".$this->prodi."<br>";
    }
}
$mhs1 = new Mahasiswa("Talitha", "Sistem Informasi");
$mhs2 = new Mahasiswa("Kirana", "Sistem Informasi");
$mhs1->tampilkanData();
echo "<hr>";
$mhs2->tampilkanData();
?>