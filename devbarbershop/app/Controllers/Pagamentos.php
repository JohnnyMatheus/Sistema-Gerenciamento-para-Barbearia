<?php

namespace App\Controllers;

use App\Models\PagamentoModel;
use App\Models\ClienteModel;
use App\Models\AgendamentoModel;

class Pagamentos extends BaseController
{
    protected $pagamentoModel;
    protected $clienteModel;
    protected $agendamentoModel;

    public function __construct()
    {
        $this->pagamentoModel = new PagamentoModel();
        $this->clienteModel = new ClienteModel();
        $this->agendamentoModel = new AgendamentoModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['pagamentos'] = $this->pagamentoModel
            ->select('pagamento.*, cliente.nomcli, agendamento.data_hora')
            ->join('cliente', 'pagamento.clientecodcli = cliente.codcli', 'left')
            ->join('agendamento', 'pagamento.agendamentocodagen = agendamento.codagen', 'left')
            ->findAll();

        return view('pagamentos/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['clientes'] = $this->clienteModel->findAll();
        $data['agendamentos'] = $this->agendamentoModel->findAll();

        return view('pagamentos/create', $data);
    }

    public function store()
    {
        $this->pagamentoModel->save($this->request->getPost());
        return redirect()->to('/pagamentos');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['pagamento'] = $this->pagamentoModel->find($id);
        $data['clientes'] = $this->clienteModel->findAll();
        $data['agendamentos'] = $this->agendamentoModel->findAll();

        return view('pagamentos/edit', $data);
    }

    public function update($id)
    {
        $this->pagamentoModel->update($id, $this->request->getPost());
        return redirect()->to('/pagamentos');
    }

    public function delete($id)
    {
        $this->pagamentoModel->delete($id);
        return redirect()->to('/pagamentos');
    }
}
