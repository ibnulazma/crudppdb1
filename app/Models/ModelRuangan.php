<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRuangan extends Model
{

    public function AllData()
    {
        return $this->db->table('tbl_ruangan')
            ->get()
            ->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_ruangan')
            ->insert($data);
    }
}
