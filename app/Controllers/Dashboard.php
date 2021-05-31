<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dasboard',
            'name' => 'Dashboard'
        ];
        return view('dashboard', $data);
    }
}
