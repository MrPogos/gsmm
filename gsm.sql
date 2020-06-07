-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Cze 2020, 15:32
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gsm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `część`
--

CREATE TABLE `część` (
  `id` int(11) NOT NULL,
  `Typ` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `część`
--

INSERT INTO `część` (`id`, `Typ`) VALUES
(1, 'Wyświetlacz'),
(2, 'klapka'),
(3, 'szkło'),
(4, 'OKA'),
(5, 'bateria');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `Imie` varchar(255) DEFAULT NULL,
  `Nazwisko` varchar(255) DEFAULT NULL,
  `NR_telefonu` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magazyn_czesci`
--

CREATE TABLE `magazyn_czesci` (
  `id` int(11) NOT NULL,
  `ID_model` int(11) NOT NULL,
  `ID_TYP` int(11) NOT NULL,
  `ID_część` int(11) NOT NULL,
  `uszkodzony` tinyint(1) NOT NULL,
  `pobrany` tinyint(1) NOT NULL,
  `cena` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `magazyn_czesci`
--

INSERT INTO `magazyn_czesci` (`id`, `ID_model`, `ID_TYP`, `ID_część`, `uszkodzony`, `pobrany`, `cena`) VALUES
(1, 1, 1, 3, 0, 0, '40.00'),
(2, 4, 2, 5, 0, 0, '50.00'),
(3, 9, 1, 2, 0, 0, '100.00'),
(4, 2, 2, 2, 0, 1, '50.00'),
(5, 4, 4, 5, 0, 0, '20.00'),
(6, 4, 4, 3, 0, 0, '15.00'),
(7, 7, 1, 1, 0, 0, '200.00'),
(8, 7, 4, 1, 1, 1, '50.00'),
(9, 6, 4, 2, 0, 0, '150.00'),
(10, 3, 1, 5, 0, 0, '150.00'),
(11, 4, 3, 1, 0, 0, '500.00'),
(12, 1, 1, 2, 0, 0, '300.00'),
(13, 3, 4, 3, 0, 0, '30.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magazyn_zasobów`
--

CREATE TABLE `magazyn_zasobów` (
  `id` int(11) NOT NULL,
  `id_model` int(11) NOT NULL,
  `cena` decimal(3,2) NOT NULL,
  `ilość` int(11) NOT NULL,
  `id_część` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `Producent` int(11) NOT NULL,
  `Nazwa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `model`
--

INSERT INTO `model` (`id`, `Producent`, `Nazwa`) VALUES
(1, 1, 'S8'),
(2, 1, 'A40'),
(3, 1, 'Note 10 Plus'),
(4, 1, 'Note 10'),
(5, 1, 'Note 10 Lite'),
(6, 1, 'S10e'),
(7, 1, 'A50'),
(8, 1, 'A9 (2018)'),
(9, 1, 'Note 9');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `naprawa`
--

CREATE TABLE `naprawa` (
  `id` int(11) NOT NULL,
  `id_pracownik` int(11) DEFAULT NULL,
  `id_kl` int(11) NOT NULL,
  `id_model` int(11) NOT NULL,
  `nr_imei` varchar(15) DEFAULT NULL,
  `usterka` varchar(255) NOT NULL,
  `diagnoza` varchar(255) DEFAULT NULL,
  `cena` decimal(5,2) DEFAULT NULL,
  `przyjęty` tinyint(1) NOT NULL,
  `rozpoczęta` tinyint(1) NOT NULL,
  `zakończona` tinyint(1) NOT NULL,
  `data_przyjęcia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `id` int(255) NOT NULL,
  `Imie` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Aktywny` int(1) NOT NULL DEFAULT 1,
  `test` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`id`, `Imie`, `Nazwisko`, `Aktywny`, `test`) VALUES
(32, 'Janusz', 'Pogorzelski', 1, 1),
(33, 'asda', 'Myślicki ', 1, 0),
(34, 'Waldemar', 'Pogorzelskiasda', 1, 0),
(35, 'wwwwwwwwwwsssss', 'asdasda', 1, 0),
(36, 'Waldemar', 'asdasd', 1, 1),
(41, 'asdasdasdas', 'Pogorzelski', 1, 1),
(42, 'hfghfgh', 'fghfghfg', 1, 0),
(43, 'thfghfgh', 'fdfgdddd', 1, 0),
(44, 'qwedtghxcvbxcvb', 'xsdfgsdfsdfs', 1, 1),
(45, 'tyertyertert', 'ertertertert', 1, 0),
(46, 'ertertertertert', 'ertertertertert', 1, 0),
(47, 'ASdasd', 'asdasd', 1, 0),
(48, 'ppppp', 'iiiii', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producent`
--

CREATE TABLE `producent` (
  `id` int(11) NOT NULL,
  `Producent` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `producent`
--

INSERT INTO `producent` (`id`, `Producent`) VALUES
(1, 'Samsung'),
(2, 'Vivo'),
(3, 'Asus'),
(4, 'Acer'),
(5, 'Apple'),
(6, 'LG'),
(7, 'Sony'),
(8, 'Huawei'),
(9, 'Lenovo'),
(10, 'Nokia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `regeneracaj`
--

CREATE TABLE `regeneracaj` (
  `id` int(11) NOT NULL,
  `id_pracownik` int(11) NOT NULL,
  `id_modelu` int(11) NOT NULL,
  `cena_naprawy` int(11) DEFAULT NULL,
  `cena_ponaprawie` int(11) DEFAULT NULL,
  `udana` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spis_materialow`
--

CREATE TABLE `spis_materialow` (
  `id_naprawy` int(11) NOT NULL,
  `id_magazynu` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `data_pobrania` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typ`
--

CREATE TABLE `typ` (
  `id` int(11) NOT NULL,
  `nazwa_typu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `typ`
--

INSERT INTO `typ` (`id`, `nazwa_typu`) VALUES
(1, 'nowy oryginalny'),
(2, 'nowy zamiennik'),
(3, 'regenerowany'),
(4, 'używany');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `część`
--
ALTER TABLE `część`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `magazyn_czesci`
--
ALTER TABLE `magazyn_czesci`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_model` (`ID_model`),
  ADD KEY `ID_TYP` (`ID_TYP`),
  ADD KEY `ID_część` (`ID_część`);

--
-- Indeksy dla tabeli `magazyn_zasobów`
--
ALTER TABLE `magazyn_zasobów`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `naprawa`
--
ALTER TABLE `naprawa`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `producent`
--
ALTER TABLE `producent`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `regeneracaj`
--
ALTER TABLE `regeneracaj`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `typ`
--
ALTER TABLE `typ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `część`
--
ALTER TABLE `część`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `magazyn_czesci`
--
ALTER TABLE `magazyn_czesci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `magazyn_zasobów`
--
ALTER TABLE `magazyn_zasobów`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `naprawa`
--
ALTER TABLE `naprawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT dla tabeli `producent`
--
ALTER TABLE `producent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `regeneracaj`
--
ALTER TABLE `regeneracaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `typ`
--
ALTER TABLE `typ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `magazyn_czesci`
--
ALTER TABLE `magazyn_czesci`
  ADD CONSTRAINT `magazyn_czesci_ibfk_1` FOREIGN KEY (`ID_część`) REFERENCES `część` (`id`),
  ADD CONSTRAINT `magazyn_czesci_ibfk_2` FOREIGN KEY (`ID_model`) REFERENCES `model` (`id`),
  ADD CONSTRAINT `magazyn_czesci_ibfk_3` FOREIGN KEY (`ID_TYP`) REFERENCES `typ` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
