-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 07:12 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it5015-moviereviewsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `director_id` int(11) NOT NULL,
  `directorName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`director_id`, `directorName`) VALUES
(1, 'Marian Mozo'),
(2, 'Sheena Alcantara'),
(8, 'New Director 1'),
(9, ''),
(10, 'IDK The Author Name'),
(11, 'Laban');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Horror'),
(2, 'Comedy'),
(3, 'Fantasy'),
(4, 'Romance'),
(5, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(200) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `image` varchar(200) NOT NULL,
  `rating` int(1) NOT NULL,
  `aboutMovie` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `genre_id`, `director_id`, `year`, `image`, `rating`, `aboutMovie`) VALUES
(146, 'Logan', 5, 8, '2013', 'img/action/logan.jpg', 1, 'Adsadsf'),
(150, '', 3, 9, '', 'img/fantasy/awrinkleintime.jpg', 1, ''),
(151, 'Borat', 2, 9, '2010', 'img/comedy/borat.PNG', 4, 'Laban kapatid'),
(152, 'Wonderwoman', 3, 9, '2017', 'img/fantasy/wonderwoman.jpg', 3, 'laban Wonderwoman'),
(154, 'Madmax', 5, 10, '2018', 'img/action/madmax.jpg', 1, 'madmax'),
(155, 'Deadpool 2', 2, 11, '2014', 'img/comedy/deadpool_2.PNG', 1, 'asfadsf');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `review_title` varchar(100) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `movie_id`, `review_title`, `review`, `user_id`, `date`) VALUES
(1, 146, '', 'sfdsfds', 28, '0000-00-00'),
(22, 150, 'Amazing Bai!', 'This is so amazing!', 28, '0000-00-00'),
(23, 151, 'Laban Borat!!!', 'Borat ka!', 28, '0000-00-00'),
(24, 152, 'Wonderwoman Review', 'laban Wonderwoman', 28, '2018-07-01'),
(25, 154, 'Madmax Review', 'Madmax Review', 28, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(24, 'User Movie', 'User', 'user@gmail.com', '6edf26f6e0badff12fca32b16db38b'),
(25, 'This is Me', 'Null', 'null@gmail.com', '340b979d4f4c1cb72b4b86afe5bf22'),
(26, 'Kent Michael', 'Talisaysay', 'tkentmichaell@gmail.com', 'f1f53f75de705df6137dc0a08aee41'),
(27, 'Sheena', 'Alcantara', 'sheena.alcantara@gmail.com', '462a684fc77874fac2a4b51d18d4ca00'),
(28, 'admin', 'admin', 'admin@gmail.com', '751cb3f4aa17c36186f4856c8982bf27'),
(29, 'admin1', 'admin1', 'admin1@gmail.com', 'e66055e8e308770492a44bf16e875127'),
(30, '1', '1', '1@gmail.com', 'e2b6923e117a526b30b0ac235f5e05b4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `director_id` (`director_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`director_id`) REFERENCES `director` (`director_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
