-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Fev-2017 às 00:59
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sir`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE `album` (
  `idAlbum` int(11) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `idUser` bigint(255) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'all'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`idAlbum`, `nome`, `descricao`, `idUser`, `tema`) VALUES
(3, 'Viagens', 'We travel, some of us forever, to seek other places, other lives, other souls.', 3, 'all'),
(4, 'Noitadas', 'Ao melhor que a vida nos da!', 1, 'aaaa'),
(5, 'Coisas da Vida', 'Viagens', 1, 'kkkk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `idFoto` int(11) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `idAlbum` int(11) NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'imgflower_123123.jpg',
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`idFoto`, `nome`, `descricao`, `idAlbum`, `foto`, `estado`) VALUES
(1, 'Flor', 'Flor do campo', 4, 'imgflower_123123.jpg', 0),
(2, 'imagem', 'lalala', 4, 'imgchania2_54321.jpg', 0),
(10, 'foto', 'descricao', 3, 'abreu_1485995162.jpg', 0),
(12, 'foto', 'descricao', 3, '482058_514590678558167_597847093_n_1485995575.jpg', 0),
(13, 'foto', 'descricao', 5, 'IMG_20150308_020037_1485995581.jpg', 1),
(14, 'foto', 'descricao', 3, 'FB_IMG_1444527734561_1485995588.jpg', 1),
(15, 'foto', 'descricao', 3, 'FB_IMG_1445001190255_1485995593.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` bigint(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pw` varchar(100) DEFAULT NULL,
  `tipoUser` int(11) NOT NULL DEFAULT '0',
  `telemovel` int(11) DEFAULT NULL,
  `foto` varchar(60000) NOT NULL DEFAULT 'default_1234567.jpg',
  `estado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `nome`, `username`, `email`, `pw`, `tipoUser`, `telemovel`, `foto`, `estado`) VALUES
(1, 'Ricardo Dos Santos Araujo', 'raraujo', 'ricardo.araujo@gmail.com', '0000', 0, 2147483647, '12080895_10206150919386182_420384098_n_1485561023_1485881055.jpg', 0),
(3, 'Ricardo Abreu', 'rabreu', 'rabreu@hotmail.com', '0000', 0, 937526785, '482058_514590678558167_597847093_n_1486050720.jpg', 0),
(28, 'Diogo Amorim', 'damorim', 'damorim@gmail.com', '0000', 0, 123, '482058_514590678558167_597847093_n_1485892143.jpg', 0),
(29, 'Administrador', 'admin', 'admin@admin.com', 'admin', 1, 0, 'default_1234567.jpg', 0),
(1524976434194079, 'Sofia Diniz', NULL, 'fufia94@hotmail.com', NULL, 0, NULL, 'default_1234567.jpg', 1),
(1605018322848725, 'Ricardo Abreu', NULL, 'rda24@hotmail.com', NULL, 0, NULL, 'default_1234567.jpg', 0),
(10202848672575113, 'Ricardo AraÃºjo', NULL, 'ricardo.araujo258@gmail.com', NULL, 0, NULL, 'default_1234567.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idAlbum`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idFoto`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `idAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
