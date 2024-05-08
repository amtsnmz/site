-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 30 Nis 2024, 20:45:31
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kisisel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aboutTxt` text COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `html` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `css` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `js` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `php` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `aboutTxt`, `birthday`, `website`, `instagram`, `year`, `email`, `city`, `html`, `css`, `js`, `php`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '16 Mart', 'vibescripts.com.tr', 'kroxly', '18', 'efwlxc@gmail.com', 'İstanbul', '98', '86', '53', '64');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `discord` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `instagram`, `discord`, `email`, `website`) VALUES
(1, 'efwlxc', '882582406358515713', 'iletisim@vibescripts.com.tr', 'vibescripts.com.tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `about` text COLLATE utf8mb4_general_ci NOT NULL,
  `img` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `home`
--

INSERT INTO `home` (`id`, `username`, `type`, `about`, `img`) VALUES
(1, 'Kroxly', 'Web Developer', 'Bu script kroxly tarafından kodlandı! Emeğe saygı olarak yorum yapınız ❤', 'https://vibescripts.com.tr/public/image-upload/uploads/9b71ca7550dcfc715da46caa847a6650.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`) VALUES
(11, 'https://efwlxc.com.tr/assets/img/portfolio/yak%C4%B1nda.png'),
(9, 'https://efwlxc.com.tr/assets/img/portfolio/yak%C4%B1nda.png'),
(10, 'https://efwlxc.com.tr/assets/img/portfolio/yak%C4%B1nda.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `favicon` text COLLATE utf8mb4_general_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `favicon`, `keywords`, `description`) VALUES
(1, 'Kroxly | Php Kişisel Site', 'https://vibescripts.com.tr/public/image-upload/uploads/9b71ca7550dcfc715da46caa847a6650.jpeg', 'kroxly, php, kisisel, web, site, script, 2024, parsher', 'Bu script kroxly tarafından kodlandı! Emeğe saygı olarak yorum yapınız. ❤');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
