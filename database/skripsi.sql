-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2018 pada 21.20
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nama`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aparat`
--

CREATE TABLE IF NOT EXISTS `tbl_aparat` (
`id_aparat` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_aparat`
--

INSERT INTO `tbl_aparat` (`id_aparat`, `nip`, `nama`, `jabatan`, `foto`) VALUES
(9, '', 'H. MUKHLIS', 'Kepala Dusun Transari', ''),
(10, '', 'MUCHLIS', 'Kepala Dusun Kabubu', ''),
(11, '', 'SUGIONO', 'Kepala Dusun Mekar Sari', ''),
(12, '', 'SAHABU', 'Kepala Urusan Umum', ''),
(13, '', 'EKO PURDIYANTO', 'Kepala Urusan Keuangan', ''),
(14, '', 'NURROHMAN', 'Kepala Urusan Administrasi', ''),
(15, '', 'INDRASARI', 'Kepala Seksi KESRA', ''),
(16, '', 'NURDIN', 'Kepala Seksi Pembangunan', ''),
(17, '', 'KUSWANDI', 'Kepala Seksi Pemerintahan', ''),
(18, '', 'MUH. ARIFIN. As', 'Sekertaris Desa', ''),
(19, '', 'MARJUNI', 'Kepala Desa', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
`id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul`, `deskripsi`, `tanggal`, `gambar`) VALUES
(2, 'Kembangkan 10 Ribu Desa, RI Gandeng Korea Selatan', '<p>Liputan6.com, Jakarta - Kementerian Perencanaan dan Pembangunan Nasional (PPN)/Badan Perencanaan dan Pembangunan Nasional (Bappenas) bersama Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Republik Indonsia menggandeng Korea Selatan untuk program inovasi desa atau village inovation. Adapun pihak Korea Selatan yang dilibatkan yaitu United Nations Office for South-South Cooperation (UNOSSC) dan Kementerian Sains dan ICT (MSIT) Republik Korea melalui Science and Technology Policy Institute (STEPI). BACA JUGA Jokowi Tinjau Pemanfaatan Dana Desa di Sleman Kenaikan Dana Desa Bakal Tekan Angka Kemiskinan Alokasi Dana Desa Harus Ditambah untuk Korban Gempa Direktur Pertahanan dan Keamanan Bappenas R.M Dewo Broto mengatakan, Korea Selatan dipilih sebagai mitra sebab dinilai telah berhasil dengan program pembangunan desa. Bahkan bisa menyulap desa menjadi objek wisata dengan banyak lapangan kerja baru yang tercipta. &quot;Kami juga ingin belajar dari pengalaman Korea yang lebih maju. Kemiskinan di sana sudah rendah sekali. Jadi karena itu kami belajar dari Korea melalui knowledge sharing,&quot; kata Dewo dalam acara Workshop Streghtening Village Programme Capacity for Village Sustainability with Korean Case Study, di Hotel Ashley, Jakarta Pusat, Rabu (12/9/2018). Selain mengenai infrastruktur pedesaan, Indonesia juga akan belajar mengenai inovasi desa. &quot;Kami belajar dari pengalaman Korea menerapkan inovasi di pedesaan. Bagaimana menciptakan lapangan pekerjaan, menyelesaikan masalah di desa. Sekaligus mengembangkan, monitoring dan evaluasi,&quot; ujarnya.</p>\r\n', '2018-09-12', 'd0e3640cf23c975ffcec20a495874e26.jpg'),
(3, 'Kiat Kampus Muhammadiyah Kenalkan Sistem Informasi Desa', '<p>REPUBLIKA.CO.ID, KUBU RAYA -- Setiap perguruan tinggi memiliki tanggung jawab untuk melaksanakan Tri Dharma Perguruan Tinggi. Salah satu bentuk pelaksanaan Tri Dharma Perguruan Tinggi adalah Pengabdian Kepada Masyarakat (PKM).</p>\r\n\r\n<p>Kali ini Universitas Muhammadiyah Pontianak melalui Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) mengadakan pelatihan menggunakan Sistem Informasi Desa (SID).</p>\r\n\r\n<p>Dosen Universitas Muhammadiyah Pontianak Asrul Abdullah mengatakan, pada pengabdian kali ini, pihaknya akan berbagi ilmu di desa Sungai Rengas, Kecamatan Kubu Raya, Kalimantan Barat. &quot;Ide kegiatan pengabdian masyarakat ini tercetus karena melihat pelayanan administrasi kependudukan di desa ini masih manual,&quot; katanya kepada Republika, Ahad (28/1).</p>\r\n\r\n<p>Asrul mengatakan, kehadiran aplikasi SID diharapkan dapat memberikan pelayanan yang optimal bagi penduduk di desa tersebut. Kegiatan pengabdian masyarakat disampaikan dalam dua sesi yakni sesi pengenalan SID, dan sesi pendampingan penggunaan SID.</p>\r\n\r\n<p>Ia menjelaskan, sistem informasi desa adalah sebuah platform teknologi informasi komunikasi untuk mendukung pengelolaan sumber daya komunitas di tingkat desa. Inisiatif ini bersifat terbuka bagi siapa saja yang akan bergabung dalam gerakan membangun kemandirian komunitas.&nbsp;</p>\r\n\r\n<p>&quot;Konsep pengelolaan sumber daya ini berada dalam payung besar gagasan Lumbung Komunitas yang dikelola Combine Resource Institution. Sistem ini dikelola dengan merujuk pada lisensi GNU General Public License Version 3,&quot; kata Asrul.</p>\r\n\r\n<p>Aplikasi SID, dikembangkan sejak Mei 2016 lalu dan bebas untuk dimanfaatkan dan dikembangkan oleh semua desa. Semoga pengabdian masyarakat ini tidak hanya sampai kepada kegiatan ini saja, tetapi ada praktik nyata dari aparatur desa Sungai Rengas seperti adanya situs desa.</p>\r\n\r\n<p>Asrul mengungkapkan, ke depan, Universitas Muhammadiyah Pontianak berencana akan menjadikan desa Sungai Rengas sebagai desa binaan. Hal ini berarti UM Pontianak akan membantu desa Sungai Rengas dalam mengembangkan pelayanan kependudukan kepada masyarakat.</p>\r\n', '2018-09-12', 'eb67866596d5ff4e70c73e218a8fc163.jpg'),
(4, 'Pelayanan Sistem Informasi Kependudukan Dan Administrasi Desa (SID)', '<p>Sistem Informasi Desa (SID) adalah membangun website desa yang sudah terintegrasi dengan data desa seperti data kependudukan, kegiatan desa, potensi desa, program kerja, luas wilayah dan lainnya. Desa yang telah terintegrasi akan dapat di akses secara online. Keuntungan dari website tersebut, apabila masyarakat ingin melakukan pembuatan surat-surat lebih cepat dan langsung cetak, sebagai contoh pembuatan KK data yang sudah ada pada sistem maka langsung di cetak.</p>\r\n', '2018-09-12', '8786ab1be6dce207e7fcb4d53e9ce5dc.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bidang`
--

CREATE TABLE IF NOT EXISTS `tbl_bidang` (
`id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Bidang Penyelenggaraan Pemerintah Desa '),
(2, 'Bidang Pelaksanaan Pembangunan Desa '),
(3, 'Bidang Pembinaan Kemasyarakatan '),
(4, 'Bidang Pemberdayaan Masyarakat ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
`id_galeri` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `judul`, `deskripsi`, `tanggal`, `gambar`) VALUES
(6, 'Pengurus BUMDES Kabubu', '', '2018-10-16', '5d9b56ad32975694067f3af24e8e2381.jpg'),
(7, 'Kantor Desa Kabubu', '', '2018-10-16', '69b68b10af53999a9bb2d5252745b7cf.JPG'),
(8, 'Kegiatan Pembuatan Tas Rajut ibu-ibu PKK', '', '2018-10-16', 'cb5525f257f20bb2db24ac0a9f83c903.jpg'),
(9, ' Produk "Ketawa Cantik" (Kerajinan Tangan dari pelepah pisang) BUMDES Kabubu', '', '2018-10-16', '1d21451a0afcd21e31f7cb3a4a19b18b.jpg'),
(12, 'Penyantunan Anak Yatim Peringatan Muharram 1440 H BUMdes Kabubu  ', '', '2018-10-17', '272a7a67b1f1f69d664c4081f0f6e061.jpg'),
(13, 'Produk UKM Bunga Mekar BUMdes Kabubu (amplang ikan gabus) ', '', '2018-10-17', '8ee9ffb02c35d8ca2a9c859a88a9f137.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_regulasi`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_regulasi` (
`id_kategori_regulasi` int(11) NOT NULL,
  `nama_kategori_regulasi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_kategori_regulasi`
--

INSERT INTO `tbl_kategori_regulasi` (`id_kategori_regulasi`, `nama_kategori_regulasi`) VALUES
(3, 'Kemendes PDTT'),
(4, 'Peraturan Daerah'),
(5, 'Peraturan Presiden'),
(6, 'PERMENDAGRI'),
(7, 'Peraturan Pemerintah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kegiatan`
--

CREATE TABLE IF NOT EXISTS `tbl_kegiatan` (
`id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `jenis_kegiatan` varchar(200) NOT NULL,
  `manfaat` text NOT NULL,
  `sasaran` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `tgl_ditetapkan` date NOT NULL,
  `status` enum('n','y') NOT NULL,
  `tgl_mulai_kegiatan` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `id_bidang`, `lokasi`, `jenis_kegiatan`, `manfaat`, `sasaran`, `tahun`, `biaya`, `sumber`, `tgl_ditetapkan`, `status`, `tgl_mulai_kegiatan`) VALUES
(7, 'Pengahsilan Tetap dan Tunjangan', 1, 'Desa Kabubu', 'Pembinaan', 'meningkatkan kinerja dan kesejahteraan pemerintah desa dalam menyelenggarakan tugas pemerintahan desa', 'Pemerintah Desa (kepala desa beserta aparaturnya)', 2018, '115000000', 'ADD', '2018-05-01', 'n', '0000-00-00'),
(8, 'SILTAP dan tunjangan BPD', 1, 'Desa Kabubu', 'Pembinaan', 'meningkatkan kinerja dan sinergitas BPD  dengan pemerintah desa dalam menyelenggarakan tugas pemerintahan desa', 'Ketua BPD, wakil ketua BPD, sekertaris, ketua bidang dan Dusun Transari', 2018, '22200000', 'ADD', '2018-05-01', 'n', '0000-00-00'),
(9, 'Insentif RT', 1, 'Desa Kabubu', 'Pembinaan', 'meningkatkan kinerja dan kesejahteraan serta sinergitas pemerintah desa dalam menyelenggarakan tugas pemerintahan desa', 'dusun Transari (RT I,II,III), dusun Kabubu (RT I,II,III) dan dusun Mekar Sari (RT I,II,III) ', 2018, '5400000', 'ADD', '2018-05-01', 'n', '0000-00-00'),
(10, 'Tunjangan kader  PTKD 5 orang ', 1, 'desa Kabubu', 'Pembinaan', 'meningkatkan kinerja dan kesejahteraan  dalam menyelenggarakan tugas yang diamanahkan oleh  pemerintah desa', 'pengelola KeuDes, koordinator PTPKD, Bendahara Desa, pelaksana Kegiatan (3 orang) ', 2018, '14700000', 'ADD', '2018-05-01', 'n', '0000-00-00'),
(11, 'Operasional Kantor Pemerintah Desa (belanja barang dan jasa serta belanja Modal)', 1, 'Desa Kabubu', 'Pengadaan', 'meningkatkan kinerja dan kesejahteraan pemerintah desa dalam menyelenggarakan tugas pemerintahan desa', 'pemerintah desa', 2018, '105832000', 'ADD', '2018-05-01', 'n', '0000-00-00'),
(12, 'Renovasi Kantor BPD', 2, 'Desa Kabubu', 'Pembangunan', 'meningkatkan kinerja dan kesejahteraan serta Sinergitas BPD dengan pemerintah desa dalam menyelenggarakan tugas pemerintahan desa', 'BPD', 2018, '51800000', 'ADD', '2018-05-01', 'y', '2018-06-02'),
(13, 'Pembinaan ibu-ibu PKK', 3, 'Desa Kabubu', 'Pembinaan', '', 'Ibu-ibu PKK desa Kabubu', 2018, '32790000', 'ADD', '2018-05-01', 'y', '2018-03-24'),
(14, 'Pembinaan Pemuda Kabubu', 3, 'Desa Kabubu', 'Pembinaan', '', 'pemuda kabubu', 2018, '40000000', 'ADD', '2018-05-01', 'y', '2018-08-04'),
(15, 'Pembelian Tanah Makam 25 x 100 M', 4, 'Desa Kabubu', 'Pemberdayaan', 'dapat digunakan sebagai TPU di desa Kabubu ', 'Masyarakat Desa Kabubu', 2018, '40000000', 'ADD', '2018-05-01', 'y', '2018-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
`id_pengumuman` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `tanggal`, `gambar`) VALUES
(7, 'x', 'x', '2018-10-14', '71bd0c43465e0f313d4657886b0cf295.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE IF NOT EXISTS `tbl_profil` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `visimisi` text NOT NULL,
  `struktur` text NOT NULL,
  `sambutan` text NOT NULL,
  `tupoksi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`id`, `nama`, `alamat`, `no_hp`, `no_telepon`, `email`, `website`, `foto`, `visimisi`, `struktur`, `sambutan`, `tupoksi`, `misi`) VALUES
(1, 'MARJUNI', 'Makassar', '0811463889', '', 'kabubudesa@gmail.com', 'kabubu.desa.id', '64e6108a663c15c40bcf8876826f4161.jpg', '"Terwujudnya desa Kabubu yang Nyaman, Maju, Demokratif dan Sejahtera berlandaskan Nilai-Nilai Budaya"\r\n\r\n1. Kabubu yang Nyaman : merupakan kondisi yang jauh dari konflik. perbedaan yang ada di desa Kabubu tentunya menjadi keberanekaragaman bukan menjadi alasan perpecahan dalam konflik sosial.   \r\n2. Kabubu yang Maju : merupakan suatu kondisi terciptanya peningkatan sumber daya manusia yang selalu mengikuti perkembangan, kreatif dan inovatif\r\n3. Kabubu yang Demokratif : Demokrasi yang memiliki makna "dari rakyat untuk rakyat", perlu diterjemahkan dalam pembangunan desa kabubu dengan selalu melibatkan seluruh komponen masyarakat.\r\n4. Kabubu yang Berbudaya : merupakan suatu kondisi peningkatan dalam memaknai dan menghayati nilai kearifan lokal sebagai orientasi pergaulan dalam berinteraksi di tengah masyarakat\r\n5. Kabubu yang Sejahtera : Masyarakat terpenuhi hak dasarnya, pangan, sandang, papan, kesehatan dan pendidikannya.', '607c90a775078636063620eae5dddf56.JPG', '<p><em><strong>Assalamualaikum warahmatullahi wabarakatu, </strong></em></p>\r\n\r\n<p>salam sejahtera untuk kita semua. Selamat datang di website Resmi Desa Kabubu Kecamatan Topoyo Kabupaten Mamuju Tengah. Atas rahmat Tuhan Yang maha esa untuk memenuhi tuntutan zaman maka diperlukanlah sistem tata kelola pemerintahan yang menyediakan akses informasi berbasis jaringan internet kepada seluruh masyarakat. Undang-undang Nomor 6 Tahun 2014 telah memberikan amanah kepada para aparatur pemerintah Desa agar menjalankan pemerintahan dengan memperhatikan asas-asas yang dijelaskan secara eksplisit dalam regulasi tersebut. Website ini akan menyediakan segala informasi tentang Desa Desa sampai dengan pengelolaan anggaran Desa yang tiap tahunnya dikelola oleh pemerintah Desa, mulai dana yang bersumber dari Alokasi Dana Desa dan Dana Desa. sebagai pucuk pimpinan tertinggi dalam struktur pemerintahan di Desa, mewakili seluruh aparat pemerintah desa mengucapkan permohonan maaf yang sebesar-besarnya apabila Website ini masih sangat jauh dari harapan para pengunjung Website. Tentunya kami akan sangat senang terhadap segala kritikan, masukan dan saran demi kemajuan bersama dan terwujudanya masyarakat yang adil dan sejahtera. Wabillahi taufik walhidayah Wassalam.....</p>\r\n', 'Tugas Kepala Desa :\r\n\r\nmenyelenggarakan pemerintahan desa, melaksanakan pembangunan, pembinaan kemasyarakatan dan pemberdayaan masyarakat, dan pemberdayaan masyarakat\r\n\r\nFungsi Kepala Desa :\r\n1. menyelenggarakan pemerintahan desa, seperti tata praja pemerintahan, penetapan peraturan di desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, melakukan upaya perlindungan masyarakat, administrasi kependudukan, dan penataan dan pengelolaan wilayah\r\n2. melaksanakan pembangunan, seperti pembangunan sarana prasarana perdesaaan, dan pembangunan bidang pendidikan dan kesehatan\r\n3. pembinaan kemasyarakatan, seperti pelaksanaan hak dan kewajiban masyarakat, partisipasi masyarakat, sosial budaya masyarakat, keagamaan, dan ketenagakerjaan\r\n4. pemberdayaan masyarakat, seperti tugas sosialisasi dan motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayan perempuan dan keluarga , pemuda, olahraga, dan karang taruna\r\n5. menjaga hubungan kemitraan dengan lembaga masyarakat dan lembaga lainnya', '1. Menciptakan perangkat desa yang profesional agar terbangun pemerintahan efektif dan terpercaya\r\n2. Menciptakan Sinergitas dengan BPD dan lembaga yang ada\r\n3. Meningkatkan Pelayanan Publik\r\n4. Menjadikan Masyarakat sebagai proses pengambilan kebijakan pemerintahan dan program pembangunan desa\r\n5. Mewujudkan Desa yang maju secara sosial dan ekonomi melalui potensi sumber daya Desa\r\n6. Mewujudkan desa yang menjujung nilai kearifan lokal sebagai pranata interaksi sosial\r\n7. Menciptakan kondisi Tertib, Aman, Demokratis berdasarkan keselarasan dan berdasarkan Undang-Undang yang berlaku\r\n8. Membangun sarana prasarana (infrastruktur) guna percepatan arus ekonomi dan mobilitas masyarakat\r\n9. Menciptakan Generasi Muda yang Kreatif dan Inovatif \r\n10. Menjalin kerja sama antar desa atau pihak ketiga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_realisasi`
--

CREATE TABLE IF NOT EXISTS `tbl_realisasi` (
`id_realisasi` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `dana_digunakan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_realisasi`
--

INSERT INTO `tbl_realisasi` (`id_realisasi`, `judul`, `deskripsi`, `tanggal`, `gambar`, `id_kegiatan`, `persentase`, `dana_digunakan`) VALUES
(10, 'dengan adanya lokasi makam seluas 25 x 100 M ini dapat dijadikan sebagai tempat pemakaman umum ', '', '2018-05-12', 'ae1fb30f139a1fd79a948681df749050.JPG', 15, 100, '40000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_regulasi`
--

CREATE TABLE IF NOT EXISTS `tbl_regulasi` (
`id_regulasi` int(11) NOT NULL,
  `id_kategori_regulasi` int(11) NOT NULL,
  `nama_regulasi` varchar(200) NOT NULL,
  `client` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_regulasi`
--

INSERT INTO `tbl_regulasi` (`id_regulasi`, `id_kategori_regulasi`, `nama_regulasi`, `client`, `deskripsi`, `link`, `gambar`) VALUES
(2, 3, 'Peraturan Menteri No 90 Tahun 2010', 'Dinas Lingkungan Hidup Provinsi Sulawesi Selatan', '', '', 'Laporan Data Keluraga.pdf'),
(3, 2, 'Peraturan Gubernur No 17 Tahun 2018', 'Bank BRI Kabupaten Kepulauan Selayar', '', '', 'Laporan Data Keluraga.pdf'),
(4, 3, 'Peraturan Desa 4 Tahun 2016', '', '', '', 'S I K A D.pdf'),
(7, 4, 'perbup', '', '', '', '370666b1404b8b99ea8381882b28b23c.pdf'),
(8, 6, 'permendagri no. 113 tahun 2014 tentang pengelolaan keuangan desa', '', '', '', 'da5d0c00fca29a7215fbc0f41fa385d4.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aparat`
--
ALTER TABLE `tbl_aparat`
 ADD PRIMARY KEY (`id_aparat`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
 ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
 ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_kategori_regulasi`
--
ALTER TABLE `tbl_kategori_regulasi`
 ADD PRIMARY KEY (`id_kategori_regulasi`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
 ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
 ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_realisasi`
--
ALTER TABLE `tbl_realisasi`
 ADD PRIMARY KEY (`id_realisasi`);

--
-- Indexes for table `tbl_regulasi`
--
ALTER TABLE `tbl_regulasi`
 ADD PRIMARY KEY (`id_regulasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_aparat`
--
ALTER TABLE `tbl_aparat`
MODIFY `id_aparat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_kategori_regulasi`
--
ALTER TABLE `tbl_kategori_regulasi`
MODIFY `id_kategori_regulasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_realisasi`
--
ALTER TABLE `tbl_realisasi`
MODIFY `id_realisasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_regulasi`
--
ALTER TABLE `tbl_regulasi`
MODIFY `id_regulasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
