DROP DATABASE `UserDetailDB`;

CREATE DATABASE `UserDetailDB`;

CREATE TABLE `Users`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Username` VARCHAR(250),
    `Password` VARCHAR(250)
);

CREATE TABLE `UserDetail`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `UserId` INT,
    `FirstName` VARCHAR(250) NOT NULL,
    `LastName` VARCHAR(250) NOT NULL,
    `MobileNumber` VARCHAR(250) NOT NULL,
    `Email` VARCHAR(250) NOT NULL,
    FOREIGN KEY (`UserId`) REFERENCES `Users`(`Id`) 
);