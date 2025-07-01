--Drop das tabelas na ordem inversa de criação para evitar conflitos de dependência
--Possuem chaves estrangeiras
drop table if exists historico_servico cascade;
drop table if exists pagamento cascade;
drop table if exists agendamento cascade;
drop table if exists produto cascade;

--tabelas referenciadas pelas anteriores
drop table if exists servico cascade;
drop table if exists funcionario cascade;
drop table if exists fornecedor cascade;
drop table if exists cliente cascade;
