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
(2, 'adm', '2016-09-14 19:20:13', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cadlocal`
--

INSERT INTO `cadlocal` (`id`, `nome`, `sala`, `criado`, `modificado`) VALUES
(3, 'Anexo', '01', '2016-09-08 15:46:48', '');

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
