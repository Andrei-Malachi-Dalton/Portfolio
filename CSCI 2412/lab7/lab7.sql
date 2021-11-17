CREATE DATABASE lab7;

use lab7;

DROP TABLE IF EXISTS Olympians;
CREATE TABLE Olympians(
    olympianId INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    country VARCHAR(255),
    numMedals INT
);

INSERT INTO Olympians (firstName, lastName, country, numMedals)
VALUES
("Michael", "Phelps", "USA", 28), 
("Nikolai", "Andrianov", "USSR", 15),
("Simone", "Biles", "USA", 7),
("Larisa", "Latynina", "USSR", 18),
("Marit", "Bjørgen", "Norway", 15),
("Robin", "Clower", "USA", 0); 

SELECT * FROM Olympians;
