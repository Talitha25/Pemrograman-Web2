<?php
class pengguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama: " . $this->nama;
        echo "Email: " . $this->email;
    }
}
$pengguna1 = new pengguna();
$pengguna1->nama = "Talitha";
$pengguna1->email = "Talitha@gmail.com";
$pengguna1->tampilkanData();
?>