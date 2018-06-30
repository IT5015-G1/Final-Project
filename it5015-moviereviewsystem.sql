-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 12:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `directorName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`director_id`, `directorName`, `email`) VALUES
(1, '', 'yaneemozo@gmail.com'),
(2, 'George Miller', 'george@gmail.com'),
(3, 'Rintaro', 'rintaro@gmail.com'),
(4, 'James Mangold', 'james@gmail.com'),
(5, 'Byron Howard', 'byron@gmail.com'),
(6, 'Ernest B. Schoedsack', 'ernest@gmail.com'),
(7, 'Keenen Ivory Wayans', 'keenen@gmail.com'),
(8, 'David Leitch', 'leitch@gmail.com'),
(9, 'Larry Charles', 'larrycharles@gmail.com'),
(10, 'Mike Judge', 'mikejudge@gmail.com');

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
(18, 'bitch', 1, 1, '1998', 'img/fantasy/1star.png', 1, ''),
(19, 'bitch', 1, 1, '1998', 'img/fantasy/1star.png', 1, ''),
(20, '', 1, 1, '1998', 'img/fantasy/', 1, ''),
(21, '', 1, 1, '1998', 'img/fantasy/', 1, ''),
(22, '', 1, 1, '1998', 'img/fantasy/', 1, ''),
(23, '', 1, 1, '1998', 'img/fantasy/', 1, ''),
(24, '', 1, 1, '1998', 'img/fantasy/', 1, ''),
(25, 'Mad Max: Fury Road', 5, 2, '2015', 'img/action/madmax.jpg', 5, 'Filmmaker George Miller gears up for another post-apocalyptic action adventure with Fury Road, the fourth outing in the Mad Max film series. Charlize Theron stars alongside Tom Hardy (Bronson), with Zoe Kravitz, Adelaide Clemens, and Rosie Huntington Whiteley heading up the supporting cast. ~ Jeremy Wheeler, Rovi'),
(26, 'Zootopia', 5, 5, '2016', 'img/action/zootopia.jpg', 4, 'The modern mammal metropolis of Zootopia is a city like no other. Comprised of habitat neighborhoods like ritzy Sahara Square and frigid Tundratown, it\'s a melting pot where animals from every environment live together-a place where no matter what you are, from the biggest elephant to the smallest shrew, you can be anything. But when rookie Officer Judy Hopps (voice of Ginnifer Goodwin) arrives, she discovers that being the first bunny on a police force of big, tough animals isn\'t so easy. '),
(27, 'Metropolis', 5, 3, '2002', 'img/action/metropolis.jpg', 4, 'Playing like a candy-colored hybrid of Fritz Lang\'s film of the same name and Ridley Scott\'s Blade Runner, Osamu Tezuka\'s Metropolis borrows its plot liberally from numerous legendary sci-fi sources (despite the fact that the original manga was released in 1945, certain cinematic aspects can\'t help but appearing overly familiar), all the while dazzling viewers on the same cutting-edge visual level as such anime classics as Akira and Ghost in the Shell. '),
(28, 'Logan', 5, 4, '2017', 'img/action/logan.jpg', 3, 'It\'s 2029. Mutants are gone--or very nearly so. An isolated, despondent Logan is drinking his days away in a hideout on a remote stretch of the Mexican border, picking up petty cash as a driver for hire. His companions in exile are the outcast Caliban and an ailing Professor X, whose singular mind is plagued by worsening seizures. But Logan\'s attempts to hide from the world and his legacy abruptly end when a mysterious woman appears with an urgent request--that Logan shepherd an extraordinary young girl to safety. Soon, the claws come out as Logan must face off against dark forces and a villain from his own past on a live-or-die mission, one that will set the time-worn warrior on a path toward fulfilling his destiny.'),
(29, 'KingKong', 5, 6, '1993', 'img/action/kingkong.png', 4, '\"How would you like to star opposite the tallest, darkest leading man in Hollywood?\" Enticed by these words, brunette leading lady Fay Wray dyed her hair blonde and accepted the role of Ann Darrow in King Kong -- and stayed with the project even after learning that her \"leading man\" was a 50-foot ape. The film introduces us to flamboyant, foolhardy documentary filmmaker Carl Denham (Robert Armstrong), who sails off to parts unknown to film his latest epic with leading lady Darrow in tow. Disembarking at Skull Island, they stumble on a ceremony in which the native dancers circle around a terrified-looking young girl, chanting, \"Kong! Kong!\" The chief (Noble Johnson) and witch doctor (Steve Clemente) spot Denham and company and order them to leave.'),
(32, 'White Chicks', 2, 7, '1998', 'img/comedy/white_chicks.PNG', 3, 'White Chicks is a 2004 American comedy film directed by Keenen Ivory Wayans, who wrote and produced alongside his brothers Shawn and Marlon Wayans. Distributed by Revolution Studios and Columbia Pictures, Shawn and Marlon Wayans portray two African American male FBI agents who disguise themselves as two white women.'),
(33, 'Deadpool 2', 2, 8, '1998', 'img/comedy/deadpool_2.PNG', 5, 'Deadpool 2 is a 2018 American superhero film based on the Marvel Comics character Deadpool, distributed by 20th Century Fox. It is the eleventh installment in the X-Men film series, and a direct sequel to the 2016 film Deadpool. The film is directed by David Leitch from a script by Rhett Reese, Paul Wernick, and Ryan Reynolds, with Reynolds starring in the title role alongside Josh Brolin, Morena Baccarin, Julian Dennison, Zazie Beetz, T.J. Miller, Brianna Hildebrand, and Jack Kesy. In the film, Deadpool forms the team X-Force to protect a young mutant from the time-traveling soldier Cable.'),
(34, 'Borat! Cultural Learnings of America for Make Benefit Glorious Nation of Kazakhstan', 2, 9, '1998', 'img/borat.PNG', 4, 'Borat! Cultural Learnings of America for Make Benefit Glorious Nation of Kazakhstan (or simply Borat) is a 2006 British-American mockumentary comedy film written and produced by British comedian Sacha Baron Cohen who also plays the title character, Borat Sagdiyev, a fictitious Kazakh journalist travelling through the United States recording real-life interactions with Americans. The film was directed by Larry Charles and distributed by 20th Century Fox.'),
(35, 'Idiocracy', 2, 10, '1998', 'img/idiocracy.PNG', 4, 'Idiocracy is a 2006 American science fiction comedy film directed by Mike Judge and starring Luke Wilson, Maya Rudolph, and Dax Shepard. The film tells the story of two people who take part in a top-secret military human hibernation experiment, only to awaken 500 years later in a dystopian society where anti-intellectualism and commercialism have run rampant, and which is devoid of intellectual curiosity, social responsibility, and coherent notions of justice and human rights.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review`, `movie_id`, `user_id`) VALUES
(1, 'A fully realized work of art whose influence on science fiction, set design and symbolism can scarcely be put into words.', 27, 31),
(2, 'Lang\'s allegory of allegories posits humanity\'s progress as a collision not just of labor and management but of technology and sorcery', 27, 33),
(3, 'Metropolis remains the benchmark of agenda-driven extravaganzas, stirring and fun in the right spots', 27, 34),
(4, 'The film is still something to behold, even if the newly restored footage occasionally looks like someone ran over it with a brillo pad.', 27, 35),
(5, 'Too bad that so much really artistic work was wasted on this manufactured story.', 27, 32),
(6, 'I\'m not a fan of the Mad Max franchise, but \"Fury Road\" was excellent! \"Mad Max: Fury Road\" has a decent story (albeit with plot holes aplenty) and interesting characters with marvelous costume, makeup and special effects. It\'s truly spectacular.', 25, 33),
(7, 'This is one of the few movies I\'ve ever seen where the whole audience broke into spontaneous, loud applause a third of the way in.', 25, 34),
(8, 'Mad Max: Fury Road delivers. There\'s no clearer or more succinct way to put it. 30 years after last appearing on the big screen, Max roars back with a vengeance.', 25, 31),
(9, 'Believe all the hype: This movie will melt your face off.', 25, 32),
(10, 'I left the theatre trembling and with my hands sweating, and that\'s the best compliment one can give to a movie of this kind. Let the sequels come! ', 25, 35),
(11, 'Another expensive throwaway aimed at milking money out of people who still read comic books. Color it stupid.', 28, 34),
(12, 'Strips away the spandex, the posse and the chaos, distilling the story down to the essence of the man, Logan. What\'s left is the agony and the ecstasy of mutanthood.', 28, 33),
(13, 'Jackman and Stewart are why Logan works-why the film doesn\'t feel like a cheap exercise in bloody violence, and its subversion of typical superhero-movie tropes feels organic.', 28, 31),
(14, 'Make no mistake, Logan earns its tears. If Jackman and Stewart are serious about this being their mutual X-Men swan song, they could not have crafted a more heartfelt valedictory.', 28, 32),
(15, 'The Wolverine movie I\'ve wanted since I was eight years old.', 28, 35),
(16, 'King Kong, as spectacular a bolt of celluloid as has thrilled audiences in a couple of sophisticated seasons, is the product of a number of vivid imaginations.', 29, 33),
(17, 'Willis O\'Brien did the stop-action animation for this 1933 feature, which is richer in character than most of the human cast.', 29, 34),
(18, 'It\'s unrivaled in its sheer cinematic quality, and one of a kind.', 29, 31),
(19, 'Kong mystifies as well as it horrifies, and may open up a new medium for scaring babies via the screen.', 29, 32),
(20, 'The story, like Frankenstein and Dracula, has taken on the significance of a modern folk tale, layered with obvious moralizing and as familiar as personal history.', 29, 35),
(21, 'Zootopia, like its heroine, is zesty, bright, and breakneck, with chase scenes and well-tuned gags where you half expect songs to be.', 26, 33),
(22, 'There\'s a lot here for kids to like and nearly as much to keep parents from fidgeting.', 26, 34),
(23, 'In many ways a conventional movie, but it unfolds with so much wit, panache, and visual ingenuity that it outstrips many a more high-concept film.', 26, 31),
(24, 'What saves this big-budget cartoon behemoth is its modest, old-fashioned storytelling.', 26, 32),
(25, 'It\'s surprisingly sophisticated, finding new ways to get us to look past stereotypes.', 26, 35);

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
(31, 'June Jan', 'Genelsa', 'june.genelsa@gmail.com', '01168f39bf9c24df55f1044a068ac7ee'),
(32, 'Krystaliza ', 'Dayanan', 'krystal@gmail.com', '01168f39bf9c24df55f1044a068ac7ee'),
(33, 'John Lloyd', 'Arante', 'jl@gmail.com', '01168f39bf9c24df55f1044a068ac7ee'),
(34, 'Jove ', 'Santos', 'jovegenel@gmail.com', '01168f39bf9c24df55f1044a068ac7ee'),
(35, 'Leah', 'Garcia', 'leah@gmail.com', '01168f39bf9c24df55f1044a068ac7ee'),
(36, 'Penuel', 'Calle', 'penuelcalle@gmail.com', '24e1c6c78c7d0e0d9fae33b69f8526af');

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
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
