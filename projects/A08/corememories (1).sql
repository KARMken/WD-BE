-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 09:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'gaming2.png', 'One of my core memories of sadness comes from the game Dungeon Blitz. I used to spend countless hours exploring its magical world, battling monsters, and leveling up my character. It was a huge part of my gaming journey, but when Adobe Flash was discontinued, the game became unplayable. The loss of ', 'Sadness Memory'),
(2, 1, 'gaming3.png', 'A core memory of fear comes from the late nights when I would secretly play games past my bedtime. The thrill of exploring new worlds was often overshadowed by the constant fear of being caught. Every little sound in the house made my heart race, thinking I’d be discovered. That tense feeling of try', 'Fearful Memory'),
(3, 1, 'gaming4.png', 'A core memory of joy is the thrill I felt competing in amateur gaming tournaments. The excitement of testing my skills against other players, strategizing, and improving with each match brought me immense satisfaction. It wasn’t about winning, but the sense of achievement and connection with fellow ', 'Joyful Memory'),
(4, 3, 'family2.png', 'A core memory of fear is when I got separated from my family at a busy mall. I remember standing at the cashier, holding my small bag of candy, waiting for my mom to come back. Minutes felt like hours as I glanced around, not recognizing any faces. The noise of the crowd, the endless lines of people', 'Fearful Memory'),
(5, 3, 'family3.png', 'A core memory of joy is filled with the warmth of family vacations, gatherings, and those casual, everyday jokes that never failed to make me smile. Whether it was the laughter around the dinner table during reunions, the excitement of road trips, or just sitting together at home sharing stories and', 'Joyful Memory'),
(6, 3, 'family4.png', 'A core memory of sadness is when my grandma passed away. She had always been a comforting presence, someone who brought warmth and kindness into every room. Losing her felt like losing a part of our family\'s heart. I remember the overwhelming feeling of emptiness when I realized I wouldn\'t hear her ', 'Sadness Memory'),
(7, 2, 'friendship2.png', 'One of the happiest memories I have is of those countless minutes of laughter with my friends, all because of one particular friend’s natural ability to hide their true emotions. No matter how serious the situation was, their face remained completely neutral, making it impossible to tell whether the', 'Joyful Memory'),
(8, 2, 'friendship3.png', 'I remember the fear I felt when I was called to the guidance office for using other people\'s images in my game. I knew it was wrong, but I never expected to get caught. The anxiety of facing the consequences and the uncertainty of how it would affect my reputation was overwhelming. It felt like my c', 'Fearful Memory'),
(9, 2, 'friendship4.png', 'One memory that sticks out is the time I got extremely frustrated after a group project where no one seemed to be taking responsibility. I had put in so much effort, trying to make sure everything was on track, but my teammates just didn\'t seem to care. The lack of communication and effort really go', 'Raging Memory'),
(10, 4, 'imagination2.png', 'I remember the pure joy I felt as a child when I would spend hours building my own imaginary worlds. I’d create elaborate stories, complete with characters and adventures, using nothing but my imagination and whatever objects I could find around me. The excitement of seeing my visions come to life, ', 'Joyful Memory'),
(11, 4, 'imagination3.png', 'There was a time when I would spend entire afternoons sketching creatures I could only dream of. Dragons, unicorns, and creatures with wings and scales filled my notebooks. The joy of creating something from scratch and letting my imagination run wild without any boundaries or rules was indescribabl', 'Joyful Memory'),
(12, 4, 'imagination4.png', 'One of the happiest memories I have is from when I used to play pretend with my friends, taking on the roles of superheroes with incredible powers. We would run around the yard, acting out epic battles and saving the world from villains. I remember the sheer joy of wearing makeshift capes and imagin', 'Joyful Memory');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Gaming Island', 'The Personality that was introduced to me at a very young age. My very own Island of Challenges and Development.', 'It all started when I was 5 years old, and I knew I was being too annoying to my mom. But then I suddenly got interested in what she was playing at the time. It was a game called Mystery Case Files—a game about finding items and solving puzzles. It introduced me to the English language and also made me love the idea of playing games competitively.', '#A7C7E7', 'gaming1.png', 'inactive'),
(2, 'Friendship Island', 'The Personality that stood by me through ups and downs. My very own Island of Loyalty and Connection.', 'It all began with the simple bonds formed during childhood—connections that have grown and endured over time. Friendship Island represents the unwavering support and loyalty of those who have stood by me through every challenge, every triumph, and every setback. From shared laughter to silent understanding, it is the foundation of my social connections, where trust and camaraderie thrive. These relationships have shaped my personality, teaching me the value of companionship, empathy, and shared experiences, helping me grow both emotionally and socially.', '#FFB6C1', 'friendship1.png', 'active'),
(3, 'Family Island', 'The Personality that has been my source of strength and comfort. My ever-supportive Circle of Home.', 'Growing up, I was always surrounded by the people who made me feel safe, loved, and cared for. Whether it was celebrating small wins, helping me through challenges, or just being there when I needed a shoulder to lean on, this circle shaped who I am today. It’s more than just family—it’s the feeling of always having a place to return to, no matter how far I wander. My ever-supportive Circle of Home.', '#A8E6A3', 'family1.png', 'active'),
(4, 'Imagination Island', 'The Personality that fuels my creativity and endless possibilities. A place where dreams take shape and the world is full of wonder.', 'It began when I was a child, lost in my own world of stories, fantasies, and endless possibilities. My mind was a canvas, and every day was a new adventure waiting to unfold. Whether I was building entire kingdoms out of toys or imagining grand quests with my favorite characters, this realm of creativity became a place where the impossible felt possible. It was here that I first realized how powerful the mind could be in shaping experiences and making dreams come alive. This personality has stayed with me through the years, always nudging me to see the world not as it is, but as it could be—full of potential, wonder, and endless opportunities.', '#D0B0FF', 'imagination1.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
