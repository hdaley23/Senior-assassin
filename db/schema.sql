DROP DATABASE IF EXISTS `senior_assassin`;

CREATE DATABASE `senior_assassin`;

USE `senior_assassin`;

CREATE TABLE `players` (
  `pla_id` int NOT NULL AUTO_INCREMENT,
  `pla_name` varchar(70) NOT NULL,
  `pla_instagram` varchar(45) NOT NULL,
  `pla_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pla_id`)
);


CREATE TABLE `senior_assassin`.`assignments` (
  `asn_id` INT NOT NULL,
  `asn_att_pla_id` INT NOT NULL,
  `asn_att_pla_first_name` VARCHAR(45) NOT NULL,
  `asn_att_pla_last_name` VARCHAR(45) NOT NULL,
  `asn_tar_pla_id` VARCHAR(45) NOT NULL,
  `asn_tar_pla_first_name` VARCHAR(45) NOT NULL,
  `asn_tar_pla_last_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`asn_id`))
;

CREATE TABLE `senior_assassin`.`attackers` (
  `att_id` INT NOT NULL AUTO_INCREMENT,
  `att_pla_id` VARCHAR(45) NOT NULL,
  `att_pla_first_name` VARCHAR(45) NOT NULL,
  `att_pla_last_name` VARCHAR(45) NOT NULL,
  `att_status` VARCHAR(45) NOT NULL,
  `att_number_of_kills` INT NULL,
  PRIMARY KEY (`att_id`))
  ;

  CREATE TABLE `senior_assassin`.`targets` (
  `tar_pla_id` INT NOT NULL,
  `tar_pla_first_name` VARCHAR(45) NOT NULL,
  `tar_pla_last_name` VARCHAR(50) NOT NULL,
  `tar_status` VARCHAR(45) NULL,
  PRIMARY KEY (`tar_pla_id`))
  ;