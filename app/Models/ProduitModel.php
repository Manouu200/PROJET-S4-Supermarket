<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduitModel extends Model
{
    protected $table = 'produit';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'designation',
        'prix_unitaire',
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'designation' => 'required|max_length[255]',
        'prix_unitaire' => 'required|decimal|greater_than_equal_to[0]',
    ];
}
