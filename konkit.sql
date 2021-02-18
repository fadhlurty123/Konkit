-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 03:53 PM
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
-- Database: `konkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`email`, `password`) VALUES
('adudu@gmail.com', '$2y$10$o9up1KECRMMhMN1IyDVzCui6jylM5kKgYjwAfYioxHfICUtRH3wmu'),
('himatif@gmail.com', '$2y$10$cbO00mDNfZQtzGiE9aTKvupvHZZu0rMjHSLlH4pV9DJy5vlZn.w4a'),
('jono@jono.com', '$2y$10$BP5TA8H4e3K/1BLONTjCrOwcKXWFSRdzh/VsKwtaTqAeWltShDmfK'),
('maman@gmail.com', '$2y$10$iflwnc2tSRsuMtVrt0gRqeWFkItysxdPINp88vbQyGe7lDGeF591K');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `message` varchar(250) NOT NULL COMMENT 'Message',
  `created_at` varchar(20) NOT NULL COMMENT 'Created date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='demo table';

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'yayan', 'yayan@gmail.com', 'yayan', ''),
(2, 'yayan', 'fahrul.thoriq@gmail.com', 'bau', ''),
(3, 'yayan', 'fahrul.thoriq@gmail.com', 'bau', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `phone_number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`id`, `name`, `email`, `gender`, `skill`, `phone_number`) VALUES
(2, 'aas', 'adudu@gmail.com', 'L', 'bola', 85645646);

-- --------------------------------------------------------

--
-- Table structure for table `profilclient`
--

CREATE TABLE `profilclient` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `credit_card` varchar(255) DEFAULT NULL,
  `credit_number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profilclient`
--

INSERT INTO `profilclient` (`id`, `name`, `email`, `gender`, `credit_card`, `credit_number`) VALUES
(5, 'ujang', 'ujang@gmail.com', 'L', 'master card', 545325235);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(50) NOT NULL,
  `client` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `proyek` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `Harga` int(50) NOT NULL,
  `prioritas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `client`, `email`, `proyek`, `status`, `Harga`, `prioritas`) VALUES
(1, 'Leo', 'leo@jono.com', 'bikin web', 'aktif', 400, 0),
(2, 'gavin', 'favin@konkit.com', 'bikin apps', 'aktif', 500, 0),
(3, 'tortor', 'tortor@gmail.com', 'bikin database', 'tidak aktif', 700, 0),
(4, 'gege', 'gege@konkit.com', 'bikin sepeda', 'tidak aktif', 500, 0),
(5, 'ujang', 'ujang@gmail.com', 'bikin web', 'diambil', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_1`
--

CREATE TABLE `project_1` (
  `project_id` int(50) NOT NULL,
  `nama_client` varchar(255) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `deskripsi_project` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_1`
--

INSERT INTO `project_1` (`project_id`, `nama_client`, `nama_project`, `deskripsi_project`, `harga`, `jangka_waktu`) VALUES
(2, 'uang', 'bikin web', 'project sudah selesai', 300, '1 minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tarik_dana`
--

CREATE TABLE `tarik_dana` (
  `id` int(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarik_dana`
--

INSERT INTO `tarik_dana` (`id`, `deskripsi`, `harga`) VALUES
(5, 'project terpuaskan dana bisa dicairkan', 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('adudu@gmail.com', '$2y$10$yLSI7nAS.xkPhLJ.FA1lFuiZ3nM/w7KFEE15lN.HgQ2FtRxg3cKwi'),
('fahrul.thoriq@gmail.com', '$2y$10$Xa7y8nvmTptE.P6cmvChQO/WyKEd4y9R1WGFI/TXMFouJxWufVqpy'),
('jono@jono.com', '$2y$10$nZJ66pBXQ9jZP90QlzkgzuezsDfigseNSDJzW5lGQ8s6emhUxEkN.'),
('maman@gmail.com', '$2y$10$TaPkQsxKYiu2.khY9eQXOOgBrMdwHeD8Y5sCLPB7x9Re9KLz/JSGe'),
('omat@gmail.com', '$2y$10$eP.5D8f.091d/bI8rwYZXOg5IBg9BpEchWShk.rBCYs9JNRYSM.qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilclient`
--
ALTER TABLE `profilclient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_1`
--
ALTER TABLE `project_1`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tarik_dana`
--
ALTER TABLE `tarik_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profilclient`
--
ALTER TABLE `profilclient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_1`
--
ALTER TABLE `project_1`
  MODIFY `project_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tarik_dana`
--
ALTER TABLE `tarik_dana`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
