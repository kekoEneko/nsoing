CREATE TABLE `user` (
  `idUser` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `realName` varchar(80) NOT NULL,
  `userName` varchar(20) UNIQUE NOT NULL,
  `birthDate` DATE NOT NULL,
  `country` varchar(80) NOT NULL,
  `email` varchar(80) UNIQUE NOT NULL,
  `idLeage` INT NOT NULL,
  `premium` BOOLEAN NOT NULL
);

CREATE TABLE `leage` (
  `idLeage` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
);

CREATE TABLE `rol` (
  `idRol` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` INT NOT NULL,
  `number` INT NOT NULL,
  `rol` varchar(10) NOT NULL,
  `derbyname` varchar(20) NOT NULL,
  `certification` BOOLEAN
);

CREATE TABLE `team` (
  `idTeam` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idLeage` INT NOT NULL,
  `name` varchar(100) NOT NULL
);
