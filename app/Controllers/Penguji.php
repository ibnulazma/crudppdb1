<?php

namespace App\Controllers;

use App\Models\ModelPenguji;

class Penguji extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelPenguji = new ModelPenguji();
    }


    public function index()
    {
        session();

        $penguji = $this->ModelPenguji->DataPenguji();
        $data = [
            'title' => 'PPDB INKA',
            'subtitle' => 'Penguji',
            'walas' => $this->ModelPenguji->walas($penguji['id_penguji']),
            'nilai' => $this->ModelPenguji->Allnilai()
        ];

        return view('penguji/penguji', $data);
    }

    public function addnilai()
    {
        $data = [
            'id_siswa'          => $this->request->getPost('id_siswa'),
            'btq'               => $this->request->getPost('btq'),
            'nilaibtq'          => $this->request->getPost('nilaibtq'),
            'nilailatin'        => $this->request->getPost('nilailatin'),
            'catatan'        => $this->request->getPost('catatan'),
        ];
        $this->ModelPenguji->add_nilai($data);
        session()->setFlashdata('pesan', 'Berhasil Disimpan !!!');
        return redirect()->to(base_url('penguji'));
    }
}
