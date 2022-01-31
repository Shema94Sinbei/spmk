-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 10:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_kp` varchar(12) NOT NULL,
  `no_laluan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_kp`, `no_laluan`) VALUES
('750413125120', 'admin1234'),
('980515125280', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kursus_info`
--

CREATE TABLE `kursus_info` (
  `no_kp` varchar(12) NOT NULL,
  `kursus` varchar(50) NOT NULL,
  `anjuran` varchar(50) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `mula` date NOT NULL,
  `tamat` date NOT NULL,
  `tempoh` float NOT NULL,
  `jumlah` int(2) NOT NULL,
  `kelas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus_info`
--

INSERT INTO `kursus_info` (`no_kp`, `kursus`, `anjuran`, `tempat`, `mula`, `tamat`, `tempoh`, `jumlah`, `kelas`) VALUES
('940917125500', 'AUTOMOTIF - SENI BINA', 'ILPKK', 'BENGKEL ILPKK', '2021-04-28', '2021-04-28', 4, 1, 2),
('950319126115', 'Papa Jak', 'Papa jak', 'Jumlah', '2021-05-11', '2021-05-11', 4, 1, 3),
('960321125807', 'Western Food ', 'Hayatt Hotel', 'Stadium Bukit Jalil', '2021-05-18', '2021-05-18', 4, 1, 2),
('940917125500', 'COMPUTER ENGINEERING', 'ILP KOTA KINABALU', 'UNIVERSITI MALAYSIA SABAH', '2021-03-17', '2021-03-17', 4, 1, 2),
('940917125500', 'PROGRAM PENGATURCARAAN', 'FAKULTI KOMPUTER DNA INFORMATIK', 'UNIVERISIT MALAYSIA SABAH', '2021-04-08', '2021-04-09', 8, 2, 4),
('761025125413', 'MANAGERIAL SKILLS', 'JABATAN TENAGA MANUSIA ', 'WEBINAR', '2021-02-02', '2021-02-04', 18, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `no_laluan` varchar(255) NOT NULL,
  `no_kp` varchar(255) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`no_laluan`, `no_kp`, `nama`) VALUES
('1234', '940917125500', 'NUR HASYIMAH BINTI ABDUL HALIM'),
('1235', '950319126115', 'MOHD HANAFIE BIN HARRIS'),
('1236', '970410125212', 'Mohd Ayub Bin Mohd Yasin'),
('ACHI', '980602126476', 'ASHIKA'),
('aisyah1234', '980515125280', 'Siti Aisyah'),
('ipicomel', '960321125807', 'Mohd Faiz Abdul Halim'),
('sudirman', '761025125413', 'SUDIRMAN BIN HAMMADE');

-- --------------------------------------------------------

--
-- Table structure for table `spmk_info`
--

CREATE TABLE `spmk_info` (
  `no_kp` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `gred` varchar(4) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `emel` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spmk_info`
--

INSERT INTO `spmk_info` (`no_kp`, `nama`, `jantina`, `no_hp`, `gred`, `jabatan`, `emel`, `alamat`) VALUES
('761025125413', 'SUDIRMAN BIN HAMMADE', 'L', '', 'DV52', 'PENGARAH I', 'sudirman76@gmail.com', 'ILP KOTA KINABALU'),
('940917125500', 'NUR HASYIMAH BINTI ABDUL HALIM', 'P', '0145637412', 'DV44', 'ILPSDK', 'shemabei@gmail.com', 'Kota Belud'),
('950319126115', 'MOHD HANAFIE BIN HARRIS', 'L', '0186654835', 'DV40', 'Pertanian', 'hanafie@gmail.com', 'Pulau Sana'),
('960321125807', 'MOHD FAIZ ABDUL HALIM', 'L', '0142008242', 'DG41', 'SH', 'faiz8196@gmail.com', 'Kg. Liang Kota Belud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`no_laluan`);

--
-- Indexes for table `spmk_info`
--
ALTER TABLE `spmk_info`
  ADD PRIMARY KEY (`no_kp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
