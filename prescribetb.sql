-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql211.byetcluster.com
-- Generation Time: Jun 16, 2020 at 04:15 PM
-- Server version: 5.6.47-87.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25531886_hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `prescribetb`
--

CREATE TABLE `prescribetb` (
  `patientcontact` varchar(255) NOT NULL,
  `medication` varchar(1500) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `bill` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescribetb`
--

INSERT INTO `prescribetb` (`patientcontact`, `medication`, `amount`, `bill`, `userid`) VALUES
('4326772', 'Calpol - 650 mg - 12 tablets, Otrivin Adult 1 unit.', '1000', '800', ''),
('2828829', 'Calpol - 150 : 12 tablets, Aciloc RD 6 tablets', '120', '100', ''),
('63788229', 'Unienzyme 5 tablets', '50', '50', ''),
('728281999', 'Abc 1 tablet daily', '500', '500', ''),
('801801801', 'Zenpep 1 tablet daily', '600', '600', 'pd@gmail.com'),
('201201201', 'Creon 1 tablet twice daily', '300', '300', 'Abab101');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
