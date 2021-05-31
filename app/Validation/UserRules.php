<?php

namespace App\Validation;

use App\Models\UserModel;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $userModel = new UserModel();
        // $user = $userModel->where('email', $data["email"])->first();
        $user = $userModel->where('email', $data["email"])->first();
        //kalu ga sesuai...
        if (!$user) {
            return false;
        }
        //kalau sesuai
        //cek password yang diketik sama atau tidak dengan passwoed di database
        return password_verify($data['password'], $user['password']);
    }
}
