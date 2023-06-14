-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2023, 02:07
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
-- Baza danych: `dzbanyv2dbpw`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzbany`
--

CREATE TABLE `dzbany` (
  `id` int(10) UNSIGNED NOT NULL,
  `idKategorii` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `obrazek` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `pojemnosc` int(11) NOT NULL,
  `wysokosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dzbany`
--

INSERT INTO `dzbany` (`id`, `idKategorii`, `nazwa`, `obrazek`, `opis`, `pojemnosc`, `wysokosc`) VALUES
(1, 1, 'DzbanekChaber', 'dzbanPORCELANA.jpg', 'Biały dzban z niebieskimi kwiatkami.', 50, 30),
(2, 2, 'DzbanekGlina', 'dzbanGLINA.jpg', 'Gliniany dzbanek, zwykły z gliny.', 100, 120),
(3, 2, 'Mateusz', 'dzbanMATEUSZ.jpg', 'Pusty, mały, gliniany, zwykły dzbanek.', 10, 160),
(11, 1, 'Maciek', 'maciek.jpeg', 'Dzbanek.', 0, 190);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `Id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`Id`, `nazwa`, `opis`) VALUES
(1, 'Porcelana', 'Rodzaj białej, przeświecającej ceramiki wysokiej jakości, wynaleziony w Chinach w VII wieku.'),
(2, 'Glina', 'Ilasta skała osadowa, powstała najczęściej w okresie czwartorzędu w wyniku nagromadzenia osadów morenowych.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recenzje`
--

CREATE TABLE `recenzje` (
  `id` int(10) UNSIGNED NOT NULL,
  `idDzbana` int(10) UNSIGNED NOT NULL,
  `nick` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `ocena` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `recenzje`
--

INSERT INTO `recenzje` (`id`, `idDzbana`, `nick`, `ocena`, `tresc`, `data`) VALUES
(1, 1, 'user123', 5, 'Ładny dzbanek, pojemny, miły oku.', '2023-05-31 15:48:36'),
(2, 2, 'WscieklaAnakonda17', 3, 'Brzydki, gliniany taki zwykły.', '2023-05-31 15:48:59'),
(3, 3, 'paulina1', 1, 'Agresywny, arogancki, egoistyczny, chamski, ztupeciały, bezczelny, antywrażliwy, z zaburzeniami wszystkimi, mało elokwentny, obłudny, kłamca, asekurantny, giga egoooooooo toooooooop, nie umie się bić, frajer, 04, baba.', '2023-05-31 15:49:20'),
(4, 1, 'paulina1', 5, 'Bardzo ładny. Podoba mi się. 10/10', '2023-05-31 15:50:28'),
(5, 2, 'NiebieskaAntylopa67', 4, 'Może być, ale widziałem lepsze. Pęka po jednym użyciu.', '2023-05-31 15:51:47'),
(6, 3, 'SnieznaKoala123', 3, 'Dziwny troche ale ogolnie ok.', '2023-05-31 17:53:54'),
(8, 11, 'Paulina123', 5, '5/5', '2023-05-31 21:40:01'),
(10, 1, '123', 5, 'Bardzo ładny!', '2023-06-13 22:05:07'),
(11, 2, '123', 3, 'Średni wyglad.', '2023-06-13 23:50:23'),
(12, 3, '123', 1, 'Cham,prostak.', '2023-06-13 23:50:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `rola` varchar(50) COLLATE utf8_polish_ci NOT NULL DEFAULT 'user',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `rola`, `data`) VALUES
(3, 'paulwo', '202cb962ac59075b964b07152d234b70', '123.com', 'user', '2023-06-13 19:58:36'),
(4, '123', '202cb962ac59075b964b07152d234b70', '123', 'user', '2023-06-13 20:04:19');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzbany`
--
ALTER TABLE `dzbany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKategorii` (`idKategorii`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDzbana` (`idDzbana`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzbany`
--
ALTER TABLE `dzbany`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dzbany`
--
ALTER TABLE `dzbany`
  ADD CONSTRAINT `dzbany_ibfk_1` FOREIGN KEY (`idKategorii`) REFERENCES `kategorie` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD CONSTRAINT `recenzje_ibfk_1` FOREIGN KEY (`idDzbana`) REFERENCES `dzbany` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
