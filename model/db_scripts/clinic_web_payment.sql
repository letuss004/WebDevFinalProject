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
DROP TABLE IF EXISTS `clinic_db`.`account` ;

CREATE TABLE IF NOT EXISTS `clinic_db`.`account` (
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `clinic_db`.`job`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clinic_db`.`job` ;

CREATE TABLE IF NOT EXISTS `clinic_db`.`job` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `jobName` VARCHAR(45) NOT NULL,
  `salary` INT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `job_UNIQUE` (`jobName` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `clinic_db`.`employee`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clinic_db`.`employee` ;

CREATE TABLE IF NOT EXISTS `clinic_db`.`employee` (
  `employeeID` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `jobId` INT NOT NULL,
  `fullName` VARCHAR(45) NULL,
  `birthdate` DATE NULL DEFAULT NULL,
  `phoneNumber` VARCHAR(45) NULL DEFAULT NULL,
  `address` VARCHAR(45) NULL,
  `firstDate` INT NULL DEFAULT NULL,
  PRIMARY KEY (`employeeID`),
  INDEX `jobId_fk` (`jobId` ASC) VISIBLE,
  INDEX `user_name_fk_idx` (`username` ASC) VISIBLE,
  CONSTRAINT `jobId_fk`
    FOREIGN KEY (`jobId`)
    REFERENCES `clinic_db`.`job` (`id`),
  CONSTRAINT `user_name_fk`
    FOREIGN KEY (`username`)
    REFERENCES `clinic_db`.`account` (`username`))
ENGINE = InnoDB
AUTO_INCREMENT = 10009
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `clinic_db`.`attendance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clinic_db`.`attendance` ;

CREATE TABLE IF NOT EXISTS `clinic_db`.`attendance` (
  `employeeID` INT NOT NULL,
  `time` DATETIME NULL DEFAULT NULL,
  `status` VARCHAR(45) NOT NULL,
  INDEX `fk_employeeId_idx` (`employeeID` ASC) INVISIBLE,
  CONSTRAINT `fk_employeeId`
    FOREIGN KEY (`employeeID`)
    REFERENCES `clinic_db`.`employee` (`employeeID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `clinic_db`.`payment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clinic_db`.`payment` ;

CREATE TABLE IF NOT EXISTS `clinic_db`.`payment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `employeeId` INT NOT NULL,
  `adminUsername` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_empID_idx` (`employeeId` ASC) VISIBLE,
  INDEX `fk_adminID_idx` (`adminUsername` ASC) VISIBLE,
  CONSTRAINT `fk_empID`
    FOREIGN KEY (`employeeId`)
    REFERENCES `clinic_db`.`employee` (`employeeID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adminID`
    FOREIGN KEY (`adminUsername`)
    REFERENCES `clinic_db`.`account` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data for table `clinic_db`.`account`
-- -----------------------------------------------------
START TRANSACTION;
USE `clinic_db`;
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('admin', 'letuadmin@gmail.com', '12345678');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss001', 'letuss001@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss002', 'letuss002@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss003', 'letuss003@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss004', 'letuss004@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss005', 'letuss005@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss006', 'letuss006@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss007', 'letuss007@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss008', 'letuss008@gmail.com', '123456');
INSERT INTO `clinic_db`.`account` (`username`, `email`, `password`) VALUES ('letuss009', 'letuss009@gmail.com', '123456');

COMMIT;


-- -----------------------------------------------------
-- Data for table `clinic_db`.`job`
-- -----------------------------------------------------
START TRANSACTION;
USE `clinic_db`;
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (1, 'Administrator', 10000, 'admin');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (2, 'Radiologic technician.', 1000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (3, 'Dietician', 2000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (4, 'Respiratory therapist.', 3000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (5, 'Registered nurse.', 4000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (6, 'Occupational therapist.', 5000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (7, 'Pharmacist', 6000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (8, 'Physician assistant.', 7000, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (9, 'Medical technologist.', 6500, 'medical');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (10, 'Floor cleaner', 500, 'normal');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (11, 'Waste collector', 600, 'normal');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (12, 'Equipment cleaner', 400, 'normal');
INSERT INTO `clinic_db`.`job` (`id`, `jobName`, `salary`, `type`) VALUES (13, 'Guardian', 350, 'normal');

COMMIT;


-- -----------------------------------------------------
-- Data for table `clinic_db`.`employee`
-- -----------------------------------------------------
START TRANSACTION;
USE `clinic_db`;
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10000, 'admin', 1, 'Le Anh Tu', '2000-08-13', '0336407556', 'Cần Thơ', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10001, '', 2, 'Le Duy	', NULL, '0336323421', 'Đà Nẵng', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10002, '', 3, 'Pham Ngoc Mai Lam	', NULL, '0336211231', 'An Giang', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10003, '', 4, 'Pham Chi Trung	', NULL, '0912617231', 'Quảng Trị', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10004, '', 5, 'Dao Trong Thanh Hoa	', NULL, '0123122336', 'Quảng Ngãi', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10005, '', 6, 'Dao Thanh Trong Hoa	', NULL, '0352127556', 'Thanh Hóa', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10006, '', 7, 'Pham Tuan Thanh	', NULL, '0336752342', 'Nghệ An', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10007, '', 8, 'Le Van Khoa	', NULL, '0332135896', 'Vĩnh Phúc', NULL);
INSERT INTO `clinic_db`.`employee` (`employeeID`, `username`, `jobId`, `fullName`, `birthdate`, `phoneNumber`, `address`, `firstDate`) VALUES (10008, '', 9, 'Le Thi Hang	', NULL, '0339999999', 'TPHCM', NULL);

COMMIT;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
