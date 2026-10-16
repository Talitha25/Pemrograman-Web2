<?php
class mahasiswa{
    public $nama;
    private $nilai;

    public function setNama($nama){
        $this->nama=$nama;
    }
}
$mhs1 = new mahasiswa();
echo "Nama: " . $mhs1->nama;
?>