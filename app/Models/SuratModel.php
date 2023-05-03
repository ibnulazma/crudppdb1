<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table                = 'tbl_ppdb';
    protected $primaryKey           = 'id_ppdb';

    protected $allowedFields        = [
        'nama_lengkap',
        'nisn',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_ibu',
    ];
}
