<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table = 'stock';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'id_produit',
        'quantite_stock',
        'date',
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'id_produit' => 'required|integer',
        'quantite_stock' => 'required|integer|greater_than_equal_to[0]',
        'date' => 'permit_empty|valid_date[Y-m-d H:i:s]',
    ];
}
