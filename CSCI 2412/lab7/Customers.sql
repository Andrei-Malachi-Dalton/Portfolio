drop database if exists lab7;
create database lab7;
use lab7;

DROP TABLE IF EXISTS Customers;
CREATE TABLE Customers(
    customerId INT AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(255)
);

INSERT INTO Customers(fullName)
VALUES
("John Smith"),
("John Smith"),
("Jane Doe");

DROP TABLE IF EXISTS address;
CREATE TABLE address(
    addressId INT AUTO_INCREMENT PRIMARY KEY,
    streetAddress VARCHAR(255),
    city VARCHAR(255),
    customerId INT,
    FOREIGN KEY (customerId) REFERENCES Customers (customerId) ON DELETE CASCADE -- Links back to the original table
	-- customerId is naming the column name in the current table. 
    -- REFERENCES tells us the table the original value is in: Customers
);


INSERT INTO address(streetAddress, city, customerId)
VALUES
("123 Cherry Lane", "Dublin", 1),
("1 Main Street", "Columbus", 2),
("12 Loopy Loop", "Dublin", 3);

DROP TABLE IF EXISTS items;
CREATE TABLE items(
    itemId INT PRIMARY KEY AUTO_INCREMENT,
    item VARCHAR(255)
);

INSERT INTO items(item)
VALUES
("Teddy Bear"),
("Flowers"),
("Chocolate");

DROP TABLE IF EXISTS itemsCustomerLink;
CREATE TABLE itemsCustomerLink(
    customerItemId INT PRIMARY KEY AUTO_INCREMENT,
    customerId INT,
    itemId INT,
    FOREIGN KEY (customerId) REFERENCES Customers(customerId) ON DELETE CASCADE, -- allows for the removal of data to go to the other tables
    FOREIGN KEY (itemId) REFERENCES items (itemId) ON DELETE CASCADE -- should be added to each foreign key
);

INSERT INTO itemsCustomerLink(customerId, itemId)
VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 2),
(3, 3);

SELECT * FROM Customers;
SELECT * FROM items;
select * from itemsCustomerLink;
SELECT * FROM address;

DELETE FROM Customers WHERE customerId = 2;