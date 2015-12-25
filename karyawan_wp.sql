-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 05:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyawan_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nip`, `nama`, `jk`, `alamat`) VALUES
('2011', 'Imas', 'Perempuan', 'Muncul'),
('2012', 'erlang', 'Laki-laki', 'karawaci'),
('2013', 'rifki', 'Laki-laki', 'Banten'),
('2014', 'Kresna', 'Laki-laki', 'Pamulang Indah'),
('2015', 'Agusta', 'Laki-laki', 'Pamulang'),
('2016', 'kaka', 'Laki-laki', 'kiasm'),
('9879', 'hhl', 'Laki-laki', 'jkhjkj');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `nama` varchar(50) NOT NULL,
  `c1` int(10) DEFAULT NULL,
  `c2` int(10) DEFAULT NULL,
  `c3` int(10) DEFAULT NULL,
  `c4` int(10) DEFAULT NULL,
  `c5` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`nama`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
('Agusta', 52, 3200, 70, 16, 670),
('erlang', 46, 2000, 75, 18, 530),
('Imas', 50, 4000, 69, 11, 600),
('Kresna', 47, 3600, 73, 23, 590);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE IF NOT EXISTS `rangking` (
  `nama` varchar(30) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`nama`, `nilai`) VALUES
('', 0),
('Agusta', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
 ADD PRIMARY KEY (`nama`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
