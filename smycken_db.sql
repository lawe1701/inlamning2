-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 09 mars 2018 kl 09:35
-- Serverversion: 10.1.30-MariaDB
-- PHP-version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `smycken_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `kund`
--

CREATE TABLE `kund` (
  `Kund_ID` int(11) UNSIGNED NOT NULL,
  `Förnamn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Efternamn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Distrikt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Postnr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Telefonnummer` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `kund`
--

INSERT INTO `kund` (`Kund_ID`, `Förnamn`, `Efternamn`, `Adress`, `Distrikt`, `Postnr`, `Telefonnummer`, `mail`) VALUES
(23, '', '', '', '', '', '', ''),
(24, 'stefan', 'Jarl', 'ghrjd', 'erfghjgfk', '12356', '', ''),
(25, 'fredde', 'kruger', 'cvbjnlkm,', 'pwerdhgbdlö', '12345', '', ''),
(26, 'fredde', 'kruger', 'cvbjnlkm,', 'pwerdhgbdlö', '12345', '', ''),
(27, 'fredde', 'kruger', 'cvbjnlkm,', 'pwerdhgbdlö', '12345', '', 'fdgb@gdfhgj.ru'),
(28, 'lars', 'weingartner', 'serenadvägen 22', '131 40', 'Nacka', '', 'lars.weingartner@bredband.net'),
(29, 'lars', 'weingartner', 'serenadvägen 22', '131 40', 'Nacka', '', 'lars.weingartner@bredband.net'),
(30, 'lars', 'weingartner', 'serenadvägen 22', '131 40', 'Nacka', '', 'lars.weingartner@bredband.net'),
(31, 'lars', 'weingartner', 'serenadvägen 22', '131 40', 'Nacka', '', 'lars.weingartner@bredband.net'),
(32, 'Lars', 'Weingartner', 'serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(33, 'Lars', 'Weingartner', 'serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(34, 'Lars', 'Weingartner', 'serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(35, 'Lars', 'Weingartner', 'serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(36, 'Lars', 'Weingartner', 'serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(37, 'Lars', 'Weingartner', 'serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(38, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(39, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(40, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(41, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(42, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(43, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(44, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(45, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(46, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(47, 'Lars', 'Weingartner', 'Serenadvägen 22', 'Nacka', '13140', '0705184319', 'lars.weingartner@bredband.net'),
(48, 'Lisa', 'Karimi', 'Brunnsvägen 4', 'Gnesta', '26598', '0851510702', 'lisa.k.r@bredband.se'),
(49, 'Lisa', 'Karimi', 'Brunnsvägen 4', 'Gnesta', '26598', '0851510702', 'lisa.k.r@bredband.se'),
(50, 'Lisa', 'Karimi', 'Brunnsvägen 4', 'Gnesta', '26598', '0851510702', 'lisa.k.r@bredband.se'),
(51, 'Lisa', 'Karimi', 'Brunnsvägen 4', 'Gnesta', '26598', '0851510702', 'lisa.k.r@bredband.se'),
(52, 'Lisa', 'Karimi', 'Brunnsvägen 4', 'Gnesta', '26598', '0851510702', 'lisa.k.r@bredband.se'),
(53, 'lars', 'ewe', 'hgdf', '', '', '15612346', 'sdg@wehgg.se'),
(54, 'lars', 'ewe', 'hgdf', '', '', '15612346', 'sdg@wehgg.se'),
(55, 'hrjtr', 'etwyre', 'ghjkhtrjytku56', 'grhetjyrukyi.ul', '12345', '2345678', 'grhe@hghtjr.rg');

-- --------------------------------------------------------

--
-- Tabellstruktur `order`
--

CREATE TABLE `order` (
  `Kund_ID` int(8) UNSIGNED NOT NULL,
  `Order_ID` int(8) UNSIGNED NOT NULL,
  `Produkt_ID` int(8) NOT NULL,
  `OrderDatum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `order`
--

INSERT INTO `order` (`Kund_ID`, `Order_ID`, `Produkt_ID`, `OrderDatum`) VALUES
(41, 1, 78, '2018-03-07 06:32:29'),
(47, 13, 78, '2018-03-07 06:57:45'),
(48, 14, 84, '2018-03-07 07:00:32'),
(49, 15, 84, '2018-03-07 07:03:33'),
(50, 16, 84, '2018-03-07 07:04:47'),
(51, 17, 84, '2018-03-07 07:05:56'),
(52, 18, 84, '2018-03-07 07:06:22'),
(53, 19, 82, '2018-03-07 14:10:58'),
(54, 20, 82, '2018-03-07 14:11:27'),
(55, 21, 79, '2018-03-09 08:53:47');

-- --------------------------------------------------------

--
-- Tabellstruktur `produkt`
--

CREATE TABLE `produkt` (
  `Produkt_ID` int(8) UNSIGNED NOT NULL,
  `Pris` int(5) NOT NULL,
  `ProduktNamn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LagerStatus` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Leverantör` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Kortbeskrivning` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Bild` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `produkt`
--

INSERT INTO `produkt` (`Produkt_ID`, `Pris`, `ProduktNamn`, `LagerStatus`, `Leverantör`, `Kortbeskrivning`, `Bild`) VALUES
(78, 1300, 'Tvåfärgad herrtröja\r\n', 'I lager', 'DHL', 'Tvåfärgad rätstickad tröja med utanpåliggande sömmar.', 'M10004_600x600.jpg'),
(79, 1795, 'Herrtröja med rutmönster\r\n', 'I lager', 'Bring', 'Stickad, tunn herrtröja med stickat rutmönster.\r\n', 'M10003_600x600.jpg'),
(80, 1850, 'Dubbelstickad tröja herr\r\n', 'Ej i lag', 'Budforum AB', 'Dubbelstickad, tunn herrtröja i två färger från vårt eget märke \"Tansag\".\r\n', 'M10001_600x600.jpg'),
(81, 1430, 'Poncho/sjal/cape med ärmar\r\n', 'Ej i lag', 'United Parcel Service Sweden AB', 'Mångsidigt plagg av kashmir med ribbstickning. Sjalen är dubbelvikt med öppningar i kortsidornas överkanten för armarna.\r\n', 'F10022_600x600.jpg'),
(82, 1850, 'Långärmad polo\r\n', 'I lager', 'Best Transport AB', 'Långärmad polo-tröja med kort midja i tunt stickad kashmir. Tröjan är kabel- och ribbstickad med ribbstickad krage och muddar.\r\n', 'F10018_600x600.jpg'),
(83, 2750, 'Tröja med vid halsring\r\n', 'I lager', 'DHL', 'Kabel- och ribbstickad tröja av tunt stickad kashmir.\r\n', 'F10019_600x600.jpg'),
(84, 390, 'Agat', 'I lager', 'Budforum AB', 'Hängsmycke av agat med silverinfattning. Hänget är ungefär 4 cm brett och 6 cm långt.\r\n', '0051-agat-600x600.jpg'),
(85, 960, 'Halsband av svart agat', 'Ej i lag', 'Bring', 'Agathalsband med hänge 55 cm\r\n', '0031-Halsband-Agat-svart.jpg'),
(86, 490, 'Hänge av naturlig ametist\r\n', 'Ej i lag', 'United Parcel Service Sweden AB', 'Naturlig ametist 30×25 mm\r\n', '0048_600x600.jpg'),
(87, 290, 'Tand av tigeröga\r\n', 'I lager', 'Best Transport AB', 'Dolkformat tigeröga med ornamenterad metallinfattning.\r\n', '0043-tigeroga-600x600.jpg');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `kund`
--
ALTER TABLE `kund`
  ADD PRIMARY KEY (`Kund_ID`),
  ADD UNIQUE KEY `Kund_ID_2` (`Kund_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`);

--
-- Index för tabell `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Kund_ID` (`Kund_ID`),
  ADD KEY `Order_ID` (`Order_ID`);

--
-- Index för tabell `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`Produkt_ID`),
  ADD KEY `Produkt_ID` (`Produkt_ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `kund`
--
ALTER TABLE `kund`
  MODIFY `Kund_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT för tabell `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT för tabell `produkt`
--
ALTER TABLE `produkt`
  MODIFY `Produkt_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Kund_ID`) REFERENCES `kund` (`Kund_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
