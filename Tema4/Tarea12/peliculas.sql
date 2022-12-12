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