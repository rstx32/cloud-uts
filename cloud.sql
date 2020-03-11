-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 11 Mar 2020 pada 20.39
-- Versi Server: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `kode_produk` varchar(3) NOT NULL,
  `qty` int(3) NOT NULL,
  `diskon` int(9) NOT NULL,
  `total_biaya` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id`, `nama`, `email`, `tgl_berakhir`, `kode_produk`, `qty`, `diskon`, `total_biaya`) VALUES
(8, 'restu', 'restu@gmail.com', '2019-07-09', 'C01', 50, 0, 150000),
(9, 'indera', 'indera@yahoo.com', '2019-10-17', 'C01', 70, 0, 240000),
(10, 'dwi', 'dwi@hotmail.com', '2020-04-20', 'C02', 40, 225000, 675000),
(11, 'handoko', 'handoko@msn.com', '2019-05-18', 'C03', 100, 0, 100000);

--
-- Trigger `client`
--
DELIMITER $$
CREATE TRIGGER `Storage` AFTER INSERT ON `client` FOR EACH ROW BEGIN
	UPDATE server SET stock=stock-NEW.qty
    WHERE kode_produk = NEW.kode_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `increment` AFTER DELETE ON `client` FOR EACH ROW BEGIN
	UPDATE server SET stock=stock+OLD.qty
    WHERE kode_produk = OLD.kode_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `server`
--

CREATE TABLE `server` (
  `id` int(4) NOT NULL,
  `kode_produk` varchar(3) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `server`
--

INSERT INTO `server` (`id`, `kode_produk`, `stock`) VALUES
(1, 'C01', 4880),
(2, 'C02', 2960),
(3, 'C03', 1900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
