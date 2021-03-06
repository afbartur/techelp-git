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
-- Estrutura da tabela `cadcategoriaequipamento`
--

CREATE TABLE IF NOT EXISTS `cadcategoriaequipamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  `modificadopor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `cadcategoriaequipamento`
--

INSERT INTO `cadcategoriaequipamento` (`id`, `nome`, `criado`, `modificado`, `modificadopor`) VALUES
(2, 'Data Show', '2016-11-10 10:54:14', '2016-11-10 11:08:14', ''),
(3, 'Caixa de Som', '2016-11-10 11:09:04', '', ''),
(4, 'Passador de Slides', '2016-11-10 11:11:34', '', ''),
(5, 'Cabo VGA', '2016-11-10 11:28:37', '2016-11-10 11:29:00', ''),
(6, 'Pincel', '2016-11-13 11:26:30', '', ''),
(7, 'Apagador', '2016-11-13 11:26:40', '', ''),
(8, 'RÃ©gua', '2016-11-13 11:27:43', '2016-11-13 14:07:14', ''),
(9, 'Pinceis Coloridos', '2016-11-13 11:28:16', '', ''),
(10, 'Categoria Tese', '2016-11-23 20:31:27', '', ''),
(11, 'Apagador', '2016-11-29 14:34:00', '2016-11-30 08:22:55', 'joao1'),
(12, 'Mouse sem fio', '2016-11-30 08:28:41', '2016-11-30 11:08:29', 'joao1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcurso`
--

CREATE TABLE IF NOT EXISTS `cadcurso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  `modificadopor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `cadcurso`
--

INSERT INTO `cadcurso` (`id`, `nome`, `criado`, `modificado`, `modificadopor`) VALUES
(3, 'EducaÃ§Ã£o FÃ­sica ', '2016-09-28 11:12:51', '2016-11-13 15:41:02', ''),
(6, 'Fisioterapia', '2016-11-01 08:25:55', '2016-11-13 15:36:25', ''),
(7, 'AnÃ¡lise e Desenvolvimento de Sistemas', '2016-11-13 15:35:43', '', ''),
(8, 'ServiÃ§o Social', '2016-11-13 15:36:04', '', ''),
(9, 'Psicologia', '2016-11-13 15:36:56', '2016-11-30 09:21:21', 'joao1'),
(10, 'Enfermagem', '2016-11-13 15:38:41', '2016-11-30 09:14:26', 'Artur'),
(11, 'CiÃªncias ContÃ¡beis', '2016-11-13 15:40:28', '2016-11-29 16:54:06', 'Artur'),
(12, 'AdministraÃ§Ã£o', '2016-11-13 15:41:32', '2016-11-29 16:32:34', 'Artur'),
(13, 'Biomedicina', '2016-11-29 16:33:04', '2016-11-29 16:34:39', 'Artur'),
(14, 'FarmÃ¡cia', '2016-11-29 16:34:58', '2016-11-29 16:41:58', 'Artur');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadendregas`
--

CREATE TABLE IF NOT EXISTS `cadendregas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nomeprofessor` varchar(255) NOT NULL,
  `equipamento` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL,
  `dataentrega` varchar(255) NOT NULL,
  `dataprevista` varchar(255) NOT NULL,
  `datarecebido` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `horario1` varchar(255) NOT NULL,
  `horario2` varchar(255) NOT NULL,
  `horario3` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Extraindo dados da tabela `cadendregas`
--

INSERT INTO `cadendregas` (`id`, `nome`, `nomeprofessor`, `equipamento`, `situacao`, `dataentrega`, `dataprevista`, `datarecebido`, `local`, `sala`, `curso`, `horario1`, `horario2`, `horario3`, `turno`, `criado`, `modificado`) VALUES
(2, 'Artur', 'Artur', 'Caixa de Som', 'Recebido', '2016-11-14', '2016-11-14', '2016-11-14', 'Pincipal', '12', 'Contabilidade', 'ab', 'cd', 'ef', 'ManhÃ£', '2016-11-14 09:25:32', '2016-11-20 05:22:10'),
(3, 'Artur', 'sintia', 'Data Show', 'Recebido', '2016-11-14', '2016-11-14', '2016-11-16', 'Anexo', '05', 'AdministraÃ§Ã£o', 'ab', 'cd', 'ef', 'ManhÃ£', '2016-11-14 14:51:22', '2016-11-20 05:21:53'),
(4, 'Artur', 'daniela', 'Data Show', 'Recebido', '2016-11-14', '2016-11-14', '2016-11-14', 'Principal', '17', 'Contabilidade', 'ab', 'cd', 'ef', 'ManhÃ£', '2016-11-14 15:03:02', '2016-11-20 05:21:15'),
(6, 'Artur', 'patricio', 'Caixa de Som', 'Recebido', '2016-11-17', '2016-11-17', '2016-11-16', 'Anexo', '03', 'ADS', 'ab', 'cd', 'NÃ£o Selecionado', 'ManhÃ£', '2016-11-16 10:57:30', '2016-11-20 05:20:47'),
(7, 'Artur', 'Ana', 'Data Show', 'Recebido', '2016-11-16', '2016-11-16', '2016-11-16', 'Anexo', '04', 'Enfermagem', 'ab', 'NÃ£o Selecionado', 'NÃ£o Selecionado', 'ManhÃ£', '2016-11-16 11:00:25', '2016-11-20 05:20:29'),
(8, 'Artur', 'Ana', 'Apagador', 'Recebido', '2016-11-16', '2016-11-16', '2016-11-16', 'Anexo', '02', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o Selecionado', 'NÃ£o Selecionado', 'Noite', '2016-11-16 14:59:57', '2016-11-20 05:20:04'),
(10, 'Artur', 'Ana', 'Caixa de Som', 'Recebido', '2016-11-16', '2016-11-16', '2016-11-16', 'Anexo', '02', 'ADS', 'ab', 'NÃ£o Selecionado', 'NÃ£o Selecionado', 'Noite', '2016-11-16 15:07:32', '2016-11-20 05:03:29'),
(11, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-20 04:32:53', '2016-11-20 04:37:14'),
(12, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'ServiÃ§o Social', 'ab', 'cd', 'NÃ£o Selecionado', 'Tarde', '2016-11-20 05:07:17', '2016-11-20 05:19:23'),
(13, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'AdministraÃ§Ã£o', 'ab', 'cd', 'NÃ£o Selecionado', 'Tarde', '2016-11-20 05:10:43', '2016-11-20 05:19:01'),
(14, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-20 05:22:51', '2016-11-20 06:38:13'),
(15, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-20 05:24:41', '2016-11-20 06:37:58'),
(16, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-20 05:26:52', '2016-11-20 06:35:07'),
(17, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-20 05:38:48', '2016-11-20 06:33:25'),
(18, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-20 06:03:58', '2016-11-20 06:31:03'),
(19, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '01', 'Contabilidade', 'ab', 'cd', 'NÃ£o Selecionado', 'Tarde', '2016-11-20 06:09:04', '2016-11-20 06:55:25'),
(20, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '12', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o Selecionado', 'NÃ£o Selecionado', 'ManhÃ£', '2016-11-20 06:57:01', '2016-11-20 07:00:26'),
(21, 'Artur', 'Artur', 'Data Show', 'Selecione', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '12', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 07:01:00', '2016-11-20 21:49:19'),
(23, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '12', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 07:24:54', '2016-11-20 07:35:26'),
(24, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '12', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 07:33:53', '2016-11-20 07:35:11'),
(25, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '12', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 07:36:24', '2016-11-20 21:49:08'),
(26, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '16', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'cd', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 07:37:59', '2016-11-20 07:38:41'),
(27, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '16', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'cd', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 08:03:36', '2016-11-20 21:48:35'),
(28, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '14', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 08:06:57', '2016-11-20 08:09:19'),
(29, 'Artur', 'david', 'Apagador', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '14', 'Psicologia', 'ab', 'NÃ£o Selecionado', 'NÃ£o Selecionado', 'ManhÃ£', '2016-11-20 08:07:54', '2016-11-20 08:08:24'),
(30, 'Artur', 'adriana', 'Data Show', 'Recebido', '2016-11-20', '2016-11-20', '2016-11-20', 'Anexo', '17', 'AdministraÃ§Ã£o', 'ab', 'cd', 'ef', 'ManhÃ£', '2016-11-20 21:50:25', '2016-11-20 21:51:27'),
(31, 'Artur', 'Artur', 'Caixa de Som', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '16', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'cd', 'ef', 'ManhÃ£', '2016-11-20 21:55:04', '2016-11-20 22:13:04'),
(32, 'Artur', 'Artur', 'Caixa de Som', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '16', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'cd', 'ef', 'ManhÃ£', '2016-11-20 22:05:12', '2016-11-20 22:12:42'),
(33, 'Artur', 'Moara', 'Apagador', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '15', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 22:16:15', '2016-11-20 22:17:48'),
(34, 'Artur', 'Moara', 'Apagador', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '15', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 22:19:57', '2016-11-20 22:20:31'),
(35, 'Artur', 'david', 'Data Show', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '15', 'Fisioterapia', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 22:24:47', '2016-11-20 22:25:45'),
(36, 'Artur', 'Flaviana', 'Data Show', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '16', 'Fisioterapia', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 22:26:21', '2016-11-20 22:26:58'),
(37, 'Artur', 'Marcia', 'Apagador', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '16', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 22:31:29', '2016-11-20 22:32:03'),
(38, 'Artur', 'Artur', 'Apagador', 'Recebido', '2016-11-21', '2016-11-20', '2016-11-20', 'Anexo', '14', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-20 22:33:40', '2016-11-20 22:34:21'),
(39, 'Artur', 'Flaviana', 'Data Show', 'Recebido', '22-11-2016', '22-11-2016', '2016-11-22', 'Anexo', '16', 'Enfermagem', 'NÃ£o Selecionado', 'cd', 'ef', 'Noite', '2016-11-22 00:18:59', '2016-11-22 00:22:35'),
(40, 'Artur', 'Moara', 'Caixa de Som', 'Recebido', '22-11-2016', '22-11-2016', '2016-11-22', 'Anexo', '13', 'Psicologia', 'ab', 'cd', 'NÃ£o Selecionado', 'Tarde', '2016-11-22 00:29:41', '2016-11-22 00:42:19'),
(41, 'Artur', 'david', 'Data Show', 'Recebido', '22-11-2016', '22-11-2016', '2016-11-22', 'Anexo', '15', 'Psicologia', 'ab', 'cd', 'NÃ£o Selecionado', 'Tarde', '2016-11-22 01:07:09', '2016-11-22 01:09:10'),
(42, 'Artur', 'Artur', 'Data Show', 'Recebido', '2016-11-22', '2016-11-22', '2016-11-22', 'Anexo', '15', 'EducaÃ§Ã£o FÃ­sica', 'ab', 'cd', 'NÃ£o selecionado', 'Tarde', '2016-11-22 01:11:54', '2016-11-22 01:13:10'),
(43, 'Artur', 'Selecione', 'Data Show', 'Recebido', '23-11-2016', '23-11-2016', '2016-11-23', 'Anexo', '14', 'CiÃªncias ContÃ¡beis', 'ab', 'NÃ£o Selecionado', 'NÃ£o Selecionado', 'Tarde', '2016-11-23 20:21:25', '2016-11-23 20:22:49'),
(44, 'Artur', 'david', 'Caixa de Som', 'Recebido', '2016-11-28', '2016-11-28', '2016-11-28', 'Anexo', '18', 'Fisioterapia', 'ab', 'NÃ£o selecionado', 'ef', 'ManhÃ£', '2016-11-28 20:21:07', '2016-11-28 20:21:44'),
(45, 'joao1', 'Mariana', 'Data Show', 'Recebido', '30-11-2016', '30-11-2016', '2016-11-30', 'Anexo', '18', 'ServiÃ§o Social', 'ab', 'cd', 'NÃ£o Selecionado', 'Noite', '2016-11-30 14:36:09', '2016-11-30 14:39:13'),
(46, 'Artur', 'Artur', 'Apagador', 'Recebido', '2016-11-30', '2016-11-30', '2016-11-30', 'Principal', '17', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ab', 'cd', 'NÃ£o selecionado', 'ManhÃ£', '2016-11-30 14:48:25', '2016-11-30 14:50:23');

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
  `modificadopor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `cadequipamento`
--

INSERT INTO `cadequipamento` (`id`, `nome`, `situacao`, `descricao`, `tombo`, `criado`, `modificado`, `modificadopor`) VALUES
(7, 'Data Show', '2', 'Epson', 35535, '2016-09-30 19:04:37', '2016-11-16 14:19:59', ''),
(8, 'Caixa de Som', '1', 'WatSom', 123213, '2016-09-30 19:16:34', '2016-11-16 14:19:27', ''),
(9, 'Data Show', '2', 'Epson', 2345, '2016-10-21 20:09:13', '2016-11-16 14:19:02', ''),
(11, 'Apagador', '1', 'Material Plastico', 23456, '2016-11-13 11:32:00', '2016-11-13 13:27:40', ''),
(12, 'Passador de Slides', '1', 'Multlazer', 343434, '2016-11-16 14:18:43', '', ''),
(13, 'Cabo VGA', '3', 'Ponta Azul 1,5 metros', 45435, '2016-11-16 14:21:38', '2016-11-16 14:23:47', ''),
(14, 'Pincel', '2', 'quadro branco recarregÃ¡vel preto Pilot BT', 234456, '2016-11-16 14:34:18', '', ''),
(15, 'Apagador', '1', 'Apagador para quadro branco Radex', 3455, '2016-11-16 14:39:40', '', ''),
(17, 'Data Show', '2', 'novo', 34567, '2016-11-25 14:27:54', '', ''),
(18, 'Apagador', '1', 'novo', 333, '2016-11-29 15:22:52', '2016-11-29 16:53:11', 'Artur'),
(19, 'Mouse sem fio', '1', 'goldentec', 2839, '2016-11-30 08:32:35', '2016-11-30 08:33:52', 'joao1');

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
  `modificadopor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `cadlocal`
--

INSERT INTO `cadlocal` (`id`, `nome`, `sala`, `criado`, `modificado`, `modificadopor`) VALUES
(4, 'Anexo', '01', '2016-09-16 15:30:52', '2016-11-14 14:25:11', ''),
(5, 'Anexo', '02', '2016-09-16 15:31:10', '2016-11-14 14:25:23', ''),
(6, 'Anexo', '03', '2016-09-16 15:31:33', '2016-11-14 14:25:34', ''),
(8, 'Anexo', '04', '2016-09-30 19:17:33', '2016-11-14 14:25:46', ''),
(9, 'Principal', '05', '2016-11-13 13:39:06', '2016-11-14 14:26:00', ''),
(10, 'Anexo', '06', '2016-11-14 14:20:22', '', ''),
(11, 'Anexo', '07', '2016-11-14 14:20:38', '', ''),
(12, 'Anexo', '08', '2016-11-14 14:20:51', '', ''),
(13, 'Anexo', '09', '2016-11-14 14:21:05', '', ''),
(14, 'Anexo', '10', '2016-11-14 14:21:16', '', ''),
(15, 'Anexo', '11', '2016-11-14 14:21:51', '', ''),
(16, 'Anexo', '12', '2016-11-14 14:22:00', '', ''),
(17, 'Anexo', '13', '2016-11-14 14:22:11', '', ''),
(18, 'Anexo', '14', '2016-11-14 14:22:31', '', ''),
(19, 'Anexo', '15', '2016-11-14 14:22:55', '', ''),
(20, 'Anexo', '16', '2016-11-14 14:23:07', '', ''),
(21, 'Anexo', '17', '2016-11-14 14:23:17', '', ''),
(22, 'Anexo', '18', '2016-11-14 14:23:28', '2016-11-29 16:53:43', 'Artur'),
(23, 'Anexo', '19', '2016-11-14 14:23:41', '2016-11-29 16:35:44', 'Artur'),
(24, 'Anexo', '20', '2016-11-14 14:23:56', '2016-11-29 16:35:35', 'Artur'),
(26, 'Anexo', '21', '2016-11-29 16:29:31', '2016-11-30 09:11:56', 'joao1'),
(27, 'ClinicaEscola', '23', '2016-11-30 08:57:29', '2016-11-30 09:09:26', 'Artur');

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
  `modificadopor` varchar(255) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Extraindo dados da tabela `cadreclamacao`
--

INSERT INTO `cadreclamacao` (`id`, `descricao`, `situacao`, `atendimento`, `foto`, `criado`, `modificado`, `modificadopor`, `titulo`) VALUES
(62, 'barulho', '1', '', '1476386002.png', '2016-10-13 16:13:22', '', '', 'ventilador'),
(63, 'nao liga', '2', 'Vai resolver no fim do mÃªs', '1476445397.png', '2016-10-14 08:43:17', '2016-11-30 14:15:48', 'joao1', 'catraca'),
(64, 'a lampada da sala 03 do anexo ', '2', 'segunda feira concerta', '1476452528.jpg', '2016-10-14 10:42:09', '2016-11-29 23:39:51', 'Artur', 'lampada queimada'),
(65, 'Agua quente', '3', 'Vai ser mandado um tÃ©cnico dia 30', '1476709952.jpg', '2016-10-17 10:12:33', '2016-11-29 21:47:53', 'joao1', 'Bebedor ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadreserva`
--

CREATE TABLE IF NOT EXISTS `cadreserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `usuario2` varchar(255) NOT NULL,
  `local` varchar(200) NOT NULL,
  `horarioinicio` varchar(200) NOT NULL,
  `horariomeio` varchar(255) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `cadreserva`
--

INSERT INTO `cadreserva` (`id`, `usuario`, `usuario2`, `local`, `horarioinicio`, `horariomeio`, `horariofim`, `equipamento`, `curso`, `turno`, `data`, `situacao`, `criado`, `modificado`, `sala`) VALUES
(10, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'ef', 'data show', 'Contabilidade', 'ManhÃ£', '2016-11-14', '1', '2016-11-10 09:39:47', '2016-11-13 15:33:54', '01'),
(12, 'Laura', 'Laura', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'data show', 'Contabilidade', 'Tarde', '2016-11-18', '1', '2016-11-13 11:40:40', '2016-11-14 10:40:50', '01'),
(13, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Data Show', 'Contabilidade', 'Tarde', '2016-11-17', '1', '2016-11-13 11:42:48', '2016-11-14 10:40:35', '01'),
(14, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 06:55:50', '', '12'),
(15, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 07:37:27', '', '16'),
(16, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 08:06:19', '', '14'),
(17, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'ef', 'Caixa de Som', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 21:53:00', '', '16'),
(18, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:13:50', '', '14'),
(19, 'Artur', 'Moara', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:15:10', '', '15'),
(20, 'Artur', 'Flaviana', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'Fisioterapia', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:22:26', '', '16'),
(21, 'Artur', 'david', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'Fisioterapia', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:23:56', '', '15'),
(22, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'Tarde', '2016-11-20', '1', '2016-11-20 22:27:37', '', '13'),
(23, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:28:43', '', '14'),
(24, 'Artur', 'Marcia', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-03', '1', '2016-11-20 22:29:39', '', '16'),
(25, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'Tarde', '2016-11-22', '1', '2016-11-22 01:11:06', '', '15'),
(26, 'Artur', 'Artur', 'Principal', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Categoria Tese', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-24', '1', '2016-11-23 20:32:37', '', '01'),
(27, 'Artur', 'Ana', 'Principal', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Categoria Tese', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-24', '1', '2016-11-23 20:33:17', '', '01'),
(29, 'Artur', 'Artur', 'Anexo', 'ab', '', '', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-24 16:36:14', '', '17'),
(30, 'Artur', 'Artur', 'Anexo', '', 'cd', 'ef', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-24 16:38:12', '', '17'),
(31, 'Artur', 'Artur', 'Anexo', 'ab', '', '', 'Pincel', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-26', '1', '2016-11-24 19:22:46', '', '18'),
(32, 'Artur', 'Artur', '', '', 'cd', '', 'Pincel', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-26', '1', '2016-11-24 19:23:48', '', '18'),
(33, 'Artur', 'Artur', 'Principal', 'ab', '', '', 'Pincel', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-27', '1', '2016-11-24 19:26:10', '', '16'),
(34, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', '', 'Passador de Slides', 'Fisioterapia', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 10:14:36', '', '19'),
(36, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', '', 'Cabo VGA', 'Fisioterapia', 'ManhÃ£', '2016-11-26', '1', '2016-11-25 11:29:54', '', '17'),
(37, 'adriana', 'adriana', 'Anexo', '', '', 'ef', 'Cabo VGA', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-26', '1', '2016-11-25 11:31:33', '', '17'),
(38, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-04', '1', '2016-11-25 14:04:58', '', '17'),
(39, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-04', '1', '2016-11-25 14:40:21', '', '19'),
(40, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-04', '1', '2016-11-25 14:41:47', '', '19'),
(41, 'Artur', 'Artur', 'Principal', 'ab', 'cd', 'ef', 'Caixa de Som', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 19:29:18', '', '18'),
(42, 'Laura', 'Laura', 'Anexo', 'ab', 'cd', '', 'Cabo VGA', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 19:33:38', '', '18'),
(43, 'Laura', 'Laura', 'Anexo', '', '', 'ef', 'Cabo VGA', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 19:35:35', '', '18'),
(44, 'Mariana', 'Mariana', 'Anexo', 'ab', 'cd', '', 'Caixa de Som', 'Fisioterapia', 'Tarde', '2016-11-25', '1', '2016-11-25 20:40:49', '', '19'),
(45, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', '', 'Caixa de Som', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-27', '1', '2016-11-27 19:32:27', '', '19'),
(46, 'Artur', 'david', 'Anexo', 'ab', '', 'ef', 'Caixa de Som', 'Fisioterapia', 'ManhÃ£', '2016-11-27', '1', '2016-11-27 23:18:18', '', '18'),
(47, 'joao1', 'joao1', '', 'ab', 'cd', '', 'Apagador', 'ServiÃ§o Social', 'ManhÃ£', '2016-11-30', '1', '2016-11-30 09:27:27', '', '19'),
(48, 'Artur', 'Artur', 'Principal', 'ab', 'cd', '', 'Apagador', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-30', '1', '2016-11-30 09:29:31', '2016-11-30 10:23:59', '17');

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
  `curso` varchar(255) NOT NULL,
  `criado` varchar(100) NOT NULL,
  `modificado` varchar(100) NOT NULL,
  `modificadopor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `cadusuario`
--

INSERT INTO `cadusuario` (`id`, `nome`, `email`, `senha`, `cpf`, `tipousuario`, `curso`, `criado`, `modificado`, `modificadopor`) VALUES
(28, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', '', '', ''),
(29, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '2', '', '', '', ''),
(30, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '3', '', '', '', ''),
(31, 'Lucas', 'lucas@hotmail.com', '123', '455.368.493-44', '1', '', '', '', ''),
(33, 'Ana', 'ana@hotmail.com', '123', '455.368.493-44', '3', '', '', '', ''),
(34, 'maiara', 'maiara@hotmail.com', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:18:19', ''),
(35, 'julio', 'julio@hotmail.com', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:13:06', ''),
(36, 'sintia', 'sintia@hotmail.com', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:12:16', ''),
(37, 'patricio', 'patricio@hotmail.com', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:10:56', ''),
(38, 'Sandra', 'sandra@yahoo.com.br', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:10:15', ''),
(39, 'Moara', 'mara@hotmail.com', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:09:36', ''),
(40, 'Marcia', 'marcia@hotmail.com', '123', '455.368.493-44', '2', '', '', '2016-09-05 15:08:58', ''),
(41, 'david', 'david@homail.com', '123', '455.368.493-44', '1', '', '', '2016-09-05 15:08:26', ''),
(42, 'Junio', 'junio@hotmil.com', '123', '680.016.613-85', '1', '', '', '2016-08-30 10:53:00', ''),
(43, 'Flaviana', 'flaviana@hotmail.com', '123', '455.368.493-44', '1', '', '', '', ''),
(44, 'Mariana', 'mariana@hotmail.com', '123', '455.368.493-44', '2', '', '', '2016-11-30 15:07:34', ''),
(45, 'daniela', 'daniela@daniela.com', '123', '455.368.493-44', '4', '', '', '2016-11-16 14:14:32', ''),
(46, 'joao', 'joao@hotmail.com', '1234', '455.368.493-44', '3', '', '', '2016-11-30 15:09:05', ''),
(47, 'jose', 'jose@jose.com', '123', '455.368.493-44', '1', '', 'NOW()', '', ''),
(48, 'joao 3', 'joao3@hotmail.com', '123', '455.368.493-44', '1', '', '2016-08-27 00:17:00', '2016-10-11 10:55:29', ''),
(49, 'Nobrega', 'nobrega@gmail.com', '123', '680.016.613-85', '1', '', '2016-08-29 11:14:47', '', ''),
(50, 'Artur', 'afbartur@hotmail.com', '123', '455.368.493-44', '1', '', '2016-09-06 16:31:06', '2016-11-28 15:57:56', ''),
(51, 'Artur', 'artur@hotmail.com', '123', '680.016.613-85', '1', '', '2016-09-27 21:24:16', '2016-11-25 09:36:48', ''),
(52, 'Julho', 'lulho@hotmail.com', '1234', '680.016.613-85', '1', '', '2016-09-30 19:06:17', '2016-11-28 16:43:22', ''),
(53, 'Laura', 'laura@hotmail.com', '123', '982.409.650-75', '2', '', '2016-11-07 13:59:44', '2016-11-25 09:37:16', ''),
(54, 'administrador', 'administrador@hotmail.com', '123', '609.826.983-13', '1', '', '2016-11-25 19:31:12', '2016-11-30 08:12:05', 'Artur'),
(55, 'Juliano', 'juliano@hotmail.com', '123', '609.826.983-13', '4', 'AnÃ¡lise e Desenvolvimento de Sistemas', '2016-11-29 11:16:21', '2016-11-29 16:46:32', 'Artur'),
(56, 'Leonardo1', 'leonardo@hotmail.com', '123', '609.826.983-13', '3', '', '2016-11-29 20:52:08', '2016-11-30 14:14:25', 'joao1');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `relreserva`
--

CREATE TABLE IF NOT EXISTS `relreserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `usuario2` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `horarioinicio` varchar(255) NOT NULL,
  `horariomeio` varchar(255) NOT NULL,
  `horariofim` varchar(255) NOT NULL,
  `equipamento` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL,
  `criado` varchar(255) NOT NULL,
  `modificado` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Extraindo dados da tabela `relreserva`
--

INSERT INTO `relreserva` (`id`, `usuario`, `usuario2`, `local`, `horarioinicio`, `horariomeio`, `horariofim`, `equipamento`, `curso`, `turno`, `data`, `situacao`, `criado`, `modificado`, `sala`) VALUES
(1, 'Artur', '', 'Anexo', '12:12', '', '12:12', 'data show', 'Contabilidade', 'Manhã', '2016-11-09', '1', '2016-11-06 19:35:49', '', '01'),
(2, 'Laura', '', 'Anexo', 'ab', 'cd', 'ef', 'caixa de som', 'Contabilidade', 'ManhÃ£', '2016-11-10', '1', '2016-11-07 15:41:33', '', '04'),
(3, 'Artur', '', 'Anexo', 'ab', '', 'NÃ£o selecionado', 'data show Reservado', 'Enfermagem', 'ManhÃ£', '2016-11-14', '1', '2016-11-07 16:21:41', '', '01'),
(4, 'Artur', '', 'Anexo', 'ab', '', 'NÃ£o selecionado', 'data show Livre', 'Enfermagem', 'ManhÃ£', '2016-11-14', '1', '2016-11-07 16:22:12', '', '01'),
(5, 'Artur', '', 'Anexo', 'ab', '', 'ef', 'data show', 'Contabilidade', 'ManhÃ£', '2016-11-14', '1', '2016-11-10 09:39:47', '', '01'),
(6, 'Artur', '', 'Anexo', 'ab', '', 'NÃ£o selecionado', 'Apagador', 'Contabilidade', 'Tarde', '2016-11-18', '1', '2016-11-13 11:32:32', '', '01'),
(7, 'Laura', '', 'Anexo', 'ab', 'cd', 'ef', 'data show', 'Contabilidade', 'Tarde', '2016-11-18', '1', '2016-11-13 11:40:40', '', '01'),
(8, 'Artur', '', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'Contabilidade', 'Tarde', '2016-11-17', '1', '2016-11-13 11:42:48', '', '01'),
(9, 'Artur', '', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Caixa de Som', 'Contabilidade', 'Tarde', '2016-11-17', '1', '2016-11-13 13:16:41', '', '01'),
(10, 'Artur', '', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Caixa de Som', 'Contabilidade', 'ManhÃ£', '2016-11-18', '1', '2016-11-13 13:28:53', '', '01'),
(11, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'Contabilidade', 'ManhÃ£', '2016-11-18', '1', '2016-11-13 15:24:36', '', '02'),
(12, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Data Show', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'Noite', '2016-11-16', '1', '2016-11-16 11:14:37', '', '05'),
(13, 'Artur', 'Artur', 'Anexo', 'NÃ£o selecionado', 'cd', 'NÃ£o selecionado', 'Data Show', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'Noite', '2016-11-16', '1', '2016-11-16 11:20:08', '', '01'),
(14, 'Artur', 'Ana', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Caixa de Som', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'Noite', '2016-11-16', '1', '2016-11-16 15:02:29', '', '02'),
(15, 'Artur', 'joao1', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-16', '1', '2016-11-16 21:04:54', '', '02'),
(16, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 06:55:50', '', '12'),
(17, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 07:37:27', '', '16'),
(18, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 08:06:19', '', '14'),
(19, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'ef', 'Caixa de Som', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 21:53:00', '', '16'),
(20, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:13:50', '', '14'),
(21, 'Artur', 'Moara', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:15:10', '', '15'),
(22, 'Artur', 'Flaviana', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'Fisioterapia', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:22:26', '', '16'),
(23, 'Artur', 'david', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Data Show', 'Fisioterapia', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:23:56', '', '15'),
(24, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'Tarde', '2016-11-20', '1', '2016-11-20 22:27:37', '', '13'),
(25, 'Artur', 'Artur', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-20', '1', '2016-11-20 22:28:43', '', '14'),
(26, 'Artur', 'Marcia', 'Anexo', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-03', '1', '2016-11-20 22:29:39', '', '16'),
(27, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', 'NÃ£o selecionado', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'Tarde', '2016-11-22', '1', '2016-11-22 01:11:06', '', '15'),
(28, 'Artur', 'Artur', 'Principal', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Categoria Tese', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-24', '1', '2016-11-23 20:32:37', '', '01'),
(29, 'Artur', 'Ana', 'Principal', 'ab', 'NÃ£o selecionado', 'NÃ£o selecionado', 'Categoria Tese', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-24', '1', '2016-11-23 20:33:17', '', '01'),
(30, '', '', '', '', '', '', '', '', '', '', '1', '2016-11-24 16:30:23', '', ''),
(31, 'Artur', 'Artur', 'Anexo', 'ab', '', '', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-24 16:36:14', '', '17'),
(32, 'Artur', 'Artur', 'Anexo', '', 'cd', 'ef', 'Apagador', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-24 16:38:12', '', '17'),
(33, 'Artur', 'Artur', 'Anexo', 'ab', '', '', 'Pincel', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-26', '1', '2016-11-24 19:22:46', '', '18'),
(34, 'Artur', 'Artur', '', '', 'cd', '', 'Pincel', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-26', '1', '2016-11-24 19:23:48', '', '18'),
(35, 'Artur', 'Artur', 'Principal', 'ab', '', '', 'Pincel', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-27', '1', '2016-11-24 19:26:10', '', '16'),
(36, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', '', 'Passador de Slides', 'Fisioterapia', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 10:14:36', '', '19'),
(37, 'adriana', 'adriana', 'Anexo', '', 'cd', 'ef', 'Passador de Slides', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 10:24:32', '', '18'),
(38, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', '', 'Cabo VGA', 'Fisioterapia', 'ManhÃ£', '2016-11-26', '1', '2016-11-25 11:29:54', '', '17'),
(39, 'adriana', 'adriana', 'Anexo', '', '', 'ef', 'Cabo VGA', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-26', '1', '2016-11-25 11:31:33', '', '17'),
(40, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-04', '1', '2016-11-25 14:04:58', '', '17'),
(41, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-04', '1', '2016-11-25 14:40:21', '', '19'),
(42, 'adriana', 'adriana', 'Anexo', 'ab', 'cd', 'ef', 'Data Show', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-04', '1', '2016-11-25 14:41:47', '', '19'),
(43, 'Artur', 'Artur', 'Principal', 'ab', 'cd', 'ef', 'Caixa de Som', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 19:29:18', '', '18'),
(44, 'Laura', 'Laura', 'Anexo', 'ab', 'cd', '', 'Cabo VGA', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 19:33:38', '', '18'),
(45, 'Laura', 'Laura', 'Anexo', '', '', 'ef', 'Cabo VGA', 'EducaÃ§Ã£o FÃ­sica', 'ManhÃ£', '2016-11-25', '1', '2016-11-25 19:35:35', '', '18'),
(46, 'Mariana', 'Mariana', 'Anexo', 'ab', 'cd', '', 'Caixa de Som', 'Fisioterapia', 'Tarde', '2016-11-25', '1', '2016-11-25 20:40:49', '', '19'),
(47, 'Artur', 'Artur', 'Anexo', 'ab', 'cd', '', 'Caixa de Som', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-27', '1', '2016-11-27 19:32:27', '', '19'),
(48, 'Artur', 'david', 'Anexo', 'ab', '', 'ef', 'Caixa de Som', 'Fisioterapia', 'ManhÃ£', '2016-11-27', '1', '2016-11-27 23:18:18', '', '18'),
(49, 'joao1', 'joao1', '', 'ab', 'cd', '', 'Apagador', 'ServiÃ§o Social', 'ManhÃ£', '2016-11-30', '1', '2016-11-30 09:27:27', '', '19'),
(50, 'Artur', 'Artur', 'Principal', 'ab', 'cd', '', 'Apagador', 'AnÃ¡lise e Desenvolvimento de Sistemas', 'ManhÃ£', '2016-11-30', '1', '2016-11-30 09:29:31', '', '17'),
(51, 'Artur', 'Artur', 'ClinicaEscola', 'ab', 'cd', '', 'Apagador', 'AnÃ¡lise e Desenvolvimento de Sistemas', '', '30/11/2016', '1', '2016-11-30 09:43:37', '', '18'),
(52, 'Artur', 'Artur', 'Anexo', 'ab', '', '', 'Apagador', 'Fisioterapia', 'ManhÃ£', '30/11/2016', '1', '2016-11-30 09:47:15', '', '16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
