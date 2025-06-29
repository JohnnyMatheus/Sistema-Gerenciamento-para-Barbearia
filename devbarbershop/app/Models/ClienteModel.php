<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'codcli';
    protected $allowedFields = [
        'nomcli',
        'telcli',
        'emailcli',
        'bairrocli',
        'ruaendcli',
        'sexocli',
        'cidadecli',
        'dtnascli'
    ];
    protected $returnType = 'array';
}
