<?php

namespace App\Controllers;

use App\Models\ServicoModel;

class Servicos extends BaseController
{
    protected $servicoModel;

    public function __construct()
    {
        $this->servicoModel = new ServicoModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['servicos'] = $this->servicoModel->findAll();
        return view('servicos/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        return view('servicos/create');
    }

    public function store()
    {
        $this->servicoModel->save($this->request->getPost());
        return redirect()->to('/servicos');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['servico'] = $this->servicoModel->find($id);
        return view('servicos/edit', $data);
    }

    public function update($id)
    {
        $dados = $this->request->getPost();
        $this->servicoModel->update($id, $dados);
        return redirect()->to('/servicos');
    }

    public function delete($id)
    {
        $this->servicoModel->delete($id);
        return redirect()->to('/servicos');
    }
}
