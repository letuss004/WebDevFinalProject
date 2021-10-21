-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema clinic_db
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `clinic_db` ;

-- -----------------------------------------------------
-- Schema clinic_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinic_db` DEFAULT CHARACTER SET utf8 ;
USE `clinic_db` ;

-- -----------------------------------------------------
-- Table `clinic_db`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinic_db`.`account` (
  `userName` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `regDate` DATETIME NOT NULL,
  PRIMARY KEY (`userName`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinic_db`.`job`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinic_db`.`job` (
  `id` INT NOT NULL,
  `job` VARCHAR(45) NOT NULL,
  `salary` INT NOT NULL,
  `quantity` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `job_UNIQUE` (`job` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinic_db`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinic_db`.`employees` (
  `id` VARCHAR(45) NOT NULL,
  `userName` VARCHAR(45) NOT NULL,
  `jobId` INT NOT NULL,
  `fullName` VARCHAR(45) NOT NULL,
  `birthdate` DATE NOT NULL,
  `salary` INT NOT NULL,
  INDEX `user_name_fk_idx` (`userName` ASC) VISIBLE,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `jobId_UNIQUE` (`jobId` ASC) VISIBLE,
  CONSTRAINT `user_name_fk`
    FOREIGN KEY (`userName`)
    REFERENCES `clinic_db`.`account` (`userName`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `jobId_fk`
    FOREIGN KEY (`jobId`)
    REFERENCES `clinic_db`.`job` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinic_db`.`attendance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinic_db`.`attendance` (
  `id` INT NOT NULL,
  `userName` VARCHAR(45) NOT NULL,
  `time` DATETIME NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `userName_UNIQUE` (`userName` ASC) VISIBLE,
  CONSTRAINT `userName_fk`
    FOREIGN KEY (`userName`)
    REFERENCES `clinic_db`.`employees` (`userName`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinic_db`.`recruitment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinic_db`.`recruitment` (
  `id` INT NOT NULL,
  `fullName` VARCHAR(45) NOT NULL,
  `jobId` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `jobId_idx` (`jobId` ASC) VISIBLE,
  CONSTRAINT `jobId`
    FOREIGN KEY (`jobId`)
    REFERENCES `clinic_db`.`job` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `clinic_db`.`account`
-- -----------------------------------------------------
START TRANSACTION;
USE `clinic_db`;
INSERT INTO `clinic_db`.`account` (`userName`, `email`, `password`, `regDate`) VALUES ('admin', 'letuss004@gmail.com', '12345678', '2019-01-10 08:14:21');

COMMIT;

