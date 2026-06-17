<?php

namespace App\Models;

use CodeIgniter\Model;

class AchatModel extends Model
{
    protected $table = 'achat';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'id_client',
        'id_caisse',
        'id_produit',
        'quantite',
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'id_client' => 'required|integer',
        'id_caisse' => 'required|integer',
        'id_produit' => 'required|integer',
        'quantite' => 'required|integer|greater_than[0]',
    ];
}
