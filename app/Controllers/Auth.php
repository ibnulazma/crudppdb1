<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }
    public function index()
    { {
            $data = [
                'title' => 'SIAKADINKA',
                'subtitle' => 'LoginUser'
            ];

            echo view('v_login', $data);
        }
    }



    public function cek_login_user()
    {

        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!!!',
                    'valid_email' => 'Harus format Email'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!!!'
                ]
            ],

        ])) {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->login_user($email, $password);
            if ($cek_login) {
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('email', $cek_login['email']);
                session()->set('foto', $cek_login['foto']);
                session()->set('level', 'admin');
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('pesan', 'Email atau password salah');
                return redirect()->to(base_url('auth'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth'));
        }
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('foto');
        session()->remove('level');
        return redirect()->to(base_url('home'));
    }


    public function loginGuru()
    {
        $data = [
            'title' => 'SIAKADINKA',
            'subtitle' => 'Login Guru'
        ];

        echo view('v_home', $data);
    }


    public function cek_loginSiswa()
    {

        if ($this->validate([
            'nisn' => [
                'label' => 'NISN',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!!!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!!!'
                ]
            ],

        ])) {

            $nisn = $this->request->getPost('nisn');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->loginSiswa($nisn, $password);
            if ($cek_login) {

                session()->set('id_siswa', $cek_login['id_siswa']);
                session()->set('nama_lengkap', $cek_login['nama_lengkap']);
                session()->set('foto', $cek_login['foto']);
                session()->set('level', 'siswa');
                return redirect()->to(base_url('siswa'));
            } else {
                session()->setFlashdata('pesan', 'username atau password salah');
                return redirect()->to('home');
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('home');
        }
    }
    public function cek_loginGuru()
    {
    }
}
