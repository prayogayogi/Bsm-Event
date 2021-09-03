-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 01:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cilent`
--

CREATE TABLE `tb_cilent` (
  `id` int(11) NOT NULL,
  `nama_cilent` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cilent`
--

INSERT INTO `tb_cilent` (`id`, `nama_cilent`, `foto`) VALUES
(1, 'indomaret m', 'client3.jpg'),
(2, 'bpjs kesehatan', 'client4.jpg'),
(3, 'pertamina', 'client9.jpg'),
(4, 'pengadean', 'client16.jpg'),
(5, 'indolottle', 'client11.jpg'),
(6, 'bogosari', 'client2.jpg'),
(7, 'adm', 'client1.jpg'),
(9, 'keuangan', 'client5.jpg'),
(10, 'indomaret', 'client51.jpg'),
(11, 'pertamina', 'client91.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id` int(11) NOT NULL,
  `jenis_id` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galery`
--

INSERT INTO `tb_galery` (`id`, `jenis_id`, `foto`, `slug`) VALUES
(19, 'Videotron master', 'videotron1.png', 'videotron-master'),
(20, 'Videotron master', 'videotron2.png', 'videotron-master'),
(21, 'Videotron master', 'videotron3.jpg', 'videotron-master'),
(22, 'Videotron master', 'videotron4.jpg', 'videotron-master'),
(24, 'LED TV Touchscreen', 'videotron6.jpg', 'led-tv-touchscreen'),
(25, 'LED TV Touchscreen', 'videotron11.png', 'led-tv-touchscreen'),
(26, 'LED TV Touchscreen', 'videotron31.jpg', 'led-tv-touchscreen'),
(28, 'LED Display Stand Touchscreen', 'videotron62.jpg', 'led-display-stand-touchscreen'),
(29, 'LED Display Stand Touchscreen', 'videotron42.jpg', 'led-display-stand-touchscreen'),
(30, 'LED Display Stand Touchscreen', 'videotron63.jpg', 'led-display-stand-touchscreen'),
(31, 'Projector', 'videotron61.jpg', 'projector'),
(32, 'Projector', 'videotron5.jpg', 'projector'),
(33, 'Projector', 'videotron21.png', 'projector');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `alamat`, `no_hp`, `email`, `instagram`, `facebook`) VALUES
(3, 'Villa mas indah blok C9 no,8, Kota Bks Jawa Barat', '62811733466', 'bsmeventt@gmail.com', 'https://www.instagram.com/bsmevent/', 'https://www.facebook.com/bsmevent/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `price` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id`, `jenis`, `foto`, `deskripsi`, `price`, `slug`) VALUES
(8, 'Videotron master', 'videotron3.jpg', '<p><a href=\"https://pusatledvideotron.com/\" target=\"_blank\"><strong>Sewa Videotron Murah</strong></a>&nbsp;| Sewa videotron INDOOR/OUTDOOR,Solusi Teknologi Multimedia adalah Solusi pilihan terbaik untuk<br />\r\npenyewaan LED VIDEOTRON, LED TV TOUCHSCREEN dan PROJECTOR. Visi kami adalah<br />\r\nmemenuhi kebutuhan pelanggan dengan solusi terbaik dan unit yang berkualitas. Misi kami<br />\r\nadalah menjadi mitra terpercaya untuk para costumer dan dapat menjalin kerjasama yang baik<br />\r\ndalam waktu panjang.</p>\r\n\r\n<p>Berikut ini adalah daftar ukuran videotron</p>\r\n\r\n<ul>\r\n	<li>Videotron Kecil outdoor 3&times;2 meter</li>\r\n	<li>Videotron Menengah Outdoor 4&times;3 meter</li>\r\n	<li>Videotron Besar Outdoor 6&times;4 Meter</li>\r\n	<li>Videotron Kecil Indoor 3&times;2 meter</li>\r\n	<li>Videotron Menengah Indoor 6&times;3 meter</li>\r\n	<li>Videotron Besar indoor 6&times;4 Meter</li>\r\n	<li>P 2.5 Indoor (480 x 480)</li>\r\n	<li>P 10 Outdoor (960 x 640)</li>\r\n</ul>\r\n\r\n<p><strong>Solusi Teknologi Multimedia&nbsp;</strong>telah melayani berbagai event di kota kota besar<br />\r\ndiberbagai wilayah seperti Bandung, Semarang, Surabaya, Denpasar, Makasar<br />\r\nBali, Yogyakara, cisauk dll.</p>\r\n\r\n<p>Kami menyediakan jasa&nbsp;<strong>sewa</strong>&nbsp;dan&nbsp;<strong>rental videotron&nbsp;</strong>antara lain sewa&nbsp;<strong>led tv</strong>, sewaproyektor,<br />\r\nSewa Led Videotron, sewa&nbsp;<strong>tv touchscreen</strong>&nbsp;sewa&nbsp;<strong>rental led videotron</strong>, dan sewa&nbsp;<strong>led display</strong><br />\r\nuntuk berbagai&nbsp;<strong>event</strong>.</p>\r\n', '1250000', 'videotron-master'),
(9, 'LED TV Touchscreen', 'videotron1.png', '<p>Kami melayani Sewa LED TV dan LED TV Toucsreen dengan harga yang murah,dan<br />\r\nmengutamakan kualitas. Dengan berbagai ukuran dan pilihan, anda bisa<br />\r\nmenentukan mana TV yang cocok untuk kebutuhan anda. TV yang kami sewakan<br />\r\nuntuk anda tentunya sudah kami check terlebih dahulu agar tidak terjadi<br />\r\nhambatan atau error sebelum pemakaian di acara anda.</p>\r\n\r\n<p>Buat Event Anda lebih Futuristik dengan sewa LED TV Touchscreen yang<br />\r\nmenggunakan teknologi terbaru dengan harga rental TV Touchscreen yang<br />\r\nbersahabat.Solusi Teknologi Multimedia telah berpengalaman dalam penyewaan<br />\r\nLED TV Touchscreen murah dan berkualitas. Telah melayani ratusan client untuk<br />\r\nsewa TV Touchscreen berbagai ukuran, dengan pelayanan yang memuaskan. Kami<br />\r\nberkomitmen akan terus menjaga dan mengupdate kualitas perlengkapan yang<br />\r\nkami miliki untuk memberikan pelayanan yang terbaik kepada client.</p>\r\n\r\n<p>Solusi Teknologi Multimedia menyediakan solusi bagi anda yang saat ini sedang<br />\r\nmencari penyewaan TV Touchscreen dengan berbagai ukuran untuk acara<br />\r\nmeeting, wedding, konser, konferensi, seminar, training, event launching, dan<br />\r\nberbagai acara sejenis.Solusi Teknologi multimedia siap support sewa TV<br />\r\nTouchscreen untuk berbagai daerah di Indonesia.<br />\r\nTersedia TV dengan ukuran: 32 inchi, 42 inchi, 52 inci, 55 inchi, 60 inchi, 70 inchi<br />\r\ndilengkapi Standing atau Bracket, serta Sewa TV Touchscreen 32, 42, 52, 60 inchi.</p>\r\n\r\n<p>Alasan Mengapa Harus Sewa TV Touchscreen di Solusi Teknologi Multimedia :</p>\r\n\r\n<ol>\r\n	<li>Salah satu supplier penyewaan LED TV terbaik</li>\r\n	<li>Touch panel memakai teknologi terbaru dengan 10 Touch Point</li>\r\n	<li>Touchscreen memiliki tingkat akurasi yang tinggi</li>\r\n	<li>Support bebagai macam Aplikasi: WEB Based, Flash, Dekstop, maupun Android</li>\r\n	<li>Pengantaran tepat waktu</li>\r\n	<li>Teknisi support siap melayani anda 24 jam</li>\r\n</ol>\r\n', '2000000', 'led-tv-touchscreen'),
(10, 'LED Display Stand Touchscreen', 'videotron4.jpg', '<p>LED Standing Touchscreen adalah alternatif yang bagus untuk acara dan berbagai<br />\r\nevent,karnaLebih mudah untuk mengubah konten sesuai dengan kebutuhan yang<br />\r\nberbeda,dan juga karna ketersediaan aplikasi yang lebih luas. Seiring kemajuan<br />\r\nteknologi, LED Stand menjadi lebih terjangkau dan semakin populer dari hari ke hari<br />\r\n. LED Stand lebih ramping dan tidak memakan tempat bisa menjadi solusi tepat bagi<br />\r\nmereka yang berusaha membuat acara, pameran, dan toko ritel mereka lebih menarik<br />\r\ndan kreatif.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Solusi Teknologi Multimedia hadir sebagai vendor rental Sewa LED Touchscreen dan<br />\r\nsewa LED TV terlengkap di Jakarta, kami menyewakan unit LED TV dan LED TV<br />\r\nTouchscreen dengan tipe dan ukuran yang beragam mulai dari 32&Prime;- 60&Prime; yang dapat<br />\r\ndipasang dengan menggunakan standing TV standar maupun standing booth custom<br />\r\nserta program aplikasi yang dibutuhkdisesuaikan dengan keinginan dan kebutuhan<br />\r\nanda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Booth Standing Berdiri dengan plat besi dan kayu multiplex Tinggi = 2 mtr, Lebar = 40 &ndash;<br />\r\n50 cm dan dengan ketebalan 7 cm<br />\r\nBooth Standing Miring dengan bahan plat besi atau kayu Tinggi = 70 Cm, Lebar = 50<br />\r\ncm &ndash; 1 meter dengan kemiringan layar 45 derajat<br />\r\nSemua Booth Standing tersebut siap ditempel dengan stiker branding event yang akan<br />\r\nanda selenggarakan</p>\r\n', '2250000', 'led-display-stand-touchscreen'),
(11, 'Projector', 'videotron6.jpg', '<p>Solusi Teknologi Multimedia melayani Rental &amp; Sewa Infocus Projector. Jika anda sedang membutuhkan proyektor<br />\r\nuntuk keperluan pribadi atau kantor, seperti:</p>\r\n\r\n<ul>\r\n	<li>Seminar</li>\r\n	<li>Workshop</li>\r\n	<li>Meeting / Presentasi</li>\r\n	<li>Nobar (nonton bareng) Piala Dunia atau Liga Champion atau MotoGP</li>\r\n	<li>Acara ultah atau nikahan</li>\r\n	<li>Dan lain-lain</li>\r\n</ul>\r\n', '2122000', 'projector');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `jenis`, `foto`) VALUES
(1, 'Videotron Indoor atau Outdoor', 'testimonial1.jpg'),
(2, 'LED TV Touchscreen', 'testimonial2.jpg'),
(3, 'LED Display Stand Touchscreen', 'testimonial3.jpg'),
(4, 'Projector', 'testimonial4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userapp`
--

CREATE TABLE `tb_userapp` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `password` varchar(225) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userapp`
--

INSERT INTO `tb_userapp` (`id`, `nama`, `email`, `alamat`, `no_hp`, `foto`, `roles`, `password`, `slug`, `created_at`) VALUES
(2, 'Admin bsm', 'bsm@gmail.com', 'bengkulu', '082281735896', 'person_4.jpg', '1', '$2y$10$eACOJG.34IhIoQcMXJ0V3OyZ6C.4xXPzgpNdDpWT1kcblbv.StxVi', 'admin-bsm', '2021-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cilent`
--
ALTER TABLE `tb_cilent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_userapp`
--
ALTER TABLE `tb_userapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cilent`
--
ALTER TABLE `tb_cilent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_userapp`
--
ALTER TABLE `tb_userapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
