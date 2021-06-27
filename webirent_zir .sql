-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 04 Haz 2021, 21:26:29
-- Sunucu sürümü: 10.2.34-MariaDB
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webirent_zir`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirimler`
--

CREATE TABLE `bildirimler` (
  `id` int(11) NOT NULL,
  `uyari` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bildirimler`
--

INSERT INTO `bildirimler` (`id`, `uyari`, `tarih`) VALUES
(10, 'arizona servi için Mantar ilaçlaması bugün yapılmalı.', '2018-12-25'),
(11, 'arizona servi için Mantar ilaçlaması bugün yapılmalı.', '2018-12-28'),
(12, 'arizona servi için Böcek ilaçlaması bugün yapılmalı.', '2018-12-28'),
(13, 'göknar için Mantar ilaçlaması bugün yapılmalı.', '2018-12-28'),
(14, 'arizona servi için Mantar ilaçlaması bugün yapılmalı.', '2019-01-11'),
(15, 'arizona servi için Böcek ilaçlaması bugün yapılmalı.', '2019-01-11'),
(16, 'himalaya sediri için Böcek ilaçlaması bugün yapılmalı.', '2019-01-22'),
(17, 'goldraider için Gübre ilaçlaması bugün yapılmalı.', '2019-02-22'),
(18, 'göknar için Böcek ilaçlaması bugün yapılmalı.', '2019-03-23'),
(19, 'goldraider için Böcek ilaçlaması bugün yapılmalı.', '2019-03-24'),
(20, 'Leylandi için Mantar ilaçlaması bugün yapılmalı.', '2019-04-20'),
(21, 'mavi ladin için Gübre ilaçlaması bugün yapılmalı.', '2019-04-22'),
(22, 'Leylandi için Gübre ilaçlaması bugün yapılmalı.', '2019-05-20'),
(23, 'Leylandi için Mantar ilaçlaması bugün yapılmalı.', '2019-07-21'),
(24, 'Arizona Servi için Mantar ilaçlaması bugün yapılmalı.', '2019-07-21'),
(25, 'Arizona Servi için Gübre ilaçlaması bugün yapılmalı.', '2019-07-21'),
(26, 'Goldrayder için Gübre ilaçlaması bugün yapılmalı.', '2019-07-31'),
(27, 'Leylandi için Böcek ilaçlaması bugün yapılmalı.', '2019-08-20'),
(28, 'Arizona Servi için Böcek ilaçlaması bugün yapılmalı.', '2019-08-20'),
(29, 'Goldrayder için Böcek ilaçlaması bugün yapılmalı.', '2019-08-20'),
(30, 'Himaleya Sediri için Gübre ilaçlaması bugün yapılmalı.', '2019-08-20'),
(31, 'Göknar için Böcek ilaçlaması bugün yapılmalı.', '2019-08-20'),
(32, 'Leylandi için Gübre ilaçlaması bugün yapılmalı.', '2019-09-19'),
(33, 'Himaleya Sediri için Böcek ilaçlaması bugün yapılmalı.', '2019-09-19'),
(34, 'Mavi Ladin için Gübre ilaçlaması bugün yapılmalı.', '2019-09-19'),
(35, 'Himaleya Sediri için Mantar ilaçlaması bugün yapılmalı.', '2019-10-19'),
(36, 'Mavi Ladin için Böcek ilaçlaması bugün yapılmalı.', '2019-10-19'),
(37, 'Göknar için Gübre ilaçlaması bugün yapılmalı.', '2019-10-19'),
(38, 'Goldrayder için Mantar ilaçlaması bugün yapılmalı.', '2019-11-18'),
(39, 'Göknar için Mantar ilaçlaması bugün yapılmalı.', '2019-11-18');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirim_ayar`
--

CREATE TABLE `bildirim_ayar` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bildirim_ayar`
--

INSERT INTO `bildirim_ayar` (`id`, `mail`) VALUES
(1, 'furkan_salim_24@icloud.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bitki`
--

CREATE TABLE `bitki` (
  `id` int(11) NOT NULL,
  `bitki_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bitki_adet` int(11) NOT NULL,
  `bitki_fiyat` float NOT NULL,
  `mantar_sure` int(11) NOT NULL,
  `gubre_sure` int(11) NOT NULL,
  `bocek_sure` int(11) NOT NULL,
  `son_mantar` date NOT NULL,
  `son_gubre` date NOT NULL,
  `son_bocek` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bitki`
--

INSERT INTO `bitki` (`id`, `bitki_adi`, `bitki_adet`, `bitki_fiyat`, `mantar_sure`, `gubre_sure`, `bocek_sure`, `son_mantar`, `son_gubre`, `son_bocek`) VALUES
(1, 'Leylandi', 15000, 45, 60, 120, 90, '2021-04-25', '2020-05-17', '2020-05-17'),
(2, 'Arizona Servi', 13000, 45, 60, 60, 90, '2021-04-25', '2021-04-25', '2021-04-25'),
(3, 'Goldrayder', 7000, 60, 180, 70, 90, '2021-05-30', '2021-05-30', '2021-05-30'),
(4, 'Himaleya Sediri', 9000, 80, 150, 90, 120, '2019-05-22', '2019-05-22', '2019-05-22'),
(5, 'Mavi Ladin', 3910, 200, 320, 120, 150, '2020-05-17', '2020-05-17', '2019-05-22'),
(6, 'Göknar', 4000, 120, 180, 150, 90, '2021-04-25', '2021-04-25', '2019-05-22'),
(7, 'Mavi ağaç', 2000, 40, 150, 60, 80, '0000-00-00', '2021-05-30', '2021-05-30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilac`
--

CREATE TABLE `ilac` (
  `id` int(11) NOT NULL,
  `ilac_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilac_miktar` int(11) NOT NULL,
  `ilac_maliyet` float NOT NULL,
  `ilaclama` int(11) NOT NULL,
  `ilac_toplam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilac`
--

INSERT INTO `ilac` (`id`, `ilac_adi`, `ilac_miktar`, `ilac_maliyet`, `ilaclama`, `ilac_toplam`) VALUES
(1, 'Böcek', 521, 5, 200, 104200),
(2, 'Gübre', 369, 4, 150, 55350),
(3, 'Mantar', 11, 7, 100, 1100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tuketim`
--

CREATE TABLE `tuketim` (
  `id` int(11) NOT NULL,
  `ilac_id` int(11) NOT NULL,
  `bitki_id` int(11) NOT NULL,
  `ay` int(11) NOT NULL,
  `yil` int(11) NOT NULL,
  `ilac_miktar` int(11) NOT NULL,
  `bitki_miktar` int(11) NOT NULL,
  `maliyet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tuketim`
--

INSERT INTO `tuketim` (`id`, `ilac_id`, `bitki_id`, `ay`, `yil`, `ilac_miktar`, `bitki_miktar`, `maliyet`) VALUES
(20, 3, 2, 5, 2019, 22, 2108, 88),
(21, 1, 2, 5, 2019, 11, 2108, 22),
(22, 2, 2, 5, 2019, 15, 2108, 750),
(23, 2, 4, 5, 2019, 68, 10100, 3400),
(24, 3, 1, 5, 2019, 156, 15595, 624),
(25, 1, 1, 5, 2019, 78, 15595, 156),
(26, 2, 1, 5, 2019, 104, 15595, 5200),
(27, 3, 1, 5, 2019, 156, 15595, 624),
(28, 1, 1, 5, 2019, 78, 15595, 156),
(29, 2, 1, 5, 2019, 104, 15595, 5200),
(30, 3, 2, 5, 2019, 31, 3010, 124),
(31, 1, 2, 5, 2019, 16, 3010, 32),
(32, 2, 2, 5, 2019, 21, 3010, 1050),
(33, 3, 3, 5, 2019, 50, 5000, 200),
(34, 1, 3, 5, 2019, 25, 5000, 50),
(35, 2, 3, 5, 2019, 34, 5000, 1700),
(36, 3, 4, 5, 2019, 81, 8100, 324),
(37, 1, 4, 5, 2019, 41, 8100, 82),
(38, 2, 4, 5, 2019, 54, 8100, 2700),
(39, 3, 5, 5, 2019, 11, 1009, 44),
(40, 1, 5, 5, 2019, 6, 1009, 12),
(41, 2, 5, 5, 2019, 7, 1009, 350),
(42, 3, 6, 5, 2019, 13, 1201, 52),
(43, 1, 6, 5, 2019, 7, 1201, 14),
(44, 2, 6, 5, 2019, 9, 1201, 450),
(45, 3, 1, 5, 2020, 150, 15000, 1050),
(46, 1, 1, 5, 2020, 75, 15000, 375),
(47, 2, 1, 5, 2020, 100, 15000, 400),
(48, 3, 5, 5, 2020, 40, 3910, 280),
(49, 2, 5, 5, 2020, 27, 3910, 108),
(50, 3, 1, 4, 2021, 150, 15000, 1050),
(51, 3, 2, 4, 2021, 130, 13000, 910),
(52, 1, 2, 4, 2021, 65, 13000, 325),
(53, 2, 2, 4, 2021, 87, 13000, 348),
(54, 3, 6, 4, 2021, 40, 4000, 280),
(55, 2, 6, 4, 2021, 27, 4000, 108),
(56, 3, 3, 5, 2021, 70, 7000, 490),
(57, 1, 3, 5, 2021, 35, 7000, 175),
(58, 2, 3, 5, 2021, 47, 7000, 188),
(59, 2, 7, 5, 2021, 14, 2000, 56),
(60, 1, 7, 5, 2021, 10, 2000, 50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `mail`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'furkan_salim_24@icloud.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bildirimler`
--
ALTER TABLE `bildirimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bildirim_ayar`
--
ALTER TABLE `bildirim_ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bitki`
--
ALTER TABLE `bitki`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilac`
--
ALTER TABLE `ilac`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tuketim`
--
ALTER TABLE `tuketim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bildirimler`
--
ALTER TABLE `bildirimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `bildirim_ayar`
--
ALTER TABLE `bildirim_ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bitki`
--
ALTER TABLE `bitki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `ilac`
--
ALTER TABLE `ilac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tuketim`
--
ALTER TABLE `tuketim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
