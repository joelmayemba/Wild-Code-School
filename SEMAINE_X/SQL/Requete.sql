/* Récupère tous les champs pour les sorciers nés entre 1975 et 1985
Le prénom uniquement des sorciers dont le prénom commence par la lettre ‘H’
Les prénom et nom de tous les membres de la famille ‘Potter’, classés par ordre de prénom
Le prénom, nom et date de naissance du plus vieux sorcier (doit fonctionner quelque soit le contenu de la table) */

SELECT
    *
FROM
    WIZARD
WHERE
    BIRTHDAY BETWEEN '1975-01-01' AND '1985-12-31';

SELECT
    *
FROM
    WIZARD
WHERE
    FIRSTNAME LIKE 'H%';

SELECT
    *
FROM
    WIZARD
WHERE
    LASTNAME LIKE 'Potter'
ORDER BY
    FIRSTNAME ASC;

SELECT
    FIRSTNAME,
    LASTNAME,
    BIRTHDAY
FROM
    WIZARD
ORDER BY
    BIRTHDAY ASC LIMIT 1;