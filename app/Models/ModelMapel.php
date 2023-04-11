<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMapel extends Model
{

    public function AllData($id_kelas)
    {
        return $this->db->table('tbl_mapel')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_mapel.id_kelas', 'left')
            ->join('tbl_guru', 'tbl_guru.id_guru = tbl_kelas.id_guru', 'left')
            ->where('tbl_mapel.id_kelas', $id_kelas)
            // ->orderBy('tbl_jadwal.smt', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function detail($id_kelas)
    {
        return $this->db->table('tbl_kelas')
            ->join('tbl_guru', 'tbl_guru.id_guru = tbl_kelas.id_guru', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_kelas.id_ta', 'left')
            ->where('id_kelas', $id_kelas)
            ->get()
            ->getRowArray();
    }




    public function mapel($id_kelas)
    {
        return $this->db->table('tbl_mapel')
            ->where('id_kelas', $id_kelas)
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_mapel')
            ->insert($data);
    }
}
