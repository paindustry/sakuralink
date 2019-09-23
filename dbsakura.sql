-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2019 at 02:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsakura`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`post_id`, `post_title`, `konten`, `date_added`) VALUES
(21, 'Keindahan-keindahan Raja Ampat yang Bikin Mata Tak Berkedip', '<b>Raja Ampat</b> - Bicara soal liburan impian, Raja Ampat rasanya tak \npernah terlewat dari daftar. Cantik dan penuh pesona, Raja Ampat harus \njadi tujuan liburan kamu selanjutnya.<br><br>Raja Ampat adalah kepulauan\n kecil di Papua Barat. Punya banyak gugusan pulau, traveler akan \ndimanjakan oleh berbagai pemandangan dari berbagai pulau. Tinggal tunjuk\n saja mau ke pulau apa, kamu akan dibuai oleh pemandangan alam yang \nindah layaknya surga.<br><br><div>Dirangkum detikTravel dari berbagai sumber,\n Rabu (17/1/2018), inilah beberapa destinasi Raja Ampat yang sudah \ntersohor. Bahkan beberapa tempat sudah mendapat tempat di hati \norang-orang terkenal.</div><div><br></div><div><img src=\"https://akcdn.detik.net.id/community/media/visual/2016/08/31/4d5f53bf-38ce-4dad-aa3c-6a5d0bc12126_169.jpg?w=620\"></div><div>Pianemo atau sering disebut Painemu adalah kawasan karst berupa gugusan \npulau karang yang membentang di lautan. Bahkan disebut, gugusan pulau \nkarang tercantik ketiga di Raja Ampat, setelah Wayag dan Kabui.<br><br>Saking\n cantiknya, Presiden Jokowi yang berkunjung ke sini menjuluki Pianemo \nsebagai \'surga kecil\' di Tanah Papua. Tak ketinggalan para pembalap F1 \nyang baru-baru ini juga berkunjung ke sana. Mereka terpesona oleh \nkeindahan daratan dan bawah laut Raja Ampat!</div><br>', '2019-06-18 03:15:26'),
(22, 'Tips Aman Liburan di Pantai Selatan', 'Pantai selatan Jawa terkenal indah, namun ombaknya bisa berbahaya. \nInilah tips aman untuk liburan ke Pantai Selatan bersama keluarga.<br><br>Pantai\n seringkali jadi pilihan saat liburan atau piknik bersama keluarga \nbesar, apalagi di momen lebaran. Adanya mitos tentang pantai cantik ini \ntak menyurutkan semangat wisatawan untuk berkunjung.<br><br>Punya arus \nmematikan karena bentuk pantai yang curam, Pantai Selatan masih bisa \ndinikmati. Dirangkum detikcom dari Peneliti Madya Bidang Oseanografi \nTerapan, Pusat Riset Kelautan, Kementerian Kelautan dan Perikanan, \nWidodo Pranowo, inilah beberapa tips aman untuk bisa bermain di Pantai \nSelatan.<br><div><br></div><img src=\"https://akcdn.detik.net.id/community/media/visual/2019/06/08/d3ceb482-4004-4772-81bf-a451871fa044_169.jpeg?w=780&q=90\"><div><br></div><center>\n\n\n</center><strong>1. Kenali area pantai</strong><br><br>Pertama kali yang\n harus dilakukan oleh wisatawan ketika tiba di lokasi pantai selatan \nJawa adalah melakukan survei secara pandangan mata untuk mengenali area \npotensi terjadinya Rip Current, arus cepat yang bisa menarik ke tengah \nlaut.<br><br><strong>2. Temukan spot berbahaya</strong><br><br>Untuk mengenali potensi terjadinya Rip Current, traveler bisa berdiri di pantai menghadap ke laut.<br><br>Apabila\n terlihat ada permukaan laut yang tenang diapit sejumlah gelombang pecah\n di kanan kirinya, maka muka air yang tenang tersebut mempunyai \nprobabilitas yang tinggi terjadi Rip Current. Hindari area tersebut, \njangan berenang atau bermain air di area tersebut, karena sangat \nberbahaya.<br><br><strong>3. Gunakan kostum cerah</strong><br><br>Apabila\n ingin turun berenang atau bermain air, carilah area atau lokasi yamg \nlebih aman. Gunakan kostum yang berwarna cerah, seperti jingga atau \nmerah muda.<br><br>Hindari kostum berwarna hijau karena apabila kasus \nterburuk anda terseret arus atau tenggelam akan sulit dicari karena \nwarna hijau kostum akan menyatu dengan warna air laut.<br><br><strong>4. Jangan panik</strong><br><br>Pada\n kasus terburuk, jika sedang bermain air atau berenang dan tiba-tiba \nterseret oleh Rip Current, usahakan jangan panik. Jangan berenang menuju\n ke pantai secara tegak lurus melawan arus. Karena akan menguras tenaga \ndan napas.<br><br>Usahakan mengapung atau berenang menuju ke arah lepas \npantai mengikuti Rip Current hingga energi RIP Current tersebut hilang \natau berkurang.<br><br><strong>5. Berenang ke arah pantai</strong><br><br>Setelah\n cukup tenang di area lepas pantai, traveler bisa berenang menuju \npantai. Berenanglah dengan menyamping menuju ke arah sisi kanan atau \nkiri dari zona Rip Current tersebut.', '2019-06-18 03:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`post_id`, `post_title`, `post`, `active`, `date_added`) VALUES
(0, 'tes', 'saa', 1, '2019-04-01 18:30:54'),
(0, 'ruwet', 'wet ruwet', 1, '2019-04-01 19:27:51'),
(0, 'Lorem Ipsum', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2019-04-01 19:30:18'),
(0, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, '2019-04-01 19:30:38'),
(0, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2019-04-01 19:30:59'),
(0, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2019-04-01 19:31:47'),
(0, 'waduh', 'aduh', 1, '2019-04-04 12:55:43'),
(0, '', '', 1, '2019-05-21 06:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `company_name` varchar(50) NOT NULL,
  `company_street` varchar(50) NOT NULL,
  `company_zip` varchar(50) NOT NULL,
  `company_city` varchar(50) NOT NULL,
  `company_state` varchar(50) NOT NULL,
  `company_phone_one` varchar(50) NOT NULL,
  `company_phone_two` varchar(50) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_rules` text NOT NULL,
  `company_currency` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`company_name`, `company_street`, `company_zip`, `company_city`, `company_state`, `company_phone_one`, `company_phone_two`, `company_email`, `company_rules`, `company_currency`) VALUES
('Trip Express', 'Berliner-str', '12345', 'Berlin', 'DE', '0049131253452', '0049131253345', 'support@example.com', '2) bibendum quam. Morbi at dui dignissim, auctor turpis id, tempus nulla. Mauris tincidunt ac purus nec dapibus. Mauris dapibus sed urna id placerat. Curabitur in interdum lacus. In hac\r\n3) habitasse platea dictumst. Curabitur placerat quis nibh eu viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n4) Vestibulum posuere, tellus quis consectetur interdum, purus nisl molestie velit, lacinia hendrerit sapien justo id neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per\r\n5) inceptos himenaeos. Sed ornare ligula nisl, a laoreet nisi molestie at. Aliquam eu orci arcu. In dictum quam id lacinia pellentesque. Cras a varius lacus. Suspendisse sagittis risus eget\r\nvolutpat bibendum. Suspendisse facilisis urna sit amet diam viverra porta non a ante. Vivamus vel volutpat libero.\r\nFusce consequat mi erat, vel pharetra quam gravida sit amet. Integer interdum mi eu nibh ultrices laoreet. Aliquam massa eros, tempor mattis dapibus eget, commodo at diam. Maecenas\r\n6) sagittis ex nec arcu ultrices interdum. Maecenas tortor arcu, eleifend in elementum vel, sagittis id risus. Suspendisse suscipit lectus et odio viverra convallis. Lorem ipsum dolor sit amet,\r\nconsectetur adipiscing elit. Vestibulum eget justo maximus, pretium elit quis, consectetur odio. Aenean rhoncus blandit erat, ac ultrices purus tincidunt in. Integer quam arcu, blandit et\r\nauctor et, vestibulum in massa. In dictum lacus nec nisi ornare sodales. Nunc et nisi ex.\r\n7) Vestibulum tempus, justo sit amet varius molestie, metus eros sollicitudin odio, id ullamcorper nulla lectus in orci. Proin ac mi mauris. Aenean maximus vitae dui eu scelerisque. Ut\r\nfaucibus pharetra sem, lacinia blandit erat porttitor eu. Nunc et sollicitudin massa. Sed eu imperdiet tellus. Quisque ut facilisis lacus. Donec ut justo eget nulla interdum aliquam. Etiam a\r\nex nec urna varius interdum. Cras dictum ante in nunc tristique, nec lacinia sapien tempor. Aliquam sit amet orci quis arcu rutrum ornare. Fusce condimentum tempor ipsum id cursus.\r\nPellentesque sed malesuada libero.\r\nDonec quis dolor neque. Vivamus vulputate scelerisque nisl, at consectetur felis semper vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n8) Maecenas dapibus risus sit amet fringilla pretium. Suspendisse non interdum erat, at cursus est. Morbi porttitor dapibus tempus. Duis vulputate et dui sit amet imperdiet', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `from` varchar(256) NOT NULL,
  `to` varchar(256) NOT NULL,
  `from_start_time` datetime NOT NULL,
  `available_seats` int(5) NOT NULL,
  `start_price` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `from`, `to`, `from_start_time`, `available_seats`, `start_price`, `date_created`) VALUES
(18, 'LUAR NEGERI', 'Malaysia - SIngapura - Thailand - Hongkong - Macau - China - Jepang - Eropa', '1970-01-01 00:00:00', 0, '---', '2019-06-18 23:42:48'),
(19, 'JA - BA - YO', 'BANDUNG-JAKARTA (Museum Fatahillah - Monas - Istiqlal - Kota Tua - Floating Market - Trans Studio - Tangkuban Perahu - Kawah Putih - Cihampelas - Farm House))', '1970-01-01 00:00:00', 0, '1.500.000', '2019-06-18 23:43:04'),
(21, 'Bali - Lombok', 'Bedugul - Tanah Lot - Tanjung Benoa - GWK - Jimbaran - Kintamani - Senggigi - Gili Trawangan - Kuta Lombok', '1970-01-01 00:00:00', 0, '1.500.000', '2019-06-18 23:43:15'),
(22, 'Dewata Bali', 'Bedugul - Tanah Lot - Tanjung Benoa - GWK - Jimbaran - Kintamani - Senggigi - Gili Trawangan - Kuta Lombok', '1970-01-01 00:00:00', 0, '800.000', '2019-06-18 23:43:20'),
(23, 'Semarang - Yogyakarta', 'Candi Borobudur - Candi Prambanan - Kraton - Malioboro - Goa Pindul - Lava Tour Merapi - Monjali - Lawang Sewu - Sam Poo Kong', '0000-00-00 00:00:00', 0, '750.000', '2019-06-18 02:25:55'),
(24, 'Yogyakarta', 'Candi Borobudur - Candi Prambanan - Kraton - Malioboro - Goa Pindul - Lava Tour Merapi - Monjali - Lawang Sewu - Sam Poo Kong', '0000-00-00 00:00:00', 0, '750.000', '2019-06-18 02:26:47'),
(25, 'Surabaya - Lamongan', 'Jatim Park - BNS - Museum Angkut - Agro Wisata - Kebun Apel - Selecta - Wisata Bahari Lamongan - Surabaya Night carnival', '0000-00-00 00:00:00', 0, '400.000', '2019-06-18 02:28:12'),
(26, 'Malang', 'Jatim Park - BNS - Museum Angkut - Agro Wisata - Kebun Apel - Selecta - Wisata Bahari Lamongan - Surabaya Night carnival', '1970-01-01 00:00:00', 0, '350.000', '2019-06-18 03:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 - Administrator, 1 - Worker, 2 - Reseller',
  `language` varchar(20) NOT NULL,
  `blocked` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `role`, `language`, `blocked`) VALUES
(1, 'Bagoes', 'Kordinator', '0', 'https://cdn.images.express.co.uk/img/dynamic/36/590x/Avengers-Iron-Man-was-almost-played-by-another-major-star-936289.jpg', '2ab64f4ee279e5baf7ab7059b15e6d12', '', 'english', '0'),
(2, 'Aisyah', 'Dokumenter', '0', 'https://www.williamjacket.com/wp-content/uploads/2018/04/Natasha-Romanoff-Avengers-Infinity-War-Black-Widow-Vest.jpg', '0', '', '', '0'),
(3, 'Romi', 'TourLeader', '0', 'https://blog.ciayo.com/wp-content/uploads/2019/01/00-far-from-home.jpg', '0', '', '', '0'),
(4, 'hulk', 'haa', '0', 'https://www.telegraph.co.uk/content/dam/films/2019/02/22/edward-norton-hulk-jpg_trans_NvBQzQNjv4Bq2mG3lyVb0qwi9Nuwg-8hyWM4S1u_kNqQtETCuvfEn_0.jpg', '0', '0', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
