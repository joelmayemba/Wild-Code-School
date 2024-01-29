DROP DATABASE IF EXISTS `WILD_DB_QUEST`;

CREATE DATABASE `WILD_DB_QUEST`;

USE `WILD_DB_QUEST`;

DROP TABLE IF EXISTS `SCHOOL`;

CREATE TABLE `SCHOOL` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(100) NOT NULL,
    `CAPACITY` INT DEFAULT NULL,
    `COUNTRY` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`ID`)
) INSERT INTO `SCHOOL` VALUES (
    2,
    'Castelobruxo',
    380,
    'Brazil'
),
(
    3,
    'Durmstrang Institute',
    570,
    'Sweden'
),
(
    4,
    'Hogwarts School of Witchcraft and Wizardry',
    450,
    'United Kingdom'
),
(
    5,
    'Ilvermorny School of Witchcraft and Wizardry',
    300,
    'USA'
),
(
    6,
    'Koldovstoretz',
    125,
    'Russia'
);

DROP TABLE IF EXISTS `WIZARD`;

CREATE TABLE `WIZARD` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `FIRSTNAME` VARCHAR(100) NOT NULL,
    `LASTNAME` VARCHAR(100) NOT NULL,
    `BIRTHDAY` DATE NOT NULL,
    `BIRTH_PLACE` VARCHAR(255) DEFAULT NULL,
    `BIOGRAPHY` TEXT,
    `IS_MUGGLE` TINYINT(1) NOT NULL,
    PRIMARY KEY (`ID`)
)