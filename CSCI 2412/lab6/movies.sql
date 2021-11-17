use lab6;

CREATE TABLE movies(
	primaryKey INT AUTO_INCREMENT PRIMARY KEY, -- Do not make a duplicate primaryKey. Could return the wrong data type.
    title VARCHAR(255),
    director VARCHAR(255),
    releaseDate DATE
);

INSERT INTO movies(primaryKey, title, director, releaseDate)
	VALUES
    ("The Mummy", "Steven Sommers", "1999-05-04");

INSERT INTO movies(title, director, releaseDate)
	VALUES
    ("Troll 2", "Claudio Fragasso", "1990-10-12");

select * from movies;

DROP TABLE movies;