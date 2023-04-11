<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJadwal extends Model
{

    public function AllData($id_kelas)
    {
        return $this->db->table('tbl_jadwal')
            ->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_jadwal.id_mapel', 'left')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_mapel.id_kelas', 'left')
            ->join('tbl_guru', 'tbl_guru.id_guru = tbl_jadwal.id_guru', 'left')
            ->where('tbl_jadwal.id_kelas', $id_kelas)
            // ->orderBy('tbl_jadwal.smt', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function mapel($id_kelas)
    {
        return $this->db->table('tbl_mapel')
            ->where('id_kelas', $id_kelas)
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_jadwal')
            ->insert($data);
    }
}
