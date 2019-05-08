-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 24, 2019 alle 15:44
-- Versione del server: 10.1.37-MariaDB
-- Versione PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow6bets`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `premio` varchar(25) NOT NULL,
  `region` varchar(25) NOT NULL,
  `isDrawOK` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`id`, `nome`, `location`, `premio`, `region`, `isDrawOK`) VALUES
(1, 'ESL Pro League', 'Online', 'tbd', 'EU', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `partite`
--

CREATE TABLE `partite` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_team1` int(11) NOT NULL,
  `id_team2` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `result` varchar(15) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `odd_1` float NOT NULL,
  `odd_X` float NOT NULL,
  `odd_2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `partite`
--

INSERT INTO `partite` (`id`, `status`, `id_team1`, `id_team2`, `datetime`, `result`, `category_id`, `odd_1`, `odd_X`, `odd_2`) VALUES
(1, 0, 1, 2, '2019-03-25 00:00:00', NULL, 1, 2.35, 3, 2.5),
(2, 0, 2, 3, '2019-03-25 00:00:00', NULL, 1, 1.85, 3.15, 2.9);

-- --------------------------------------------------------

--
-- Struttura della tabella `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `team_id` int(11) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `players`
--

INSERT INTO `players` (`id`, `nickname`, `team_id`, `realname`, `role`) VALUES
(1, 'Pengu', 1, 'Niclas', ''),
(2, 'Kanto', 1, 'Juhani', ''),
(3, 'SirBoss', 2, 'tbd', ''),
(4, 'Revan', 2, 'tbd', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `scommesse`
--

CREATE TABLE `scommesse` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `importo` int(11) NOT NULL,
  `quotaTotale` float NOT NULL,
  `id_incontro` int(11) NOT NULL,
  `esito` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `coach` varchar(25) NOT NULL,
  `logo` text NOT NULL,
  `nation` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `teams`
--

INSERT INTO `teams` (`id`, `nome`, `coach`, `logo`, `nation`) VALUES
(1, 'G2 Esports', 'ShaoUdas', '', 'GER'),
(2, 'PENTA Sports', 'tbd', '', 'EU'),
(3, 'Mockit', 'tbd', '', 'EU');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `cognome` varchar(25) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `privilegeLevel` int(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `cognome`, `nome`, `privilegeLevel`, `email`, `username`, `password`, `money`) VALUES
(1, 'Rizza', 'Giovanni', 3, 'eltarsilence@gmail.com', 'eltarsilence', 'gg1234', 1000);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `partite`
--
ALTER TABLE `partite`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `scommesse`
--
ALTER TABLE `scommesse`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `partite`
--
ALTER TABLE `partite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `scommesse`
--
ALTER TABLE `scommesse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
