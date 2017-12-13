﻿-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.17 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para db_crud
CREATE DATABASE IF NOT EXISTS `db_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_crud`;

-- Volcando estructura para tabla db_crud.student
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(8) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla db_crud.student: ~122 rows (aproximadamente)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT IGNORE INTO `student` (`id`, `nim`, `FirstName`, `LastName`, `phone`, `address`, `city`, `country`) VALUES
	(1, '12345678', 'Carine ', 'Schmitt', '40.32.2555', '54, rue Royale', 'Nantes', 'France'),
	(2, '12345679', 'Jean', 'King', '7025551838', '8489 Strong St.', 'Las Vegas', 'USA'),
	(3, '12345680', 'Peter', 'Ferguson', '03 9520 4555', '636 St Kilda Road', 'Melbourne', 'Australia'),
	(4, '12345681', 'Janine ', 'Labrune', '40.67.8555', '67, rue des Cinquante Otages', 'Nantes', 'France'),
	(5, '12345682', 'Jonas ', 'Bergulfsen', '07-98 9555', 'Erling Skakkes gate 78', 'Stavern', 'Norway'),
	(6, '12345683', 'Susan', 'Nelson', '4155551450', '5677 Strong St.', 'San Rafael', 'USA'),
	(7, '12345684', 'Zbyszek ', 'Piestrzeniewicz', '(26) 642-7555', 'ul. Filtrowa 68', 'Warszawa', 'Poland'),
	(8, '12345685', 'Roland', 'Keitel', '+49 69 66 90 2555', 'Lyonerstr. 34', 'Frankfurt', 'Germany'),
	(9, '12345686', 'Julie', 'Murphy', '6505555787', '5557 North Pendale Street', 'San Francisco', 'USA'),
	(10, '12345687', 'Kwai', 'Lee', '2125557818', '897 Long Airport Avenue', 'NYC', 'USA'),
	(11, '12345688', 'Diego ', 'Freyre', '(91) 555 94 44', 'C/ Moralzarzal, 86', 'Madrid', 'Spain'),
	(12, '12345689', 'Christina ', 'Berglund', '0921-12 3555', 'Berguvsvägen  8', 'Luleå', 'Sweden'),
	(13, '12345690', 'Jytte ', 'Petersen', '31 12 3555', 'Vinbæltet 34', 'Kobenhavn', 'Denmark'),
	(14, '12345691', 'Mary ', 'Saveley', '78.32.5555', '2, rue du Commerce', 'Lyon', 'France'),
	(15, '12345692', 'Eric', 'Natividad', '+65 221 7555', 'Bronz Sok.', 'Singapore', 'Singapore'),
	(16, '12345693', 'Jeff', 'Young', '2125557413', '4092 Furth Circle', 'NYC', 'USA'),
	(17, '12345694', 'Kelvin', 'Leong', '2155551555', '7586 Pompton St.', 'Allentown', 'USA'),
	(18, '12345695', 'Juri', 'Hashimoto', '6505556809', '9408 Furth Circle', 'Burlingame', 'USA'),
	(19, '12345696', 'Wendy', 'Victorino', '+65 224 1555', '106 Linden Road Sandown', 'Singapore', 'Singapore'),
	(20, '12345697', 'Veysel', 'Oeztan', '+47 2267 3215', 'Brehmen St. 121', 'Bergen', 'Norway  '),
	(21, '12345698', 'Keith', 'Franco', '2035557845', '149 Spinnaker Dr.', 'New Haven', 'USA'),
	(22, '12345699', 'Isabel ', 'de Castro', '(1) 356-5555', 'Estrada da saúde n. 58', 'Lisboa', 'Portugal'),
	(23, '12345700', 'Martine ', 'Rancé', '20.16.1555', '184, chaussée de Tournai', 'Lille', 'France'),
	(24, '12345701', 'Marie', 'Bertrand', '(1) 42.34.2555', '265, boulevard Charonne', 'Paris', 'France'),
	(25, '12345702', 'Jerry', 'Tseng', '6175555555', '4658 Baden Av.', 'Cambridge', 'USA'),
	(26, '12345703', 'Julie', 'King', '2035552570', '25593 South Bay Ln.', 'Bridgewater', 'USA'),
	(27, '12345704', 'Mory', 'Kentary', '+81 06 6342 5555', '1-6-20 Dojima', 'Kita-ku', 'Japan'),
	(28, '12345705', 'Michael', 'Frick', '2125551500', '2678 Kingston Rd.', 'NYC', 'USA'),
	(29, '12345706', 'Matti', 'Karttunen', '90-224 8555', 'Keskuskatu 45', 'Helsinki', 'Finland'),
	(30, '12345707', 'Rachel', 'Ashworth', '(171) 555-1555', 'Fauntleroy Circus', 'Manchester', 'UK'),
	(31, '12345708', 'Dean', 'Cassidy', '+353 1862 1555', '25 Maiden Lane', 'Dublin', 'Ireland'),
	(32, '12345709', 'Leslie', 'Taylor', '6175558428', '16780 Pompton St.', 'Brickhaven', 'USA'),
	(33, '12345710', 'Elizabeth', 'Devon', '(171) 555-2282', '12, Berkeley Gardens Blvd', 'Liverpool', 'UK'),
	(34, '12345711', 'Yoshi ', 'Tamuri', '(604) 555-3392', '1900 Oak St.', 'Vancouver', 'Canada'),
	(35, '12345712', 'Miguel', 'Barajas', '6175557555', '7635 Spinnaker Dr.', 'Brickhaven', 'USA'),
	(36, '12345713', 'Julie', 'Young', '6265557265', '78934 Hillside Dr.', 'Pasadena', 'USA'),
	(37, '12345714', 'Brydey', 'Walker', '+612 9411 1555', 'Suntec Tower Three', 'Singapore', 'Singapore'),
	(38, '12345715', 'Frédérique ', 'Citeaux', '88.60.1555', '24, place Kléber', 'Strasbourg', 'France'),
	(39, '12345716', 'Mike', 'Gao', '+852 2251 1555', 'Bank of China Tower', 'Central Hong Kong', 'Hong Kong'),
	(40, '12345717', 'Eduardo ', 'Saavedra', '(93) 203 4555', 'Rambla de Cataluña, 23', 'Barcelona', 'Spain'),
	(41, '12345718', 'Mary', 'Young', '3105552373', '4097 Douglas Av.', 'Glendale', 'USA'),
	(42, '12345719', 'Horst ', 'Kloss', '0372-555188', 'Taucherstraße 10', 'Cunewalde', 'Germany'),
	(43, '12345720', 'Palle', 'Ibsen', '86 21 3555', 'Smagsloget 45', 'Århus', 'Denmark'),
	(44, '12345721', 'Jean ', 'Fresnière', '(514) 555-8054', '43 rue St. Laurent', 'Montréal', 'Canada'),
	(45, '12345722', 'Alejandra ', 'Camino', '(91) 745 6555', 'Gran Vía, 1', 'Madrid', 'Spain'),
	(46, '12345723', 'Valarie', 'Thompson', '7605558146', '361 Furth Circle', 'San Diego', 'USA'),
	(47, '12345724', 'Helen ', 'Bennett', '(198) 555-8888', 'Garden House', 'Cowes', 'UK'),
	(48, '12345725', 'Annette ', 'Roulet', '61.77.6555', '1 rue Alsace-Lorraine', 'Toulouse', 'France'),
	(49, '12345726', 'Renate ', 'Messner', '069-0555984', 'Magazinweg 7', 'Frankfurt', 'Germany'),
	(50, '12345727', 'Paolo ', 'Accorti', '011-4988555', 'Via Monte Bianco 34', 'Torino', 'Italy'),
	(51, '12345728', 'Daniel', 'Da Silva', '+33 1 46 62 7555', '27 rue du Colonel Pierre Avia', 'Paris', 'France'),
	(52, '12345729', 'Daniel ', 'Tonini', '30.59.8555', '67, avenue de l\'Europe', 'Versailles', 'France'),
	(53, '12345730', 'Henriette ', 'Pfalzheim', '0221-5554327', 'Mehrheimerstr. 369', 'Köln', 'Germany'),
	(54, '12345731', 'Elizabeth ', 'Lincoln', '(604) 555-4555', '23 Tsawassen Blvd.', 'Tsawassen', 'Canada'),
	(55, '12345732', 'Peter ', 'Franken', '089-0877555', 'Berliner Platz 43', 'München', 'Germany'),
	(56, '12345733', 'Anna', 'O\'Hara', '02 9936 8555', '201 Miller Street', 'North Sydney', 'Australia'),
	(57, '12345734', 'Giovanni ', 'Rovelli', '035-640555', 'Via Ludovico il Moro 22', 'Bergamo', 'Italy'),
	(58, '12345735', 'Adrian', 'Huxley', '+61 2 9495 8555', 'Monitor Money Building', 'Chatswood', 'Australia'),
	(59, '12345736', 'Marta', 'Hernandez', '6175558555', '39323 Spinnaker Dr.', 'Cambridge', 'USA'),
	(60, '12345737', 'Ed', 'Harrison', '+41 26 425 50 01', 'Rte des Arsenaux 41 ', 'Fribourg', 'Switzerland'),
	(61, '12345738', 'Mihael', 'Holz', '0897-034555', 'Grenzacherweg 237', 'Genève', 'Switzerland'),
	(62, '12345739', 'Jan', 'Klaeboe', '+47 2212 1555', 'Drammensveien 126A', 'Oslo', 'Norway  '),
	(63, '12345740', 'Bradley', 'Schuyler', '+31 20 491 9555', 'Kingsfordweg 151', 'Amsterdam', 'Netherlands'),
	(64, '12345741', 'Mel', 'Andersen', '030-0074555', 'Obere Str. 57', 'Berlin', 'Germany'),
	(65, '12345742', 'Pirkko', 'Koskitalo', '981-443655', 'Torikatu 38', 'Oulu', 'Finland'),
	(66, '12345743', 'Catherine ', 'Dewey', '(02) 5554 67', 'Rue Joseph-Bens 532', 'Bruxelles', 'Belgium'),
	(67, '12345744', 'Steve', 'Frick', '9145554562', '3758 North Pendale Street', 'White Plains', 'USA'),
	(68, '12345745', 'Wing', 'Huang', '5085559555', '4575 Hillside Dr.', 'New Bedford', 'USA'),
	(69, '12345746', 'Julie', 'Brown', '6505551386', '7734 Strong St.', 'San Francisco', 'USA'),
	(70, '12345747', 'Mike', 'Graham', '+64 9 312 5555', '162-164 Grafton Road', 'Auckland  ', 'New Zealand'),
	(71, '12345748', 'Ann ', 'Brown', '(171) 555-0297', '35 King George', 'London', 'UK'),
	(72, '12345749', 'William', 'Brown', '2015559350', '7476 Moss Rd.', 'Newark', 'USA'),
	(73, '12345750', 'Ben', 'Calaghan', '61-7-3844-6555', '31 Duncan St. West End', 'South Brisbane', 'Australia'),
	(74, '12345751', 'Kalle', 'Suominen', '+358 9 8045 555', 'Software Engineering Center', 'Espoo', 'Finland'),
	(75, '12345752', 'Philip ', 'Cramer', '0555-09555', 'Maubelstr. 90', 'Brandenburg', 'Germany'),
	(76, '12345753', 'Francisca', 'Cervantes', '2155554695', '782 First Street', 'Philadelphia', 'USA'),
	(77, '12345754', 'Jesus', 'Fernandez', '+34 913 728 555', 'Merchants House', 'Madrid', 'Spain'),
	(78, '12345755', 'Brian', 'Chandler', '2155554369', '6047 Douglas Av.', 'Los Angeles', 'USA'),
	(79, '12345756', 'Patricia ', 'McKenna', '2967 555', '8 Johnstown Road', 'Cork', 'Ireland'),
	(80, '12345757', 'Laurence ', 'Lebihan', '91.24.4555', '12, rue des Bouchers', 'Marseille', 'France'),
	(81, '12345758', 'Paul ', 'Henriot', '26.47.1555', '59 rue de l\'Abbaye', 'Reims', 'France'),
	(82, '12345759', 'Armand', 'Kuger', '+27 21 550 3555', '1250 Pretorius Street', 'Hatfield', 'South Africa'),
	(83, '12345760', 'Wales', 'MacKinlay', '64-9-3763555', '199 Great North Road', 'Auckland', 'New Zealand'),
	(84, '12345761', 'Karin', 'Josephs', '0251-555259', 'Luisenstr. 48', 'Münster', 'Germany'),
	(85, '12345762', 'Juri', 'Yoshido', '6175559555', '8616 Spinnaker Dr.', 'Boston', 'USA'),
	(86, '12345763', 'Dorothy', 'Young', '6035558647', '2304 Long Airport Avenue', 'Nashua', 'USA'),
	(87, '12345764', 'Lino ', 'Rodriguez', '(1) 354-2555', 'Jardim das rosas n. 32', 'Lisboa', 'Portugal'),
	(88, '12345765', 'Braun', 'Urs', '0452-076555', 'Hauptstr. 29', 'Bern', 'Switzerland'),
	(89, '12345766', 'Allen', 'Nelson', '6175558555', '7825 Douglas Av.', 'Brickhaven', 'USA'),
	(90, '12345767', 'Pascale ', 'Cartrain', '(071) 23 67 2555', 'Boulevard Tirou, 255', 'Charleroi', 'Belgium'),
	(91, '12345768', 'Georg ', 'Pipps', '6562-9555', 'Geislweg 14', 'Salzburg', 'Austria'),
	(92, '12345769', 'Arnold', 'Cruz', '+63 2 555 3587', '15 McCallum Street', 'Makati City', 'Philippines'),
	(93, '12345770', 'Maurizio ', 'Moroni', '0522-556555', 'Strada Provinciale 124', 'Reggio Emilia', 'Italy'),
	(94, '12345771', 'Akiko', 'Shimamura', '+81 3 3584 0555', '2-2-8 Roppongi', 'Minato-ku', 'Japan'),
	(95, '12345772', 'Dominique', 'Perrier', '(1) 47.55.6555', '25, rue Lauriston', 'Paris', 'France'),
	(96, '12345773', 'Rita ', 'Müller', '0711-555361', 'Adenauerallee 900', 'Stuttgart', 'Germany'),
	(97, '12345774', 'Sarah', 'McRoy', '04 499 9555', '101 Lambton Quay', 'Wellington', 'New Zealand'),
	(98, '12345775', 'Michael', 'Donnermeyer', ' +49 89 61 08 9555', 'Hansastr. 15', 'Munich', 'Germany'),
	(99, '12345776', 'Maria', 'Hernandez', '2125558493', '5905 Pompton St.', 'NYC', 'USA'),
	(100, '12345777', 'Alexander ', 'Feuer', '0342-555176', 'Heerstr. 22', 'Leipzig', 'Germany'),
	(101, '12345778', 'Dan', 'Lewis', '2035554407', '2440 Pompton St.', 'Glendale', 'USA'),
	(102, '12345779', 'Martha', 'Larsson', '0695-34 6555', 'Åkergatan 24', 'Bräcke', 'Sweden'),
	(103, '12345780', 'Sue', 'Frick', '4085553659', '3086 Ingle Ln.', 'San Jose', 'USA'),
	(104, '12345781', 'Roland ', 'Mendel', '7675-3555', 'Kirchgasse 6', 'Graz', 'Austria'),
	(105, '12345782', 'Leslie', 'Murphy', '2035559545', '567 North Pendale Street', 'New Haven', 'USA'),
	(106, '12345783', 'Yu', 'Choi', '2125551957', '5290 North Pendale Street', 'NYC', 'USA'),
	(107, '12345784', 'Martín ', 'Sommer', '(91) 555 22 82', 'C/ Araquil, 67', 'Madrid', 'Spain'),
	(108, '12345785', 'Sven ', 'Ottlieb', '0241-039123', 'Walserweg 21', 'Aachen', 'Germany'),
	(109, '12345786', 'Violeta', 'Benitez', '5085552555', '1785 First Street', 'New Bedford', 'USA'),
	(110, '12345787', 'Carmen', 'Anton', '+34 913 728555', 'c/ Gobelas, 19-1 Urb. La Florida', 'Madrid', 'Spain'),
	(111, '12345788', 'Sean', 'Clenahan', '61-9-3844-6555', '7 Allen Street', 'Glen Waverly', 'Australia'),
	(112, '12345789', 'Franco', 'Ricotti', '+39 022515555', '20093 Cologno Monzese', 'Milan', 'Italy'),
	(113, '12345790', 'Steve', 'Thompson', '3105553722', '3675 Furth Circle', 'Burbank', 'USA'),
	(114, '12345791', 'Hanna ', 'Moos', '0621-08555', 'Forsterstr. 57', 'Mannheim', 'Germany'),
	(115, '12345792', 'Alexander ', 'Semenov', '+7 812 293 0521', '2 Pobedy Square', 'Saint Petersburg', 'Russia'),
	(116, '12345793', 'Raanan', 'Altagar,G M', '+ 972 9 959 8555', '3 Hagalim Blv.', 'Herzlia', 'Israel'),
	(117, '12345794', 'José Pedro ', 'Roel', '(95) 555 82 82', 'C/ Romero, 33', 'Sevilla', 'Spain'),
	(118, '12345795', 'Rosa', 'Salazar', '2155559857', '11328 Douglas Av.', 'Philadelphia', 'USA'),
	(119, '12345796', 'Sue', 'Taylor', '4155554312', '2793 Furth Circle', 'Brisbane', 'USA'),
	(120, '12345797', 'Thomas ', 'Smith', '(171) 555-7555', '120 Hanover Sq.', 'London', 'UK'),
	(121, '12345798', 'Valarie', 'Franco', '6175552555', '6251 Ingle Ln.', 'Boston', 'USA'),
	(122, '12345799', 'Tony', 'Snowden', '+64 9 5555500', 'Arenales 1938 3\'A\'', 'Auckland  ', 'New Zealand'),
	(123, '22222222', 'martin', 'manuel', '970074101', 'los arboles', 'Lima', 'Peru');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
