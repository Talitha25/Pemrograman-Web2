<?php
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;

    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk             : " . $this->merk . "<br>";
        echo "Jenis            : " . $this->jenis . "<br>";
        echo "Status           : " . $this->status . "<br>";
    }

    public function statusKendaraan()
    {
        if ($this->status == "Tersedia") {
            return "Kendaraan dapat disewa";
        } else {
            return "Kendaraan sedang disewa";
        }
    }
}

class Pelanggan
{
    // Property
    public $id;
    public $nama;
    public $alamat;

    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama         : " . $this->nama . "<br>";
        echo "Alamat       : " . $this->alamat . "<br>";
    }
    public function sewaKendaraan($kendaraan)
    {
        if ($kendaraan->status == "Tersedia") {
            $kendaraan->status = "Disewa";

            echo $this->nama . " berhasil menyewa kendaraan "
                 . $kendaraan->merk . "<br>";
        } else {
            echo "Kendaraan " . $kendaraan->merk
                 . " sedang tidak tersedia.<br>";
        }
    }
}

// Membuat object kendaraan
$kendaraan1 = new Kendaraan();
$kendaraan1->nomor = "K001";
$kendaraan1->merk = "Toyota Avanza";
$kendaraan1->jenis = "Mobil";
$kendaraan1->status = "Tersedia";

$kendaraan2 = new Kendaraan();
$kendaraan2->nomor = "K002";
$kendaraan2->merk = "Honda Beat";
$kendaraan2->jenis = "Motor";
$kendaraan2->status = "Tersedia";

// Membuat object pelanggan
$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Andi";
$pelanggan1->alamat = "Kediri";

$pelanggan2 = new Pelanggan();
$pelanggan2->id = "P002";
$pelanggan2->nama = "Budi";
$pelanggan2->alamat = "Pare";

// Menampilkan data kendaraan
echo "<h3>Data Kendaraan</h3>";
$kendaraan1->tampilkanData();
echo $kendaraan1->statusKendaraan();
echo "<hr>";
$kendaraan2->tampilkanData();
echo $kendaraan2->statusKendaraan();
echo "<hr>";

// Menampilkan data pelanggan
echo "<h3>Data Pelanggan</h3>";
$pelanggan1->tampilkanData();
echo "<hr>";
$pelanggan2->tampilkanData();
echo "<hr>";

// Proses rental
echo "<h3>Proses Rental</h3>";
$pelanggan1->sewaKendaraan($kendaraan1);
$pelanggan2->sewaKendaraan($kendaraan1);
?>