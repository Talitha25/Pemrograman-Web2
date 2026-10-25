<?php
class pengguna{
    public function tampilkanPeran(){
        echo "Peran: Pengguna Sistem Informasi";
    }
}
class mahasiswa extends pengguna{
    public function tampilkanPeran(){
        echo "Peran: Mahasiswa";   
    }
}
class dosen extends pengguna{
    public function tampilkanPeran(){
        echo "Peran: Dosen";   
    }
}
$mhs = new mahasiswa();
$dosen = new dosen();
$mhs->tampilkanPeran();
echo "<br>";
$dosen->tampilkanPeran();
?>