<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendamentoModel extends Model
{
    protected $table = 'agendamento';
    protected $primaryKey = 'codagen';
    protected $allowedFields = [
        'data_hora',
        'status',
        'clientecodcli',
        'funcionariocodfun'
    ];
    protected $returnType = 'array';
}
