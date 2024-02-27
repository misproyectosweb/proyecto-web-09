CREATE DATABASE IF NOT EXISTS clientestaller;

USE clientestaller;

CREATE TABLE datosclientes
(
	Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Nombre VARCHAR(100) NOT NULL,
    Correo VARCHAR(100) NOT NULL,
    Direccion VARCHAR(150) NOT NULL,
    TelefonoCasa INT NOT NULL,
    TelefonoCelular INT NOT NULL
);

SHOW TABLES;

SELECT * FROM datosclientes;

ALTER TABLE datosclientes CHANGE TelefonoCasa Telefono_casa INT NOT NULL;

ALTER TABLE datosclientes CHANGE TelefonoCelular Telefono_celular INT NOT NULL;