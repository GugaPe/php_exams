CREATE DATABASE dane;
USE dane;

CREATE TABLE rezyserzy (
    id INTEGER PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT
);

CREATE TABLE gatunki (
    id INTEGER PRIMARY KEY,
    nazwa TEXT
);

CREATE TABLE filmy (
    id INTEGER PRIMARY KEY,
    gatunki_id INTEGER,
    rezyserzy_id INTEGER,
    tytul TEXT,
    rok YEAR,
    ocena INTEGER,
    FOREIGN KEY (gatunki_id) REFERENCES gatunki(id),
    FOREIGN KEY (rezyserzy_id) REFERENCES rezyserzy(id)
);

INSERT INTO rezyserzy VALUES (1, 'Quentin', 'Tarantino');
INSERT INTO rezyserzy VALUES (2, 'Christopher', 'Nolan');
INSERT INTO rezyserzy VALUES (3, 'Martin', 'Scorsese');
INSERT INTO rezyserzy VALUES (4, 'David', 'Fincher');
INSERT INTO rezyserzy VALUES (5, 'Stanley', 'Kubrick');

INSERT INTO gatunki VALUES (1, 'Dramat');
INSERT INTO gatunki VALUES (2, 'Komedia');
INSERT INTO gatunki VALUES (3, 'Horror');
INSERT INTO gatunki VALUES (4, 'Sci-Fi');
INSERT INTO gatunki VALUES (5, 'Akcja');

INSERT INTO filmy VALUES (1, 1, 1, 'Pulp Fiction', 1994, 9);
INSERT INTO filmy VALUES (2, 2, 2, 'Memento', 2000, 8);
INSERT INTO filmy VALUES (3, 3, 3, 'Taxi Driver', 1976, 8);
INSERT INTO filmy VALUES (4, 4, 4, 'Fight Club', 1999, 8);
INSERT INTO filmy VALUES (5, 5, 5, '2001: Odyseja Kosmiczna', 1968, 8);

--zapytanie 1
INSERT INTO filmy VALUES (6, 2, NULL, "Suburbicon", 2017, 5)

--zapytanie 2
SELECT f.tytul, g.nazwa FROM filmy AS f JOIN gatunki AS g ON g.id = f.gatunki_id WHERE ocena = 8

--zapytanie 3
SELECT tytul, rok FROM filmy WHERE gatunki_id = 1 AND ocena = 5

--zapytanie 4
CREATE TABLE aktorzy (
    id INT NOT NULL PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT
)