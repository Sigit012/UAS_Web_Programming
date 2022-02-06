-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 06 Feb 2022 pada 13.05
-- Versi server: 5.7.32
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `UAS_1904030034`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matpel`
--

CREATE TABLE `tb_matpel` (
  `id_matpel` int(11) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `kelompok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_matpel`
--

INSERT INTO `tb_matpel` (`id_matpel`, `nama_matpel`, `paket`, `kelompok`) VALUES
(3, 'Painting ', 'Teknik dan Bisnis Sepeda Motor', 'Pelajaran Keahlian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajar`
--

CREATE TABLE `tb_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `matpel` varchar(50) NOT NULL,
  `kode_jadwal` varchar(50) NOT NULL,
  `no_telefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id_pengajar`, `nama`, `NIP`, `matpel`, `kode_jadwal`, `no_telefon`) VALUES
(2, 'Maulana', '5003', 'Matematika', 'M001', '99999'),
(3, 'Yusup', '5003', 'Bahasa Indonesia', 'B001', '123556');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_matpel`
--
ALTER TABLE `tb_matpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indeks untuk tabel `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_matpel`
--
ALTER TABLE `tb_matpel`
  MODIFY `id_matpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
