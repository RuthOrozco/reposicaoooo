create database reposicao3;

use reposicao3;

create table artigo(
    idartigo int primary key auto_increment,
    titulo varchar(30),
    autor varchar(40),
    artigo text,
    foto varchar(30) not null
);