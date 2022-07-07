-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 05:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-decision`
--

-- --------------------------------------------------------

--
-- Table structure for table `berat_ref`
--

CREATE TABLE `berat_ref` (
  `id_berat` varchar(5) NOT NULL,
  `berat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berat_ref`
--

INSERT INTO `berat_ref` (`id_berat`, `berat`) VALUES
('gem', 'gemuk'),
('kur', 'kurus'),
('nor', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `hipertensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `nama`, `usia`, `kelamin`, `berat`, `hipertensi`) VALUES
(1, 'agung', 'mud', 'L', 'kur', 'tidak'),
(16, 'Astri Maharani', 'mud', 'P', 'gem', 'ya'),
(17, 'Aulia Defti Cipta Pu', 'mud', 'P', 'kur', 'tidak'),
(18, 'Alda Widiawati', 'mud', 'P', 'gem', 'ya'),
(19, 'Ayen Mohamammad', 'mud', 'L', 'gem', 'ya'),
(20, 'widi', 'mud', 'L', 'gem', 'ya'),
(21, 'widi v.2', 'tua', 'L', 'gem', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `jk_ref`
--

CREATE TABLE `jk_ref` (
  `id_jk` varchar(2) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jk_ref`
--

INSERT INTO `jk_ref` (`id_jk`, `jenis_kelamin`) VALUES
('L', 'Laki Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `usia_ref`
--

CREATE TABLE `usia_ref` (
  `id_usia` varchar(5) NOT NULL,
  `usia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usia_ref`
--

INSERT INTO `usia_ref` (`id_usia`, `usia`) VALUES
('mud', 'muda'),
('tua', 'tua');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hasil`
-- (See below for the actual view)
--
CREATE TABLE `view_hasil` (
`nama` varchar(20)
,`berat` varchar(20)
,`jenis_kelamin` varchar(20)
,`usia` varchar(20)
,`hipertensi` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `view_hasil`
--
DROP TABLE IF EXISTS `view_hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hasil`  AS SELECT `hasil`.`nama` AS `nama`, `berat_ref`.`berat` AS `berat`, `jk_ref`.`jenis_kelamin` AS `jenis_kelamin`, `usia_ref`.`usia` AS `usia`, `hasil`.`hipertensi` AS `hipertensi` FROM (((`hasil` join `usia_ref`) join `berat_ref`) join `jk_ref`) WHERE `hasil`.`usia` = `usia_ref`.`id_usia` AND `hasil`.`kelamin` = `jk_ref`.`id_jk` AND `hasil`.`berat` = `berat_ref`.`id_berat` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berat_ref`
--
ALTER TABLE `berat_ref`
  ADD PRIMARY KEY (`id_berat`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usia` (`usia`),
  ADD KEY `berat` (`berat`),
  ADD KEY `kelamin` (`kelamin`);

--
-- Indexes for table `jk_ref`
--
ALTER TABLE `jk_ref`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `usia_ref`
--
ALTER TABLE `usia_ref`
  ADD PRIMARY KEY (`id_usia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`usia`) REFERENCES `usia_ref` (`id_usia`),
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`berat`) REFERENCES `berat_ref` (`id_berat`),
  ADD CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`kelamin`) REFERENCES `jk_ref` (`id_jk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
