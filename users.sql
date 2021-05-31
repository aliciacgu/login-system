-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 10:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `uidusers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pswUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `uidusers`, `emailUsers`, `pswUsers`) VALUES
(1, 'aliciacgu', 'aliciia_cg@hotmail.com', '$2y$10$T36X9OUhG91/BDTOeLXY1uK8aJjxEGyLzhPPimvtugvUP4AbAEHS.'),
(2, 'josamarro', 'jaaron.martin@outlook.com', '$2y$10$qVOxYsTBXf4giYrdLhnjLu3no9BmnoopSzC5yXyHZd2y5LISaELyy'),
(3, 'prueba1', 'correo1@hotmail.com', '$2y$10$.F8CHYeRLSxgK9UXtat3aeTdLtxcpMWW5rK4Qtgdn53/zQ5gdY3W6'),
(4, 'prueba2', 'correo2@live.com', '$2y$10$/Y8Sv.0VEIjnXa7LJUkik.Dda2skjWZHNAk4LWH4/nrUmN2EusYjq'),
(5, 'prueba3', 'correo3@gmail.com', '$2y$10$CBzveNSOUZ6YUKYyfM/zW.nm0iTvLQpPtf9yO77FTlBNga5aAaOp6'),
(6, 'prueba4', 'correo4@hola.mx', '$2y$10$.DpoH6jTyjmeaQy1.IjCYORVO74oNjMnDNZcYeY9vwdwQ2yyoGlm.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
