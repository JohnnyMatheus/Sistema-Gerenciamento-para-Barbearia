<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table = 'funcionario';
    protected $primaryKey = 'codfun';
    protected $allowedFields = [
        'nomefun',
        'telfun',
        'emailfun',
        'cargofun',
        'salariofun'
    ];
    protected $returnType = 'array';
}
