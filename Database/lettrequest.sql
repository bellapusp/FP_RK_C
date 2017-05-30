-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Feb 2017 pada 14.13
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lettrequest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `canceled_letter`
--

CREATE TABLE IF NOT EXISTS `canceled_letter` (
  `Content` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `LetterNumber` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `StudentID` char(10) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `canceled_letter`
--

INSERT INTO `canceled_letter` (`Content`, `Date`, `LetterNumber`, `Status`, `StudentID`, `Subject`) VALUES
('surat permohonan magang', '2016-12-27', 2, 'Deleted', '5114100000', 'Job Recommendation');

-- --------------------------------------------------------

--
-- Struktur dari tabel `letter`
--

CREATE TABLE IF NOT EXISTS `letter` (
`LetterNumber` int(10) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` date NOT NULL,
  `Status` char(10) NOT NULL,
  `StudentID` char(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `letter`
--

INSERT INTO `letter` (`LetterNumber`, `Subject`, `Content`, `Date`, `Status`, `StudentID`) VALUES
(1, 'Academic Recommendation', 'surat permohonan beasiswa', '2016-12-25', 'Accepted', '5114100000'),
(3, 'Academic Recommendation', 'Recommendation letter to apply for a scholarship', '2016-12-26', 'Accepted', '5114100000'),
(4, 'Academic Recommendation', 'Recommendation letter to apply for student exchange', '2016-12-27', 'Waiting', '5114100001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` char(10) NOT NULL,
  `StudentName` varchar(40) NOT NULL,
  `StudentAddress` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `ParentName` varchar(40) NOT NULL,
  `ParentAddress` varchar(50) NOT NULL,
  `ParentJob` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PhoneNumber` char(12) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`StudentID`, `StudentName`, `StudentAddress`, `Birthday`, `ParentName`, `ParentAddress`, `ParentJob`, `Email`, `PhoneNumber`, `Password`) VALUES
('5114100000', 'Sample Student', 'Sample Adrress Stree No. 5357', '1945-08-17', 'Sample Parent', 'Sample Adrress Stree No. 5357', 'Teacher', 'student@gmail.com', '080989999', '5114100000'),
('admin', 'admin', '', '0000-00-00', '', '', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canceled_letter`
--
ALTER TABLE `canceled_letter`
 ADD PRIMARY KEY (`LetterNumber`);

--
-- Indexes for table `letter`
--
ALTER TABLE `letter`
 ADD PRIMARY KEY (`LetterNumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `letter`
--
ALTER TABLE `letter`
MODIFY `LetterNumber` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
