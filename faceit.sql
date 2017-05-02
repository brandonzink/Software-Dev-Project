-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 01:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faceit`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`ID` int(11) NOT NULL,
  `PostID` int(11) NOT NULL,
  `CommentorID` int(11) NOT NULL,
  `Text` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logintoken`
--

CREATE TABLE IF NOT EXISTS `logintoken` (
`ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Text` text NOT NULL,
  `PosterID` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `Title`, `Text`, `PosterID`, `Timestamp`) VALUES
(1, 'test', 'content', 1, '2017-05-02 17:03:58'),
(2, 'test', 'content', 1, '2017-05-02 17:04:22'),
(3, 'This is a title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2017-05-02 18:50:55'),
(4, 'test', '\\"sdtersdfgssdsds\\"sdsdf\\"', 1, '2017-05-02 18:53:36'),
(5, '', '\\"sgfdgsfdhgfdsdhfdhdfhsdfh', 1, '2017-05-02 18:53:44'),
(6, 'sdfdsfdsf', 'dgdfgfdg', 1, '2017-05-02 18:54:35'),
(7, 'NEW POST', 'IF THIS WORKS ILL BE SO FIRED UP LIKE FUUUUCK', 3, '2017-05-02 23:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(11) NOT NULL,
  `Username` varchar(500) NOT NULL,
  `Password` text NOT NULL,
  `Email` varchar(767) NOT NULL,
  `Description` text NOT NULL,
  `ProfilePicURL` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Email`, `Description`, `ProfilePicURL`, `FirstName`, `LastName`) VALUES
(1, 'johndoe', '$2y$10$K42JtqamRmIMvyny4OW9jOaNg0Os0lOuKSAh.cYdb3Ntsg8v5QRl6', 'johndoe@doe.com', 'I am john therefore I doe', '1493768722Lkn5a.png', 'John', 'Doe'),
(3, 'camconnor', '$2y$10$jPqeNfrGRDvUTFHqeIeMpuwNg7./Ls0iCE0reB2x2wqAn259JL7om', 'camconnor@gmail.com', 'caaaaam', '1493768393square.jpg', 'Cam', 'Connor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logintoken`
--
ALTER TABLE `logintoken`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logintoken`
--
ALTER TABLE `logintoken`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
