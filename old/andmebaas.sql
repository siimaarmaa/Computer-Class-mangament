CREATE TABLE IF NOT EXISTS `tunnid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tund` varchar(100) NOT NULL,
  `tunniaeg` varchar(100) NOT NULL,
  `opetaja` varchar(100) NOT NULL,
  `klass` varchar(100) NOT NULL,
  `aine` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `kasutajad` (
  `id` int(75) NOT NULL AUTO_INCREMENT,
  `kasutajanimi` varchar(15) NOT NULL,
  `parool` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
);  