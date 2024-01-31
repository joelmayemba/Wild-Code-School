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
SELECT FIRSTNAME,
  LASTNAME,
  BIRTHDAY
FROM WIZARD
ORDER BY BIRTHDAY ASC
LIMIT 0;
/**/

TRUNCATE TABLE school;
/* Insert des données dans la school */
INSERT INTO school(name, country, capacity)
VALUES ('Beauxbatons Academy of Magic', 'France', 550),
  ('Castelobruxo', 'Brazil', 380),
  ('Durmstrang Institute', 'Norway', 570),
  (
    'Hogwarts School of Witchcraft and Wizardry',
    'United Kingdom',
    450
  ),
  (
    'Ilvermorny School of Witchcraft and Wizardry',
    'USA',
    300
  ),
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
SELECT *
FROM school;
-- Retourne les noms, prénoms, rôle et équipe de tous les joueurs, classés dans l’ordre alphabétique par équipe, puis par rôle dans l’équipe, puis par nom de famille, puis par prénom.
SELECT wizard.firstname,
  wizard.lastname,
  player.role,
  team.name AS team_name
FROM wizard
  JOIN player ON wizard.id = player.id
  JOIN team ON player.team_id = team.id
ORDER BY team.name,
  player.role,
  wizard.lastname,
  wizard.firstname;
-- Retourne uniquement les prénoms et noms des joueurs ayant le rôle de seeker (attrapeur), classés par ordre alphabétique de nom puis prénom
SELECT wizard.firstname,
  wizard.lastname
FROM wizard
  JOIN player ON wizard.id = player.id
WHERE player.role = 'seeker'
ORDER BY wizard.lastname,
  wizard.firstname;
-- Retourne la liste de tous les sorciers qui ne pratiquent pas le quidditch.
SELECT wizard.firstname,
  wizard.lastname
FROM wizard
WHERE wizard.id NOT IN (
    SELECT id
    FROM player
  );
-- Retourne le nom des équipes et le nombre de joueurs par équipe, le tout classé par nombre de joueurs par équipe, de la plus nombreuse à la moins nombreuse.
SELECT team.name AS team_name,
  COUNT(player.id) AS player_count
FROM team
  LEFT JOIN player ON team.id = player.team_id
GROUP BY team.id
ORDER BY player_count DESC;
-- Retourne uniquement les noms des équipes complètes (ayant 14 joueurs ou plus, c’est-à- dire 7 joueurs et 7 remplaçants minimum), classés par ordre alphabétique.
SELECT team.name AS team_name
FROM team
  JOIN (
    SELECT team_id,
      COUNT(id) AS player_count
    FROM player
    GROUP BY team_id
    HAVING player_count >= 14
  ) composition ON team.id = composition.team_id
ORDER BY team_name;
-- L’entraîneur des Gryffindor est superstitieux, son jour préféré est le lundi. Retourne la liste des joueurs de son équipe qui ont été enrôlés un lundi (il souhaite les faire jouer en priorité), et classe les résultats par date d’enrôlement chronologique.
SELECT wizard.firstname,
  wizard.lastname,
  player.enrollment_date
FROM wizard
  JOIN player ON wizard.id = player.id
  JOIN team ON player.team_id = team.id
WHERE team.name = 'Gryffindor'
  AND DAYOFWEEK(player.enrollment_date) = 2