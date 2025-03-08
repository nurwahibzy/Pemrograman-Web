<?php

namespace src;

use Model;

require_once 'Model.php';

class Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
        $data = $_POST;

        //cek apakah button submit di klik
        if (isset($data['submit'])) {
            $nama = $data['nama'];
            $nomor_telepon = $data['nomor_telepon'];
            $email = $data['email'];
            $alamat = $data['alamat'];
            
            $this->model->tambahKontakBaru($nama,$nomor_telepon,$email,$alamat);
        }
        
        $allKontak = $this->model->ambilSemuaKontak();

        $view = new View('template/index_template.php');
        $view->setData(["allKontak"=>$allKontak]);
        $view->render();
    }
}
