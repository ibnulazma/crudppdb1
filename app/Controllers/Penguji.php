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

        $penguji = $this->ModelPenguji->DataPenguji();
        $data = [
            'title' => 'PPDB INKA',
            'subtitle' => 'Penguji',
            'walas' => $this->ModelPenguji->walas($penguji['id_penguji'])
        ];

        return view('penguji/penguji', $data);
    }
}
