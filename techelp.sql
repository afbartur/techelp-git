-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `techelp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcurso`
--

CREATE TABLE IF NOT EXISTS `cadcurso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cadcurso`
--

INSERT INTO `cadcurso` (`id`, `nome`, `criado`, `modificado`) VALUES
(1, 'AnÃ¡lise e Desenvolvimento de Sistemas', '2016-09-08 16:11:46', '2016-09-14 15:45:41'),
(2, 'adm', '2016-09-14 19:20:13', '2016-09-20 21:21:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadequipamento`
--

CREATE TABLE IF NOT EXISTS `cadequipamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `tombo` int(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cadequipamento`
--

INSERT INTO `cadequipamento` (`id`, `nome`, `situacao`, `descricao`, `tombo`, `criado`, `modificado`) VALUES
(1, 'Data Show /Projetor', 'Normal', 'Projetor BenQ MS524B 3200 Lumens', 25637, '2016-09-07 18:31:14', '2016-09-07 19:51:45'),
(5, 'Canetas', 'Normal', 'caneta esferografica', 222333, '2016-09-07 23:41:29', '2016-09-07 23:42:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadlocal`
--

CREATE TABLE IF NOT EXISTS `cadlocal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cadlocal`
--

INSERT INTO `cadlocal` (`id`, `nome`, `sala`, `criado`, `modificado`) VALUES
(3, 'Anexo', '01', '2016-09-08 15:46:48', ''),
(4, 'Anexo', '02', '2016-09-16 15:30:52', ''),
(5, 'Anexo', '03', '2016-09-16 15:31:10', ''),
(6, 'Anexo', '04', '2016-09-16 15:31:33', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadreclamacao`
--

CREATE TABLE IF NOT EXISTS `cadreclamacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `cadreclamacao`
--

INSERT INTO `cadreclamacao` (`id`, `descricao`, `situacao`, `foto`, `criado`, `modificado`, `titulo`) VALUES
(34, 'asdasd', '', '1474499016.jpg', '2016-09-21 20:03:37', '', 'asdas'),
(35, 'aaaaaaaa', '', '1474499048.jpg', '2016-09-21 20:04:10', '', 'aaaaaaaa'),
(36, 'asdas', '', '1474499126.jpg', '2016-09-21 20:05:27', '', 'asdas'),
(37, 'asdasd', '', '1474499263.jpg', '2016-09-21 20:07:44', '', 'asdasdas'),
(38, 'ddddddddddd', '', '1474551371.jpg', '2016-09-22 10:36:11', '', 'dddddddddd'),
(39, 'dd', '', '1474551611.jpg', '2016-09-22 10:40:11', '', 'dddddd'),
(40, 'nnnnnnnnnnnn', '', '1474553154.jpg', '2016-09-22 11:05:55', '', 'nnnnnnnnn'),
(41, 'gg', '', '1474553221.jpg', '2016-09-22 11:07:03', '', 'gg'),
(42, 'ffff', '', '1474553462.jpg', '2016-09-22 11:11:02', '', 'ffff'),
(43, 'fsdfsdfs', '', '1474553537.jpg', '2016-09-22 11:12:17', '', 'dfsdfsd'),
(44, 'asdasd', '', '1474553563.jpg', '2016-09-22 11:12:43', '', 'asdasd'),
(45, 't', '', '1474553933.jpg', '2016-09-22 11:18:53', '', 't'),
(46, '666', '', '1474554186.jpg', '2016-09-22 11:23:06', '', '666'),
(47, 'd', '', '1474554265.jpg', '2016-09-22 11:24:25', '', 'd'),
(48, '55555555', '', '1474554393.jpg', '2016-09-22 11:26:33', '', '555555555'),
(49, 'd', '', '1474565481.jpg', '2016-09-22 14:31:21', '', 'dddddddddd'),
(50, 'd', '', '1474565546.jpg', '2016-09-22 14:32:26', '', 'dddddddddd'),
(51, 'd', '', '1474566081.jpg', '2016-09-22 14:41:21', '', 'dddddddddd'),
(52, 'd', '', '1474566101.jpg', '2016-09-22 14:41:41', '', 'dddddddddd'),
(53, 'gg', '', '1474567617.jpg', '2016-09-22 15:06:57', '', 'asdas'),
(54, 'dddddddddd', '', '1474568602.jpg', '2016-09-22 15:23:22', '', 'dddddddddddd'),
(55, 'dddddddddd', '', '1474568787.jpg', '2016-09-22 15:26:28', '', 'dddddddddddd'),
(56, 'esta com volume quebrado', '', '1474569270.jpg', '2016-09-22 15:34:31', '', 'caixa de som na sala 10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadreserva`
--

CREATE TABLE IF NOT EXISTS `cadreserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `local` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `equipamento` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `turno` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL,
  `situacao` varchar(200) NOT NULL,
  `criado` varchar(200) NOT NULL,
  `modificado` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadusuario`
--

CREATE TABLE IF NOT EXISTS `cadusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `tipousuario` varchar(100) NOT NULL,
  `criado` varchar(100) NOT NULL,
  `modificado` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `cadusuario`
--

INSERT INTO `cadusuario` (`id`, `nome`, `email`, `senha`, `cpf`, `tipousuario`, `criado`, `modificado`) VALUES
(27, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', ''),
(28, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', ''),
(29, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', ''),
(30, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '3', '', ''),
(31, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '1', '', ''),
(33, 'Ana', 'ana@hotmail.com', '123', '455.368.493-44', '3', '', ''),
(34, 'maiara', 'maiara@hotmail.com', '123', '455.368.493-44', '1', '', '2016-09-05 15:18:19'),
(35, 'julio', 'julio@hotmail.com', '123', '455.368.493-44', '1', '', '2016-09-05 15:13:06'),
(36, 'sintia', 'sintia@hotmail.com', '123', '455.368.493-44', '1', '', '2016-09-05 15:12:16'),
(37, 'patricio', 'patricio@hotmail.com', '123', '455.368.493-44', '1', '', '2016-09-05 15:10:56'),
(38, 'Sandra', 'sandra@yahoo.com.br', '123', '455.368.493-44', '1', '', '2016-09-05 15:10:15'),
(39, 'Moara', 'mara@hotmail.com', '123', '455.368.493-44', '1', '', '2016-09-05 15:09:36'),
(40, 'Marcia', 'marcia@hotmail.com', '123', '455.368.493-44', '2', '', '2016-09-05 15:08:58'),
(41, 'david', 'david@homail.com', '123', '455.368.493-44', '1', '', '2016-09-05 15:08:26'),
(42, 'Junio', 'junio@hotmil.com', '123', '680.016.613-85', '1', '', '2016-08-30 10:53:00'),
(43, 'Flaviana', 'flaviana@hotmail.com', '123', '455.368.493-44', '1', '', ''),
(44, 'adriana', '123', '', '455.368.493-44', '2', '', '2016-08-27 00:21:29'),
(45, 'daniela', 'daniela@daniela.com', '123', '455.368.493-44', '1', '', ''),
(46, 'joao1', 'joao@joao', '', '455.368.493-44', '1', '', '2016-08-26 21:18:32'),
(47, 'jose', 'jose@jose.com', '123', '455.368.493-44', '1', 'NOW()', ''),
(48, 'joao 3', 'aaa', '123', '455.368.493-44', '1', '2016-08-27 00:17:00', '2016-08-29 11:05:34'),
(49, 'Nobrega', 'nobrega@gmail.com', '123', '680.016.613-85', '1', '2016-08-29 11:14:47', ''),
(50, 'Artur Bandeira', 'aaa@aaa', '123', '455.368.493-44', '1', '2016-09-06 16:31:06', '2016-09-16 09:09:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acesso`
--

CREATE TABLE IF NOT EXISTS `nivel_acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
