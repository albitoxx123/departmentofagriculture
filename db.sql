-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 04:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblacc`
--

CREATE TABLE `tblacc` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_pic` text NOT NULL,
  `sex` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sto_strt` text NOT NULL,
  `brgy` text NOT NULL,
  `brgy_destination` text DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `username` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblacc`
--

INSERT INTO `tblacc` (`id`, `fname`, `lname`, `contact`, `email`, `id_pic`, `sex`, `age`, `sto_strt`, `brgy`, `brgy_destination`, `status`, `username`, `pass`, `user_type`) VALUES
(1, 'Michelle', 'Linco', '09123456789', 'michellelinco@gmail.com', '', 'Female', '24', 'Saraet', 'Aguisan', NULL, 'confirm', 'michelle', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin'),
(2, 'Joenel', 'Gregorio', '09272774215', 'joenelgregoriojkswfoa0330@gmail.com', 'img/me.jpg', 'Male', '21', 'bangga dalan', 'ISIO', 'MAMBAGATON', 'pending', 'joenel', '5f4dcc3b5aa765d61d8327deb882cf99', 'staff'),
(3, 'Paul', 'Blauro', '09123456789', 'paulblauro0950@gmail.com', 'img/paul.jpg', 'Male', '21', 'bangga aguisan', 'AGUISAN', 'AGUISAN', 'pending', 'paul', '5f4dcc3b5aa765d61d8327deb882cf99', 'staff'),
(4, 'maria', 'bernardino', '09423423', 'mariasheenabernardino@gmail.com', 'img/maria.jpg', 'Female', '22', 'kdnskdjasd', 'AGUISAN', 'BUENAVISTA', 'pending', 'maria', '5f4dcc3b5aa765d61d8327deb882cf99', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `tblannounce`
--

CREATE TABLE `tblannounce` (
  `id` int(11) NOT NULL,
  `announce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblannounce`
--

INSERT INTO `tblannounce` (`id`, `announce`) VALUES
(1, 'This year in our home town in himamaylan city the Department of Agriculture will conduct a survey for our farmer to determine our crop productivity, please be guided and cooperate. Thank you! ');

-- --------------------------------------------------------

--
-- Table structure for table `tblcrop`
--

CREATE TABLE `tblcrop` (
  `id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `farmer_name` text NOT NULL,
  `brgy` text NOT NULL,
  `income` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gain_loss` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `clasirice` varchar(50) DEFAULT '',
  `variety` varchar(50) DEFAULT '',
  `watersource` varchar(50) DEFAULT '',
  `yield` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcrop`
--

INSERT INTO `tblcrop` (`id`, `farmer_id`, `farmer_name`, `brgy`, `income`, `day`, `month`, `year`, `gain_loss`, `feedback`, `clasirice`, `variety`, `watersource`, `yield`) VALUES
(1, 1, 'Tedmar Enorial', 'MAMBAGATON', 22000, '2', 'May', '2020', 'Gain', 'I have a very small gain income because of the bad weathers', '', ' ', ' ', ' '),
(2, 5, 'angelic  delagon', 'MAMBAGATON', 50000, '12', 'March', '2020', 'Gain', 'Good weather and maintain my fertilizer', '', ' ', ' ', ' '),
(3, 1, 'Tedmar Enorial', 'MAMBAGATON', 25000, '28', 'August', '2020', 'Gain', 'Bad Weather', '', ' ', ' ', ' '),
(4, 1, 'Tedmar Enorial', 'MAMBAGATON', 60000, '10', 'December', '2020', 'Gain', 'Good Weather', '', ' ', ' ', ' '),
(5, 4, 'tedted Enorial', 'MAMBAGATON', 30000, '25', 'May', '2020', 'Gain', 'lack of fertilizer', '', ' ', ' ', ' '),
(6, 4, 'tedted Enorial', 'MAMBAGATON', 50000, '16', 'September', '2020', 'Gain', 'Weather is in good condition and sustain water', '', ' ', ' ', ' '),
(7, 4, 'tedted Enorial', 'MAMBAGATON', 20000, '28', 'January', '2020', 'Gain', 'bad weather', '', ' ', ' ', ' '),
(8, 5, 'angelic  delagon', 'MAMBAGATON', 15000, '3', 'April', '2020', 'Gain', 'Too many insect in my farm', '', ' ', ' ', ' '),
(9, 5, 'angelic  delagon', 'MAMBAGATON', 60000, '20', 'July', '2020', 'Gain', 'Good weather', '', ' ', ' ', ' '),
(10, 5, 'angelic delagon', 'MAMBAGATON', 47000, '4', 'December', '2020', 'Gain', 'good weather and sustain water', '', ' ', ' ', ' '),
(11, 1, 'Tedmar Enorial', 'MAMBAGATON', 40000, '25', 'March', '2021', 'Gain', 'bad weather and lack of water', '', ' ', ' ', ' '),
(12, 1, 'Tedmar Enorial', 'MAMBAGATON', 40000, '7', 'July', '2020', 'Gain', 'good condition', '', ' ', ' ', ' '),
(13, 1, 'Tedmar Enorial', 'MAMBAGATON', 70000, '25', 'December', '2020', 'Gain', 'Good weather and sustain water and fertilizer', '', ' ', ' ', ' '),
(14, 2, 'Jude Tenido', 'AGUISAN', 60000, '5', 'April', '2020', 'Gain', 'Good weather ', '', ' ', ' ', ' '),
(15, 2, 'Jude Tenido', 'AGUISAN', 40000, '18', 'August', '2020', 'Gain', 'lack of water sometimes', '', ' ', ' ', ' '),
(16, 2, 'Jude Tenido', 'AGUISAN', 80000, '7', 'December', '2020', 'Gain', 'Good weather and sustainable water, fertlizer and pesticide', '', ' ', ' ', ' '),
(17, 3, 'Ruben Acson', 'AGUISAN', 45000, '28', 'April', '2020', 'Gain', 'good condition of weather', '', ' ', ' ', ' '),
(18, 3, 'Ruben Acson', 'AGUISAN', 30000, '15', 'August', '2020', 'Gain', 'because of bad weather', '', ' ', ' ', ' '),
(19, 3, 'Ruben Acson', 'AGUISAN', 30000, '10', 'December', '2020', 'Gain', 'bad weather and lack of pesticide', '', ' ', ' ', ' '),
(20, 2, 'Jude Tenido', 'AGUISAN', 86000, '27', 'April', '2021', 'Gain', 'Good weather and no any problem at all', '', ' ', ' ', ' '),
(21, 3, 'Ruben Acson', 'AGUISAN', 30000, '14', 'March', '2021', 'Gain', 'Bad weather and lack of water supply', '', ' ', ' ', ' '),
(22, 4, 'tedted Enorial', 'MAMBAGATON', 34000, '3', 'March', '2021', 'Gain', 'bad weather because of too hot we cannot give enough water ', '', ' ', ' ', ' '),
(23, 5, 'angelic  delagon', 'MAMBAGATON', 23000, '20', 'March', '2021', 'Gain', 'bad weather', '', ' ', ' ', ' '),
(24, 2, 'Jude Tenido', 'AGUISAN', 80000, '24', 'May', '2021', 'Gain', 'nami weather kag bastantiu sa tubig', '', ' ', ' ', ' '),
(25, 2, 'Jude Tenido', 'AGUISAN', 90000, '24', 'May', '2021', 'Gain', 'GOOD WESTHER', '', ' ', ' ', ' '),
(26, 1, 'Tedmar Enorial', 'MAMBAGATON', 70000, '4', 'September', '2019', 'Gain', 'dasjdbasjdb ', '', ' ', ' ', ' '),
(27, 5, 'angelic  delagon', 'MAMBAGATON', 104000, '17', 'February', '2019', 'Gain', 'sadasdd', '', ' ', ' ', ' '),
(28, 6, 'juan cruz', 'BUENAVISTA', 42000, '16', 'September', '2019', 'Gain', 'asdasdasdas', '', ' ', ' ', ' '),
(29, 6, 'juan cruz', 'BUENAVISTA', 87000, '27', 'May', '2020', 'Gain', 'dwdqwd', '', ' ', ' ', ' '),
(30, 6, 'juan cruz', 'BUENAVISTA', 35000, '1', 'January', '2021', 'Gain', 'dsadas', '', ' ', ' ', ' '),
(31, 6, 'juan cruz', 'BUENAVISTA', 130000, '4', 'April', '2021', 'Gain', 'sd,mfsbfja', '', ' ', ' ', ' '),
(32, 5, 'angelic  delagon', 'MAMBAGATON', 150000, '18', 'December', '2021', 'Gain', 'dsadqgfdfws\r\n', '', ' ', ' ', ' '),
(33, 1, 'Tedmar Enorial', 'MAMBAGATON', 400000, '28', 'June', '2021', 'Gain', 'dsadasdad', '', ' ', ' ', ' '),
(34, 1, 'Tedmar Enorial', 'MAMBAGATON', 55, '1', 'January', '2021', 'Gain', 'test', 'Inbrid', 'Arize Bigante Plus (NSIC Rc 314H)', 'Irrigated', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblfarmer`
--

CREATE TABLE `tblfarmer` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `sex` varchar(150) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sto_street` text NOT NULL,
  `brgy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfarmer`
--

INSERT INTO `tblfarmer` (`id`, `fname`, `lname`, `contact`, `email`, `sex`, `age`, `sto_street`, `brgy`) VALUES
(1, 'Tedmar', 'Enorial', '09213456897', 'tomeotanate@gmail.com', 'Male', '25', 'bangga menez', 'MAMBAGATON'),
(2, 'Jude', 'Tenido', '09123456789', 'judetenido@yahoo.com', 'Male', '25', 'dsgsrqw', 'AGUISAN'),
(3, 'Ruben', 'Acson', '09987654321', 'rubenacson@gmail.com', 'Male', '26', 'wefewfq', 'AGUISAN'),
(4, 'tedted', 'Enorial', '09213456897', 'tomeotanate@gmail.com', 'Male', '25', 'bangga menez', 'MAMBAGATON'),
(5, 'angelic ', 'delagon', '09232141', 'angelicdelagon13@gmail.com', 'Female', '21', 'menez', 'MAMBAGATON'),
(6, 'juan', 'cruz', '09232542', 'juan@gmail.com', 'Male', '67', 'sdakdsandj', 'BUENAVISTA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblacc`
--
ALTER TABLE `tblacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblannounce`
--
ALTER TABLE `tblannounce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcrop`
--
ALTER TABLE `tblcrop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblacc`
--
ALTER TABLE `tblacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblannounce`
--
ALTER TABLE `tblannounce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcrop`
--
ALTER TABLE `tblcrop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
