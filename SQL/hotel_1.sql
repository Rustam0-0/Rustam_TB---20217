-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2021 at 08:58 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `capacite_chambre` int(3) NOT NULL,
  `degre_confort` varchar(20) NOT NULL,
  `exposition` varchar(80) NOT NULL,
  `type_chambre` varchar(10) NOT NULL,
  `num_chambre` int(3) NOT NULL,
  `num_hotel` int(3) NOT NULL,
  UNIQUE KEY `num_chambre` (`num_chambre`),
  KEY `num_hotel` (`num_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `adresse_client` varchar(80) NOT NULL,
  `nom_client` varchar(40) NOT NULL,
  `prenom_client` varchar(30) NOT NULL,
  `num_client` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `capacite_hotel` int(3) NOT NULL,
  `categorie_hotel` int(1) NOT NULL,
  `nom_hotel` int(20) NOT NULL,
  `adresse_hotel` varchar(60) NOT NULL,
  `num_hotel` int(11) NOT NULL,
  `num_station` int(11) NOT NULL,
  UNIQUE KEY `num_hotel` (`num_hotel`),
  KEY `num_station` (`num_station`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `num_chambre` int(5) NOT NULL,
  `num_client` int(5) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `date_reservation` date NOT NULL,
  `montant` int(5) NOT NULL,
  `prix_total` int(5) NOT NULL,
  KEY `num_client` (`num_client`),
  KEY `num_chambre` (`num_chambre`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
CREATE TABLE IF NOT EXISTS `station` (
  `num_station` int(5) NOT NULL,
  `nom_station` varchar(20) NOT NULL,
  PRIMARY KEY (`num_station`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`num_hotel`) REFERENCES `hotel` (`num_hotel`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`num_client`) REFERENCES `reservation` (`num_client`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`num_hotel`) REFERENCES `chambre` (`num_hotel`),
  ADD CONSTRAINT `hotel_ibfk_2` FOREIGN KEY (`num_station`) REFERENCES `station` (`num_station`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`num_chambre`) REFERENCES `chambre` (`num_chambre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
