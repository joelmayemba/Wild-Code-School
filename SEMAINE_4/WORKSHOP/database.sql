-- https://wildcodeschool.github.io/workshop-database-introduction/

DROP DATABASE KAAMELOTT;

-- Crée une base de données que tu nommeras kaamelott
CREATE DATABASE KAAMELOTT;

-- TRUNCATE TABLE KNIGHT;
-- TRUNCATE TABLE WEAPON;

-- Dans cette nouvelle BDD, crée une table knight qui contiendra les champs suivants :
CREATE TABLE KAAMELOTT . KNIGHT(
    ID INT NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(80) NOT NULL,
    AGE INT NOT NULL,
    PRIMARY KEY(`ID`)
);

-- Crée la table weapon id INT (clé primaire, autoincrémentée) name VARCHAR(50)CREATE TABLE weapon(
CREATE TABLE KAAMELOTT . WEAPON(
    ID INT NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(50) NOT NULL,
    PRIMARY KEY(`ID`)
);

INSERT INTO kaamelott . weapon (name) values 
("Epée"),
("Hache"),
("Arc"),
("Lance"),
("Lance");

-- Ajoute les chevaliers suivants à l’aide d’une ou plusieurs requêtes (INSERT)
INSERT INTO kaamelott . knight (name,age) values 
    ('Arthur', 40),
    ('Perceval', 35),
    ('Lancelot', 30),
    ('Guenièvre', 28),
    ('Karadoc', 40),
    ('Merlin', 50),
    ('Bohort', 45),
    ('Yvain', 32),
    ('Leodegrance', 60),
    ('Dame Séli', 55);


-- C’est l’anniversaire de Perceval, modifie son âge en 36 ans (UPDATE)
UPDATE kaamelott . knight
SET age = age + 1
WHERE name = "Perceval";

-- Affiche uniquement les chevaliers de plus de 37 ans (utilisation de WHERE)
SELECT * FROM knight WHERE age > 37;

-- Ajoute un champ is_dubbed (est adoubé) de type BOOLEAN et nullable (ALTER)
ALTER TABLE kaamelott . knight

-- Passe la valeur de is_dubbed à true pour tous les chevaliers
ADD is_dubbed BOOLEAN NULL DEFAULT 1;

UPDATE kaamelott . knight
SET is_dubbed = false
WHERE name = 'Perceval';


-- Tu t’aperçois que Perceval n’est pas adoubé, passe uniquement ce chevalier à false
UPDATE kaamelott . knight
SET is_dubbed = false
WHERE name = 'Perceval';