<?php

namespace App\Models;

use CodeIgniter\Model;

class Suratmodel extends Model
{
    protected $table                = 'siswa';
    protected $primaryKey           = 'id';
    protected $allowedFields        = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'nama_ibu',
        'nisn',
    ];
}
