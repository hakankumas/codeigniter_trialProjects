-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Eki 2023, 09:39:05
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniter_pagination`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozel_sayfalar`
--

CREATE TABLE `ozel_sayfalar` (
  `ozel_sayfa_id` int(11) NOT NULL,
  `ozel_sayfa_ad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ozel_sayfalar`
--

INSERT INTO `ozel_sayfalar` (`ozel_sayfa_id`, `ozel_sayfa_ad`) VALUES
(1, 'Okuduğum Kitaplar'),
(2, 'Bildiğim Programlama Dilleri'),
(3, 'Sevdiğim Bilgisayar Oyunları');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `ozel_sayfa_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `username`, `ozel_sayfa_id`, `content`) VALUES
(1, 'hakankumas', 1, 'Kitap 1'),
(2, 'hakankumas', 2, 'Program 1'),
(3, 'hakankumas', 3, 'Oyun 1'),
(4, 'hakankumas', 1, 'Kitap 2'),
(5, 'hakankumas', 2, 'Program 2'),
(6, 'hakankumas', 3, 'Oyun 2'),
(7, 'hakankumas', 1, 'Kitap 3'),
(8, 'hakankumas', 2, 'Program 3'),
(9, 'hakankumas', 3, 'Oyun 3'),
(10, 'hakankumas', 1, 'Kitap 4'),
(11, 'hakankumas', 2, 'Program 4'),
(12, 'hakankumas', 3, 'Oyun 4'),
(13, 'hakankumas', 1, 'Kitap 5'),
(14, 'hakankumas', 2, 'Program 5'),
(15, 'hakankumas', 3, 'Oyun 5'),
(16, 'hakankumas', 1, 'Kitap 6'),
(17, 'hakankumas', 2, 'Program 6'),
(18, 'hakankumas', 3, 'Oyun 6'),
(19, 'hakankumas', 1, 'Kitap 7'),
(20, 'hakankumas', 2, 'Program 7'),
(21, 'hakankumas', 3, 'Oyun 7'),
(22, 'hakankumas', 1, 'Kitap 8'),
(23, 'hakankumas', 2, 'Program 8'),
(24, 'hakankumas', 3, 'Oyun 8'),
(25, 'hakankumas', 1, 'Kitap 9'),
(26, 'hakankumas', 2, 'Program 9'),
(27, 'hakankumas', 3, 'Oyun 9'),
(28, 'kilicali', 1, 'Kitap xxx1'),
(29, 'kilicali', 2, 'Program xxx1'),
(30, 'kilicali', 3, 'Oyun xxx1'),
(31, 'kilicali', 1, 'Kitap xxx2'),
(32, 'kilicali', 2, 'Program xxx2'),
(33, 'kilicali', 3, 'Oyun xxx2'),
(34, 'kilicali', 1, 'Kitap xxx3'),
(35, 'kilicali', 2, 'Program xxx3'),
(36, 'kilicali', 3, 'Oyun xxx3'),
(37, 'kilicali', 1, 'Kitap xxx4'),
(38, 'kilicali', 2, 'Program xxx4'),
(39, 'kilicali', 3, 'Oyun xxx4'),
(40, 'kilicali', 1, 'Kitap xxx5'),
(41, 'kilicali', 2, 'Program xxx5'),
(42, 'kilicali', 3, 'Oyun xxx5'),
(43, 'kilicali', 1, 'Kitap xxx6'),
(44, 'kilicali', 2, 'Program xxx6'),
(45, 'kilicali', 3, 'Oyun xxx6'),
(46, 'kilicali', 1, 'Kitap xxx7'),
(47, 'kilicali', 2, 'Program xxx7'),
(48, 'kilicali', 3, 'Oyun xxx7'),
(49, 'kilicali', 1, 'Kitap xxx8'),
(50, 'kilicali', 2, 'Program xxx8'),
(51, 'kilicali', 3, 'Oyun xxx8'),
(52, 'kilicali', 1, 'Kitap xxx9'),
(53, 'kilicali', 2, 'Program xxx9'),
(54, 'kilicali', 3, 'Oyun xxx9');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `surname`) VALUES
(1, 'hakankumas', '123', 'Hakan', 'KUMAŞ'),
(2, 'kilicali', '123', 'Ali', 'KILIÇ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ozel_sayfalar`
--
ALTER TABLE `ozel_sayfalar`
  ADD PRIMARY KEY (`ozel_sayfa_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`),
  ADD KEY `ozel_sayfa_id` (`ozel_sayfa_id`),
  ADD KEY `username` (`username`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ozel_sayfalar`
--
ALTER TABLE `ozel_sayfalar`
  MODIFY `ozel_sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD CONSTRAINT `sayfalar_ibfk_1` FOREIGN KEY (`ozel_sayfa_id`) REFERENCES `ozel_sayfalar` (`ozel_sayfa_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sayfalar_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
