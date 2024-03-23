<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_users';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_users', 'fullname', 'username', 'email', 'password', 'no_phone', 'address', 'photos', 'created_at', 'updated_at'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
