
drop database if exists pets;
create database if not exists pets;
use pets;

-- criando tabelas

create table pessoa (
id int auto_increment,
nome varchar(50),
email varchar(50),
endereco varchar(50),
bairro varchar(50),
id_cidade int,
cep varchar(8),
primary key(id)
);

create table animal (
id int auto_increment,
nome varchar(50),
especie varchar(50),
raca varchar(50),
data_nascimento date,
castrado boolean,
id_pessoa int,
primary key(id),
constraint fk_pessoaanimal foreign key(id_pessoa) references pessoa(id)
);

create table cidade (
id int auto_increment,
nome_cidade varchar(50),
estado varchar(50),
primary key(id)
);

-- tabelas criadas