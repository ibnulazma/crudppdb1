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
}
