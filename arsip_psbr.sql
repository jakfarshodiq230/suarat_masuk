-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 01:08 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arsip_psbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
  `id_surat_masuk` int(11) NOT NULL,
  `isidisposisi` varchar(200) NOT NULL,
  `tgl_penyelesaian` date DEFAULT NULL,
  `diteruskan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kode_disposisi` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode_disposisi`),
  KEY `id_surat_masuk` (`id_surat_masuk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_surat_masuk`, `isidisposisi`, `tgl_penyelesaian`, `diteruskan`, `status`, `kode_disposisi`) VALUES
(57, 'rrrrrrrrrrrrr', '0000-00-00', 'rrrrrrrrrrrrrrrrrrrr', 'SUDAH DISPOSISI', 23),
(58, '5555555555555', '2018-04-06', '55555555555555', 'SUDAH DISPOSISI', 24),
(59, '', NULL, '', 'BELUM DISPOSISI', 25),
(60, '', NULL, '', 'BELUM DISPOSISI', 26);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `no_agenda` char(4) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `almt_tujuan` varchar(100) NOT NULL,
  `hal` varchar(200) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgkt_kerahasiaan` varchar(10) NOT NULL,
  `kka` varchar(10) NOT NULL,
  `File` varchar(100) NOT NULL,
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_surat_keluar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_agenda`, `no_surat`, `almt_tujuan`, `hal`, `tgl_surat`, `tgkt_kerahasiaan`, `kka`, `File`, `id_surat_keluar`) VALUES
('124', '89898', 'd', 'd', '2018-03-18', 'Terbatas', 'hhhhhhhh', 'Lighthouse.jpg', 2),
('554', '444', '', '', '0000-00-00', '', '', 'Lighthouse.jpg', 3),
('5555', '555555', '', '', '0000-00-00', 'Sangat Rah', '', 'jadwal UTS Genap 2017 2018.pdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `no_agenda` char(4) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `almt_pengirim` varchar(200) NOT NULL,
  `hal` varchar(200) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgkt_kerahasiaan` varchar(10) NOT NULL,
  `kka` varchar(10) NOT NULL,
  `File` varchar(100) NOT NULL,
  `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_surat_masuk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_agenda`, `no_surat`, `almt_pengirim`, `hal`, `tgl_surat`, `tgkt_kerahasiaan`, `kka`, `File`, `id_surat_masuk`) VALUES
('5555', '55555555567', '555555555', '', '2018-04-05', 'Biasa', '09.op.09', 'jadwal UTS Genap 2017 2018.pdf', 57),
('1111', '09/ppp/hj23/ph', 'dddddddddd', 'ddddddddddd', '2018-04-05', 'Delaware', 'California', 'jadwal UTS Genap 2017 2018.pdf', 58),
('3456', 'e/89/kl/o0', 'ffffffffffff', 'fffff', '2018-04-05', 'California', 'Alaska', 'jadwal UTS Genap 2017 2018.pdf', 59),
('1234', '10/201/psbr', 'dddddddd', 'dddddd', '2018-04-05', 'Penting', 'RH.02.06.0', 'jadwal UTS Genap 2017 2018.pdf', 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `kd_user` int(8) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Level` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `nama_user`, `username`, `password`, `email`, `Level`, `foto`) VALUES
(1, 'maulana', '12345', '12345', 'psbr@gmail.com', 'Admin', 'Lighthouse.jpg'),
(2, 'jakfar', 'jakfar shodiq', '12345', 'psbr789@gmail.com', 'User', 'Hydrangeas.jpg'),
(4, 'iiiiiiiiiii', '123456', '12345', 'psbr@gmail.com', 'user', 'Desert.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`id_surat_masuk`) REFERENCES `surat_masuk` (`id_surat_masuk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
