-- Crear base
create database belencantarini;

-- Utilizar base
use belencantarini;

-- Crear tabla
create table consultas
(
id INT(11) not null auto_increment primary key,
nombre VARCHAR(50) not null,
email VARCHAR(50) not null,
mensaje text not null
)
