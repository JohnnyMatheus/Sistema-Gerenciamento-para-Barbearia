<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Clientes extends BaseController
{
    protected $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['clientes'] = $this->clienteModel->findAll();
        return view('clientes/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        return view('clientes/create');
    }

    public function store()
    {
        $this->clienteModel->save($this->request->getPost());
        return redirect()->to('/clientes');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['cliente'] = $this->clienteModel->find($id);
        return view('clientes/edit', $data);
    }

    public function update($id)
    {
        $dados = $this->request->getPost();
        $this->clienteModel->update($id, $dados);
        return redirect()->to('/clientes');
    }

    public function delete($id)
    {
        $this->clienteModel->delete($id);
        return redirect()->to('/clientes');
    }
}
