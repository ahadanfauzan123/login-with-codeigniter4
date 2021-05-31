<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'login',
            'name' => 'Login'
        ];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[7]|max_length[255]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email, password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Oops, email atau password salah'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $userModel = new UserModel();

                // $user = $userModel->where('email', $this->request->getVar('email'))->first();
                $user = $userModel->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);
                return redirect()->to('dashboard');
            }
        }
        return view('login', $data);
    }
    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'isLoggedIn' => true
        ];
        session()->set($data);
        return true;
    }
    public function register()
    {
        $data = [
            'title' => 'register',
            'name' => 'Register'
        ];
        helper(['form']);
        //if method is post ..
        if ($this->request->getMethod() == 'post') {
            //do the validation here
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[20]',
                'lastname' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[7]|max_length[255]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'confirmpassword' => 'matches[password]',
            ];

            //if not valid, do...
            if (!$this->validate($rules)) {
                $data["validation"] = $this->validator;
            } else {
                //store the user in database
                $userModel = new UserModel();
                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $userModel->save($newData);
                $session = session();
                $session->setFlashData('success', 'Registrasi berhasil');
                return redirect()->to('/');
            }
        }
        //otherwise, do a view

        return view('register', $data);
    }
}
