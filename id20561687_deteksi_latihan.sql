-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2023 at 03:08 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20561687_deteksi_latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_IoT`
--

CREATE TABLE `data_IoT` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `jarak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_IoT`
--

INSERT INTO `data_IoT` (`id`, `tgl`, `jam`, `jarak`) VALUES
(1, '2023-04-12', '15:20:05', 210.38),
(2, '2023-04-12', '15:20:16', 210.39),
(3, '2023-04-12', '15:20:28', 4.96),
(23, '2023-04-29', '03:33:56', 167.3),
(24, '2023-04-29', '03:34:08', 1195.9),
(25, '2023-04-29', '03:34:20', 166.45),
(26, '2023-04-29', '03:34:32', 166.91),
(27, '2023-04-29', '03:34:43', 171.7),
(28, '2023-04-29', '03:34:55', 1195.86),
(29, '2023-04-29', '03:35:06', 1196.07),
(30, '2023-04-29', '03:35:18', 167.26),
(31, '2023-04-29', '03:35:30', 167.71),
(32, '2023-04-29', '03:35:43', 168.25),
(33, '2023-04-29', '03:35:54', 167.35),
(34, '2023-04-29', '03:36:06', 166.91),
(35, '2023-04-29', '03:36:17', 1195.76),
(36, '2023-04-29', '03:36:29', 1195.92),
(37, '2023-04-29', '03:36:41', 168.66),
(38, '2023-04-29', '03:36:53', 166.45),
(39, '2023-04-29', '03:37:05', 166.89),
(40, '2023-04-29', '03:37:16', 167.33),
(41, '2023-04-29', '03:37:28', 166.36),
(42, '2023-04-29', '03:37:39', 168.59),
(43, '2023-04-29', '03:37:51', 1195.85),
(44, '2023-04-29', '03:39:09', 1195.86),
(45, '2023-04-29', '03:39:20', 167.31),
(46, '2023-04-29', '03:39:32', 166.82),
(47, '2023-04-29', '03:39:43', 166.85),
(48, '2023-04-29', '03:39:55', 167.77),
(49, '2023-04-29', '03:40:06', 169.47),
(50, '2023-04-29', '03:40:18', 168.61),
(51, '2023-04-29', '03:40:30', 169.49),
(52, '2023-04-29', '03:40:41', 167.71),
(53, '2023-04-29', '03:40:53', 168.15),
(54, '2023-04-29', '03:41:05', 167.33),
(55, '2023-04-29', '03:41:16', 171.58),
(56, '2023-04-29', '03:41:29', 165.66),
(57, '2023-04-29', '03:41:40', 166.89),
(58, '2023-04-29', '03:41:52', 170.36),
(59, '2023-04-29', '03:42:03', 167.26),
(60, '2023-04-29', '03:42:15', 1195.88);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_IoT`
--
ALTER TABLE `data_IoT`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_IoT`
--
ALTER TABLE `data_IoT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
