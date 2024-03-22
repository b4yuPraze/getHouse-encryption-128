<?php

namespace App\Models;

use CodeIgniter\Model;

class Participants extends Model
{
    protected $table      = 'participants';
    protected $primaryKey = 'id_participants';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_participants', 'id_no', 'test_no', 'date', 'name', 'address', 'no_phone', 'listening', 'structure', 'reading', 'test_scores', 'total', 'toefl_prediction', 'created_at', 'updated_at'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
