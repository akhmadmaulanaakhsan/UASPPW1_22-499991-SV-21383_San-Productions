-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2023 at 01:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero_data`
--

CREATE TABLE `hero_data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `explanation` text NOT NULL,
  `cta` varchar(100) NOT NULL,
  `link_cta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_data`
--

INSERT INTO `hero_data` (`id`, `title`, `slogan`, `explanation`, `cta`, `link_cta`) VALUES
(1, 'San Productions,', 'We Capture Your Moments', 'At San Productions, we specialize in capturing precious moments that last a lifetime. With our skilled team of photographers, we are dedicated to delivering stunning photographs that reflect the essence of your special moments. Trust us to bring your vision to life.', 'Book Now', '#'),
(2, 'San Productions,', 'Unleash Your Imaginations', 'With our creative photography services, we bring your wildest imaginations to life. Our team of talented photographers is passionate about exploring unique concepts and capturing the essence of your vision. Let us create stunning visuals that leave a lasting impression.', 'Explore Now', '#'),
(3, 'Capturing Your Special Moments', 'Preserving Memories Forever', 'At San Productions, we understand the importance of preserving your special moments. Whether its a wedding, family gathering, or any other occasion, our dedicated photographers ensure that every heartfelt moment is captured beautifully. Trust us to create timeless memories for you.', 'Get Started', '#'),
(4, 'Elevate Your Visual Storytelling', 'Uncover the Power of Images', 'With our expertise in visual storytelling, we help you create captivating narratives through photography. Our team combines artistic vision with technical excellence to deliver impactful images that resonate with your audience. Experience the power of storytelling with San Productions.', 'Learn More', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero_data`
--
ALTER TABLE `hero_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero_data`
--
ALTER TABLE `hero_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
