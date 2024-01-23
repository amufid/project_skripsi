-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2023 pada 09.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pemilihan_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif_rsm`
--

CREATE TABLE `alternatif_rsm` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `kap_mesin` varchar(25) NOT NULL,
  `kap_penumpang` varchar(25) NOT NULL,
  `th_pembuatan` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `transmisi` varchar(25) NOT NULL,
  `pajak` varchar(25) NOT NULL,
  `c1` varchar(25) NOT NULL,
  `c2` varchar(25) NOT NULL,
  `c3` varchar(25) NOT NULL,
  `c4` varchar(25) NOT NULL,
  `c5` varchar(25) NOT NULL,
  `c6` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alternatif_rsm`
--

INSERT INTO `alternatif_rsm` (`id`, `kode`, `merk`, `model`, `kap_mesin`, `kap_penumpang`, `th_pembuatan`, `harga`, `transmisi`, `pajak`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(1, 'A01', 'Kia', 'Carnival', '2900', '7', '2001', '39.000.000', 'MT', '1.155.000', '5', '4', '1', '1', '3', '2'),
(2, 'A02', 'Mitsubishi', 'Lancer Evo 4', '1600', '5', '2002', '49.000.000', 'MT', '2.378.000', '3', '2', '1', '1', '3', '3'),
(4, 'A03', 'Suzuki', 'Escodo XL7', '2500', '7', '2005', '69.000.000', 'AT', '1.890.000', '5', '4', '1', '1', '5', '2'),
(5, 'A04', 'Datsun', 'GO + Panca', '1200', '5', '2016', '75.000.000', 'MT', '1.449.000', '2', '2', '4', '1', '3', '2'),
(6, 'A05', 'Toyota', 'Kijang LGX 1.8', '1800', '7', '2003', '79.000.000', 'MT', '1.575.000', '4', '4', '1', '1', '3', '2'),
(7, 'A06', 'Honda', 'New City Vtech', '1500', '5', '2006', '79.000.000', 'MT', '2.637.000', '3', '2', '1', '1', '3', '3'),
(8, 'A07', 'Honda', 'Odyssy 2.3 L', '2300', '7', '2001', '79.000.000', 'AT', '3.167.000', '5', '4', '1', '1', '5', '4'),
(9, 'A08', 'Honda', 'New City Vtech', '1500', '5', '2008', '89.000.000', 'MT', '2.867.000', '3', '2', '1', '2', '3', '3'),
(10, 'A09', 'Toyota', 'Xenia X.1.3', '1300', '7', '2012', '104.000.000', 'MT', '1.305.000', '2', '4', '2', '2', '3', '2'),
(11, 'A10', 'Honda', 'New City 5', '1500', '5', '2008', '117.000.000', 'AT', '2.867.000', '3', '2', '1', '2', '5', '3'),
(12, 'A11', 'Honda', 'Brio E ', '1200', '5', '2016', '124.000.000', 'MT', '2.079.000', '2', '2', '4', '3', '3', '2'),
(13, 'A12', 'Daihatsu', 'New Sirion ', '1300', '5', '2016', '128.000.000', 'AT', '2.331.000', '2', '2', '4', '3', '5', '3'),
(14, 'A13', 'Honda', 'Jazz RS', '1500', '5', '2012', '158.000.000', 'MT', '2.600.000', '3', '2', '2', '3', '3', '3'),
(15, 'A14', 'Mitsubishi', 'Pajero 4x4 V6 Bensin', '3000', '7', '2000', '175.000.000', 'MT', '3.612.000', '5', '4', '1', '4', '3', '4'),
(16, 'A15', 'Isuzu', 'Grand Touring Turbo', '2500', '7', '2010', '209.000.000', 'MT', '2.841.000', '5', '4', '2', '5', '3', '3'),
(17, 'A16', 'Mitsubishi', 'Xpander exceed', '1500', '7', '2019', '227.000.000', 'AT', '3.738.000', '3', '4', '5', '5', '5', '4'),
(18, 'A17', 'Honda', 'Odyssy RB 3', '2400', '7', '2012', '244.000.000', 'AT', '5.070.000', '5', '4', '2', '5', '5', '5'),
(19, 'A18', 'Honda', 'City HB RS', '1500', '5', '2021', '259.000.000', 'MT', '3.529.000', '3', '2', '5', '5', '3', '4'),
(20, 'A19', 'Mitsubishi', 'Pajero Dakar Limited', '2400', '7', '2016', '438.000.000', 'AT', '8.253.000', '5', '4', '4', '5', '5', '5'),
(21, 'A20', 'Toyota', 'Camri', '2400', '5', '2002', '80.000.000', 'AT', '1.360.000', '5', '2', '1', '2', '5', '2'),
(22, 'A21', 'Honda', 'Jazz RS', '1500', '5', '2012', '159.000.000', 'AT', '2.521.000', '3', '2', '2', '3', '5', '3'),
(23, 'A22', 'Nissan', 'Xtrail', '2500', '5', '2006', '75.000.000', 'AT', '1.953.000', '5', '2', '1', '1', '5', '2'),
(24, 'A23', 'Toyota', 'Avanza G ', '1300', '7', '2013', '130.000.000', 'MT', '2.557.000', '2', '4', '3', '3', '3', '3'),
(25, 'A24', 'Suzuki', 'Escodo', '1600', '7', '2002', '64.000.000', 'MT', '1.281.000', '3', '4', '1', '1', '3', '2'),
(26, 'A25', 'Honda', 'Jazz RS', '1500', '5', '2010', '144.000.000', 'MT', '2.480.000', '3', '2', '2', '3', '3', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c1_kapmesin`
--

CREATE TABLE `c1_kapmesin` (
  `id` int(11) NOT NULL,
  `sub_kriteria` varchar(25) NOT NULL,
  `bobot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c1_kapmesin`
--

INSERT INTO `c1_kapmesin` (`id`, `sub_kriteria`, `bobot`) VALUES
(1, '&lt; 1200cc', '1'),
(2, '1200cc – 14999cc', '2'),
(3, '1500cc – 1799cc', '3'),
(4, '1800cc – 2000cc', '4'),
(5, '> 2000cc', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c2_kappenumpang`
--

CREATE TABLE `c2_kappenumpang` (
  `id` int(11) NOT NULL,
  `sub_kriteria` varchar(25) NOT NULL,
  `bobot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c2_kappenumpang`
--

INSERT INTO `c2_kappenumpang` (`id`, `sub_kriteria`, `bobot`) VALUES
(1, '2 orang', '1'),
(2, '5 orang', '2'),
(11, '6 orang', '3'),
(12, '7 orang', '4'),
(13, '8 orang', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c3_thpembuatan`
--

CREATE TABLE `c3_thpembuatan` (
  `id` int(11) NOT NULL,
  `sub_kriteria` varchar(25) NOT NULL,
  `bobot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c3_thpembuatan`
--

INSERT INTO `c3_thpembuatan` (`id`, `sub_kriteria`, `bobot`) VALUES
(1, '&lt; 2010', '1'),
(2, '2010 - 2013', '2'),
(3, '2013 - 2015', '3'),
(4, '2016 - 2018', '4'),
(5, '> 2018', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c4_harga`
--

CREATE TABLE `c4_harga` (
  `id` int(11) NOT NULL,
  `sub_kriteria` varchar(25) NOT NULL,
  `bobot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c4_harga`
--

INSERT INTO `c4_harga` (`id`, `sub_kriteria`, `bobot`) VALUES
(1, '&lt; 80jt', '1'),
(2, '80jt - 120jt', '2'),
(4, '121jt - 160jt', '3'),
(5, '161jt - 200jt', '4'),
(7, '> 200jt', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c5_transmisi`
--

CREATE TABLE `c5_transmisi` (
  `id` int(11) NOT NULL,
  `sub_kriteria` varchar(25) NOT NULL,
  `bobot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c5_transmisi`
--

INSERT INTO `c5_transmisi` (`id`, `sub_kriteria`, `bobot`) VALUES
(1, 'Manual(MT)', '3'),
(2, 'Auto(AT)', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c6_pajak`
--

CREATE TABLE `c6_pajak` (
  `id` int(11) NOT NULL,
  `sub_kriteria` varchar(25) NOT NULL,
  `bobot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c6_pajak`
--

INSERT INTO `c6_pajak` (`id`, `sub_kriteria`, `bobot`) VALUES
(1, '&lt; 1jt', '1'),
(2, '1jt – 2jt', '2'),
(3, '2,1jt – 3jt', '3'),
(4, '3,1jt – 4jt', '4'),
(5, '> 4jt', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `kap_mesin` varchar(25) NOT NULL,
  `kap_penumpang` varchar(25) NOT NULL,
  `th_pembuatan` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `transmisi` varchar(25) NOT NULL,
  `pajak` varchar(25) NOT NULL,
  `c1` varchar(25) NOT NULL,
  `c2` varchar(25) NOT NULL,
  `c3` varchar(25) NOT NULL,
  `c4` varchar(25) NOT NULL,
  `c5` varchar(25) NOT NULL,
  `c6` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_alternatif`
--

INSERT INTO `data_alternatif` (`id`, `kode`, `merk`, `model`, `kap_mesin`, `kap_penumpang`, `th_pembuatan`, `harga`, `transmisi`, `pajak`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(22, 'A01', 'Toyota', 'Avanza 1.5 Veloz', '1500', '7', '2019', '205.000.000', 'MT', '3.300.000', '3', '4', '5', '5', '3', '4'),
(23, 'A02', 'Toyota', 'Avanza 1.5 Veloz', '1500', '7', '2014', '155.000.000', 'MT', '2.200.000', '3', '4', '3', '3', '3', '3'),
(24, 'A03', 'Daihatsu', 'Ayla 1.2 X', '1200', '5', '2019', '126.000.000', 'MT', '1.800.000', '2', '2', '5', '3', '3', '2'),
(26, 'A04', 'Daihatsu', 'Ayla1.0 D', '1000', '5', '2020', '113.000.000', 'MT', '1.500.000', '1', '2', '5', '2', '3', '2'),
(27, 'A05', 'Daihatsu', 'Ayla1.0 D', '1000', '5', '2014', '81.000.000', 'MT', '1.100.000', '1', '2', '3', '2', '3', '2'),
(28, 'A06', 'Honda', 'BR-V 1.5 Prestige', '1500', '7', '2018', '213.000.000', 'AT', '4.300.000', '3', '4', '4', '5', '5', '5'),
(29, 'A07', 'Honda', 'Brio 1.2 RS', '1200', '5', '2017', '149.000.000', 'MT', '1.900.000', '2', '2', '4', '3', '3', '2'),
(30, 'A08', 'Honda', 'Brio 1.2 RS', '1200', '5', '2017', '149.000.000', 'MT', '1.900.000', '2', '2', '4', '3', '3', '2'),
(31, 'A09', 'Honda', 'Brio Satya 1.2 E', '1200', '5', '2020', '179.000.000', 'AT', '1.900.000', '2', '2', '5', '4', '5', '2'),
(32, 'A10', 'Wuling', 'Cortez 1.5 LT LUX Plus', '1500', '7', '2019', '197.000.000', 'AT', '4.000.000', '3', '4', '5', '4', '5', '4'),
(33, 'A11', 'Datsun', 'Go Panca 1.2 T', '1200', '5', '2015', '82.000.000', 'MT', '1.500.000', '2', '2', '3', '2', '3', '2'),
(34, 'A12', 'Honda', 'HR-V 1.8 Prestige', '1800', '5', '2016', '284.000.000', 'AT', '5.100.000', '4', '2', '4', '5', '5', '5'),
(35, 'A13', 'Honda', 'Jazz 1.5 S', '1500', '5', '2013', '162.000.000', 'AT', '3.100.000', '3', '2', '3', '4', '5', '4'),
(36, 'A14', 'Toyota', 'Kijang Innova 2.0 G', '2000', '7', '2013', '180.000.000', 'MT', '2.800.000', '4', '4', '3', '4', '3', '3'),
(37, 'A15', 'Nissan', 'March 1.2', '1200', '5', '2016', '118.000.000', 'MT', '2.200.000', '2', '2', '4', '2', '3', '3'),
(38, 'A16', 'Nissan', 'Serena 2.0 Highaway', '2000', '7', '2013', '187.000.000', 'AT', '4.800.000', '4', '4', '3', '4', '5', '5'),
(39, 'A17', 'Daihatsu', 'Sirion 1.3', '1300', '5', '2019', '176.000.000', 'AT', '3.100.000', '2', '2', '5', '4', '5', '4'),
(40, 'A18', 'Daihatsu', 'Sirion 1.3 Bensin', '1300', '5', '2015', '114.000.000', 'MT', '1.800.000', '2', '2', '3', '2', '3', '2'),
(41, 'A19', 'Suzuki', 'Splash 1.2 Bensin', '1200', '5', '2014', '106.000.000', 'AT', '1.800.000', '2', '2', '3', '2', '5', '2'),
(42, 'A20', 'Toyota', 'Vios 1.5 G', '1500', '5', '2014', '119.000.000', 'MT', '3.100.000', '3', '2', '3', '2', '3', '4'),
(43, 'A21', 'Toyota', 'Yaris 1.5 TRD', '1500', '5', '2017', '189.000.000', 'MT', '3.300.000', '3', '2', '4', '4', '3', '4'),
(44, 'A22', 'Daihatsu', 'Sigra 1.0 M', '1000', '5', '2019', '114.000.000', 'MT', '1.800.000', '1', '2', '5', '2', '3', '2'),
(45, 'A23', 'Honda', 'CR-V 2.4 RE1', '2400', '5', '2010', '139.000.000', 'AT', '3.300.000', '5', '2', '2', '3', '5', '4'),
(46, 'A24', 'Honda', 'City 1.5 E', '1500', '5', '2017', '238.000.000', 'AT', '4.700.000', '3', '2', '4', '5', '5', '5'),
(47, 'A25', 'Suzuki', 'Karimun Wagon R 1', '1000', '5', '2019', '95.000.000', 'MT', '2.000.000', '1', '2', '5', '2', '3', '2'),
(48, 'A26', 'Toyota', 'Agya 1.2 G TRD', '1200', '5', '2018', '134.000.000', 'AT', '1.900.000', '2', '2', '4', '3', '5', '2'),
(49, 'A27', 'Ford', 'Eco Sport 1.5 Trend', '1500', '5', '2014', '110.000.000', 'MT', '2.600.000', '3', '2', '3', '2', '3', '3'),
(50, 'A28', 'Toyota', 'Yaris 1.5 E', '1500', '5', '2011', '125.000.000', 'AT', '2.200.000', '3', '2', '2', '3', '5', '3'),
(51, 'A29', 'Toyota', 'Yaris 1.5 TRD', '1500', '5', '2017', '189.000.000', 'MT', '3.100.000', '3', '2', '4', '4', '3', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `atribut` varchar(25) NOT NULL,
  `bobot` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `atribut`, `bobot`) VALUES
(1, 'Kapasitas mesin (cc)', 'Benefit', 3),
(2, 'Kapasitas penumpang', 'Benefit', 4),
(3, 'Tahun pembuatan', 'Benefit', 5),
(4, 'Harga', 'Cost', 5),
(5, 'Transmisi', 'Benefit', 3),
(27, 'Pajak tahunan', 'Cost', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `foto`, `password`) VALUES
(1, 'Abdul Mufid', 'mufidabdul500@gmail.com', '1-Abdul_Mufid1.png', '11111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif_rsm`
--
ALTER TABLE `alternatif_rsm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c1_kapmesin`
--
ALTER TABLE `c1_kapmesin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c2_kappenumpang`
--
ALTER TABLE `c2_kappenumpang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c3_thpembuatan`
--
ALTER TABLE `c3_thpembuatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c4_harga`
--
ALTER TABLE `c4_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c5_transmisi`
--
ALTER TABLE `c5_transmisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c6_pajak`
--
ALTER TABLE `c6_pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
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
-- AUTO_INCREMENT untuk tabel `alternatif_rsm`
--
ALTER TABLE `alternatif_rsm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `c1_kapmesin`
--
ALTER TABLE `c1_kapmesin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `c2_kappenumpang`
--
ALTER TABLE `c2_kappenumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `c3_thpembuatan`
--
ALTER TABLE `c3_thpembuatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `c4_harga`
--
ALTER TABLE `c4_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `c5_transmisi`
--
ALTER TABLE `c5_transmisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `c6_pajak`
--
ALTER TABLE `c6_pajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
