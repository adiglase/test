-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 01:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_people` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_date` date NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jembatan Barelang', 'jembatan-barelang', 'post-images/GRRKVYBZw9aTsYsaRFWJutPsd6PGsS0ZkiQa2kSD.jpg', 'Jembatan Barelang (singkatan dari Batam, Rempang, dan Galang) adalah sekumpulan jembatan yang menghubungkan pulau-pulau yaitu Pulau Batam, Pulau Tonton, Pulau Nipah, Pulau Rempang, Pulau Galang dan Pu...', '<div><strong>Jembatan Barelang</strong> (singkatan dari <strong>Ba</strong>tam, <strong>Re</strong>mpang, dan Ga<strong>lang</strong>) adalah sekumpulan jembatan yang menghubungkan pulau-pulau yaitu Pulau Batam, Pulau Tonton, Pulau Nipah, Pulau Rempang, Pulau Galang dan Pulau Galang Baru di daerah Batam, provinsi Kepulauan Riau, Indonesia. Masyarakat setempat menyebutnya \"Jembatan Barelang\". Ada juga yang menyebutnya \"Jembatan Habibie\" sebagai bentuk penghargaan atas jasa beliau dalam mengembangkan pulau Batam sebagai pulau industri serta mempelopori pembangunan jembatan ini.&nbsp;&nbsp;</div>', NULL, '2022-07-03 16:20:20', '2022-07-09 12:51:50'),
(2, 2, 'Wisata di Pulau Ranoh', 'wisata-di-pulau-ranoh', 'post-images/fbuEqV3jTxqtiAR1Blt7MaTpxNL9ciZLpy32aiYq.jpg', 'Pulau indah yang satu ini memiliki perairan yang tenang dan ombak yang begitu nyaman untuk disapa. Pertama dan utama tentu Sobat Pesona akan disuguhi pemandangan yang indah khas pulau tropis.Pulau Ran...', '<div>Pulau indah yang satu ini memiliki perairan yang tenang dan ombak yang begitu nyaman untuk disapa. Pertama dan utama tentu Sobat Pesona akan disuguhi pemandangan yang indah khas pulau tropis.<br><br>Pulau Ranoh juga menawarkan <em>spot</em> <em>snorkeling</em> yang indah untuk Sobat Pesona sekalian. Dipadukan dengan arus laut yang sangat tenang, dijamin semua yang <em>snorkeling</em> di perairan Pulau Ranoh akan terlena dan lupa waktu.</div>', NULL, '2022-07-09 12:53:12', '2022-07-09 12:54:38'),
(3, 4, 'Seaforest Adventure Batam', 'seaforest-adventure-batam', 'post-images/pAMrRiALR4DvHCVlvhYIqgjO3BXAcIGQmCN0oeSO.jpg', 'Dengan luas lebih dari 10 hektare, Seaforest Adventure menawarkan berbagai rekreasi untuk Sobat Pesona yang datang ke sana. Dengan konsep wisata edukasi, tempat ini seperti menjadi surga untuk liburan...', '<div>Dengan luas lebih dari 10 hektare, Seaforest Adventure menawarkan berbagai rekreasi untuk Sobat Pesona yang datang ke sana. Dengan konsep wisata edukasi, tempat ini seperti menjadi surga untuk liburan keluarga besar dan beraktivitas bersama.<br><br>Destinasi wisata Batam yang satu ini menawarkan demikian banyak wahana yang bisa Sobat Pesona nikmati. Mulai dari wisata di laut seperti Aqua Adventure Track, <em>kneeboarding</em>, hingga petualangan di darat dan aktivitas seru seperti <em>paintball</em>, memanah, serta <em>camping</em>. Siapa pun yang datang ke Seaforest Adventure akan betah berlama-lama karena kegiatan menarik yang ditawarkannya.<br>&nbsp;</div>', NULL, '2022-07-09 12:55:56', '2022-07-09 12:55:56'),
(4, 5, 'Taman Kelinci', 'taman-kelinci', 'post-images/E1SP5n57YTWNIy1wKRVZRg4FgzZrpIns7BeYqQ5M.jpg', 'Nah jika Sobat Pesona berkunjung ke Batam bersama anak-anak, Taman Kelinci ini akan jadi objek wisata Batam yang seru untuk dikunjungi. Berada di wilayah Sekupang, area ini merupakan ruang terbuka yan...', '<div>Nah jika Sobat Pesona berkunjung ke Batam bersama anak-anak, Taman Kelinci ini akan jadi objek wisata Batam yang seru untuk dikunjungi. Berada di wilayah Sekupang, area ini merupakan ruang terbuka yang cukup rindang dan sejuk. Namun tentu, berkunjung di siang hari sebaiknya dihindari mengingat suhu udara di Batam biasanya cukup panas.</div><div><br>Selain berinteraksi dengan kelinci-kelinci yang ada di sana, anak-anak juga bisa menikmati fasilitas Kid’s Outbound yang disediakan oleh pengelola Taman Kelinci Batam ini. Dengan warna-warna cerah menghiasi setiap sudutnya, anak-anak akan bersemangat ketika bermain di area tersebut.</div>', NULL, '2022-07-09 13:02:09', '2022-07-09 15:00:11'),
(5, 3, 'Ocarina Theme Park', 'ocarina-theme-park', 'post-images/CXXmKKjBwVnIlkOIFR9MPrmbNWdcOSWM8UMRdUC8.png', 'Batam tak melulu soal alam dan keindahannya saja, namun juga fasilitas modern yang dibangun dipinggir laut. Ocarina Batam Theme Park, menjadi salah satu objek yang wajib dikunjungi untuk Sobat –sobat...', '<div>Batam tak melulu soal alam dan keindahannya saja, namun juga fasilitas modern yang dibangun dipinggir laut. Ocarina Batam Theme Park, menjadi salah satu objek yang wajib dikunjungi untuk Sobat –sobat yang gemar memicu adrenalin dengan wahana-wahana modern seru.&nbsp;<br><br></div><div>Berada di wilayah Sadai, Batam, taman hiburan ini menawarkan wahana-wahana yang tak asing dijumpai di taman hiburan kota metropolitan. Beberapa wahana yang paling banyak dikunjungi antara lain kolam renang dan seluruh wahana yang ada di dalamnya seperti Giant Wheel, Fun Bikes, Play Ground, Viking,&nbsp; Spin tower,&nbsp; 360 Madness,&nbsp; serta Aerorail.&nbsp;</div>', NULL, '2022-07-09 13:28:11', '2022-07-09 14:57:42'),
(6, 2, 'Wisata di Pulau Tunjuk', 'wisata-di-pulau-tunjuk', 'post-images/ZY0DIpTOL689maRokRF2bnKF3wD9Wvo7gHWWllD8.jpg', 'Batam telah lama terkenal dengan berbagai pusat belanja bebas beanya. Namun yang belum banyak wisatawan tahu adalah bahwa kawasan yang dikelilingi deretan pulau menawan ini pun menawarkan liburan berk...', '<div>Batam telah lama terkenal dengan berbagai pusat belanja bebas beanya. Namun yang belum banyak wisatawan tahu adalah bahwa kawasan yang dikelilingi deretan pulau menawan ini pun menawarkan liburan berkesan bagi para penyuka laut.</div><div><br>Salah satunya yang dapat dengan mudah diakses dari Batam adalah Pulau Tunjuk. Letaknya di seberang Pulau Subang Mas dan dapat diakses dengan naik kapal dari Pelabuhan Telaga Punggur selama sekitar setengah jam. Pelabuhan itu sendiri bisa dicapai dari Bandara Hang Nadim selama 25 menit.&nbsp;</div>', NULL, '2022-07-09 13:29:21', '2022-07-09 15:00:21'),
(7, 1, 'Montigo Resort', 'montigo-resort', 'post-images/OVATLNIAqqJaB6wRkCAdPXAwhUzr8VBE8MpFNGiH.jpg', 'Montigo Resorts, Nongsa, yang dibangun persis di tepi laut, merupakan resort kelas atas, berlabel Bintang 5, dan banyak mendapat penghargaan. Terletak di sepanjang pantai eksklusif Nongsa di Batam, In...', '<div>Montigo Resorts, Nongsa, yang dibangun persis di tepi laut, merupakan resort kelas atas, berlabel Bintang 5, dan banyak mendapat penghargaan. Terletak di sepanjang pantai eksklusif Nongsa di Batam, Indonesia bagian barat, Montigo Resorts, Nongsa mempunyai luas lahan sekitar 12 hektare. Dari sini, hanya perlu waktu 30 menit menuju Singapura.<br><br>Terdapat 134 villa yang berada di tepi laut di Montigo Resorts, Nongsa Dengan menawarkan segala fasilitas yang mewah, anda akan merasa seperti di rumah bahkan lebih. Liburan anda akan terasa sempurna. Anda akan disuguhkan dengan ruang tamu luas di villa dan ruang makan terbuka untuk berkumpul bersama keluarga dan teman. Ada juga kolam renang pribadi untuk bersantai yang menghadap ke laut, dan dua kamar tidur luas dan mewah.</div>', NULL, '2022-07-09 13:33:16', '2022-07-09 14:57:29'),
(8, 4, 'Ex Camp Vietnam', 'ex-camp-vietnam', 'post-images/6yQEkmYEuZnkmYLUiO08x3iOLNg7AMMS8HEP9a9B.jpg', 'Ex Camp Vietnam atau biasa disebut Kampung Vietnam terletak di jembatan 5 Barelang, Batam, kepulauan Riau. Lebih tepatnya tempat ini terletak di Pulau Galang, sekitar 1,5 jam dari kota batam. Kampung...', '<div>Ex Camp Vietnam atau biasa disebut Kampung Vietnam terletak di jembatan 5 Barelang, Batam, kepulauan Riau. Lebih tepatnya tempat ini terletak di Pulau Galang, sekitar 1,5 jam dari kota batam. Kampung Vietnam merupakan salah satu wisata sejarah di Batam.&nbsp;</div><div><br>Banyak sekali kisah sejarah yang terjadi disana. Kampung Vietnam merupakan tempat pengungsian warga Vietnam saat perang yang terjadi di Vietnam. Mereka mengungsi di pulau galang untuk menyelamatkan diri. Di kampung Vietnam ini terdapat berbagai bangunan-bangunan peninggalan pengungsi seperti tempat ibadah (gereja, vihara), penjara, rumah sakit, pemakaman, museum, kantor polisi, sekolah dll.&nbsp;</div>', NULL, '2022-07-09 13:45:52', '2022-07-09 13:45:52'),
(9, 4, 'Pulau Abang', 'pulau-abang', 'post-images/6cw6nuaEORtUP0TZoAn7Vc61Z4syOIvbkA0J07VE.jpg', 'Ukuran pulau ini seluas 2.000 meter x 5.000 meter. Jaraknya kurang leih 50 kilometer dari daerah Muka Kuning. Untuk berkunjung ke objek wisata ini, dapat menggunakan perahu bot dari Jembatan 6 Barelan...', '<div>Ukuran pulau ini seluas 2.000 meter x 5.000 meter. Jaraknya kurang leih 50 kilometer dari daerah Muka Kuning. Untuk berkunjung ke objek wisata ini, dapat menggunakan perahu bot dari Jembatan 6 Barelang yang berjarak 12 kilometer.<br><br></div><div>Pulau Abang memiliki air laut yang jernih. Alam bawah lautnya masih sangat asri, dipenuhi dengan terumbu karang dan ikan berwarna – warni. Di atas laut pun keindahannya tidak tertandingin. Pasir pantai yang putih bersih, serta pepohonan yang melambai syahdu, melengkapi indahnya pemandangan pulau ini.</div>', NULL, '2022-07-09 13:46:48', '2022-07-09 13:46:48'),
(10, 3, 'Eco Edu Park Panbil Nature Reserve', 'eco-edu-park-panbil-nature-reserve', 'post-images/GBR1MYTUDHLyA0NC1Ty5VgswOmM8NqyY2p4yEHoW.jpg', 'Eco edu park batam berdiri di kawasan perbukitan yang berada di jalan Ahmad Yani, Muka Kuning, Kecamatan Batam Kota, Kota Batam, Kepulauan Riau. Dengan luas area mencapai 200 hektar. PNR menyuguhkan r...', '<div>Eco edu park batam berdiri di kawasan perbukitan yang berada di jalan Ahmad Yani, Muka Kuning, Kecamatan Batam Kota, Kota Batam, Kepulauan Riau. Dengan luas area mencapai 200 hektar. PNR menyuguhkan ragam wahana dan atraksi wisata yang menggabungkan antara petualangan, hiburan, serta ilmu pengetahuan. Berikut sejumlah daya tarik yang ditawarkan:<br><br></div><div><strong>Kebun Binatang</strong></div><div>Selepas pintu masuk, para pengunjung akan memasuki area satwa. Diantaranya ada taman kelinci, kubah merak albino paviliun burung hingga kolam ikan koi terbesar yang ada di Batam. Di tempat ini, para pengunjug juga bisa berinteraksi seperti memberi makan dan tentunya dalam pengawasan petugas.<br><br></div><div><strong>Animal Ecounters</strong></div><div>Pada jam jam tertentu, para pengunjung bisa mengenal lebih dekat dengan sejumlah satwa yang ada disana. Seperti berfoto dengan burung makaw, berang berang, hingga ular.<br><br></div><div><strong>The Atrium</strong></div><div>Setelah puas berfoto foto dan mengelilingi kawasan satwa, kamu bisa singgah di The Atrium. Ini adalah sebuah bangungn one stop venue yang mana akan memanjakan lidah para pengunjung dengan suguhan beragam kuliner. Bisa dibilang ini adalah pusat kuliner yang memiliki beragam ritel kuliner seperti resto, gerai es krim maupun coffee shop. The atrium ini dibangun dengan konsep homey dengan balutan seni mural bertemakan A Fortunate Universe dimana menggambarkan beragam flora dan fauna disana. Tempatnya nyaman dan asik untuk bersantai.<br><br></div><div><strong>Aktivitas Outdoor</strong></div><div>Kedepanya juga akan dikembangkan sejumlah aktivitas outdoor di panbil nature reserve batam. Seperti jangle trekking, hiking, bersepeda, obeservasi flora fauna dan lain sebagainya. Salah satu contohnya adalah berinteraksi dan mengamati rusa yang ada di penangkaran yang berada di tengah hutan.</div>', NULL, '2022-07-09 15:19:12', '2022-07-09 15:19:12'),
(11, 3, 'Hutan Wisata Mata Kucing', 'hutan-wisata-mata-kucing', 'post-images/4sag4mvQkGnHaGLaGYkpfh6COJWQGUv5L5weOEw1.jpg', 'Hutan Mata Kucing sudah ada sejak lama, tetapi pada akhir era 90-an hutan konservasi ini baru dibuka untuk umum. Lalu pada tahun 2003 hutan ini direnovasi dan dijadikan sebagai salah satu destinasi wi...', '<div>Hutan Mata Kucing sudah ada sejak lama, tetapi pada akhir era 90-an hutan konservasi ini baru dibuka untuk umum. Lalu pada tahun 2003 hutan ini direnovasi dan dijadikan sebagai salah satu destinasi wisata alam di Batam.</div><div><br>Baru sekitar tahun 2009 Pemerintah Kota Batam merenovasi kembali kawasan wisata hutan ini yang didesain sedemikian rupa menjadi sebuah kebun binatang mini.</div><div><br>Hutan Wisata Mata Kucing merupakan ekowisata yang dibangun di atas lahan seluas 193 hektar yang berada di Batam. Tepatnya di Jalan Diponegoro, kawasan Sekupang, Batu Aji.</div><div><br>Hutan Wisata Mata Kucing memiliki keindahan alam dan keberagaman koleksi satwa yang dapat dinikmati oleh pengunjung. Wisata keluarga di Batam ini masih alami dengan banyaknya pepohonan tinggi. Di dalamnya terdapat beberapa jenis satwa yang menjadi koleksi kebun binatang mini antara lain, beruang madu, buaya, ular, kura-kura.</div><div><br>Ada pula beberapa spesies primata seperti monyet, beruk, siamang coklat dan siamang hitam. Di sini juga terdapat spesies burung seperti elang, bangau dan burung perkutut yang suaranya saling bersahut-sahutan satu dengan lainnya sehingga menciptakan harominisasi alam yang merdu.</div><div><br>Di hutan ini juga terdapat kolam yang cukup besar yang berisi puluhan ikan-ikan raksasa seperti ikan arwana yang ukurannya mencapai 1 meter, lele dumbo, dan ikan predator arapaima gigas yang panjangnya mencapai 2 meter.</div>', NULL, '2022-07-09 15:22:12', '2022-07-09 15:26:02'),
(12, 5, 'Taman Rusa Sekupang', 'taman-rusa-sekupang', 'post-images/ap0JBJ0fxgVxoyZ6tFJbpf87X6WyDryMqHKA2PP9.jpg', 'Taman Rusa Sekupang terletak di kawasan Sekupang, tepat berseberangan dengan Guest House Sekupang di Jalan RE. Martadinata. Dengan akses jalan yang baik, masyarakat mampu menjangkau Taman Rusa Sekupan...', '<div>Taman Rusa Sekupang terletak di kawasan Sekupang, tepat berseberangan dengan Guest House Sekupang di Jalan RE. Martadinata. Dengan akses jalan yang baik, masyarakat mampu menjangkau Taman Rusa Sekupang dengan mudah karena menggunakan rute yang sama dengan Rumah Sakit BP Batam (RSBP Batam). Taman Rusa dimulai pada peresmian pertama pada Tahun 2000 peresmian kedua pada tahun 2022.</div><div><br>Peningkatan fungsi Taman Rusa Sekupang sebagai spot untuk edukasi berupa camping ground, senam massal, pemotretan pre-wedding dan kegiatan keagamaan lainnya. Taman Rusa Sekupang dilengkapi dengan jogging track sepanjang 1 kilometer, dua kolam pemancingan, satu kolam budidaya ikan, dan taman bermain anak. Satwa yang terdapat di Taman Rusa antara lain, 30 ekor rusa, 17 ekor ayam kate, 150 ekor merpati, dan 2 ekor angsa. Kolam Ikan Air Mancur telah dihiasi ikan koi dan ikan mas. Sedangkan kolam pemancingan telah disemai benih ikan nila dan ikan patin.</div><div><br>Selain itu beberapa spot foto kekinian, seperti artifisial Stonehenge, rumah panggung, rumah pohon, tugu bambu, dan ikon Taman Rusa Sekupang yakni dua patung rusa yang megah dan indah berdiri kokoh di area pintu masuk taman. Dengan kapasitas halaman parkir hingga 50 kendaraan, Taman Rusa siap memanjakan masyarakat Kota Batam setiap hari, dimulai pukul 06.00-18.00 WIB.<br>&nbsp;</div>', NULL, '2022-07-09 15:25:17', '2022-07-09 15:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `user_id`, `title`, `slug`, `image`, `destination`, `price`, `facility`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Paket Wisata A One day Trip', 'paket-wisata-a-one-day-trip', 'trip-images/g774WZdk4kNMVRAB0lrNUuoJOJjL9xwW1mU2bfCE.jpg', '<div>Mengunjungi destininasi:&nbsp;<br><br></div><ol><li>Ex kampoeng Vietnam</li><li>Pantai Glory Melur</li><li>Jembatan Barelang</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>285.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>275.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>260.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>250.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Transportasi</li><li>Snack</li><li>Makan Siang</li><li>Air mineral</li></ol>', NULL, '2022-07-03 16:20:20', '2022-07-09 09:54:16'),
(2, 1, 'Paket Wisata B One day Trip', 'paket-wisata-b-one-day-trip', 'trip-images/UsnnlBUo9GX71vIUkwEj2wSPWTcfuAO1NuHFpgPl.jpg', '<div>Mengunjungi destininasi:&nbsp;<br><br></div><ol><li>&nbsp;Kunjungan Sea Forest adventure</li><li>&nbsp;Wisata kuliner Welcome to Batam</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>360.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>345.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>320.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>300.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:<br><br></div><ol><li>Transportasi&nbsp;</li><li>Snack</li><li>Air mineral</li><li>Makan siang</li></ol>', NULL, '2022-07-08 23:56:37', '2022-07-09 09:46:09'),
(3, 3, 'Paket Wisata C One day Trip', 'paket-wisata-c-one-day-trip', 'trip-images/yaWc8HgYn3aOyDm3XoYV9xK0icAWOTj1dOyLaYaa.jpg', '<div>Mengunjungi destininasi:&nbsp;<br><br></div><ol><li>Kunjungan ke kepri coral</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>430.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>415.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>400.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>390.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Mealbox(makan siang)</li><li>Transportasi antar jemput</li></ol>', NULL, '2022-07-09 00:12:21', '2022-07-09 09:51:26'),
(4, 4, 'Paket Wisata D 2D1N Trip', 'paket-wisata-d-2d1n-trip', 'trip-images/myRSYAnBN0vkcwF12289Bdp5R6qEfP9P6lOf34nY.jpg', '<div>Mengunjungi:<br><br></div><ol><li>Pulau Ranoh</li><li>Pulau Petong</li><li>Jembatan Barelang</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>485.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>475.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>460.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>450.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:<br><br></div><ol><li>Snack and lunch</li><li>Penginapan</li><li>Transportasi</li></ol>', NULL, '2022-07-09 00:15:45', '2022-07-09 09:56:24'),
(5, 5, 'Paket Wisata E 2D1N Trip', 'paket-wisata-e-2d1n-trip', 'trip-images/aZlLHhNFMTcXajSY0oHUIO7M3CmXKpmGDQ0577cv.jpg', '<div>Mengunjung:<br><br></div><ol><li>Kebun buah naga</li><li>Kampoeng ex Vietnam</li><li>Pantai elyora</li><li>Jembatan barelang</li><li>Taman wisata negri diatas angin piayu</li><li>Wisata kuliner seafood piayu</li><li>Acara bebas<br><br></li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>545.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>535.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>520.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>500.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:<br><br></div><ol><li>Transportasi antar jemput</li><li>Mealbox(saat kunjungan dipantai)</li><li>Penginapan</li></ol>', NULL, '2022-07-09 00:18:14', '2022-07-09 10:16:51'),
(6, 4, 'Paket Wisata F 2D1N Trip', 'paket-wisata-f-2d1n-trip', 'trip-images/6obc5UZsaNXoeLOfhf4bGMfS2jy15kuBV01j04Bo.jpg', '<div>Mengunjung:<br><br></div><ol><li>Pantai vio-vio</li><li>Jembatan barelang</li><li>Ocarina</li><li>Pantai marina</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>950.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>945.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>930.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>900.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Free snack</li><li>Penginapan</li><li>Transportasi<br><br></li></ol>', NULL, '2022-07-09 00:20:35', '2022-07-09 10:20:20'),
(7, 2, 'Paket Wisata G 3D2N Trip', 'paket-wisata-g-3d2n-trip', 'trip-images/MWzaRPdEPBtTuq8JeKr8YI3FNApnLXjfRgHL6807.jpg', '<div>Mengunjung:<br><br></div><ol><li>Pulau abang</li><li>Jembatan barelang</li><li>Sea forest adventure</li><li>Pantai Nongsa</li><li>Wisata shopping Nagoya/Batam Center</li><li>Wisata kuliner seafood piayu</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>1.285.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>1.275.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>1.260.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>1.250.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Penginapan&nbsp;</li><li>Mealbox(kunjungan pantai)</li><li>Transportasi</li><li>Tour guide</li></ol>', NULL, '2022-07-09 00:23:26', '2022-07-09 10:45:33'),
(8, 5, 'Paket Wisata H 4D1N Trip', 'paket-wisata-h-4d1n-trip', 'trip-images/1XNIaaQJwUhJ0jWteFaIs7LgIbq2f32snM1wtRYe.jpg', '<div>Mengunjungi:<br><br></div><ol><li>Pulau ranoh</li><li>Jembatan barelang</li><li>Pulau abang</li><li>Pulau tunjuk</li><li>Sea forest adventure</li><li>Pantai marina</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>2.300.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>2.290.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>2.270.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>2.250.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Snack</li><li>Penginapan</li><li>Transportasi</li><li>Tour guide</li></ol>', NULL, '2022-07-09 00:26:25', '2022-07-09 15:23:51'),
(9, 3, 'Paket Wisata Edukasi One day Trip', 'paket-wisata-edukasi-one-day-trip', 'trip-images/txV5ruYQDLEDSDNQXM8B9jkXVEn0sWpm9Q4Kwwv5.jpg', '<div>Mengunjungi:</div><ol><li>Taman Rusa Sekupang</li><li>Taman Kelinci</li><li>&nbsp;Hutan Wisata Mata Kucing</li><li>&nbsp;Eco Edu Park Panbil Nature Reserve</li></ol>', '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>180.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>170.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>160.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>150.000 /Orang</li></ul></li></ol>', '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Snack</li><li>Transportasi</li><li>Tour guide</li></ol>', NULL, '2022-07-09 14:50:26', '2022-07-09 15:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ferdy Santoni', 'fdy29s', NULL, '$2y$10$ARrGIY2ivjw28Qp4c.5pU.znLMJvZrTZ9WNNY8iTvMDhXPPucC8J6', NULL, '2022-07-03 16:20:19', '2022-07-03 16:20:19'),
(2, 'Esther Kristin Sihura', 'Etrks', NULL, '$2y$10$iY5kKJ3rgLe4hlzJ18KtNOt3Yb2kInVgEjKE4mgOKSf5Z8rNS3QG2', NULL, '2022-07-03 16:20:20', '2022-07-03 16:20:20'),
(3, 'Ernestina Tinya Koten', 'Ernstk', NULL, '$2y$10$k/D/woOsQwxaoNayjnmdVecx1uB6UHO3NGCCPkxYLQrYh8KLNwAOO', NULL, '2022-07-03 16:20:20', '2022-07-03 16:20:20'),
(4, 'Gayuh Puji Rahayu', 'Gyhpr', NULL, '$2y$10$ZygUQWuXnaee8UV3U6miC.n8gqauM6H0NgpGv/XE9snSYGijQ.qoy', NULL, '2022-07-03 16:20:20', '2022-07-03 16:20:20'),
(5, 'Erick', 'Eck11', NULL, '$2y$10$B/5eoeYLCLESEhkBZFXtC.xZUfhREJLZ/SEbvMDUUQUohzMBOpE2m', NULL, '2022-07-03 16:20:20', '2022-07-03 16:20:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_id_unique` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trips_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
