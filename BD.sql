CREATE DATABASE Boletos_Ventas;
USE Boletos_Ventas;

CREATE TABLE Usuario(
   Id_Usuario  INT(255) auto_increment NOT NULL,
   Nombre      VARCHAR(20) NOT NULL,
   Apellido    VARCHAR(20) NOT NULL,
   Cedula      VARCHAR(20) NOT NULL,
   Direccion   VARCHAR(50) NOT NULL,
   Sexo        CHAR NOT NULL,
   Telefono    VARCHAR(20) NOT NULL,
   Correo      VARCHAR(30) NOT NULL,
   Contraseña  VARCHAR(10) NOT NULL,
   Usuario     VARCHAR(20) NOT NULL,
   rot         CHAR(5)  NULL,
   UNIQUE (Correo),
   CONSTRAINT pk_Usuario PRIMARY KEY (Id_Usuario)
);

CREATE TABLE Boleto(
   Id_Boleto  INT(255) auto_increment NOT NULL,
   Seria      INT(20) NOT NULL,
   usuario_Id INT(255) NOT NULL, 
   Nombre     VARCHAR(20) NOT NULL,
   Fecha      DATE NOT NULL,
   Ubicacion  VARCHAR(20) NOT NULL,
   CONSTRAINT pk_Boleto PRIMARY KEY (Id_Boleto),
   CONSTRAINT fk_Boleto_Usuario FOREIGN KEY(usuario_Id) REFERENCES Usuario(Id_Usuario)
);

INSERT INTO usuario VALUE (null, "Brandom", "Vargas", "26566047", "San Antonio", "M", "04247392133", "brandom@brandom.com", "ldrago", "ldrago25", "Admin");


