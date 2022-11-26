-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema universidad
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema universidad
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `universidad` DEFAULT CHARACTER SET utf8 ;
USE `universidad` ;

-- -----------------------------------------------------
-- Table `universidad`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`curso` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `escuela` VARCHAR(100) NOT NULL,
  `semestre` VARCHAR(100) NOT NULL,
  `profesor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `universidad`.`estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`estudiante` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(100) NOT NULL,
  `codigo` VARCHAR(10) NOT NULL,
  `dni` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `universidad`.`matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`matricula` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_curso` INT(11) NOT NULL,
  `id_estudiante` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `matricula_curso_idx` (`id_curso` ASC) ,
  INDEX `matricula_estudiante_idx` (`id_estudiante` ASC) ,
  CONSTRAINT `matricula_curso`
    FOREIGN KEY (`id_curso`)
    REFERENCES `universidad`.`curso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `matricula_estudiante`
    FOREIGN KEY (`id_estudiante`)
    REFERENCES `universidad`.`estudiante` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

