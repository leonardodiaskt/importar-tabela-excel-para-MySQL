CREATE DATABASE PIZZAEXCEL;
USE PIZZAEXCEL;



CREATE TABLE PIZZAS(
	id int auto_increment,
    sabor varchar(35) not null,
    tamanho varchar(6) not null,
    preco varchar(8) not null,
    primary key (id)
);

INSERT INTO PIZZAS VALUES(NULL, "SABOR", "TAMANHO", "PREÇO");
