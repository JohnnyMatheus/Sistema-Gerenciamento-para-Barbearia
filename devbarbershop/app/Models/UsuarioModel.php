<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'senha'];
    protected $returnType = 'array';

    public function verificaUsuario($email, $senha)
    {
        $user = $this->where('email', $email)->first();
        if ($user && password_verify($senha, $user['senha'])) {
            return $user;
        }
        return null;
    }
}
