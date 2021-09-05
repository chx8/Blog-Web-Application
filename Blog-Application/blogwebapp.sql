-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 03:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogwebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_posts`
--

CREATE TABLE `manage_posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_posts`
--

INSERT INTO `manage_posts` (`id`, `title`, `description`, `date`) VALUES
(1, 'About Me', 'Hi, my name is Rob Geis and I am currently in grade 12. I have been at County High School for a year now; I joined at the start of 11th grade, and have thoroughly enjoyed myself here. The school is great, the people are fantastic and the atmosphere is one that makes you actually want to go to school. Before I joined ASB I was studying at the Singapore American School for two years and prior to that I was at the International School of Kuala Lumpur for two years. I was born and raised here in Bombay city and grew up here.\r\n\r\nI am an interesting, fun loving guy with a good sense of humor. One thing about me that is important to know though is that at first I come of as a very shy individualistic guy but once I get to know people and are comfortable with my environment I am great. It is hard for me to make friends but once I make them, it’s great and I am all different. I joke, laugh and humor people and I also get as much as I give. I am a very kind, compassionate, sensitive guy as my close friends will tell you. I have a tough shell but on the inside I am soft. I am also a very principled person and stand strong on what is right and wrong. I am also a very straight and honest person. I understand and know that we all put on a show sometimes and do not show who we really are or what we feel but some people do this constantly and those kinds of people I cannot stand.', '2021-09-05'),
(3, 'Health & Fitness', 'If you’re anything like us, living a fit and healthy lifestyle is an important life goal for you. Today, more than ever before, there is a renewed understanding of fitness and health. We have a clearer picture of how an unhealthy lifestyle can impact our everyday lives. As a result, we’re always on the lookout for the latest info on how we can maintain our health and improve our fitness.\r\n\r\nIn this digital age, that means people often look online for guidance. It’s now easier than ever to find resources from personal health and fitness experts. To help you stay informed and a step ahead, we’re sharing our top 10 health & fitness blogs we follow. We’ve outlined what they offer and how they’re helping people in the article below.\r\n\r\n1. WebMD\r\nWebMD provides high-quality articles and videos on health information that can improve people’s lives. They cover topics such as health, fitness, drugs, and supplements. At Kaiterra, they’ve helped us learn about asthma triggers, dust mites, and strategies to help improve indoor air quality.\r\n\r\nWebMD.com\r\n\r\n2. Mind Body Green\r\nAt mindbodygreen you’ll find inspiration to live your best life. This lifestyle media brand is dedicated to helping you connect to wellness. They are leaders in wellness and provide content that will help you care for your mind, body, and soul. We particularly like their take on environmental wellness.\r\n\r\nMindBodyGreen.com', '2021-09-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_posts`
--
ALTER TABLE `manage_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_posts`
--
ALTER TABLE `manage_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
