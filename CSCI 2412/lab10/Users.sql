DROP DATABASE IF EXISTS lab10;
CREATE DATABASE lab10;
use lab10;

CREATE TABLE users (
    userId INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE,
    `password` VARCHAR(255)
);
