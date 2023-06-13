CREATE DATABASE przychodnia;
USE przychodnia;

CREATE TABLE Pacjenci (
    id INTEGER NOT NULL PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT,
    choroby_przewlekle TEXT,
    uczulenia TEXT,
    choroba TEXT,
    leki_przepisane TEXT,
    opis TEXT
);

INSERT INTO Pacjenci VALUES (1, 'Jan', 'Kowalski', 'astma', 'penicylina', 'grypa', 'apap', 'nie ma');
INSERT INTO Pacjenci VALUES (2, 'Adam', 'Nowak', 'alergia', 'koty', 'grypa', 'apap', 'nie ma');
INSERT INTO Pacjenci VALUES (3, 'Anna', 'Kot', 'astma', 'kurz', 'grypa', 'apap', 'nie ma');
INSERT INTO Pacjenci VALUES (4, 'Katarzyna', 'Kowalska', 'alergia', 'koty', 'grypa', 'apap', 'nie ma');
INSERT INTO Pacjenci VALUES (5, 'Jan', 'Nowak', 'astma', 'brak', 'grypa', 'apap', 'nie ma');

--zapytanie 1
SELECT id, imie, nazwisko FROM Pacjenci;

--zapystanie 2
SELECT id, imie, nazwisko, choroby_przewlekle, uczulenia FROM Pacjenci WHERE id = 1;

--zapytanie 3
SELECT imie, nazwisko FROM Pacjenci WHERE uczulenia = "brak";