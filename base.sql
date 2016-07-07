CREATE DATABASE panelw;

CREATE TABLE equipos
(
  id serial NOT NULL,
  dyndns character varying(50) NOT NULL,
  usuario character varying(50) NOT NULL,
  contrasena character varying(150) NOT NULL,
  CONSTRAINT equipos_pkey PRIMARY KEY (id)
);

CREATE TABLE usuarios
(
id serial NOT NULL,
nombre character varying(50) NOT NULL,
usuario character varying(50) NOT NULL,
contrasena character varying(150) NOT NULL,
CONSTRAINT usuarios_pkey PRIMARY KEY (id)
);