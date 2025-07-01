-- Inserts para Clientes
insert into cliente (nomcli, telcli, emailcli, bairrocli, ruaendcli, sexocli, cidadecli, dtnascli) values
    ('Nelson Ramos Rodrigues Junior', '(49) 9999-9999', 'nelson@example.com', 'Centro', 'Rua A', 'Masculino', 'São Miguel do Oeste', '1990-05-15'),
    ('Nathaniel Nicolas Rissi Soares', '(49) 8888-8888', 'nathaniel@example.com', 'Agostini', 'Rua B', 'Masculino', 'Maravilha', '1995-08-20'),
    ('Iraê Ervin Gruber da Silva', '(49) 7777-7777', 'irae@example.com', 'Centro', 'Rua C', 'Masculino', 'Descanso', '1992-03-10'),
    ('Jefferson Alan Schmidt Ludwig', '(49) 6666-6666', 'jefferson@example.com', 'Agostini', 'Rua D', 'Masculino', 'Itapiranga', '1998-11-25'),
    ('Leandro Bertocchi', '(49) 5555-5555', 'leandro@example.com', 'Centro', 'Rua E', 'Masculino', 'Guaraciaba', '1997-04-30'),
    ('Matheus José', '(49) 4444-4444', 'matheus@example.com', 'Centro', 'Rua F', 'Masculino', 'São Miguel do Oeste', '1993-09-05'),
    ('Nícolas Basotti', '(49) 3333-3333', 'nicolas@example.com', 'Agostini', 'Rua G', 'Masculino', 'Maravilha', '1996-06-18'),
    ('Iago Azevedo', '(49) 2222-2222', 'iago@example.com', 'Centro', 'Rua H', 'Masculino', 'Descanso', '1991-02-22'),
    ('Rafael Azevedo', '(49) 1111-1111', 'rafael@example.com', 'Agostini', 'Rua I', 'Masculino', 'Itapiranga', '1994-07-12'),
    ('Luis Paulo', '(49) 0000-0000', 'luis@example.com', 'Centro', 'Rua J', 'Masculino', 'Guaraciaba', '1999-12-31');
   
--------------------------------------------------------------------------------------------------------------------------------------------------

   --Inserts para Funcionários
insert into funcionario (nomefun, telfun, emailfun, cargofun, salariofun) values
    ('NATANI GABRIELA GAYARDO', '(49) 1111-2222', 'natani@example.com', 'Barbeiro', 2500.00),
    ('JOHNNY MATHEUS NOGUEIRA DE MEDEIRO', '(49) 2222-3333', 'johnny@example.com', 'Cabeleireiro', 2800.00),
    ('ROBERSON JUNIOR FERNANDES ALVES', '(49) 3333-4444', 'roberson@example.com', 'Esteticista', 3000.00);
   
--------------------------------------------------------------------------------------------------------------------------------------------------

--Insert para Fornecedor
insert into fornecedor (nomeforn, telforn, emailforn, enderecoforn) values
    ('UNOESC', '(49) 9999-9999', 'unoesc@example.com', 'Rua Universitária, 123');
   
--------------------------------------------------------------------------------------------------------------------------------------------------

--Inserts para Serviços
insert into servico (nomeserv, descserv, precoserv) values
    ('Corte de Cabelo', 'Corte de cabelo masculino', 50.00),
    ('Barba', 'Barba completa', 30.00),
    ('Coloração', 'Coloração de cabelo', 80.00),
    ('Depilação', 'Depilação masculina', 100.00),
    ('Massagem Relaxante', 'Massagem corporal relaxante', 120.00);
   
--------------------------------------------------------------------------------------------------------------------------------------------------
    
--Inserts para Produtos
insert into produto (nomeprod, descprod, qtdprod, precoprod, fornecedorcodforn, servicocodserv)
values
    ('Shampoo', 'Shampoo para cabelos masculinos', 100, 25.00, 1, null),
    ('Condicionador', 'Condicionador para cabelos masculinos', 80, 20.00, 1, null),
    ('Pomada Modeladora', 'Pomada modeladora para cabelos', 120, 35.00, 1, null),
    ('Cera Modeladora', 'Cera modeladora para cabelos', 90, 30.00, 1, null);

--------------------------------------------------------------------------------------------------------------------------------------------------

--Inserts para Agendamentos
insert into agendamento (data_hora, status, clientecodcli, funcionariocodfun)
values
    ('2024-07-10 09:00:00', 'Agendado', 1, 1),
    ('2024-07-12 15:30:00', 'Agendado', 2, 2),
    ('2024-07-15 11:00:00', 'Agendado', 3, 3),
    ('2024-07-18 14:00:00', 'Agendado', 4, 1),
    ('2024-07-20 10:30:00', 'Agendado', 5, 2),
    ('2024-07-22 13:00:00', 'Agendado', 6, 3),
    ('2024-07-25 16:00:00', 'Agendado', 7, 1),
    ('2024-07-28 12:30:00', 'Agendado', 8, 2),
    ('2024-07-30 10:00:00', 'Agendado', 9, 3),
    ('2024-08-02 14:30:00', 'Agendado', 10, 1);
   
 --------------------------------------------------------------------------------------------------------------------------------------------------
  
 --Inserts para Pagamentos
insert into pagamento (valor, data_hora_pagamento, forma_pagamento, clientecodcli, agendamentocodagen)
values
    (50.00, '2024-07-10 10:00:00', 'Dinheiro', 1, 1),
    (30.00, '2024-07-12 16:00:00', 'Cartão de Débito', 2, 2),
    (80.00, '2024-07-15 12:00:00', 'Cartão de Crédito', 3, 3),
    (100.00, '2024-07-18 15:00:00', 'Dinheiro', 4, 4),
    (120.00, '2024-07-20 11:00:00', 'Cartão de Crédito', 5, 5),
    (50.00, '2024-07-22 14:00:00', 'Dinheiro', 6, 6),
    (30.00, '2024-07-25 17:00:00', 'Cartão de Débito', 7, 7),
    (80.00, '2024-07-28 13:00:00', 'Cartão de Crédito', 8, 8),
    (100.00, '2024-07-30 11:00:00', 'Dinheiro', 9, 9),
    (120.00, '2024-08-02 15:00:00', 'Cartão de Crédito', 10, 10);

--------------------------------------------------------------------------------------------------------------------------------------------------
   
--Inserts para Histórico de Serviços
insert into historico_servico (data_hora, servicocodserv, clientecodcli, funcionariocodfun) values
    ('2024-07-10 09:30:00', 1, 1, 1),
    ('2024-07-12 15:45:00', 2, 2, 2),
    ('2024-07-15 11:30:00', 3, 3, 3),
    ('2024-07-18 14:30:00', 4, 4, 1),
    ('2024-07-20 10:45:00', 5, 5, 2),
    ('2024-07-22 13:30:00', 1, 6, 3),
    ('2024-07-25 16:30:00', 2, 7, 1),
    ('2024-07-28 12:45:00', 3, 8, 2),
    ('2024-07-30 10:15:00', 4, 9, 3),
    ('2024-08-02 14:45:00', 5, 10, 1);

