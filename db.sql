SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `expedientes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `expedientes` ;

-- -----------------------------------------------------
-- Table `expedientes`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `expedientes`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `clave` VARCHAR(128) NOT NULL,
  `usuario_ult_act` VARCHAR(20) NULL,
  `fecha_ult_act` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `expedientes`.`expediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `expedientes`.`expediente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nro_entrada` INT NOT NULL,
  `correlativo` INT NULL,
  `memorando` VARCHAR(15) NULL,
  `oficio` VARCHAR(15) NULL,
  `descripcion` TEXT NOT NULL,
  `usuario_ult_act` VARCHAR(20) NULL,
  `fecha_ult_act` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_expediente_usuario1_idx` (`usuario_ult_act` ASC),
  CONSTRAINT `fk_expediente_usuario1`
    FOREIGN KEY (`usuario_ult_act`)
    REFERENCES `expedientes`.`usuario` (`nombre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `expedientes`.`seccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `expedientes`.`seccion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `usuario_ult_act` VARCHAR(20) NULL,
  `fecha_ult_act` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_seccion_usuario1_idx` (`usuario_ult_act` ASC),
  CONSTRAINT `fk_seccion_usuario1`
    FOREIGN KEY (`usuario_ult_act`)
    REFERENCES `expedientes`.`usuario` (`nombre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `expedientes`.`envios_expediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `expedientes`.`envios_expediente` (
  `id` INT NOT NULL,
  `id_expediente` INT NOT NULL,
  `id_seccion` INT NOT NULL,
  `fecha_entrada` DATETIME NULL,
  `fecha_salida` DATETIME NULL,
  `usuario_ult_act` VARCHAR(20) NULL,
  `fecha_ult_act` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_envios_expediente_expediente1_idx` (`id_expediente` ASC),
  INDEX `fk_envios_expediente_seccion1_idx` (`id_seccion` ASC),
  CONSTRAINT `fk_envios_expediente_expediente1`
    FOREIGN KEY (`id_expediente`)
    REFERENCES `expedientes`.`expediente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_envios_expediente_seccion1`
    FOREIGN KEY (`id_seccion`)
    REFERENCES `expedientes`.`seccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
