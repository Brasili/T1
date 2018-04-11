-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Abr-2018 às 20:10
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `CPF` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`CPF`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`CPF`, `nome`, `email`, `sexo`, `cod_cidade`) VALUES
('01267594837', 'Michel Vecanadre ', 'MV@gmail.com', 'M', 52),
('03020948657', 'Luziete Soares Santana', 'Lu.santana@gmail.com', 'F', 11),
('06883456758', 'Amanda Uchoa', 'Uchoa@gmail.com', 'F', 21),
('09087445612', 'Victor Hugo Santana', 'v@gmail.com', 'M', 11),
('09234567891', 'Vitor Perez', 'Perez.v@gmail.com', 'M', 32),
('09455678912', 'Matheus Borges', 'MB@gmail.com', 'M', 51),
('09877653457', 'Giovana Hodrigues', '@gmail.com', 'F', 51),
('10934568910', 'Lohane Vecanandre', '@gmail.com', 'O', 52),
('11455678945', 'Miguel Joao', 'Miguel@gmail.com', 'M', 31),
('12345678094', 'Moana Ventobravo', 'MoanaVB@gmail.com', 'F', 42),
('12456734097', 'Morgana Babilonia', 'Morg@gmail.com', 'F', 42),
('23455567890', 'Gabriel Borgato', 'GB@gmail.com', 'M', 31),
('23986674501', 'Jorge Rodrigues', '@gmail.com', 'M', 41),
('65788995562', 'Maria Geruza', 'MG@gmail.com', 'F', 22),
('74567766554', 'Marcos Umbrela', 'Umbrela.m@gmail.com', 'M', 22),
('76459987612', 'Florinda Flores', 'FF@gmail.com', 'F', 41),
('87465533489', 'Vinicius Jamal', 'jamal@gmail.com', 'M', 21),
('88745667345', 'Filo Veras', 'FIlolo@gmail.com', 'F', 12),
('98456783456', 'Pedro Gomes', 'Piu@gmail.com', 'M', 32),
('98776459123', 'Jonatan Wilian', 'Jonatan@gmail.com', 'M', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome_cidade`, `cod_estado`) VALUES
(11, 'São Paulo', 1),
(12, 'Rio de Janeiro', 2),
(21, 'Campinas', 1),
(22, 'Nova Friburgo', 2),
(31, 'Ribeirão Preto', 1),
(32, 'Petropolis', 2),
(41, 'Bauru', 1),
(42, 'Parati', 2),
(51, 'Araraquara', 1),
(52, 'Cabo Frio', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `nome_estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `sigla`, `nome_estado`) VALUES
(1, 'SP', 'São Paulo'),
(2, 'RJ', 'Rio de Janeiro');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`id_cidade`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
