<?php

namespace App\Models;

use CodeIgniter\Model;

class PagamentoModel extends Model
{
    protected $table = 'pagamento';
    protected $primaryKey = 'codpag';
    protected $allowedFields = [
        'valor',
        'data_hora_pagamento',
        'forma_pagamento',
        'clientecodcli',
        'agendamentocodagen'
    ];
    protected $returnType = 'array';
}
