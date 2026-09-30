<?php
class Produk
{
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    public function __construct($kode, $nama, $harga, $stok){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $this->hitungDiskon();
    }
    public function hitungDiskon(){
        if ($this->stok > 15) {
            return 10;
        } else {
            return 0;
        }
    }
    public function hitungNilaiStok(){
        return $this->harga * $this->stok;
    }
    public function hitungPotongan(){
        return $this->harga * ($this->diskon / 100);
    }
    public function hitungHargaDiskon(){
        return $this->harga - $this->hitungPotongan();
    }
    public function tampilkanData(){
        echo "<h3>Data Produk</h3>";
        echo "Kode: " . $this->kode . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";

        echo "Nilai Stok: Rp " .
             number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";

        echo "Diskon: " . $this->diskon . "%<br>";

        echo "Potongan Harga: Rp " .
             number_format($this->hitungPotongan(), 0, ',', '.') . "<br>";

        echo "Harga Setelah Diskon: Rp " .
             number_format($this->hitungHargaDiskon(), 0, ',', '.') . "<br>";
    }
}
$produk1 = new Produk("P001", "Laptop", 7000000, 10);
$produk2 = new Produk("P002", "Smartphone", 5000000, 20);

$produk1->tampilkanData();
echo "<hr>";
$produk2->tampilkanData();
?>