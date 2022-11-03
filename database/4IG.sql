-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lis 2022, 12:04
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4ig`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `exercises`
--

CREATE TABLE `exercises` (
  `ID` int(11) NOT NULL,
  `CONTENT` text NOT NULL,
  `CORRECT_ANSW` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `exercises`
--

INSERT INTO `exercises` (`ID`, `CONTENT`, `CORRECT_ANSW`) VALUES
(1, 'sdf', 'dsf'),
(2, 'DODAJ UŻYTKOWNIKA DO BAZY DANYCH', 'ADD USER');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `last_user`
--

CREATE TABLE `last_user` (
  `userID` int(11) NOT NULL,
  `exerciseID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `last_user`
--

INSERT INTO `last_user` (`userID`, `exerciseID`, `ID`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `results`
--

CREATE TABLE `results` (
  `RESULT_ID` int(11) NOT NULL,
  `EXERCISE_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `results`
--

INSERT INTO `results` (`RESULT_ID`, `EXERCISE_ID`, `USER_ID`, `grade`) VALUES
(33, 2, 2, 1),
(34, 2, 2, 1),
(35, 2, 2, 1),
(36, 2, 2, 1),
(37, 2, 2, 1),
(38, 2, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `SURNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `NAME`, `SURNAME`) VALUES
(1, 'Michał', 'Rojna'),
(2, 'Mateusz', 'Jarowicz'),
(3, 'Mateusz', 'Czarnecki'),
(4, 'Daniel', 'Atanasov');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_answer`
--

CREATE TABLE `users_answer` (
  `USER_ID` int(11) NOT NULL,
  `USER_ANSWER` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users_answer`
--

INSERT INTO `users_answer` (`USER_ID`, `USER_ANSWER`) VALUES
(1, 'fsefsefse'),
(1, 'test'),
(2, 'testowa odpowiedź'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'testowa'),
(1, 'test'),
(1, 'test'),
(1, 'test'),
(1, 'przykładowa odpowiedź');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CORRECT_ANSW` (`CORRECT_ANSW`(768)) USING BTREE;

--
-- Indeksy dla tabeli `last_user`
--
ALTER TABLE `last_user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `exerciseID` (`exerciseID`);

--
-- Indeksy dla tabeli `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`RESULT_ID`),
  ADD KEY `results_ibfk_1` (`USER_ID`),
  ADD KEY `results_ibfk_2` (`EXERCISE_ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `exercises`
--
ALTER TABLE `exercises`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `last_user`
--
ALTER TABLE `last_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `results`
--
ALTER TABLE `results`
  MODIFY `RESULT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `last_user`
--
ALTER TABLE `last_user`
  ADD CONSTRAINT `last_user_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `last_user_ibfk_2` FOREIGN KEY (`exerciseID`) REFERENCES `exercises` (`ID`);

--
-- Ograniczenia dla tabeli `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`EXERCISE_ID`) REFERENCES `exercises` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
