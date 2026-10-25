<?php
class pengguna{
    protected $nama;
    protected $email;
    public function __construct($nama, $email){
        $this->nama = $nama;
        $this->email = $email;
    }
    public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
     public function tampilkanPeran(){
        echo "Peran: Pengguna Umum<br>";
    }
}
class mahasiswa extends pengguna{
    private $nim, $prodi;
    public function __construct($nama, $email, $nim, $prodi){
    parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }
    public function tampilkanData(){
        parent::tampilkanData();
            echo "NIM: " . $this->nim . "<br>";
            echo "Program Studi: " . $this->prodi . "<br>";
        }
    public function tampilkanPeran(){
        echo "Peran: Mahasiswa<br>";
    }
}
class dosen extends pengguna{
    private $nidn, $bidangKeahlian;
    public function __construct($nama, $email, $nidn, $bidangKeahlian){
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }
    public function tampilkanData(){
        parent::tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: " . $this->bidangKeahlian . "<br>";
    }
    public function tampilkanPeran(){
        echo "Peran: Dosen<br>";
    }
}
$mhs = new mahasiswa("Talitha", "Talitha@gmail.com", "067", "Sistem Informasi");
$dosen = new dosen("Bapak Nafis", "nafis@gmail.com", "1234", "Pemrograman Web2");

echo "<h2>Data Mahasiswa</h2>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();
echo "<hr>";
echo "<h2>Data Dosen</h2>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();
?>