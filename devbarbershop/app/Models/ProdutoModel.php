<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'codprod';
    protected $allowedFields = [
        'nomeprod',
        'descprod',
        'qtdprod',
        'precoprod',
        'fornecedorcodforn',
        'servicocodserv'
    ];
    protected $returnType = 'array';
}
