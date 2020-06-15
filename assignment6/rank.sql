-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 07:24 PM
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
-- Database: `rank`
--

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(250) NOT NULL,
  `rating` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `best_subject` varchar(100) NOT NULL,
  `acceptance_rate` varchar(100) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `mathematics_rating` int(11) NOT NULL,
  `economics_rating` int(11) NOT NULL,
  `research_rate` int(11) NOT NULL,
  `academic_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `rating`, `name`, `location`, `best_subject`, `acceptance_rate`, `cost`, `mathematics_rating`, `economics_rating`, `research_rate`, `academic_rate`) VALUES
(41, 1, 'MIT', 'Boston', 'Computer Science', '4%', '70000$', 1, 20, 7, 1),
(42, 2, 'Stanford', 'Palo Alto', 'Mathmatics', '5%', '55000$', 5, 7, 3, 3),
(43, 3, 'Harvard', 'Boston', 'Business', '7%', '75000$', 7, 1, 9, 7),
(44, 4, 'Yale', 'Hew Haven', 'Economics', '5%', '55000$', 3, 2, 10, 2),
(45, 5, 'Princeton', 'Princeton', 'Law', '4%', '50000$', 2, 8, 2, 6),
(46, 6, 'Columbia', 'NYC', 'Law', '8%', '70000$', 6, 3, 1, 5),
(47, 7, 'Northwestern', 'Evanston', 'Business', '5%', '56000$', 8, 4, 8, 5),
(48, 8, 'University of Chicago', 'Chicago', 'Computer Science', '7%', '67000$', 10, 6, 11, 4),
(49, 9, 'Duke University', 'Durham', 'Economics', '8%', '59000$', 9, 5, 13, 11),
(50, 10, 'Johns Hopkins University', 'Baltimore', 'Biochemistry', '9%', '52000$', 11, 11, 19, 20),
(51, 11, 'CalTech', 'Pasadena', 'Computer Science', '4%', '67000$', 4, 10, 6, 10),
(52, 12, 'Cornell University', 'Starkville', 'Economics', '8%', '59000$', 13, 9, 12, 9),
(53, 13, 'Brown University', 'Providence', 'Business', '9%', '69000$', 12, 17, 4, 12),
(54, 14, 'Washington University in St. Louis', 'St.Louis', 'Chemistry', '10%', '58000$', 14, 16, 14, 15),
(55, 15, 'Emory University', 'Atlanta', 'Engineering', '15%', '54000$', 18, 12, 16, 13),
(56, 16, 'University of California--Berkeley', 'Berkley', 'Chemistry', '13%', '59000$', 17, 18, 5, 14),
(57, 17, 'University of Virginia', 'Charlottesville,', 'Mathematics', '17%', '49000$', 19, 15, 15, 16),
(58, 18, 'New York University', 'NYC', 'Law', '19%', '56000$', 15, 13, 18, 17),
(59, 19, 'University of Rochester', 'Rochester', 'Engineering', '19%', '62000$', 16, 19, 17, 18),
(60, 20, 'University of Florida', 'Gainesville', 'Economics', '21%', '45000$', 20, 14, 20, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
