<?php
/**
 * Author  : Almuhajir, Este
 * Project : Helpdesk CI4 - Konsep CI3
 * Deskripsi: Controller beranda menggunakan model  gaya CI3.
 * Company : Badan Kepegawaiann Aceh
 */
namespace App\Controllers;

use App\Models\KecamatanModel;
use App\Models\DesaModel;

class Home extends BaseController
{
    public function index()
    {
        $kecamatanModel = new KecamatanModel();
        $desaModel = new DesaModel();

        // Pakai fungsi manual dari model ini konsep saya ringkas dengan ci3 
        $data['kecamatan'] = $kecamatanModel->getSemuadataKecamatan();
        $data['desa'] = $desaModel->getSemuadataDesa();

        return view('frontend/beranda', $data);
    }
}
