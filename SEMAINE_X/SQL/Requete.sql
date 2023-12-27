SHOW TABLES


/* Récupère tous les champs pour les sorciers nés entre 1975 et 1985 */
SELECT *
FROM WIZARD
WHERE BIRTHDAY BETWEEN '1975-01-01' AND '1985-12-31';

/* Le prénom uniquement des sorciers dont le prénom commence par la lettre ‘H’ */
SELECT FIRSTNAME
FROM WIZARD
WHERE FIRSTNAME LIKE 'H%';

/* Les prénom et nom de tous les membres de la famille ‘Potter’, classés par ordre de prénom */
SELECT FIRSTNAME,
    LASTNAME
FROM WIZARD
WHERE LASTNAME LIKE 'Potter'
ORDER BY FIRSTNAME ASC;

/*Le prénom, nom et date de naissance du plus vieux sorcier (doit fonctionner quelque soit le contenu de la table) */
SELECT FIRSTNAME,LASTNAME,BIRTHDAY
FROM WIZARD
ORDER BY BIRTHDAY ASC
LIMIT 1;

/**/

USE wild_db_quest;

/* Vide la table school */
TRUNCATE TABLE school;

/* Insert des données dans la school */
INSERT INTO school(name, country, capacity)
VALUES
  ('Beauxbatons Academy of Magic', 'France', 550),
  ('Castelobruxo', 'Brazil', 380),
  ('Durmstrang Institute', 'Norway', 570),
  ('Hogwarts School of Witchcraft and Wizardry', 'United Kingdom', 450),
  ('Ilvermorny School of Witchcraft and Wizardry', 'USA', 300),
  ('Koldovstoretz', 'Russia', 125),
  ('Mahoutokoro School of Magic', 'Japan', 800),
  ('Uagadou School of Magic', 'Uganda', 350);

/* “Durmstrang Institute” est en réalité en Suède (Sweden), modifie son pays. */
UPDATE school
SET country = 'Sweden'
WHERE name = 'Durmstrang Institute';

/* Mahoutokoro School of Magic” passe à une capacité de 700 */
UPDATE school
SET capacity = 700
WHERE name = 'Mahoutokoro School of Magic';

/* Supprime en une seule requête toutes les écoles comportant “Magic” dans leur nom (il y en a 3). Tu peux t’aider du mot clé LIKE. */
DELETE FROM school
WHERE name LIKE '%Magic';

/*Ensuite, affiche via une requête SELECT toutes les données de la table school et colle également le résultat dans le Gist.*/
SELECT * FROM school;