-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3307
-- Üretim Zamanı: 17 Ağu 2026, 15:36:52
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cv_database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `egitim` text DEFAULT NULL,
  `deneyim` text DEFAULT NULL,
  `yetenekler` text DEFAULT NULL,
  `fotograf` varchar(255) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `cv`
--

INSERT INTO `cv` (`id`, `ad`, `email`, `telefon`, `egitim`, `deneyim`, `yetenekler`, `fotograf`) VALUES
(1, 'kübra şimşek', 'kubrasimsek10052004@gmail.com', '05313194004', 'Çankırı Karatekin Üniversitesi | 2023 – Günümüz Bilgisayar Mühendisliği (Lisans)', 'Kocaeli Üniversitesi | Stajyer Mühendis (1 Ay) OpenCV kütüphanesi ile gerçek zamanlı görüntü analiz ve nesne tabanlı algoritmaları üzerine çalışıldı. Ekip projelerinde teknik dökümantasyon ve raporlama süreçler yürütüldü.', 'Programlama Dller: C, C++, Java, Python, PHP Web Teknolojler: HTML5, CSS3, JavaScrpt Vertabanı: MySQL, SQL', '1777765356_WIN_20250731_15_18_53_Pro.jpg'),
(2, 'kübra şimşek', 'kubrasimsek10052004@gmail.com', '05313194004', 'KOÜ Staj', 'yok', 'Programlama Dller: C, C++, Java, Python, PHP Web Teknolojler: HTML5, CSS3, JavaScrpt Vertabanı: MySQL, SQL', '1777831583_WIN_20250731_15_18_53_Pro.jpg'),
(3, 'kübra şimşek', 'kamabetul4@gmail.com', '05313194004', 'yok', 'yok', 'Programlama Dller: C, C++, Java, Python, PHP Web Teknolojler: HTML5, CSS3, JavaScrpt Vertabanı: MySQL, SQL', '1777832898_WIN_20250731_15_18_53_Pro.jpg'),
(5, 'kübra şimşek', 'kubrasimsek10052004@gmail.com', '05313194004', 'lisans', 'yok', 'Programlama Dller: C, C++, Java, Python, PHP Web Teknolojler: HTML5, CSS3, JavaScrpt Vertabanı: MySQL, SQL', '1778067559_WIN_20250731_15_18_53_Pro.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
