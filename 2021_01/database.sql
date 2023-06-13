DROP DATABASE sklep;
CREATE DATABASE sklep;
USE sklep;

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
  dostepnosc BOOLEAN,
  cena FLOAT(7),
  FOREIGN KEY (typy_id) REFERENCES typy(id),
  FOREIGN KEY (producenci_id) REFERENCES producenci(id)
);


SELECT nazwa, opis, cena FROM podzespoly
WHERE dostepnosc = TRUE

SELECT nazwa, opis, cena FROM podzespoly
WHERE dostepnosc = TRUE AND typy_id == 5

SELECT podzespoly.nazwa, typy.kategoria FROM podzespoly
LEFT JOIN typy ON podzespoly.typy_id = typy.id

UPDATE TABLE typy
SET kategoria = 'HDD i SSD'
WHERE kategoria = 'HDD'