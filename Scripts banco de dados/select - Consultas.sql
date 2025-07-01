--Consulta: Clientes e Seus Agendamentos
SELECT c.nomcli, a.data_hora, a.status 
FROM cliente c
JOIN agendamento a ON c.codcli = a.clientecodcli;

--------------------------------------------------------------------------------------------
--Consulta: Funcionários e Seus Agendamentos
SELECT f.nomefun, a.data_hora, a.status 
FROM funcionario f
JOIN agendamento a ON f.codfun = a.funcionariocodfun;

--------------------------------------------------------------------------------------------
--Consulta: Produtos e Seus Fornecedores

SELECT p.nomeprod, p.descprod, p.qtdprod, p.precoprod, f.nomeforn
FROM produto p
JOIN fornecedor f ON p.fornecedorcodforn = f.codforn;

--------------------------------------------------------------------------------------------
--Consulta: Serviços Prestados com Detalhes de Clientes e Funcionários

SELECT hs.data_hora, c.nomcli, s.nomeserv, s.descserv, f.nomefun
FROM historico_servico hs
JOIN cliente c ON hs.clientecodcli = c.codcli
JOIN servico s ON hs.servicocodserv = s.codserv
JOIN funcionario f ON hs.funcionariocodfun = f.codfun;

--------------------------------------------------------------------------------------------
--Consulta: Pagamentos Realizados por Cliente

SELECT p.valor, p.data_hora_pagamento, p.forma_pagamento, c.nomcli
FROM pagamento p
JOIN cliente c ON p.clientecodcli = c.codcli;

--------------------------------------------------------------------------------------------
--Consulta: Agendamentos com Detalhes de Clientes e Funcionários
SELECT a.data_hora, a.status, c.nomcli, f.nomefun
FROM agendamento a
JOIN cliente c ON a.clientecodcli = c.codcli
JOIN funcionario f ON a.funcionariocodfun = f.codfun;

--------------------------------------------------------------------------------------------
--Consulta: Total de Pagamentos por Cliente
SELECT c.nomcli, SUM(p.valor) AS total_pago
FROM pagamento p
JOIN cliente c ON p.clientecodcli = c.codcli
GROUP BY c.nomcli;

--------------------------------------------------------------------------------------------
--Consulta: Número de Agendamentos por Funcionário
SELECT f.nomefun, COUNT(a.codagen) AS total_agendamentos
FROM funcionario f
JOIN agendamento a ON f.codfun = a.funcionariocodfun
GROUP BY f.nomefun;

--------------------------------------------------------------------------------------------
--Consulta: Serviços Mais Realizados
SELECT s.nomeserv, COUNT(hs.codhistorico) AS total_servicos
FROM servico s
JOIN historico_servico hs ON s.codserv = hs.servicocodserv
GROUP BY s.nomeserv
ORDER BY total_servicos DESC;
