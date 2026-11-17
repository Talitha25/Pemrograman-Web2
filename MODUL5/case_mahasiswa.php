<?php

class Mahasiswa {

    private $nim;
    private $nama;
    private $prodi;
    private $nilai;
    private $semester;

    public function __construct($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            $this->nilai = null;
        }
    }

    public function tentukanGrade() {
    if ($this->nilai >= 80) {
        return "A";
    } elseif ($this->nilai >= 70) {
        return "B";
    } elseif ($this->nilai >= 60) {
        return "C";
    } elseif ($this->nilai >= 50) {
        return "D";
    } elseif ($this->nilai >= 1) {
        return "E";
    } else {
        return "Nilai tidak valid";
    }
}

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function getSemester() {
        return $this->semester;
    }
}

$mhs1 = new Mahasiswa(
    "123456",
    "Kelompok6",
    "Sistem Informasi",
    "5"
);

$mhs1->setNilai(120);

echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Nilai: " . ($mhs1->getNilai() ?? "-") . "<br>";
echo "Grade: " . $mhs1->tentukanGrade() . "<br>";
echo "Prodi: " . $mhs1->getProdi() . "<br>";
echo "Semester: " . $mhs1->getSemester() . "<br>";
?>