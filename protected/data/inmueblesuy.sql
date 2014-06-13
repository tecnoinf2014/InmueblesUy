SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `inmuebles_uy` ;
CREATE SCHEMA IF NOT EXISTS `inmuebles_uy` DEFAULT CHARACTER SET utf8 ;
USE `inmuebles_uy` ;

-- -----------------------------------------------------
-- Table `inmuebles_uy`.`configuracion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`configuracion` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`configuracion` (
  `id` INT NOT NULL ,
  `clave` VARCHAR(45) NULL ,
  `valor` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`tipo_contrato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`tipo_contrato` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`tipo_contrato` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`tipo_inmueble`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`tipo_inmueble` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`tipo_inmueble` (
  `id` INT NOT NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`estado_inmueble`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`estado_inmueble` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`estado_inmueble` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`departamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`departamento` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`departamento` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`cliente` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `ci` VARCHAR(10) NOT NULL ,
  `telefono` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `EMAIL_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `CI_UNIQUE` (`ci` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`usuario` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombres` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `ci` VARCHAR(10) NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `telefono` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `EMAIL_UNIQUE` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`direccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`direccion` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`direccion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `barrio` VARCHAR(45) NULL ,
  `calle` VARCHAR(100) NULL ,
  `nro_puerta` VARCHAR(4) NULL ,
  `apto` INT NULL ,
  `coordenadas` VARCHAR(100) NULL ,
  `departamentos` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  INDEX `fk_DIRECCION_1` (`departamentos` ASC) ,
  CONSTRAINT `fk_DIRECCION_1`
    FOREIGN KEY (`departamentos` )
    REFERENCES `inmuebles_uy`.`departamento` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`inmueble`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`inmueble` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`inmueble` (
  `id` INT NOT NULL ,
  `estado` INT NOT NULL ,
  `descripcion` VARCHAR(500) NULL ,
  `tipo_inmueble` INT NULL ,
  `direccion` INT NULL ,
  `tipo_contrato` INT NULL ,
  `precio` DOUBLE NULL ,
  `mts2` INT NULL ,
  `cant_banios` INT NULL ,
  `cant_cuartos` INT NULL ,
  `cochera` TINYINT(1) NULL ,
  `plantas` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  INDEX `FK_ESTADO` (`estado` ASC) ,
  INDEX `FK_TIPO_INMUEBLE` (`tipo_inmueble` ASC) ,
  INDEX `FK_DIRECCION` (`direccion` ASC) ,
  INDEX `FK_TIPO_CONTRATO` (`tipo_contrato` ASC) ,
  CONSTRAINT `FK_ESTADO`
    FOREIGN KEY (`estado` )
    REFERENCES `inmuebles_uy`.`estado_inmueble` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_TIPO_INMUEBLE`
    FOREIGN KEY (`tipo_inmueble` )
    REFERENCES `inmuebles_uy`.`tipo_inmueble` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_DIRECCION`
    FOREIGN KEY (`direccion` )
    REFERENCES `inmuebles_uy`.`direccion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_TIPO_CONTRATO`
    FOREIGN KEY (`tipo_contrato` )
    REFERENCES `inmuebles_uy`.`tipo_contrato` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`transaccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`transaccion` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`transaccion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cli_compra` INT NULL ,
  `cli_venta` INT NULL ,
  `inmueble` INT NULL ,
  `tipo_contrato` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  INDEX `FK_CLI_COMPRA_TR` (`cli_compra` ASC) ,
  INDEX `FK_CLI_VENTA_TR` (`cli_venta` ASC) ,
  INDEX `FK_INMUEBLE_TR` (`inmueble` ASC) ,
  INDEX `FK_CONTRATO_TR` (`tipo_contrato` ASC) ,
  CONSTRAINT `FK_CLI_COMPRA_TR`
    FOREIGN KEY (`cli_compra` )
    REFERENCES `inmuebles_uy`.`cliente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CLI_VENTA_TR`
    FOREIGN KEY (`cli_venta` )
    REFERENCES `inmuebles_uy`.`cliente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_INMUEBLE_TR`
    FOREIGN KEY (`inmueble` )
    REFERENCES `inmuebles_uy`.`inmueble` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CONTRATO_TR`
    FOREIGN KEY (`tipo_contrato` )
    REFERENCES `inmuebles_uy`.`tipo_contrato` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`evento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`evento` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`evento` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(500) NULL ,
  `inmueble` INT NOT NULL ,
  `usuario` INT NOT NULL ,
  `fecha_inicio` DATETIME NOT NULL ,
  `fecha_fin` DATETIME NOT NULL ,
  `cliente` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  INDEX `FK_INMUEBLE_EVE` (`inmueble` ASC) ,
  INDEX `FK_USUARIO_EVE` (`usuario` ASC) ,
  INDEX `FK_CLIENTE_EVE` (`cliente` ASC) ,
  CONSTRAINT `FK_INMUEBLE_EVE`
    FOREIGN KEY (`inmueble` )
    REFERENCES `inmuebles_uy`.`inmueble` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_USUARIO_EVE`
    FOREIGN KEY (`usuario` )
    REFERENCES `inmuebles_uy`.`usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CLIENTE_EVE`
    FOREIGN KEY (`cliente` )
    REFERENCES `inmuebles_uy`.`cliente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `inmuebles_uy`.`imagen`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inmuebles_uy`.`imagen` ;

CREATE  TABLE IF NOT EXISTS `inmuebles_uy`.`imagen` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `type` VARCHAR(5) NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `img` BLOB NOT NULL ,
  `inmueble` INT NULL ,
  `is_preview` TINYINT(1) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `ID_UNIQUE` (`id` ASC) ,
  INDEX `FK_INMUEBLE_IMG` (`inmueble` ASC) ,
  CONSTRAINT `FK_INMUEBLE_IMG`
    FOREIGN KEY (`inmueble` )
    REFERENCES `inmuebles_uy`.`inmueble` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
