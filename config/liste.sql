-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 05. Mrz 2021 um 11:10
-- Server-Version: 5.5.62-MariaDB
-- PHP-Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `crud`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `liste`
--

CREATE TABLE `liste` (
  `id` int(11) NOT NULL,
  `artists` varchar(50) NOT NULL,
  `art` varchar(10) NOT NULL,
  `title_eng` varchar(255) NOT NULL,
  `title_de` varchar(255) NOT NULL,
  `sites` int(11) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `translated` tinyint(1) NOT NULL,
  `editing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `liste`
--

INSERT INTO `liste` (`id`, `artists`, `art`, `title_eng`, `title_de`, `sites`, `complete`, `translated`, `editing`) VALUES
(1, 'Marvel', 'Comic', 'Amazing Spider-Man: The Gauntlet', 'Amazing Spider-Man: Der Panzerhandschuh', 100, 1, 1, 0),
(2, 'Marvel', 'Comic', 'A Moment of Silence', 'Ein Moment der Stille', 44, 1, 1, 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `liste`
--
ALTER TABLE `liste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
