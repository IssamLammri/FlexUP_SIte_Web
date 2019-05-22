-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 mai 2019 à 12:39
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `base_flexup`
--

-- --------------------------------------------------------

--
-- Structure de la table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `ID_Address` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Group` int(11) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `Is_Group` tinyint(1) NOT NULL,
  `Address_Label` varchar(100) NOT NULL,
  `Contact_Name` varchar(100) DEFAULT NULL,
  `Organisation_Name` varchar(100) DEFAULT NULL,
  `Department_Name` varchar(100) DEFAULT NULL,
  `Address_1` varchar(255) NOT NULL,
  `Address_2` varchar(255) DEFAULT NULL,
  `City` varchar(100) NOT NULL,
  `Post_Code` int(11) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Access_Details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Address`),
  KEY `ID_Group` (`ID_Group`),
  KEY `ID_User` (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `ID_Basket` int(11) NOT NULL AUTO_INCREMENT,
  `Is_Group` tinyint(1) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Group` int(11) DEFAULT NULL,
  `Is_Paid` tinyint(1) NOT NULL,
  `Name_Customer` varchar(50) DEFAULT NULL,
  `ID_Address` int(11) DEFAULT NULL,
  `Total_Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Basket`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_Group` (`ID_Group`),
  KEY `ID_Address` (`ID_Address`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`ID_Basket`, `Is_Group`, `ID_User`, `ID_Group`, `Is_Paid`, `Name_Customer`, `ID_Address`, `Total_Price`) VALUES
(1, 1, 1, NULL, 0, 'Lammri', NULL, NULL),
(2, 1, 3, NULL, 0, 'Sébastien', NULL, NULL),
(3, 0, 1, NULL, 0, 'Lamri', NULL, NULL),
(4, 0, NULL, 1, 0, 'MIMLAD', NULL, NULL);

--
-- Déclencheurs `basket`
--
DROP TRIGGER IF EXISTS `isGroupBasket`;
DELIMITER $$
CREATE TRIGGER `isGroupBasket` BEFORE INSERT ON `basket` FOR EACH ROW BEGIN
       		DECLARE Name_Cus varchar(50) ;
           IF NEW.Is_Group = 1 THEN
           select First_Name 
   				 INTO Name_Cus
   						 from users u where u.ID_User = New.ID_User ;
           ELSE
               select Group_Name 
   				INTO Name_Cus
   						 from groups g where g.ID_Group = New.ID_Group ;
           END IF;
           set NEW.Name_Customer = Name_Cus ;
       END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID_Category` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Category_Parent` int(11) DEFAULT NULL,
  `Name_Category` varchar(50) NOT NULL,
  `Level` int(11) NOT NULL,
  PRIMARY KEY (`ID_Category`),
  KEY `ID_Category_Parent` (`ID_Category_Parent`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`ID_Category`, `ID_Category_Parent`, `Name_Category`, `Level`) VALUES
(1, 1, 'parHeure', 1),
(2, 1, 'BibiScole', 2),
(3, 1, 'plobier', 2);

-- --------------------------------------------------------

--
-- Structure de la table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `ID_Currency` int(11) NOT NULL AUTO_INCREMENT,
  `Name_Currency` varchar(50) NOT NULL,
  `symbol` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Currency`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `currency`
--

INSERT INTO `currency` (`ID_Currency`, `Name_Currency`, `symbol`) VALUES
(1, 'American dollar', '$'),
(2, 'Euro', '€'),
(3, 'Pound', '£');

-- --------------------------------------------------------

--
-- Structure de la table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `ID_Order` int(11) NOT NULL AUTO_INCREMENT,
  `Name_Client` varchar(50) DEFAULT NULL,
  `Name_Service` varchar(50) DEFAULT NULL,
  `Name_Zone` varchar(100) DEFAULT NULL,
  `Order_Date` date NOT NULL,
  `Delivery` varchar(50) DEFAULT NULL,
  `Urgency` varchar(50) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `Unit` varchar(10) DEFAULT NULL,
  `Currency` varchar(20) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Is_Group` tinyint(1) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Group_Purchased` int(11) DEFAULT NULL,
  `ID_Basket` int(11) DEFAULT NULL,
  `ID_Offers_Price` int(11) NOT NULL,
  `Name_Group` varchar(50) DEFAULT NULL,
  `ID_Group_V` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Order`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_Group_Purchased` (`ID_Group_Purchased`),
  KEY `ID_Groupe_V` (`ID_Group_V`),
  KEY `ID_Basket` (`ID_Basket`),
  KEY `ID_Offers_Price` (`ID_Offers_Price`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déclencheurs `enquiry`
--
DROP TRIGGER IF EXISTS `insert_name_Group`;
DELIMITER $$
CREATE TRIGGER `insert_name_Group` BEFORE INSERT ON `enquiry` FOR EACH ROW BEGIN
       		DECLARE Name_Cus varchar(100) ;
           
           select Group_Name  
   				 INTO Name_Cus
   						 from groups g where g.ID_Group = New.ID_Group_V ; 
           
           set NEW.Name_Group = Name_Cus ;
       END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_name_client`;
DELIMITER $$
CREATE TRIGGER `insert_name_client` BEFORE INSERT ON `enquiry` FOR EACH ROW BEGIN
       		DECLARE Name_Cus varchar(50) ;
           IF NEW.Is_Group = 1 THEN
           select First_Name 
   				 INTO Name_Cus
   						 from users u where u.ID_User = New.ID_User ;
           ELSE
               select Group_Name 
   				INTO Name_Cus
   						 from groups g where g.ID_Group = New.ID_Group_Purchased ;
           END IF;
           set NEW.name_Client = Name_Cus ;
       END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_name_service`;
DELIMITER $$
CREATE TRIGGER `insert_name_service` BEFORE INSERT ON `enquiry` FOR EACH ROW BEGIN
       		DECLARE Name_Cus varchar(100) ;
           
           select Name_Service  
   				 INTO Name_Cus
   						 from service s where s.ID_Service = New.ID_Service ;
           
           set NEW.Name_Service = Name_Cus ;
       END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `ID_Group` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Manager` int(11) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  `Star` int(11) DEFAULT NULL,
  `Group_Name` varchar(100) NOT NULL,
  `Is_Flexible` tinyint(1) DEFAULT NULL,
  `Is_Registered` tinyint(1) NOT NULL,
  `Registration_Name` varchar(100) NOT NULL,
  `Registration_Number` int(11) NOT NULL,
  `Registration_Country` varchar(100) NOT NULL,
  `ID_Registered_Address` int(11) DEFAULT NULL,
  `ID_Main_Address` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Group`),
  KEY `ID_Manager` (`ID_Manager`),
  KEY `ID_Registered_Address` (`ID_Registered_Address`),
  KEY `ID_Main_Address` (`ID_Main_Address`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`ID_Group`, `ID_Manager`, `Points`, `Star`, `Group_Name`, `Is_Flexible`, `Is_Registered`, `Registration_Name`, `Registration_Number`, `Registration_Country`, `ID_Registered_Address`, `ID_Main_Address`) VALUES
(1, 1, NULL, NULL, 'MIMLAD', NULL, 1, 'Informatique', 1698, 'Rouen', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `group_zone`
--

DROP TABLE IF EXISTS `group_zone`;
CREATE TABLE IF NOT EXISTS `group_zone` (
  `ID_Group_Zone` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Group` int(11) DEFAULT NULL,
  `ID_Zone` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID_Group_Zone`),
  KEY `ID_Group` (`ID_Group`),
  KEY `ID_Region` (`ID_Zone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offered_prices`
--

DROP TABLE IF EXISTS `offered_prices`;
CREATE TABLE IF NOT EXISTS `offered_prices` (
  `ID_Offers_Price` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Service` int(11) DEFAULT NULL,
  `ID_Zone` int(11) DEFAULT NULL,
  `Price_Service` int(11) NOT NULL,
  `Date_Offer` date NOT NULL,
  PRIMARY KEY (`ID_Offers_Price`),
  KEY `ID_Service` (`ID_Service`),
  KEY `ID_Zone` (`ID_Zone`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `ID_Offers` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Group` int(11) NOT NULL,
  `ID_Service` int(11) NOT NULL,
  `ID_Zones` int(11) NOT NULL,
  `Unit` varchar(10) DEFAULT NULL,
  `Currency` varchar(20) DEFAULT NULL,
  `Target_Price` int(11) DEFAULT NULL,
  `Minimum_Price` int(11) DEFAULT NULL,
  `Transport_Fixed` int(11) DEFAULT NULL,
  `Type_Liv` varchar(50) DEFAULT NULL,
  `Date_Offers` date NOT NULL,
  PRIMARY KEY (`ID_Offers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orders_refused`
--

DROP TABLE IF EXISTS `orders_refused`;
CREATE TABLE IF NOT EXISTS `orders_refused` (
  `ID_Order_R` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Order` int(11) DEFAULT NULL,
  `ID_Groupe` int(11) DEFAULT NULL,
  `Date_Refuse` date NOT NULL,
  `Reason` text NOT NULL,
  PRIMARY KEY (`ID_Order_R`),
  KEY `ID_Order` (`ID_Order`),
  KEY `ID_Groupe` (`ID_Groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `ID_Participant` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Group` int(11) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `Investment_Date` date NOT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `Date_Leaves` date DEFAULT NULL,
  PRIMARY KEY (`ID_Participant`),
  KEY `ID_Group` (`ID_Group`),
  KEY `ID_User` (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participants_groups`
--

DROP TABLE IF EXISTS `participants_groups`;
CREATE TABLE IF NOT EXISTS `participants_groups` (
  `ID_Participant_G` int(11) NOT NULL,
  `ID_Origin_Group` int(11) DEFAULT NULL,
  `ID_Participant_Group` int(11) NOT NULL,
  `Investment_Date` date NOT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `Date_Leaves` date DEFAULT NULL,
  PRIMARY KEY (`ID_Participant_G`),
  KEY `ID_Origin_Group` (`ID_Origin_Group`),
  KEY `ID_Participant_Group` (`ID_Participant_Group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `ID_Service` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Category` int(11) DEFAULT NULL,
  `Name_Service` varchar(50) NOT NULL,
  `Level` int(11) DEFAULT NULL,
  `Unit` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_Service`),
  KEY `ID_Category` (`ID_Category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`ID_Service`, `ID_Category`, `Name_Service`, `Level`, `Unit`) VALUES
(1, 1, 'babysitting', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_identify_document`
--

DROP TABLE IF EXISTS `type_identify_document`;
CREATE TABLE IF NOT EXISTS `type_identify_document` (
  `ID_Type_Identify` int(11) NOT NULL AUTO_INCREMENT,
  `Name_Francais` varchar(100) NOT NULL,
  `Name_English` varchar(100) NOT NULL,
  `Name_Italy` varchar(100) DEFAULT NULL,
  `Name_Arabic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_Type_Identify`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Email_Confirmed` tinyint(1) DEFAULT NULL,
  `Mobile` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `User_Name` varchar(100) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Is_Pro` tinyint(1) DEFAULT NULL,
  `PID_Type` int(11) DEFAULT NULL,
  `PID_Number` varchar(50) DEFAULT NULL,
  `PID_Expiration_Date` date DEFAULT NULL,
  `PID_Emission_Entity` varchar(100) DEFAULT NULL,
  `S_S_N` int(11) DEFAULT NULL,
  `ID_Main_Address` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_User`),
  KEY `ID_Main_Address` (`ID_Main_Address`),
  KEY `PID_Type` (`PID_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_User`, `Email`, `Email_Confirmed`, `Mobile`, `First_Name`, `Last_Name`, `User_Name`, `Password`, `Is_Pro`, `PID_Type`, `PID_Number`, `PID_Expiration_Date`, `PID_Emission_Entity`, `S_S_N`, `ID_Main_Address`) VALUES
(1, 'issamlammri34l000@gmail.com', 0, '0751938404', 'Lamri', 'Issam', 'IssamLamri', 'issamo', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'lucas.gambert@u-psud.com', NULL, '07 60 84 28 40', 'Lucas', 'Gambert', 'LucasGambert', '123456789', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'sebastien@discovery-game.com', NULL, '06 68 06 42 92', 'Sébastien', 'Maucourt', 'SébastienMaucourt', '123456789', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'talibfarouk01@gmail.com', NULL, '06 12 27 00 32', 'Farouk', 'TALIB', 'FaroukTALIB', '123456789', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_identify`
--

DROP TABLE IF EXISTS `user_identify`;
CREATE TABLE IF NOT EXISTS `user_identify` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Type_Identify` int(11) DEFAULT NULL,
  `PID_Number` int(11) NOT NULL,
  `Date_Of_issue` date NOT NULL,
  `Date_Of_Expiration` date NOT NULL,
  `Emission_Entity` varchar(100) NOT NULL,
  `Satuts` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_Type_Identify` (`ID_Type_Identify`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

DROP TABLE IF EXISTS `zone`;
CREATE TABLE IF NOT EXISTS `zone` (
  `ID_Zone` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Parent` int(11) DEFAULT NULL,
  `Name_Zone` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `Currency` int(11) DEFAULT NULL,
  `Z0` varchar(10) DEFAULT NULL,
  `Z1` varchar(100) DEFAULT NULL,
  `Z2` varchar(100) DEFAULT NULL,
  `Z3` varchar(100) DEFAULT NULL,
  `Z4` varchar(100) DEFAULT NULL,
  `Z5` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_Zone`),
  KEY `ID_Parent` (`ID_Parent`),
  KEY `Currency` (`Currency`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `FK_6FCA75166E9059DF` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `FK_6FCA7516744F713B` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`);

--
-- Contraintes pour la table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `FK_2246507B6E9059DF` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `FK_2246507B744F713B` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`),
  ADD CONSTRAINT `FK_2246507BD1C27E1E` FOREIGN KEY (`ID_Address`) REFERENCES `addresses` (`ID_Address`);

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_64C19C127B4D8DE` FOREIGN KEY (`ID_Category_Parent`) REFERENCES `category` (`ID_Category`);

--
-- Contraintes pour la table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `FK_E52FFDEE6E9059DF` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `FK_E52FFDEE798B1DA7` FOREIGN KEY (`ID_Group_Purchased`) REFERENCES `groups` (`ID_Group`),
  ADD CONSTRAINT `FK_E52FFDEEE5427D78` FOREIGN KEY (`ID_Group_V`) REFERENCES `groups` (`ID_Group`),
  ADD CONSTRAINT `enquiry_ibfk_1` FOREIGN KEY (`ID_Basket`) REFERENCES `basket` (`ID_Basket`),
  ADD CONSTRAINT `enquiry_ibfk_2` FOREIGN KEY (`ID_Offers_Price`) REFERENCES `offered_prices` (`ID_Offers_Price`);

--
-- Contraintes pour la table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `FK_F06D397026A83426` FOREIGN KEY (`ID_Manager`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `FK_F06D397048E91738` FOREIGN KEY (`ID_Main_Address`) REFERENCES `addresses` (`ID_Address`),
  ADD CONSTRAINT `FK_F06D3970906CD405` FOREIGN KEY (`ID_Registered_Address`) REFERENCES `addresses` (`ID_Address`);

--
-- Contraintes pour la table `group_zone`
--
ALTER TABLE `group_zone`
  ADD CONSTRAINT `FK_DCE429A6557EA158` FOREIGN KEY (`ID_Zone`) REFERENCES `zone` (`ID_Zone`),
  ADD CONSTRAINT `FK_DCE429A6744F713B` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`);

--
-- Contraintes pour la table `offered_prices`
--
ALTER TABLE `offered_prices`
  ADD CONSTRAINT `FK_31A5F4403D118B4D` FOREIGN KEY (`ID_Service`) REFERENCES `service` (`ID_Service`),
  ADD CONSTRAINT `FK_31A5F440557EA158` FOREIGN KEY (`ID_Zone`) REFERENCES `zone` (`ID_Zone`);

--
-- Contraintes pour la table `orders_refused`
--
ALTER TABLE `orders_refused`
  ADD CONSTRAINT `FK_1A6CC075EA5DC0F` FOREIGN KEY (`ID_Groupe`) REFERENCES `groups` (`ID_Group`),
  ADD CONSTRAINT `FK_1A6CC07ECA6A666` FOREIGN KEY (`ID_Order`) REFERENCES `enquiry` (`ID_Order`);

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `FK_716970926E9059DF` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `FK_71697092744F713B` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`);

--
-- Contraintes pour la table `participants_groups`
--
ALTER TABLE `participants_groups`
  ADD CONSTRAINT `FK_3D8A66E26F2A5FE9` FOREIGN KEY (`ID_Origin_Group`) REFERENCES `groups` (`ID_Group`),
  ADD CONSTRAINT `FK_3D8A66E28F57147B` FOREIGN KEY (`ID_Participant_G`) REFERENCES `groups` (`ID_Group`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_E19D9AD266201B05` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E948E91738` FOREIGN KEY (`ID_Main_Address`) REFERENCES `addresses` (`ID_Address`),
  ADD CONSTRAINT `FK_1483A5E9C2B52B6E` FOREIGN KEY (`PID_Type`) REFERENCES `type_identify_document` (`ID_Type_Identify`);

--
-- Contraintes pour la table `user_identify`
--
ALTER TABLE `user_identify`
  ADD CONSTRAINT `FK_F2EC7D176E9059DF` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `FK_F2EC7D17B44403CE` FOREIGN KEY (`ID_Type_Identify`) REFERENCES `type_identify_document` (`ID_Type_Identify`);

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_ibfk_1` FOREIGN KEY (`ID_Parent`) REFERENCES `zone` (`ID_Zone`),
  ADD CONSTRAINT `zone_ibfk_2` FOREIGN KEY (`Currency`) REFERENCES `currency` (`ID_Currency`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
