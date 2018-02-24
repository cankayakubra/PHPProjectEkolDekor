-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Oca 2018, 23:53:00
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ekoldekor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `resim`, `tarih`) VALUES
(9, 'kubracankaya', 'cankayakubra@hotmail.com', '12345', 'admin', 'aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `smtpserver` varchar(255) DEFAULT NULL,
  `smtpport` varchar(255) DEFAULT NULL,
  `smtpemail` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hakkimizda` varchar(2000) DEFAULT NULL,
  `iletisim` varchar(2000) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instegram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`Id`, `adi`, `keywords`, `description`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `sifre`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `iletisim`, `facebook`, `twitter`, `instegram`, `pinterest`) VALUES
(1, 'ekol dekor', 'Alisveris,ekol möble,ekol moble,ekol dekor,ekol mobilya,mobilya,dekorasyon,möble, çocuk odas?,genç odas?,yatak odas?,oturma odas?,mutfak,banyo,antre,dolap,kitapl?k,vestiyer,ayakkab?l?k,çal??ma masas?,raf,masa,kap?,pencere,cam,tv ünitesi,salon,yemek odas?,', 'mobilya', NULL, 'smtp-mail.outlook.com', '587', '', '', 'Kbü', 'Karabük', '02154895533', NULL, NULL, '<p>Monaco Mobilya, sekt&ouml;rdeki 37 y?ll?k bilgi birikimi ve deneyimi ile her ge&ccedil;en g&uuml;n m&uuml;?terilerine daha iyi hizmet sunmay? hedefliyor. Kurulu?undan bu yana, geli?en ve de?i?en moda anlay???na paralel olarak tasar?mlar?n? s&uuml;rekli yeniliyor ve m&uuml;?teri memnuniyeti odakl? &ccedil;al??ma prensibi ile farkl? sipari?ler i&ccedil;in tasar?mlar &uuml;retiyor.</p>\r\n\r\n<p>Monaco Mobilya, Tuzla Kimya Sanayicileri Organize Sanayi B&ouml;lgesi&rsquo;ndeki 5 bin metrekarelik fabrikas?nda, ileri teknoloji ve uzman kadrosuyla modern tarzda ev mobilyalar? &uuml;retiyor. Merkez ofisi Modoko Sanayi Sitesi&rsquo;nde yer alan Monaco Mobilya, yurtd???na a&ccedil;?lma vizyonunun ilk ad?m? olarak 2007 y?l?nda Bak&uuml; Azerbaycan&rsquo;da ikinci ma?azas?n? b&uuml;nyesine katt?.</p>\r\n\r\n<p>&ldquo;MOZEN&rdquo; markas? ile b&uuml;y&uuml;yor</p>\r\n\r\n<p>Markala?ma yolunda &ouml;nemli bir ad?m atarak &ldquo;MOZEN&rdquo; markas?n? olu?turan Monaco Mobilya, yenilik&ccedil;i vizyonu ile d&uuml;nyan?n &ouml;nde gelen &uuml;reticileriyle ayn? kulvarda yer al?yor. Modern &ccedil;izgisine de?i?en moda anlay???na paralel olarak avangart stilini de ekleyen Monaco Mobilya, yeni tarz?n? ilk kez 2011 ?MOB Mobilya Fuar?&rsquo;nda t&uuml;keticilerin be?enisine sundu.</p>\r\n\r\n<p>Tuzla&rsquo;da bulunan &uuml;retim merkezi ve Modoko&rsquo;da ki showroomda gerek kalite anlay???, gerekse geni? &uuml;r&uuml;n yelpazesi ve sat?? sonras? deste?i ile Monaco Mobilya, art?k yaln?zca modern mobilyan?n de?il ayn? zamanda avangart stilinin de &ouml;nc&uuml;l&uuml;?&uuml;n&uuml; &uuml;stlenmeye aday.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Baksan Sanayi Sitesi 57/2&nbsp;</p>\r\n\r\n<p>Eski?ehir</p>\r\n\r\n<p>0507 991 14 11</p>\r\n', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL,
  `parent_id` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `adi` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `resim` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `durum` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tarih` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `aciklama` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `parent_id`, `adi`, `description`, `keywords`, `resim`, `durum`, `tarih`, `aciklama`) VALUES
(1, '10', 'Çocuk/Genç Odas?', 'mobilya', 'Çocuk/Genç', '13528904_294667890866957_5364343912684914959_n.jpg', NULL, NULL, NULL),
(2, '11', 'Yatak Odas?', 'mobilya', 'Yatak', '20799077_496159434051134_4591729541323887144_n.jpg', NULL, NULL, NULL),
(4, '12', 'Yemek Odas?', 'mobilya', 'Yemek', NULL, NULL, NULL, NULL),
(5, '13', 'Oturma Odas?', 'mobilya', 'Oturma', '12308532_203564183310662_5659646031174233689_n.jpg', NULL, NULL, NULL),
(6, '14', 'Antre', 'mobilya', 'Antre', '20664749_496164867383924_2407031066313303170_n.jpg', NULL, NULL, NULL),
(7, '15', 'Çal??ma Odas?', 'mobilya', 'Çal??ma', '10985494_107148679618880_2791540584066598178_n.jpg', NULL, NULL, NULL),
(8, '16', 'Banyo', 'mobilya', 'Banyo', '18342532_451231611877250_8390622546650792937_n.jpg', NULL, NULL, NULL),
(9, '17', 'Mutfak', 'mobilya', 'Mutfak', '23915863_538687363131674_4399244125065759981_n.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler_resim`
--

CREATE TABLE `kategoriler_resim` (
  `Id` int(11) NOT NULL,
  `kategori_id` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mesaj` varchar(255) DEFAULT NULL,
  `Ip` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `adminnotu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`Id`, `adsoy`, `email`, `tel`, `mesaj`, `Ip`, `durum`, `tarih`, `adminnotu`) VALUES
(1, 'osman aksay', 'osmanaksay@hotmail.com', '+905466577828', 'çocuk odas?', '::1', 'Okundu', '2018-01-14 21:01:23', NULL),
(2, 'osman aksay', 'osmanaksay@hotmail.com', '+905466577828', 'çocuk odas?', '::1', 'Yeni', '2018-01-14 21:01:53', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL,
  `uye_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`Id`, `uye_id`, `urun_id`, `tarih`, `miktar`) VALUES
(30, '20', '30', '2017-01-31 21:00:00', '30'),
(43, NULL, '10', '2017-12-18 13:53:20', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `Id` int(11) NOT NULL,
  `uye_id` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `tutar` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `durum` varchar(20) DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) DEFAULT NULL,
  `kargofirma` varchar(255) DEFAULT NULL,
  `kargono` varchar(255) DEFAULT NULL,
  `mus_aciklama` varchar(255) DEFAULT NULL,
  `admin_aciklama` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `not` varchar(2000) DEFAULT NULL,
  `birim` varchar(255) DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`Id`, `uye_id`, `adres`, `tel`, `tutar`, `sehir`, `durum`, `tarih`, `ip`, `kargofirma`, `kargono`, `mus_aciklama`, `admin_aciklama`, `adsoy`, `not`, `birim`, `adi`) VALUES
(1, '11', 'mustafa kemal mahallesi', '05466577835', '1500', 'Mu?la', 'Yeni', '2018-01-14 21:42:41', '::1', NULL, NULL, NULL, NULL, 'Tu?çe Sivi?', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL,
  `siparis_id` varchar(255) DEFAULT NULL,
  `uye_id` int(11) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `birim` varchar(255) DEFAULT NULL,
  `tutar` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`Id`, `siparis_id`, `uye_id`, `urun_id`, `adi`, `fiyat`, `birim`, `tutar`, `tarih`, `miktar`, `durum`) VALUES
(1, '1', 11, '44', 'Dolap', '1500', NULL, '1500', '2018-01-14 21:42:41', '1', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kodu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `afiyat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sfiyat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ifiyat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `stok` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `grubu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `imiktar` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `birim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `turu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`Id`, `adi`, `kodu`, `kategori`, `afiyat`, `sfiyat`, `ifiyat`, `stok`, `description`, `keywords`, `aciklama`, `durum`, `tarih`, `resim`, `grubu`, `imiktar`, `birim`, `turu`) VALUES
(1, 'Dolap', '10', '1', '1000', '1500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11138574_125984437735304_2494969116408032681_n.jpg', 'kampanya', NULL, NULL, NULL),
(39, 'Kitaplık', '20', '1', '1000', '1500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11152692_192223131111434_50625256678042301_n_(1).jpg', NULL, NULL, NULL, 'ah?ap'),
(40, 'Karyola', '30', '1', '1000', '1500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ah?ap'),
(41, 'Yemek Odası Takımları', '40', '4', '1000', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ah?ap'),
(42, 'Bebek Odası Takımı', '50', '1', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11058084_125984327735315_4046178052108374808_n.jpg', NULL, NULL, NULL, NULL),
(43, 'Çocuk Odası Takımları', '60', '1', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14937381_361586030841809_1915437064052812368_n.jpg', NULL, NULL, NULL, NULL),
(44, 'Genç Odası Takımları', '70', '1', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13528904_294667890866957_5364343912684914959_n1.jpg', NULL, NULL, NULL, NULL),
(45, 'Ranza', '80', '1', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13528904_294667890866957_5364343912684914959_n2.jpg', NULL, NULL, NULL, NULL),
(46, 'Mutfak Masa Takımları', '90', '4', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Dolap / Konsol', '100', '4', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20799077_496159434051134_4591729541323887144_n1.jpg', NULL, NULL, NULL, NULL),
(48, 'Çok Amaçlı Mutfak Dolapları', '110', '9', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12299208_203445653322515_2612449987062955329_n.jpg', NULL, NULL, NULL, NULL),
(49, 'Ankastre / Fırın Dolapları', '120', '9', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23915863_538687363131674_4399244125065759981_n1.jpg', NULL, NULL, NULL, NULL),
(50, 'Gümüşlükler / Vitrinler', '130', '4', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1185132_247800155553731_8149043586118595806_n.jpg', NULL, NULL, NULL, NULL),
(51, 'Kiler / Erzak Dolapları', '140', '9', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '26815421_561346407532436_928902593918947651_n1.jpg', NULL, NULL, NULL, NULL),
(52, 'Masa', '150', '4', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Yemek Masaları', '160', '9', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Portmantolar / Vestiyerler', '170', '6', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20664749_496164867383924_2407031066313303170_n1.jpg', NULL, NULL, NULL, NULL),
(55, 'Ayakkabılıklar', '180', '6', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '26815421_561346407532436_928902593918947651_n.jpg', NULL, NULL, NULL, NULL),
(56, 'Çalışma Masaları', '190', '7', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13509002_294667864200293_6595436832404940350_n.jpg', NULL, NULL, NULL, NULL),
(57, 'Raflar', '200', '7', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12321251_257963274537419_6647533714839279625_n.jpg', NULL, NULL, NULL, NULL),
(58, 'Ofis Çalışma Alanı', '210', '7', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Banyo Dolap Takımları', '220', '8', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18342532_451231611877250_8390622546650792937_n1.jpg', NULL, NULL, NULL, NULL),
(60, 'Lavabolu Banyo Dolapları', '230', '8', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18342532_451231611877250_8390622546650792937_n2.jpg', NULL, NULL, NULL, NULL),
(61, 'Çamaşır Sepetleri', '240', '8', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler_resim`
--

CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urunler_resim`
--

INSERT INTO `urunler_resim` (`Id`, `urun_id`, `resim`) VALUES
(1, '32', '20507672591151781.jpg'),
(2, '32', '21318325514925978763.jpg'),
(4, '123', 'PCFPC14A17SK-500_front_8B15285A12CB05A2DA14970080788701590.jpg'),
(5, '123', 'indir_(1).jpg'),
(6, '123', 'images_(1)1.jpg'),
(7, '140', '21318325514925978765.jpg'),
(8, '140', '20507672591151782.jpg'),
(9, '140', 'telefon1.jpg'),
(10, '124', 'samsung_3d_plazma_dekupe1231510624.jpg'),
(11, '124', 'indir_(3).jpg'),
(12, '124', 'indir_(2).jpg'),
(13, '125', 'images_(2)1.jpg'),
(14, '125', 'indir_(4).jpg'),
(15, '125', 'images_(3).jpg'),
(17, '17', '4432650-69_plm1.jpg'),
(18, '17', 'indir_(5).jpg'),
(21, '12', 'indir_(4)1.jpg'),
(24, '13', '361.png'),
(25, '4', '51.jpg'),
(26, '2', '122.png'),
(27, '2', '123.png'),
(29, '30', '127.png'),
(30, '33', '363.png'),
(31, '33', '364.png'),
(32, '55', '14595724_342730492727363_6209302736163845214_n.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`Id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `resim`, `tarih`, `sehir`, `adres`, `tel`) VALUES
(10, 'Kubra Cankaya', 'cankayakubra@hotmail.com', NULL, 'uye', 'pasif', NULL, NULL, '26', '?irintepe mah. poyraz o?lu sokak bahar sitesi kardelen apartman? 6/13', '+905466577826'),
(11, 'Tu?çe Sivi?', 'tugce@hotmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, '05466577835');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kategoriler_resim`
--
ALTER TABLE `kategoriler_resim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler_resim`
--
ALTER TABLE `urunler_resim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler_resim`
--
ALTER TABLE `kategoriler_resim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Tablo için AUTO_INCREMENT değeri `urunler_resim`
--
ALTER TABLE `urunler_resim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
