<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function autenticar()
    {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $model = new UsuarioModel();
        $usuario = $model->where('email', $email)->first();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            session()->set('usuario', $usuario);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('erro', 'Usuário ou senha inválidos.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
