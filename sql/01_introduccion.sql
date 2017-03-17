#Iniciar linea de comandos de MSQL

cd../cd../cd xampp/cd mysql/cd bin/

mysql/ -u root -p

# Ver las bases de datos
show databases;

# Permite ver la version mysql
select version();

# Craer una base de datos
create database nombrebasededatos;

# Usar base de datos
use nombrebasededatos;

#Conectarme a una base de datos
connect nombrebasededatos;

#Ver las tablas 
show tables;

#Crear una tabla
create table clientes (
	-> id int auto_increment,
	-> documento bigint not null,
	-> nombres varchar(32) not null,
	-> telefonos bigint null,
	-> direccion varchar(32)null,
	-> primary key (id));

#Mostrar tablas
show tables;

#Mostrar estructura de la tabla
describe clientes;

#Consultar tablas
select * from clientes;

#insertar datos en la tabla
insert into clientes values(
	-> default, 75000001, 'Jeremias Springfield',
	-> 8800011, 'Calle 100 con 23');