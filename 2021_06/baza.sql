DROP DATABASE IF EXISTS sklep;
CREATE DATABASE sklep;
USE sklep;

CREATE TABLE dostawcy (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(50),
    adres VARCHAR(50)
);

CREATE TABLE towary (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(20),
    cena FLOAT,
    promocja tinyint(1),
    idDostawcy INT(11) REFERENCES dostawcy(id)
)

INSERT INTO dostawcy (nazwa, adres) VALUES ('Dostawca1', 'Adres1');
INSERT INTO dostawcy (nazwa, adres) VALUES ('Dostawca2', 'Adres2');
INSERT INTO dostawcy (nazwa, adres) VALUES ('Dostawca3', 'Adres3');
INSERT INTO dostawcy (nazwa, adres) VALUES ('Dostawca4', 'Adres4');

INSERT INTO towary (nazwa, cena, promocja, idDostawcy) VALUES ('Towar1', 10, 1, 1);
INSERT INTO towary (nazwa, cena, promocja, idDostawcy) VALUES ('Towar2', 20, 0, 2);
INSERT INTO towary (nazwa, cena, promocja, idDostawcy) VALUES ('Towar3', 30, 1, 3);
INSERT INTO towary (nazwa, cena, promocja, idDostawcy) VALUES ('Towar4', 40, 0, 4);
