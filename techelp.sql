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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Extraindo dados da tabela `cadusuario`
--

INSERT INTO `cadusuario` (`id`, `nome`, `email`, `senha`, `cpf`, `tipousuario`, `criado`, `modificado`) VALUES
(1, 'Mariana', 'aaa@aaa', '123', '2147483647', '1', '0', '0'),
(2, 'JKHJKH', 'KJHKJH', 'GHGFHGF', '0', '0', '0', '0'),
(3, 'HJGJHG', 'HJJHG', 'JHGHJG', '0', '0', '0', '0'),
(4, 'HJGJHG', 'HJJHG', 'asas', '0', '0', '0', '0'),
(5, 'jkhkj', 'hkjh', 'kjh', '0', '0', '0', '0'),
(6, 'kjkl', 'lkj', 'jlkj', '0', '0', '0', '0'),
(7, '', '', '', '0', '0', '0', '0'),
(8, 'kjkl', 'lkj', 'dsdsd', '0', '0', '0', '0'),
(9, '', '', '', '0', '0', '0', '0'),
(10, '', '', '', '0', '0', '0', '0'),
(11, 'khkjhk', 'jhkjhkjh', 'hkhkjh', '0', '0', '0', '0'),
(13, '', '', '', '0', '0', '0', '0'),
(14, '', '', '', '0', '0', '0', '0'),
(15, '', '', '', '0', '0', '0', '0'),
(16, '', '', '', '0', '0', '0', '0'),
(17, '', '', '', '0', '0', '0', '0'),
(18, 'sdfsdfsdf', 'dfdfds@mmm.com', 'sdfsdf', '0', '0', '0', '0'),
(19, 'kljlkjlkjkl', 'kjlkjlkj', 'lkjkljlkkljlk', '0', '0', '0', '0'),
(20, 'lucinha', 'lu@lu', '123', '455368', '1', '0', '0'),
(21, 'Ribeiro', 'ri@ri.com', '123', '455368', '2', '0', '0'),
(22, 'Manuela', 'manu@manu.com', '123', '455368', '0', '0', '0'),
(23, 'Lucas', 'lucas@hotmail.com', '123', '455368', '0', '0', '0'),
(24, 'asdasdasd', 'asdasd', '123', '42278', '0', '0', '0'),
(25, 'qweqwe', 'qweqwe', 'qweqwe', '0', '2', '0', '0'),
(26, 'Lucas', 'lucas@hotmail.com', '123', '455368', '2', '0', '0'),
(27, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', ''),
(28, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', ''),
(29, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', ''),
(30, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '3', '', ''),
(31, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '1', '', ''),
(32, '', '', '', '', '', '', ''),
(33, 'Ana', 'ana@hotmail.com', '123', '455.368.493-44', '3', '', ''),
(34, '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '', ''),
(42, 'Junio', 'junio@hotmil.com', '123', '680.016.613-85', '1', '', '2016-08-30 10:53:00'),
(43, 'Flaviana', 'flaviana@hotmail.com', '123', '455.368.493-44', '1', '', ''),
(44, 'adriana', '123', '', '455.368.493-44', '2', '', '2016-08-27 00:21:29'),
(45, 'daniela', 'daniela@daniela.com', '123', '455.368.493-44', '1', '', ''),
(46, 'joao1', 'joao@joao', '', '455.368.493-44', '1', '', '2016-08-26 21:18:32'),
(47, 'jose', 'jose@jose.com', '123', '455.368.493-44', '1', 'NOW()', ''),
(48, 'joao 3', 'aaa', '123', '455.368.493-44', '1', '2016-08-27 00:17:00', '2016-08-29 11:05:34'),
(49, 'Nobrega', 'nobrega@gmail.com', '123', '680.016.613-85', '1', '2016-08-29 11:14:47', '');

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
