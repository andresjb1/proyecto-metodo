drop table if exists usuarios;
create table usuarios(
id_usuario int not null primary key auto_increment,
nombre varchar(50) not null
);