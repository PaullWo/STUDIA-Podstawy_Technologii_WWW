-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Cze 2023, 00:43
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dzbanyzad8`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzbany`
--

CREATE TABLE `dzbany` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `pojemnosc` int(11) NOT NULL,
  `wysokosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dzbany`
--

INSERT INTO `dzbany` (`id`, `nazwa`, `opis`, `pojemnosc`, `wysokosc`) VALUES
(1, 'Gliniak', 'Najwyższej jakości wyrób gliniany wytwarzany w Polsce przez rzemieślników z kilkupokoleniową tradycją garncarską.', 50, 30),
(2, 'Mateusz', 'Prosty, chamski dzban.', 0, 169),
(3, 'Słoik', 'Prawie jak szklany dzban.', 10, 20),
(4, 'Dzban', 'Wielki, tradycyjny dzbanek.', 100, 150);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzbany`
--
ALTER TABLE `dzbany`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzbany`
--
ALTER TABLE `dzbany`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
