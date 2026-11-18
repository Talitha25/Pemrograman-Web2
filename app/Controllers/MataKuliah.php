<?php

namespace App\Controllers;

use App\Models\MatakuliahModel;

class Matakuliah extends BaseController
{
    public function index()
    {
        $model = new MatakuliahModel();
        $data['matakuliah'] = $model->findAll();

        return view('matakuliah/index', $data);
    }
}