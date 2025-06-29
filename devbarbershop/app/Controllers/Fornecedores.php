<?php

namespace App\Controllers;

use App\Models\FornecedorModel;

class Fornecedores extends BaseController
{
    protected $fornecedorModel;

    public function __construct()
    {
        $this->fornecedorModel = new FornecedorModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['fornecedores'] = $this->fornecedorModel->findAll();
        return view('fornecedores/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        return view('fornecedores/create');
    }

    public function store()
    {
        $this->fornecedorModel->save($this->request->getPost());
        return redirect()->to('/fornecedores');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['fornecedor'] = $this->fornecedorModel->find($id);
        return view('fornecedores/edit', $data);
    }

    public function update($id)
    {
        $dados = $this->request->getPost();
        $this->fornecedorModel->update($id, $dados);
        return redirect()->to('/fornecedores');
    }

    public function delete($id)
    {
        $this->fornecedorModel->delete($id);
        return redirect()->to('/fornecedores');
    }
}
