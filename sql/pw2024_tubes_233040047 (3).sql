-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 04:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040047`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`) VALUES
(1, 'Bandung'),
(2, 'Jakarta'),
(3, 'Bali'),
(4, 'Jawa tengah'),
(5, 'Jakabaring');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kota` int NOT NULL,
  `tahun` year NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `nama`, `gambar`, `id_kota`, `tahun`, `details`) VALUES
(2, 'Stadion Gelora Bandung Lautan Api', 'gbla.jpeg', 1, 1999, 'Gelora Bandung Lautan Api Stadium\r\nLokasi\r\nGedebage, Bandung, Jawa Barat\r\nKoordinat\r\n6°57′31″S 107°42′41″EKoordinat: 6°57′31″S 107°42′41″E\r\nTransportasi umum\r\nKAI Commuter:Stasiun CimekarCB\r\nKCIC:Stasiun Tegalluar Whoosh\r\nPemilik\r\nPemerintah Kota Bandung\r\nOperator\r\nPemerintah Kota Bandung\r\nKapasitas\r\n38.000\r\nPermukaan\r\nManila grass\r\nKonstruksi\r\nMulai pembangunan\r\nOktober 2009\r\nDibuka\r\nMaret 2013\r\nBiaya\r\nRp545 miliar\r\nArsitek\r\nPenta Architecture\r\nPemakai\r\nPersib Bandung (2016–2018, 2022–Sekarang)\r\nPersikab Bandung (2023–2024)'),
(3, 'Stadion Gelora Bung Karno', 'gbk.jpeg', 2, 2001, 'Informasi stadion\r\nNama lama\r\nStadion Utama Senayan\r\n(sampai 24 September 1962)\r\nStadion Utama Gelora Senayan\r\n(1969–17 Januari 2001)\r\nPemilik\r\nPemerintah Indonesia\r\nKementerian Sekretariat Negara Republik Indonesia\r\nOperator\r\nPusat Pengelolaan Kompleks Gelora Bung Karno\r\nLokasi\r\nLokasi\r\nGelora, Tanah Abang, Jakarta Pusat, DKI Jakarta, Indonesia\r\nKoordinat\r\n6°13′7″S 106°48′9″E\r\nTransportasi umum\r\nKAI Commuter:\r\nStasiun Sudirman (C)\r\nStasiun Palmerah (R)\r\nMRT Jakarta: Stasiun Istora (M)\r\nBRT Transjakarta:\r\nHalte Gelora Bung Karno (1 3F 6V 9C 10H 13C)\r\nHalte Senayan JCC (3F 9 9A 10H)\r\nLintas Perbatasan Transjakarta: B21, S21, T11\r\nBus kota Transjakarta: 1B, 1F, 1N, 1P, 4A, 6M, GR1\r\nKonstruksi\r\nMulai pembangunan\r\n8 Februari 1960; 64 tahun lalu (seluruh kompleks)\r\nDibuka\r\n21 Juni 1962; 61 tahun lalu\r\nDirenovasi\r\n2016–2018\r\nDitutup\r\n2016–2018\r\nBiaya pembuatan\r\n$12.500.000 (1958, seluruh kompleks)\r\nRp 769,69 miliar (2016–2018)[1]\r\nArsitek\r\nFriedrich Silaban\r\nData teknis\r\nPermukaan\r\nZoysia [en][3]\r\nKapasitas\r\n77.193[2]\r\nSejarah kapasitas\r\n110.000 (1962–2007)\r\n88.083 (2007–2016)\r\n77.193 (2018–sekarang)\r\nSuite eksekutif\r\n4[4]\r\nUkuran lapangan\r\n105 x 68 m (344 x 223 ft)\r\nRekor kehadiran\r\n150.000\r\nPersib Bandung v PSMS Medan\r\n(23 Februari 1985)[5]\r\nSitus web\r\nGBK.id\r\nPemakai\r\nTim nasional sepak bola Indonesia (pertandingan tertentu)\r\nPersija Jakarta (2008–2016, 2018–2020,2024-2025)[6'),
(6, 'Stadion Kapten I Wayan Dipta', 'bali.jpeg', 3, 1977, 'Stadion Kapten I Wayan Dipta adalah sebuah stadion multifungsi di Gianyar, Bali, Indonesia dengan kapasitas 15.860 kursi penonton. Fungsi utama stadion ini adalah untuk menyelenggarakan pertandingan sepak bola. Dahulu stadion ini merupakan markas kesebelasan asal Gianyar, yakni Persegi Gianyar. Setelah klub tersebut sudah tidak aktif, maka stadion ini hampir tidak difungsikan lagi untuk waktu yang lama. Sejak bergulirnya Liga Primer Indonesia, Stadion Dipta kembali difungsikan dan untuk sementara menjadi homebase satu-satunya kesebelasan asal Pulau Dewata yakni Bali Devata FC. Sejak tahun 2015, stadion ini dipakai oleh Bali United F.C.  Pada tahun 2014 Stadion Dipta merupakan markas Bali United Pusam yang bermain di kompetisi Indonesia Super League yang sebelumnya tim ini bernama Persisam Putra Samarinda yang bermarkas di Stadion Segiri, Kota Samarinda, Kalimantan Timur.  Stadion Kapten I Wayan Dipta pernah menjadi tuan rumah Piala Presiden 2015, 2017, dan 2018, dan pernah menggelar turnamen pramusim bernama Bali Island Cup 2015, 2016, dan 2017.'),
(7, 'Stadion Manahan', 'manahan.jpeg', 4, 1989, 'Stadion Manahan (bahasa Jawa: ꦱꦼꦠꦣꦶꦪꦺꦴꦤ꧀ꦩꦤꦲꦤ꧀, translit. Setadhiyon Manahan) adalah sebuah stadion sepak bola yang berada di kota Surakarta, Jawa Tengah, Indonesia. Stadion berkapasitas 20.000 penonton[1] ini merupakan markas dari klub Persis Surakarta.  Manahan merupakan stadion pertama di Indonesia yang menjadi tuan rumah event olahraga difabel terbesar di Asia Tenggara ASEAN Para Games 2011. Stadion ini diresmikan pada tanggal 21 Februari 1998 oleh Presiden Republik Indonesia, Soeharto. Saat ini sebagian besar digunakan untuk pertandingan sepak bola dan digunakan sebagai tempat rumah Persis Surakarta.  Dilihat dari letak geografis, Stadion Manahan di Surakarta cukup strategis. Berdiri megah di tengah-tengah pusat kota, berdekatan dengan stasiun kereta, terminal,bandara, hotel, jalan raya dan pusat perbelanjaan menjadikan Stadion Manahan sebagai salah satu yang paling representatif dalam menggelar event olahraga skala nasional dan internasional olahraga. Stadion ini terletak di pusat Kota Surakarta, tepatnya di Jalan Adi Sucipto, Manahan, Banjarsari, Surakarta. Berjarak 9 kilometer dari Bandara Internasional Adisumarmo.  September 2008, stadion Manahan terpaksa ditutup karena tengah dilakukan renovasi stadion. Proyek renovasi drainase lapangan yang menelan biaya sekitar 1,6 miliar rupiah adalah untuk menghilangkan image negatif dari stadion Manahan sebagai stadion pelanggan banjir. Semua permukaan lapangan mengalami perombakan dan perbaikan. Rumput hijau yang menutup permukaan lapangan, semuanya dicabut digantikan dengan rumput jenis baru. Jenis rumput Dactylon Cynodon (rumput bermuda) sengaja didatangkan dari Batam untuk ditanam di lapangan stadion Manahan. Sedangkan konstruksi drainase lapangan Manahan yang terdiri dari pipa-pipa dan kain filter pasir, terpaksa didatangkan dari negara tetangga, Malaysia.  Untuk menutup permukaan lapangan, dibutuhkan pasir sebanyak 1600 m3. Pasirnya sendiri didatangkan dari pantai Samas Yogyakarta, yang tidak banyak memiliki kandungan garam. Dari proyek renovasi tersebut, akhirnya stadion Manahan berhasil melepas predikat buruknya sebagai stadion pelanggan banjir. Sekarang, meski hujan deras mengguyur dari atas stadion, lapangan Manahan tidak akan lagi tampak genangan air yang bisa menyebabkan banjir. Hal ini pun menghapus julukan stadion Manahan yang sebelumnya kerap disebut stadion pelanggan banjir.  Juli 2009, setelah menunggu hingga berbulan-bulan, akhirnya seluruh rangkaian renovasi stadion Manahan telah rampung dikerjakan. Stadion Manahan pun kembali dibuka dan difungsikan. Pekan Olah Raga Provinsi Jawa Tengah (PORPROV JATENG) 2009, menjadi event pertama yang digelar di stadion Manahan pasca stadion tersebut mengalami renovasi.  Pada Agustus 2018, Stadion Manahan direnovasi besar-besaran dan diperkirakan akan selesai pada akhir 2019. Stadion Manahan di Surakarta akan segera menjadi satu di antara stadion mewah yang ada di Indonesia. Markas klub Persis Surakarta ini bahkan disebut-sebut akan menjadi Stadion Utama Gelora Bung Karno mini, setelah selesai direnovasi.'),
(8, 'Stadion Gelora Sriwijaya', 'sriwijaya.jpg', 5, 2001, 'Stadion yang mulai bangun pada tanggal 1 Januari 2001 ini ditujukan untuk menyelenggarakan PON XVI ketika Kota Palembang ditunjuk sebagai penyelenggara pada tanggal 2 September 2004. Stadion ini diberi nama berdasarkan kemaharajaan maritim Sriwijaya yang berpusat di Palembang dan berhasil mempersatukan wilayah barat Nusantara pada abad 7 sampai dengan abad 12. Selain itu stadion ini juga merupakan markas dari klub sepak bola Indonesia, Sriwijaya FC. Stadion ini dipakai sebagai salah satu stadion yang menyelenggarakan pertandingan dalam Piala Asia 2007 sebagai pendamping Stadion Utama Gelora Bung Karno pada hari pertandingan ketiga dan juga perebutan tempat ketiga.Hasil verifikasi AFC menjadikan Stadion ini satu dari 3 stadion standar A AFC di Indonesia.[5] Stadion ini menjadi stadion utama pada upacara pembukaan dan penutupan SEA Games 2011 di Palembang.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'hilmy', '12345'),
(10, '123', '$2y$10$xV3YYU1n3NjCiTssK11Bwe.1F9Z8.rkRLymDP75O989hpFoS6rC7C'),
(11, 'pw', '$2y$10$FyBbUs4AfZ4hdRruxfwpdejWlRmcNBLMacw8DEm/HMYWCBK8WAgJO'),
(12, 'kami', '$2y$10$ruKW8qJdeiDMOH7sJlsa3.DdXaGT9SmsU.SFL86aZ/ZDWUOCahf..'),
(13, 'pw12', '$2y$10$YusPTaQY/tDBQgqouVg0mu3sU/HQwLweB.ZF2OpqN6W4VwXFkcDU6'),
(14, 'hilmi', '$2y$10$Gc33g/ZJsGJLGmuD6xYYp.fbkaMMYk1VcBBswStsMiU013BzIWO6q'),
(15, 'debaysigantengkomplit', '$2y$10$xrYjT6uAg5TrW2V5TUU7COZD5mqXfe.tJA55FpiQoHZuX3dppC3Da'),
(16, '12345678', '$2y$10$GAoom5ClNeqxCLtsBHNJGehHlDMKwQKBdEJqrzgvin2h7XVKk.dsi'),
(17, 'adasaaja', '$2y$10$7hp0heHP9tO09Oo/78NBMOxmh9VWp14MItVbD1rl6ropsB4ZRodUG'),
(18, 'hilmi123', '$2y$10$12wXqxDxduMB72pM7BBBSuqVMbQZ5Y5Q2ycbASZyxuL4GA46SlJrO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sport`
--
ALTER TABLE `sport`
  ADD CONSTRAINT `sport_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
