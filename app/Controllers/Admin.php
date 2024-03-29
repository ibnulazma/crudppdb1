<?php

namespace App\Controllers;

use App\Models\ModelPpdb;
use App\Models\ModelTa;
use App\Models\ModelSekolah;
use App\Models\ModelJenjang;
use App\Models\ModelPenguji;
use App\Models\ModelRuangan;
use Ifsnop\Mysqldump\Mysqldump;

class Admin extends BaseController
{


    public function __construct()
    {
        helper('form');
        $this->ModelPpdb    = new ModelPpdb();
        $this->ModelTa      = new ModelTa();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelJenjang = new ModelJenjang();
        $this->ModelPenguji = new ModelPenguji();
        $this->ModelRuangan = new ModelRuangan();
    }


    public function index()
    {
        session();

        $data = [
            'title'             => 'SIAKADINKA',
            'subtitle'          => 'PPDB',
            'jumlahTotal'       => $this->ModelPpdb->jumlahTotal(),
            'jumlahLaki'        => $this->ModelPpdb->jumlahLaki(),
            'jumlahPerempuan'   => $this->ModelPpdb->jumlahPerempuan(),
            'jumlahSD'          => $this->ModelPpdb->jumlahSD(),
            'jumlahMI'          => $this->ModelPpdb->jumlahMI(),
            'datasekolah'       => $this->ModelPpdb->group_by(),
            'datatahun'         => $this->ModelTa->group_tahun(),
            'tahun'             => $this->ModelTa->AllData(),
            // 'sekolah'          => $this->ModelPpdb->group(),
        ];

        return view('ppdb/v_beranda', $data);
    }

    public function daftarMurid()
    {
        session();

        $data = [
            'title'         => 'SIAKADINKA',
            'subtitle'      => 'PPDB',
            'ppdb'          => $this->ModelPpdb->AllData(),
            'sekolah'       => $this->ModelSekolah->AllData(),
            'ta'            => $this->ModelTa->statusTa(),
            'jenjang'       => $this->ModelJenjang->AllData(),
        ];
        return view('ppdb/v_index', $data);
    }

    public function cetak()
    {
        session();

        $data = [
            'title'         => 'SIAKADINKA',
            'subtitle'      => 'PPDB',
            'ppdb'          => $this->ModelPpdb->AllData(),
            'sekolah'       => $this->ModelSekolah->AllData(),
            'ta'            => $this->ModelTa->statusTa(),
            'jenjang'       => $this->ModelJenjang->AllData(),
        ];
        return view('ppdb/v_cetak', $data);
    }



    public function tambahSiswa()
    {
        session();

        $data = [
            'title'         => 'SIAKADINKA',
            'subtitle'      => 'Add Siswa',
            'ppdb'          => $this->ModelPpdb->AllData(),
            'ta'            => $this->ModelTa->tahun(),
            'sekolah'       => $this->ModelSekolah->AllData(),
            'jenjang'       => $this->ModelJenjang->AllData(),
            'validation'    =>  \Config\Services::validation(),

        ];
        return view('ppdb/v_add', $data);
    }

    public function simpanDaftar()
    {
        if ($this->validate([
            'nik' => [
                'label' => 'NIK',
                'rules' => 'required|min_length[16]|is_unique[siswa.nik]',
                'errors' => [
                    'required' => '{field} Harap Diisi',
                    'min_length' => ' {field} Harus 16 Digit',
                    'is_unique' => ' {field} sudah terdaftar',

                ]
            ],
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tanggal_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


        ])) {


            $data = [
                'id_sekolah'    => $this->request->getPost('id_sekolah'),
                'id_jenjang'  => $this->request->getPost('id_jenjang'),
                'nik'           => $this->request->getPost('nik'),
                'nisn'          => $this->request->getPost('nisn'),
                'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
                'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
                'alamat'        => $this->request->getPost('alamat'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'nama_ibu'      => $this->request->getPost('nama_ibu'),
                'no_telp'       => $this->request->getPost('no_telp'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'tgl_pendaftaran' => $this->request->getPost('tgl_pendaftaran'),
                'id_tahun'      => $this->request->getPost('id_tahun'),

            ];
            $this->ModelPpdb->add($data);
            session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
            return redirect()->to('ppdb');
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to('ppdb/tambahSiswa')->withInput()->with('validation', $validation);
        }
    }

    public function edit($id_ppdb)
    {

        $data = [

            'id_ppdb'       => $id_ppdb,
            'id_sekolah'    => $this->request->getPost('id_sekolah'),
            'id_jenjang'    => $this->request->getPost('id_jenjang'),
            'nik'           => $this->request->getPost('nik'),
            'nisn'          => $this->request->getPost('nisn'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'alamat'        => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nama_ibu'      => $this->request->getPost('nama_ibu'),
            'no_telp'       => $this->request->getPost('no_telp'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),

        ];
        $this->ModelPpdb->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('ppdb'));
    }





    public function delete($id_ppdb)
    {
        $data = [
            'id_ppdb' => $id_ppdb,
        ];
        $this->ModelPpdb->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus !!!');
        return redirect()->to(base_url('ppdb'));
    }
    public function siswaMI()
    {
        $data = [
            'title'      => 'SIAKADINKA',
            'subtitle'   => 'PESERTA DIDIK Dari MI',
            'ppdb'       => $this->ModelPpdb->AllData(),
            'ta'         => $this->ModelTa->AllData(),
            'sekolah'    => $this->ModelSekolah->AllData(),
            'mi'         => $this->ModelPpdb->dataMI(),
        ];
        return view('ppdb/mi', $data);
    }
    public function siswaSD()
    {
        $data = [
            'title'      => 'SIAKADINKA',
            'subtitle'   => 'PD SD',
            'ppdb'       => $this->ModelPpdb->AllData(),
            'ta'         => $this->ModelTa->AllData(),
            'sekolah'    => $this->ModelSekolah->AllData(),
            'sd'         => $this->ModelPpdb->dataSD(),
        ];
        return view('ppdb/sd', $data);
    }

    public function laporan()
    {
        $data = [
            'title'      => 'SIAKADINKA',
            'subtitle'   => 'Laporan Data Pendaftaran',
            'ppdb'       => $this->ModelPpdb->AllData(),
            'ta'         => $this->ModelTa->AllData(),
            'sekolah'    => $this->ModelSekolah->getSekolah(),
        ];
        return view('ppdb/v_laporan', $data);
    }

    public function dataSiswa($id_sekolah)
    {
        $data = $this->ModelSekolah->getSiswa($id_sekolah);
        $no = 1;
        foreach ($data as $value) {
            echo '<tr>
            <td>' . $no++ . '</td>
            <td>' . ucwords($value['nama_lengkap']) . '</td>
            <td>' . ucwords($value['jenis_kelamin']) . '</td>
            </tr>';
        }
    }

    public function dataAsalSekolah($id_jenjang)
    {
        $data = $this->ModelJenjang->getAsalSekolah($id_jenjang);

        echo '<option>--Pilih Sekolah--</option>';

        foreach ($data as $value) {
            echo '<option value="' . $value['id_sekolah'] . '">' . $value['sekolah'] . '</option>
           ';
        }
    }

    public function backup()
    {


        try {
            $tglSekarang = date('dym');
            $dump = new Mysqldump('mysql:host=localhost;dbname=db_ppdb;port=3306', 'root', '');
            $dump->start('database/databaseppdb-' . $tglSekarang . '.sql');

            $pesan = "Backup berhasil";
            session()->setFlashdata('pesan', $pesan);
            return redirect()->to('admin');
        } catch (\Exception $e) {
            $pesan = "mysqldump-php error " . $e->getMessage();
            session()->setFlashdata('pesan', $pesan);
            return redirect()->to('admin');
        }
    }

    public function cetakMI()
    {
        $data = [
            'title'      => 'SIAKADINKA',
            'subtitle'   => 'PESERTA DIDIK Dari MI',
            'ppdb'       => $this->ModelPpdb->AllData(),
            'ta'         => $this->ModelTa->AllData(),
            'sekolah'    => $this->ModelSekolah->AllData(),
            'mi'         => $this->ModelPpdb->dataMI(),
        ];
        return view('ppdb/cetak_mi', $data);
    }

    public function penguji()
    {
        $data = [
            'title'      => 'SIAKADINKA',
            'subtitle'   => 'Penguji',
            'penguji'       => $this->ModelPenguji->AllData(),
            'ruangan'       => $this->ModelRuangan->AllData(),
            'detail'       => $this->ModelPenguji->AllData(),

        ];
        return view('ppdb/penguji', $data);
    }



    public function savepenguji()

    {
        $data = [
            'nama_penguji'  => $this->request->getPost('nama_penguji'),
            'username'           => $this->request->getPost('username'),
            'password'           => $this->request->getPost('password'),

        ];
        $this->ModelPenguji->add($data);
        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        return redirect()->to('admin/penguji');
    }
    public function editpenguji($id_penguji)
    {
        $data = [
            'id_penguji'  => $id_penguji,
            'username'           => $this->request->getPost('username'),
            'password'           => $this->request->getPost('password'),
            'nama_penguji'           => $this->request->getPost('nama_penguji'),

        ];
        $this->ModelPenguji->edit($data);
        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        return redirect()->to('admin/penguji');
    }

    public function ruangan()
    {
        $data = [
            'title'      => 'SIAKADINKA',
            'subtitle'   => 'Ruangan',
            'ruangan'       => $this->ModelRuangan->AllData(),
            'penguji'       => $this->ModelPenguji->AllData(),
        ];
        return view('ppdb/ruangan', $data);
    }

    public function saveruangan()

    {
        $db     = \Config\Database::connect();

        $ta = $db->table('tbl_ta')
            ->where('status', '1')
            ->get()->getRowArray();
        $data = [
            'ruangan'  => $this->request->getPost('ruangan'),
            'id_penguji'  => $this->request->getPost('id_penguji'),
            'id_ta'         => $ta['id_ta']
        ];
        $this->ModelRuangan->add($data);
        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        return redirect()->to('admin/ruangan');
    }


    public function rincianujian($id_ruangan)

    {

        $data = [
            'title'         => 'SIAKADINKA',
            'subtitle'      => '',
            'ruangan'         => $this->ModelRuangan->detail($id_ruangan),
            'jml_siswa'     => $this->ModelRuangan->jml_siswa($id_ruangan),
            'datasiswa'     => $this->ModelRuangan->datasiswa($id_ruangan),
            'tidakpunya'    => $this->ModelRuangan->siswablmpuna(),


            // 'tingkat'       => $this->ModelKelas->SiswaTingkat(),
        ];

        return view('ppdb/rincianujian', $data);
    }
    public function nilai()

    {

        $data = [
            'title'         => 'SIAKADINKA',
            'subtitle'      => 'Hasil Test',
            'nilai'         => $this->ModelRuangan->SemuaNilai(),

            // 'tingkat'       => $this->ModelKelas->SiswaTingkat(),
        ];

        return view('ppdb/nilai', $data);
    }

    public function addanggota($id_siswa, $id_ruangan)
    {
        $data = [
            'id' => $id_siswa,
            'id_ruangan' => $id_ruangan,
        ];
        $this->ModelRuangan->add_data($data);
        session()->setFlashdata('pesan', 'Siswa Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('admin/rincianujian/' . $id_ruangan));
    }

    public function hps_data($id_siswa, $id_ruangan)
    {
        $data = [
            'id' => $id_siswa,
            'id_ruangan' => 0,
        ];
        $this->ModelRuangan->hps_data($data);
        session()->setFlashdata('pesan', 'Siswa Berhasil Di Hapus Dari Kelas !!!');
        return redirect()->to(base_url('admin/rincianujian/' . $id_ruangan));
    }

    public function deleteruang($id_ruangan)
    {
        $data = [
            'id_ruangan' => $id_ruangan,

        ];
        $this->ModelRuangan->hps_ruang($data);
        session()->setFlashdata('pesan', 'Siswa Berhasil Di Hapus Dari Kelas !!!');
        return redirect()->to(base_url('admin/ruangan/' . $id_ruangan));
    }
}
