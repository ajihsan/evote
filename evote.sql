-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 05:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `paslon_jabar`
--

CREATE TABLE `paslon_jabar` (
  `id` int(2) NOT NULL,
  `slogan` varchar(20) NOT NULL,
  `cagub` varchar(50) NOT NULL,
  `cawagub` varchar(50) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi1` varchar(200) NOT NULL,
  `misi2` varchar(200) NOT NULL,
  `misi3` varchar(200) NOT NULL,
  `misi4` varchar(200) NOT NULL,
  `misi5` varchar(200) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslon_jabar`
--

INSERT INTO `paslon_jabar` (`id`, `slogan`, `cagub`, `cawagub`, `visi`, `misi1`, `misi2`, `misi3`, `misi4`, `misi5`, `foto`) VALUES
(1, 'Rindu', 'Ridwan Kamil', 'Uu Ruzhanul Ulum', 'Terwujudnya Jabar Juara Lahir Batin dengan Inovasi dan Kolaborasi', 'Tes Misi Rindu', 'Tes Misi Rindu2', 'Tes Misi Rindu3', 'Tes Misi Rindu4', 'Tes Misi Rindu5', 'https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/29594478_1992362697684454_8112571844487171156_n.jpg?_nc_cat=0&oh=04e9cc5fe82df31843a49d4d61a3b981&oe=5BBF0978'),
(2, 'Hasanah', 'TB Hasanudin', 'Anton Charliyan', 'Terwujudnya Rakyat Jawa Barat Makmur Berbasiskan Sumber Daya Alam dan Budaya', 'Tes misi Hasanah', '', '', '', '', 'https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/33232492_174868046532954_8782548842840064000_n.jpg?_nc_cat=0&oh=3915ba7a66b891e0af143a61b92c299f&oe=5BABA620'),
(3, 'Asyik', 'Sudrajat', 'Ahmad Syaikhu', 'Jawa Barat Termaju, Bertakwa, Aman, dan Sejahtera untuk Semua', 'tes misi asyik', '', '', '', '', 'https://pbs.twimg.com/media/DV9EuBkVMAApDdJ.jpg:large'),
(4, 'DM4Jabar', 'Deddy Mizwar', 'Dedi Mulyadi', 'Terwujudnya Jawa Barat yang Adil, Sejahtera, dan Berkarakter', 'tes misi 2 dm', '', '', '', '', 'https://pbs.twimg.com/media/DWLnZrZUQAAK2MQ.jpg:large');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL DEFAULT '1',
  `username` varchar(34) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(34) NOT NULL,
  `nomor` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `nomor`) VALUES
(99, 'admin', 'admin', 'Admin Aji', 666),
(99, 'admin2', 'admin2', 'Admin Riza', 1234),
(1, 'aji', 'aji', 'ajihsan', 12),
(1, 'aji@evote.com', 'ajihsan', 'Muhammad', 813),
(1, 'ajihsan@evote.com', 'ajihsan96', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paslon_jabar`
--
ALTER TABLE `paslon_jabar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slogan` (`slogan`),
  ADD KEY `slogan_2` (`slogan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paslon_jabar`
--
ALTER TABLE `paslon_jabar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
