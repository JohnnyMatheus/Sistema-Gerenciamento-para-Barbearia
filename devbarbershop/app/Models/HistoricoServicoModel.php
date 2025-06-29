<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoricoServicoModel extends Model
{
    protected $table = 'historico_servico';
    protected $primaryKey = 'codhistorico';
    protected $allowedFields = [
        'data_hora',
        'servicocodserv',
        'clientecodcli',
        'funcionariocodfun'
    ];
    protected $returnType = 'array';
}
