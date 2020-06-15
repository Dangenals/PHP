-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 11:49 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `surname`, `email`, `password`) VALUES
(1, 'Mike', 'Landin', 'bestmike@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `surname`, `email`, `password`) VALUES
(1, 'John', 'Taylor', 'jtaylor@gmail.com', 'easypassword'),
(2, 'Roger', 'Sikowitz', 'roger@bk.ru', 'realone'),
(3, 'Max', 'Thuderman', 'maxx@gmail.com', 'bestpass'),
(4, 'Alex', 'Walker', 'alex099@gmail.com', 'neversaynever'),
(5, '1', '1', '1', '$2y$10$iDijnk9Up/P82qRguEges.9NNkxpBOPi9BSdj.eSoMjG0u3UqHa5y'),
(6, 'Daniyal', 'Ganiuly', 'daniyal.ganiuly@gmail.com', '$2y$10$e9f.kAC6H8k.Gv.v.WVHPek4YmV8jd5FbjjFNDwpMRgIeXfRGHNta'),
(7, 'Paul', 'Walker', 'walker@gmail.com', 'walker'),
(8, 'Steve', 'King', 'king@gmail.com', 'king'),
(9, 'Josh', 'Frank', 'frank@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `image_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `color`, `image_address`) VALUES
(1, 'Samsung galaxy s20 Ultra', 'The Galaxy S20 Ultra 5G ships in what\'s become the standard Samsung box for high-end models - black, not very flashy at all. The visuals have changed slightly and now there\'s an outline of the phone on the lid, with the \'S20\' so big it spills over to the sides.', 1200, 'Cosmic grey', 'images/s20ultra.png'),
(2, 'Apple Iphone 11 Pro Max', 'The new triple camera is brand new, though. Now in addition to the wide and tele shooters, there is an ultrawide snapper. Night Mode finally makes it to the iPhones, and the 4K capture at 60fps gets the cool extended dynamic range as well. Probably the most awesome feature, showing off the power of Apple\'s chip, is the option to shoot with all four cameras (incl. selfie) at once. At 4K at 60fps with no limits. Imagine that!', 1100, 'Midnight green', 'images/11promax.jpg'),
(3, 'Samsung galaxy s20', 'The S20 and S20+ are so incredibly similar that the choice between the two comes down to size preference. Especially if you are in no rush to hop on the 5G early-adopter bandwagon since the vanilla S20 is available in a 4G configuration and an incomplete 5G one (Sub-6 only).', 900, 'Cloud Blue', 'images/s20.png'),
(4, 'Apple Iphone X Pro Max', 'Nobody doubted that a bigger iPhone would have costed more. But the iPhone XS Max is not just the most expensive iPhone yet. It\'s the most expensive smartphone there is right now. And despite what we\'d expect, this didn\'t turn down the fans, quite the opposite - the iPhone XS Max is massively outselling the XS.', 950, 'Gold', 'images/xsmax.gif'),
(6, 'Apple Iphone X', 'The iPhone X gets the best of everything Apple and its providers have had in the lab. A new AMOLED HDR screen. A new steel frame. A new camera with dual optical stabilization. The best chipset on the market. A new front camera with depth-detection. Wireless charging. All that at the expense of a little notch.', 700, 'Black', 'images/xblack.gif'),
(7, 'Samsung galaxy s10', 'Step by step and year by year, we\'re now at 10 - the Samsung Galaxy S-series have matured over the past decade with big and incremental upgrades alike bringing us closer to that elusive \'perfect smartphone\'. The Galaxy S10 is by definition the best one ever, so let\'s see just how good the best is.', 800, 'Prism green', 'images/s10.jpg'),
(8, 'Apple Iphone SE 2020', 'the Apple iPhone SE. The Special Edition. Even if the Smaller Edition was more appropriate. And just like the first iPhone SE, its second generation is both - Small, even if larger than the first one, and Special - as such launch happens once in four years or so.', 400, 'Black', 'images/se2020.jpg'),
(9, 'Samsung galaxy s20 Ultra', 'Leading the spring-time roster this year, the Ultra marks a shift compared to the 2019 lineup. Where last year we had the similar in most ways S10 and S10+, and then the S10e positioned below them, this time around there\'s a model above the mainstream S20 and S20+ - the new moniker makes all the sense then.', 1200, 'Black', 'images/s20ultrablack.png'),
(10, 'Samsung galaxy Note 10 Plus', 'And even though the Note10+ disappointed some die-hard Note fans (at least according to our polls), there\'s no denying that the handset is an absolute powerhouse and keeps up with the 2019 trends, although not necessarily the right ones. Let\'s see how it fares in our tests and day-to-day usage before we make any conclusions.', 1100, 'Aura glow', 'images/note10plus.jpg'),
(12, 'Iphone 7', 'very good', 300, 'Jet black', 'images/7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
