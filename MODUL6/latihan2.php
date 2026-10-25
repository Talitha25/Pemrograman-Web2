<?php
class pengguna{
    public $nama;
    public $email;

    public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
class mahasiswa extends pengguna{
    public $nim;
    public $prodi;
}
$mhs1 = new mahasiswa();
$mhs1->nama = "Talitha";
$mhs1->email = "Talitha@gmail.com";
$mhs1->nim = "067";
$mhs1->prodi = "Sistem Informasi";

$mhs1->tampilkanData();
echo "NIM: " . $mhs1->nim . "<br>";
echo "Program Studi: " . $mhs1->prodi . "<br>";
?>