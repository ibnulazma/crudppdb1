<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenguji extends Model
{
    public function login_user($email, $password)
    {
        return $this->db->table('tbl_penguji')->where([
            'username' => $email,
            'password' => $password
        ])->get()->getRowArray();
    }

    public function AllData()
    {
        return $this->db->table('tbl_penguji')
            // ->join('tbl_penguji', 'tbl_penguji.id_penguji= tbl_ruangan.id_penguji')
            ->get()
            ->getResultArray();
    }
    public function AllNilai()
    {
        return $this->db->table('tbl_nilai')
            ->join('siswa', 'siswa.id= tbl_nilai.id_siswa')
            ->get()
            ->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_penguji')
            ->insert($data);
    }
    public function add_nilai($data)
    {
        $this->db->table('tbl_nilai')
            ->insert($data);
    }


    public function DataPenguji()
    {
        return $this->db->table('tbl_penguji')
            ->where('username', session()->get('username'))
            ->get()->getRowArray();
    }

    public function walas($id_penguji)
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun')
            ->join('tbl_ruangan', 'tbl_ruangan.id_ruangan = siswa.id_ruangan')
            ->join('tbl_penguji', 'tbl_penguji.id_penguji = tbl_ruangan.id_penguji')
            ->where('tbl_ruangan.id_penguji', $id_penguji)
            ->where('tbl_ta.id_ta', '4')
            ->get()->getResultArray();
    }

    public function detail($id_penguji)
    {
        return $this->db->table('tbl_penguji')
            ->where('id_penguji', $id_penguji)
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('tbl_penguji')
            ->where('id_penguji', $data['id_penguji'])
            ->update($data);
    }
}
