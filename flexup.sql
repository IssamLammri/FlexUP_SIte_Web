-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 mai 2019 à 12:45
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
-- Base de données :  `flexup`
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
  `Is_Paid` tinyint(1) NOT NULL DEFAULT '0',
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
  `ID_Category_Parent` int(11) NOT NULL,
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
-- Structure de la table `file_client_orders`
--

DROP TABLE IF EXISTS `file_client_orders`;
CREATE TABLE IF NOT EXISTS `file_client_orders` (
  `ID_File_Client` int(11) NOT NULL AUTO_INCREMENT,
  `Name_File` varchar(100) NOT NULL,
  `Number_Form` int(11) NOT NULL,
  `ID_Type_File` int(11) NOT NULL,
  `Name_Category` varchar(100) NOT NULL,
  `Hourly_Price` int(11) DEFAULT NULL,
  `Price_Unit` int(11) DEFAULT NULL,
  `Price_M2` int(11) DEFAULT NULL,
  `Number_M2_Per_H` int(11) DEFAULT NULL,
  `Price_Min` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_File_Client`),
  KEY `ID_Type_File` (`ID_Type_File`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `file_proposal_group`
--

DROP TABLE IF EXISTS `file_proposal_group`;
CREATE TABLE IF NOT EXISTS `file_proposal_group` (
  `ID_File_Proposal` int(11) NOT NULL AUTO_INCREMENT,
  `Name_File` varchar(50) NOT NULL,
  `Number_Form` int(11) NOT NULL,
  `ID_Type_File` int(11) NOT NULL,
  `Name_Category` varchar(50) DEFAULT NULL,
  `Editor` varchar(50) NOT NULL,
  `Hourly_Price` int(11) DEFAULT NULL,
  `Price_Unit` int(11) DEFAULT NULL,
  `Price_M2` int(11) DEFAULT NULL,
  `Number_M2_Per_H` int(11) DEFAULT NULL,
  `Price_Min` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_File_Proposal`),
  KEY `ID_Type_File` (`ID_Type_File`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `form_type`
--

DROP TABLE IF EXISTS `form_type`;
CREATE TABLE IF NOT EXISTS `form_type` (
  `ID_Form_Type` int(11) NOT NULL AUTO_INCREMENT,
  `Name_Form_Type` varchar(50) NOT NULL,
  `Name_Category` varchar(50) DEFAULT NULL,
  `ID_Category` int(11) NOT NULL,
  PRIMARY KEY (`ID_Form_Type`),
  KEY `ID_Category` (`ID_Category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `form_type`
--

INSERT INTO `form_type` (`ID_Form_Type`, `Name_Form_Type`, `Name_Category`, `ID_Category`) VALUES
(1, 'babysitting Form', 'Bibi', 1);

--
-- Déclencheurs `form_type`
--
DROP TRIGGER IF EXISTS `Insert_Name_Category`;
DELIMITER $$
CREATE TRIGGER `Insert_Name_Category` BEFORE INSERT ON `form_type` FOR EACH ROW BEGIN
       		DECLARE Name_Cus varchar(50) ;
           
           select Name_Category 
   				 INTO Name_Cus
   						 from category c where c.ID_Category = New.ID_Category ;
           
           set NEW.Name_Category = Name_Cus ;
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
  `ID_Manager` int(11) NOT NULL,
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
-- Structure de la table `group_region`
--

DROP TABLE IF EXISTS `group_region`;
CREATE TABLE IF NOT EXISTS `group_region` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Group` int(11) NOT NULL,
  `ID_Region` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Group` (`ID_Group`),
  KEY `ID_Region` (`ID_Region`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `group_services_proposal`
--

DROP TABLE IF EXISTS `group_services_proposal`;
CREATE TABLE IF NOT EXISTS `group_services_proposal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Service` int(11) NOT NULL,
  `ID_Group` int(11) NOT NULL,
  `ID_Region` int(11) NOT NULL,
  `Proposal_Date` date NOT NULL,
  `ID_File` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Service` (`ID_Service`),
  KEY `ID_Group` (`ID_Group`),
  KEY `ID_Region` (`ID_Region`),
  KEY `ID_File` (`ID_File`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ID_Order` int(11) NOT NULL AUTO_INCREMENT,
  `Order_Date` date NOT NULL,
  `Name_Service` varchar(50) DEFAULT NULL,
  `Name_Client` varchar(50) DEFAULT NULL,
  `Name_Group` varchar(50) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Urgency` varchar(50) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `Is_Group` tinyint(1) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Group_Purchased` int(11) DEFAULT NULL,
  `ID_Group_V` int(11) NOT NULL,
  `ID_Basket` int(11) NOT NULL,
  `ID_File` int(11) NOT NULL,
  `ID_Service` int(11) NOT NULL,
  `ID_Region` int(11) NOT NULL,
  PRIMARY KEY (`ID_Order`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_Group_Purchased` (`ID_Group_Purchased`),
  KEY `ID_Groupe_V` (`ID_Group_V`),
  KEY `ID_Basket` (`ID_Basket`),
  KEY `ID_File` (`ID_File`),
  KEY `ID_Service` (`ID_Service`),
  KEY `ID_Region` (`ID_Region`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déclencheurs `orders`
--
DROP TRIGGER IF EXISTS `insert_name_Group`;
DELIMITER $$
CREATE TRIGGER `insert_name_Group` BEFORE INSERT ON `orders` FOR EACH ROW BEGIN
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
CREATE TRIGGER `insert_name_client` BEFORE INSERT ON `orders` FOR EACH ROW BEGIN
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
CREATE TRIGGER `insert_name_service` BEFORE INSERT ON `orders` FOR EACH ROW BEGIN
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
-- Structure de la table `orders_refused`
--

DROP TABLE IF EXISTS `orders_refused`;
CREATE TABLE IF NOT EXISTS `orders_refused` (
  `ID_Order_R` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Order` int(11) NOT NULL,
  `ID_Groupe` int(11) NOT NULL,
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
  `ID_Group` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
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
  `ID_Participant_G` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Origin_Group` int(11) NOT NULL,
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
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `ID_Region` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Parent` int(11) NOT NULL,
  `Name_Region` varchar(50) NOT NULL,
  `Postal_Code` int(11) DEFAULT NULL,
  `Global_Code` varchar(50) DEFAULT NULL,
  `Level` int(11) NOT NULL,
  `Continent` varchar(100) NOT NULL,
  `Pays` varchar(100) DEFAULT NULL,
  `Region` varchar(100) DEFAULT NULL,
  `Departement` varchar(100) DEFAULT NULL,
  `Commune` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_Region`),
  KEY `ID_Parent` (`ID_Parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `ID_Service` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Category` int(11) NOT NULL,
  `Name_Service` varchar(50) NOT NULL,
  `Number_Form` int(11) NOT NULL,
  PRIMARY KEY (`ID_Service`),
  KEY `ID_Category` (`ID_Category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`ID_Service`, `ID_Category`, `Name_Service`, `Number_Form`) VALUES
(1, 1, 'babysitting', 1);

-- --------------------------------------------------------

--
-- Structure de la table `service_region`
--

DROP TABLE IF EXISTS `service_region`;
CREATE TABLE IF NOT EXISTS `service_region` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Service` int(11) NOT NULL,
  `ID_Region` int(11) NOT NULL,
  `Price_Service` int(11) NOT NULL,
  `ID_File` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Service` (`ID_Service`),
  KEY `ID_Region` (`ID_Region`),
  KEY `ID_File` (`ID_File`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Is_Pro` tinyint(1) DEFAULT '0',
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
  `ID_User` int(11) NOT NULL,
  `ID_Type_Identify` int(11) NOT NULL,
  `PID_Number` int(11) NOT NULL,
  `Date_Of_issue` date NOT NULL,
  `Date_Of_Expiration` date NOT NULL,
  `Emission_Entity` varchar(100) NOT NULL,
  `Satuts` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_Type_Identify` (`ID_Type_Identify`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `addresses_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`ID_Address`) REFERENCES `addresses` (`ID_Address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `basket_ibfk_3` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ID_Category_Parent`) REFERENCES `category` (`ID_Category`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `file_client_orders`
--
ALTER TABLE `file_client_orders`
  ADD CONSTRAINT `file_client_orders_ibfk_1` FOREIGN KEY (`ID_Type_File`) REFERENCES `form_type` (`ID_Form_Type`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `file_proposal_group`
--
ALTER TABLE `file_proposal_group`
  ADD CONSTRAINT `file_proposal_group_ibfk_1` FOREIGN KEY (`ID_Type_File`) REFERENCES `form_type` (`ID_Form_Type`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `form_type`
--
ALTER TABLE `form_type`
  ADD CONSTRAINT `form_type_ibfk_1` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`ID_Manager`) REFERENCES `users` (`ID_User`) ON UPDATE CASCADE,
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`ID_Main_Address`) REFERENCES `addresses` (`ID_Address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `groups_ibfk_3` FOREIGN KEY (`ID_Registered_Address`) REFERENCES `addresses` (`ID_Address`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `group_region`
--
ALTER TABLE `group_region`
  ADD CONSTRAINT `group_region_ibfk_1` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_region_ibfk_2` FOREIGN KEY (`ID_Region`) REFERENCES `region` (`ID_Region`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `group_services_proposal`
--
ALTER TABLE `group_services_proposal`
  ADD CONSTRAINT `group_services_proposal_ibfk_1` FOREIGN KEY (`ID_File`) REFERENCES `file_proposal_group` (`ID_File_Proposal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `group_services_proposal_ibfk_2` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `group_services_proposal_ibfk_3` FOREIGN KEY (`ID_Region`) REFERENCES `region` (`ID_Region`) ON UPDATE CASCADE,
  ADD CONSTRAINT `group_services_proposal_ibfk_4` FOREIGN KEY (`ID_Service`) REFERENCES `service` (`ID_Service`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ID_Basket`) REFERENCES `basket` (`ID_Basket`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`ID_Group_V`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ID_Group_Purchased`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`ID_Region`) REFERENCES `region` (`ID_Region`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_6` FOREIGN KEY (`ID_Service`) REFERENCES `service` (`ID_Service`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_7` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_8` FOREIGN KEY (`ID_File`) REFERENCES `file_client_orders` (`ID_File_Client`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders_refused`
--
ALTER TABLE `orders_refused`
  ADD CONSTRAINT `orders_refused_ibfk_1` FOREIGN KEY (`ID_Groupe`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_refused_ibfk_2` FOREIGN KEY (`ID_Order`) REFERENCES `orders` (`ID_Order`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`ID_Group`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `participants_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `participants_groups`
--
ALTER TABLE `participants_groups`
  ADD CONSTRAINT `participants_groups_ibfk_1` FOREIGN KEY (`ID_Origin_Group`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `participants_groups_ibfk_2` FOREIGN KEY (`ID_Participant_G`) REFERENCES `groups` (`ID_Group`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`ID_Parent`) REFERENCES `region` (`ID_Region`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `service_region`
--
ALTER TABLE `service_region`
  ADD CONSTRAINT `service_region_ibfk_1` FOREIGN KEY (`ID_File`) REFERENCES `file_proposal_group` (`ID_File_Proposal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `service_region_ibfk_2` FOREIGN KEY (`ID_Region`) REFERENCES `region` (`ID_Region`) ON UPDATE CASCADE,
  ADD CONSTRAINT `service_region_ibfk_3` FOREIGN KEY (`ID_Service`) REFERENCES `service` (`ID_Service`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_Main_Address`) REFERENCES `addresses` (`ID_Address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`PID_Type`) REFERENCES `type_identify_document` (`ID_Type_Identify`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_identify`
--
ALTER TABLE `user_identify`
  ADD CONSTRAINT `user_identify_ibfk_1` FOREIGN KEY (`ID_Type_Identify`) REFERENCES `type_identify_document` (`ID_Type_Identify`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_identify_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
