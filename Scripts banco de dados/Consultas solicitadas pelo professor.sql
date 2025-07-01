-- Clientes com idade abaixo de 40 anos e sexo masculino, ordenados pelo nome descendente
SELECT nomcli, dtnascli
FROM cliente
WHERE sexocli = 'Masculino' AND date_part('year', age(current_date, dtnascli)) < 40
ORDER BY nomcli DESC;

------------------------------------------------------------------------------------------------------------------------------------------------
--Serviços registrados em meses sem a letra 'o' no final e de clientes nos bairros Centro e Agostini, ordenados pelo nome do cliente descendente
SELECT cli.nomcli, ser.nomeserv, to_char(hs.data_hora, 'Month') AS mes
FROM cliente cli
JOIN agendamento ag ON cli.codcli = ag.clientecodcli
JOIN historico_servico hs ON ag.codagen = hs.codhistorico
JOIN servico ser ON hs.servicocodserv = ser.codserv
WHERE cli.bairrocli IN ('Centro', 'Agostini')
  AND to_char(hs.data_hora, 'Month') !~ 'o$'
ORDER BY cli.nomcli DESC;

------------------------------------------------------------------------------------------------------------------------------------------------
-- Agendamentos de clientes com menos de 20 anos das cidades especificadas, ordenados por número de agendamentos por cidade
SELECT cli.cidadecli, COUNT(*) AS num_agendamentos
FROM cliente cli
JOIN agendamento ag ON cli.codcli = ag.clientecodcli
WHERE date_part('year', age(current_date, cli.dtnascli)) < 20
  AND cli.cidadecli IN ('Maravilha', 'Descanso', 'Itapiranga', 'Guaraciaba')
GROUP BY cli.cidadecli
ORDER BY num_agendamentos DESC;

------------------------------------------------------------------------------------------------------------------------------------------------
-- Total de serviços e valor total realizados por mês em 2024, ordenado do maior valor para o menor valor
SELECT to_char(data_hora, 'Month') AS mes,
       COUNT(*) AS total_servicos,
       SUM(ps.valor) AS valor_total
FROM pagamento ps
JOIN agendamento ag ON ps.agendamentocodagen = ag.codagen
WHERE date_part('year', ag.data_hora) = 2024
GROUP BY mes
ORDER BY valor_total DESC;