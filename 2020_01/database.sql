DROP DATABASE egzaminBartek;
CREATE DATABASE egzaminBartek;
USE egzaminBartek;

CREATE TABLE producenci (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nazwa TEXT,
	opis TEXT
);

CREATE TABLE typy (
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	kategoria TEXT
);

CREATE TABLE podzespoly (
  id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  typy_id INTEGER,
  producenci_id INTEGER,
  nazwa TEXT,
  opis TEXT,
  dostepnosc BOOL,
  cena FLOAT(7),
  FOREIGN KEY (typy_id) REFERENCES typy(id),
  FOREIGN KEY (producenci_id) REFERENCES producenci(id)
);


SELECT id, nazwa, opis, cena FROM podzespoly
WHERE cena < 1000.00

SELECT nazwa, opis FROM podzespoly
WHERE dostepnosc = TRUE AND producenci_id == 1

SELECT podzespoly.nazwa, producenci.nazwa FROM podzespoly
LEFT JOIN producenci ON podzespoly.producenci_id = producenci.id

UPDATE TABLE producenci
SET nazwa = 'PATRIOT'
WHERE nazwa	= 'patriot'