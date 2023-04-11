<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{

    public function AllData()
    {
        return $this->db->table('tbl_kelas')
            ->join('tbl_guru', 'tbl_guru.id_guru = tbl_kelas.id_guru', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_kelas.id_ta', 'left')
            // ->orderBy('tbl_ppdb.nama_lengkap')
            ->get()
            ->getResultArray();
    }


    public function add($data)
    {
        $this->db->table('tbl_kelas')
            ->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_kelas')
            ->where('id_kelas', $data['id_kelas'])
            ->update($data);
    }
    public function delete_data($data)
    {
        $this->db->table('tbl_kelas')
            ->where('id_kelas', $data['id_kelas'])
            ->delete($data);
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

    public function datasiswa($id_kelas)
    {
        return $this->db->table('tbl_siswa')
            // ->join('tbl_ta', 'tbl_ta.id_ta = tbl_kelas.id_ta', 'left')
            ->orderBy('nama_lengkap', 'ASC')
            ->where('id_kelas', $id_kelas)
            ->get()
            ->getResultArray();
    }


    public function jml_siswa($id_kelas)
    {
        return $this->db->table('tbl_siswa')
            ->where('id_kelas', $id_kelas)
            ->countAllResults();
    }
}
