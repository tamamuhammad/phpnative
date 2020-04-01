-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 05:10 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `teks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `judul`, `id_kategori`, `teks`) VALUES
(1, 'garang-asem.jpg', 'PINDANG TETEL', 3, '<p>Daerah Pekalongan semakin dikenal dengan kreativitas batik dan pesona wisata alamnya yang indah. Bila anda sedang berkunjung ke Pekalongan, sempatkanlah untuk menyantab masakan khas dari kota batik ini.</p>\r\n\r\n<p>Salah satu makanan khas Pekalongan yaitu Pindang Tetel yang sangat segar dan nikmat. Jika anda penggemar kuliner di nusantara, rasanya anda wajib mencicipi salah satu kuliner khas Pekalongan ini.</p>\r\n\r\n<p>Pindang tetel itu sendiri adalah makanan khas pekalongan yang berasal dari desa Ambokembang, Kedungwuni, Pekalongan. Meskipun bernama pindang tetel, masakan ini lebih mirip rawon dan dibuat dari tetelan daging iga sapi, bukan ikan pindang seperti namanya. Karena Pindang Tetel singkatan dari Paling enak Daging Tetel.</p>\r\n\r\n<p>Pindang tetel merupakan sayur berkuah berisi tetelan daging sapi dan irisan daun bawang dengan bumbu pindang dicampur kluwek sehingga menyerupai rawon. Masakan ini disajikan dengan kerupuk merah dan kuning yang digoreng dengan pasir. Pindang tetel tidak cocok disajikan dengan kerupuk yang digoreng dengan minyak karena merusak cita rasanya.</p>\r\n\r\n<p>Dilihat dari penampilan, makanan pindang tetel ini terlihat kurang menarik. Warna yang coklat kehitaman sepintas persis dengan rawon yang ada di Solo. Tetapi Pindang Tetel ini beda, pindang tetel lebih encer sedangkan Rawon tidak.</p>\r\n\r\n<p>Dalam penyajiannya, satu mangkuk pindang tetel biasanya dilengkapi dengan krupuk pasir berwarna pink dan putih, yang biasa dikenal masyarakat Pekalongan dengan sebutan krupuk usek. Selain itu, bisa juga ditambahi dengan lontong atau nasi. Krupuk usek diremas dan dimasukkan ke dalam mangkok, kemudian disiram dengan kuah pindang tetel lengkap dengan daging tetelannya. Bisa juga, ditambahkan dengan sambal bagi Anda penikmat makanan pedas.</p>\r\n\r\n<p>Pada mulanya, masyarakat Ambokembang hendak memanfaatkan hasil bumi kluwek dari daerah mereka. Saat mereka memadukan kluwek dengan tempe dan tahu, rasa masakan yang dihasilnya kurang enak. Akhirnya mereka menggunakan daging sapi dan ternyata rasanya enak, terutama bila daging sapi dipotong kecil-kecil (bahasa Jawa: ditetel-tetel). Selanjutnya, masyarakat Ambokembang menyebutnya Pindang Tetel.</p>\r\n\r\nResep Pindang Tetel khas Pekalongan<br>\r\nBahan:<br>\r\n\r\n250 gram daging sapi, dicincang kasar <br>\r\n50 gram sandung lamur, dcincang kasar<br>\r\n500 gram kikil, potong bentuk persegi<br>\r\n4 liter air untuk merebus daging<br>\r\nBumbu yang dihaluskan :<br>\r\n5 siung Bawang merah<br>\r\n4 siung Bawang putih<br>\r\nCabai Merah 5 buah (sesuai selera )<br>\r\n5 buah Kluwak<br>\r\nKetumbar 1 sdm<br>\r\nMerica 1 sdt<br>\r\nGaram 1 sdm/ sesuai selera<br>\r\nGula Jawa secukupnya 10 cm<br>\r\nJahe 2 cm<br>\r\nTerasi<br>\r\nBumbu :<br>\r\n\r\n8 siung Bawang merah iris tipis<br>\r\n6 buah daun bawang iris lembut<br>\r\nLengkuas ( memarkan)<br>\r\nDaun salam secukupnya<br>\r\n3 buah Sereh bagian putihnya saja,diiris halus<br>\r\n4 sdm minyak goreng untuk menumis<br>\r\nKecap manis secukupnya<br>\r\n\r\nCara Membuat Pindang Tetel :<br>\r\n\r\nDaging direbus selama 15 menit, kemudian masukkan sandung lamur dan kikil. Teruslah direbus sampai daging empuk.<br>\r\nPanaskan minyak kemudian tumis bawang merah dan daun bawang yang sudah diiris tadi, masukkan bumbu yang sudah dihaluskan sampai tercium bau harum. Setelah itu masukkan lengkuas, daun salam dan sereh, aduk-aduk angkat<br>\r\nMasukkam bumbu tadi ke dalam rebusan daging. Aduk-aduk rata kemudian tambahkan kecap manis sesuai secukupnya atau sesuai selera sobat aromadapur<br>\r\nHidangkan selagi hangat, lebih nikmat ditambag kerupuk usek'),
(3, 'nasi-megono-3.jpg', 'SEGO MEGONO', 2, '<p class=\"has-drop-cap\">Kalau sedang berada di Kota Pekalongan, Jawat Tengah, anda boleh mencoba yang namanya, Sego Megono. Makanan khas Pekalongan ini, memang unik. Walau mungkin, di beberapa kota besar, sudah menyediakan kuliner jenis ini. Jelas berbeda sensasinya, saat menikmati di tempat aslinya.</p>\r\n\r\n\r\n\r\n<p>Ditempat aslinya, Kota Pekalongan, Sego Mengono sengat mudah cari. Hampir disetiap sudut kota, ada banyak warung. Menyediakan kuliner khas ini. </p>\r\n\r\n\r\n\r\n<p>Sego Megono, secara harafiah artinya Nasi Begono. Megononya sendiri, terbuat dari nangka muda. Dicampur, parutan kelapa. Diracik sedemikian rupa, dengan rasa dan bumbu khas. Sego Megono, sering dikonsumsi dengan beberapa makanan pendamping. Bisa jenis gorengan. Seperti, tempe atau tahu, ayam, ikan dan sambal.  </p>\r\n\r\n\r\n\r\n<p>Sego Megono adalah jenis makanan, fleksibel. Ya, itu tadi, bisa ditambah dengan berbagai macam lauk. Di Pekalongan, dijual sepanjang waktu.  Sejak pagi, hingga malam. Namun, malam hari lebik asik. Di jual, di jalan-jalan protokol. Sebagian berbentuk, warung lesehan. </p>\r\n\r\n\r\n\r\n<p>Makanan ini, biasa juga ditemukan dengan mudah di Kabupaten Batang, sampai Pemalang. </p>\r\n\r\n\r\n\r\n<h2>Sejarah Sego Megono Pekalongan</h2>\r\n\r\n\r\n\r\n<p>Segomegono mempunyai cerita cukup panjang. Pertama muncul, jaman Indonesia belum merdeka. Pada masa, agresi Belanda. Saat para gerilyawan masuk wilayah Purworejo, Pekalongan dan sekitarnya. Seperti, Pangeran Diponegoro dan Sentot Prawirodirjo.</p>\r\n\r\n\r\n\r\n<p>Keadaan waktu itu, tanah sangat subur. Namun sayangnya, kondisi perang. Sehingga, tidak ada banyak kesempatan warga untuk mengolah lahan pertanian. Hasil bumi anjlok disegala bidang. Warga harus banyak berhemat. Agar persediaan pangan, dapat mencukupi kebutuhan sehari-hari. </p>\r\n\r\n\r\n\r\n<p>Saat menanak nasi sistem konvensional, biasanya akan ada kerak nasi. Dalam bahasa jawa, &#8216;intip&#8217;. Saat itu, mayoritas masyarakat, kerak nasi akan dijemur. Hingga kering. Lalu, disimpan untuk tanak lagi. Menjadi nasi. Inilah, cikal-bakal Sego Megono. </p>\r\n\r\n\r\n\r\n<p>Dari proses waktu, terjadi penyempurnaan. Dengan berbagai kreatifitas. Agar terasa lebih enak. Seperti, menambah bumbu. Termasuk, dipadu dengan urap. Serta, sayuran dan lauk. </p>\r\n\r\n\r\n\r\n<p>Warga yang memang, mendukung perjuangan para grilyawan. Sering kali membantu menyediakan makan untuk dikonsumsi. Apalagi, para grilyawan tidak didukung logistik cukup. </p>\r\n\r\n\r\n\r\n<p>Biasanya, saat grilyawan masuk desa, para warga buru-buru menyediakan makanan. Walau pun dengan segala sesuatu yang apa adanya. Salah satunya, kerak nasi yang telah dikeringkan tadi. </p>\r\n\r\n\r\n\r\n<p>Untuk sayuran, warga tidak menemui kesulitan. Namun, berbeda dengan lauk. Yang banyak adalah ikan asin. Dari, sini lalu timbul inisiatif sesorang. Dimana dikemudian hari dikenal sebagai penemu Sego Megono. Dengan mengolah nasi, sayur, dan lauk jadi satu. Ini termasuk untuk menghemat waktu. </p>\r\n\r\n\r\n\r\n<p>Dari sinilah, kemudian tercetus, nama Megono. Nasi Megono. Sego Mengono. Nama unik, dan bernuansa beda. Dianggap menggambarkan segi filosofi. Rasa dan bentuk fisik kuliner itu.</p>\r\n\r\n\r\n\r\n<p>Perang terus berlanjut. Para grilyawan semakin terbiasa, dengan sajian warga. Mereka datang dan pergi. Sego megono, menjadi sesuatu yang luar biasa. Impian, harapan serta kesenangan. Menghibur sekaligus mengenyangkan. </p>\r\n\r\n\r\n\r\n<p>Sejak saat itu, Sego Megono menjadi daya magnet tersendiri. Bahkan diceritakan, saat kemerdekaan RI tercapai, saat pekik &#8216;merdeka&#8217; berkumandang di setiap penjuru. Diwilayah itu, para grilyawan dan warga berteriak; &#8220;MERGONO!&#8221;  </p>'),
(6, 'Resep-Tauto-pekalongan.jpg', 'SOTO TAUTO', 3, '<p><em>Tauto</em>,tentunya hampir seluruh orang Pekalongan sangat familiar dengan kulinr yang satu ini, hampir setara dengan kepopuleran Nasi Megono,Tauto Pekalongan hadir di setiap sudut wilayah Pekalongan, kita dapat menemukannya di warung-warung pinggiran jalan pantura, pusat kota ataupun pedagang keliling dari kampung ke kampung yang menjajakan soto yang unik dan khas serta berbeda dengan soto-soto dari kota lain di indonesia ini.</p>\r\n<p>Hampir semua lidah masyarakat Pekalongan, baik dari kalangan elit pejabat, artis maupun masyarakat non-elite, baik etnis Jawa, Arab, maupun Tionghoa yang tinggal di wilayah Pekalongan sangat menerima dan menyukai soto yang diramu dengan bumbu khasnya yakni <b>tauco.</b></p>\r\n<p>Tauto merupakan salah satu kuliner <em>khas</em> Pekalongan. Dibuat menggunakan bumbu tauco; tauto menghadirkan cita rasa yang unik. Tauco membuat kuah soto jadi lebih kental dan merah dibandingkan soto-soto di Jawa pada umumnya.</p>\r\n<p>Tauto adalah Makanan dari perpaduan dua kebudayaan kuliner (<em>Tionghoa dan India</em> ) yang menyatu yang terjadi di Pekalongan. <em>Tauto</em> berasal dari <em>Caudo / Soto</em> kuliner China dan <em>Tauco</em> bumbu India. Sering orang luar kota menyebutnya Soto Tauto Pekalongan</p>\r\n<p>Soto sendiri berasal dari nama makanan China yang bernama Caudo yakni sebuah makanan yang berkuah, yang pertama kali dipopulerkan di wilayah Semarang. Lambat laun orang pribumi khususnya jawa memberikan sebutan Soto yang berasal dari Homofon Caudo. Kalau di Makasar makanan ini disebut Coto dan di daerah Pekalongan sendiri, masyarakat menyebutnya Tauto</p>\r\n<p>Dulunya, tauto dijajakan dengan dibopong para pedagang Tionghoa keluar-masuk kampung. Ya, persebaran soto di Nusantara memang tak lepas dari pengaruh para pedagang Tionghoa.</p>\r\n<p>Makanan yang dulunya untuk masyarakat pecinan ini seiring dengan berjalannya waktu, orang pribumi pun menjadikan makanan ini menjadi bagian dari kuliner mereka. Tak terkecuali masyarakat Pekalongan juga ikut menjadikan makanan ini sebagai kuliner mereka, tak cukup dengan menikmatinya saja masyarakat Pekalongan rupanya menyesuaikan olahan Caudo ini dengan bumbu-bumbu khusus agar pas dengan lidah mereka.</p>\r\n<p>Bukti antropologis menyebutkan , bahwa Soto sebagai sajian berkuah yang dipercaya dibawa oleh orang-orang Tionghoa ke Jawa Tengah sekitar pertengahan abad ke-18 M. Awalnya Soto adalah masakan China yang kemudian melebur dengan tradisi kaum imigran, pedagang, dan pengelana dari berbagai budaya sehingga muncul masakan-masakan Caudo di tiap daerah.</p>\r\n<p>Orang-orang Tionghoa berperan penting dalam perkembangan budaya Jawa modern terutama dalam hal kuliner yang awalnya milik orang Tionghoa kini semua kalangan dapat menikmatinya. Sama seperti Pempek Palembang yang terkenal itu, awalnya Pempek adalah makanan khas China yang kemudian dibawa ke Palembang dan berkembang disana. Sama halnya dengan Soto caudo ini, awalnya hanya milik orang-orang Tionghoa kini sudah menjadi budaya masing-masing daerah di Jawa Tengah khususnya.</p>\r\n<p>Pada Awalnya, Soto dijual dengan cara dipikul, keluar masuk kampung oleh orang Tionghoa yang berkucil ala Wong Fei Hung, sebagaimana diceritakan oleh menduang Haji Damudji,Penjual Soto di sebelah kantor kelurahan Klego sejak 1957.</p>\r\n<p>&#8221; Dulu orang yang mulai berjualan tauto disini itu orang Tionghoa berambut panjang atau kuciren, dan dipikul oleh pembantunya keluar masuk perkampungan&#8221;.<br /> Sedangkan menurut pengamat budaya Pekalongan, Said Awud Aziz. Soto / Tauto Pekalongan merupakan perpaduan antara dua bumbu khas dari China dan India.</p><p>&#8221; Ada dua kuliner kuat yang mempengaruhi dunia saat itu, yakni China dan India. Nah, kalau tauto sangat khas kedua bumbu ini memengaruhi masakan ini, karena di Pekalongan memang ada orang-orang India dan China yang bermukim.</p>\r\n<p>Awalnya orang-orang Jawa pada saat itu yang menjadi para pembantu bagi penjual Caudo / Soto yang ikut keliling memikul dagangan. Seiring berkembangnya zaman, karena tidak ada generasi keturunan Tionghoa yang mau meneruskan usaha ini, akhirnya warga pribumi itulah berinisiatif untuk meneruskan usaha kuliner yang khas ini.</p>\r\n<p>Kekhasan Tauto yang diracik warga pribumi Pekalongan adalah dengan menggunakan mie putih atau soun, kemudian ditambah bumbu sambal goreng (tauco) yang berbahan dasar kedelai serta menggunakan bahan daging kerbau bukan dagign sapi.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(2, 'MAKANAN TAK BERKUAH'),
(3, 'MAKANAN BERKUAH');

-- --------------------------------------------------------

--
-- Table structure for table `kesan`
--

CREATE TABLE `kesan` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesan`
--

INSERT INTO `kesan` (`id`, `nama`, `pesan`) VALUES
(2, 'TAMAM', 'MANTAP');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(255) NOT NULL,
  `id_artikel` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_artikel`, `nama`, `email`, `komentar`) VALUES
(20, 1, 'TAMAM', 'maztamam67@gmail.com', 'OIOI'),
(22, 3, 'MyZane', 'MyZane123@gmail.com', 'myzane lebih oioi'),
(30, 1, 'IQOM', 'iqomuach@gmail.com', 'Mantap Oioi'),
(31, 6, 'Kuswanto', 'engkuskris@gmail.com', 'Tauto Doro luwih Ntaps :v');

-- --------------------------------------------------------

--
-- Table structure for table `mimin`
--

CREATE TABLE `mimin` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mimin`
--

INSERT INTO `mimin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Muhammad Tamam', 'tamam', 'tamam'),
(3, 'Muchammad Rizqi', 'Isan123', 'rizqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesan`
--
ALTER TABLE `kesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `mimin`
--
ALTER TABLE `mimin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kesan`
--
ALTER TABLE `kesan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mimin`
--
ALTER TABLE `mimin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
