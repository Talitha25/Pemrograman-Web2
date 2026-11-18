<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();

        return view('dosen/index', $data);
    }
}