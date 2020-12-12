-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 12.Dec 2020, 20:05
-- Verzia serveru: 10.4.14-MariaDB
-- Verzia PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `futbal`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `meno` varchar(20) NOT NULL,
  `heslo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `hraci`
--

CREATE TABLE `hraci` (
  `idhraci` int(11) NOT NULL,
  `meno` varchar(45) NOT NULL,
  `priezvisko` varchar(45) NOT NULL,
  `cislo` int(11) NOT NULL,
  `img_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `hraci`
--

INSERT INTO `hraci` (`idhraci`, `meno`, `priezvisko`, `cislo`, `img_path`) VALUES
(1, 'Lucas', 'Pratto', 2, 'images/hraci/h1.jpg'),
(2, 'Rafael', 'Carioca', 3, 'images/hraci/h2.jpg'),
(3, 'Jesus', 'Datolo', 4, 'images/hraci/h3.jpg'),
(4, 'Leandro', 'Donizete', 5, 'images/hraci/h44.jpg'),
(5, 'Ronaldinho', 'Gaucho', 10, 'images/hraci/ron.jpg'),
(6, 'Neto', 'Berola', 6, 'images/hraci/h5.jpg'),
(7, 'Leonardo', 'Silva', 7, 'images/hraci/h66.jpg'),
(8, 'Diego', 'Tardelli', 8, 'images/hraci/h7.jpg'),
(9, 'Marcos', 'Rocha', 9, 'images/hraci/h88.jpg'),
(10, 'Dejan', 'Petkovic', 11, 'images/hraci/h9.jpg'),
(11, 'Leandro', 'Almeida', 12, 'images/hraci/h111.jpg'),
(12, 'Eder', 'Luis', 13, 'images/hraci/h1212.jpg'),
(13, 'Diego', 'Alves', 13, 'images/hraci/h14.jpg'),
(14, 'Juliano', 'Belletti', 14, 'images/hraci/h1515.jpg'),
(15, 'Alexandre', 'Gallo', 15, 'images/hraci/h1616.jpg'),
(16, 'Valmir', 'Bigode', 16, 'images/hraci/h18.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kategoria`
--

CREATE TABLE `kategoria` (
  `idkategoria` int(11) NOT NULL,
  `N_kategorie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `nazov` varchar(45) NOT NULL,
  `file_path` varchar(150) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`idmenu`, `nazov`, `file_path`, `logo`) VALUES
(1, 'DOMOV', 'index.php', ''),
(2, 'TÍM', 'timy.php', ''),
(3, 'SEZÓNA', 'sezona.php', ''),
(4, 'UDALOSTI', 'klub.php', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `score_tab`
--

CREATE TABLE `score_tab` (
  `id` int(4) NOT NULL,
  `pozicia` int(4) NOT NULL,
  `tym` varchar(40) NOT NULL,
  `tym_text` varchar(40) NOT NULL,
  `zapasy` int(4) NOT NULL,
  `vyhry` int(4) NOT NULL,
  `prehry` int(4) NOT NULL,
  `remizi` int(4) NOT NULL,
  `body` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `score_tab`
--

INSERT INTO `score_tab` (`id`, `pozicia`, `tym`, `tym_text`, `zapasy`, `vyhry`, `prehry`, `remizi`, `body`) VALUES
(1, 1, 'images/logo_teams/logo.png', 'Atletico Mineiro', 5, 5, 0, 0, 15),
(2, 2, 'images/logo_teams/internacional.png', 'Internacional', 21, 10, 5, 6, 36),
(3, 3, 'images/logo_teams/sao_paulo.png', 'Sao Paulo', 18, 10, 2, 6, 36),
(4, 4, 'images/logo_teams/Flamengo.png', 'Flamengo', 21, 10, 5, 6, 36),
(5, 5, 'images/logo_teams/Palmeiras.png', 'Palmeiras', 20, 9, 4, 7, 34),
(6, 6, 'images/logo_teams/santos.png', 'Santos', 21, 9, 7, 5, 34),
(7, 7, 'images/logo_teams/gremio.png', 'Gremio', 20, 8, 3, 9, 33),
(8, 8, 'images/logo_teams/bahia.jpg', 'Bahia', 20, 7, 9, 4, 25),
(9, 9, 'images/logo_teams/fortaleza.png', 'Fortaleza', 20, 6, 8, 6, 24),
(10, 10, 'images/logo_teams/coritiba.png', 'Coritiba', 20, 5, 10, 5, 20),
(11, 11, 'images/logo_teams/bragantino.jpg', 'Bragantino', 20, 4, 8, 8, 20),
(12, 12, 'images/logo_teams/Botafogo.png', 'Botafogo', 19, 3, 5, 11, 20),
(13, 13, 'images/logo_teams/goias.png', 'Goias', 19, 2, 11, 6, 12);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sponzory`
--

CREATE TABLE `sponzory` (
  `id` int(3) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `s9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `sponzory`
--

INSERT INTO `sponzory` (`id`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`) VALUES
(1, '', '', '', 'images/Sponzory/nike1.png', '', 'images/Sponzory/bio1.jpg', '', '', ''),
(2, '', '', 'images/Sponzory/marlenka1.png', '', 'images/Sponzory/mlp1.png', '', 'images/Sponzory/corgon1.png', '', ''),
(3, 'images/Sponzory/adidas1.png', '', 'images/Sponzory/barbie1.png', '', 'images/Sponzory/mcd1.png', '', 'images/Sponzory/JD1.png', '', 'images/Sponzory/WB1.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `team` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `players` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `username`, `team`, `email`, `password`, `players`) VALUES
(7, 'ANDI', 'Gumkaci', 'sdasd@dsa.com', 'sss', 4);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `hraci`
--
ALTER TABLE `hraci`
  ADD PRIMARY KEY (`idhraci`);

--
-- Indexy pre tabuľku `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`idkategoria`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexy pre tabuľku `score_tab`
--
ALTER TABLE `score_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `sponzory`
--
ALTER TABLE `sponzory`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `hraci`
--
ALTER TABLE `hraci`
  MODIFY `idhraci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pre tabuľku `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `idkategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `score_tab`
--
ALTER TABLE `score_tab`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `sponzory`
--
ALTER TABLE `sponzory`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
