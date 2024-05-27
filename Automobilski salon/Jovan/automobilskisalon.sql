-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 06:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobilskisalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `dileri`
--

CREATE TABLE `dileri` (
  `id` int(255) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dileri`
--

INSERT INTO `dileri` (`id`, `ime`, `prezime`, `email`, `password`) VALUES
(1, 'Jovan', 'Vasiljevic', 'jovan@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `modeli`
--

CREATE TABLE `modeli` (
  `ModelID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `ProizvodjacID` int(11) DEFAULT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modeli`
--

INSERT INTO `modeli` (`ModelID`, `Ime`, `ProizvodjacID`, `slika`) VALUES
(1, 'Corolla', 1, 'corolla.jpeg'),
(2, 'Civic', 2, 'civic.jpg'),
(3, 'Altima', 3, 'altima.jpg'),
(4, 'Mazda3', 4, 'mazda.jpeg'),
(5, 'Swift', 5, 'swift.jpg'),
(6, 'Camry', 1, 'camry.jpg'),
(7, 'Accord', 2, 'accord.jpg'),
(8, 'Sentra', 3, 'sentra.jpg'),
(9, 'CX-5', 4, 'cx5.jpg'),
(10, 'Vitara', 5, 'vitara.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjaci`
--

CREATE TABLE `proizvodjaci` (
  `ProizvodjacID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvodjaci`
--

INSERT INTO `proizvodjaci` (`ProizvodjacID`, `Ime`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(3, 'Nissan'),
(4, 'Mazda'),
(5, 'Suzuki');

-- --------------------------------------------------------

--
-- Table structure for table `testvozila`
--

CREATE TABLE `testvozila` (
  `TestVoziloID` int(11) NOT NULL,
  `VoziloID` int(11) DEFAULT NULL,
  `ModelID` int(255) NOT NULL,
  `TestDatum` date NOT NULL,
  `Komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testvozila`
--

INSERT INTO `testvozila` (`TestVoziloID`, `VoziloID`, `ModelID`, `TestDatum`, `Komentar`) VALUES
(1, 1, 1, '2024-01-15', 'Odlična vožnja, vrlo udobno.'),
(2, 2, 2, '2024-01-18', 'Dobar osećaj tokom vožnje, odličan za grad.'),
(3, 3, 3, '2024-02-01', 'Snažan motor, ali malo bučan.'),
(4, 4, 4, '2024-02-10', 'Elegantno i udobno, ali malo skupo.'),
(5, 5, 5, '2024-03-05', 'Vrlo ekonomično i praktično vozilo.'),
(6, 6, 6, '2024-03-10', 'Prostrano, odlično za duže vožnje.'),
(7, 7, 7, '2024-03-15', 'Vrlo pouzdano, ali cena je visoka.'),
(8, 8, 8, '2024-04-01', 'Dobar automobil za svakodnevnu upotrebu.'),
(9, 9, 9, '2024-04-05', 'Odličan dizajn, malo teže upravljiv.'),
(10, 10, 10, '2024-04-15', 'Mali automobil, ali vrlo agilan.');

-- --------------------------------------------------------

--
-- Table structure for table `vozila`
--

CREATE TABLE `vozila` (
  `VoziloID` int(11) NOT NULL,
  `ModelID` int(11) DEFAULT NULL,
  `Cena` decimal(10,2) NOT NULL,
  `Godina` int(11) NOT NULL,
  `Boja` varchar(50) NOT NULL,
  `Dostupnost` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vozila`
--

INSERT INTO `vozila` (`VoziloID`, `ModelID`, `Cena`, `Godina`, `Boja`, `Dostupnost`) VALUES
(1, 1, 20000.00, 2022, 'Bela', 1),
(2, 2, 22000.00, 2022, 'Crna', 1),
(3, 3, 25000.00, 2023, 'Plava', 0),
(4, 4, 23000.00, 2021, 'Siva', 1),
(5, 5, 18000.00, 2023, 'Crvena', 1),
(6, 6, 27000.00, 2023, 'Bela', 0),
(7, 7, 30000.00, 2022, 'Crna', 1),
(8, 8, 24000.00, 2021, 'Plava', 1),
(9, 9, 28000.00, 2023, 'Siva', 0),
(10, 10, 19000.00, 2022, 'Crvena', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modeli`
--
ALTER TABLE `modeli`
  ADD PRIMARY KEY (`ModelID`),
  ADD KEY `ProizvodjacID` (`ProizvodjacID`);

--
-- Indexes for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  ADD PRIMARY KEY (`ProizvodjacID`);

--
-- Indexes for table `testvozila`
--
ALTER TABLE `testvozila`
  ADD PRIMARY KEY (`TestVoziloID`),
  ADD KEY `VoziloID` (`VoziloID`);

--
-- Indexes for table `vozila`
--
ALTER TABLE `vozila`
  ADD PRIMARY KEY (`VoziloID`),
  ADD KEY `ModelID` (`ModelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modeli`
--
ALTER TABLE `modeli`
  MODIFY `ModelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  MODIFY `ProizvodjacID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testvozila`
--
ALTER TABLE `testvozila`
  MODIFY `TestVoziloID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vozila`
--
ALTER TABLE `vozila`
  MODIFY `VoziloID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `modeli`
--
ALTER TABLE `modeli`
  ADD CONSTRAINT `modeli_ibfk_1` FOREIGN KEY (`ProizvodjacID`) REFERENCES `proizvodjaci` (`ProizvodjacID`);

--
-- Constraints for table `testvozila`
--
ALTER TABLE `testvozila`
  ADD CONSTRAINT `testvozila_ibfk_1` FOREIGN KEY (`VoziloID`) REFERENCES `vozila` (`VoziloID`);

--
-- Constraints for table `vozila`
--
ALTER TABLE `vozila`
  ADD CONSTRAINT `vozila_ibfk_1` FOREIGN KEY (`ModelID`) REFERENCES `modeli` (`ModelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
