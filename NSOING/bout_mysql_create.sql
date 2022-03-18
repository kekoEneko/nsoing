CREATE TABLE `bout` (
	`idBout` INT NOT NULL AUTO_INCREMENT,
	`location` varchar(50) NOT NULL,
	`city` varchar(50) NOT NULL,
	`st_prv` varchar(50) NOT NULL,
	`game` INT NOT NULL,
	`tournament` varchar(200) NOT NULL,
	`hostLeage` INT NOT NULL,
	`date` DATE NOT NULL,
	`time` TIME NOT NULL,
	`idLocal` INT NOT NULL,
	`idVisitor` INT NOT NULL,
	`colorLocal` varchar(50) NOT NULL,
	`colorVisitor` varchar(50) NOT NULL,
	`photoLocal` varchar(150) NOT NULL,
	`photoVisitor` varchar(150) NOT NULL,
	PRIMARY KEY (`idBout`)
);

CREATE TABLE `roster` (
	`IdRoster` INT NOT NULL AUTO_INCREMENT,
	`idBout` INT NOT NULL,
	`idTeam` INT NOT NULL,
	`number` INT NOT NULL,
	`derbyname` varchar(50) NOT NULL,
	PRIMARY KEY (`IdRoster`)
);

CREATE TABLE `verification` (
	`idVerify` INT NOT NULL AUTO_INCREMENT,
	`idBout` INT NOT NULL,
	`locDerbyName` varchar(50) NOT NULL,
	`locRealName` varchar(50) NOT NULL,
	`locSignature` varchar(150) NOT NULL,
	`visDerbyName` varchar(50) NOT NULL,
	`visRealName` varchar(50) NOT NULL,
	`visSignature` varchar(150) NOT NULL,
	PRIMARY KEY (`idVerify`)
);

CREATE TABLE `official` (
	`idOfficial` INT NOT NULL AUTO_INCREMENT,
	`idBout` INT NOT NULL,
	`position` varchar(50) NOT NULL,
	`idUser` INT(50) NOT NULL,
	PRIMARY KEY (`idOfficial`)
);

ALTER TABLE `bout` ADD CONSTRAINT `bout_fk0` FOREIGN KEY (`hostLeage`) REFERENCES `leage`(`idLeage`);

ALTER TABLE `bout` ADD CONSTRAINT `bout_fk1` FOREIGN KEY (`idLocal`) REFERENCES `team`(`idTeam`);

ALTER TABLE `bout` ADD CONSTRAINT `bout_fk2` FOREIGN KEY (`idVisitor`) REFERENCES `team`(`idTeam`);

ALTER TABLE `roster` ADD CONSTRAINT `roster_fk0` FOREIGN KEY (`idBout`) REFERENCES `bout`(`idBout`);

ALTER TABLE `roster` ADD CONSTRAINT `roster_fk1` FOREIGN KEY (`idTeam`) REFERENCES `team`(`idTeam`);

ALTER TABLE `verification` ADD CONSTRAINT `verification_fk0` FOREIGN KEY (`idBout`) REFERENCES `bout`(`idBout`);

ALTER TABLE `official` ADD CONSTRAINT `official_fk0` FOREIGN KEY (`idBout`) REFERENCES `bout`(`idBout`);

ALTER TABLE `official` ADD CONSTRAINT `official_fk1` FOREIGN KEY (`idUser`) REFERENCES `user`(`idUser`);

