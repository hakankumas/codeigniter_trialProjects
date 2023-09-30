-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Eyl 2023, 13:58:53
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
-- Veritabanı: `codeigniter_3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `person`
--

INSERT INTO `person` (`id`, `name`, `surname`, `title`) VALUES
(1, 'Hakan', 'KUMAŞ', 'Full Stack Developer'),
(2, 'Özdemir', 'YIKILMAZ', 'Front-End Developer'),
(3, 'Ali', 'SARI', 'Mobile Developer'),
(4, 'Ekrem', 'İÇÖZ', 'Bilgi İşlem Sorumlusu'),
(5, 'Ayşe', 'YEŞİL', 'Back-End Developer'),
(9, 'Kağan', 'ÖZTÜRK', 'Full Stack Web Developer'),
(13, 'Merve', 'ALP', 'Angular Developer'),
(14, 'Aslı', 'MAVİ', 'Oracle Developer'),
(17, 'Alparslan', 'İNCE', 'Front-End Developer'),
(20, 'Ali', 'AKINCI', 'Sistem Uzmanı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
