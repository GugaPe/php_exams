DROP DATABASE IF EXISTS 2016_06;

CREATE DATABASE baza1;
USE baza1;

CREATE TABLE uczen
(
    id INTEGER PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT,
    PESEL TEXT,
    klasa TEXT
);

CREATE TABLE przedmiot
(
    id INTEGER PRIMARY KEY,
    nazwa TEXT
);

CREATE TABLE ocena
(
    id INTEGER PRIMARY KEY,
    przedmiot_id INTEGER,
    FOREIGN KEY (przedmiot_id) REFERENCES przedmiot(id),
    uczen_id INTEGER,
    FOREIGN KEY (uczen_id) REFERENCES uczen(id),
    ocena INTEGER,
    dataWystawienia DATE
);