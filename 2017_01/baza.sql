DROP DATABASE Komis;
CREATE DATABASE Komis;
USE Komis;

CREATE TABLE Samochody (
    id INTEGER NOT NULL PRIMARY KEY,
    marka TEXT,
    model TEXT,
    rocznik YEAR,
    kolor TEXT,
    stan TEXT
);

CREATE TABLE Zamowienia (
    id INTEGER NOT NULL PRIMARY KEY,
    Samochody_id INTEGER,
    Klient TEXT,
    telefon TEXT,
    dataZam DATE,
    FOREIGN KEY (Samochody_id) REFERENCES Samochody(id)
);

INSERT INTO Samochody VALUES (1, 'Audi', 'A4', 2010, 'Czarny', 'Nowy');
INSERT INTO Samochody VALUES (2, 'Audi', 'A6', 2012, 'Czarny', 'Uzywany');
INSERT INTO Samochody VALUES (3, 'Audi', 'A8', 2015, 'Czarny', 'Nowy');
INSERT INTO Samochody VALUES (4, 'Audi', 'Q7', 2017, 'Czarny', 'Nowy');
INSERT INTO Samochody VALUES (5, 'Fiat', 'Punto', 2018, 'Czarny', 'Nowy');
INSERT INTO Samochody VALUES (6, 'BMW', 'Seria 3', 2010, 'Czarny', 'Nowy');

INSERT INTO Zamowienia VALUES (1, 1, 'Jan Kowalski', '123456789', '2018-01-01');
INSERT INTO Zamowienia VALUES (2, 2, 'Juliusz Slowacki', '123456789', '2018-01-01');
INSERT INTO Zamowienia VALUES (3, 3, 'Euzebiusz sus', '123456789', '2018-01-01');
INSERT INTO Zamowienia VALUES (4, 4, 'Karol dembala', '123456789', '2018-01-01');
INSERT INTO Zamowienia VALUES (5, 5, 'sergiusz seler', '123456789', '2018-01-01');
INSERT INTO Zamowienia VALUES (6, 6, 'wołomir krak', '123456789', '2018-01-01');
--zapytanie 1
SELECT id, marka, model FROM Samochody

--zapytanie 2
SELECT Samochody_id, Klient FROM Zamowienia

--zapytanie 3
SELECT * FROM Samochody WHERE marka = "Fiat"