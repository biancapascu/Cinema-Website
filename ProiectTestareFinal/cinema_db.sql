-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 04:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingTheatre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingType` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingDate` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingTime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingFName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingLName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookingPNumber` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(24, 'Venom', 'main-hall', '2d', '14-3', '15-00', 'Bianca', 'Pascu', '0744796940'),
(25, 'Last Night in Soho', 'vip-hall', '2d', '05-12', '15-00', 'Andra', 'Piscu', '0711111111'),
(26, 'House of Gucci', 'main-hall', '2d', '29-11', '09-00', 'Andra', 'Piscu', '0711111111');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `senderlName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sendereMail` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `senderfeedback` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(3, 'Bianca', 'Pascu', 'biancapascu19@yahoo.com', 'msg'),
(4, 'Andra', 'Piscu', 'andra_2000@yahoo.com', 'verif');

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `movieTitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `movieGenre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `movieDuration` int(11) DEFAULT NULL,
  `movieRelDate` date DEFAULT NULL,
  `movieDirector` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `movieActors` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'dune.jpg', 'Dune', 'Sci-Fi, Adventure', 155, '2021-10-22', 'Denis Villeneuve', 'Jason Momoa, Rebecca Ferguson, Zendaya, Timoth?e Chalamet'),
(2, 'venom.jpg', 'Venom', 'Action, Adventure', 97, '2021-10-15', 'Andy Serkis', 'Tom Hardy, Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham, Woody Harrelson'),
(3, 'TheAddamsFamily2.jpg', 'The Addams Family 2', 'Comedy, Romance', 93, '2021-10-01', 'Greg Tiernan, Conrad Vernon', 'Chlo? Grace Moretz, Charlize Theron, Oscar Isaac, Bill Hader, Nick Kroll'),
(4, 'Eternals.jpg', 'Eternals', 'Adventure, Action', 157, '2021-11-05', 'Chlo? Zhao', 'Gemma Chan, Richard Madden, Kumail Nanjiani, Lia McHugh, Brian Tyree Henry, Lauren Ridloff, Barry Keoghan, Don Lee'),
(5, 'LoveHard.jpg', 'Love Hard', 'Comedy, Romance', 105, '2021-11-05', 'Hernan Jimenez', 'Nina Dobrev, Jimmy O. Yang, Darren Barnet'),
(6, 'Intrusion.jpg', 'Intrusion', 'Psychological thriller', 92, '2021-09-22', 'Adam Salky', 'Freida Pinto, Logan Marshall-Green'),
(14, 'Schumacher.jpg', 'Schumacher', 'Documentary', 112, '2021-09-15', 'Hanns-Bruno Kammert?ns, Vanessa N?cker, Michael Wech', 'Michael Schumacher, Jean Todt, Mick Schumacher, Sebastian Vettel, Bernie Ecclestone'),
(15, 'NoTimeToDie.jpg', 'No Time To Die', 'Action, Adventure', 163, '2021-10-08', 'Cary Joji Fukunaga', 'Daniel Craig, Rami Malek, L?a Seydoux, Lashana Lynch, Ben Whishaw, Naomie Harris, Jeffrey Wright'),
(16, 'Spider-Man.jpg', 'Spider-Man: No Way Home', 'Action, Adventure', 119, '2014-02-07', 'Jon Watts', 'Tom Holland, Zendaya, Benedict Cumberbatch'),
(17, 'LastNightInSoho.jpg', 'Last Night in Soho', 'Horror, Drama', 116, '2021-10-29', 'Edgar Wright', 'Thomasin McKenzie, Anya Taylor-Joy, Matt Smith, Michael Ajao, Terence Stamp, Diana Rigg'),
(18, 'houseofgucci.jpg', 'House of Gucci', 'Action, Drama', 158, '2021-11-07', 'Ridley Scott', 'Lady Gaga,Adam Driver,Al Pacino'),
(19, 'encanto.jpg', 'Encanto', 'Adventure, Comedy', 104, '2021-09-23', 'Jared Bush,Byron Howard,Charise Castro Smith', 'Stephanie Beatriz(voice),María Cecilia Botero(voice),John Leguizamo(voice)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
