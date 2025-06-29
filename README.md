<!--->
<p  align="center">
  <img src="https://github.com/JohnnyMatheus/Sistema-Gerenciamento-para-Barbearia/blob/main/Imagens/devbarberLogo.png" />
</p>

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
