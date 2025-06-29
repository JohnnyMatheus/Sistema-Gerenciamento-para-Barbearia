<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use App\Models\FornecedorModel;
use App\Models\ServicoModel;

class Produtos extends BaseController
{
    protected $produtoModel;
    protected $fornecedorModel;
    protected $servicoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
        $this->fornecedorModel = new FornecedorModel();
        $this->servicoModel = new ServicoModel();
    }

    public function index()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['produtos'] = $this->produtoModel
            ->select('produto.*, fornecedor.nomeforn, servico.nomeserv')
            ->join('fornecedor', 'produto.fornecedorcodforn = fornecedor.codforn', 'left')
            ->join('servico', 'produto.servicocodserv = servico.codserv', 'left')
            ->findAll();

        return view('produtos/index', $data);
    }

    public function create()
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['fornecedores'] = $this->fornecedorModel->findAll();
        $data['servicos'] = $this->servicoModel->findAll();

        return view('produtos/create', $data);
    }

    public function store()
    {
        $this->produtoModel->save($this->request->getPost());
        return redirect()->to('/produtos');
    }

    public function edit($id)
    {
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        $data['produto'] = $this->produtoModel->find($id);
        $data['fornecedores'] = $this->fornecedorModel->findAll();
        $data['servicos'] = $this->servicoModel->findAll();

        return view('produtos/edit', $data);
    }

    public function update($id)
    {
        $this->produtoModel->update($id, $this->request->getPost());
        return redirect()->to('/produtos');
    }

    public function delete($id)
    {
        $this->produtoModel->delete($id);
        return redirect()->to('/produtos');
    }
}
