<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();

        $data = [
            'mahasiswa' => $model->getAll()
        ];
        //dd($data);
        return view('mahasiswa/index', $data);
    }
}
