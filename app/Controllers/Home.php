<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home', ['title' => 'SIAKAD']);
    }

    public function mahasiswa()
    {
        return view('mahasiswa/index', ['title' => 'SIAKAD']);
    }

    public function dosen()
    {
        return view('dosen/index', ['title' => 'SIAKAD']);
    }

    public function matakuliah()
    {
        return view('matakuliah/index', ['title' => 'SIAKAD']);
    }

    public function tentang()
    {
        return view('tentang', ['title' => 'SIAKAD']);
    }
}
