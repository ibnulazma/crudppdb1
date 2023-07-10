<?php

namespace App\Controllers;

use App\Models\ModelPenguji;

class Penguji extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPenguji = new ModelPenguji();
    }
    public function index()
    { {
            $data = [
                'title' => 'Penguji',
                'subtitle' => 'Loginpenguji'
            ];

            return view('v_loginpenguji', $data);
        }
    }


    public function cek_login_penguji()
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
}
