CREATE DATABASE IF NOT EXISTS mochila;
USE mochila;

CREATE TABLE cartucheras(
id int(255) auto_increment not null,
owner char(35) ,

CONSTRAINT pk_cartucheras PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE lapiz(
id int(255) auto_increment not null,
id_owner int(255) ,
color char(35),

CONSTRAINT pk_lapiz PRIMARY KEY(id),
CONSTRAINT fk_lapiz_cartucheras FOREIGN KEY(id_owner) REFERENCES cartucheras(id)
)ENGINE=InnoDB;