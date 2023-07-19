-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2023 pada 17.00
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yudisium`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id_mhs` int(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `npm_mhs` varchar(100) NOT NULL,
  `email_mhs` varchar(100) NOT NULL,
  `hp_mhs` varchar(100) NOT NULL,
  `hobi_mhs` varchar(100) NOT NULL,
  `lulus_mhs` varchar(100) NOT NULL,
  `foto_mhs` varchar(100) NOT NULL,
  `prodi_mhs` varchar(100) NOT NULL,
  `alamat_mhs` text NOT NULL,
  `ayah_mhs` varchar(100) NOT NULL,
  `ibu_mhs` varchar(100) NOT NULL,
  `pekerjaan_mhs` varchar(100) NOT NULL,
  `status_mhs` varchar(100) NOT NULL,
  `pass_mhs` varchar(100) NOT NULL,
  `read_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id_mhs`, `nama_mhs`, `npm_mhs`, `email_mhs`, `hp_mhs`, `hobi_mhs`, `lulus_mhs`, `foto_mhs`, `prodi_mhs`, `alamat_mhs`, `ayah_mhs`, `ibu_mhs`, `pekerjaan_mhs`, `status_mhs`, `pass_mhs`, `read_pass`) VALUES
(1, 'SITI ROHAYATI', '19100025', 'sitirohayati812@gmail.com', '085765829585', 'Makan dan membaca novel', 'Terus maju dan hadapi masalah jangan pernah menyerah', 'SITI ROHAYATI.jpeg', 'Manajemen Informatika', 'Banyuwangi, Rt 05 Rw 02 Kec.Banyumas Kab.Pringsewu', 'KAMARI', 'PONISRI', '-', 'udah', 'd9256aaf49dc039dc828cc70fef9f075', '19100025\r'),
(2, 'NINDEA THALITA PUTRI', '20201003', 'nindeathalita18@gmail.com', '081539245093', 'Menyanyi dan meroaster kopi', 'The more you give the more you can get', 'NINDEA THALITA PUTRI.jpg', 'Manajemen Informatika', 'Jl sunan Giri Pringsewu Barat Barat Lampung ', 'Sunardi', 'Mia Oktavia', '-', 'udah', '5787be38ee03a9ae5360f54d9026465f', '20201003\r'),
(3, 'BUDI PRASETYO', '20201015', 'budiprasetyo2001.b@gmail.com', '081541299693', 'Olahraga', '\"Gapailah keinginan mu sampai kau meraihnya\"', 'BUDI PRASETYO.jpg', 'Manajemen Informatika', 'Simpang Rowo ', 'Pulan', 'Pulanah', '-', 'udah', '5787be38ee03a9ae5360f54d9026465f', '20201015\r'),
(4, 'ANI SAFITRI', '18201053', 'anisafitrimoet@gmail.com', '082282747279', 'Bernyanyi', 'janganlah takut untuk sebuah perubahan,karena setiap orang ada masanya dan setiap masa itu ada orang', 'ANI SAFITRI.jpeg', 'Manajemen Informatika', 'Dusun 7 varia agung RT/RW 27/07 varia agung kec. seputih mataram kab Lampung Tengah', 'REBO WIYANTO', 'CATEM', '-', 'udah', '5787be38ee03a9ae5360f54d9026465f', '18201053\r'),
(5, 'ANGGI FAZHAR AS', '18100141', 'fazharanggi07@gmail.com', '081297374655', 'Mendaki Gunung', 'Mengerjakan segala sesuatu dengan sungguh-sungguh agar tidak ada penyesalan dikemudian hari. ', 'ANGGI FAZHAR AS.png', 'Sistem Informasi', 'Perumahan Gading Permai blok A.19 Rt 001 Rw 001, Tulung Agung. Kecamatan Gading Rejo, Kabupaten Pringsewu. Lampung', 'Fasmanto', 'Hartini', '-', 'udah', '5787be38ee03a9ae5360f54d9026465f', '18100141\r'),
(6, 'MARETHA RAHMAWATI', '19100015', 'tharetha6301@gmail.com', '082178957823', 'Membuat Kue ', 'Setiap tantangan merupakan kesempatan untuk mengenal siapa diri kita dan untuk apa diri kita', 'MARETHA RAHMAWATI.jpg', 'Sistem Informasi', 'DUSUN II Timbul Rejo RT/RW 006/002 Kec. Bangun Rejo Kab. Lampung Tengah Prov. Lampung', 'MUHTADIN KHOIRU', 'SRI HARYATI', '-', 'udah', '5787be38ee03a9ae5360f54d9026465f', '19100015\r'),
(7, 'LINDA ANITA', '19100119', 'lindaanitasmkyasmida@gmail.com', '085273178452', 'Mencari dan menghabiskan uang', 'Punggung pisaupun apabila diasah pasti akan tajam juga', 'LINDA ANITA.jpg', 'Sistem Informasi', 'PEKON SUMBER REJO RT.001 RW.001', 'NGATIMIN', 'USTADIYAH', '-', 'udah', '5787be38ee03a9ae5360f54d9026465f', '19100119\r'),
(8, 'LUSIA LESTARY', '19100062', 'lusialestary06@gmail.com', '082278058761', 'Menari', '\"Nikmati dulu pahit pahitnya, kmu bukan hancur , kamu sedang berproses, this Will make you proud of ', 'LUSIA LESTARY.jpg', 'Sistem Informasi', 'Pekon Ampai , Kec. Limau, Kab. Tanggamus', 'JAMIN', 'SULASMI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100062\r'),
(9, 'ALFIAN DIO FIRMANSYAH', '19100032', 'superbluering14@gmail.com', '085838789671', 'PENGAJIAN', 'Ketahuilah bahwa kemenangan bersama kesabaran, kelapangan bersama kesempetin, Dan kesulitan bersama ', 'ALFIAN DIO FIRMANSYAH.jpg', 'Sistem Informasi', 'PRINGSEWU', 'SATINO (ALM)', 'SUPARNI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100032\r'),
(10, 'MUHAMMAD HUDA', '19100018', 'muhammadhudaa23@gmail.com', '082379524496', 'JOKIIN TUGAS MAHASISWA IBN', 'SHOLATLAH KAMU WALAU KAMU TIDAK BAIK KARENA DENGAN SHOLAT AKAN MENJADIKAN DIRIMU LEBIH BAIK', 'MUHAMMAD HUDA.jpg', 'Sistem Informasi', 'DESA SENDANG REJO, KECAMATAN SENDANG AGUNG, KABUPATEN LAMPUNG TENGAH', 'HASYIM AS\'ARI, S.Pd', 'UMI MASROHAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100018\r'),
(11, 'DENDI ORLANDO', '19100115', 'dendiorlando96@gmail.com', '082178620117', 'Sepak bola, voliball, ', 'Jangan menjadi orang pinter. Cukup menjadi orang mengerti. Karena orang pinter hanya bisa menbodohi ', 'DENDI ORLANDO.jpg', 'Sistem Informasi', 'Pekon way ilahan, Kec. Pulau panggung, Kab. Tanggamus', 'Rudi iskandar', 'lustari', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100115\r'),
(12, 'DEVI FITRIYANA', '19100004', '083160697200devi@gmail.com', '089632145531', 'Traveling', 'Gagal yang sesungguhnya adalah berhenti untuk mencoba', 'DEVI FITRIYANA.jpg', 'Sistem Informasi', 'Kalirejo Kec. Kalirejo Kab.Lampung Tengah', 'Sriyanto', 'Parmiyah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100004\r'),
(13, 'SHINTA REJITA', '19100059', 'shintarejita@gmail.com', '082275892170', 'Membaca', 'SUKSES ADALAH BERANI BERTINDAK DAN PUNYA PRINSIP', 'SHINTA REJITA.jpg', 'Sistem Informasi', 'Jl raya pasir ukir RT/RW 002/004 Kel pasir ukir kec pagelaran kab Pringsewu ', 'Simin Wirayuda', 'Suniarti', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100059\r'),
(14, 'AJI BAGASSWARA', '19100039', 'ajibagas302@gmail.com', '087788810963', 'Fotografi dan Desain Grafis', 'Untuk mencapai kesuksesan tidak hanya dengan satu cara, jadilah 10 versi terbaikmu, jangan takut unt', 'AJI BAGASSWARA.jpg', 'Sistem Informasi', 'Desa Panjerejo, Dusun Way Bayas, Kec. Gadingrejo, Kab. Pringsewu', 'Wagino', 'Yuningsih', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100039\r'),
(15, 'NADIATUL MUNAWAROH', '19100019', 'nadiyamunawaroh@gmail.com', '082123285338', '-', 'Kun Anta', 'NADIATUL MUNAWAROH.jpg', 'Sistem Informasi', 'Kebumen, Banjar Agung Udik, Kec.Pugung, Kab.Tanggamus', 'MUHAIMIN', 'MUTINGAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100019\r'),
(16, 'CHAIRUL MUSTOFA FERNANDO', '19100042', 'cafotsum11@gmail.com', '081368647960', 'Sepak bola', 'Selalu belajar dari kesalahan orang lain', 'CHAIRUL MUSTOFA FERNANDO.jpg', 'Sistem Informasi', 'Dusun 01 RT/RW 01/01 Sribasuki Kec kalirejo kab. Lampung Tengah ', 'H. Ibrahim ali chandra,', 'HJ. Atty S Hayati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100042\r'),
(17, 'ELSA OLIVIA', '19100046', 'elsaolivia86@gmail.com', '081369320807', 'Olahraga', 'Jadilah seperti Karang di lautan yang tetap kokoh diterjang ombak, walaupun demikian air laut tetap ', 'ELSA OLIVIA.jpg', 'Sistem Informasi', 'Jl.Mekar Sari, Jogyakarta, Kec. Gading Rejo, Lampung', 'Dodi Muhammad Nur', 'Solina', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100046\r'),
(18, 'AJENG AMELIA NINGRUM', '19100114', 'ajengamelian@gmail.com', '085367395095', 'Olahraga', 'Cintailah apa yang kamu miliki dan milikilah apa yang kamu cintai', 'AJENG AMELIA NINGRUM.jpg', 'Sistem Informasi', 'Tias Bangun Kecamatan Pubian Kabupaten Lampung Tengah ', 'RIANTO WIDODO', 'SUTARMI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100114\r'),
(19, 'LUKAS WIBISONO PANGGABEAN', '19100061', 'lukaswibisono21@gmail.com', '082260936560', 'Bermain Futsal', 'Berbuat baiklah tanpa perlu alasan', 'LUKAS WIBISONO PANGGABEAN.jpg', 'Sistem Informasi', 'Asam Jaya Kecamatan Torgamba Kabupaten Labuhan Batu Selatan ', 'JANSEN CHARLES HASUDUNGAN PANGGABEAN', 'LUSIA DIDIN ANGGRAINI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100061\r'),
(20, 'EKHA FITRIASIH T D', '19100045', 'ekhafitritd22@gmail.com', '081330362135', 'TRAVELING DAN BERNYANYI', 'TEKANAN DI MASA DEPAN AKAN SEMAKIN BESAR, JADI KAMU HARUS MENEMUKAN BEBERAPA CARA UNTUK MELEPASKAN T', 'EKHA FITRIASIH T D.jpeg', 'Sistem Informasi', 'BLITAR, PATOMAN, PAGELARAN', 'S.DARONI,', 'HENI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100045\r'),
(21, 'ROBI ANANDA', '19100218', 'robiananda02@gmail.com', '085211397239', 'Otomotif', 'Berani ambil resiko untuk hasil yang labih baik', 'ROBI ANANDA.jpg', 'Sistem Informasi', 'Pekon Menggala, kec.Kotaagung Timur, Kab. Tanggamus, Lampung', 'Hafizi', 'Zianna', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100218\r'),
(22, 'KURNIA', '19100013', 'skurnia319@gmail.com', '081272791717', 'Makan, nonton, jalan-jalan kelilingin jalan', 'Sebaik-baik manusia adalah yang bermanfaat bagi manusia lain. ', 'KURNIA.jpg', 'Sistem Informasi', 'Sidoharjo', 'SUPARJAN', 'SARIYAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100013\r'),
(23, 'DIO ANGGORO', '19100005', 'dioanggoro619@gmail.com', '085841426248', 'Bobo manja', 'Only you can change your life, nobody else can do it for you', 'DIO ANGGORO.jpg', 'Sistem Informasi', 'Poncowarno', 'Agus Widodo', 'Suyati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100005\r'),
(24, 'MELTA SARI', '19100017', 'meltasari0901@gmail.com', '082269118725', 'MENGHITUNG UANG', 'TIDAK PENTING SEBERAPA LAMBAT ANDA MELAJU SELAGI ANDA TIDAK BERHENTI', 'MELTA SARI.jpg', 'Sistem Informasi', 'BANJAR AGUNG ILIR,KEC.PUGUNG, KAB.TANGGAMUS, PROV.LAMPUNG', 'RONI UNIZAR', 'YULIS', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100017\r'),
(25, 'KHOIRIL AKBAR', '19100011', 'khoirilakbar92@gmail.com', '082269400326', 'MEMBACA', 'JAGALAH BENANG MERAHMU SEBAIK MUNGKIN AGAR TIDAK KUSUT', 'KHOIRIL AKBAR.jpg', 'Sistem Informasi', 'SUKAWATI, KRESNOMULYO, AMBARAWA, PRINGSEWU, LAMPUNG', 'TURIMAN', 'ISTIQOMAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100011\r'),
(26, 'KOMARIYAH', '19100027', 'komariyahdlazzo@gmail.com', '085267736118', 'MEMBACA', '\"BELAJAR DARI KEGAGALAN ADALAH HAL YANG BIJAK\"', 'KOMARIYAH.jpg', 'Sistem Informasi', 'LAMPUNG BARAT ', 'SOLEHAN', 'NUR AINI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100027\r'),
(27, 'HENI ULANDARI', '19100009', 'heniulan04@gmail.com', '085380341944', 'Renang', 'Belajar dari kegagalan  adalah hal yang bijak.', 'HENI ULANDARI.jpeg', 'Sistem Informasi', 'Banjar agung udik Kec.Pugung Kab.Tanggamus ', 'MARWAN SAYAH', 'KEMALA SYAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100009\r'),
(28, 'PEBRI SETIAWAN', '19100020', 'pebrisetiawan99@gmail.com', '082280118821', 'Touring', 'Belajar dari kegagalan adalah hal yang bijak.', 'PEBRI SETIAWAN.jpg', 'Sistem Informasi', 'Dusun Sri Menanti, RT 017 RW 007, Kelurahan Gerning, Kec. Tegineneng, Kab. Pesawaran', 'Sukedi', 'Triyani', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100020\r'),
(29, 'HESTI LIANA', '19100117', 'hestiliana164@gmail.com', '085789583403', 'Olahraga ', 'Kejarlah jangan menunggu', 'HESTI LIANA.jpg', 'Sistem Informasi', 'Talang Padang', 'Sahrijal', 'Mas\'ah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100117\r'),
(30, 'ASNIATI', '20110025', 'asniati297@gmail.com', '085764016135', 'Organisasi ', 'Karna ilmu akan menghidupkan jiwa ', 'ASNIATI.jpg', 'Sistem Informasi', 'Lamuran RT/RW 003/002 Pekon Teratas kecamatan Kotaagung ', 'Asep Sapuri', 'Wasriyah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '20110025\r'),
(31, 'ALI ZAINAL ABIDIN', '19100002', 'alisajjady4@gmail.com', '085832917710', 'Membaca', 'Jangan pernah berhenti untuk berjuang, meskipun terkadang terasa melelahkan. Namun yakinlah dari set', 'ALI ZAINAL ABIDIN.jpg', 'Sistem Informasi', 'Blitarejo', 'Sutarmin', 'Sutiyah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100002\r'),
(32, 'MUHAMAD SIDDIK', '19100222', 'muhammadsiddik0402@gmail.com', '082282460567', 'Gaming', 'Sesungguhnya Bersama Kesulitan itu ada Kemudahan ', 'MUHAMAD SIDDIK.jpg', 'Sistem Informasi', 'Pekon Kandang Besi Kec. Kotaagung Barat', 'Sya\'ari Ependi', 'Heriyanti', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100222\r'),
(33, 'REZA SEPTIAN ZULKARNAEN', '19100028', 'rezaseptianzulkarnaen@gmail.com', '082289318732', 'Menjadi Tampan yang Anti Tersakiti ??', 'Don\'t Let Your Fear and Laziness Overpower Your Dreams', 'REZA SEPTIAN ZULKARNAEN.jpg', 'Sistem Informasi', 'Tj. Likut Pekon Tiuh Memon Kec. Pugung Kab. Tanggamus ', 'ZULKARNAEN', 'SUNARYATI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100028\r'),
(34, 'NIDA NAFI\'AH', '19100182', 'nsnida50@gmail.com', '083157637496', 'Menulis', 'Sukses adalah saat persiapan dan kesempatan bertemu', 'NIDA NAFI\'AH.jpg', 'Sistem Informasi', 'Dusun XII way tebu', 'Sazili', 'suparmi', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100182\r'),
(35, 'DWI NOVIASARI', '19100265', 'dwinoviasari36@gmail.com', '081273505017', 'Memasak', 'Rahasia agar bisa maju adalah memulai', 'DWI NOVIASARI.jpg', 'Sistem Informasi', 'Plered Pekon Benteng jaya kec.kotaagung kab.tanggamus', 'Syama’un', 'Maisaroh', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100265\r'),
(36, 'DIAN WIDIASTUTI', '19100137', 'dianwidia002@gmail.com', '08154053430', 'Membaca', 'Jadilah orang yang baik,\nTapi jangan terlalu baik,\nSoalnya ngga baik', 'DIAN WIDIASTUTI.jpg', 'Sistem Informasi', 'Tanjung Anom', 'Sumisman', 'Lili Liawanda', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100137\r'),
(37, 'MUHAMMAD ADITYA LUTFIANSYAH', '19100037', 'adityalutfi1601@gmail.com', '085769728612', 'Futsal, Game online', 'Tujuan Kita hidup di dunia ini adalah untuk mempersiapkan kematian kita. (Muhammad Aditya Lutfiansya', 'MUHAMMAD ADITYA LUTFIANSYAH.jpeg', 'Sistem Informasi', 'Podosari, Pringsewu', 'Achmad Lutfi', 'Yulianah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100037\r'),
(38, 'LEKOK ARMI', '19100272', 'armiarbi@yahoo.com', '085269199900', 'Memasak', 'Hiduplah seperti tanaman padi...semakin berisi semakin merunduk', 'LEKOK ARMI.jpg', 'Sistem Informasi', 'Banjar Agung Ilir  pugung  tanggamus ', 'Abiyazid', 'Rohana', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100272\r'),
(39, 'MUHAMAD FATUROHMAN', '19100085', 'fatur0109@gmail.com', '081368110758', 'Bermain Game Online', '“Sesungguhnya yang terbaik di antara kamu adalah mereka yang mempunyai akhlak yang paling utama” (Ha', 'MUHAMAD FATUROHMAN.jpg', 'Sistem Informasi', 'Pekon Tanjung Anom kec. Ambarawa Kab. Pringsewu', 'Suparno', 'Isnartiyah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100085\r'),
(40, 'ARI KURNIA SANDI', '19100070', 'sandiary110@gmail.com', '085769387650', 'Badminton', 'Life is like riding bicycle. to keep your balance, you must keep moving ', 'ARI KURNIA SANDI.jpg', 'Sistem Informasi', 'Bumi Agung I', 'Hamidi', 'Nila Asni', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100070\r'),
(41, 'MIFTAHURROFI ASID-QI', '19100138', 'miftahurasidqi@gmail.com', '085840336445', 'Ngopi dan ngoding', 'Jangan berputus asa', 'MIFTAHURROFI ASID-QI.jpg', 'Sistem Informasi', 'Jl. Kelengkeng No. 236, Desa Sumberrejo, Kec. Pagelaran, Kab. Pringsewu', 'TAMI HADI', 'SITI SOPIYAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100138\r'),
(42, 'ANGGER STYOSO', '19100139', 'anggerstyoso5993@gmail.com', '081368267528', 'Sepakbola ', 'Jangan berhenti untuk melakukan hal hal baik', 'ANGGER STYOSO.jpg', 'Sistem Informasi', 'Jl.ky al-basyar Sumberagung RT 02 RW 02', 'Ayah ANDI', 'TOYIBAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100139\r'),
(43, 'AHMAD ROFIQI ', '19100195', 'rofiqiahmad604@gmail.com', '088286513630', 'Main Sepak bola', 'Tidak Ada Kata Motivasi yang Berharga Sebelum Engkau Bangun Untuk Sadar Diri dan Mulai Membangun Mim', 'AHMAD ROFIQI .jpg', 'Sistem Informasi', 'Dusun III RT/RW 005/003 Kel. Sridadi Kec. Kalirejo', 'SUGIATNO', 'ASMINAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100195\r'),
(44, 'ALMIRA CAESARA HARDIYUMNA', '19100030', 'almirahardi8@gmail.com', '092279958981', 'Menonton film ', '\"Semua Yang Anda Inginkan Ada di Sisi Lain Dari Rasa Takut\"', 'ALMIRA CAESARA HARDIYUMNA.jpg', 'Sistem Informasi', 'Dusun Gombong, Kelurahan Pujodadi, Kecamatan Pardasuka, Kabupaten Pringsewu ', 'EDY ELIYASRONI', 'SUHARTINI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100030\r'),
(45, 'WINDALIA', '19100225', 'mrswindalia@gmail.com', '085368360003', 'MEMBACA', 'SEBUAH TANTANGAN AKAN SELALU MENJADI BEBAN, JIKA ITU HANYA DIPIKIRKAN.SEBUAH CITA- CITA JUGA ADALAH ', 'WINDALIA.jpg', 'Sistem Informasi', 'WAY JELAI RT 02/02 PEKON NEGERI RATU KEC.KOTA AGUNG', 'SAMSURI', 'MUHIMAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100225\r'),
(46, 'YANADIA ZAHRA', '19100255', 'Yanadiazahra13@gmail.com', '0895612159986', 'Nonton film', 'Hidup adalah perjalanan bukan pertandingan', 'YANADIA ZAHRA.jpg', 'Sistem Informasi', 'Pardasuka', 'Kiswandi', 'Hasunah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100255\r'),
(47, 'TANGGUH IBRAMTAMA TANUR', '19100130', 'tangguhibramtamatanur@gmail.com', '081215060299', 'Musik', 'Gaya boleh gembel, yang penting otak dan ide jangan.', 'TANGGUH IBRAMTAMA TANUR.jpg', 'Sistem Informasi', 'Parerejo', 'Muhaji', 'Hartini', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100130\r'),
(48, 'NUR KHOLIFAH', '19100169', 'nurk05909@gmail.com', '085840406285', 'Renang dan lari', '\"Only you can change your life. Nobody else can do it for you \"\nOrang lain gak akan paham Struggle d', 'NUR KHOLIFAH.jpg', 'Sistem Informasi', 'Tanjung Begelung, kec. Pulau Panggung Tanggamus', 'ISHAQ', 'Elda Sukmawati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100169\r'),
(49, 'VINCENCIUS BELLIN ATMAJA', '19100122', 'vincenbellin@gmail.com', '085768861749', 'Desain grafis & musik', '“Karena masa depan sungguh ada, dan harapanmu tidak akan hilang“\n(Amsal 23:18)', 'VINCENCIUS BELLIN ATMAJA.jpg', 'Sistem Informasi', 'DESA SENDANG REJO KEC.SENDANGAGUNG KAB. LAMPUNG TENGAH', 'SARWOTO', 'PUJIATI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100122\r'),
(50, 'MAULIDIANA ALUNANDIKA', '19100016', 'maulidianaalunandika885@gmail.com', '08134453336', 'Membaca', 'Selalu berusaha dan yakinlah bahwa sang pencipta selalu memberi yang terbaik untuk kita', 'MAULIDIANA ALUNANDIKA.jpg', 'Sistem Informasi', 'Kalirejo kecamatan Kalirejo kabupaten Lampung Tengah ', 'MAHDENAN', 'MASITOH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100016\r'),
(51, 'EKA RELIANA SARI', '19100006', 'ekareliana06@gmail.com', '081947631282', 'Memasak', 'Tidak masalah jika kamu berjalan dengan lambat, asalkan kamu tidak pernah berhenti berusaha.', 'EKA RELIANA SARI.jpg', 'Sistem Informasi', 'Pengaleman, Kresnomulyo, Kecamatan Ambarawa kabupaten Pringsewu ', 'SUSIANTO', 'MUNTASAROH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100006\r'),
(52, 'FITRI NINGSIH', '19100076', 'fn609893@gmail.com', '?\'082376870235?', 'Olahraga', 'Ada banyak hal yang tidak bisa kamu ubah namun bisa kamu syukuri', 'FITRI NINGSIH.jpg', 'Sistem Informasi', 'Cilancar', 'RAFI UDI', 'SITI ASMARIAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100076\r'),
(53, 'SUGINO', '19100063', 'ginoputrabasong199@gmail.com', '085658610286', 'Penerbangan ', 'Belajar dari kesalahan yang pernah ada', 'SUGINO.jpg', 'Sistem Informasi', 'Mojokerto kec Padang ratu', 'Alm Mulyono, pariyem', 'pariyem', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100063\r'),
(54, 'TITIK WULANDARI', '19100208', 'titikwulandari2019@gmail.com', '082247411596', 'Membaca', 'Tetap menjadi versi terbaik dirimu sendiri, tetaplah baik walaupun lelah', 'TITIK WULANDARI.jpg', 'Sistem Informasi', 'MESUJI TIMUR ', 'RUBIMAN', 'WARSINI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100208\r'),
(55, 'SAODAH', '19100232', 'saodahajja34@gmail.com', '081319527151', 'Memasak', '\"Janganlah meminta bukti bahwa doamu akan dikabulkan oleh tuhan,tapi buktikanlah kesungguhan dari do', 'SAODAH.jpg', 'Sistem Informasi', 'Pekon Kelungu induk,Rt01/01, Kec.Kotaagung,Kab.Tanggamus', 'Abdul Rohman', 'pulanah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100232\r'),
(56, 'SAFITRA', '19100023', 'safitra141500@gmail.com', '082135178866', 'Olahraga', 'Ambillah ke jujuran demi ke baikan', 'SAFITRA.jpeg', 'Sistem Informasi', 'Bandun baru', 'Auzar MT', 'Elyati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100023\r'),
(57, 'WIWI WULANDARI', '19100201', 'wiwiwulandari618@gmail.com', '082375936239', 'Membaca novel', 'Jadilah diri sendiri jangan perdulikan kata orang terus maju dan raih impianmu', 'WIWI WULANDARI.jpg', 'Sistem Informasi', 'Desa Kampung baru, kecamatan pematang sawa', 'AHMAD BUANG', 'IRNA LAILA', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100201\r'),
(58, 'THALIA NURSA INDAH', '19100204', 'talianursaindah@gmail.com', '081368418386', 'Menulis ', 'Tidak harus menjadi hebat untuk memulai, tetapi harus memulai untuk menjadi hebat', 'THALIA NURSA INDAH.jpg', 'Sistem Informasi', 'Pekon kedamaian kec Kotaagung ', 'SARDANA', 'NURLAILA', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100204\r'),
(59, 'AQUILEIA FERI KRISMA', '19100090', 'krismaaquileiaferi@gmail.com', '081369346446', 'Membuat orang lain bahagia', 'HARI INI SAYA BAIK DAN SETERUSNYA SAYA AKAN TETAP BAIK', 'AQUILEIA FERI KRISMA.jpeg', 'Sistem Informasi', 'ADILUWIH', 'Y. BUDI WALUYO', 'CH. SRI SUKESI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100090\r'),
(60, 'RIKA DESTIANA', '19100022', 'rickadestiana@gmail.com', '083164856615', 'Rebahan sambil scroll tiktok ', 'Akan ada satu masa dalam hidup seseorang merasakan satu persoalan, yang seakan-akan beban berat dipi', 'RIKA DESTIANA.webp', 'Sistem Informasi', 'Sinarsari kec.Kalirejo kab.Lampung tengah', 'Ayah Ponikin', 'Nyariati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100022\r'),
(61, 'AFRILIAN TAMA PUTRA', '19100223', 'Afriliantamaputra@gmail.com', '082371242539', 'memancing ', 'Tindakan adalah kunci menuju kesuksesan', 'AFRILIAN TAMA PUTRA.jpg', 'Sistem Informasi', 'sinar saudara wonosobo', 'ahmad afriandi', 'sulastri', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100223\r'),
(62, 'PUTRIANA WULANDARI', '19100021', 'wulandariputriana518@gmail.com', '088287682755', 'Rebahan sambil scroll tiktok ', 'Maka sesungguhnya bersama kesulitan ada kemudahan. Maka apabila engkau \ntelah selesai (dari suatu ur', 'PUTRIANA WULANDARI.jpg', 'Sistem Informasi', 'Poncowano kecamatan Kalirejo kabupaten Lampung tengah ', 'Amat Riyanto', 'Sri Yuniati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100021\r'),
(63, 'HENI SISWATY', '19100253', 'henisiswati0306@gmail.com', '085876300882', 'Travelling', '\"Tidak ada yang sia-sia dalam belajar karena ilmu akan bermanfaat pada waktunya.\"', 'HENI SISWATY.jpg', 'Sistem Informasi', ' Pekonluah, Kecamatan Talang Padang, Kabupaten Tanggamus, Provinsi Lampung', 'BAMBANG SISWOYO', 'SISWOYO', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100253\r'),
(64, 'GIRI PAMUNGKAS', '19100220', 'Pamungkasgiri1@gmail.com', '085268321090', 'Membaca pikiran sendiri', 'Hidup bermanfaat untuk orang lain', 'GIRI PAMUNGKAS.jpg', 'Sistem Informasi', 'Talang Rejo Kota Agung Timur Tanggamus', 'TALBI- GINEM', 'GINEM', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100220\r'),
(65, 'BAMBANG DAVIKO ABI', '19100217', 'bambangdavikoabi@gmail.com', '082374892325', 'olahraga', 'sukses di waktu muda', 'BAMBANG DAVIKO ABI.jpg', 'Sistem Informasi', 'negri agung', 'MUKLANI', 'HERNAINI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100217\r'),
(66, 'AJIYAKSA WIGUNA', '19100221', 'aji.yaksa09@gmail.com', '089648417617', 'BASKET', 'MENJADI LEBIH HIDUP', 'AJIYAKSA WIGUNA.png', 'Sistem Informasi', 'BAROS, JL. SEMAKA, NO.456, RT/RW.001/001, KEL. BAROS, KEC. KOTAAGUNG, KAB. TANGGAMUS, PROV. LAMPUNG - 35384', 'ICHROZI EFFENDI', 'AISYATUN SYAFIUDDIN', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100221\r'),
(67, 'DIMAS IRIANTO ARDI', '19100133', 'dimasiriantoardi628@gmail.com', '085267521812', 'Main game online ', 'Tidak ada kata motivasi yang berharga sebelum engkau untuk sadar diri dan mulai membangun mimpi ', 'DIMAS IRIANTO ARDI.jpg', 'Sistem Informasi', 'Pekon Sinar Petir, Kecamatan Talang Padang Kabupaten Tanggamus ', 'SUKARDI', 'IROH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100133\r'),
(68, 'ARIF WAHYUDI', '19100120', 'aw8377650@gmail.com', '085768848590', 'Nonton flm ', 'Jangan takut salah, karena dengan kesalahan yang pertama kita dapat menambah pengetahuan untuk menca', 'ARIF WAHYUDI.jpg', 'Sistem Informasi', 'Sendang rejo kecamatan Sendang agung kabupaten Lampung tengah ', 'Alm bapak basman', 'partikah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100120\r'),
(69, 'RAHMAH DWI KURNIAWATI', '19100112', 'rahmahdwikurniawati3@gmail.com', '087892317052', 'Membaca', 'Tetaplah Hidup', 'RAHMAH DWI KURNIAWATI.jpg', 'Sistem Informasi', 'Condong Sari, Sindang Garut', 'Muhyanto', 'Nuryanti', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100112\r'),
(70, 'IMAM ARIFIN', '19100050', 'Imamarf36@gmail.com', '085609086512', 'Futsal', 'Kegagalan merupakan kesuksesan yang tertunda', 'IMAM ARIFIN.jpg', 'Sistem Informasi', 'Tulang bawang barat', 'AYAH MUSLIM', 'SITI HALIMAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100050\r'),
(71, 'SERI SAPUTRI', '19100211', 'serisaputri58@gmail.com', '082280190424', 'MENONTON', 'JANGAN BIARKAN BAYANG-BAYANG MASALALUMU MENGGELAPKAN AMBANG PINTU MASA DEPANMU', 'SERI SAPUTRI.jpg', 'Sistem Informasi', 'BANGUN REJO KECAMATAN SEMAKA KABUPATEN TANGGAMUS', 'SUPRIYONO', 'SUPARMI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100211\r'),
(72, 'ZETIYA', '19100268', 'zetiya86@gmail.com', '082278888535', 'Makan', 'Siapa yang bersungguh - sungguh akan berhasil, siapa yang bersabar akan beruntung, siapa yang berjal', 'ZETIYA.jpg', 'Sistem Informasi', 'srikaton', 'HAZLI', 'ALIDAYANI Alm', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100268\r'),
(73, 'DWI WAHYUNI', '19100210', 'dwiw0436@gmail.com', '081366639733', 'Membaca', 'Kesuksesan Berasal Dari Usaha Kecil-Kecilan Yang Ditelateni Setiap Harinya', 'DWI WAHYUNI.jpg', 'Sistem Informasi', 'Desa Srikaton Kecamatan Semaka', 'SUGITO', 'SUYANTI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100210\r'),
(74, 'ANDI HALIM FATURROHMAN', '19100040', 'andifaturrohman8@gmail.com', '08176393297', 'Hobi aku cari duit ,tapi nggak kaya-kaya', 'Jika orang lain bisa, maka aku belum tentu ', 'ANDI HALIM FATURROHMAN.jpg', 'Sistem Informasi', 'Desa Kota Baru kecamatan Padang ratu kabupaten Lampung Tengah ', 'Eko Purwadi dan Kasinem', 'Kasinem', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100040\r'),
(75, 'SYAHRUDIN', '19100099', 'Siudin.cah86@gmail.com', '085609786976', 'Maen Catur', '“Anda mungkin bisa menunda, tapi waktu tidak akan menunggu”', 'SYAHRUDIN.jpg', 'Sistem Informasi', 'Tanjung Sari, Pekon Tiuhmemon, Kec.Pugung, Kab.Tanggamus', 'Rohim', 'Dewi Sartika', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100099\r'),
(76, 'ADE LAYLA FITRIANI', '19100167', 'dewiponcowati2016@gmail.com', '089629199738', 'Menggambar', 'Tetapi boleh jadi kamu tidak menyenangi sesuatu, padahal itu baik bagimu, dan boleh jadi kamu menyuk', 'ADE LAYLA FITRIANI.jpg', 'Sistem Informasi', 'JL. A. YANI PRINGOMBO. RT/RW: 003/001. Kel/Desa: PRINGSEWU TIMUR. Kecamatan: PRINGSEWU', 'Ahmad Rau', 'Dewi Poncowati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100167\r'),
(77, 'KARDI', '19100205', 'kardirinaldi84@gmail.com', '085658981771', 'Bersepeda', 'Jangan Pernah Lupa Untuk Selalu Bersyukur', 'KARDI.jpg', 'Sistem Informasi', 'JL Jenderal Sudirman Gunung Sugih Liwa Lampung Barat', 'SYARIF ALI', 'BARNA SARI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100205\r'),
(78, 'ERINA YOGI PRATIWI', '19100047', 'yogipratiwie@gmail.com', '085839191646', 'Memasak', 'Orang positif saling mendoakan, orang negatif saling menjatuhkan. Orang sukses mengerti pentingnya p', 'ERINA YOGI PRATIWI.jpg', 'Sistem Informasi', 'Mojokerto', 'Suwarto ', 'Suhartati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100047\r'),
(79, 'PARYONO', '19100266', 'larasayuningtiyas92@gmail.com', '082175521395', 'Menyanyi ', 'Mahasiswa adalah garda yang kuat dalam menyampaikan pikiran rakyat.', 'PARYONO.jpg', 'Sistem Informasi', 'Sudimoro, RT01/RW01, kec.Semaka, kab.Tanggamus', 'Muhajir ', 'Aminah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100266\r'),
(80, 'NOVIAN DENI SAPUTRA', '19100168', 'byudeni675@gmail.com', '085783232796', 'Noding & shopee', '‘’Belajarlah dari kemarin, nikmati hari ini, dan persiapkan diri untuk esok yang lebih baik.’’\n‘’Jan', 'NOVIAN DENI SAPUTRA.jpg', 'Sistem Informasi', 'Dusun 2a inpres, Masjid AL-fattah Bengkel las Uli/Deni purwodadi kec.Gisting kab.tanggamus', 'Supani', 'Almarhumah Hamdanah', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100168\r'),
(81, 'ALDI', '19100224', 'aldialdisaputra1999@gmail.com', '085273416144', 'Badminton ', 'Jika Orang lain bisa, maka aku juga bisa', 'ALDI.jpg', 'Sistem Informasi', 'Jln. Moh Yasin Taman Putra ', 'Fauzi', 'Rohana', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100224\r'),
(82, 'GANDI WISNU PUTRA', '21110047', 'gandi.wisnu@gmail.com', '085377396555', 'BOLA VOLI', 'BERMANFAAT BUAT ORANG LAIN JANGAN PERNAH BERHENTI BERBUAT BAIK', 'GANDI WISNU PUTRA.jpg', 'Sistem Informasi', 'Dusun V  Rt/Rw  036/05 Desa Labuhan Ratu VII, Kecamatan Labuhan Ratu Kabupaten Lampung Timur , 34196', 'WISNU PAMUNGKAS', 'RIYANG SUSANTI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '21110047\r'),
(83, 'DANY RAHMATULLAH', '19100087', 'danny@smktelkom-lpg.sch.id', '087868769770', 'Desain Grafis', 'Lakukan hari ini apa yang bisa kamu lakukan.', 'DANY RAHMATULLAH.jpg', 'Sistem Informasi', 'Sumberejo Kecamatan. Pagelaran, Kabupaten. Pringsewu.', 'Mustofa', 'Endang Sri Purwanti', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100087\r'),
(84, 'IRNANDA WIJAYA SUSILO', '19100234', 'irnandawijaya95@gmail.com', '081368379269', 'Berkelana', 'More bigger,More better', 'IRNANDA WIJAYA SUSILO.jpg', 'Sistem Informasi', 'Madang Atas Pekon Kusa Kec.Kota Agung Kab.Tanggamus', 'SUSILO UTOMO', 'MAYA SOFYA', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100234\r'),
(85, 'IDO RIANO ADITURI', '19100049', 'idoo.riann@gmail.com', '085384873339', 'Menyukai hal baru, kecuali cewek baru', 'Disiplin cerminan diri', 'IDO RIANO ADITURI.jpg', 'Sistem Informasi', 'WAY KANAN', 'Alm. Rifai', 'Tugiyem', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100049\r'),
(86, 'AJIE SAPUTRA', '19100001', 'saputraaji752@gmail.com', '085839491078', 'Basket', 'Sesuatu yang menurut mu Kekurangan mu mungkin saja kelebihan mu, yang harus di lakukan yaitu percaya', 'AJIE SAPUTRA.jpg', 'Sistem Informasi', 'KALIREJO', 'Yurdi', 'Rohela', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100001\r'),
(87, 'FAHRUL ROJI', '19100101', 'fakhrurozigisting@gmail.com', '082371890122', 'Programming ', 'Rasa insecure-mu bukan tanggung jawabku dan rasa insecure-ku bukan tanggung jawabmu', 'FAHRUL ROJI.jpg', 'Sistem Informasi', 'Gisting atas Kec.Gisting Kab.Tanggamus', 'Supriono', 'Ernawati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100101\r'),
(88, 'HERU DWI HANDAYANI', '19100226', 'herudwihandayani31@gmail.com', '082179121687', 'Membaca', 'Buku adalah jendela ilmu', 'HERU DWI HANDAYANI.jpg', 'Sistem Informasi', 'Pekon Simpang Kanan', 'Kardi Susilo', 'Sumini', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100226\r'),
(89, 'CHARITY WULANDARI', '19100183', 'charitywulandari2306@gmail.com', '08979088036', 'MENYANYI ', 'Tak peduli seberapa buruk masalalu saya , yang harus orang lain tahu sekarang adalah saya berusaha b', 'CHARITY WULANDARI.jpg', 'Sistem Informasi', 'PURWODADI DUSUN 2B RT 002 RW 002 KECAMATAN GISTING ', 'SURATNO', 'SUTIAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100183\r'),
(90, 'KURNIADI', '19100178', 'kurnigaul7@gmail.com', '085273135237', 'Futsal ', 'Orang Kuat tidak bisa dihasilkan dari pujian biasa - biasa saja ', 'KURNIADI.jpg', 'Sistem Informasi', 'Margo sari,RT/RW: 02/01,Desa:Rawa Ragil,Kec.Rawa Pitu,Kab.Tulang Bawang', 'ROHID', 'TUMIRAH', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100178\r'),
(91, 'ANDRY ARDIANSYAH', '19100084', 'andryardiansyah0505@gmail.com', '088269315703', 'berenang', 'Tidak ada kata motivasi sebelum engkau bangun untuk sadar diri dan membangun mimpi', 'ANDRY ARDIANSYAH.jpg', 'Sistem Informasi', 'GUMUKMAS. kec. Pagelaran Kab.Pringsewu', 'PARDIYO', 'ROSIYATUN S.Kom', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100084\r'),
(92, 'REDIYANSYAH', '19100273', 'rediyansyah69@gmail.com', '082186763396', 'Bulutangkis', '\"Berbuat baiklah tanpa perlu alasan\"', 'REDIYANSYAH.jpg', 'Sistem Informasi', 'Jl.Bumi jaya', 'Jaiman', 'suryati', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100273\r'),
(93, 'HARI PUTRA PRATAMA', '19100216', 'hariputrapratama19@gmail.com', '085788173213', 'TENIS MEJA', 'Hidup ini sederhana, cara pikirmu saja yang terlalu rumit.', 'HARI PUTRA PRATAMA.jpg', 'Sistem Informasi', 'PADANG RATU KEC. SUNGKAI UTARA KAB. LAMPUNG UTARA', 'HASAN BAHORI', 'ROSNIDA', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100216\r'),
(94, 'HASAN ASKARI', '19100187', 'hasanaskari.study@gmail.com', '082281524328', 'MENONTON FILM', 'Hidup baik-baik saja tanpa memiliki motto', 'HASAN ASKARI.png', 'Sistem Informasi', 'Gisting, Tanggamus, Lampung', 'SAIRIN', 'MARYAM', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100187\r'),
(95, 'IRFAN HIDAYAT', '19100125', 'pshtirfan2000@gmail.com', '081271110708', 'Olah raga ', 'Jika kamu tidak berjalan hari ini, maka kamu harus berlari di kemudian hari ', 'IRFAN_HIDAYAT.jpg', 'Sistem Informasi', 'SRIDADI Kec. Kalirejo Lampung Tengah ', 'SUPARDI', 'RUSWATI', '-', 'new', '5787be38ee03a9ae5360f54d9026465f', '19100125\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alias` varchar(350) NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `akabest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_app`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `gambar`, `akabest`) VALUES
(1, 'YUDISUM', '2022/2023', 'IBN PRINGSEWU', 'IBN', '-', '<h1>Silahkan Mengisi form di bawah ini, data foto dan biodata akan di tampilkan di slide pada saat mahasiswa di panggil di depan untuk prosesi wisuda atau yidisuum pastikan data anda benar dan valid.</h1>\r\n', '18102022034029.jpg', 'mardybest@gmail.com'),
(2, 're', '', 'MARDIYANTO', '19081989578978975', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampilmhs`
--

CREATE TABLE `tampilmhs` (
  `id_mhs` int(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `npm_mhs` varchar(100) NOT NULL,
  `email_mhs` varchar(100) NOT NULL,
  `hp_mhs` varchar(100) NOT NULL,
  `hobi_mhs` varchar(100) NOT NULL,
  `lulus_mhs` varchar(100) NOT NULL,
  `foto_mhs` varchar(100) NOT NULL,
  `prodi_mhs` varchar(100) NOT NULL,
  `alamat_mhs` text NOT NULL,
  `ayah_mhs` varchar(100) NOT NULL,
  `ibu_mhs` varchar(100) NOT NULL,
  `pekerjaan_mhs` varchar(100) NOT NULL,
  `status_mhs` varchar(100) NOT NULL,
  `pass_mhs` varchar(100) NOT NULL,
  `read_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tampilmhs`
--

INSERT INTO `tampilmhs` (`id_mhs`, `nama_mhs`, `npm_mhs`, `email_mhs`, `hp_mhs`, `hobi_mhs`, `lulus_mhs`, `foto_mhs`, `prodi_mhs`, `alamat_mhs`, `ayah_mhs`, `ibu_mhs`, `pekerjaan_mhs`, `status_mhs`, `pass_mhs`, `read_pass`) VALUES
(1, 'ok', '19100119', '', '', '', '', '', '', '', '', '', '', 'new', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(1, 'Adminatun Jhony', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tampilmhs`
--
ALTER TABLE `tampilmhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id_mhs` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tampilmhs`
--
ALTER TABLE `tampilmhs`
  MODIFY `id_mhs` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
