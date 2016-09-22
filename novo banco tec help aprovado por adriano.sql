-- MySQL Script generated by MySQL Workbench
-- 09/06/16 16:51:35
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema techelp
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema techelp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `techelp` DEFAULT CHARACTER SET utf8 ;
USE `techelp` ;

-- -----------------------------------------------------
-- Table `techelp`.`cadUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`cadUsuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `email` VARCHAR(150) NULL,
  `senha` VARCHAR(45) NULL,
  `cpf` VARCHAR(11) NULL,
  `tipoUsuario` VARCHAR(30) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techelp`.`cadEquipamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`cadEquipamentos` (
  `idEquipamentos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(150) NULL,
  `situacao` VARCHAR(45) NULL,
  `tombo` INT NULL,
  PRIMARY KEY (`idEquipamentos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techelp`.`cadCurso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`cadCurso` (
  `idCurso` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) CHARACTER SET 'big5' NULL,
  PRIMARY KEY (`idCurso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techelp`.`cadLocal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`cadLocal` (
  `idLocal` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NULL,
  `sala` VARCHAR(45) NULL,
  PRIMARY KEY (`idLocal`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techelp`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`reserva` (
  `idReserva` INT NOT NULL AUTO_INCREMENT,
  `id_Usuario` INT NULL,
  `id_Local` INT NULL,
  `horario` VARCHAR(45) NULL,
  `id_Equipamentos` INT NULL,
  `id_Curso` INT NULL,
  `turno` VARCHAR(45) NULL,
  `data` DATE NULL,
  `situacao` VARCHAR(45) NULL,
  PRIMARY KEY (`idReserva`),
  INDEX `idCadUsuario_idx` (`id_Usuario` ASC),
  INDEX `idLocal_idx` (`id_Local` ASC),
  INDEX `idEquipamentos_idx` (`id_Equipamentos` ASC),
  INDEX `idCurso_idx` (`id_Curso` ASC),
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`id_Usuario`)
    REFERENCES `techelp`.`cadUsuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idLocal`
    FOREIGN KEY (`id_Local`)
    REFERENCES `techelp`.`cadLocal` (`idLocal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idEquipamentos`
    FOREIGN KEY (`id_Equipamentos`)
    REFERENCES `techelp`.`cadEquipamentos` (`idEquipamentos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idCurso`
    FOREIGN KEY (`id_Curso`)
    REFERENCES `techelp`.`cadCurso` (`idCurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techelp`.`denuncia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`denuncia` (
  `idDenuncia` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL,
  `descricao` VARCHAR(300) NULL,
  `situacao` VARCHAR(45) NULL,
  `data` DATE NULL,
  `hora` DATETIME NULL,
  `imagem` VARCHAR(45) NULL,
  PRIMARY KEY (`idDenuncia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techelp`.`Log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techelp`.`Log` (
  `idLog` INT NOT NULL,
  `idUsuario` INT NULL,
  `data` DATETIME NULL,
  `descricao` VARCHAR(60) NULL,
  PRIMARY KEY (`idLog`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;