create database notas_2023;
use notas_2023;

create table usuarios(
id_usuario int auto_increment not null primary key,
nombreusu varchar(60) not null,
apellidousu varchar(60) not null,
usuario varchar(60) not null unique,
password varchar (80) not null,
perfil varchar (30) not null,
estado varchar (20) not null
);
create table materias(
id_materias int (15) not null auto_increment primary key,
nombrema varchar (30) not null);
create table  estudiantes(
id_estudiante int (15) not null auto_increment primary key,
nombrees varchar (60) not null,
apellidoes varchar (60) not null,
documentoes varchar (12)not null,
correoes varchar(60) not null,
mareriaes varchar (30) not null,
docente varchar (60) not null,
promedio int (3)not null,
fresgistrado date);
create table docentes(
id_docente  int (15)not null auto_increment primary key,
nombredoc varchar(60) not null,
apellidodoc varchar(60)not null,
documentodoc varchar(12) not null,
correodoc varchar(40) not null,
materia varchar (30) not null,
notas decimal(5,1) not null);
create table notas_estudiante_materia(
id int not null auto_increment primary key,
id_estu int (15) not null,
id_mate int (15) not null,
id_doce int (15) not null,
puntaje decimal(5,1)not null,
foreign key (id_estu) references estudiantes(id_estudiante) on delete cascade on update cascade,
foreign key (id_mate) references materias(id_materias) on delete cascade on update cascade ,
foreign key (id_doce) references docentes(id_docente)  on  delete cascade on update cascade);

