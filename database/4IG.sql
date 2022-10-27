-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Czas generowania: 21 Paź 2022, 16:32
-- Wersja serwera: 8.0.19
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4IG`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `exercises`
--

CREATE TABLE `exercises` (
  `ID` int NOT NULL,
  `CONTENT` text NOT NULL,
  `CORRECT_ANSW` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `exercises`
--

INSERT INTO `exercises` (`ID`, `CONTENT`, `CORRECT_ANSW`) VALUES
(1, 'sdf', 'dsf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `results`
--

CREATE TABLE `results` (
  `RESULT_ID` int NOT NULL,
  `EXERCISE_ID` int NOT NULL,
  `USER_ID` int NOT NULL,
  `grade` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `results`
--

INSERT INTO `results` (`RESULT_ID`, `EXERCISE_ID`, `USER_ID`, `grade`) VALUES
(1, 1, 4, 0),
(3, 1, 2, 0),
(4, 1, 1, 0),
(5, 1, 1, -1442609959),
(6, 1, 1, 5),
(7, 1, 1, 4),
(8, 1, 1, 12),
(9, 1, 1, 3),
(10, 1, 1, 6),
(11, 1, 1, 1),
(12, 1, 1, 2),
(13, 1, 1, 2),
(14, 1, 1, 2),
(15, 1, 1, 5),
(17, 1, 1, 3),
(18, 1, 1, 3),
(19, 1, 1, 4),
(20, 1, 1, 5),
(21, 1, 1, 6),
(22, 1, 1, 5),
(23, 1, 1, 5),
(24, 1, 1, 5),
(25, 1, 1, 5),
(26, 1, 1, 5),
(28, 1, 1, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `NAME` text NOT NULL,
  `SURNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Struktura tabeli dla tabeli `USERS_ANSWER`
--

CREATE TABLE `USERS_ANSWER` (
  `USER_ID` int NOT NULL,
  `USER_ANSWER` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `USERS_ANSWER`
--

INSERT INTO `USERS_ANSWER` (`USER_ID`, `USER_ANSWER`) VALUES
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `exercises`
--
ALTER TABLE `exercises`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `results`
--
ALTER TABLE `results`
  MODIFY `RESULT_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

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
