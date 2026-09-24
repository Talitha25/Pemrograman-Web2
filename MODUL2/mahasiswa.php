<?php

class Mahasiswa{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tentukanGrade(){
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
    public function tampilkanData(){
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br><br>";
    }
}

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nim = "23001";
$mahasiswa1->nama = "Andi";
$mahasiswa1->prodi = "Sistem Informasi";
$mahasiswa1->nilai = 85;

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nim = "23002";
$mahasiswa2->nama = "Liya";
$mahasiswa2->prodi = "Sistem Informasi";
$mahasiswa2->nilai = 70;

$mahasiswa1->tampilkanData();
$mahasiswa2->tampilkanData();
?>