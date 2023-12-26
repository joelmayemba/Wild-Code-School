CREATE DATABASE IF NOT EXISTS `WILD_DB_QUEST`;

CREATE TABLE IF NOT EXISTS `WILD_DB_QUEST`.`WIZARD` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `FIRSTNAME` VARCHAR(100) NOT NULL,
    `LASTNAME` VARCHAR(100) NOT NULL,
    `IS_MUGGLE` BOOLEAN NOT NULL,
    `BIRTHDAY`DATE NOT NULL,
    `BIRTH_PLACE` VARCHAR(255) NULL,
    `BIOGRAPHY` TEXT NULL,
    PRIMARY KEY (`ID`)
);

INSERT INTO `wizard` (`ID`, `FIRSTNAME`, `LASTNAME`, `IS_MUGGLE`, `BIRTHDAY`, `BIRTH_PLACE`, `BIOGRAPHY`) VALUES
(1, 'Harry', 'Potter', 0, '1980-07-31', 'London', 'Biographie de Harry...'),
(2, 'Hermione', 'Granger', 0, '1979-09-19', 'London', 'Biographie d\'Hermione...'),
(3, 'Ron', 'Weasley', 0, '1980-03-01', 'Ottery St Catchpole', 'Biographie de Ron...'),
(4, 'Lily', 'Potter', 0, '1960-01-30', 'Godric\'s Hollow', 'Biographie de Lily...'),
(5, 'Ginny', 'Weasley', 0, '1981-08-11', 'Ottery St Catchpole', 'Biographie de Ginny...'),
(6, 'Fred', 'Weasley', 0, '1978-04-01', 'Ottery St Catchpole', 'Biographie de Fred...'),
(7, 'George', 'Weasley', 0, '1978-04-01', 'Ottery St Catchpole', 'Biographie de George...'),
(8, 'Tom', 'Riddle', 0, '1926-12-31', 'Wool\'s Orphanage', 'Biographie de Tom...'),
(9, 'Severus', 'Snape', 0, '1960-01-09', 'Spinner\'s End', 'Biographie de Severus...'),
(10, 'Drago', 'Malefoy', 0, '1980-06-05', 'Wiltshire', 'Biographie de Drago...'),
(11, 'Fleur', 'Delacour', 0, '1976-08-30', 'France', 'Biographie de Fleur...'),
(12, 'Narcissa', 'Malfoy', 0, '1955-05-05', 'England', 'Biographie de Narcissa...'),
(13, 'James', 'Potter', 0, '1960-03-27', 'Godric\'s Hollow', 'Biographie de James...'),
(14, 'Bill', 'Weasley', 0, '1970-11-29', 'Ottery St Catchpole', 'Biographie de Bill...'),
(15, 'Percy', 'Weasley', 0, '1976-08-22', 'Ottery St Catchpole', 'Biographie de Percy...'),
(16, 'Molly', 'Weasley', 0, '1949-10-30', 'Ottery St Catchpole', 'Biographie de Molly...'),
(17, 'Dolores', 'Umbridge', 0, '1965-08-26', 'London', 'Biographie de Dolores...'),
(18, 'Albus', 'Dumbledore', 0, '1881-08-01', 'Mould-on-the-Wold', 'Biographie de Dumbledore...');

CREATE TABLE IF NOT EXISTS `WILD_DB_QUEST`.`SCHOOL` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `NAME` VARCHAR(100) NOT NULL,
    `CAPACITY` INT NOT NULL,
    `COUNTRY` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`ID`)
);

SHOW TABLES FROM WILD_DB_QUEST;