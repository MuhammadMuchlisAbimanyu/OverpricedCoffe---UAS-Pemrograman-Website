-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 11.56
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_overpricedcoffe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `image_menu` varchar(255) NOT NULL,
  `name_menu` varchar(255) NOT NULL,
  `price_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `image_menu`, `name_menu`, `price_menu`) VALUES
(1, 'Americano.jpg', 'Americano', 10),
(2, 'Latte.jpg', 'Latte', 12),
(3, 'Cappucino.jpg', 'Cappucino', 15),
(4, 'Racist Coffe.jpg', 'Racist Coffe', 69);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_menu` varchar(255) NOT NULL,
  `price_menu` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `address_user` varchar(255) NOT NULL,
  `phone_number_user` varchar(15) NOT NULL,
  `note` text NOT NULL,
  `bank_account` varchar(16) NOT NULL,
  `payment_slip` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `account_created` varchar(50) NOT NULL,
  `address_user` varchar(255) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `phone_number_user` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `name_user`, `account_created`, `address_user`, `email_user`, `phone_number_user`, `role`) VALUES
(1, 'admin', '$2y$10$I33Q7LFK.7m76yAYyNmIJ.DSpFJTx4VC4Q830pGzQ4vKAKsmJ0kGy', 'Admin', '', 'Jl. Berdua', 'amanyu851@gmail.com', '081350502003', 'admin'),
(2, 'customer', '$2y$10$wAW9QNs0kZyFKmsYYO41.OUnJ82Ri9XdJTvy.7YXtw0QsBQSfYsB6', 'Customer', 'Tuesday, 29-11-22 05:06:41', 'Jl. Sendiri', 'customer@gmail.com', '081350502003', 'customer'),
(5, 'jamaludin', '$2y$10$rHH.7Z7z1oLJ.TmePk5nEOM3JjkKjB1hXaVvmeUTChB.4rmSi8sxS', 'Jamaludin Saputra', 'Tuesday, 29-11-22 05:07:51', 'Jl. Anggur', 'jamalputra@gmail.com', '081223478233', 'customer'),
(6, 'anton', '$2y$10$l33KC9H646Zr18ggz3UYg.HT3liEvfAgkNffSosRZFnvzckv5r/4e', 'Anton Prakoso', 'Tuesday, 29-11-22 05:09:43', 'Jl. Naga', 'antonprak@gmail.com', '085252334234', 'customer'),
(7, 'bambang', '$2y$10$IVfwU7krakYHhA3vEpBCJ.n8R0FkQLg3bLyXu96C/S0p074UZKZPW', 'Bambang Mulya', 'Tuesday, 29-11-22 05:10:50', 'Jl. Semangka', 'bambangmul@gmail.com', '081387228907', 'customer'),
(10, 'hidayat', '$2y$10$hUGyMIH4BSS3S.9r4BrVU.mFww63kTBoh30qQyEEStCOv/jY.NE1S', 'Hidayat Saputra', 'Tuesday, 29-11-22 05:28:41', 'Jl. Jeruk', 'hidayatsap@gmail.com', '085243749576', 'customer'),
(11, 'ahmad', '$2y$10$/cJbYnuNwhZREZuO81/0cOcKsw0M9KNj.CJUAj1Eprmuw4N9SflGK', 'Ahmad Fauzi', 'Tuesday, 29-11-22 05:29:18', 'Jl. Manggis', 'ahmadfau@gmail.com', '081358343132', 'customer'),
(12, 'dani', '$2y$10$qqezFxIbAjTpLeWRa02ffOXGgCQZgAswCTs8.XtIt4wxX0V96Aogi', 'Dani Fachrezi', 'Tuesday, 29-11-22 05:30:25', 'Jl. Toba', 'danifach@gmail.com', '081223741236', 'customer'),
(13, 'muhammad', '$2y$10$SS5ncjOGgLYOAEuR0Bvl/eVfary6593z5HabMyGt/8QXwDATSa2Ly', 'Muhammad Irfan', 'Tuesday, 29-11-22 05:31:29', 'Jl. Beliung', 'muhirf@gmail.com', '085218273424', 'customer'),
(14, 'rizky', '$2y$10$lbxuhMd1GW32LsPZK6K70ekb6vn5i3W3pbm0NWM5RxcFg6YdWBGdO', 'Rizky Anugrah', 'Tuesday, 29-11-22 05:32:21', 'Jl. Patin', 'rizkyanug@gmail.com', '081332542323', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
