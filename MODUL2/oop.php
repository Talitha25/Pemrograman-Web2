<?php
class mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;
    public function tampilkanData(){
    echo "NIM : ".$this->nim."<br>";
    echo "Nama : ".$this->nama."<br>";
    echo "Prodi : ".$this->prodi."<br>";
    echo "Semester : ".$this->semester."<br>";
    }
}
    $mhs1=new mahasiswa();
    $mhs1->nim="123";
    $mhs1->nama="Talitha";
    $mhs1->prodi="Sistem Informasi";
    $mhs1->semester="5"."<br>";
    $mhs1->tampilkanData();

    $mhs2=new mahasiswa();
    $mhs2->nim="1234";
    $mhs2->nama="Intan";
    $mhs2->prodi="Sistem Informasi";
    $mhs2->semester="5";
    
    $mhs2->tampilkanData();
?>