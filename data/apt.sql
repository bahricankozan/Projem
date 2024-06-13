-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 May 2024, 14:14:24
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `apt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aidat_tbl`
--

DROP TABLE IF EXISTS `aidat_tbl`;
CREATE TABLE `aidat_tbl` (
  `id` int(11) NOT NULL,
  `sakin_id` int(11) NOT NULL,
  `sakin` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tutar` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `ay` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `aidat_tbl`
--

INSERT INTO `aidat_tbl` (`id`, `sakin_id`, `sakin`, `tutar`, `tarih`, `ay`) VALUES
(1, 12, 'DURMUŞ AKKAYA', 350, '2024-02-01', '1'),
(2, 12, 'DURMUŞ AKKAYA', 350, '2024-03-21', '2'),
(3, 7, 'Fatma YAŞ', 350, '2024-03-21', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `harcama_tbl`
--

DROP TABLE IF EXISTS `harcama_tbl`;
CREATE TABLE `harcama_tbl` (
  `id` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `belge` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tutar` float NOT NULL,
  `resim` mediumtext COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `harcama_tbl`
--

INSERT INTO `harcama_tbl` (`id`, `tarih`, `aciklama`, `belge`, `tutar`, `resim`) VALUES
(2, '2024-05-08', 'ELEKTRİK FATURASI', '789654123', 349.7, 'fat24153160.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_tbl`
--

DROP TABLE IF EXISTS `kullanici_tbl`;
CREATE TABLE `kullanici_tbl` (
  `id` int(11) NOT NULL,
  `k_adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `k_sifre` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici_tbl`
--

INSERT INTO `kullanici_tbl` (`id`, `k_adi`, `k_sifre`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj_tbl`
--

DROP TABLE IF EXISTS `mesaj_tbl`;
CREATE TABLE `mesaj_tbl` (
  `id` int(11) NOT NULL,
  `adsoy` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8mb4_turkish_ci NOT NULL,
  `msj` mediumtext COLLATE utf8mb4_turkish_ci NOT NULL,
  `tur` varchar(15) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `mesaj_tbl`
--

INSERT INTO `mesaj_tbl` (`id`, `adsoy`, `tel`, `msj`, `tur`, `tarih`) VALUES
(3, 'TEKİN ÜNLÜ', '05456328574', 'Bina girişindeki bankların boyası oldukça çok yıpranmış. Yenilenirse memnun oluruz.', '2', '2024-05-08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeler_tbl`
--

DROP TABLE IF EXISTS `odemeler_tbl`;
CREATE TABLE `odemeler_tbl` (
  `id` int(11) NOT NULL,
  `sakin` tinyint(4) NOT NULL,
  `ay1` tinyint(1) NOT NULL,
  `ay2` tinyint(1) NOT NULL,
  `ay3` tinyint(1) NOT NULL,
  `ay4` tinyint(1) NOT NULL,
  `ay5` tinyint(1) NOT NULL,
  `ay6` tinyint(1) NOT NULL,
  `ay7` tinyint(1) NOT NULL,
  `ay8` tinyint(1) NOT NULL,
  `ay9` tinyint(1) NOT NULL,
  `ay10` tinyint(1) NOT NULL,
  `ay11` tinyint(1) NOT NULL,
  `ay12` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `odemeler_tbl`
--

INSERT INTO `odemeler_tbl` (`id`, `sakin`, `ay1`, `ay2`, `ay3`, `ay4`, `ay5`, `ay6`, `ay7`, `ay8`, `ay9`, `ay10`, `ay11`, `ay12`) VALUES
(1, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 12, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sakinler_tbl`
--

DROP TABLE IF EXISTS `sakinler_tbl`;
CREATE TABLE `sakinler_tbl` (
  `id` int(11) NOT NULL,
  `blok` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `kat` int(11) NOT NULL,
  `daire` int(11) NOT NULL,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tel` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sakinler_tbl`
--

INSERT INTO `sakinler_tbl` (`id`, `blok`, `kat`, `daire`, `ad`, `tel`, `tarih`) VALUES
(5, 'A', 3, 6, 'BAHRİ CAN', '05552221111', '2024-03-14'),
(7, 'A', 1, 2, 'FATMA YAŞ', '05556664444', '2024-03-19'),
(10, 'A', 2, 3, 'TEKİN ÜNLÜ', '05412589632', '2024-03-21'),
(11, 'B', 3, 5, 'ALİ CAN', '05455555611', '2024-03-21'),
(12, 'A', 0, 1, 'DURMUŞ AKKAYA', '05446552211', '2024-03-21'),
(13, 'A', 2, 4, 'SEZEN ÖLMEZ', '05412589635', '2024-05-08'),
(17, 'A', 3, 5, 'BEKİR YAVUZ', '05457896344', '2024-05-08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_tbl`
--

DROP TABLE IF EXISTS `tablo_tbl`;
CREATE TABLE `tablo_tbl` (
  `id` int(11) NOT NULL,
  `tutar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tablo_tbl`
--

INSERT INTO `tablo_tbl` (`id`, `tutar`) VALUES
(1, 350),
(2, 350),
(3, 350),
(4, 350),
(5, 400),
(6, 400),
(7, 400),
(8, 400),
(9, 400),
(10, 400),
(11, 400),
(12, 400);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aidat_tbl`
--
ALTER TABLE `aidat_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `harcama_tbl`
--
ALTER TABLE `harcama_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici_tbl`
--
ALTER TABLE `kullanici_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesaj_tbl`
--
ALTER TABLE `mesaj_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odemeler_tbl`
--
ALTER TABLE `odemeler_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sakinler_tbl`
--
ALTER TABLE `sakinler_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tablo_tbl`
--
ALTER TABLE `tablo_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aidat_tbl`
--
ALTER TABLE `aidat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `harcama_tbl`
--
ALTER TABLE `harcama_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_tbl`
--
ALTER TABLE `kullanici_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mesaj_tbl`
--
ALTER TABLE `mesaj_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `odemeler_tbl`
--
ALTER TABLE `odemeler_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sakinler_tbl`
--
ALTER TABLE `sakinler_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `tablo_tbl`
--
ALTER TABLE `tablo_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


--
-- Üstveri
--
USE `phpmyadmin`;

--
-- aidat_tbl tablosu için üstveri
--

--
-- Tablo döküm verisi `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'apt', 'aidat_tbl', '{\"sorted_col\":\"`aidat_tbl`.`id`  ASC\"}', '2024-05-08 06:51:13');

--
-- harcama_tbl tablosu için üstveri
--

--
-- kullanici_tbl tablosu için üstveri
--

--
-- mesaj_tbl tablosu için üstveri
--

--
-- odemeler_tbl tablosu için üstveri
--

--
-- sakinler_tbl tablosu için üstveri
--

--
-- tablo_tbl tablosu için üstveri
--

--
-- apt veritabanı için üstveri
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
