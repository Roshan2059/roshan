-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 12:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `show_id`, `user_id`, `sold`) VALUES
(1, 1, 9, 1),
(31, 1, 10, 0),
(32, 1, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` varchar(5) NOT NULL,
  `row` int(11) DEFAULT NULL,
  `columns` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `row`, `columns`) VALUES
('A1', NULL, NULL),
('A10', NULL, NULL),
('A11', NULL, NULL),
('A12', NULL, NULL),
('A13', NULL, NULL),
('A14', NULL, NULL),
('A15', NULL, NULL),
('A2', NULL, NULL),
('A3', NULL, NULL),
('A4', NULL, NULL),
('A5', NULL, NULL),
('A6', NULL, NULL),
('A7', NULL, NULL),
('A8', NULL, NULL),
('A9', NULL, NULL),
('B1', NULL, NULL),
('B10', NULL, NULL),
('B11', NULL, NULL),
('B12', NULL, NULL),
('B13', NULL, NULL),
('B14', NULL, NULL),
('B15', NULL, NULL),
('B2', NULL, NULL),
('B3', NULL, NULL),
('B4', NULL, NULL),
('B5', NULL, NULL),
('B6', NULL, NULL),
('B7', NULL, NULL),
('B8', NULL, NULL),
('B9', NULL, NULL),
('C1', NULL, NULL),
('C10', NULL, NULL),
('C11', NULL, NULL),
('C12', NULL, NULL),
('C13', NULL, NULL),
('C14', NULL, NULL),
('C15', NULL, NULL),
('C2', NULL, NULL),
('C3', NULL, NULL),
('C4', NULL, NULL),
('C5', NULL, NULL),
('C6', NULL, NULL),
('C7', NULL, NULL),
('C8', NULL, NULL),
('C9', NULL, NULL),
('D1', NULL, NULL),
('D10', NULL, NULL),
('D11', NULL, NULL),
('D12', NULL, NULL),
('D13', NULL, NULL),
('D14', NULL, NULL),
('D15', NULL, NULL),
('D2', NULL, NULL),
('D3', NULL, NULL),
('D4', NULL, NULL),
('D5', NULL, NULL),
('D6', NULL, NULL),
('D7', NULL, NULL),
('D8', NULL, NULL),
('D9', NULL, NULL),
('E1', NULL, NULL),
('E10', NULL, NULL),
('E11', NULL, NULL),
('E12', NULL, NULL),
('E13', NULL, NULL),
('E14', NULL, NULL),
('E15', NULL, NULL),
('E2', NULL, NULL),
('E3', NULL, NULL),
('E4', NULL, NULL),
('E5', NULL, NULL),
('E6', NULL, NULL),
('E7', NULL, NULL),
('E8', NULL, NULL),
('E9', NULL, NULL),
('F1', NULL, NULL),
('F10', NULL, NULL),
('F11', NULL, NULL),
('F12', NULL, NULL),
('F13', NULL, NULL),
('F14', NULL, NULL),
('F15', NULL, NULL),
('F2', NULL, NULL),
('F3', NULL, NULL),
('F4', NULL, NULL),
('F5', NULL, NULL),
('F6', NULL, NULL),
('F7', NULL, NULL),
('F8', NULL, NULL),
('F9', NULL, NULL),
('G1', NULL, NULL),
('G10', NULL, NULL),
('G11', NULL, NULL),
('G12', NULL, NULL),
('G13', NULL, NULL),
('G14', NULL, NULL),
('G15', NULL, NULL),
('G2', NULL, NULL),
('G3', NULL, NULL),
('G4', NULL, NULL),
('G5', NULL, NULL),
('G6', NULL, NULL),
('G7', NULL, NULL),
('G8', NULL, NULL),
('G9', NULL, NULL),
('H1', NULL, NULL),
('H10', NULL, NULL),
('H11', NULL, NULL),
('H12', NULL, NULL),
('H13', NULL, NULL),
('H14', NULL, NULL),
('H15', NULL, NULL),
('H2', NULL, NULL),
('H3', NULL, NULL),
('H4', NULL, NULL),
('H5', NULL, NULL),
('H6', NULL, NULL),
('H7', NULL, NULL),
('H8', NULL, NULL),
('H9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seatbook`
--

CREATE TABLE `seatbook` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(5) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatbook`
--

INSERT INTO `seatbook` (`id`, `seat_id`, `booking_id`) VALUES
(318, 'C7', 1),
(319, 'C8', 1),
(320, 'C9', 1),
(332, 'D6', 1),
(333, 'D7', 1),
(406, 'A12', 32),
(407, 'A13', 32),
(408, 'A14', 32),
(409, 'A15', 32),
(440, 'E11', 31),
(441, 'E12', 31),
(442, 'F12', 31),
(443, 'F11', 31),
(444, 'E13', 31),
(445, 'F13', 31);

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `show_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `movie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`show_id`, `date`, `time`, `movie`) VALUES
(1, '2022-02-08', '00:14:05', 'Tere Naam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `phone_number`, `address`) VALUES
(9, 'ram', 'prasad', 'ram', '1234', 'ram@email.com', '9841000000', 'adddress'),
(10, 'admin', 'admin', 'admin', 'admin', 'admin@email.com', '9888', 'adkdka'),
(11, 'peter', 'pan', 'peter', '1234', 'peter@pan.com', '98999', 'somewhere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_user` (`user_id`),
  ADD KEY `booking_show` (`show_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `seatbook`
--
ALTER TABLE `seatbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seatbook_booking` (`booking_id`),
  ADD KEY `seatbook_seat` (`seat_id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `seatbook`
--
ALTER TABLE `seatbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_show` FOREIGN KEY (`show_id`) REFERENCES `show` (`show_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `seatbook`
--
ALTER TABLE `seatbook`
  ADD CONSTRAINT `seatbook_booking` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seatbook_seat` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
