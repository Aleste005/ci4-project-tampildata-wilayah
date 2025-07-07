<?php

namespace App\Controllers;
use App\Models\KecamatanModel;
use App\Models\DesaModel;

class Home extends BaseController
{
    public function index()
    {
        $kecamatanModel = new KecamatanModel();
        $desaModel = new DesaModel();

        $data['kecamatan'] = $kecamatanModel->findAll();
        $data['desa'] = $desaModel->findAll();

        return view('frontend/beranda', $data);
    }
}
