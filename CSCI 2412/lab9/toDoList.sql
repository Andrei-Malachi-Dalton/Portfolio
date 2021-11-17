/*
	CRUD - Create, Read, Update, Delete
    Create databases, tables, inserting records
    Read output from the database using select, joins, where, etc
    Update tables, change values for records
    Delete tables, records
*/

CREATE DATABASE toDoList;
USE toDoList;

CREATE TABLE items (
  itemId INT PRIMARY KEY AUTO_INCREMENT,
  toDoItem VARCHAR(255), 
  isComplete BOOL
);

INSERT INTO items (toDoItem, isComplete)
VALUES
("Finish lab 9", false),
("Learn how to update records", false),
("Graduate first grade", true);
