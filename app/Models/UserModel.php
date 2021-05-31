<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    // protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    //every time we request usermodel to insert something into our database
    //so before insert, run this..
    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    //this will run before we update something into database
    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }
    protected function passwordHash(array $data)
    {
        // $data["data"] = 
        if (isset($data['data']['password']))
            // $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
}
