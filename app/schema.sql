CREATE DATABASE blog;

CREATE TABLE blog_posts (
id INT,
title VARCHAR(40),
text VARCHAR(40),
author VARCHAR(40),
publishDate VARCHAR(40),
isActive VARCHAR(40)
);

CREATE TABLE categories (
id INT,
name VARCHAR(100)
);

CREATE TABLE users (
id INT,
name VARCHAR(100),
email VARCHAR(80),
avatar VARCHAR(40),
password VARCHAR(40),
isActive VARCHAR(40)
);

-- 1. Գտնում է բոլոր այն քաղաքների անունները, որոնց երկրի կոդը սկսվում է "N" տառով
SELECT `Name`
FROM city
WHERE `CountryCode` LIKE "N%";

-- 2. Գտնում է բոլոր այն քաղաքների անունները, որոնց բնակչության քանակը փոքր է 100-ից
SELECT `Name`, `Population`
FROM city
WHERE `Population` < 100;

-- 3. Գտնում է բոլոր այն լեզուները և  դրանց երկրները, որոնք պաշտոնական են և  օգտագործում են բնակչության 10%-ից ավելին
SELECT `Language`
FROM countrylanguage
WHERE (IsOfficial = 'T') and (Percentage > 10);

-- 4. Գտնում է բոլոր այն երկրների անունները և մայրցամաքները, որոնց կառավարչի անունը պարունակում է "ll" սիմվոլները
SELECT `Name`, `Continent`
FROM country
WHERE HeadOfState LIKE '%ll%'

-- 5. Գտնում է բոլոր այն երկրների անունները, որոնց համախառն ներքին արտադրանքը (GNP) մեծ է նույն տվյալի հին տարբերակից (GNPOld)
SELECT `Name`
FROM country
WHERE `GNP` > `GNPOld`

-- 6. Գտնում է բոլոր այն երկրների անունները, որոնք կամ՝ "Federal Republic" են, կամ  ՝ "Republic"
SELECT `Name`
FROM country
WHERE (GovermentForm = 'Federal Republic') or (GovermentForm = 'Republic')

-- 7. Երկրները դասավորել ըստ մայրցամաքների, ռեգիոնների, տարածքների
SELECT `Name`
FROM country
ORDER BY `Continent`, `Region`, `SurfaceArea`

-- 8.Գտնել այն երկրների անունները և դրանց քաղաքների անունները՝ իրենց բնակչության թվով (մեկ սյան մեջ, =ով իրարից բաժանած),
-- որոնք գտնվում են Asia մայրցամաքում
SELECT `Name`, CONCAT(`Population`, " = ") AS "Population"
FROM country
WHERE Continent = 'Asia'
