-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 20 apr 2021 om 12:01
-- Serverversie: 5.7.26
-- PHP-versie: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(30) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(4, 'SUSHI'),
(5, 'OYSTERS'),
(6, 'SASHIMI'),
(7, 'EGGS AND SANDWICHES'),
(8, 'MARINA PLATEAUS'),
(9, 'STARTERS'),
(10, 'MEAT'),
(11, 'SALADS'),
(12, 'VEGETARIAN'),
(13, 'FISH'),
(14, 'KIDS'),
(15, 'DRANKEN'),
(16, 'SIDE');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(1, 4, 'crispy aspargus roll', 16, './img/asparagus-rolls.jpg'),
(2, 5, 'seasonal oyster', 0, './img/seasonall_oyster.jpg'),
(3, 4, 'spicy tuna roll', 17, './img/spicy_tunaroll.jpg'),
(4, 4, 'salmon flame roll', 18, './img/SalmonFlameRoll.png'),
(5, 4, 'unagi dragon roll', 19, './img/dragon-sushi.jpg'),
(6, 4, 'rainbow roll', 19, './img/rainbowroll.jpg'),
(7, 4, 'cruncy prawn roll', 18, './img/crunchprawnroll.jpg'),
(8, 4, 'calafornia roll', 20, './img/californiaroll.png'),
(9, 5, 'creuse de zelande nr.3', 24, './img/creusedezelande.jpeg'),
(10, 5, 'fines de claires nr.3 ', 24, './img/finesdeclaires.png'),
(11, 5, 'plateau les huitres', 27, './img/plateau-d-huitres.jpg'),
(12, 5, 'oysters rockfeller', 15, './img/oystersrockfeller.jpeg'),
(13, 5, 'asian style steamed oysters', 15, './img/asianstylesteamedoysters.jpg'),
(14, 6, 'Sashimi salmon(6pcs)', 17, './img/Sashimisalmon.png'),
(15, 6, 'Sashimi selection', 20, './img/Sashimi.jpg'),
(16, 6, 'XL sashimi(18 pcs)', 39, './img/9133.jpg'),
(17, 7, 'Avocado toast ', 39, './img/Ei-avocado-toast.jpg'),
(18, 9, 'Pizza tuna', 16, './img/tuna_pizza.jpg'),
(19, 9, 'Carpaccio octopus', 17, './img/octopus_carpaccio_post.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchaseid` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL,
  PRIMARY KEY (`purchaseid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`) VALUES
(8, 'Neovic', 600, '2017-12-06 15:29:00'),
(9, 'demo', 450, '2018-10-09 20:19:43');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `purchase_detail`
--

DROP TABLE IF EXISTS `purchase_detail`;
CREATE TABLE IF NOT EXISTS `purchase_detail` (
  `pdid` int(11) NOT NULL AUTO_INCREMENT,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`pdid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(13, 8, 15, 2),
(14, 8, 17, 2),
(15, 8, 18, 2),
(16, 9, 15, 3),
(17, 0, 22, 2),
(18, 0, 22, 2),
(19, 0, 15, 1),
(20, 0, 15, 1),
(21, 0, 15, 1),
(22, 0, 1, 1),
(23, 0, 1, 1),
(24, 0, 1, 1),
(25, 0, 8, 1),
(26, 0, 8, 1),
(27, 0, 8, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
