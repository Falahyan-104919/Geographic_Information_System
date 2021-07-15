-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 22.47
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `lat`, `lng`) VALUES
(1, 'Polres Lampung Barat', '-5.020677', '104.105839'),
(2, 'Polsek Balik Bukit', '-5.012826', '104.072432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polygon`
--

CREATE TABLE `polygon` (
  `id_polygon` int(11) NOT NULL,
  `nama_polygon` varchar(255) NOT NULL,
  `cord` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `polygon`
--

INSERT INTO `polygon` (`id_polygon`, `nama_polygon`, `cord`) VALUES
(1, 'area xxx', '        [-4.929515, 103.573608],\r\n            [-4.777626, 103.77273],\r\n            [-4.881626, 103.871613],\r\n            [-4.870679, 104.194336],\r\n            [-4.830997, 104.36737],\r\n            [-4.670874, 104.28222],\r\n            [-4.517559, 104.313812],\r\n            [-4.38886, 104.35501],\r\n            [-4.295744, 104.462128],\r\n            [-4.219052, 104.62554],\r\n            [-4.264246, 104.80270],\r\n            [-3.940981, 105.14328],\r\n            [-3.847812, 105.29434],\r\n            [-3.803965, 105.26825],\r\n            [-3.720375, 105.32180],\r\n            [-3.721745, 105.349274],\r\n            [-3.775189, 105.375366],\r\n            [-3.7793, 105.438538],\r\n            [-3.93413, 105.623932],\r\n            [-4.138243, 105.834045],\r\n            [-4.382013, 105.869751],\r\n            [-4.439521, 105.926056],\r\n            [-4.640761, 105.924683],\r\n            [-4.705091, 105.901337],\r\n            [-4.874784, 105.88348],\r\n            [-4.943197, 105.917816]'),
(2, 'area 2', '   [-5.916581, 104.541779],\r\n            [-5.885162, 104.565125],\r\n            [-5.726678, 104.411316],\r\n            [-5.717113, 104.4126893],\r\n            [-5.643319, 104.28772],\r\n            [-5.620086, 104.312433],\r\n            [-5.529877, 104.208069],\r\n            [-5.311134, 103.984222],\r\n            [-5.271478, 103.995209],\r\n            [-5.246863, 103.894958],\r\n            [-5.218144, 103.893585],\r\n            [-5.173011, 103.933411],\r\n            [-5.119669, 103.85373],\r\n            [-5.048539, 103.778229],\r\n            [-5.063586, 103.748016]'),
(3, 'area 3', '      [-5.857841, 105.691223],\r\n            [-5.844179, 105.600586],\r\n            [-5.816856, 105.575867],\r\n            [-5.702081, 105.547028],\r\n            [-5.697982, 105.509949],\r\n            [-5.626919, 105.393219],\r\n            [-5.466997, 105.309448],\r\n            [-5.4793, 105.2696233],\r\n            [-5.521676, 105.261383],\r\n            [-5.594118, 105.250397],\r\n            [-5.726678, 105.225677],\r\n            [-5.779966, 105.228424],\r\n            [-5.830518, 105.173492],\r\n            [-5.618719, 104.773865],\r\n            [-5.533978, 104.69970],\r\n            [-5.509374, 104.5884],\r\n            [-5.544913, 104.556885],\r\n            [-5.57225, 104.561005],\r\n            [-5.723945, 104.659882],\r\n            [-5.749907, 104.654388],\r\n            [-5.835982, 104.720306],\r\n            [-5.889261, 104.712067],\r\n            [-5.939802, 104.746399],\r\n            [-5.957558, 104.5610053]'),
(4, 'area 4', '     [-3.775189, 105.375366],\r\n            [-3.7793, 105.438538],\r\n            [-3.93413, 105.623932],\r\n            [-4.138243, 105.834045],\r\n            [-4.382013, 105.869751],\r\n            [-4.439521, 105.926056],\r\n            [-4.640761, 105.924683],\r\n            [-4.705091, 105.901337],\r\n            [-4.874784, 105.88348],\r\n            [-4.943197, 105.917816],\r\n            [-5.233187, 105.871124],\r\n            [-5.276948, 105.864258],\r\n            [-5.528511, 105.828552],\r\n            [-5.581817, 105.842285],\r\n            [-5.693882, 105.817566],\r\n            [-5.842813, 105.799713],\r\n            [-5.915215, 105.713196],'),
(5, 'area 5', ' [-4.929515, 103.573608],\r\n            [-4.777626, 103.77273],\r\n            [-4.881626, 103.871613],\r\n            [-4.870679, 104.194336],\r\n            [-4.830997, 104.36737],\r\n            [-4.670874, 104.28222],\r\n            [-4.517559, 104.313812],\r\n            [-4.38886, 104.35501],\r\n            [-4.295744, 104.462128],\r\n            [-4.219052, 104.62554],\r\n            [-4.264246, 104.80270],\r\n            [-3.940981, 105.14328],\r\n            [-3.847812, 105.29434],\r\n            [-3.803965, 105.26825],\r\n            [-3.720375, 105.32180],\r\n            [-3.721745, 105.349274]'),
(6, 'pac man', '[-2.36688, 102.627706],[-2.273573, 103.672347],[-2.992413, 103.69434],[-2.992413, 102.935579]');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `polygon`
--
ALTER TABLE `polygon`
  ADD PRIMARY KEY (`id_polygon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `polygon`
--
ALTER TABLE `polygon`
  MODIFY `id_polygon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
