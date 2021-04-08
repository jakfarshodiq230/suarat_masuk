-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 04:02 AM
-- Server version: 5.5.27-log
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
  `isidisposisi` varchar(200) NOT NULL,
  `tgl_penyelesaian` date NOT NULL,
  `diteruskan` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kode_disposisi` int(11) NOT NULL AUTO_INCREMENT,
  `no_agenda` char(10) NOT NULL,
  PRIMARY KEY (`kode_disposisi`),
  KEY `disposisi_ibfk_1` (`no_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`isidisposisi`, `tgl_penyelesaian`, `diteruskan`, `status`, `kode_disposisi`, `no_agenda`) VALUES
('', '0000-00-00', '', 'BELUM DISPOSISI', 4, 'P0002'),
('', '0000-00-00', '', 'BELUM DISPOSISI', 5, 'P0003'),
('', '0000-00-00', '', '', 7, 'P0004'),
('', '0000-00-00', '', 'BELUM DISPOSISI', 8, 'P0005'),
('', '0000-00-00', '', 'BELUM DISPOSISI', 9, 'P0006'),
('', '0000-00-00', '', 'BELUM DISPOSISI', 10, 'P0007'),
('', '0000-00-00', '', 'BELUM DISPOSISI', 11, 'P0008'),
('Yang Terhormat Kepala TU ,Segera Hari ini', '2017-02-06', 'Yang Terhormat Buk yudia tolong ikut Menghadiri Pengukuran tanah tersebut', 'SUDAH DISPOSISI', 12, 'P0009'),
('Yang Terhormat Kepala TU, Kordinasikan / tugaskan untuk mentindaklajutinya.', '2017-05-02', 'Yang terhormat, Bu Neneng dan Buk Hilma Tolong Kirimkan Data Reviu bulan April Sesuai Permintaan', 'SUDAH DISPOSISI', 13, 'P0010'),
('', '0000-00-00', '', '', 14, 'P0001');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `no_agenda` char(10) NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `almt_tujuan` varchar(200) NOT NULL,
  `hal` varchar(200) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgkt_kerahasiaan` varchar(20) NOT NULL,
  `kka` varchar(20) NOT NULL,
  `File` varchar(100) NOT NULL,
  PRIMARY KEY (`no_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_agenda`, `no_surat`, `almt_tujuan`, `hal`, `tgl_surat`, `tgkt_kerahasiaan`, `kka`, `File`) VALUES
('P0001', '139/Kemensos.PSBR RIAU/KP.08.01/08/2017', 'Kepala BPJS KCU Pekanbaru', 'Konfirmasi Pendaftaran BPJS PPNPN', '2017-08-20', 'Sangat Rahasia', 'belum', '2.pdf'),
('P0002', '86c/PSBR.RIAU/PL.04/03/2017', 'Direktur Jendral Rehablilitasi Sosial Kementrian Sosial RI', 'Pemohonan Penjualan Barang Bongkaran Barang Milik Negara', '2017-03-16', 'Biasa', 'belem tau', '3.pdf'),
('P0003', '130/PSBR.RIAU/RH.00.01/05/2017', 'Bapak Ibu Pemimpin Usaha', 'Mohon Kesedian menerima penerimaan Manfaat Praktek Belajar Kerja (PBK) Otomotif Roda Dua', '2017-05-09', 'Biasa', 'belem tau', '4.pdf'),
('P0004', '33/PSBR.RIAU/KS.00.01/1/2017', 'Ketua KPPS-TPS 02 Kelurahan Limbungan Baru', 'Izin Pemakaian Gudang', '2017-01-23', 'Biasa', 'belem tau', '5.pdf'),
('P0005', '320/PSBR.RIAU/KEU.01/11/2017', 'Kementrian Sosial RI(027)', 'Surat Pernyataan', '2017-11-27', 'Biasa', 'belem tau', '6.pdf'),
('P0006', '130/PSBR.RIAU/RH.00.01/05/2017', 'Bapak Ibuk Pemimpin Usaha', 'Mohon Kesedian menerima Penerima Manfaat Praktek Belajar Kerja (PBK) Menjahit', '2017-05-09', 'Sangat Rahasia', 'belum', '7.pdf'),
('P0007', '34/PSBR.RIAU/KP.02.04/01/2017', 'Sekretaris Driektorat Jendral Rehablilitasi Sosial Kementrian Sosial RI', 'Usulan Calon Peserta Ujian Dinas Tingkat 1 An. Elma Widia, A.Md', '2017-01-24', 'Rahasia', 'belem tau', '8.pdf'),
('P0008', '254/PSBR.RIAU/KS.01.01./09/2017', 'Sekretaris Direktorat Jendral Rehabilitasi Sosial', 'Fomulir Aktivasi Aplikasi e-Filling LHKPN', '2017-12-26', 'Rahasia', 'belem tau', '9.pdf'),
('P0009', '132/PSBR.RIAU/RH.00.01/05/2017', 'Bapak Ibu Pemimpin Usaha', 'Mohon Kesedian Menerima Penerima Manfaat Praktek Belajar Kerja (PBK) Tata Rias', '2017-05-09', 'Biasa', 'belem tau', '10.pdf'),
('P0010', '25/PSBR RIAU/KP.02.04/01/2017', 'Sekretaris Direktorat Jendral Rehabilitasi Sosial Kementrian Sosial RI', 'Usulan Calon Peserta Ujian Dinas Tingkat 1 An. Tri Cahyadi Ahmad, A. Md', '2017-01-24', 'Rahasia', 'belem tau', '11.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `no_agenda` char(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `almt_pengirim` varchar(200) NOT NULL,
  `hal` varchar(500) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_penerimaan` datetime NOT NULL,
  `tgkt_kerahasiaan` varchar(20) NOT NULL,
  `kka` varchar(20) NOT NULL,
  `File` varchar(100) NOT NULL,
  PRIMARY KEY (`no_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_agenda`, `no_surat`, `almt_pengirim`, `hal`, `tgl_surat`, `tgl_penerimaan`, `tgkt_kerahasiaan`, `kka`, `File`) VALUES
('P0001', 'UND- 62 /WKN.03/KNL.03/2017', 'KPKNL Pekanbaru', 'Undangan Sosialisasi Peraturan BMN dan Aplikasi SIMANTAP', '2017-05-10', '2018-05-23 06:25:25', 'Biasa', 'belem tau', '1.pdf'),
('P0002', '114 /RS-SET.RS/PL.01/7/2017', 'Sekretaris Dritjen Rehsos', 'Penyampian RKBMN Tahun Anggaran 2019 Di lingkungan Ditjen Rehabilitasi Sosial', '2017-06-25', '2018-05-24 05:24:49', 'Biasa', 'belem tau', '2.pdf'),
('P0003', '518/RSA/BS01-01/10/2017', 'Derektor Rhsos Anak', 'Pemberitahu tentang Bantuan / Asisten Sosial PKSA-AMPK Tahun 2017', '2017-12-11', '2018-05-24 05:27:18', 'Biasa', 'belem tau', '3.pdf'),
('P0004', 'B/67/I/2017/Reskim', 'A.n Kepolisian Kuantan Singingi', 'Melakukan Rapat Kordinasi untuk Mengambil Keputusan Terhaadap Terlapor Dibawa Umur A.n RANDI ADES als RANDI Bin Ismail, DKK', '2017-01-17', '0000-00-00 00:00:00', 'Biasa', 'belem tau', '4.pdf'),
('P0005', '141/ DInsosP3APMD.460/I/2017', 'KADINSOS Kab. Kep. Anambas', 'Kesediaan Melaksanakan Program Rehabilitasi Sosial Luar Lembaga', '2017-01-27', '2018-05-24 09:08:06', 'Biasa', 'belem tau', '5.pdf'),
('P0006', 'Kpts. 18/DINSOS/II/2017', 'Kepala Dinas Sosial Provinsi Riau', 'Pembentukan TIM assesment Pada Kegiatan peningatan kualitas assement dan manajemen kasus tahun 2017', '2017-02-27', '2018-05-24 09:12:01', 'Biasa', 'belem tau', '6.pdf'),
('P0007', '463.1/Dinsos-Diklatsos/IV/2017/42', 'Kepala Dinas Provinsi Riau', 'Pembentukan Diklat Manajemen Pembangunan kesejahtraan sosial masyarakat ( TKSM) kabupaten/Kota se provinsi Riau Angkatan I ( Pertama) Tahun 2017', '2017-04-18', '2018-05-24 09:18:01', 'Biasa', 'belem tau', '7.pdf'),
('P0008', '23/SJ/01/2017', 'SEKJEN', 'Tentang Plaksanaan Inventarisasi BMN Berupa Tahun, Gedung dan Bangunan Jalan Dan Jembatan, Irigasi, Jaringan', '2017-01-09', '2018-05-24 09:21:02', 'Biasa', 'belem tau', '8.pdf'),
('P0009', '.../2003.3.14.71/IV/2017', 'Badan Pertahanan Kota Pekanbaru', 'Pemberitahuan akan Dilaksanakan Pengukuran', '2017-04-01', '2018-05-24 09:23:33', 'Biasa', 'belem tau', '9.pdf'),
('P0010', 'S-908/WPB.04/KP.008/2017', 'KPPN Pekanbaru', 'Permintaan data Reviu Rencana Kegiatan, Rencana Penyerapan/Penarikan Dana, Dan Capaian Output Tahun 2017', '2017-04-20', '2018-05-24 09:33:51', 'Biasa', 'belem tau', '10.pdf');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `nama_user`, `username`, `password`, `email`, `Level`, `foto`) VALUES
(1, 'Jakfar Shodiq', '12345', '12345', 'gmail@gmail.com', 'Admin', 'Lighthouse.jpg'),
(2, 'jakfar', 'jakfar shodiq', '12345', 'psbr789@gmail.com', 'User', 'Hydrangeas.jpg'),
(5, 'Jakfar Shodiq', '153510357', '12345', 'jakfarshodiq230@gmail.com', 'User', 'Screenshot_2017-01-31-19-18-39.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`no_agenda`) REFERENCES `surat_masuk` (`no_agenda`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
