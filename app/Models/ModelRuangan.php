<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRuangan extends Model
{

    public function AllData()
    {
        return $this->db->table('tbl_ruangan')
            ->join('tbl_penguji', 'tbl_penguji.id_penguji = tbl_ruangan.id_penguji')
            ->get()
            ->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_ruangan')
            ->insert($data);
    }

    public function add_data($data)
    {
        $this->db->table('siswa')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function hps_data($data)
    {
        $this->db->table('siswa')
            ->where('id', $data['id'])
            ->update($data);
    }
    public function hps_ruang($data)
    {
        $this->db->table('tbl_ruangan')
            ->where('id_ruangan', $data['id_ruangan'])
            ->delete($data);
    }

    public function detail($id_ruangan)
    {
        return $this->db->table('tbl_ruangan')
            ->join('tbl_penguji', 'tbl_penguji.id_penguji = tbl_ruangan.id_penguji', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_ruangan.id_ta', 'left')
            ->where('id_ruangan', $id_ruangan)
            ->where('status', '1')
            ->get()
            ->getRowArray();
    }

    public function jml_siswa($id_ruangan)
    {
        return $this->db->table('siswa')
            ->where('id_ruangan', $id_ruangan)
            ->where('jenis_kelamin', 'Laki-laki')
            ->countAllResults();
    }

    public function datasiswa($id_ruangan)
    {
        return $this->db->table('siswa')
            ->join('tbl_ruangan', 'tbl_ruangan.id_ruangan = siswa.id_ruangan')
            ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah')
            ->orderBy('nama_lengkap', 'ASC')
            ->where('tbl_ruangan.id_ruangan', $id_ruangan)
            ->get()
            ->getResultArray();
    }

    public function siswablmpuna()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah')
            // ->orderBy('id_kelas', 'DESC')
            ->where('id_ruangan = 0')
            ->where('status', '1')
            ->get()
            ->getResultArray();
    }
}
