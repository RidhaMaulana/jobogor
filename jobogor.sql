-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2019 at 06:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobogor`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `idapplication` int(6) NOT NULL,
  `idcorporate` int(6) NOT NULL,
  `idjobvacancy` int(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catindustry`
--

CREATE TABLE `catindustry` (
  `idcategoryin` int(6) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `idcorporate` int(6) NOT NULL,
  `corporate` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `phone` int(15) NOT NULL,
  `desc` text NOT NULL,
  `catindustry` varchar(30) NOT NULL,
  `location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobvacancy`
--

CREATE TABLE `jobvacancy` (
  `idjobvacancy` int(6) NOT NULL,
  `job` varchar(40) NOT NULL,
  `location` varchar(35) NOT NULL,
  `idcorporate` int(6) NOT NULL,
  `desc` text NOT NULL,
  `salary` varchar(8) NOT NULL,
  `duetime` date NOT NULL,
  `requirement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `idpelamar` int(6) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `phone` int(15) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `cv` varchar(40) NOT NULL,
  `appletter` varchar(40) NOT NULL,
  `education` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`idapplication`);

--
-- Indexes for table `catindustry`
--
ALTER TABLE `catindustry`
  ADD PRIMARY KEY (`idcategoryin`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`idcorporate`);

--
-- Indexes for table `jobvacancy`
--
ALTER TABLE `jobvacancy`
  ADD PRIMARY KEY (`idjobvacancy`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`idpelamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `idapplication` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catindustry`
--
ALTER TABLE `catindustry`
  MODIFY `idcategoryin` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `idcorporate` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobvacancy`
--
ALTER TABLE `jobvacancy`
  MODIFY `idjobvacancy` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `idpelamar` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
