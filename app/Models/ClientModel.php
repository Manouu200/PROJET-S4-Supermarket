<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'nom',
        'telephone',
        'email',
        'mot_de_passe',
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'nom' => 'required|max_length[255]',
        'telephone' => 'required|max_length[50]',
        'email' => 'required|valid_email|max_length[255]|is_unique[client.email,id,{id}]',
        'mot_de_passe' => 'required|max_length[255]',
    ];
}
