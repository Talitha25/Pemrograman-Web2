<?php
require_once __DIR__ . '/../models/mahasiswaModel.php';
class mahasiswaController {
    public function index() {
        $model = new mahasiswaModel();
        $data = [ "mahasiswa" =>$model->getAll() ];
        require __DIR__ . '/../views/mahasiswa/index.php';
    }
}
?>