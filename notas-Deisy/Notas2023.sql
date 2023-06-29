create database Notas2023;
use Notas2023;

create table usuarios(
id_usuario int auto_increment not null primary key,
Nombreusu varchar(60)not null,
Apellidousu varchar(60)not null,
Usuario varchar(40) not null unique,
Passwordu varchar(80) not null,
Perfil varchar(30) not null,
Estado varchar(20) not null);

create table materias(
id_materia int not null auto_increment primary key,
Nombrema varchar(30) not null);

create table estudiante(
id_estudiante int(15) not null auto_increment primary key,
Nombrees varchar(60) not null,
Apellidoes varchar(60) not null,
Documentoes varchar(12) not null,
Correoes varchar(60) not null,
Materiaes varchar(30) not null,
Docente varchar (60) not null,
Promedio int(3) not null,
Fecha_registro DATE);

create table docente(
id_docente int(15) not null auto_increment primary key,
Nombredoc varchar(60) not null,
Apellidodoc varchar(60) not null,
Documentodoc varchar(12) not null,
Correodoc varchar(40) not null,
Materia varchar(30) not null,
Notas decimal(5,1) not null
);
alter table docente add column Perfildoc VARCHAR(60) not null;
alter table docente add column Estadodoc VARCHAR(60) not null;

create table notas_estudiantes(
id int not null primary key auto_increment,
id_estu int(15) not null,
id_mate int(15) not null,
id_doce int(15) not null,
Puntaje decimal(5,1) not null,
foreign key (id_estu) references estudiante(id_estudiante) on delete cascade on update cascade,
foreign key (id_mate) references materias(id_materia) on delete cascade on update cascade,
foreign key (id_doce) references docente(id_docente) on delete cascade on update cascade
);
