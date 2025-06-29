<?php

namespace App\Models;

use CodeIgniter\Model;

class FornecedorModel extends Model
{
    protected $table = 'fornecedor';
    protected $primaryKey = 'codforn';
    protected $allowedFields = [
        'nomeforn',
        'telforn',
        'emailforn',
        'enderecoforn'
    ];
    protected $returnType = 'array';
}
