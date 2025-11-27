-- MySQL Script - Banco Fut do GG
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- SCHEMA futdogg
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `futdogg` DEFAULT CHARACTER SET utf8 ;
USE `futdogg` ;

-- -----------------------------------------------------
-- Table POSIÇÃO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `posicao` (
  `id_posicao` INT NOT NULL AUTO_INCREMENT,
  `nome_posicao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_posicao`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table TÉCNICO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tecnico` (
  `id_tecnico` INT NOT NULL AUTO_INCREMENT,
  `nome_tecnico` VARCHAR(100) NOT NULL,
  `idade_tecnico` INT NULL,
  PRIMARY KEY (`id_tecnico`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table JOGADOR
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jogador` (
  `id_jogador` INT NOT NULL AUTO_INCREMENT,
  `nome_jogador` VARCHAR(100) NOT NULL,
  `numero_camisa` INT NULL,
  `idade_jogador` INT NULL,
  `posicao_id_posicao` INT NOT NULL,
  PRIMARY KEY (`id_jogador`),
  INDEX `fk_posicao_idx` (`posicao_id_posicao` ASC),
  CONSTRAINT `fk_jogador_posicao`
    FOREIGN KEY (`posicao_id_posicao`)
    REFERENCES `posicao` (`id_posicao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table PARTIDA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `partida` (
  `id_partida` INT NOT NULL AUTO_INCREMENT,
  `data_partida` DATE NOT NULL,
  `local_partida` VARCHAR(100) NULL,
  `time_adversario` VARCHAR(100) NULL,
  `placar` VARCHAR(10) NULL,
  `tecnico_id_tecnico` INT NOT NULL,
  PRIMARY KEY (`id_partida`),
  INDEX `fk_partida_tecnico_idx` (`tecnico_id_tecnico` ASC),
  CONSTRAINT `fk_partida_tecnico`
    FOREIGN KEY (`tecnico_id_tecnico`)
    REFERENCES `tecnico` (`id_tecnico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- FIM
-- -----------------------------------------------------

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
