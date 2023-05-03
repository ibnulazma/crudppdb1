<?php

namespace App\Controllers;

use App\Models\Suratmodel;

class Surat extends BaseController
{
    public function index()
    {
        $model = new Suratmodel();
        $data = $model->findAll();

        return view('ppdb/surat', [
            'siswa' => $data,
            'title' => 'SIAKAD',
            'subtitle' => 'Pengajuan Surat'
        ]);
    }

    public function save()
    {
        dd($this->request->getPost());
    }
}
