<?php

namespace App\Controllers;

use App\Models\AgendamentoModel;
use App\Models\ClienteModel;
use App\Models\FuncionarioModel;

class Agendamentos extends BaseController
{
    protected $agendamentoModel;
    protected $clienteModel;
    protected $funcionarioModel;

    public function __construct()
    {
        $this->agendamentoModel = new AgendamentoModel();
        $this->clienteModel = new ClienteModel();
        $this->funcionarioModel = new FuncionarioModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['agendamentos'] = $this->agendamentoModel
            ->select('agendamento.*, cliente.nomcli, funcionario.nomefun')
            ->join('cliente', 'agendamento.clientecodcli = cliente.codcli', 'left')
            ->join('funcionario', 'agendamento.funcionariocodfun = funcionario.codfun', 'left')
            ->findAll();

        return view('agendamentos/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['clientes'] = $this->clienteModel->findAll();
        $data['funcionarios'] = $this->funcionarioModel->findAll();

        return view('agendamentos/create', $data);
    }

    public function store()
    {
        $this->agendamentoModel->save($this->request->getPost());
        return redirect()->to('/agendamentos');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['agendamento'] = $this->agendamentoModel->find($id);
        $data['clientes'] = $this->clienteModel->findAll();
        $data['funcionarios'] = $this->funcionarioModel->findAll();

        return view('agendamentos/edit', $data);
    }

    public function update($id)
    {
        $this->agendamentoModel->update($id, $this->request->getPost());
        return redirect()->to('/agendamentos');
    }

    public function delete($id)
    {
        $this->agendamentoModel->delete($id);
        return redirect()->to('/agendamentos');
    }
}
