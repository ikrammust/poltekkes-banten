-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2020 pada 15.50
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tingkat` varchar(128) NOT NULL,
  `jurusan` varchar(256) NOT NULL,
  `masuk` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `pilihan` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `password`, `tingkat`, `jurusan`, `masuk`, `image`, `pilihan`, `status`, `role_id`) VALUES
(709, 'Admin1', 'A07091998', '$2y$10$VGvniUe6l/QTrZrFay6g.ObRIPBJeoH2GyQjg33ZMe0Qsarpy/0By', '', '', '2019', '', 1, 1, 1),
(717, 'Ade Siva Dwiyani', 'P279011180001', '$2y$10$QtpOePtU3vMOpjIM8qOnLuB8F/6gwkJcPEEpwGdHvItLv9n3eGbOC', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(718, 'Agustian Rudiyanto', 'P279011180002', '$2y$10$0vPp8aFTLnxJtZaVZv9Fg.vyNYKXZO15suG0nPKwqr09sg5qWF96q', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(719, 'Ahmad Sanusi Mansur', 'P279011180003', '$2y$10$f32A6EnLdQ/H4tMfTef8R.K23UJ96cMyRp3BOmXA5JW/aN37qlXi6', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(720, 'Anggie Ramadanty', 'P279011180004', '$2y$10$9cpd3vtNVxeLKC.Sktf8xeeYOPSFlT5.Enr1oF2Fh8iRe6ZEoNtQO', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(721, 'Annisa Laras Valentika', 'P279011180005', '$2y$10$oCCMFjZO0QayMXpkRbjFVuQQ.SlJWDZ0EiTA/uWPe.6RKvj3tXYQi', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(722, 'Asri Yulianita', 'P279011180006', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(723, 'Athala Ramania', 'P279011180007', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(724, 'Ayu Kemas Dwi Astuti', 'P279011180008', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(725, 'Ayu Pitriana Daxen', 'P279011180009', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(726, 'Berlian Septiana Anggreini', 'P279011180010', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(727, 'Chinta Farida', 'P279011180011', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(728, 'Dea Rindia Wulantika', 'P279011180012', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(729, 'Desti Maharani Sembiring', 'P279011180013', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(730, 'Dian Herdianti Saputri', 'P279011180014', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(731, 'Dini Apriyanti', 'P279011180015', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(732, 'Dwi Setya Ningsih', 'P279011180016', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(733, 'Eka Pratiwi Husaini Putri', 'P279011180017', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(734, 'Engga Islamia Beno Sambira', 'P279011180018', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(735, 'Ento', 'P279011180019', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(736, 'Ernita', 'P279011180020', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(737, 'Eva Rahayu', 'P279011180021', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(738, 'Faridah', 'P279011180022', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(739, 'Fitri Wulandari ', 'P279011180023', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(740, 'Fujiani Astuti', 'P279011180024', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(741, 'Jihan Ajeng Islami Takdir', 'P279011180025', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(742, 'Leni Marlina', 'P279011180026', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(743, 'Linda Mellytiana', 'P279011180027', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(744, 'Lita Oktavianti', 'P279011180028', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(745, 'Maryanah', 'P279011180029', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(746, 'Maulana Aji Putra', 'P279011180030', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(747, 'Melani Tria Sudjasmin', 'P279011180031', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(748, 'Muhammad Ega Renaldi Bahtiar', 'P279011180032', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(749, 'Natasha Aprillia ', 'P279011180033', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(750, 'Nurul Adha ', 'P279011180034', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(751, 'Putri Afifah Lumani ', 'P279011180035', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(752, 'Rahayu Aisyah', 'P279011180036', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(753, 'Rindiyani', 'P279011180037', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(754, 'Sasmitia Rini', 'P279011180038', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(755, 'Sherina Intan Latifa', 'P279011180039', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(756, 'Sindi Wati Russadi', 'P279011180040', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(757, 'Siti Arwanah', 'P279011180041', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(758, 'Siti Fauziah', 'P279011180042', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(759, 'Siti Kholidasih', 'P279011180043', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(760, 'Siti Nabilah Nurdiyanti', 'P279011180044', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(761, 'Soka Adzahara Arieka', 'P279011180045', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(762, 'Via Lutfiah', 'P279011180046', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(763, 'Widsy Milenia Efendi', 'P279011180047', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(764, 'Yuli Anisa', 'P279011180048', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(765, 'Yulia Nurfadilah', 'P279011180049', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(766, 'Abdullah Sujatnika Suhardja', 'P279011180050', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(767, 'Ade Rahma', 'P279011180051', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(768, 'Ainu Fijar', 'P279011180052', '$2y$10$4cjuKhj0sZDtTxni5/j29OBHSIMXDql1WpG0dpIH00xxA4lAI.C6i', 'D3', 'Keperawatan', '2018', '', 0, 1, 3),
(769, 'Alfiatul Munawaroh', 'P279011180053', '$2y$10$wq6TFPDiXuLDI73RGznNOewlO5tXBHzBCpZR6yL26gtJP0mtN03Ae', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(770, 'Anggun Maelatul Fauziah', 'P279011180054', '$2y$10$POSkAt5ES9aHbvjTRIRTC.2yYjPbxa/c8HoVdBBsYVh6UVR9srknW', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(771, 'Annisa Tsalats Nabila', 'P279011180055', '$2y$10$FqReb/KEYvSpaI6G6FaGr.sq9pq5ReMsgnZhUwEnvtZyhs87DnZgO', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(772, 'Ardelia Septiani', 'P279011180056', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(773, 'Ayu Fitriani', 'P279011180057', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(774, 'Chintya Fatihah ', 'P279011180058', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(775, 'Chyta Adelia Septina', 'P279011180059', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(776, 'Deva Virginia Delita', 'P279011180060', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(777, 'Dewi Febriyani Lubis', 'P279011180061', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(778, 'Durrotunnisa', 'P279011180062', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(779, 'Dzikri Rahmatullah', 'P279011180063', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(780, 'Eliza Risela Octari', 'P279011180064', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(781, 'Emi Hardiyanti', 'P279011180065', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(782, 'Erliana Rosanti', 'P279011180066', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(783, 'Fani Loliana', 'P279011180067', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(784, 'Fitria Wahyuningsih', 'P279011180068', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(785, 'Furry Andayani Pamungkas ', 'P279011180069', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(786, 'Ghytta Annisaa R.A', 'P279011180070', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(787, 'Herni Suherni', 'P279011180071', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(788, 'Imel Laela Izmi', 'P279011180072', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(789, 'Lulu Nurmala', 'P279011180073', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(790, 'Lutfi Ilham Pratama', 'P279011180074', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(791, 'Maidy Akmaliyah Putri', 'P279011180075', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(792, 'Mega Ayulia Ratnasari', 'P279011180076', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(793, 'Muhamad Awaludin Badi', 'P279011180077', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(794, 'Muhamad Rifki Dawil Mujib', 'P279011180078', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(795, 'Nihayatul Maskuroh', 'P279011180079', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(796, 'Nurhafifah', 'P279011180080', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(797, 'Pudjairah Pahlita Aprizha', 'P279011180081', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(798, 'Reni Kusuma Wardani ', 'P279011180082', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(799, 'Roselina Novianti ', 'P279011180083', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(800, 'Shofiana Haniffah', 'P279011180084', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(801, 'Silvia Asmarani', 'P279011180085', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(802, 'Siti Elin Nurjanah', 'P279011180086', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(803, 'Siti Hamidah', 'P279011180087', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(804, 'Sitti Lestari Yulianti', 'P279011180088', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(805, 'Sri Yuliana', 'P279011180089', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(806, 'Syifa Hudriyah', 'P279011180090', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(807, 'Tegar Sri  Sumantri', 'P279011180091', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(808, 'Verawati', 'P279011180092', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(809, 'Willy Kusuma Dewi', 'P279011180093', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(810, 'Yulia Indri Febriani', 'P279011180094', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(811, 'Yulita Nurjihan', 'P279011180095', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(812, 'Yuninda Alfani', 'P279011180096', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(813, 'Zakiya Nuriyah', 'P279011180097', '123456', 'D3', 'Keperawatan', '2018', '', 1, 1, 3),
(814, 'Abdurahman Gibran Raffani', 'P27901119001', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(815, 'Adryan Azizul Rifqi ', 'P27901119002', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(816, 'Agum Gumelar ', 'P27901119003', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(817, 'Amar Rhamadan', 'P27901119004', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(818, 'Ana Intan Nurlaila', 'P27901119005', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(819, 'Anita Dwiastuti', 'P27901119006', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(820, 'Anna Febriyani', 'P27901119007', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(821, 'Ari Samsudin', 'P27901119008', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(822, 'Aura Jessica Putri', 'P27901119009', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(823, 'Bekti Nurcahyani ', 'P27901119010', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(824, 'Desti Lestari ', 'P27901119011', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(825, 'Dian Sugiharty', 'P27901119012', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(826, 'Diaz Aida Utami', 'P27901119013', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(827, 'Elsa Fuzianti ', 'P27901119014', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(828, 'Ervina', 'P27901119015', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(829, 'Eva Novianti', 'P27901119016', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(830, 'Fajrah Annisa Syarifuddin', 'P27901119017', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(831, 'Farah Nurul Aini', 'P27901119018', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(832, 'Fena Nila Oktafiona', 'P27901119019', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(833, 'Fitri Annisa ', 'P27901119020', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(834, 'Fitri Diani', 'P27901119021', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(835, 'Fitria Handayani Nengsih ', 'P27901119022', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(836, 'Geby Gabriella Maulia', 'P27901119023', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(837, 'Huda Husyada ', 'P27901119024', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(838, 'Inaka Rahmawati ', 'P27901119025', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(839, 'Indriyani', 'P27901119026', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(840, 'Ita Suhaeti', 'P27901119027', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(841, 'Kartika Triya Wardhani', 'P27901119028', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(842, 'Lusiana Mar\'Atussoliha', 'P27901119029', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(843, 'Meylita Ruslina ', 'P27901119030', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(844, 'Mila Febila Cahyani', 'P27901119031', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(845, 'Muhammad Fathulrozi', 'P27901119032', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(846, 'Nada Nabilah ', 'P27901119034', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(847, 'Naffisa Zahratud Diniyah ', 'P27901119035', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(848, 'Neng Novi Husna Shofa', 'P27901119036', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(849, 'Nida Nuroktaviani', 'P27901119037', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(850, 'Nurhalimah', 'P27901119038', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(851, 'Nur Hudriyah Dewi', 'P27901119039', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(852, 'Putri Shahnaz Tazkia ', 'P27901119040', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(853, 'Rani Oktaviani', 'P27901119041', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(854, 'Reno Oktaviansyah', 'P27901119042', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(855, 'Rika Oktoviani', 'P27901119043', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(856, 'Rista Agistari', 'P27901119044', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(857, 'Rizki Sa\'Bani', 'P27901119045', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(858, 'Rofiqoh Lanjar Susaptri', 'P27901119046', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(859, 'Rospita Sari', 'P27901119047', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(860, 'Shofie Awalia Khaezarani', 'P27901119048', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(861, 'Siti Khopipah', 'P27901119049', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(862, 'Tsara Hanan Erohman', 'P27901119050', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(863, 'Vina Yunia Hidayati', 'P27901119051', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(864, 'Wanda Sofiyatun Najwa', 'P27901119052', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(865, 'Yuli Antika ', 'P27901119053', '123456', 'D4', 'Keperawatan', '2019', '', 1, 1, 3),
(866, 'Adinda Linta Khoirunnisa', 'P27901119054', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(867, 'Afifah Fadjrianti', 'P27901119055', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(868, 'Alfakih Lukman', 'P27901119056', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(869, 'Aliya Hafsah', 'P27901119057', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(870, 'Andini Rahmayani', 'P27901119058', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(871, 'Annisa Nurwahyuni', 'P27901119059', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(872, 'Anzani Dhela Ayu Saputri', 'P27901119060', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(873, 'Aurellia Eka Devriani', 'P27901119061', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(874, 'Awinda Harafani', 'P27901119062', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(875, 'Cahya Oktafiani', 'P27901119063', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(876, 'Cecep Cipta Wiwaha', 'P27901119064', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(877, 'Dimas Aldy Ramadhan', 'P27901119065', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(878, 'Dinda Ayu Cahyani', 'P27901119066', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(879, 'Dwi Haryani', 'P27901119067', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(880, 'Eva Cahya Hilmiah', 'P27901119068', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(881, 'Evangeline Ayu Usamawati', 'P27901119069', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(882, 'Fadillah Muntahanah', 'P27901119070', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(883, 'Fany Dyah Setyaningrum', 'P27901119071', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(884, 'Farhanah Hidayati', 'P27901119072', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(885, 'Firda Herawati', 'P27901119073', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(886, 'Fitri Yunengsih', 'P27901119074', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(887, 'Hanifa Nur Esha', 'P27901119075', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(888, 'Hasna Qurrota Ayunina', 'P27901119076', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(889, 'Ikbal Firdaus', 'P27901119077', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(890, 'Intan Windiastika', 'P27901119078', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(891, 'Khilda Najah Fadilah', 'P27901119080', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(892, 'Lilis Nurholisah', 'P27901119081', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(893, 'Lisa Aulia Putry', 'P27901119082', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(894, 'Luvi Hapysari', 'P27901119083', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(895, 'Muhamad Trisna', 'P27901119084', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(896, 'Muhammad Rifki Fauzi', 'P27901119085', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(897, 'Nadia Fadilah', 'P27901119086', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(898, 'Neng Atin Nurhayati', 'P27901119087', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(899, 'Nia Elfaniasari', 'P27901119088', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(900, 'Nina Hariningsih', 'P27901119089', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(901, 'Nurfadilah Setiawan', 'P27901119090', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(902, 'Nurhaeni', 'P27901119091', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(903, 'Nurul Hafizah', 'P27901119092', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(904, 'Putri Indah Permata Sari', 'P27901119093', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(905, 'Putri Tresna Budiarni', 'P27901119094', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(906, 'Rifdah Septilia Hasanah', 'P27901119095', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(907, 'Rizky Nurwulan', 'P27901119096', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(908, 'Rizky Juliandy', 'P27901119097', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(909, 'Shafannisa Arifia Zahcra', 'P27901119098', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(910, 'Siska Suharyati', 'P27901119099', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(911, 'Siti Aulia Rahmawati', 'P27901119100', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(912, 'Siti Badriyah', 'P27901119101', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(913, 'Siti Halimatussa\'Diyyah', 'P27901119102', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(914, 'Uun Nurtini', 'P27901119103', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(915, 'Vika Rizkiani Lestari', 'P27901119104', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(916, 'Yuli Yuliana', 'P27901119105', '123456', 'D3', 'Keperawatan', '2019', '', 1, 1, 3),
(917, 'Adiz Laita Nodia Putri', 'P27904117001', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(918, 'Agung Febriawan', 'P27904117002', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(919, 'Amanda Recca Meliana Febrianti', 'P27904117003', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(920, 'Ananda Ariva Rahma', 'P27904117004', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(921, 'Anggitalia Angraini', 'P27904117005', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(922, 'Aniig Nur Aisyah', 'P27904117006', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(923, 'Ayu Azhaar Aathirah', 'P27904117007', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(924, 'Deviyanti Agustin', 'P27904117008', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(925, 'Dewi Herliana', 'P27904117009', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(926, 'Dina Gita Cintanati', 'P27904117010', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(927, 'Dwi Kristianti', 'P27904117011', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(928, 'Eka Supriyanti', 'P27904117012', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(929, 'Eka Yuni Astuti', 'P27904117013', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(930, 'Elis Puji Lestari', 'P27904117014', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(931, 'Elisa Fadillah', 'P27904117015', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(932, 'Esy Riza Utari', 'P27904117016', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(933, 'Fauziah Siti Rohana', 'P27904117017', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(934, 'Febriyanti Shoolihah', 'P27904117018', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(935, 'Fifi Maghfiroh', 'P27904117019', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(936, 'Fitri Trisnawati', 'P27904117020', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(937, 'Fiyan Fitri Yanayir', 'P27904117021', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(938, 'Frety Nagita', 'P27904117022', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(939, 'Gadis Intanovia Adinda', 'P27904117023', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(940, 'Iman Sadewa', 'P27904117024', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(941, 'Indri Rahmawati', 'P27904117025', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(942, 'Ines', 'P27904117026', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(943, 'Khamela', 'P27904117027', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(944, 'Leres Margiati', 'P27904117028', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(945, 'Lia Arieska Fadila', 'P27904117029', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(946, 'Lula Dimah Pangestu', 'P27904117030', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(947, 'Maysita Luiqi Azzahra', 'P27904117031', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(948, 'Mery Safitri', 'P27904117032', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(949, 'Misti Meilani', 'P27904117033', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(950, 'Nia Shinta Wahyuni', 'P27904117034', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(951, 'Nurmala', 'P27904117035', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(952, 'Nurmala Dewi', 'P27904117036', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(953, 'Oktaviliani Eka Faksi', 'P27904117037', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(954, 'Ratu Ayu Dwi Komalasari', 'P27904117038', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(955, 'Rezki Nur Oktayani', 'P27904117039', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(956, 'Rhefina Amellia Fitriana', 'P27904117040', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(957, 'Rizqita Putri', 'P27904117041', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(958, 'Sekar Lulu Sabrina', 'P27904117042', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(959, 'Sency Septina P', 'P27904117043', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(960, 'Sendy Pratama', 'P27904117044', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(961, 'Siska Nurul Alfiani', 'P27904117045', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(962, 'Siti Ika Fariha', 'P27904117046', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(963, 'Sity Maryatul K', 'P27904117047', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(964, 'Sopiyatun', 'P27904117048', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(965, 'Sylvia Handa', 'P27904117049', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(966, 'Tifany Diena Nafisah ', 'P27904117050', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(967, 'Vani Septidian Sari', 'P27904117051', '123456', 'D4', 'Keperawatan', '2017', '', 1, 1, 3),
(968, 'Ahmad Fikri Perangin Angin', 'P27905118001', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(969, 'Amelia Wati', 'P27905118002', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(970, 'Brilianty Wahyu Utami Sa', 'P27905118003', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(971, 'Destafitri Egamalia', 'P27905118004', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(972, 'Diah Ayu Pertiwi', 'P27905118005', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(973, 'Dwiky Wijaya', 'P27905118006', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(974, 'Erlian Istifan', 'P27905118007', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(975, 'Ester Natasya', 'P27905118008', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(976, 'Gita Wulandari', 'P27905118009', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(977, 'Iif Hanifah Hasan', 'P27905118010', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(978, 'Irwan Setiawan', 'P27905118011', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(979, 'Jenni Astri Desista Br. Tambuan', 'P27905118012', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(980, 'Julfianas Bekti Wahyuni', 'P27905118013', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(981, 'Khairunnisa Bakhitah', 'P27905118014', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(982, 'Komarudin', 'P27905118015', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(983, 'Ligar Pitaloka', 'P27905118016', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(984, 'Mahda Fattwa Rossihan', 'P27905118017', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(985, 'Melly Nur Firmawati', 'P27905118018', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(986, 'Moh. Dhika Ramadhan', 'P27905118019', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(987, 'Mubiyatul Hasanah', 'P27905118020', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(988, 'Nanda Triocha', 'P27905118021', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(989, 'Nia Tri Juniarti', 'P27905118022', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(990, 'Nur Vany Widiyagiri', 'P27905118023', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(991, 'Ria Fitriyaa Dlusholikhah', 'P27905118024', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(992, 'Rindi Handika', 'P27905118025', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(993, 'Riska Amalia Amanda', 'P27905118026', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(994, 'Runda', 'P27905118027', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(995, 'Selfiani', 'P27905118028', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(996, 'Shaniyatun Ni\'Mah', 'P27905118029', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(997, 'Sisilia Alfira Vivianti', 'P27905118030', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(998, 'Siti Meliana Putri', 'P27905118031', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(999, 'Suci Meliana Mustika', 'P27905118032', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(1000, 'Suhaebah Wulansari', 'P27905118033', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(1001, 'Widya Suci Darmawati', 'P27905118034', '123456', 'D4', 'Pendidikan Profesi Ners', '2018', '', 1, 1, 3),
(1002, 'Ajeng Vildah Setyaningsih', 'P27905119001', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1003, 'Alif Faturachman', 'P27905119002', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1004, 'Angelita', 'P27905119003', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1005, 'Annisa Yunistya Priamita', 'P27905119004', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1006, 'Awanda Fitria Nugraha', 'P27905119005', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1007, 'Citra Asyka', 'P27905119006', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1008, 'Diana Wulandarai', 'P27905119007', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1009, 'Dina Sakinah', 'P27905119008', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1010, 'Dwi Rahma Putri', 'P27905119009', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1011, 'Fauziah Indar', 'P27905119010', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1012, 'Galuh Puspita Sari', 'P27905119011', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1013, 'Humairo Nuraini', 'P27905119012', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1014, 'Iim Imaroh', 'P27905119013', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1015, 'Indah Safitri', 'P27905119014', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1016, 'Junior Setiawan', 'P27905119015', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1017, 'Lofiyatul Fitri', 'P27905119016', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1018, 'Marthatio Lenta Nauli Simbolon', 'P27905119017', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1019, 'Maulida Julianta', 'P27905119018', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1020, 'Nabila Farhatun Wahidah', 'P27905119019', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1021, 'Nadia Nur Alfu', 'P27905119020', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1022, 'Nadia Putri Dwiningsih', 'P27905119021', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1023, 'Nida Fadhilah', 'P27905119022', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1024, 'Nofitasari', 'P27905119023', '$2y$10$WF8xlNHx5PN9qoOEtRngfOTytIyinBjKsB3.UTFJTPSrrC9IDb4.i', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1025, 'Panji Sonjaya', 'P27905119024', '$2y$10$xIAEjfxiC6K2GLMahHsdXOmDlH2kuODQk9ald9Hb2Iw0xqiECATpy', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1026, 'Putri Amelia Sampurno', 'P27905119025', '$2y$10$gyz6XTADBJpQa21ARK30O.wPdUFdZY3EZuUzNdl76Ji9Jyq/gp/Ry', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1027, 'Ratu Shibah Arofah', 'P27905119026', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1028, 'Rini Safira', 'P27905119027', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1029, 'Rizky Oktaviani', 'P27905119028', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1030, 'Rt Inna Rachmawati', 'P27905119029', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1031, 'Salsa Nabila', 'P27905119030', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1032, 'Salsa Regita Pasha', 'P27905119031', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1033, 'Salsabila Akamaliyah Azzahra', 'P27905119032', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1034, 'Salsabila Nur Amalia Azzahra', 'P27905119033', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1035, 'Sarah Raudhatul Aulia', 'P27905119034', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1036, 'Septiani Putri Rizki', 'P27905119035', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1037, 'Siti Rohayani', 'P27905119036', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1038, 'Siti Wahdini Febrianti', 'P27905119037', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1039, 'Wawat Kusumawati', 'P27905119038', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1040, 'Ways Al Qorny', 'P27905119039', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1041, 'Yuliantika Solehah', 'P27905119040', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1042, 'Yusril', 'P27905119041', '123456', 'D4', 'Pendidikan Profesi Ners', '2019', '', 1, 1, 3),
(1066, 'Bangun Wijonarko SST', '198303272008121000', '$2y$10$8KZK2H6uRUI6Bp8epxhHJeF5htftEPdP6byhtjoh4VWwC/zAYJ172', '', '', '', '19c757c3ede44330a2caffdf05c75af7.jpg', 0, 1, 2),
(1067, 'Dewi Indah Sari SKM, M.Kes', '198209112005022000', '$2y$10$kw7xUgG1d0UMA24UB1NCUOwlxxCtXBo7eYlUmwwjzySWvSEtB0VzC', '', '', '', 'Kntang1000px.jpg', 0, 1, 2),
(1068, 'Dra. Erna Mesra M.Kes', '195802081984012000', '$2y$10$d9sdo/t6DHoEnHwY9BzVKOfTL2hz67rl/FolNxmjJVdDD9h/i.XtS', '', '', '', 'ASLL.jpg', 0, 1, 2),
(1069, 'Dra. H. Nasihin M.Kes', '195910161981101000', '$2y$10$exYQXJhwteM3OfhWKRX4feVusgaQgRkVMkrpBXZOLSHa3EUywm3QS', '', '', '', 'Labu.jpg', 0, 1, 2),
(1070, 'Dwi Aprilina Andriani S.Kep, Ns, M.Kep', '199104252019022000', '$2y$10$L1iSCiIS2mQxcdle1x04GOwOcyboQFQVOVOyQ2ISsfFSADjBBJNiy', '', '', '', 'alexmdc___4ezcchqhkX___.jpg', 0, 1, 2),
(1071, 'Ema Hikmah S.KP.M.Kep', '197506182001122000', '$2y$10$PGEDIsb0ZsdIMjL7tQpIAeZUbUHZldj6oa6oOM0d8DbBMF2xX861q', '', '', '', 'alexmdc___76TFFjqhui___.jpg', 0, 1, 2),
(1072, 'H. Thoha SKM.M.Si', '196207071989031000', '$2y$10$CRQ0pYbt0OA9elWYWcuKo.pjsPpDu617HG7q2clPG94gj5tYJY7pe', '', '', '', 'alexmdc___Bj7qF3lHx_8___.jpg', 0, 1, 2),
(1074, 'indah junnifer', '1814498961', '$2y$10$bEQIB1WePKa7f8OtxIAEEOhgmJHpl4XRXnJ8VXucmLa.X6mixeZ0m', 'D3', 'Sistem Informasi', '2018', 'alexmdc___4ezcchqhkX___1.jpg', 0, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `infodosen`
--

CREATE TABLE `infodosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `info` varchar(512) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `infodosen`
--

INSERT INTO `infodosen` (`id`, `nama`, `nip`, `image`, `info`, `alamat`, `telp`) VALUES
(9, 'Bangun Wijonarko SST', '198303272008121000', '19c757c3ede44330a2caffdf05c75af7.jpg', 'Saya Bangun Wijonarko SST', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089611112222'),
(10, 'Dewi Indah Sari SKM, M.Kes', '198209112005022000', 'Kntang1000px.jpg', 'Saya Dewi Indah Sari SKM, M.Kes', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089622223333'),
(11, 'Dra. Erna Mesra M.Kes', '195802081984012000', 'ASLL.jpg', 'Saya Dra. Erna Mesra M.Kes', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089633334444'),
(12, 'Dra. H. Nasihin M.Kes', '195910161981101000', 'Labu.jpg', 'Saya Dra. H. Nasihin M.Kes', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089644445555'),
(13, 'Dwi Aprilina Andriani S.Kep, Ns, M.Kep', '199104252019022000', 'alexmdc___4ezcchqhkX___.jpg', 'Saya Dwi Aprilina Andriani S.Kep, Ns, M.Kep', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089655556666'),
(14, 'Ema Hikmah S.KP.M.Kep', '197506182001122000', 'alexmdc___76TFFjqhui___.jpg', 'Saya Ema Hikmah S.KP.M.Kep', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089666667777'),
(15, 'H. Thoha SKM.M.Si', '196207071989031000', 'alexmdc___Bj7qF3lHx_8___.jpg', 'Saya H. Thoha SKM.M.Si', 'JL. M.H Thamrin Gg. Keamilan No. 07 RT 02 RW 02 Cikokol, Tangerang', '089677778888');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nipdsn` varchar(128) NOT NULL,
  `c1` int(2) NOT NULL,
  `c2` int(2) NOT NULL,
  `c3` int(2) NOT NULL,
  `c4` int(2) NOT NULL,
  `c5` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nip`, `nipdsn`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 'P279011180052', '195802081984012000', 90, 80, 70, 60, 80),
(2, '1814498961', '199104252019022000', 3, 1, 20, 52, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `infodosen`
--
ALTER TABLE `infodosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1075;

--
-- AUTO_INCREMENT untuk tabel `infodosen`
--
ALTER TABLE `infodosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
