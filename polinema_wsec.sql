-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 09:59 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polinema_wsec`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
`id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `thn_lulus` int(11) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `alamat`, `thn_lulus`, `pekerjaan`, `no_telp`) VALUES
(1, 'Ahmad Ali Zuda H', 'JL.Yos Sudarso No.013B Ds. Catakgayam Kec. Mojowarno Kab. Jombang', 2011, 'KDM', '085730087691'),
(2, 'Idatul Masruroh', 'Jl.Anjasmoro No.19 Ds.Wonosalam Kec.Wonosalam Kab.Jombang', 2012, '-', '085856248255'),
(3, 'Tuxedokamen', 'Jl. Raya barat no 52. Kalipang Lodoyo Blitar', 2002, 'Pengangguran', ''),
(4, 'Rohmad Solikin (Cak Matt) ', 'Jl. Diponegoro no. 3 Satriyan-Kanigoro-Blitar', 2003, 'Lighting Company', '085646466060'),
(5, 'Aida', 'Rambut Monte RT/TW 03/04 Krisik Gandusari-Blitar', 2010, '-', '085815161058'),
(6, 'Garaudi al gifari', 'JL. Asngari RT/02 RW/01 Ds. Bence Kec. Garum Kab. Blitar', 2011, '-', '085746448636'),
(7, 'Defri Yogi Setiawan', 'Jl. Srigading VII No. 38 Kota Blitar', 2010, '-', '085649791345'),
(8, 'Jeffri Krisdianto (Je-frey Seva)', 'Jl. Dewi Sartika 04 Rt/01 Rw/03 kota blitar', 2010, '-', '087756583466'),
(9, 'Brilliant Maharajasa Kaloka ', 'Jl.kalpataru VD 50 A Malang ', 2008, '', '085235447240'),
(10, 'Wisnu Handoko', 'Perum Karanglo Indah Q-1 malang', 2003, 'SM dept', '081347174788'),
(11, 'Fajar Sodik', 'Bangil City', 2004, 'PT.KAI Bandung', '03412228693'),
(12, 'Kholilatul Wardani', 'Malang', 2005, '-', ' 08563739212'),
(13, 'Ulfa Setya', 'Jln Sukamade no 258, Ds Sarongan, Kec Pesanggaran - Banyuwangi', 2011, '-', '085731744189'),
(14, 'Putri isnaini hayati', 'Domisili jalan raya jatimulya blok H no 286 bekasi jawa barat', 2008, 'LG electronics', '081617176228'),
(15, 'Teguh Yudi Cahyono', 'RT 3 RW 1 Ds. Petung, Curahdami, Bondowoso, Jawa Timur', 2002, 'Pengadilan Agama Bondowoso ', '085336542002'),
(16, 'Anang', 'Dsn Tanjung Wetan ds Munungrejo RT 02 / RW 01 Kec Ngimbang Kab Lamongan', 2006, 'PT PDSI Drilling Area Jawa / Kuliah', '085231174927'),
(17, 'Rierin', 'Probolinggo', 2006, '', '082113245834'),
(18, 'Wildan Praba Muhtadi', 'Jl. Candi 5b Malang', 2008, 'PT SGN', '085646943480'),
(19, 'Syaikhoni Abdur Rohman', 'Perum Depok Maharaja Blok H3/18 Depok, Jawa Barat', 2006, 'PT Jagadlab Indonesia', '082111012511'),
(20, 'Moh Syaifullah', 'Jl. Cikoko Barat 1 Pancoran Jakarta Selatan', 2005, 'PT GET', '085664066696'),
(21, 'Ridlon', 'JL. KH. Ikhsan No. 9A Pagerwojo Perak Jombang', 2009, 'PT. UT Tbk', '085648047487'),
(22, 'Nur Sabta Dino', 'Jl Kawista no.5 Malang', 2007, 'PT Tira Austenite Tbk, Jakarta', '085646660413'),
(23, 'Mila syafitri', 'jl. klampok kasri 2D/186 Malang', 2007, 'Telkom Kepanjen', '085649650589'),
(24, 'Rijal Saifur', 'Malang', 2007, '-', '085646502224'),
(25, 'Veri', 'Malang', 2006, '', '085790561814'),
(26, 'Imam Baihaqi', 'Malang', 2008, '', '085755355542');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id` int(5) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_ang` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nim`, `nama_ang`, `prodi`, `no_telp`) VALUES
(1, 1431120024, 'RAHMADANI NUZUL IQBAL FALAQI', 'Teknik Listrik', '085954560100'),
(2, 1431110101, 'MOCHAMAD ADI KURNIAWAN', 'Teknik Elektronika', '082330637295'),
(3, 1441170102, 'MAHGARITA TRI K', 'Teknik Elektronika', '085790724587'),
(4, 1441170010, 'EGA MAHAPUTRA', 'Teknik Elektronika', '081252027929'),
(5, 1441170010, 'RIZAL BRAMAN SETYA', 'Teknik Elektronika', '085736910730'),
(6, 1441170012, 'SABILLAH DWIPADHANI', 'Teknik Elektronika', '085706464657'),
(7, 1431120095, 'ZAINUL ASFIYAUDIN', 'Teknik Listrik', '083811332527'),
(8, 1431120109, 'RIVALDI TRIANATA', 'Teknik Listrik', '082330512787'),
(9, 1431120044, 'TRI PRASETYO', 'Teknik Listrik', '081226014197'),
(10, 1441180159, 'NAILIL FITRIA', 'Teknik Informatika', '085645454722'),
(11, 1541183038, 'TIKKO HARDIYANTO', 'Teknik Informatika', '085704701700'),
(12, 1441180006, 'DESTANTI D. R', 'Teknik Informatika', '085732432159'),
(13, 1441160013, 'EKANANDA SULISTYO PUTRA', 'Teknik Telekomunikasi', '085791967200'),
(14, 1441160101, 'RIFKI ZAKARIA', 'JTD', '082247652385'),
(15, 1431130073, 'ADEN AKBAR PRAMANA', 'Teknik Telekomunikasi', '08975585042'),
(16, 1431110095, 'ADITYA REZKI APRIYADI', 'Teknik Elektronika', '0816551010'),
(17, 1431120018, 'ARIF FATWA P.', 'Teknik Listrik', '081331818386'),
(18, 1441170036, 'FIQH ABDUL MUHGDHOR', 'Teknik Elektronika', '085791323836');

-- --------------------------------------------------------

--
-- Table structure for table `anggota20`
--

CREATE TABLE IF NOT EXISTS `anggota20` (
`id` int(5) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_ang` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `no_telp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `isi` varchar(3000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `tanggal`, `isi`) VALUES
(3, 'WSEC FAIR 2016', '863439.jpg', '31/08/2016', 'Workshop Elektro Fair (WS Fair) \r\ndiadakan pada hari/tanggal : Senin-Selasa, 10-11 Oktober 2016 \r\nTerbuka untuk Umum');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`id` int(11) NOT NULL,
  `nama_bk` varchar(11) NOT NULL,
  `jenis_bk` varchar(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `website` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `alamat`, `kode_pos`, `telepon`, `website`, `gambar`, `latitude`, `longitude`) VALUES
(1, 'Workshop Electro (Polinema)', 'Jl. Soekarno Hatta No. 9 Malang, Jawa Timur', '65141', '0813311818386', 'wsec.com', 'workshop.jpg', -7.9469, 112.616);

-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

CREATE TABLE IF NOT EXISTS `devisi` (
`id` int(11) NOT NULL,
  `nama_devisi` varchar(20) NOT NULL,
  `gambar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL,
  `alamat_sekarang` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `alasan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gpelatihan`
--

CREATE TABLE IF NOT EXISTS `gpelatihan` (
`id` int(5) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gpelatihan`
--

INSERT INTO `gpelatihan` (`id`, `keterangan`, `gambar`) VALUES
(1, 'Pelatihan Microcontroller', '666812.jpg'),
(2, 'Pelatihan PLC ', '236779.jpg'),
(9, 'Pelatihan Arduino Uno', '895108.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gproker`
--

CREATE TABLE IF NOT EXISTS `gproker` (
`id` int(5) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gproker`
--

INSERT INTO `gproker` (`id`, `keterangan`, `gambar`) VALUES
(1, 'Acara WSEC Fair Divisi Teknik Elektronika membuat kreativitas tangan robot', '972698.jpg'),
(2, 'Acara WSEC Fair Divisi Teknik Informatika membuat Augmented Reality (AR)', '930538.jpg'),
(3, 'Acara WSEC Fair Divisi Teknik Listrik membuat Pintu Otomatis', '263586.jpg'),
(4, 'Acara WSEC Fair Divisi Teknik Telekomunikasi membuat Smart Home ', '495974.jpg'),
(5, 'Pemeneng Lomba PLC Competition 2016', '723748.jpg'),
(6, 'Acara Malam Keakraban WSEC POLINEMA', '500286.jpg'),
(8, 'Images', '218981.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gproyek`
--

CREATE TABLE IF NOT EXISTS `gproyek` (
`id` int(5) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gproyek`
--

INSERT INTO `gproyek` (`id`, `keterangan`, `gambar`) VALUES
(2, 'Proyek Parabola dari WSEC Polinema', '663735.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gumum`
--

CREATE TABLE IF NOT EXISTS `gumum` (
`id` int(5) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gumum`
--

INSERT INTO `gumum` (`id`, `keterangan`, `gambar`) VALUES
(1, 'Kebersamaan WSEC Polinema Acara Makan Bersama', '898458.jpg'),
(2, 'Acara Buka Bersama WSEC Polinema', '232055.jpg'),
(8, 'Rumah Berbasis Android karya WSEC POLINEMA', '320632.jpg'),
(9, 'Acara Silaturahmi WSEC POLINEMA ke WSE UM', '657418.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelatihan`
--

CREATE TABLE IF NOT EXISTS `jadwal_pelatihan` (
`id` int(5) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `jam` varchar(6) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `jadwal_pelatihan`
--

INSERT INTO `jadwal_pelatihan` (`id`, `prodi`, `materi`, `jam`, `hari`) VALUES
(8, 'Teknik Informatika', 'Code Igniter', '15:00', '20/06/2016'),
(9, 'Teknik Telekomunikasi', 'Jaringan', '16.00', '21/06/2015'),
(10, 'Teknik Listrik', 'Perkabelan', '15:00', '23/06/2016'),
(11, 'Teknik Informatika', 'Blender', '15:00', '22/06/2016');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(4, 'wsec19', '19wsec');

-- --------------------------------------------------------

--
-- Table structure for table `so`
--

CREATE TABLE IF NOT EXISTS `so` (
`id` int(5) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `so`
--

INSERT INTO `so` (`id`, `judul`, `keterangan`, `gambar`) VALUES
(6, 'STRUKTUR ORGANISASI WORKSHOP ELECTRO POLITEKNIK NEGERI MALANG', 'SO', '701583.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota20`
--
ALTER TABLE `anggota20`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpelatihan`
--
ALTER TABLE `gpelatihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gproker`
--
ALTER TABLE `gproker`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gproyek`
--
ALTER TABLE `gproyek`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gumum`
--
ALTER TABLE `gumum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `so`
--
ALTER TABLE `so`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `anggota20`
--
ALTER TABLE `anggota20`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gpelatihan`
--
ALTER TABLE `gpelatihan`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gproker`
--
ALTER TABLE `gproker`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gproyek`
--
ALTER TABLE `gproyek`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gumum`
--
ALTER TABLE `gumum`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `so`
--
ALTER TABLE `so`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
