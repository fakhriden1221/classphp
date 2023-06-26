-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 06:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `ExperienceLevel` varchar(256) NOT NULL,
  `JobTitle` varchar(256) NOT NULL,
  `Dis` text NOT NULL,
  `Responsibilities` text NOT NULL,
  `Qualifications` text NOT NULL,
  `JobType` varchar(256) NOT NULL,
  `WorkPlaceType` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `ExperienceLevel`, `JobTitle`, `Dis`, `Responsibilities`, `Qualifications`, `JobType`, `WorkPlaceType`, `Location`, `Date`) VALUES
(1, 'Entry Level', 'Web DEV', 'ensure that websites are secure, functional, visually appealing, user-friendly, and consistently updated.', 'Manages CMS for website content updates\r\nOngoing SEO optimization and establishes an SEO reporting structure\r\nWorks with vendor for ongoing back-end maintenance and front-end optimizations for page speed\r\nGoogle Analytics and Google Tag Manager implementations and integrating into Google Data Studio for visualization\r\nConstantly seeking to innovate web through a mobile first mindset providing suggestions, feedback, and thoughts on UX/UI using analytics and user behavioral tools\r\nWorks collaboratively with Brand, Creative, and Guest engagement team to understand future website needs as they relate to business KPIs\r\nProvides feedback and suggestions for creative assets for web UX/UI best practices', 'None', 'Full-Time', 'Remote', 'Lebanon', '2023-06-05'),
(2, 'Entry Level', 'Web DEV', 'ensure that websites are secure, functional, visually appealing, user-friendly, and consistently updated.', 'Manages CMS for website content updates\r\nOngoing SEO optimization and establishes an SEO reporting structure\r\nWorks with vendor for ongoing back-end maintenance and front-end optimizations for page speed\r\nGoogle Analytics and Google Tag Manager implementations and integrating into Google Data Studio for visualization\r\nConstantly seeking to innovate web through a mobile first mindset providing suggestions, feedback, and thoughts on UX/UI using analytics and user behavioral tools\r\nWorks collaboratively with Brand, Creative, and Guest engagement team to understand future website needs as they relate to business KPIs\r\nProvides feedback and suggestions for creative assets for web UX/UI best practices', 'None', 'Full-Time', 'Remote', 'Lebanon', '2023-06-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
