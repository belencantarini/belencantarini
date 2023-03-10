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

-- Crear tabla
create table tratamientos
(
id INT(11) not null auto_increment primary key,
tratamiento VARCHAR(50) not null,
tarifa INT not null,
imagen text,
descripcion text
)

-- borrar tabla imagen
drop table tratamientos;

-- Modificar 
-- update tratamientos set imagen='https://media.istockphoto.com/id/606238302/es/foto/linda-ni%C3%B1a-recibiendo-tratamiento-con-%C3%A1cido-hialur%C3%B3nico.jpg?s=612x612&w=0&k=20&c=e0-eOiDgqmYCmZPHJ0m0c5dOtPlbPTk-jP3EmwAXV_o=' where id='1';


create table administradores
(
id INT(11) not null auto_increment primary key,
usuario VARCHAR(20) not null UNIQUE,
clave VARCHAR(255) not null
)

insert into administradores (usuario, clave) values ('admin', 'admin123');