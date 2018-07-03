-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 03:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
(11, 'Laban'),
(12, 'M. Night Shyamalan'),
(13, 'James DeMonaco'),
(14, 'Jordan Peele'),
(15, 'Andres Muschietti'),
(16, 'Jeff Wadlow'),
(17, 'David Sandberg'),
(18, 'Gil Kenan'),
(19, 'Leo Gabriadze'),
(20, 'Fede Alverez'),
(21, 'Patrick Magee');

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
(155, 'Deadpool 2', 2, 11, '2014', 'img/comedy/deadpool_2.PNG', 1, 'asfadsf'),
(156, 'Idiocracy', 2, 9, '2014', 'img/comedy/idiocracy.PNG', 4, 'This is the movie about Idiocricy'),
(157, 'The Purge: Anarchy', 1, 13, '2014', 'img/horror/The_Purge_Anarchy.jpg', 3, 'One night per year, the government sanctions a 12-hour period in which citizens can commit any crime they wish - including murder - without fear of punishment or imprisonment. Leo, a sergeant who lost his son, plans a vigilante mission of revenge during the mayhem. However, instead of a death-dealing avenger, he becomes the unexpected protector of four innocent strangers who desperately need his help if they are to survive the night.'),
(158, 'Split', 1, 9, '2016', 'img/horror/Split.jpg', 4, 'Though Kevin has evidenced 23 personalities to his trusted psychiatrist, Dr. Fletcher, there remains one still submerged who is set to materialize and dominate all of the others. Compelled to abduct three teenage girls led by the willful, observant Casey, Kevin reaches a war for survival among all of those contained within him -- as well as everyone around him -- as the walls between his compartments shatter.'),
(159, 'Truth or Dare', 1, 16, '2018', 'img/horror/Truth_Or_Dare.jpg', 2, 'Olivia, Lucas and a group of their college friends travel to Mexico for one last getaway before graduation. While there, a stranger convinces one of the students to play a seemingly harmless game of truth or dare with the others. Once the game starts, it awakens something evil -- a demon which forces the friends to share dark secrets and confront their deepest fears. The rules are simple but wicked - tell the truth or die, do the dare or die, and if you stop playing, you die.'),
(160, 'Lights Out', 1, 17, '2016', 'img/horror/Lights_Out.jpg', 4, 'When Rebecca left home, she thought that her childhood fears were behind her. As a young girl growing up, she was never really sure of what was real when the lights went out at night. Now, her little brother Martin is experiencing the same unexplained and terrifying events that jeopardized her safety and sanity. Holding a mysterious attachment to their mother, a supernatural entity has returned with a vengeance to torment the entire family.'),
(161, 'It', 1, 15, '2017', 'img/horror/It.jpg', 4, 'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil that emerges from the sewer every 27 years to prey on the town\'s children. Banding together over the course of one horrifying summer, the friends must overcome their own personal fears to battle the murderous, bloodthirsty clown known as Pennywise.'),
(162, 'Get Out', 1, 14, '2017', 'img/horror/Get_Out.png', 5, 'Now that Chris and his girlfriend, Rose, have reached the meet-the-parents milestone of dating, she invites him for a weekend getaway upstate with Missy and Dean. At first, Chris reads the family\'s overly accommodating behavior as nervous attempts to deal with their daughter\'s interracial relationship, but as the weekend progresses, a series of increasingly disturbing discoveries lead him to a truth that he never could have imagined.'),
(163, 'Poltergeist', 1, 18, '2015', 'img/horror/Poltergeist.png', 3, 'All seems well for Eric Bowen, wife Amy and their three children as they move into their new house in the suburbs of Illinois. Soon, youngest daughter Maddy begins talking to an imaginary friend, or so the family thinks. It\'s not long before sinister spirits wreak havoc in the home, holding Maddy captive and forcing the parents to consult a team of parapsychologists who engage the supernatural entities in a battle for the girl\'s freedom.'),
(164, 'Unfriended', 1, 19, '2014', 'img/horror/Unfriended.jpg', 3, 'One night, while teenagers Blaire, Mitch, Jess, Adam Ken and Val take part in an online group chat session, they are suddenly joined by a user known only as \"Billie227.\" Thinking it\'s just a technical glitch, the friends carry on their conversation... until Blaire begins receiving messages from someone claiming to be Laura Barns, a classmate who killed herself exactly one year prior. As Blaire tries to expose Billie\'s identity, her friends are forced to confront their darkest secrets and lies.'),
(165, 'Don\'t Breathe', 1, 20, '2016', 'img/horror/Dont_Breathe.jpg', 4, 'Rocky, Alex and Money are three Detroit thieves who get their kicks by breaking into the houses of wealthy people. Money gets word about a blind veteran who won a major cash settlement following the death of his only child. Figuring he\'s an easy target, the trio invades the man\'s secluded home in an abandoned neighborhood. Finding themselves trapped inside, the young intruders must fight for their lives after making a shocking discovery about their supposedly helpless victim.'),
(166, 'Primal Rage', 1, 21, '2018', 'img/horror/Primal_Rage.jpg', 2, 'Deep in the Pacific Northwest, Ashley and Max Carr become lost in a forest where a mysterious creature dwells. They soon find themselves in a fierce fight for survival against a terrifying beast that may be the legendary Bigfoot.');

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
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `movie_id`, `review_title`, `review`, `user_id`, `date`) VALUES
(1, 146, '', 'sfdsfds', 28, '0000-00-00'),
(22, 150, 'Amazing Bai!', 'This is so amazing!', 28, '0000-00-00'),
(23, 151, 'Laban Borat!!!', 'Borat ka!', 28, '0000-00-00'),
(24, 152, 'Wonderwoman Review', 'laban Wonderwoman', 28, '2018-07-01'),
(25, 154, 'Madmax Review', 'Madmax Review', 28, '0000-00-00'),
(26, 156, 'My Review on Idocracy!!!', 'this is another review!!!', 28, '2018-07-03'),
(27, 151, 'Admin 2 Review on Borat!', 'This is my review on Borat!', 31, 'July 3, 2018'),
(28, 152, 'Admin 2 Review on Wonderwoman!', 'This is a review on Wonderwoman', 31, '2018-07-03'),
(29, 150, 'A Wrinkle in Time Review!!!', 'Laban Lang ta a Wrinkle in Time!!!', 31, 'July 3, 2018'),
(30, 154, 'Review for Madmax!', 'This is a review for Madmax!', 31, 'July 3, 2018'),
(31, 157, 'Basically a slasher movie.', '\r\nThe Purge: Anarchy is basically a slasher movie in which society is the deranged killer. It plays like it\'s already a grindhouse classic - dark, dirty, and disreputable.', 33, 'July 3, 2018'),
(32, 158, 'A solid thriller!', 'A solid thriller right up until the end, when the director decides to play to his fans and his own indulgences, rather than tying things up for viewers in a more satisfying way.', 33, 'July 3, 2018'),
(33, 159, 'Fun to watch.', 'It\'s a fun watch. As for the plot itself, yeah it\'s going to be predictable as ever, but that\'s part of the cheesy charm. You\'d be mad to take this movie seriously.', 33, 'July 3, 2018'),
(34, 160, 'An enjoyable movie!', 'A concept which is sound, delivers scares and jumps in the right places! An enjoyable movie!', 33, 'July 3, 2018'),
(35, 161, 'Slow-paced.', '\r\nIt follows a slower pace, which is fitting for a psychological horror.', 33, 'July 3, 2018'),
(36, 157, 'It\'s entertaining.', 'Movies like this don\'t need to be smart, they just need to be entertaining, and The Purge: Anarchy is, if nothing else, entertaining.', 34, 'July 3, 2018'),
(37, 158, 'A bit unnerving.', '\r\nSplit possesses a dark sexual undercurrent that\'s all the more unnerving because it stays beneath the surface.', 34, 'July 3, 2018'),
(38, 159, 'Rip-off?', 'I dare you to tell me this isn\'t a \'Final Destination\' ripoff.', 34, 'July 3, 2018'),
(39, 160, 'Teresa is under-powered.', 'Teresa Palmer is disappointingly under-powered as the daughter.', 34, 'July 3, 2018'),
(40, 161, 'Not too scary.', 'Doesn\'t cut very deep and isn\'t very scary.', 34, 'July 3, 2018'),
(41, 158, 'Foolish.', 'Shyamalan has returned to what he loves to do: use cheap horror tropes to create his own harebrained mythos.', 35, 'July 3, 2018'),
(42, 157, 'Has a bit of a flaw.', 'I\'m completely on board with the horror action, but this sequel really points out the glaring thematic flaws.', 35, 'July 3, 2018'),
(43, 159, 'Don\'t dare.', 'The only way you should be seeing this movie is on a dare.', 35, 'July 3, 2018'),
(44, 160, 'Same old.', '\r\nFor the most part, though, the film is just a tired tread through the usual elements.', 35, 'July 3, 2018'),
(45, 161, '?', 'This is like an R-rated Goonies. With an evil clown in it.', 35, 'July 3, 2018'),
(46, 162, 'Checks on all!', '\r\nSmart, entertaining, superbly-acted and shockingly funny, Get Out is a rare film that ticks all the boxes and works on a number of different levels.', 36, 'July 3, 2018'),
(47, 163, 'Eerie.', 'This movie was eerie to watch. Spielberg is usually about big, dramatic things and loud noises but this movie was subtle, creepy, and disturbing. He did it all very well too.', 36, 'July 3, 2018'),
(48, 164, 'Sorry not sorry.', '\r\nYou might find yourself rooting for the murderer.', 36, 'July 3, 2018'),
(49, 165, 'Panic Room x Wait Until Dark ?', '\r\nPanic Room meets Wait Until Dark in this pitiless, uncommonly serviceable horror thriller.', 36, 'July 3, 2018'),
(50, 166, 'For a low budget film.', 'For a low budget film there are some good moments. Some parts work better than others and it\'s a little slow setting up the characters but when the creature enters the film that\'s when it works great. The action scenes are well done and on the most part the acting is good.', 36, 'July 3, 2018'),
(51, 162, 'Brilliant movie! A game changer!', 'Get Out is an unorthodox horror-thriller that could be game changer for the genre.', 37, 'July 3, 2018'),
(52, 163, 'Now THIS is a horror movie.', 'Truly spooky and disturbing horror film that will make you jump from your seat!', 37, 'July 3, 2018'),
(53, 164, 'Amazing.', '\r\nWho the hell knew you could deliver real scares by blending horror and cyberspace?', 37, 'July 3, 2018'),
(54, 165, 'More of a thriller than a horror?', '\r\n\"Don\'t Breathe\" is a breathless, visceral, nerve-racking thrill ride that doesn\'t stop coming at you until its final gasps. More of a thriller than a horror movie, but I dig it none the less.', 37, 'July 3, 2018'),
(55, 166, 'Find another decent Bigfoot movie.', 'Disclaimer: Bigfoot movies are subject to a tough crowd. That\'s because there are people who believe bigfoot is real, and they have extreme expectations that a bigfoot movie should represent their own personal vision of what bigfoot is. And then there are the people who don\'t believe bigfoot is real, and they might not even be drawn to watch a bigfoot movie. So often enough, films about bigfoot get trashed because they have the worst critics possible, bigfoot believers who simply cannot agree on what a bigfoot really would be, and who can\'t stand what they believe is a misrepresentation of their beloved beast.', 37, 'July 3, 2018'),
(56, 162, 'Dig deeper.', '\r\nThe layers are endless and once you realize the totality of what\'s happening, the events take on new meaning.', 38, 'July 3, 2018'),
(57, 163, 'An astounding 114 minutes of entertainment!', 'Poltergeist is without a doubt one of the most astounding cinematic features of all time, both visually and conceptually. This classic ghost story will long be remembered in the film community for its unique and entertaining blend of humor, drama, and raw horror.', 38, 'July 3, 2018'),
(58, 164, 'Gotta give it some credit though.', '\r\nUnless you\'re a hardcore horror nerd, Unfriended is not essential viewing. But it is a surprisingly decent film, and the real-life framework for the narrative gives the movie a little extra punch.', 38, 'July 3, 2018'),
(59, 165, 'I liked it.', '\r\nIt\'s visually resourceful and honest in how it sets up and delivers on its shocks. There isn\'t a single false scare.', 38, 'July 3, 2018'),
(60, 166, 'Pretty decent.', 'Yes, it\'s not going to be an Academy award winner but it\'s fun to watch. Reminds me of the 1990\'s creature feature films. The killing scenes are pretty cool too. Little to none CGI meaning practical effects are great.', 38, 'July 3, 2018');

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
(30, '1', '1', '1@gmail.com', 'e2b6923e117a526b30b0ac235f5e05b4'),
(31, 'admin2', 'admin2', 'admin2@gmail.com', '21eed4f2e9ab214fdbf00a2a091d63c4'),
(32, 'Celine', 'Olan', 'celine.olan@gmail.com', '2ac9cb7dc02b3c0083eb70898e549b63'),
(33, 'Annalise', 'Pugh', 'annalise@example.com', '2ac9cb7dc02b3c0083eb70898e549b63'),
(34, 'Grant', 'Rivera', 'grant@example.com', '2ac9cb7dc02b3c0083eb70898e549b63'),
(35, 'Mohammad', 'Dixon', 'mohammad@example.com', '2ac9cb7dc02b3c0083eb70898e549b63'),
(36, 'Charlee', 'Shepard', 'charlee@example.com', '2ac9cb7dc02b3c0083eb70898e549b63'),
(37, 'Gaven', 'Figueroa', 'gaven@example.com', '2ac9cb7dc02b3c0083eb70898e549b63'),
(38, 'Maurice', 'Holland', 'maurice@example.com', '2ac9cb7dc02b3c0083eb70898e549b63');

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
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
