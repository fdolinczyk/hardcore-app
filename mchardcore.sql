-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 23 Sty 2025, 19:08
-- Wersja serwera: 10.6.11-MariaDB-log
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mchardcore`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `panel`
--

CREATE TABLE `panel` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Zrzut danych tabeli `panel`
--

INSERT INTO `panel` (`id`, `username`, `email`, `message`) VALUES
(1, 'test', 'test@test.test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend, mauris ac suscipit blandit, lorem libero aliquam erat, ut aliquam purus orci non nisi. Aenean efficitur eros non libero gravida, sed facilisis mauris facilisis. Donec gravida ex vel elit dapibus, a vestibulum felis.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `panel`
--
ALTER TABLE `panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
