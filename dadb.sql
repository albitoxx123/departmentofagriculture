-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 01:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(6, 'Antonette', 'Anig-ig', '09153455542', 'Ant@gmail.com', 'img/Antonette Anig-ig.jpg', 'Female', '18', 'Jones St. Cauayan', 'ABACA', 'ABACA', 'pending', 'Antonette', '5f4dcc3b5aa765d61d8327deb882cf99', 'Staff'),
(8, 'Mechelle', 'Linco', '09873326762', 'Mechelle@gmail.com', 'img/Mechelle Linco.jpg', 'Male', '18', 'Jones St. Cauayan', 'MOLOBOLO', 'LINAON', 'pending', 'Mechelle', '5f4dcc3b5aa765d61d8327deb882cf99', 'Staff'),
(9, 'Marilou', 'Albito -ADMIN', '09876543212', 'Marilou@gmail.com', 'img/Marilou.jpg', 'Female', '18', 'Jones St. Cauayan', 'LINAON', 'MAMBUGSAY', 'pending', 'Marilou', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin'),
(11, 'Marilou', 'Albito', '0912334566', 'Mar@gmail.con', 'img/Marilou.jpg', 'Female', '18', 'Jones St. Cauayan', 'LUMBIA', 'ELIHAN', 'pending', 'Marilou', '48cccca3bab2ad18832233ee8dff1b0b', 'Staff'),
(13, 'Jojo', 'Intud', '091518134766', 'jbonintud@gmail.com', 'img/testimonials-5.jpg', 'Male', '57', 'Jones St. Cauayan', 'BULATA', 'BULATA', 'pending', 'Jojo', '5f4dcc3b5aa765d61d8327deb882cf99', 'Staff');

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
(1, 'This year in our home town in himamaylan city the Department of Agriculture will conduct a survey for our farmer to determine our crop productivity, please be guided and cooperate. Thank you very Much! ');

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
(1, 1, 'Tedmar Enorial', 'Talacdan', 22000, '2', 'May', '2020', 'Loss', 'I have a very small gain income because of the bad weathers', 'Hybrid', ' Bioseed 401 (NSIC Rc 162H', ' Non-irrigated', ' 50'),
(2, 5, 'angelic  delagon', 'Mambugsay', 50000, '12', 'March', '2020', 'Loss', 'Good weather and maintain my fertilizer', 'Hybrid', ' Bioseed 401 (NSIC Rc 162H', 'Irrigated', ' 501'),
(3, 1, 'Tedmar Enorial', 'Sura', 25000, '28', 'August', '2020', 'Loss', 'Bad Weather', 'Certified', ' Frontline S6003 (NSIC Rc 376)', ' Rainfed', ' 215'),
(4, 1, 'Tedmar Enorial', 'Sura', 60000, '10', 'December', '2020', 'Gain', 'Good Weather', 'Certified', ' Bioseed 401 (NSIC Rc 162H', ' Non-irrigated', ' 322'),
(5, 4, 'tedted Enorial', 'Lumbia', 30000, '25', 'May', '2020', 'Loss', 'lack of fertilizer', 'Goods Seeds', ' Bigante (NSIC Rc 124H)', ' Irrigated', ' 542'),
(6, 4, 'tedted Enorial', 'Linaon', 50000, '16', 'September', '2020', 'Gain', 'Weather is in good condition and sustain water', 'Hybrid', ' Bigante (NSIC Rc 124H)', ' Non-irrigated', ' 55'),
(7, 4, 'tedted Enorial', 'Lumbia', 20000, '28', 'January', '2020', 'Loss', 'bad weather', 'Inbrid', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 98'),
(8, 5, 'angelic  delagon', 'Bulata', 15000, '3', 'April', '2020', 'Gain', 'Too many insect in my farm', 'Goods Seeds', ' Bioseed 401 (NSIC Rc 162H', ' Non-irrigated', ' 21'),
(9, 5, 'angelic  delagon', 'Inayawan', 60000, '20', 'July', '2020', 'Gain', 'Good weather', 'Certified', ' Bigante (NSIC Rc 124H)', ' Irrigated', ' 542'),
(10, 5, 'angelic delagon', 'Inayawan', 47000, '4', 'December', '2020', 'Loss', 'good weather and sustain water', 'Inbrid', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 21'),
(11, 1, 'Tedmar Enorial', 'Inayawan', 40000, '25', 'March', '2021', 'Loss', 'bad weather and lack of water', 'Certified', ' Bioseed 401 (NSIC Rc 162H', ' Irrigated', ' 76'),
(12, 1, 'Tedmar Enorial', 'Inayawan', 40000, '7', 'July', '2020', 'Gain', 'good condition', 'Hybrid', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 87'),
(13, 1, 'Tedmar Enorial', 'Isio', 70000, '25', 'December', '2020', 'Gain', 'Good weather and sustain water and fertilizer', 'Certified', ' Frontline S6003 (NSIC Rc 376)', ' Irrigated', ' 876'),
(14, 2, 'Jude Tenido', 'Inayawan', 60000, '5', 'April', '2020', 'Gain', 'Good weather ', 'Hybrid', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 87'),
(15, 2, 'Jude Tenido', 'Isio', 40000, '18', 'August', '2020', 'Loss', 'lack of water sometimes', 'Certified', ' Bioseed 401 (NSIC Rc 162H', ' Rainfed', ' 87'),
(16, 2, 'Jude Tenido', 'Isio', 80000, '7', 'December', '2020', 'Gain', 'Good weather and sustainable water, fertlizer and pesticide', 'Certified', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 98'),
(17, 3, 'Ruben Acson', 'Isio', 45000, '28', 'April', '2020', 'Gain', 'good condition of weather', 'Goods Seeds', ' Arize Habilis Plus (NSIC Rc 410)', ' Non-irrigated', ' 45'),
(18, 3, 'Ruben Acson', 'Lumbia', 30000, '15', 'August', '2020', 'Loss', 'because of bad weather', 'Inbrid', ' Arize Habilis Plus (NSIC Rc 410)', ' Irrigated', ' 65'),
(19, 3, 'Ruben Acson', 'Lumbia', 30000, '10', 'December', '2020', 'Gain', 'bad weather and lack of pesticide', 'Certified', ' Arize Habilis Plus (NSIC Rc 410)', ' Rainfed', ' 853'),
(20, 2, 'Jude Tenido', 'Lumbia', 86000, '27', 'April', '2021', 'Gain', 'Good weather and no any problem at all', 'Hybrid', ' Arize Habilis Plus (NSIC Rc 410)', ' Rainfed', ' 54'),
(21, 3, 'Ruben Acson', 'Talacdan', 30000, '14', 'March', '2021', 'Loss', 'Bad weather and lack of water supply', 'Hybrid', ' Arize Habilis Plus (NSIC Rc 410)', ' Non-irrigated', ' 87'),
(22, 4, 'tedted Enorial', 'Talacdan', 34000, '3', 'March', '2021', 'Loss', 'bad weather because of too hot we cannot give enough water ', 'Inbrid', ' Bioseed 401 (NSIC Rc 162H', ' Rainfed', ' 76'),
(23, 5, 'angelic  delagon', 'Talacdan', 23000, '20', 'March', '2021', 'Loss', 'bad weather', 'Hybrid', ' Frontline S6003 (NSIC Rc 376)', ' Rainfed', ' 76'),
(24, 2, 'Jude Tenido', 'Talacdan', 80000, '24', 'May', '2021', 'Gain', 'nami weather kag bastantiu sa tubig', 'Inbrid', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 87'),
(25, 2, 'Jude Tenido', 'Basak', 90000, '24', 'May', '2021', 'Gain', 'GOOD WESTHER', 'Inbrid', ' Arize Habilis Plus (NSIC Rc 410)', ' Irrigated', ' 32'),
(26, 1, 'Tedmar Enorial', 'Basak', 70000, '4', 'September', '2019', 'Gain', 'dasjdbasjdb ', 'Certified', ' Arize Habilis Plus (NSIC Rc 410)', ' Non-irrigated', ' 34'),
(27, 5, 'angelic  delagon', 'Basak', 104000, '17', 'February', '2019', 'Gain', 'sadasdd', 'Certified', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 34'),
(28, 6, 'juan cruz', 'Elihan', 42000, '16', 'September', '2019', 'Gain', 'asdasdasdas', 'Goods Seeds', ' Bigante (NSIC Rc 124H)', ' Irrigated', ' 12'),
(29, 6, 'Diva Boi', 'Baclao', 87000, '27', 'May', '2020', 'Gain', 'dwdqwd', 'Certified', ' Arize Habilis Plus (NSIC Rc 410)', ' Irrigated', ' 67'),
(30, 6, 'Troy loi', 'Camalandaan', 35000, '1', 'January', '2021', 'Gain', 'dsadas', 'Hybrid', ' Arize Habilis Plus (NSIC Rc 410)', ' Rainfed', ' 87'),
(31, 6, 'Robin dok', 'Masaling', 130000, '4', 'April', '2021', 'Gain', 'sd,mfsbfja', 'Certified', ' Bigante (NSIC Rc 124H)', ' Irrigated', ' 986'),
(32, 5, 'angelic  delagon', 'Sura', 150000, '18', 'December', '2021', 'Gain', 'dsadqgfdfws\r\n', 'Inbrid', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 985'),
(33, 1, 'Sharon sek', 'Baclao', 400000, '28', 'June', '2021', 'Gain', 'dsadasdad', 'Certified', ' Frontline S6003 (NSIC Rc 376)', ' Non-irrigated', ' 53'),
(34, 1, 'Tiger low', 'Caliling', 55, '1', 'January', '2021', 'Loss', 'test', 'Inbrid', 'Arize Bigante Plus (NSIC Rc 314H)', 'Irrigated', '1234'),
(35, 1, 'trix mow', 'Linaon', 2500, '3', 'April', '2021', 'Loss', 'agoi noy', 'Inbrid', 'Arize Bigante Plus (NSIC Rc 314H)', 'Irrigated', '1'),
(36, 1, 'Tedmar Enorial', 'LINAON', 3456, '24', 'December', '2021', 'Gain', 'KITA MAN', 'Hybrid', 'Arize Bigante Plus (NSIC Rc 314H)', 'Irrigated', '2'),
(37, 1, 'Tedmar Enorial', 'LINAON', 3456, '24', 'December', '2021', 'Gain', 'KITA MAN', 'Hybrid', 'Arize Bigante Plus (NSIC Rc 314H)', 'Irrigated', '2'),
(38, 1, 'Tedmar Enorial', 'LINAON', 432, '3', 'August', '2021', 'Gain', 'OK', 'Inbrid', 'Arize Bigante Plus (NSIC Rc 314H)', 'Irrigated', '1');

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
(1, 'Tedmar', 'Enorial', '09213456897', 'tomeotanate@gmail.com', 'Male', '25', 'bangga menez', 'LINAON'),
(2, 'Jude', 'Tenido', '09123456789', 'judetenido@yahoo.com', 'Male', '25', 'dsgsrqw', 'LUMBIA'),
(3, 'Ruben', 'Acson', '09987654321', 'rubenacson@gmail.com', 'Male', '26', 'wefewfq', 'MOLOBOLO'),
(4, 'tedted', 'Enorial', '09213456897', 'tomeotanate@gmail.com', 'Male', '25', 'bangga menez', 'GUILUNGAN'),
(5, 'angelic ', 'delagon', '09232141', 'angelicdelagon13@gmail.com', 'Female', '21', 'menez', 'ISIO'),
(6, 'juan', 'cruz', '09232542', 'juan@gmail.com', 'Male', '67', 'sdakdsandj', 'SURA'),
(7, 'Vasques', 'Moon', '090323423423', 'www.moon@gmail.com', 'Male', '34', 'Luyang', 'ISIO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblannounce`
--
ALTER TABLE `tblannounce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcrop`
--
ALTER TABLE `tblcrop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
