<?php

namespace App\Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UsuarioModel;

class LoginTest extends CIUnitTestCase
{
    public function testUsuarioExiste()
    {
        $model = new UsuarioModel();
        $usuario = $model->where('email', 'admin@devbarbershop.com')->first();
        
        $this->assertNotNull($usuario, 'Usuário administrador não existe no banco');
        $this->assertEquals('admin@devbarbershop.com', $usuario['email']);
    }
    
    public function testVerificaSenha()
    {
        $model = new UsuarioModel();
        $usuario = $model->where('email', 'admin@devbarbershop.com')->first();

        $senhaCorreta = password_verify('admin123', $usuario['senha']);
        $this->assertTrue($senhaCorreta, 'A senha do usuário administrador está incorreta');
    }
}
