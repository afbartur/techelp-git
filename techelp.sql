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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cadcurso`
--

INSERT INTO `cadcurso` (`id`, `nome`, `criado`, `modificado`) VALUES
(3, 'Contabilidade', '2016-09-28 11:12:51', '2016-09-28 11:14:00'),
(6, 'Enfermagem', '2016-11-01 08:25:55', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `cadequipamento`
--

INSERT INTO `cadequipamento` (`id`, `nome`, `situacao`, `descricao`, `tombo`, `criado`, `modificado`) VALUES
(7, 'data show', '1', 'novo', 35535, '2016-09-30 19:04:37', '2016-10-26 14:47:27'),
(8, 'caixa de som', '1', 'norma', 123213, '2016-09-30 19:16:34', '2016-10-26 14:01:23'),
(9, 'data show', '1', 'novo', 2345, '2016-10-21 20:09:13', '2016-10-26 14:47:14');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cadlocal`
--

INSERT INTO `cadlocal` (`id`, `nome`, `sala`, `criado`, `modificado`) VALUES
(3, 'Anexo', '01', '2016-09-08 15:46:48', ''),
(4, 'Anexo', '02', '2016-09-16 15:30:52', ''),
(5, 'Anexo', '03', '2016-09-16 15:31:10', ''),
(6, 'Anexo', '04', '2016-09-16 15:31:33', ''),
(8, 'Anexo', '05', '2016-09-30 19:17:33', '2016-10-14 09:08:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadreclamacao`
--

CREATE TABLE IF NOT EXISTS `cadreclamacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL,
  `atendimento` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Extraindo dados da tabela `cadreclamacao`
--

INSERT INTO `cadreclamacao` (`id`, `descricao`, `situacao`, `atendimento`, `foto`, `criado`, `modificado`, `titulo`) VALUES
(62, 'barulho', '1', '', '1476386002.png', '2016-10-13 16:13:22', '', 'ventilador'),
(63, 'nao liga', '2', '	 Vai resolver no fim do mÃªs', '1476445397.png', '2016-10-14 08:43:17', '2016-10-14 08:52:48', 'catraca'),
(64, 'a lampada da sala 03 do anexo ', '2', 'segunda feira concerta', '1476452528.jpg', '2016-10-14 10:42:09', '2016-10-14 10:43:09', 'lampada queimada'),
(65, 'Agua quente', '2', 'Vai ser mandado um tÃ©cnico dia 30', '1476709952.jpg', '2016-10-17 10:12:33', '2016-10-17 10:13:29', 'Bebedor ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadreserva`
--

CREATE TABLE IF NOT EXISTS `cadreserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `local` varchar(200) NOT NULL,
  `horarioinicio` varchar(200) NOT NULL,
  `horariofim` varchar(255) NOT NULL,
  `equipamento` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `turno` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL,
  `situacao` varchar(200) NOT NULL,
  `criado` varchar(200) NOT NULL,
  `modificado` varchar(200) NOT NULL,
  `sala` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cadreserva`
--

INSERT INTO `cadreserva` (`id`, `usuario`, `local`, `horarioinicio`, `horariofim`, `equipamento`, `curso`, `turno`, `data`, `situacao`, `criado`, `modificado`, `sala`) VALUES
(2, 'Artur', 'Principal', '12:00', '17:30', 'data show', 'Contabilidade', 'ManhÃ£', '2016-10-14', '1', '2016-10-14 14:41:05', '', '03'),
(4, 'Artur', 'Principal', '12:00', '17:30', 'data show', 'Contabilidade', 'ManhÃ£', '2016-10-16', '1', '2016-10-14 14:54:16', '', '01'),
(5, 'Julho', 'Anexo', '12:00', '17:30', 'data show', 'Contabilidade', 'ManhÃ£', '2016-10-05', '1', '2016-10-14 14:55:58', '2016-10-14 16:23:38', '10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `cadusuario`
--

INSERT INTO `cadusuario` (`id`, `nome`, `email`, `senha`, `cpf`, `tipousuario`, `criado`, `modificado`) VALUES
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
(44, 'adriana', 'adriana@hotmail.com', '123', '455.368.493-44', '2', '', '2016-10-11 10:56:01'),
(45, 'daniela', 'daniela@daniela.com', '123', '455.368.493-44', '4', '', '2016-10-11 10:56:27'),
(46, 'joao1', 'joao@hotmail.com', '123', '455.368.493-44', '3', '', '2016-10-11 10:57:02'),
(47, 'jose', 'jose@jose.com', '123', '455.368.493-44', '1', 'NOW()', ''),
(48, 'joao 3', 'joao3@hotmail.com', '123', '455.368.493-44', '1', '2016-08-27 00:17:00', '2016-10-11 10:55:29'),
(49, 'Nobrega', 'nobrega@gmail.com', '123', '680.016.613-85', '1', '2016-08-29 11:14:47', ''),
(50, 'Artur', 'aaa@aaa.com', '123', '455.368.493-44', '1', '2016-09-06 16:31:06', '2016-10-04 13:55:52'),
(51, 'Artur', 'artur@hotmail.com', '202cb962ac59075b964b07152d234b70', '680.016.613-85', '1', '2016-09-27 21:24:16', ''),
(52, 'Julho', 'lulho@hotmail.com', '123', '680.016.613-85', '1', '2016-09-30 19:06:17', ''),
(56, 'Higor', 'igor@hotmail.com', '123', '680.016.613-85', '1', '2016-09-30 19:15:37', '');

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
