-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mei 2018 pada 03.42
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `Judul` varchar(50) NOT NULL,
  `Penulis` varchar(20) NOT NULL,
  `Isi` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`Judul`, `Penulis`, `Isi`, `ID`) VALUES
('Asal usul desa Gemuruh', 'Mahardhika', 'Sejarah terbentuknya desa Gemuruh dari letelatur ataupun dari cerita orang yang terdahulu tidak mengetahui kapan desa Gemuruh berdiri dan terbentuk, hanya ada cerita bahwa nama desa Gemuruh diambil dari suara pantulan air ( grujug ) yang bersuara â€œ GEMURUH â€œ yang kemungkinan sebagai cikal bakal nama desa Gemuruh. Grujugan pada saluran irigasi yang ada di desa Gemuruh dibangun semasa penjajahan Belanda kurang lebih pada tahun 1900, hal ini yang mungkin menjadi asal muasal sejarah desa Gemuruh terbentuk.', 25),
('Perbaikan jalan Oleh Pemerintah', 'Mahardhika', 'Pada tanggal 20 desember 2018 mendatang pemerintah kabupaten akan mengadakan perbaikan jalan pada daerah desa wiragunan mengingat jalan tersebut sudah penuh dengan lobang juga bebatuan yang din khawatirkan dapat mengganggu pengguna jalan .\r\n\r\nDemikian Sekilas info Hari ini Untuk Info Lebih lanjut bisa mengirim pesan ke Admin Atau bisa menghubungi langsung pihak pemerintah pada nomer 09938278738 .\r\n\r\nTerima Kasih', 27),
('vds', 'ds', 'dscsz', 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `Nama` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`Nama`, `Password`, `Email`, `ID`) VALUES
('bis', '234', 'GhaniHindam@gmail.com', 18),
('Yogs', '123qwertyuiop', 'Yogs@gmail.com', 19),
('dika', '2018', 'maahardhika@gmail.com', 25),
('maha', '123', 'maya@gmail.com', 26),
('dika', '123', 'dika@gmail.com', 27),
('lala', '123', 'aa@gmail.com', 28),
('1', '2', '1@gmail.com', 29),
('desi', '12345', 'Desi@gmail.com', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
