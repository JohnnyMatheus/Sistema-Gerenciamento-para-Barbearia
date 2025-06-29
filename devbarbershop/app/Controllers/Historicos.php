<?php

namespace App\Controllers;

use App\Models\HistoricoServicoModel;
use App\Models\ServicoModel;
use App\Models\ClienteModel;
use App\Models\FuncionarioModel;

class Historicos extends BaseController
{
    protected $historicoModel;
    protected $servicoModel;
    protected $clienteModel;
    protected $funcionarioModel;

    public function __construct()
    {
        $this->historicoModel = new HistoricoServicoModel();
        $this->servicoModel = new ServicoModel();
        $this->clienteModel = new ClienteModel();
        $this->funcionarioModel = new FuncionarioModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['historicos'] = $this->historicoModel
            ->select('historico_servico.*, servico.nomeserv, cliente.nomcli, funcionario.nomefun')
            ->join('servico', 'historico_servico.servicocodserv = servico.codserv', 'left')
            ->join('cliente', 'historico_servico.clientecodcli = cliente.codcli', 'left')
            ->join('funcionario', 'historico_servico.funcionariocodfun = funcionario.codfun', 'left')
            ->findAll();

        return view('historicos/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['servicos'] = $this->servicoModel->findAll();
        $data['clientes'] = $this->clienteModel->findAll();
        $data['funcionarios'] = $this->funcionarioModel->findAll();

        return view('historicos/create', $data);
    }

    public function store()
    {
        $this->historicoModel->save($this->request->getPost());
        return redirect()->to('/historicos');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['historico'] = $this->historicoModel->find($id);
        $data['servicos'] = $this->servicoModel->findAll();
        $data['clientes'] = $this->clienteModel->findAll();
        $data['funcionarios'] = $this->funcionarioModel->findAll();

        return view('historicos/edit', $data);
    }

    public function update($id)
    {
        $this->historicoModel->update($id, $this->request->getPost());
        return redirect()->to('/historicos');
    }

    public function delete($id)
    {
        $this->historicoModel->delete($id);
        return redirect()->to('/historicos');
    }
}
