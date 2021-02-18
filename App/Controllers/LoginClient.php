<?php

namespace App\Controllers;

use App\Models\ClientModel;

class LoginClient extends BaseController
{

    public function index()
    {
        $data = [];
        helper(['form']);
        helper('cookie');
        if (get_cookie('email') && get_cookie('password')) {
            $email = get_cookie('email');
            $password = get_cookie('password');
            $model = new ClientModel();
            $Client = $model->where('email', $email)
                ->first();
            if ($password == $Client['password'])
                $this->setClientSession($Client);
        }
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard2');
        }
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[6]|max_length[255]|validateClient[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateClient' => 'Email atau Password salah!!'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new ClientModel();

                $Client = $model->where('email', $this->request->getVar('email'))->first();

                $this->setClientSession($Client);

                if (isset($_POST['remember'])) {
                    setcookie('email', $this->request->getVar('email'), time() + 1000);
                    setcookie('password', $Client['password'], time() + 1000);
                    return redirect()->to('dashboard2');
                }
                return redirect()->to('dashboard2');
            }
        }
        return view('login-client', $data);
    }

    private function setClientSession($Client)
    {
        $data = [
            'email' => $Client['email'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[client.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new ClientModel();

                $newData = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registrasi Berhasil');
                return redirect()->to('/client');
            }
        }
        return view('register-client', $data);
    }

    public function logout()
    {
        helper('cookie');
        setcookie('email', '', time() + 1000);
        setcookie('password', '', time() + 1000);
        session()->destroy();
        return redirect()->to('/client');
    }
}
