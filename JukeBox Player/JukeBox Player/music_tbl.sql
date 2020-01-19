-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 05:09 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_tbl`
--

CREATE TABLE `music_tbl` (
  `trackID` int(10) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `track_name` varchar(50) NOT NULL,
  `singers` varchar(100) NOT NULL,
  `album_cover_url` varchar(50) NOT NULL,
  `song_file_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_tbl`
--

INSERT INTO `music_tbl` (`trackID`, `album_name`, `track_name`, `singers`, `album_cover_url`, `song_file_link`) VALUES
(1, 'Royalty', 'Liquor', 'Chris Brown', 'Royalty-cover.jpg', 'Liquor.MP3'),
(2, 'ANTI', 'Work', 'Rihanna Ft Drake', 'rihanna-anti-album-cover.jpg', 'Work.MP3'),
(3, 'Hotline Bling', 'Hotline Bling', 'Drake', 'hotline-bling.jpg', 'Hotline Bling.MP3'),
(4, 'Purpose - The Movement', 'Love Yourself', 'Justin Bieber', 'purpose.jpg', 'Love Yourself.MP3'),
(5, 'Fetty Wap', '679', 'Fetty Wap', 'fetty-wap.jpg', '679.MP3'),
(6, 'LUKAS', '7 Years', 'LUKAS GRAHAM', 'Lukas.jpg', '7 years.MP3'),
(7, 'Snakeship', 'All My Friends', 'Snakeship, Tinashe & Chance The Rapper', 'Tinashe.jpg', 'All my friends.MP3'),
(8, 'ZAYN', 'Pillow Talk', 'Zayn Malik', 'Zayn-Pillow.jpg', 'PillowTalk.MP3'),
(9, 'Royalty-Cover', 'Wrist', 'Chris Brown', 'Royalty-cover.jpg', 'Wrist.MP3'),
(10, 'Calvin', 'How deep is your love', 'Calvin Harris', 'Calvin-Harris.jpg', 'How Deep Is Your Love.MP3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_tbl`
--
ALTER TABLE `music_tbl`
  ADD PRIMARY KEY (`trackID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_tbl`
--
ALTER TABLE `music_tbl`
  MODIFY `trackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
