<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenguji extends Model
{
    public function login_user($email, $password)
    {
        return $this->db->table('tbl_penguji')->where([
            'email' => $email,
            'password' => $password
        ])->get()->getRowArray();
    }

    public function AllData()
    {
        return $this->db->table('tbl_penguji')->join('tbl_ruangan', 'tbl_ruangan.id_ruangan= tbl_penguji.id_ruangan')
            ->get()
            ->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_penguji')
            ->insert($data);
    }
}
