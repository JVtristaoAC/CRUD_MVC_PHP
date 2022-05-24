create database if not exists Banco_MVC;

use Banco_MVC;

Create table if not exists Pessoa(
id int auto_increment not null primary key,
Nome Varchar(50) not null,
RG varchar(45) not null,
CPF Char(15) not null,
Data_Nascimento date not null,
email varchar(100) not null,
telefone varchar(11) not null,
Endereco varchar(45) not null
);

Create table if not exists Produto(
id int auto_increment not null primary key,
Produto Varchar(50) not null,
Estoque decimal(10,2) not null,
Preco Decimal(10,2) not null,
ID_categoria Int not null
);

Create table if not exists Categoria(
id int not null auto_increment primary key,
Categoria varchar(50) not null,
Descricao varchar(100) not null
);
