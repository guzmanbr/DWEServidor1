create database peliculasBD;
USE peliculasBD;

CREATE TABLE peliculas(
  id INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(64) NOT NULL,
  fecha DATE not null,
  precio  numeric(2,2) not null,
  PRIMARY KEY(id)
);

INSERT INTO `peliculas` (`titulo`, `fecha`, `precio`) VALUES
('Blade Runner','1982-08-21','1.5'),
('Kill Bill','2003-10-10','1.1'),
('Pulp Fiction','1995-01-13','1.25'),
('Taxi Diver','1977-03-10','1.5');


create database ropaBD;
USE ropaBD;


CREATE TABLE usuario(

  idUsuario INT NOT NULL AUTO_INCREMENT,
  nombreUsuario VARCHAR(64) NOT NULL,
  contraseña DATE not null
  PRIMARY KEY(id)

);


CREATE TABLE calzado(
  
  idCalzado INT NOT NULL AUTO_INCREMENT,
  nombreCalzado VARCHAR(64) NOT NULL,
  precio  numeric(2,2) not null,
  marca VARCHAR (60) NOT NULL,
  color VARCHAR (60) NOT NULL,
  PRIMARY KEY(id)

);


INSERT INTO `calzado` (`nombre`, `precio`, `marca`,`color`) VALUES

  ('Nike Air Force 1 Fresh','140.00','Nike','Negro'),
  ('Nike Air Force 1 Fresh','140.00','Nike','Blanco'),
  ('Nike Zoom Vomero 5','160.00','Nike','Negro'),
  ('Nike Air Flight 89','130.00','Nike','Blanco'),
  ('Nike Air More Uptempo 96','180.00','Nike','Beige'),
  ('Air Jordan 7 Retro SE "Black Olive"','220.00','Jordan','Verde'),
  ('Air Jordan 1 Mid "Alternate Bred Toe"','130.00','Jordan','Rojo'),
  ('Air Jordan 7 Retro "Cardinal"','200.00','Jordan','Blanco'),
  ('Air Jordan 1 Low "True Blue Cement"','120.00','Jordan','Azul'),
  ('Air Jordan 5 Retro','210.00','Jordan','Negro')

);