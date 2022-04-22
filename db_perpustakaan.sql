-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 01.41
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id`, `nama`, `email`, `password`, `gambar`, `role_id`) VALUES
(9072002, 'Administrator', 'admin', 'admin', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_buku`
--

CREATE TABLE `t_buku` (
  `id` int(12) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `jumlah_halaman` int(4) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stok` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_buku`
--

INSERT INTO `t_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_halaman`, `isbn`, `gambar`, `stok`) VALUES
(3, 'Pendidikan Pancasila dan Kewarganegaraan', 'Nuryadi dan Tolib', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 224, '-', '20170000001997_thumb.jpg', '10'),
(4, 'Prakarya dan Kewirausahaan', 'Hendriana Werdhaningsih, Alberta Haryudanti, Rinrin Jamrianti dan Desta Wirmas', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 136, '-', '20170000001993_thumb.jpg', '25'),
(5, 'Pendidikan Agama Buddha dan Budi Pekerti', 'Nurwito dan Nasiman', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 98, '-', '20170000001958_thumb.jpg', '7'),
(6, 'Pendidikan Agama Islam dan Budi Pekerti', 'Nelty Khairiyah dan Endi Suhendi Zen', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 202, '-', '20170000001959_thumb.jpg', '38'),
(7, 'Prakarya dan Kewirausahaan', 'Hendriana Werdhaningsih, Alberta Haryudanti, Rinrin Jamrianti, dan Desta Wirmas.', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 128, '-', '20170000001957_thumb.jpg', '18'),
(8, 'Agama Kristen dan Budi Pekerti', 'Pdt. Janse Belandina Non-Serrano dan Pdt. Stephen Suleeman', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 179, '-', '20170000001857_thumb.jpg', '6'),
(9, 'Pendidikan Agama Khonghucu dan Budi Pekerti', 'Js. Hartono dan Js. Gunadi', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemdikbud', '2017', 81, '-', '20170000001944_thumb.jpg', '6'),
(10, 'Pendidikan Agama Khonghucu dan Budi Pekerti', 'Js. Gunadi dan Js. Hartono', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 56, '-', '20170000001921_thumb.jpg', '7'),
(11, 'Prakarya dan Kewirausahaan', 'Hendriana Werdhaningsih, Alberta Haryudanti, Rinrin Jamrianti dan Desta Wirmas', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 254, '-', '20170000001916_thumb.jpg', '15'),
(12, 'Sejarah Indonesia', 'Restu Gunawan, Amurwani Dwi Lestariningsih, dan Sardiman', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 384, '-', '20170000001866_thumb.jpg', '78'),
(13, 'Pendidikan Agama Islam dan Budi Pekerti', 'Nelty Khairiyah dan Endi Suhendi Zen', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 256, '-', '20170000001895_thumb.jpg', '89'),
(14, 'Pendidikan Jasmani, Olahraga dan Kesehatan', 'Suherli, Maman Suryaman, Aji Septiaji, Istiqomah', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 193, '-', '20170000001884_thumb.jpg', '43'),
(15, 'Seni Budaya', 'Zackaria Soetedja, Dewi Suryati, Milasari, Agus Supriatna,', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 240, '-', '20170000001854_thumb.jpg', '45'),
(16, 'Matematika', 'Bornok Sinaga', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud', '2017', 216, '-', '20170000001841_thumb.jpg', '289');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `nim` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL,
  `tanggal_dibuat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`nim`, `nama`, `jurusan`, `jk`, `ttl`, `alamat`, `telepon`, `email`, `password`, `gambar`, `role_id`, `tanggal_dibuat`) VALUES
(21110533, 'Mochamad Ihsan Saepulloh', 'Teknik Informatika', 'Laki-Laki', 'Bandung, 09 Juli 2002', 'Jl. Kopo Sayati', '08995754988', 'mihsans972@gmail.com', '$2y$10$UPiRtV5HkwVYPqD7vlDao.CwZ.MknIBgJJ1q/IQLg0p9vsbd4m0CW', 'logo2.jpeg', 3, '16 Mar 2022 10:34 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_petugas`
--

CREATE TABLE `t_petugas` (
  `nip` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL,
  `tanggal_dibuat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_petugas`
--

INSERT INTO `t_petugas` (`nip`, `nama`, `jk`, `ttl`, `alamat`, `telepon`, `email`, `password`, `gambar`, `role_id`, `tanggal_dibuat`) VALUES
(21110533, 'Moch Ihsan Saepulloh', 'Laki-Laki', 'Bandung, 09 Juli 2002', 'Jl. Kopo Sayati', '08995754988', 'mihsans999@gmail.com', '$2y$10$K1U1zW8dJnTSU/kRJOjIjumZ0nxyTijQo4dnn24VMqEkrVZgLSo3a', 'logo1.jpeg', 2, '17 Mar 2022 08:26 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pinjaman`
--

CREATE TABLE `t_pinjaman` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nim_mahasiswa` int(11) NOT NULL,
  `tanggal_pinjam` varchar(100) NOT NULL,
  `tanggal_kadaluarsa` varchar(100) NOT NULL,
  `status_pengembalian` varchar(100) NOT NULL,
  `denda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pinjaman`
--

INSERT INTO `t_pinjaman` (`id`, `id_buku`, `nim_mahasiswa`, `tanggal_pinjam`, `tanggal_kadaluarsa`, `status_pengembalian`, `denda`) VALUES
(1, 3, 21110533, '16 Mar 2022 11:13 PM', '17 Mar 2022 11:13 PM', 'sudah', '0'),
(2, 4, 21110533, '17 Mar 2022 11:15 PM', '18 Mar 2022 11:13 PM', 'sudah', '0'),
(3, 16, 21110533, '20 Mar 2022 12:40 AM', '23 Mar 2022 12:40 AM', 'sudah', '0'),
(4, 3, 21110533, '20 Mar 2022 10:53 AM', '27 Mar 2022 10:53 AM', 'sudah', '0'),
(5, 13, 21110533, '20 Mar 2022 11:16 AM', '27 Mar 2022 11:16 AM', 'sudah', '0'),
(6, 3, 21110533, '10 Apr 2022 04:12 PM', '17 Apr 2022 04:12 PM', 'sudah', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'petugas'),
(3, 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `t_pinjaman`
--
ALTER TABLE `t_pinjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`,`nim_mahasiswa`),
  ADD KEY `nim_mahasiswa` (`nim_mahasiswa`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `nim` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21110557;

--
-- AUTO_INCREMENT untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  MODIFY `nip` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211105338;

--
-- AUTO_INCREMENT untuk tabel `t_pinjaman`
--
ALTER TABLE `t_pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD CONSTRAINT `t_admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD CONSTRAINT `t_mahasiswa_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  ADD CONSTRAINT `t_petugas_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `t_pinjaman`
--
ALTER TABLE `t_pinjaman`
  ADD CONSTRAINT `t_pinjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `t_buku` (`id`),
  ADD CONSTRAINT `t_pinjaman_ibfk_2` FOREIGN KEY (`nim_mahasiswa`) REFERENCES `t_mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
