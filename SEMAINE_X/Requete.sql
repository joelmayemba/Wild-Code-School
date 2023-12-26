/* Récupère tous les champs pour les sorciers nés entre 1975 et 1985
Le prénom uniquement des sorciers dont le prénom commence par la lettre ‘H’
Les prénom et nom de tous les membres de la famille ‘Potter’, classés par ordre de prénom
Le prénom, nom et date de naissance du plus vieux sorcier (doit fonctionner quelque soit le contenu de la table) */

SELECT *
FROM wizard
WHERE (DATE(FROM_UNIXTIME(birthday)) BETWEEN '1975' AND '1985';

SELECT *
FROM wizard
WHERE firstname LIKE 'H%';

SELECT *
FROM wizard
WHERE lastname LIKE 'Potter' 
ORDER BY FIRSTNAME ASC;


SELECT firstname, lastname,birthday
FROM wizard
ORDER BY birthday DESC