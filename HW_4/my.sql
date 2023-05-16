-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Иннокентий', 35, 'Гамбург');
INSERT INTO classmates VALUES (0002, 'Павел', 32, 'Москва');
INSERT INTO classmates VALUES (0003, 'Татьяна', 25, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0004, 'Михаил', 33, 'Тверь');
INSERT INTO classmates VALUES (0005, 'Пётр', 20, 'Краков');
INSERT INTO classmates VALUES (0006, 'Александр', 27, 'Курск');
INSERT INTO classmates VALUES (0007, 'Людмила', 20, 'Красноадр');
INSERT INTO classmates VALUES (0008, 'Максим', 18, 'Москва');
INSERT INTO classmates VALUES (0009, 'Ульяна', 60, 'Москва');
INSERT INTO classmates VALUES (0010, 'Мария', 45, 'Тула');
INSERT INTO classmates VALUES (0011, 'Людмила', 25, 'Орёл');

-- fetch 
SELECT name FROM classmates WHERE address = 'Москва' AND age >= 18 AND age < 45;