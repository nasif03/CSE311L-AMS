CREATE DATABASE IF NOT EXISTS agricultural_management_system;
USE agricultural_management_system;

DROP TABLE IF EXISTS Farmer;

CREATE TABLE Farmer (
    farmer_id INT AUTO_INCREMENT PRIMARY KEY,
    farmer_name VARCHAR(50) NOT NULL,
    phoneno VARCHAR(15) NOT NULL,
    DoB DATE NOT NULL,
    address TEXT NOT NULL,
    password VARCHAR(255) NOT NULL
);