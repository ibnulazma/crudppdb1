<?php

namespace App\Controllers;

use App\Models\ModelPpdb;
use App\Models\ModelTa;
use App\Models\ModelSekolah;
use App\Models\ModelJenjang;
use App\Models\ModelPenguji;
use App\Models\ModelRuangan;
use Ifsnop\Mysqldump\Mysqldump;

class Test extends BaseController
{


    public function __construct()
    {
        helper('form');
        $this->ModelPpdb    = new ModelPpdb();
        $this->ModelTa      = new ModelTa();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelJenjang = new ModelJenjang();
        $this->ModelPenguji = new ModelPenguji();
        $this->ModelRuangan = new ModelRuangan();
    }


    public function index()
    {
        session();

        $data = [
            'title'             => 'SIAKADINKA',

        ];

        return view('ppdb/v_beranda', $data);
    }
}
