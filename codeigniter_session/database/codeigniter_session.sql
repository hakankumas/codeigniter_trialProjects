-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Eyl 2023, 11:30:03
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
-- Veritabanı: `codeigniter_session`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`product_id`, `user_id`, `product_name`) VALUES
(1, 1, 'Kullanici1.Ürün0'),
(2, 2, 'Kullanici2.Ürün0'),
(3, 1, 'Kullanici1.Ürün1'),
(4, 2, 'Kullanici2.Ürün1'),
(5, 3, 'Kullanici3.Ürün1'),
(6, 1, 'Kullanici1.Ürün2'),
(7, 2, 'Kullanici2.Ürün2'),
(8, 3, 'Kullanici3.Ürün2'),
(9, 1, 'Kullanici1.Ürün3'),
(10, 2, 'Kullanici2.Ürün3'),
(11, 3, 'Kullanici3.Ürün3'),
(12, 1, 'Kullanici1.Ürün4'),
(13, 2, 'Kullanici2.Ürün4'),
(14, 3, 'Kullanici3.Ürün4'),
(15, 1, 'Kullanici1.Ürün5'),
(16, 2, 'Kullanici2.Ürün5'),
(17, 3, 'Kullanici3.Ürün5'),
(18, 1, 'Kullanici1.Ürün6'),
(19, 2, 'Kullanici2.Ürün6'),
(20, 3, 'Kullanici3.Ürün6'),
(21, 1, 'Kullanici1.Ürün7'),
(22, 2, 'Kullanici2.Ürün7'),
(23, 3, 'Kullanici3.Ürün7'),
(24, 1, 'Kullanici1.Ürün8'),
(25, 2, 'Kullanici2.Ürün8'),
(26, 3, 'Kullanici3.Ürün8'),
(27, 1, 'Kullanici1.Ürün9'),
(28, 2, 'Kullanici2.Ürün9'),
(29, 3, 'Kullanici3.Ürün9'),
(30, 1, 'Kullanici1.Ürün10'),
(31, 2, 'Kullanici2.Ürün10'),
(32, 3, 'Kullanici3.Ürün10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `mail`, `password`) VALUES
(1, 'Hakan', 'KUMAŞ', 'hakankumas@gmail.com', '202cb962ac59075b964b07152d234b70 '),
(2, 'Ali', 'VELİ', 'aliveli@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Ahmet', 'YEŞİL', 'ahmetyesil@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
