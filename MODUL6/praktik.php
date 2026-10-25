<?php
class Pengguna
{
    protected $nama;
    protected $email;

    public function __construct($nama, $email)
    {
        $this->nama  = $nama;
        $this->email = $email;
    }

    public function tampilkanData()
    {
        echo "Nama  : {$this->nama}<br>";
        echo "Email : {$this->email}<br>";
    }

    public function tampilkanPeran()
    {
        echo "Peran : Pengguna umum<br>";
    }
}
class Administrasi extends Pengguna
{
    private $idPegawai;
    private $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian)
    {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian    = $bagian;
    }
    public function tampilkanData()
    {
        parent::tampilkanData();
        echo "ID Pegawai : {$this->idPegawai}<br>";
        echo "Bagian     : {$this->bagian}<br>";
    }

    public function tampilkanPeran()
    {
        echo "Peran : Tenaga Administrasi pada bagian {$this->bagian}, "
           . "bertugas mengelola dokumen dan administrasi kantor.";
    }
}

$admin = new Administrasi("Kelompok 6", "kelompok6@gmail.com", "PGW-001", "Keuangan");

echo "<h3>Data Administrasi</h3>";
$admin->tampilkanData();

echo "<h3>Peran</h3>";
$admin->tampilkanPeran();