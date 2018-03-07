-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 28 feb 2018 kl 15:19
-- Serverversion: 5.6.34-log
-- PHP-version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `laptops`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `adress`
--

CREATE TABLE `adress` (
  `Kund_ID` int(11) NOT NULL,
  `Adress_ID` int(8) UNSIGNED NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Distrikt` varchar(50) NOT NULL,
  `Postnr` varchar(5) NOT NULL,
  `Telefonnummer` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `kund_lev`
--

CREATE TABLE `kund_lev` (
  `Kund_ID` int(11) UNSIGNED NOT NULL,
  `Kund` tinyint(1) NOT NULL,
  `Leverantör` tinyint(1) NOT NULL,
  `Förnamn` varchar(20) NOT NULL,
  `Efternamn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `mail`
--

CREATE TABLE `mail` (
  `Kund_ID` int(11) NOT NULL,
  `Meddelande_ID` int(8) UNSIGNED NOT NULL,
  `Avsändare` int(11) NOT NULL,
  `Ämne` varchar(255) NOT NULL,
  `Kropp` text NOT NULL,
  `Skickat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `order`
--

CREATE TABLE `order` (
  `Order_ID` int(8) NOT NULL,
  `Kund_ID` int(8) NOT NULL,
  `OrderDatum` datetime(6) NOT NULL,
  `Leveransadress` varchar(30) NOT NULL,
  `Leveransort` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `produkt`
--

CREATE TABLE `produkt` (
  `Kund_ID` int(11) NOT NULL,
  `Produkt_ID` int(8) UNSIGNED NOT NULL,
  `Pris` int(5) NOT NULL,
  `ProduktNamn` varchar(50) NOT NULL,
  `LagerStatus` varchar(8) NOT NULL,
  `Leverantör` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `telefon`
--

CREATE TABLE `telefon` (
  `Kund_ID` int(11) NOT NULL,
  `Telefonnummer_ID` int(8) UNSIGNED NOT NULL,
  `TelefonnummerPrivat` varchar(11) NOT NULL,
  `TelefonnummerArbete` varchar(11) NOT NULL,
  `TelefonnummerFöretag` varchar(11) NOT NULL,
  `MobilTelefonnummer` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`Adress_ID`),
  ADD UNIQUE KEY `Adress_ID` (`Adress_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`);

--
-- Index för tabell `kund_lev`
--
ALTER TABLE `kund_lev`
  ADD PRIMARY KEY (`Kund_ID`),
  ADD UNIQUE KEY `Kund_ID_2` (`Kund_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`);

--
-- Index för tabell `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`Meddelande_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`);

--
-- Index för tabell `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`),
  ADD KEY `ID` (`Kund_ID`);

--
-- Index för tabell `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`Produkt_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`);

--
-- Index för tabell `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`Telefonnummer_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`);

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Kund_ID`) REFERENCES `order` (`Order_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
