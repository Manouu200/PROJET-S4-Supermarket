<?php

namespace App\Models;

use CodeIgniter\Model;

class CaisseModel extends Model
{
    protected $table = 'caisse';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'numero_caisse',
        'nom_caisse',
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'numero_caisse' => 'required|max_length[50]|is_unique[caisse.numero_caisse,id,{id}]',
        'nom_caisse' => 'required|max_length[255]',
    ];
}
