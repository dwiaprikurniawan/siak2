-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2022 pada 03.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `img_cover` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `img_cover`, `created_at`) VALUES
(4, 'KIRAB MERAH PUTIH', '<h1> </h1>\r\n\r\n<p><strong>KIRAB MERAH PUTIH</strong></p>\r\n\r\n<h3><strong>Drum corps Pelopor Cenderawasih Akpol yang dimainkan oleh Taruna Akpol Tk IV Angkatan 54 Batalyon Promoter memeriahkan Kirab Merah Putih dalam ranga peringatan HUT ke 77 Kemerdekaan RI dibuka oleh Presiden Republik Indonesi Ir. H. Joko widodo didampingi oleh Anggota Wantimpres Habib Lutfi Bin Ali Bin Yahya dan Kapolri Jenderal Polisi Drs. Listyo Sigit Prabowo, M.Si.</strong></h3>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/08/301762939_146476237734428_6833667743427507048_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/08/301762939_146476237734428_6833667743427507048_n.jpg\"></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/08/301548196_589092359614631_4556902366487384942_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/08/301548196_589092359614631_4556902366487384942_n.jpg\"></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/08/301814026_637017041105949_2423949943170181515_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/08/301814026_637017041105949_2423949943170181515_n.jpg\"></a></p>\r\n', 'aa.jpg', '2022-08-30 02:05:42'),
(5, ' supervisi ke Resimen Chandradimuka ', '<p>Gubernur Akpol Irjen Pol Drs. Suroto, M.Si. dan Ibu Asuh Taruna Akpol Ny. Santy Suroto melaksanakan supervisi ke Resimen Chandradimuka untuk cek pelaksanaan Diksarintra Akademi TNI dan Akpol T.A. 2022.</p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/08/300360355_1034423583899419_2146527139382576139_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/08/300360355_1034423583899419_2146527139382576139_n.jpg\"></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/08/300352776_151178657581167_1401185009223269000_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/08/300352776_151178657581167_1401185009223269000_n.jpg\"></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/08/300654631_759103195305263_4419403558445240833_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/08/300654631_759103195305263_4419403558445240833_n.jpg\"></a></p>\r\n', 'zz.jpg', '2022-08-30 02:08:00'),
(6, 'Bakti Sosial bertajuk “Bhayangkara Presisi Melayani”', '<p><strong>Batalyon SIPSS 2022 Dharma Cendikia, melaksanakan kegiatan Bakti Sosial bertajuk “Bhayangkara Presisi Melayani”, Sabtu (16/07/2022), di Pondok Pesantren At-Taqwa Tembalang, Semarang.</strong></p>\r\n\r\n<p><strong>Kegiatan Bakti Sosial yang menyasar santri pondok dan warga sekitar pondok tersebut diantaranya berupa pemeriksaan kesehatan gratis oleh siswa SIPSS yang berprofesi dokter, Sosialisasi Bahaya Narkoba, Kerja Bakti Pembersihan Lingkungan, serta pemberian tali asih berupa sembako dan alat kebersihan.</strong></p>\r\n\r\n<p><strong>Dalam kesempatan tersebut Brigadir Siswa Aghnia Al Hakiki,S.E, selaku ketua panita, mengungkapkan kegiatan tersebut merupakan wujud pengabdian siswa SIPSS 2022 kepada masyarakat dan sarana pembelajaran sebagai calon anggota Polri dalam melindungi dan melayani masyarakat.</strong></p>\r\n\r\n<p><strong>AKBP Supriyanto, S.I.K,M.Si, Selaku Komandan Batalyon SIPSS 2022 juga mengungkapkan bahwa melalui kegiatan ini, para Siswa SIPSS 2022 diharapkan mampu memperoleh pengalaman sebagai bekal saat bertugas nanti dalam melindungi,mengayomi, dan melayani masyarakat.</strong></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/07/293661420_1387714235053856_710781548106037265_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/07/293661420_1387714235053856_710781548106037265_n.jpg\" xss=removed></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/07/293371204_3739825712910577_1987495075708626122_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/07/293371204_3739825712910577_1987495075708626122_n.jpg\" xss=removed></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/07/293540238_365642055684460_2115953990246420246_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/07/293540238_365642055684460_2115953990246420246_n.jpg\" xss=removed></a></p>\r\n', '293661420_1387714235053856_710781548106037265_n-600x600.jpg', '2022-08-30 01:32:26'),
(7, 'Upacara Prasetya Perwira tahun 2022 di Istana Merdeka', '<p><strong>Jakarta (14/7), 754 Perwira Remaja Akademi TNI dan Akademi Kepolisian dilantik oleh Presiden Republik Indonesia dalam acara Upacara Prasetya Perwira tahun 2022 di Istana Merdeka. Terdiri dari 292 Perwira Remaja TNI Angkatan Darat, 107 Perwira Remaja TNI Angkatan Laut, 109 Perwira Remaja TNI Angkatan Udara, dan 246 Perwira Remaja Kepolisian, dengan total 754 Perwira Remaja (689 Pria, 65 Wanita).</strong></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/07/292865575_1439740929877854_1567132357250761921_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/07/292865575_1439740929877854_1567132357250761921_n.jpg\" xss=removed></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/07/293137564_406378131465615_6859534001803663246_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/07/293137564_406378131465615_6859534001803663246_n.jpg\" xss=removed></a></p>\r\n\r\n<p><a href=\"https://akpol.ac.id/wp-content/uploads/2022/07/293667123_1056060551672166_5501674720943908834_n.jpg\" target=\"_self\"><img alt=\"\" src=\"https://akpol.ac.id/wp-content/uploads/2022/07/293667123_1056060551672166_5501674720943908834_n.jpg\" xss=removed></a></p>\r\n', '292865575_1439740929877854_1567132357250761921_n-600x600.jpg', '2022-08-30 01:33:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_fasilitas`
--

CREATE TABLE `daftar_fasilitas` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(299) NOT NULL,
  `id_fasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_fasilitas`
--

INSERT INTO `daftar_fasilitas` (`id`, `nama_gambar`, `id_fasilitas`) VALUES
(5, '1-scaled.jpg', 8),
(6, '2-scaled.jpg', 8),
(8, '3-scaled.jpg', 8),
(9, '4-scaled.jpg', 8),
(10, '6-2-scaled.jpg', 8),
(11, '19-e1593685670781.jpg', 8),
(12, '2-1-e1593685834829.jpg', 9),
(13, '5-1-scaled.jpg', 9),
(14, '7-scaled.jpg', 9),
(15, '9-1-scaled.jpg', 9),
(16, '23-scaled.jpg', 9),
(17, '35-scaled.jpg', 9),
(18, '4-1-scaled.jpg', 10),
(19, '4-2-e1594020123273.jpg', 10),
(20, '5-3-scaled.jpg', 10),
(21, '16-1-e1594018166504-scaled.jpg', 10),
(22, '17-1.jpg', 10),
(23, '22-1-e1594017211943.jpg', 10),
(24, '1-3-scaled.jpg', 12),
(25, '3-3-scaled.jpg', 12),
(26, '33-scaled.jpg', 12),
(27, '38-1-scaled.jpg', 12),
(28, 'RUANG-PERPUS-3-scaled.jpg', 12),
(29, 'RUANG-PERPUS-4-scaled.jpg', 12),
(30, '2-6-e1594016658239-scaled.jpg', 11),
(31, '3-5-e1594016595989-scaled.jpg', 11),
(32, '5-4-e1594016482870-scaled.jpg', 11),
(33, '7-3-e1594016315910-scaled.jpg', 11),
(34, '6-3-e1594016378529-scaled.jpg', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`) VALUES
(8, 'Olahraga'),
(9, 'Gedung'),
(10, 'Kantor'),
(11, 'Ibadah'),
(12, 'Pengajaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` char(100) NOT NULL,
  `cp` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hubungi_kami`
--

INSERT INTO `hubungi_kami` (`id`, `alamat`, `email`, `cp`) VALUES
(3, '<p>aw</p>\r\n', 'admin-daops-sum@gmail.com', 'awa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_akpol`
--

CREATE TABLE `prestasi_akpol` (
  `id` int(11) NOT NULL,
  `judul` varchar(299) NOT NULL,
  `isi` text NOT NULL,
  `img_cover` varchar(299) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi_akpol`
--

INSERT INTO `prestasi_akpol` (`id`, `judul`, `isi`, `img_cover`, `created_at`) VALUES
(7, 'bawang', '<p>bawaaaaa</p>\r\n', 'Akademi-kepolisian-Akpol.jpg', '2022-08-23 03:47:46'),
(8, 'hkh', '<p>jkhk</p>\r\n', 'Akademi-kepolisian-Akpol1.jpg', '2022-08-23 04:10:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `jenis` enum('visi','misi','sejarah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `isi`, `jenis`) VALUES
(13, '<p>Akpol menjadi lembaga pendidikan tinggi Polri yang menghasilkan perwira Polri Profesional, Cerdas, Bermoral dan Modern yang berwawasan global dan berstandar internasional</p>\r\n', 'visi'),
(14, '<ol>\r\n <li>\r\n <p>Menyelenggarakan pendidikan pembentukan perwira Polri melalui kegiatan pengajaran, pelatihan dan pengasuhan secara bertahap dan berkesinambungan pada setiap tingkat pendidikan;</p>\r\n </li>\r\n <li>\r\n <p>menyelenggarakan kegiatan penelitian dalam upaya pengembangan ilmu pengetahuan dan teknologi yang terkait dengan bidang kepolisian;</p>\r\n </li>\r\n <li>\r\n <p>menyelenggarakan kegiatan pengabdian masyarakat yang terkait dengan bidang kepolisian;</p>\r\n </li>\r\n <li>menyelenggarakan tata kelola institusi yang berorientasi kepada pelayanan prima dan berkembang menjadi pusat unggulan (centre of excellent);</li>\r\n <li>mengembangkan kerjasama dan jejaring kerja dengan berbagai lembaga didalam dan luar negeri.</li>\r\n</ol>\r\n', 'misi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `gambar`) VALUES
(8, 'aa1.jpg'),
(9, 'back1.jpg'),
(10, 'ak1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` char(100) NOT NULL,
  `password` varchar(299) NOT NULL,
  `email` char(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(3, 'fajarhckd', '$2y$10$KCJjNApGFCAQgmYYJBShGOD8guGHUuZV8LBYYgPIwCHXO7gbrvCdW', 'fajarhdytt30@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_fasilitas`
--
ALTER TABLE `daftar_fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi_akpol`
--
ALTER TABLE `prestasi_akpol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `daftar_fasilitas`
--
ALTER TABLE `daftar_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `prestasi_akpol`
--
ALTER TABLE `prestasi_akpol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_fasilitas`
--
ALTER TABLE `daftar_fasilitas`
  ADD CONSTRAINT `daftar_fasilitas_ibfk_1` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
