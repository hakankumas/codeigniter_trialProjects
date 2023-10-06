-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eki 2023, 13:18:58
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
-- Veritabanı: `codeigniter_mailer`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `sender` varchar(500) DEFAULT NULL,
  `mailtoadress` varchar(500) DEFAULT NULL,
  `mail_title` text DEFAULT NULL,
  `mail_content` text DEFAULT NULL,
  `registerDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`id`, `sender`, `mailtoadress`, `mail_title`, `mail_content`, `registerDate`) VALUES
(1, 'Hakan KUMAŞ', 'hknkms54@gmail.com', 'Lorem ipsum dolar.', 'Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar. Lorem ipsum dolar.', '2023-10-06 11:18:01');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
