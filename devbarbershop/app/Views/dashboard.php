<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>DevBarberShop - Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 220px;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar a {
      color: white;
      padding: 10px;
      display: block;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 220px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h4 class="text-center text-white">DevBarberShop</h4>
    <a href="/dashboard">Dashboard</a>
    <a href="/clientes">Clientes</a>
    <a href="/fornecedores">Fornecedores</a>
    <a href="/funcionarios">Funcionários</a>
    <a href="/servicos">Serviços</a>
    <a href="/produtos">Produtos</a>
    <a href="/agendamentos">Agendamentos</a>
    <a href="/pagamentos">Pagamentos</a>
    <a href="/historicos">Histórico Serviços</a>
    <a href="/logout">Sair</a>
  </div>
  <div class="content">
    <h2>Bem-vindo, <?= session()->get('usuario')['nome'] ?></h2>
    <p>Este é o painel de controle do sistema DevBarberShop.</p>
  </div>
</body>
</html>
