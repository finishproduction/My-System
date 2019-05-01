-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2019 at 03:51 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewanmakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadual1`
--

CREATE TABLE `jadual1` (
  `Masa` varchar(50) NOT NULL,
  `ISNIN` varchar(100) NOT NULL,
  `SELASA` varchar(100) NOT NULL,
  `RABU` varchar(100) NOT NULL,
  `KHAMIS` varchar(100) NOT NULL,
  `JUMAAT` varchar(100) NOT NULL,
  `SABTU` varchar(100) NOT NULL,
  `AHAD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadual1`
--

INSERT INTO `jadual1` (`Masa`, `ISNIN`, `SELASA`, `RABU`, `KHAMIS`, `JUMAAT`, `SABTU`, `AHAD`) VALUES
('Makan Malam', 'Nasi Tomato + Ayam goreng rempah + Dalca', 'Nasi ikan kembung goreng tepung', 'Chicken Chop', 'Nasi +Tenggiri goreng masak kicap', 'Nasi + Daging masak kicap + Kangkung goreng', 'Nasi + Sup ayam', 'Nasi + Ayam masak halia'),
('Minum Malam', 'Mini Pizza', 'Sandwich Sardin', 'Makaroni goreng', 'Roti pau / benggali + kari ayam', 'Benjo', 'Benjo', 'Roti canai'),
('Sarapan', 'Bihun soto + Sambal kicap', 'Nasi goreng kampung', 'Bijirin', 'Roti bijirin + Telur hancur', 'Spaghetti goreng', 'Nasi impit + Rendang daging + Kuah kacang', 'Mee goreng'),
('Tengah Hari', 'Nasi ikan tenggiri asam Pedas + Sambal Goreng Jawa', 'Nasi daging blackpaper + tahu goreng berlada', 'Nasi + ikan selar goreng + sotong goreng kunyit + labu masak lemak', 'Nasi Ayam', 'Nasi + ikan bawal goreng + tomyam campur', 'Nasi + ikan merah masak kari + telur dadar', 'Nasi + sotong goreng kunyit');

-- --------------------------------------------------------

--
-- Table structure for table `jadual2`
--

CREATE TABLE `jadual2` (
  `Masa` varchar(50) NOT NULL,
  `ISNIN` varchar(100) NOT NULL,
  `SELASA` varchar(100) NOT NULL,
  `RABU` varchar(100) NOT NULL,
  `KHAMIS` varchar(100) NOT NULL,
  `JUMAAT` varchar(100) NOT NULL,
  `SABTU` varchar(100) NOT NULL,
  `AHAD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadual2`
--

INSERT INTO `jadual2` (`Masa`, `ISNIN`, `SELASA`, `RABU`, `KHAMIS`, `JUMAAT`, `SABTU`, `AHAD`) VALUES
('Makan Malam', 'Nasi + Ayam goreng berempah + Sambal belacan', 'Nasi + Ikan tenggiri masak kari', 'Nasi + Ikan siakap tiga rasa', 'Nasi + Ayam masak kicap', 'Nasi + sup ikan merah + Kailan goreng belacan', 'Nasi + Ayam goren masak merah', 'Nasi + Udang goreng kunyit'),
('Minum Malam', 'Sandwich sardin', 'Mee hailam', 'Pau kacang merah + Air soya', 'Roti bun + Sup ayam', 'Roti + Bubur jagung', 'Bihun soto', 'Sup cendawan berkirim'),
('Sarapan', 'Nasi goreng cina + Telur mata', 'Roti telur hancur', 'Roti canai', 'Bihu goreng Singapore', 'Makaroni goreng', 'Nasi goreng kampung', 'Nasi lemak'),
('Tengah Hari', 'Nasi + Bawal taucu + Sambal goreng jawa', 'Nasi + Sup daging + Sotong goreng kunyit', 'Nasi + Rendang daging + Telur dadar', 'Nasi + Daging paprik + Sotong goreng bercili', 'Nasi briyani + Ayam goreng', 'Nasi + Udang sweet sour', 'Nasi + Rendang daging + Telur dadar + Cendawan tumis');

-- --------------------------------------------------------

--
-- Table structure for table `jadual3`
--

CREATE TABLE `jadual3` (
  `Masa` varchar(50) NOT NULL,
  `ISNIN` varchar(100) NOT NULL,
  `SELASA` varchar(100) NOT NULL,
  `RABU` varchar(100) NOT NULL,
  `KHAMIS` varchar(100) NOT NULL,
  `JUMAAT` varchar(100) NOT NULL,
  `SABTU` varchar(100) NOT NULL,
  `AHAD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadual3`
--

INSERT INTO `jadual3` (`Masa`, `ISNIN`, `SELASA`, `RABU`, `KHAMIS`, `JUMAAT`, `SABTU`, `AHAD`) VALUES
('Makan Malam', 'Nasi + Ikan tenggiri goreng kicap', 'Nasi + Ikan tenggiri masak lemak cili api', 'Fish fillet', 'Nasi ayam', 'Nasi + Ikan keli goreng berlada + labu masak lemak', 'Nasi + Ayam masak kari', 'Nasi goreng + Ayam goreng'),
('Minum Malam', 'Bubur chacha + Biskut cream creaker', 'Benjo', 'Mini Pizza', 'Mushroom soup', 'Roti canai', 'Makaroni goreng', 'Sandwich sardin'),
('Sarapan', 'Kuey teow goreng', 'Nasi goreng', 'Mee goreng', 'Bijirin', 'Spagheti bolognese', 'Nasi impit + rendang daging kuah kacang', 'Bihun soto'),
('Tengah Hari', 'Nasi + Ayam masak kari + Sambal goreng jawa', 'Nasi + Sup daging', 'Nasi jagung + Ayam goreng masak merah + dalca + papadom', 'Nasi + Ikan selar goreng + Udang sweet sour + Bayam goreng', 'Nasi + Daging masak kurma + Sotong goreng bercili + Kangkung goreng', 'Nasi + Ikan cencaru goreng sumbat cili + Udang goreng kunyit + Kobis masak lemak', 'Nasi + Ikan selar goreng + Sambal udang');

-- --------------------------------------------------------

--
-- Table structure for table `jadual4`
--

CREATE TABLE `jadual4` (
  `Masa` varchar(50) NOT NULL,
  `ISNIN` varchar(100) NOT NULL,
  `SELASA` varchar(100) NOT NULL,
  `RABU` varchar(100) NOT NULL,
  `KHAMIS` varchar(100) NOT NULL,
  `JUMAAT` varchar(100) NOT NULL,
  `SABTU` varchar(100) NOT NULL,
  `AHAD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadual4`
--

INSERT INTO `jadual4` (`Masa`, `ISNIN`, `SELASA`, `RABU`, `KHAMIS`, `JUMAAT`, `SABTU`, `AHAD`) VALUES
('Makan Malam', 'Nasi + Ikan siakap tiga rasa + Kailan goreng belacan', 'Nasi + Ayam masak kicap + Sambal belacan', 'Nasi + Ikan jenahak masak kari + Sawi jepun goreng sos tiram', 'Nasi beriyani + Ayam masak kurma', 'Nasi + Ikan kembung goreng berlada', 'Nasi + Sup ayam', 'Nasi + Ikan kembung masak sambal'),
('Minum Malam', 'Cekodok pisang', 'Roti telur hancur', 'Sandwich sardin', 'Bubur kacang hijau + Biskut', 'Roti benggali + Kari ayam', 'Pau ayam', 'Bun manis'),
('Sarapan', 'Roti telur hancur', 'Bihun goreng', 'Roti canai', 'Bubur', 'Nasi lemak', 'Nasi goreng cendawan', 'Kuey Teow goreng'),
('Tengah Hari', 'Nasi + Daging masak asam pedas + Telur dadar +Bayam goreng', 'Nasi + Udang masak paprik + Sambal goreng jawa', 'Nasi + Ayam goreng berempah + Sambal udang', 'Nasi + Ikan tenggiri goreng kicap + Sambal belacan', 'Nasi jagung + Ayam goreng masak sambal', 'Nasi + Ikan senangin masak kari + Udang goreng kunyit', 'Nasi + Ayam masak lemak cili api + Sambal goreng jawa');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `NAMA` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TAHUN` varchar(30) NOT NULL,
  `REPORT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`NAMA`, `EMAIL`, `TAHUN`, `REPORT`) VALUES
('FAIQ DANISH', 'faiqdanish751@gmail.com', '2SVM KPD', 'Ade ulat dalam sotong');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `level`) VALUES
('FAIQ DANISH', 'faiqdanish751@gmail.com', 'adiknuha', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadual1`
--
ALTER TABLE `jadual1`
  ADD PRIMARY KEY (`Masa`);

--
-- Indexes for table `jadual2`
--
ALTER TABLE `jadual2`
  ADD PRIMARY KEY (`Masa`);

--
-- Indexes for table `jadual3`
--
ALTER TABLE `jadual3`
  ADD PRIMARY KEY (`Masa`);

--
-- Indexes for table `jadual4`
--
ALTER TABLE `jadual4`
  ADD PRIMARY KEY (`Masa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
