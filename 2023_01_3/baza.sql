DROP DATABASE IF EXISTS kwiaciarnia;
CREATE DATABASE kwiaciarnia;
USE kwiaciarnia;

CREATE TABLE kwiaciarnia (
    id_kwiaciarni INT(10) UNSIGNED PRIMARY KEY,
    nazwa VARCHAR(20),
    miasto VARCHAR(20),
    ulica VARCHAR(20)
);

CREATE TABLE zamowienia (
    id_zam INT(10) UNSIGNED PRIMARY KEY,
    id_kwiaciarni INT(20) UNSIGNED,
    data DATE,
    kwiaty TEXT,
    cena FLOAT,
    FOREIGN KEY (id_kwiaciarni) REFERENCES kwiaciarnia(id_kwiaciarni)
);

INSERT INTO kwiaciarnia (id_kwiaciarni, nazwa, miasto, ulica) VALUES (1, 'Kwiaty', 'Warszawa', 'Kwiatowa');
INSERT INTO kwiaciarnia (id_kwiaciarni, nazwa, miasto, ulica) VALUES (2, 'Kwiatkowo', 'Malbork', 'Sosnowa');
INSERT INTO kwiaciarnia (id_kwiaciarni, nazwa, miasto, ulica) VALUES (3, 'Pod gałązką', 'Gdansk', 'podwale');
INSERT INTO kwiaciarnia (id_kwiaciarni, nazwa, miasto, ulica) VALUES (4, 'kwiaty u ani', 'Gdynia', 'słoneczna');

INSERT INTO zamowienia (id_zam, id_kwiaciarni, data, kwiaty, cena) VALUES (1, 1, '2019-01-01', 'róża', 10.2);
INSERT INTO zamowienia (id_zam, id_kwiaciarni, data, kwiaty, cena) VALUES (2, 2, '2019-01-02', 'tulipan', 20.5);
INSERT INTO zamowienia (id_zam, id_kwiaciarni, data, kwiaty, cena) VALUES (3, 3, '2019-01-03', 'róża', 30.6);
INSERT INTO zamowienia (id_zam, id_kwiaciarni, data, kwiaty, cena) VALUES (4, 4, '2019-01-04', 'tulipan', 40.4);
INSERT INTO zamowienia (id_zam, id_kwiaciarni, data, kwiaty, cena) VALUES (5, 4, '2019-01-05', 'susipan', 420.4);


--zapytanie 1
SELECT nazwa, ulica FROM kwiaciarnia WHERE miasto = 'Malbork';

--zapytanie 2
SELECT id_kwiaciarni, COUNT(id_kwiaciarni) FROM zamowienia GROUP BY id_kwiaciarni

--zapytanie 3
SELECT k.nazwa, k.miasto, z.kwiaty FROM kwiaciarnia AS k JOIN zamowienia AS z on k.id_kwiaciarni = z.id_kwiaciarni WHERE data = '2019-01-05'
