-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 07:54 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tariff_id` int(255) NOT NULL,
  `tariff_activation_date` date NOT NULL,
  `balance` int(100) NOT NULL,
  `next_charge_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `tariff_id`, `tariff_activation_date`, `balance`, `next_charge_date`) VALUES
(1, 'John', 'Adams', 'jadams@gmail.com', 2147483647, 'John123', 21, '2020-05-20', 500, '2020-06-20'),
(2, 'Mark', 'Andrew', 'andrew555@gmail.com', 2147483647, 'pass123', 22, '2020-05-21', 200, '2020-06-21'),
(3, 'Bill', 'Chester', 'billy76@gmail.com', 2147483647, 'Bestpass', 23, '2020-05-13', 1000, '2020-06-13'),
(4, 'Mike', 'Phyllips', 'phyl09', 2147483647, 'gose', 24, '2020-05-18', 500, '2020-06-18'),
(5, 'Alex', 'Hide', 'alexis@gmail.com', 2147483647, 'hidepass123', 25, '2020-05-12', 500, '2020-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_transactions`
--

CREATE TABLE `purchase_transactions` (
  `transaction_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `tariff_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `balance_before` int(255) NOT NULL,
  `balance_after` int(255) NOT NULL,
  `charge_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_transactions`
--

INSERT INTO `purchase_transactions` (`transaction_id`, `user_id`, `tariff_id`, `date`, `balance_before`, `balance_after`, `charge_price`) VALUES
(101, 1, 21, '2020-05-16', 2000, 500, 1500),
(102, 2, 23, '2020-05-14', 1700, 200, 1500),
(103, 3, 23, '2020-05-13', 2700, 1000, 1700),
(104, 4, 24, '2020-05-24', 1900, 500, 1400),
(105, 5, 25, '2020-05-21', 1100, 500, 600);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(255) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_price`) VALUES
(51, 'comfort S', 1500),
(52, 'comfort M', 1500),
(53, 'comfort L', 1700),
(54, 'package 1', 1400),
(55, 'basic', 600);

-- --------------------------------------------------------

--
-- Table structure for table `service_transactions`
--

CREATE TABLE `service_transactions` (
  `transaction_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `balance_before` int(255) NOT NULL,
  `balance_after` int(255) NOT NULL,
  `charge_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_transactions`
--

INSERT INTO `service_transactions` (`transaction_id`, `user_id`, `service_id`, `date`, `balance_before`, `balance_after`, `charge_price`) VALUES
(101, 1, 51, '2020-05-16', 2000, 500, 1500),
(102, 2, 52, '2020-05-14', 1700, 200, 1500),
(103, 3, 53, '2020-05-13', 2700, 1000, 1700),
(104, 4, 54, '2020-05-24', 1900, 500, 1400),
(105, 5, 55, '2020-05-21', 1100, 500, 600);

-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--

CREATE TABLE `tariff` (
  `tariff_id` int(100) NOT NULL,
  `tariff_name` varchar(100) NOT NULL,
  `tariff_price` int(255) NOT NULL,
  `internet(GBs)` int(100) NOT NULL,
  `minutes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`tariff_id`, `tariff_name`, `tariff_price`, `internet(GBs)`, `minutes`) VALUES
(21, 'comfort S', 1500, 5, 80),
(22, 'comfort M', 1500, 7, 90),
(23, 'comfort L', 1700, 10, 100),
(24, 'package 1', 1400, 8, 150),
(25, 'basic', 600, 3, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_tariff_id` (`tariff_id`);

--
-- Indexes for table `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `fk_user2_id` (`user_id`),
  ADD KEY `fk_tariff2_id` (`tariff_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_transactions`
--
ALTER TABLE `service_transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_service_id` (`service_id`);

--
-- Indexes for table `tariff`
--
ALTER TABLE `tariff`
  ADD PRIMARY KEY (`tariff_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_tariff_id` FOREIGN KEY (`tariff_id`) REFERENCES `tariff` (`tariff_id`);

--
-- Constraints for table `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  ADD CONSTRAINT `fk_tariff2_id` FOREIGN KEY (`tariff_id`) REFERENCES `tariff` (`tariff_id`),
  ADD CONSTRAINT `fk_user2_id` FOREIGN KEY (`user_id`) REFERENCES `client` (`user_id`);

--
-- Constraints for table `service_transactions`
--
ALTER TABLE `service_transactions`
  ADD CONSTRAINT `fk_service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `client` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
