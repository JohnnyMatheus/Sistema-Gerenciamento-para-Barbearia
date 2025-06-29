<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;

class Funcionarios extends BaseController
{
    protected $funcionarioModel;

    public function __construct()
    {
        $this->funcionarioModel = new FuncionarioModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['funcionarios'] = $this->funcionarioModel->findAll();
        return view('funcionarios/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        return view('funcionarios/create');
    }

    public function store()
    {
        $this->funcionarioModel->save($this->request->getPost());
        return redirect()->to('/funcionarios');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['funcionario'] = $this->funcionarioModel->find($id);
        return view('funcionarios/edit', $data);
    }

    public function update($id)
    {
        $dados = $this->request->getPost();
        $this->funcionarioModel->update($id, $dados);
        return redirect()->to('/funcionarios');
    }

    public function delete($id)
    {
        $this->funcionarioModel->delete($id);
        return redirect()->to('/funcionarios');
    }
}
