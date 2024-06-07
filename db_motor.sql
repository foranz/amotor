-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 18.18
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `name`) VALUES
(1, 'pemas', '00', 'pemas'),
(2, 'nia', '01', 'nia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(20, 'HONDA BEAT THN 2022', '12500000', 'images/mtr1.jpg', 1, '12500000', 'bt22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `nomor` varchar(20) DEFAULT NULL,
  `status` enum('accepted','rejected') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id`, `nama`, `email`, `nomor`, `status`) VALUES
(29, 'bungaaa', 'adasff@gmail.com', '08556498496', 'accepted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `status` enum('selesai','ditolak') DEFAULT NULL,
  `initial_payment` decimal(10,2) NOT NULL,
  `remaining_payment` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `status`, `initial_payment`, `remaining_payment`) VALUES
(15, 'foranz', '27932@lspinformatika.id', '08564997956', 'sacacasca', 'Dana', 'scopy matic 2023(1)', '15000000', NULL, 0.00, 0.00),
(16, 'wawa', '27932@lspinformatika.id', '254684645', 'acasfaefsa', 'cod', 'scopy matic 2023(1)', '15000000', NULL, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `status` enum('selesai','ditolak') DEFAULT NULL,
  `detail` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `status`, `detail`) VALUES
(12, 'scoopy bekas 2023', '1500000', 1, 'images/y.png', 'sc23', NULL, ''),
(13, 'scopy matic 2023', '15000000', 1, 'images/be.jpg', 'sc22', NULL, '**(BUKAN KENDARAAN BODONG ATAUPUN KENDARAAN CURIAN)* KEAMANAN FAKTUR YANG KAMI BERIKAN ADALAH:*  📁. PLAT ASLI BUKAN DUPLIKAT 📁. STNK & BPKB ASLI 📁. MASIH MULUS STANDAR PABRIK* '),
(14, 'HONDA BEAT THN 2022', '12500000', 2, 'images/mtr1.jpg', 'bt22', NULL, '-STNK & BPKB LENGKAP -PAJAK MASIH HIDUP -MESIN STANDAR NORMAL -CAP MULU -LAYAK PAKAI -STATER NORMAL -KELISTRIKAN NORMAL -LAMPU NORMAL -BODY MULUS -CAT ORIGINAL'),
(15, 'honda vario thn 2021', '6500000', 1, 'images/mtr2.jpg', 'vr21', NULL, 'Surat* lengkap(stnk bpkb faktur) Siap Bantu Pengurusan Berkas Untuk Luar Kota\r\n✔Mutasi Surat-surat &Plat.\r\n✔Cabut Berkas. \r\n✔Balik Nama. '),
(16, 'Honda BeAT CBS Sporty ', '12300000', 2, 'images/mtr3.jpg', 'cb24', NULL, 'Tipe Mesin 4 – Langkah, SOHC, eSP\r\nVolume Langkah 109.5cc\r\nSistem Suplai Bahan Bakar Injeksi (PGM-FI)\r\nDiameter X Langkah 47.0 x 63.1 mm\r\nTipe Tranmisi Otomatis, V-Matic\r\nRasio Kompresi 10.0 : 1'),
(17, 'honda genio 2023', '3500000', 2, 'images/mtr4.jpg', 'gn23', NULL, 'KELENGKAPAN \r\n-STNK & BPKB LENGKAP\r\n-PAJAK MASIH HIDUP\r\n-MESIN STANDAR NORMAL\r\n-CAP MULU\r\n-LAYAK PAKAI\r\n-STATER NORMAL\r\n-KELISTRIKAN NORMAL\r\n-LAMPU NORMAL\r\n-BODY MULUS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
