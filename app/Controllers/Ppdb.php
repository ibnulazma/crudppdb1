<?php

namespace App\Controllers;

use App\Models\ModelPpdb;
use App\Models\ModelTa;
use App\Models\ModelSekolah;
use App\Models\ModelJenjang;
use \Dompdf\Dompdf;

class Ppdb extends BaseController
{


    public function __construct()
    {
        helper('form');
        $this->ModelPpdb    = new ModelPpdb();
        $this->ModelTa      = new ModelTa();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelJenjang = new ModelJenjang();
    }

    public function index()
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

    public function berandaPPDB()
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
            'dataanak'          => $this->ModelPpdb->group(),
        ];

        return view('ppdb/v_beranda', $data);
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
            'jenis_kelamin' => [
                'label' => 'Jenis Kelamin',
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

            'id_jenjang' => [
                'label' => 'Jenjang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus dipilih'
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

            'id'       => $id_ppdb,
            'nik'           => $this->request->getPost('nik'),
            'nisn'          => $this->request->getPost('nisn'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'alamat'        => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nama_ibu'      => $this->request->getPost('nama_ibu'),
            'no_telp'       => $this->request->getPost('no_telp'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'id_sekolah' => $this->request->getPost('id_sekolah'),

        ];
        $this->ModelPpdb->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('ppdb'));
    }





    public function delete($id_ppdb)
    {
        $data = [
            'id' => $id_ppdb,
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
        $html = view('ppdb/mi', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        $dompdf->stream('data siswa mi.pdf', array("Attachment" => false));
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

        echo '<option>--Pilih Sekolah--</option>';

        foreach ($data as $value) {
            echo '<option value="' . $value['id_sekolah'] . '">' . $value['sekolah'] . '</option>
           ';
        }
    }
}
