<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getAll()
{
    return $this->findAll();
}
    public function getById($id)
{
    return $this->find($id);
}
    public function getDataMahasiswa()
{
    return $this->db
        ->table('mahasiswa')
        ->get()
        ->getResultArray();
}
    public function getByProdi()
{
    return $this->db
        ->table('mahasiswa')
        ->where('prodi', $prodi)
        ->get()
        ->getResultArray();
}
    public function getDataUrut()
{
    return $this->db
        ->table('mahasiswa')
        ->orderBy('nama', 'ASC')
        ->get()
        ->getResultArray();
}

    protected $table = 'mahasiswa';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}
