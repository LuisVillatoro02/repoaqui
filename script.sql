
/*Crear esquema de base de datos y seleccionarlo*/
create schema electronicos;
use electronicos;


/* Crear tabla que almacena los comentarios que ingresan los clientes*/
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` VARCHAR(100) NOT NULL,
  `telefono` VARCHAR(25) NULL DEFAULT NULL,
  `correo` VARCHAR(100) NULL DEFAULT NULL,
  `comentario` TEXT NULL DEFAULT NULL,
  `fecha` DATETIME NOT NULL,
    PRIMARY KEY (`id`))
ENGINE = InnoDB;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER SCHEMA `comentario`  DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;


/*Crear trigger que ingresa la fecha y hora en que se ingresó el comentario*/
CREATE TRIGGER ingresa_fecha BEFORE INSERT ON comentario
FOR EACH ROW SET NEW.fecha = NOW();