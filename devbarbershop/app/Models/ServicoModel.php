<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicoModel extends Model
{
    protected $table = 'servico';
    protected $primaryKey = 'codserv';
    protected $allowedFields = [
        'nomeserv',
        'descserv',
        'precoserv'
    ];
    protected $returnType = 'array';
}
