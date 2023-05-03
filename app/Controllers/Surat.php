<?php

namespace App\Controllers;




use App\Models\Suratmodel;

use App\Controllers\BaseController;

class Surat extends BaseController
{



    public function index()
    {

        $model = new Suratmodel();
        $data = $model->findAll();

        return view('ppdb/surat', [
            'title' => 'SIAKAD',
            'subtitle' => 'Surat Keterangan',
            'siswa' => $data

        ]);
    }
}
