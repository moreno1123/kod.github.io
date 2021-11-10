-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

DROP USER IF EXISTS 'iwa_2020'@'localhost';
DROP USER IF EXISTS iwa_2020;
DROP SCHEMA IF EXISTS `iwa_2020_zb_projekt`;

CREATE USER 'iwa_2020'@'localhost' IDENTIFIED BY 'foi2020';

GRANT SELECT, INSERT, TRIGGER, UPDATE, DELETE ON TABLE `iwa_2020_zb_projekt`.* TO 'iwa_2020'@'localhost';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;





-- -----------------------------------------------------
-- Schema iwa_2020_zb_projekt
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema iwa_2020_zb_projekt
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `iwa_2020_zb_projekt` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `iwa_2020_zb_projekt` ;

-- -----------------------------------------------------
-- Table `iwa_2020_zb_projekt`.`tip_korisnika`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iwa_2020_zb_projekt`.`tip_korisnika` (
  `tip_id` INT(10) NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`tip_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `iwa_2020_zb_projekt`.`korisnik`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iwa_2020_zb_projekt`.`korisnik` (
  `korisnik_id` INT(10) NOT NULL AUTO_INCREMENT,
  `tip_id` INT(10) NOT NULL,
  `korisnicko_ime` VARCHAR(50) NOT NULL,
  `lozinka` VARCHAR(50) NOT NULL,
  `ime` VARCHAR(50) NOT NULL,
  `prezime` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `slika` TEXT NULL,
  PRIMARY KEY (`korisnik_id`),
  INDEX `fk_korisnik_tip_korisnika_idx` (`tip_id` ASC),
  CONSTRAINT `fk_korisnik_tip_korisnika`
    FOREIGN KEY (`tip_id`)
    REFERENCES `iwa_2020_zb_projekt`.`tip_korisnika` (`tip_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `iwa_2020_zb_projekt`.`lokacija`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iwa_2020_zb_projekt`.`lokacija` (
  `lokacija_id` INT(10) NOT NULL AUTO_INCREMENT,
  `moderator_id` INT(10) NOT NULL,
  `naziv` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`lokacija_id`),
  INDEX `fk_kategorija_korisnik1_idx` (`moderator_id` ASC),
  CONSTRAINT `fk_kategorija_korisnik1`
    FOREIGN KEY (`moderator_id`)
    REFERENCES `iwa_2020_zb_projekt`.`korisnik` (`korisnik_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `iwa_2020_zb_projekt`.`zivotinja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iwa_2020_zb_projekt`.`zivotinja` (
  `zivotinja_id` INT(10) NOT NULL AUTO_INCREMENT,
  `korisnik_id` INT(10) NOT NULL,
  `datum_vrijeme_dodavanja` DATETIME NOT NULL,
  `naziv` VARCHAR(45) NOT NULL,
  `opis` TEXT NOT NULL,
  `slika` TEXT NOT NULL,
  PRIMARY KEY (`zivotinja_id`),
  INDEX `fk_projekt_korisnik1_idx` (`korisnik_id` ASC),
  CONSTRAINT `fk_projekt_korisnik1`
    FOREIGN KEY (`korisnik_id`)
    REFERENCES `iwa_2020_zb_projekt`.`korisnik` (`korisnik_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `iwa_2020_zb_projekt`.`zivotinje_na_lokaciji`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iwa_2020_zb_projekt`.`zivotinje_na_lokaciji` (
  `zivotinja_id` INT(10) NOT NULL,
  `lokacija_id` INT(10) NOT NULL,
  `admin` INT(1) NOT NULL,
  PRIMARY KEY (`zivotinja_id`, `lokacija_id`),
  INDEX `fk_projekt_ima_kategoriju_kategorija1_idx` (`lokacija_id` ASC),
  INDEX `fk_projekt_ima_kategoriju_projekt1_idx` (`zivotinja_id` ASC),
  CONSTRAINT `fk_projekt_ima_kategoriju_kategorija1`
    FOREIGN KEY (`lokacija_id`)
    REFERENCES `iwa_2020_zb_projekt`.`lokacija` (`lokacija_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projekt_ima_kategoriju_projekt1`
    FOREIGN KEY (`zivotinja_id`)
    REFERENCES `iwa_2020_zb_projekt`.`zivotinja` (`zivotinja_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

