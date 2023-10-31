-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2023 at 08:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smkn1solok`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tema_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `jam` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `id_album` int(5) NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `isi_halaman`, `tgl_posting`, `gambar`) VALUES
(2, 'Visi dan Misi', '<p>\r\nVisi :\r\n</p>\r\n<p>\r\nTerwujudnya Lulusan Berakhlak Mulia, Berdaya Saing, dan  Berbudaya Lingkungan\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n<p>\r\nMisi :\r\n</p>\r\n<p>\r\n1.  Mempersiapkan peserta didik yang berakhlak mulia, memiliki jiwa wirausaha, Menguasai IPTEK dan unggul dalam bahasa serta mampu bersaing nasional dan internasional\r\n2.  Menyelenggarakan pendidikan profesional yang berkualitas dan berorientasi keunggulan\r\n3.  Mewujudkan pelayanan prima dan menjaga keharmonisan lingkungan\r\n</p>\r\n', '2010-05-31', ''),
(3, 'Struktur Organisasi', '<p>Isikan struktur organisasi di bagian ini</p>\r\n', '2017-05-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `alamat_website` varchar(100) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `alamat_website`, `meta_deskripsi`, `meta_keyword`, `favicon`) VALUES
(1, 'SMK Negeri 1 Solok', 'https://smkn1solok.sch.id/', '', '', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `katajelek`
--

CREATE TABLE `katajelek` (
  `id_jelek` int(11) NOT NULL,
  `kata` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `ganti` varchar(60) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `katajelek`
--

INSERT INTO `katajelek` (`id_jelek`, `kata`, `ganti`) VALUES
(4, 'sex', 's**'),
(2, 'bajingan', 'b*******'),
(3, 'bangsat', 'b******');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id_main` int(5) NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `adminmenu` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id_main`, `nama_menu`, `link`, `aktif`, `adminmenu`) VALUES
(2, 'Beranda', '', 'Y', 'N'),
(3, 'Profil', '#', 'Y', 'N'),
(4, 'Agenda', 'agenda', 'Y', 'N'),
(5, 'Berita', '#', 'Y', 'N'),
(6, 'Download', 'download', 'Y', 'N'),
(7, 'Galeri Foto', 'gallery', 'Y', 'N'),
(8, 'Hubungi Kami', 'hubungi', 'Y', 'N'),
(14, 'Setting Web', '', 'N', 'Y'),
(15, 'Setting Menu', '', 'N', 'Y'),
(16, 'Manajemen Berita', '', 'N', 'Y'),
(54, 'Hubungi Kami', 'administrator/pesanmasuk', 'N', 'Y'),
(53, 'Interaksi', '', 'N', 'Y'),
(52, 'Media', '', 'N', 'Y'),
(59, 'Banner', 'administrator/banner', 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', 'user', '', '', 'N', 'user', 'Y', 1, ''),
(18, 'Berita', 'berita', '', '', 'Y', 'user', 'Y', 6, 'semua-berita.html'),
(19, 'Banner', 'banner', '', '', 'Y', 'admin', 'Y', 9, ''),
(37, 'Profil', 'profil', 'SMK Negeri 1 Solok', 'gedungku.jpg', 'Y', 'admin', 'Y', 3, 'profil-kami.html'),
(10, 'Manajemen Modul', 'modul', '', '', 'N', 'admin', 'Y', 2, ''),
(31, 'Kategori', 'kategori', '', '', 'Y', 'admin', 'Y', 5, ''),
(33, 'Poling', 'poling', '', '', 'Y', 'admin', 'Y', 10, ''),
(34, 'Tag (Label)', 'tag', '', '', 'N', 'admin', 'Y', 7, ''),
(35, 'Komentar', 'komentar', '', '', 'Y', 'admin', 'Y', 8, ''),
(36, 'Download', 'download', '', '', 'Y', 'admin', 'Y', 11, 'semua-download.html'),
(40, 'Hubungi Kami', 'hubungi', '', '', 'Y', 'admin', 'Y', 12, 'hubungi-kami.html'),
(41, 'Agenda', 'agenda', '', '', 'Y', 'user', 'Y', 31, 'semua-agenda.html'),
(42, 'Shoutbox', 'shoutbox', '', '', 'Y', 'admin', 'Y', 13, ''),
(43, 'Album', 'album', '', '', 'N', 'admin', 'Y', 14, ''),
(44, 'Galeri Foto', 'galerifoto', '', '', 'Y', 'admin', 'Y', 15, ''),
(45, 'Templates', 'templates', '', '', 'N', 'admin', 'Y', 16, ''),
(46, 'Kata Jelek', 'katajelek', '', '', 'N', 'admin', 'Y', 17, ''),
(47, 'RSS', '-', '', '', 'Y', 'admin', 'N', 18, ''),
(48, 'YM', '-', '', '', 'Y', 'admin', 'N', 19, ''),
(49, 'Indeks Berita', '-', '', '', 'Y', 'admin', 'N', 20, ''),
(50, 'Kalender', '-', '', '', 'Y', 'admin', 'N', 21, ''),
(51, 'Statistik User', '-', '', '', 'Y', 'admin', 'N', 22, ''),
(52, 'Pencarian', '-', '', '', 'Y', 'admin', 'N', 23, ''),
(53, 'Berita Teratas', '-', '', '', 'Y', 'admin', 'N', 24, ''),
(54, 'Arsip Berita', '-', '', '', 'Y', 'admin', 'N', 25, ''),
(55, 'Berita Sebelumnya', '-', '', '', 'Y', 'admin', 'N', 26, ''),
(60, 'Sekilas Info', '?module=sekilasinfo', '', '', 'Y', 'admin', 'Y', 13, ''),
(57, 'Menu Utama', '?module=menuutama', '', '', 'Y', 'admin', 'Y', 28, ''),
(58, 'Sub Menu', '?module=submenu', '', '', 'Y', 'admin', 'Y', 29, ''),
(59, 'Halaman Statis', '?module=halamanstatis', '', '', 'Y', 'admin', 'Y', 30, ''),
(61, 'Identitas Website', '?module=identitas', '', '', 'N', 'admin', 'Y', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `poling`
--

CREATE TABLE `poling` (
  `id_poling` int(5) NOT NULL,
  `pilihan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `rating` int(5) NOT NULL DEFAULT 0,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekilasinfo`
--

CREATE TABLE `sekilasinfo` (
  `id_sekilas` int(5) NOT NULL,
  `info` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoutbox`
--

CREATE TABLE `shoutbox` (
  `id_shoutbox` int(5) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `website` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id_sub` int(5) NOT NULL,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_main` int(5) NOT NULL,
  `id_submain` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `adminsubmenu` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `link_sub`, `id_main`, `id_submain`, `aktif`, `adminsubmenu`) VALUES
(2, 'Visi dan Misi', 'page/detail/visi-dan-misi', 3, 0, 'Y', 'N'),
(3, 'Struktur Organisasi', 'page/detail/struktur-organisasi', 3, 0, 'Y', 'N'),
(4, 'Ekonomi', 'berita/kategori/ekonomi', 5, 0, 'N', 'N'),
(5, 'Hiburan', 'berita/kategori/hiburan', 5, 0, 'Y', 'N'),
(6, 'Olahraga', 'berita/kategori/olahraga', 5, 0, 'Y', 'N'),
(7, 'Politik', 'berita/kategori/politik', 5, 0, 'Y', 'N'),
(8, 'Teknologi', 'berita/kategori/teknologi', 5, 0, 'Y', 'N'),
(11, 'Manajemen Modul', 'administrator/manajemenmodul', 14, 0, 'N', 'Y'),
(10, 'Identitas Web', 'administrator/identitaswebsite', 14, 0, 'N', 'Y'),
(12, 'Manajemen User', 'administrator/manajemenuser', 14, 0, 'N', 'Y'),
(13, 'Manajemen Template', 'administrator/templatewebsite', 14, 0, 'N', 'Y'),
(14, 'Menu Utama', 'administrator/menuutama', 15, 0, 'N', 'Y'),
(15, 'Sub Menu', 'administrator/submenu', 15, 0, 'N', 'Y'),
(16, 'Kategori Berita', 'administrator/kategoriberita', 16, 0, 'N', 'Y'),
(17, 'Berita', 'administrator/berita', 16, 0, 'N', 'Y'),
(18, 'Komentar', 'administrator/komentar', 16, 0, 'N', 'Y'),
(19, 'Halaman Statis', 'administrator/halamanbaru', 16, 0, 'N', 'Y'),
(20, 'Tag / Label', 'administrator/tagberita', 16, 0, 'N', 'Y'),
(21, 'Sensor Kata', 'administrator/sensorkata', 16, 0, 'N', 'Y'),
(22, 'Album', 'administrator/album', 52, 0, 'N', 'Y'),
(23, 'Galeri Foto', 'administrator/galeri', 52, 0, 'N', 'Y'),
(24, 'Download', 'administrator/download', 52, 0, 'N', 'Y'),
(25, 'Agenda', 'administrator/agenda', 53, 0, 'N', 'Y'),
(26, 'Poling', 'administrator/polling', 53, 0, 'N', 'Y'),
(27, 'Sekilas Info', 'administrator/sekilasinfo', 53, 0, 'N', 'Y'),
(30, 'ShoutBox', 'administrator/shoutbox', 53, 0, 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `pembuat`, `folder`, `aktif`) VALUES
(12, 'SMK Negeri 1 Solok', 'Admin', 'phpmu-ciek', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@smkn1solok.sch.id', '', 'admin', 'N', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `katajelek`
--
ALTER TABLE `katajelek`
  ADD PRIMARY KEY (`id_jelek`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id_main`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  ADD PRIMARY KEY (`id_sekilas`);

--
-- Indexes for table `shoutbox`
--
ALTER TABLE `shoutbox`
  ADD PRIMARY KEY (`id_shoutbox`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_templates`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `katajelek`
--
ALTER TABLE `katajelek`
  MODIFY `id_jelek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id_main` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
  MODIFY `id_poling` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  MODIFY `id_sekilas` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoutbox`
--
ALTER TABLE `shoutbox`
  MODIFY `id_shoutbox` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_sub` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
