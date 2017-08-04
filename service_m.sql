-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 04 Αυγ 2017 στις 21:46:51
-- Έκδοση διακομιστή: 10.1.21-MariaDB
-- Έκδοση PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `service_m`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(4) NOT NULL,
  `cat_desc` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(4) NOT NULL,
  `cust_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cust_addr` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cust_tel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cust_mob` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cust_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cust_notes` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `items`
--

CREATE TABLE `items` (
  `item_id` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL,
  `cust_id` int(4) NOT NULL,
  `item_desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `item_sn` varchar(255) CHARACTER SET utf8 NOT NULL,
  `item_notes` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `service`
--

CREATE TABLE `service` (
  `serv_id` int(4) NOT NULL,
  `item_id` int(4) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `serv_status` varchar(255) NOT NULL,
  `serv_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `service_status`
--

CREATE TABLE `service_status` (
  `status_id` int(3) NOT NULL,
  `status_desc` varchar(255) NOT NULL,
  `status_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Ευρετήρια για πίνακα `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Ευρετήρια για πίνακα `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Ευρετήρια για πίνακα `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_id`);

--
-- Ευρετήρια για πίνακα `service_status`
--
ALTER TABLE `service_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
--
-- AUTO_INCREMENT για πίνακα `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;
--
-- AUTO_INCREMENT για πίνακα `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT για πίνακα `service`
--
ALTER TABLE `service`
  MODIFY `serv_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
--
-- AUTO_INCREMENT για πίνακα `service_status`
--
ALTER TABLE `service_status`
  MODIFY `status_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
