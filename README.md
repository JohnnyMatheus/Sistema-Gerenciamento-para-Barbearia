<!--->
<p  align="center">
  <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/devbarberLogo.png" />
</p>

## 🔷Tópicos 

- [Descrição do projeto](#descrição-do-projeto)
- [Levantamento de Requisitos](#Levantamento-de-Requisitos)
- [Prototipagem](#Prototipagem)
- [Ferramentas utilizadas](#ferramentas-utilizadas)
- [Diagrama de caso de uso](#Diagrama-de-atividades)
- [Diagramas de sequência](Diagrama-de-sequência)
- [Diagrama de atividades](#Diagrama-de-atividades)
- [Diagrama de estado](#Diagrama-de-estado)
- [Diagrama de classes](#Diagrama-de-classes)
- [Modelagem](#Modelagem)
- [Script Banco de dados](#Script-Banco-de-Dados)
- [Desenvolvedor](#Desenvolvedor)
- [Professor](#Professor)


## 💈Descrição do projeto

<p align="justify">O projeto DevBarberShop foi desenvolvido no contexto das disciplinas de Engenharia de Software II e Programação III do curso de Ciência da Computação da Universidade do Oeste de Santa Catarina (UNOESC), com o objetivo de aplicar na prática os conhecimentos adquiridos em sala de aula. O sistema visa gerenciar as operações de uma barbearia, permitindo o cadastro de clientes, fornecedores, funcionários, serviços, produtos, agendamentos e pagamentos. Foram utilizadas tecnologias como HTML, CSS, Bootstrap, PHP, PostgreSQL, CodeIgniter4, além de ferramentas de apoio como Visual Paradigm, Visual Studio Code, DBeaver, XAMPP, GitHub e GitHub Desktop. A aplicação proporciona eficiência, segurança e escalabilidade, com uma interface intuitiva e relatórios detalhados, atendendo às necessidades práticas de gestão de barbearias.</p>


<h2 align="center">🔷Levantamento de Requisitos</h2>

## 🔹Requisitos Funcionais
<p>Cadastro de Clientes: O sistema deve permitir o cadastro de clientes com informações como nome, telefone, e-mail, endereço, sexo e data de nascimento.</p>
<p>Cadastro de Fornecedores: O sistema deve permitir o cadastro de fornecedores com informações como nome, telefone, e-mail e endereço.</p>
<p>Cadastro de Funcionários: O sistema deve permitir o cadastro de funcionários com informações como nome, telefone, e-mail, cargo e salário.</p>
<p>Cadastro de Serviços: O sistema deve permitir o cadastro de serviços oferecidos pela barbearia, incluindo nome, descrição e preço.</p>
<p>Cadastro de Produtos: O sistema deve permitir o cadastro de produtos, incluindo nome, descrição, quantidade em estoque, preço, e o fornecedor responsável.</p>
<p>Agendamento de Serviços: O sistema deve permitir que os clientes agendem serviços com os funcionários, especificando a data, hora e status do agendamento.</p>
<p>Registro de Pagamentos: O sistema deve permitir o registro de pagamentos realizados pelos clientes para os serviços agendados, incluindo valor, forma de pagamento e data/hora do pagamento.</p>
<p>Histórico de Serviços: O sistema deve registrar o histórico de serviços prestados, com detalhes sobre o serviço realizado, o cliente atendido, e o funcionário responsável.</p>
<p>Relatórios e Consultas: O sistema deve possibilitar a consulta e a geração de relatórios sobre agendamentos, pagamentos e histórico de serviços.</p>

## 🔹Requisitos não Funcionais
<p>Desempenho: O sistema deve ser capaz de processar as transações de agendamento e pagamento rapidamente, sem causar lentidão no sistema.</p>
<p>Segurança: O sistema deve garantir a segurança dos dados, com criptografia das informações sensíveis, como e-mails e números de telefone, além de controle de acesso para diferentes perfis (clientes, funcionários e administradores).</p>
<p>Escalabilidade: O sistema deve ser capaz de se adaptar ao crescimento da barbearia, permitindo a adição de novos funcionários, clientes, serviços e produtos sem impacto significativo no desempenho.</p>
<p>Compatibilidade: O sistema deve ser compatível com diferentes dispositivos e navegadores, garantindo uma experiência fluida para os usuários.</p>
<p>Usabilidade: A interface do sistema deve ser simples, intuitiva e fácil de navegar, com feedback claro para o usuário em cada interação.</p>
<p>Backup e Recuperação de Dados: O sistema deve permitir a criação de backups periódicos dos dados, garantindo que as informações possam ser recuperadas em caso de falha.</p>
<p>Acessibilidade: O sistema deve ser acessível a pessoas com deficiência, seguindo as diretrizes de acessibilidade web, como W3C WCAG.</p>


## 🔹Requisitos de Dominio
<p>🔸Cliente</p>
<p>Cada cliente deve ter um código de identificação único, nome, telefone, e-mail, endereço (bairro, rua, cidade), sexo e data de nascimento.</p>
<p>Os dados do cliente são essenciais para o agendamento de serviços e registro de histórico.</p>

<p>🔸Fornecedor</p>
<p>Cada fornecedor deve ter um código único, nome, telefone, e-mail e endereço, facilitando o controle dos produtos e insumos.</p>

<p>🔸Funcionário</p>
<p>Funcionários devem ter um código único, nome, telefone, e-mail, cargo e salário.</p>
<p>Funcionários são essenciais para o agendamento e execução de serviços.</p>

 <p>🔸Serviço</p>
<p>Cada serviço deve ter um código, nome, descrição e preço.</p>
<p>Os serviços são agendados pelos clientes e registrados no histórico de serviços prestados.</p>

 <p>🔸Produto</p>
<p>Cada produto deve ter um código único, nome, descrição, quantidade em estoque e preço.</p>
<p>Produtos são vinculados a fornecedores e são essenciais para a execução de certos serviços.</p>

 <p>🔸Agendamento</p>
<p>Cada agendamento é identificado por um código e contém a data/hora do serviço, cliente e funcionário responsáveis.</p>
<p>Os agendamentos representam a reserva de um serviço e devem ser gerenciados de acordo com políticas de cancelamento e alteração.</p>

 <p>🔸Pagamento</p>
<p>Pagamentos são identificados por um código e contêm informações de valor, data/hora e forma de pagamento, além do cliente e agendamento vinculados.</p>
<p>O pagamento finaliza a prestação de serviço.</p>

<p>🔸Histórico de Serviços</p>
<p>O histórico de serviços contém registros de todos os serviços realizados, com data/hora, serviço prestado, cliente e funcionário envolvidos.</p>
<p>Este histórico é importante para consultas futuras sobre serviços realizados e pode ser usado para análise do perfil do cliente.</p>

<hr>
<h2 align="center">🔷Prototipagem</h2>

## 🔒Tela de Login
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/tela%20de%20login.png"/>
</p>

## 💈Tela do sistema
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/tela%20do%20sistema.png"/>
</p>
<hr>
<h2 align="center">🛠️Ferramentas Utilizadas</h2>

| [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Html.png" width=115><br><sub>Html5</sub>](URL_LINK_1) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Css.png" width=115><br><sub>CSS3</sub>](URL_LINK_2) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Bootstrap.png" width=115><br><sub>Bootstrap5</sub>](URL_LINK_3) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Php.png" width=115><br><sub>PHP</sub>](URL_LINK_4) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Postgresql.png" width=115><br><sub>Postgresql</sub>](URL_LINK_5) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Dbeaver.png" width=115><br><sub>Dbeaver</sub>](URL_LINK_6) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Codeigniter4.png" width=115><br><sub>Codeigniter4</sub>](URL_LINK_7) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Gitdesktop.png" width=115><br><sub>Gitdesktop</sub>](URL_LINK_8) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Xampp.png" width=115><br><sub>Xampp</sub>](URL_LINK_9) | [<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/Vscode.png" width=115><br><sub>VSCode</sub>](URL_LINK_10) |
| :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---: | :---: |
<hr>
<h2 align="center">🔶Diagramas do Projeto</h2>

## 🔸Diagrama de Caso de uso
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Diagramas/Diagrama%20de%20caso%20de%20Uso.png"/>
</p>

## 🔸Diagrama de Fluxos
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Diagramas/DIagrama%20de%20fluxo.png"/>
</p>

## 🔸Diagrama de sequência
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Diagramas/diagrama%20de%20sequencia.jpg"/>
</p>

## 🔸Diagrama de atividades
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Diagramas/diagrama%20de%20atividades.jpg"/>
</p>

## 🔷Diagramas de estado
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Diagramas/Diagrama%20de%20Estados.png"/>
</p>

## 🔷Diagramas de classes
<p align="center">
 <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Diagramas/diagrama%20de%20classe.jpg"/>
</p>
<hr>

## ⚙️Modelagem
Você pode [acessar a modelagem do projeto aqui]()

<p align="center">
<img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/modelagem-atualizada.png">
</p>
<hr>

<h2 align="center">🐘Estrutura do projeto - MVC🔥</h2>

```
devbarbershop/
│
├── app/
│   ├── Controllers/
│   │     ├── Login.php
│   │     ├── Dashboard.php
│   │     ├── Clientes.php
│   │     ├── Fornecedores.php
│   │     ├── Funcionarios.php
│   │     ├── Servicos.php
│   │     ├── Produtos.php
│   │     ├── Agendamentos.php
│   │     ├── Pagamentos.php
│   │     └── Historicos.php
│   │
│   ├── Models/
│   │     ├── UsuarioModel.php
│   │     ├── ClienteModel.php
│   │     ├── FornecedorModel.php
│   │     ├── FuncionarioModel.php
│   │     ├── ServicoModel.php
│   │     ├── ProdutoModel.php
│   │     ├── AgendamentoModel.php
│   │     ├── PagamentoModel.php
│   │     └── HistoricoServicoModel.php
│   │
│   ├── Views/
│   │     ├── layouts/
│   │     │     └── main.php
│   │     ├── login.php
│   │     ├── dashboard.php
│   │     ├── clientes/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── fornecedores/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── funcionarios/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── servicos/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── produtos/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── agendamentos/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── pagamentos/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │     ├── historicos/
│   │     │     ├── index.php
│   │     │     ├── create.php
│   │     │     └── edit.php
│   │
│   └── Config/
│         ├── Routes.php
│         └── Database.php
│
├── public/
│   └── index.php
│
├── .env
└── composer.json

```
<hr>

<h2 align="center">🎲Banco de Dados🎲</h2>

## 🎲Script - Criação do Banco do Dados
```sql
--Script - criação do Banco do Dados
create database devbarbershop;

```
## 🎲Script - criação Tabelas
```sql
-- Script de criação de tabelas

create table usuarios (
    id serial primary key,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(255) not null
);

comment on table usuarios is 'Tabela de usuários do sistema';
comment on column usuarios.id is 'ID do usuário';
comment on column usuarios.nome is 'Nome do usuário';
comment on column usuarios.email is 'Email do usuário';
comment on column usuarios.senha is 'Senha criptografada';


insert into usuarios (nome, email, senha)
values ('Administrador', 'admin@devbarbershop.com', crypt('admin123', gen_salt('bf')));
-----------------------------------------------------------------------------------------------

create table cliente(
    codcli int generated by default as identity primary key,
    nomcli varchar(150) not null,
    telcli varchar(20) not null,
    emailcli varchar(100) not null,
    bairrocli varchar(100) not null,
    ruaendcli varchar(100) not null,
    sexocli varchar(10) not null,
    cidadecli varchar(50) not null,
    dtnascli date not null
);

comment on table cliente is 'Tabela de clientes da Barbearia';
comment on column cliente.codcli is 'Código do cliente';
comment on column cliente.nomcli is 'Nome do cliente';
comment on column cliente.telcli is 'Telefone do cliente';
comment on column cliente.emailcli is 'E-mail do cliente';
comment on column cliente.bairrocli is 'Bairro do cliente';
comment on column cliente.ruaendcli is 'Rua do endereço do cliente';
comment on column cliente.sexocli is 'Sexo do cliente';
comment on column cliente.cidadecli is 'Cidade do cliente';
comment on column cliente.dtnascli is 'Data de nascimento do cliente';

-----------------------------------------------------------------------------------------------

create table fornecedor(
    codforn int generated by default as identity primary key,
    nomeforn varchar(150) not null,
    telforn varchar(20),
    emailforn varchar(100),
    enderecoforn varchar(100)
);

comment on table fornecedor is 'Tabela de fornecedores';
comment on column fornecedor.codforn is 'Código do fornecedor';
comment on column fornecedor.nomeforn is 'Nome do fornecedor';
comment on column fornecedor.telforn is 'Telefone do fornecedor';
comment on column fornecedor.emailforn is 'E-mail do fornecedor';
comment on column fornecedor.enderecoforn is 'Endereço do fornecedor';

-----------------------------------------------------------------------------------------------

create table funcionario(
    codfun int generated by default as identity primary key,
    nomefun varchar(100) not null,
    telfun varchar(20) not null,
    emailfun varchar(100) not null,
    cargofun varchar(100) not null,
    salariofun numeric(10, 2) not null
);

comment on table funcionario is 'Tabela de funcionários da Barbearia';
comment on column funcionario.codfun is 'Código do funcionário';
comment on column funcionario.nomefun is 'Nome do funcionário';
comment on column funcionario.telfun is 'Telefone do funcionário';
comment on column funcionario.emailfun is 'E-mail do funcionário';
comment on column funcionario.cargofun is 'Cargo do funcionário';
comment on column funcionario.salariofun is 'Salário do funcionário';

-----------------------------------------------------------------------------------------------

create table servico(
    codserv int generated by default as identity primary key,
    nomeserv varchar(100) not null,
    descserv varchar(100),
    precoserv numeric(10, 2) not null
);

comment on table servico is 'Tabela de serviços oferecidos pela Barbearia';
comment on column servico.codserv is 'Código do Serviço';
comment on column servico.nomeserv is 'Nome do serviço';
comment on column servico.descserv is 'Descrição do serviço oferecido pela Barbearia';
comment on column servico.precoserv is 'Preço dos serviços oferecidos pela Barbearia';

-----------------------------------------------------------------------------------------------

create table produto(
    codprod int generated by default as identity primary key,
    nomeprod varchar(100) not null,
    descprod varchar(255),
    qtdprod int not null,
    precoprod numeric(10, 2) not null,
    fornecedorcodforn int references fornecedor(codforn),
    servicocodserv int references servico(codserv)
);

comment on table produto is 'Tabela de produtos';
comment on column produto.codprod is 'Código do produto';
comment on column produto.nomeprod is 'Nome do produto';
comment on column produto.descprod is 'Descrição do produto';
comment on column produto.qtdprod is 'Quantidade do produto em estoque';
comment on column produto.precoprod is 'Preço do produto';
comment on column produto.fornecedorcodforn is 'Código do fornecedor do produto';
comment on column produto.servicocodserv is 'Código do serviço relacionado ao produto';

-----------------------------------------------------------------------------------------------

create table agendamento(
    codagen int generated by default as identity primary key,
    data_hora timestamp not null,
    status varchar(50) not null,
    clientecodcli int references cliente(codcli),
    funcionariocodfun int references funcionario(codfun)
);

comment on table agendamento is 'Tabela de agendamentos';
comment on column agendamento.codagen is 'Código do agendamento';
comment on column agendamento.data_hora is 'Data e hora do agendamento';
comment on column agendamento.status is 'Status do agendamento';
comment on column agendamento.clientecodcli is 'Código do cliente';
comment on column agendamento.funcionariocodfun is 'Código do funcionário';

-----------------------------------------------------------------------------------------------

create table pagamento(
    codpag int generated by default as identity primary key,
    valor numeric(10, 2) not null,
    data_hora_pagamento timestamp not null,
    forma_pagamento varchar(50) not null,
    clientecodcli int references cliente(codcli),
    agendamentocodagen int references agendamento(codagen)
);

comment on table pagamento is 'Tabela de pagamentos';
comment on column pagamento.codpag is 'Código do pagamento';
comment on column pagamento.valor is 'Valor do pagamento';
comment on column pagamento.data_hora_pagamento is 'Data e hora do pagamento';
comment on column pagamento.forma_pagamento is 'Forma de pagamento';
comment on column pagamento.clientecodcli is 'Código do cliente';
comment on column pagamento.agendamentocodagen is 'Código do agendamento';

-----------------------------------------------------------------------------------------------

create table historico_servico(
    codhistorico int generated by default as identity primary key,
    data_hora timestamp not null,
    servicocodserv int references servico(codserv),
    clientecodcli int references cliente(codcli),
    funcionariocodfun int references funcionario(codfun)
);

comment on table historico_servico is 'Tabela de histórico de serviços prestados';
comment on column historico_servico.codhistorico is 'Código do histórico de serviço';
comment on column historico_servico.data_hora is 'Data e hora do serviço';
comment on column historico_servico.servicocodserv is 'Código do serviço';
comment on column historico_servico.clientecodcli is 'Código do cliente';
comment on column historico_servico.funcionariocodfun is 'Código do funcionário';


```





