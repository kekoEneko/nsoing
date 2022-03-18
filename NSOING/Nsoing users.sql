CREATE TABLE `user` (
  `idUser` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) UNIQUE NOT NULL,
  `email` varchar(80) UNIQUE NOT NULL,
  `birthDate` DATE NOT NULL,
  `country` varchar(80) NOT NULL,
  `premium` BOOLEAN NOT NULL
);

CREATE TABLE `leage` (
  `idLeage` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL
);

CREATE TABLE `rol` (
  `idRol` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idUser` INT NOT NULL,
  `rol` varchar(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `idLeage` INT NOT NULL,
  `team` INT,
  `number` INT,
  `curriculum` VARCHAR(150),
  `idCert` VARCHAR(5)
);

CREATE TABLE `team` (
  `idTeam` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idLeage` INT NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL
);

CREATE TABLE `certification` (
  `idCert` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `type` INT NOT NULL,
  `certification` varchar(5) NOT NULL
);

ALTER TABLE `rol` ADD FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

ALTER TABLE `team` ADD FOREIGN KEY (`idLeage`) REFERENCES `leage` (`idLeage`);

ALTER TABLE `rol` ADD FOREIGN KEY (`idLeage`) REFERENCES `leage` (`idLeage`);

ALTER TABLE `rol` ADD FOREIGN KEY (`team`) REFERENCES `team` (`idTeam`);

ALTER TABLE `rol` ADD FOREIGN KEY (`idCert`) REFERENCES `certification` (`idCert`);
