CREATE DATABASE grzybobranie;
USE grzybobranie;

CREATE TABLE rodzina (
    id INTEGER PRIMARY KEY,
    nazwa TEXT
);

CREATE TABLE potrawy (
    id INTEGER PRIMARY KEY,
    nazwa TEXT
);

CREATE TABLE grzyby (
    id INTEGER PRIMARY KEY,
    rodzina_id INTEGER,
    potrawy_id INTEGER,
    nazwa TEXT,
    potoczna TEXT,
    jadalny BOOLEAN,
    miesiac_zbierania INTEGER,
    nazwa_pliku TEXT
    FOREIGN KEY (rodzina_id) REFERENCES rodzina(id)
    FOREIGN KEY (potrawy_id) REFERENCES potrawy(id)
);

INSERT INTO rodzina (id, nazwa) VALUES (1, 'Borowikowate');
INSERT INTO rodzina (id, nazwa) VALUES (2, 'Gąskowate');
INSERT INTO rodzina (id, nazwa) VALUES (3, 'Krowiakowate');
INSERT INTO rodzina (id, nazwa) VALUES (4, 'Kurkowate');
INSERT INTO rodzina (id, nazwa) VALUES (5, 'Kurowate');

INSERT INTO potrawy (id, nazwa) VALUES (1, 'Smażone');
INSERT INTO potrawy (id, nazwa) VALUES (2, 'Marynowane');
INSERT INTO potrawy (id, nazwa) VALUES (3, 'W sosie');
INSERT INTO potrawy (id, nazwa) VALUES (4, 'Zupa');
INSERT INTO potrawy (id, nazwa) VALUES (5, 'Suszony');

INSERT INTO grzyby (id, rodzina_id, potrawy_id, nazwa, potoczna, jadalny, miesiac_zbierania, nazwa_pliku) VALUES (1, 1, 1, 'Borowik szlachetny', 'Borowik', 1, 8, 'borowik_szlachetny.jpg');
INSERT INTO grzyby (id, rodzina_id, potrawy_id, nazwa, potoczna, jadalny, miesiac_zbierania, nazwa_pliku) VALUES (2, 1, 1, 'Borowik ceglastopory', 'Borowik', 1, 8, 'borowik_ceglastopory.jpg');
INSERT INTO grzyby (id, rodzina_id, potrawy_id, nazwa, potoczna, jadalny, miesiac_zbierania, nazwa_pliku) VALUES (3, 1, 1, 'Borowik szatański', 'Borowik', 0, 8, 'borowik_szatanski.jpg');
INSERT INTO grzyby (id, rodzina_id, potrawy_id, nazwa, potoczna, jadalny, miesiac_zbierania, nazwa_pliku) VALUES (4, 1, 1, 'Borowik ponury', 'Borowik', 1, 8, 'borowik_ponury.jpg');
INSERT INTO grzyby (id, rodzina_id, potrawy_id, nazwa, potoczna, jadalny, miesiac_zbierania, nazwa_pliku) VALUES (5, 1, 1, 'Borowik szatański', 'Borowik', 0, 8, 'borowik_szatanski.jpg');
INSERT INTO grzyby (id, rodzina_id, potrawy_id, nazwa, potoczna, jadalny, miesiac_zbierania, nazwa_pliku) VALUES (6, 2, 1, 'Podgrzybek brunatny', 'Podgrzybek', 1, 8, 'podgrzybek.jpg');

--zapytanie 1
SELECT id, nazwa, potoczna FROM grzyby WHERE jadalny = TRUE

--zapytanie 2
SELECT g.potoczna, r.nazwa FROM grzyby AS g JOIN rodzina AS r on g.rodzina_id = r.id JOIN potrawy AS p on g.potrawy_id = p.id WHERE p.nazwa = "Zupa"

--zapytanie 3
SELECT nazwa_pliku, nazwa FROM grzyby

--zapytanie 4
ALTER TABLE rodzina
ADD opis TEXT