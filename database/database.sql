CREATE DATABASE `UserDetailDB`;

CREATE TABLE `Users`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Username` VARCHAR(250),
    `Password` VARCHAR(250)
);

CREATE TABLE `UserDetail`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `UserId` INT,
    `FirstName` VARCHAR(250),
    `LastName` VARCHAR(250),
    `MobileNumber` VARCHAR(250),
    `Email` VARCHAR(250),
    FOREIGN KEY (`UserId`) REFERENCES `Users`(`Id`) 
);