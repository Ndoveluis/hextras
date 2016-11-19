-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2016 às 11:42
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hextras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bonus`
--

CREATE TABLE IF NOT EXISTS `bonus` (
`cod_bonus` int(11) NOT NULL,
  `nome_bonus` varchar(1) NOT NULL,
  `valor_bonus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bonus`
--

INSERT INTO `bonus` (`cod_bonus`, `nome_bonus`, `valor_bonus`) VALUES
(1, 'A', 3000),
(2, 'B', 2500),
(3, 'C', 2000),
(4, 'D', 1500),
(5, 'E', 1000),
(6, 'F', 500),
(7, 'O', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`cod_catg` int(11) NOT NULL,
  `sal_base` int(11) NOT NULL,
  `sal_hora` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cod_catg`, `sal_base`, `sal_hora`) VALUES
(1, 1585, 0.3),
(2, 1250, 0.2),
(3, 900, 0.1),
(4, 700, 0.08),
(5, 300, 0.04),
(6, 100, 0.02);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
`cod_func` int(5) NOT NULL,
  `nome_func` varchar(50) NOT NULL,
  `catg_func` varchar(50) NOT NULL,
  `total_hextras` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cod_func`, `nome_func`, `catg_func`, `total_hextras`) VALUES
(1, 'Pedro', '7', 8),
(2, 'Denilson', '1', 7),
(3, 'Dario', '7', 15),
(4, 'Sheila', '6', 12),
(5, 'Vanessa', '2', 8),
(6, 'Belarmina', '1', 12),
(7, 'Ivan', '3', 0),
(8, 'Juca', '4', 5),
(9, 'Dercio', '2', 6),
(10, 'Sonia', '2', 4),
(11, 'Iva', '4', 1),
(12, 'Joel', '2', 3),
(13, 'Hélder', '2', 6),
(14, 'Osvaldo', '4', 0),
(16, 'Osvaldo M', '4', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_hextra`
--

CREATE TABLE IF NOT EXISTS `funcionario_hextra` (
  `cod_func` int(5) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `total_hextras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario_hextra`
--

INSERT INTO `funcionario_hextra` (`cod_func`, `Mes`, `total_hextras`) VALUES
(1, '9', 2),
(2, '9', 3),
(3, '9', 6),
(4, '9', 5),
(5, '9', 11),
(6, '9', 8),
(7, '9', 2),
(8, '9', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horas_extras`
--

CREATE TABLE IF NOT EXISTS `horas_extras` (
`cod_hextra` int(11) NOT NULL,
  `nome_func` varchar(50) NOT NULL,
  `dia_hextra` date NOT NULL,
  `n_horas` int(11) NOT NULL,
  `nome_org` varchar(50) NOT NULL,
  `descExtra` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horas_extras`
--

INSERT INTO `horas_extras` (`cod_hextra`, `nome_func`, `dia_hextra`, `n_horas`, `nome_org`, `descExtra`) VALUES
(44, 'Ivan', '2016-10-25', 2, 'Petromoc', 'Montar cabos de rede'),
(45, 'Ivan', '2016-10-26', 3, 'Petromoc', 'Montar cabos de rede'),
(48, 'Belarmina', '2016-10-08', 2, 'TV-Cabo', 'Diagnosticar avaria de sinal'),
(49, 'Denilson', '2016-10-13', 5, 'Teledata', 'Diagnosticar avaria de sinal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mes`
--

CREATE TABLE IF NOT EXISTS `mes` (
`cod_mes` int(11) NOT NULL,
  `mes` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mes`
--

INSERT INTO `mes` (`cod_mes`, `mes`) VALUES
(4, 'Abril'),
(8, 'Agosto'),
(12, 'Dezembro'),
(2, 'Fevereiro'),
(1, 'Janeiro'),
(7, 'Julho'),
(6, 'Junho'),
(5, 'Maio'),
(3, 'Março'),
(11, 'Novembro'),
(10, 'Outubro'),
(9, 'Setembro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizacao`
--

CREATE TABLE IF NOT EXISTS `organizacao` (
`cod_org` int(5) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `nome_org` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `organizacao`
--

INSERT INTO `organizacao` (`cod_org`, `descricao`, `nome_org`) VALUES
(1, 'Moçambique Celular', 'Mcel'),
(2, NULL, 'TDM'),
(4, NULL, 'TV-Cabo'),
(5, NULL, 'Teledata'),
(6, NULL, 'XIMA'),
(7, NULL, 'Petromoc'),
(8, 'Universidade Eduardo Mondlane', 'UEM'),
(9, '', 'GOLO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salario_func`
--

CREATE TABLE IF NOT EXISTS `salario_func` (
`recibo` int(11) NOT NULL,
  `nome_func` varchar(50) NOT NULL,
  `bonus` int(11) NOT NULL,
  `total_hextras` int(11) NOT NULL,
  `dias_trab` int(11) NOT NULL,
  `sal_base` int(11) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `salario` int(11) NOT NULL,
  `bonusExtra` int(11) DEFAULT NULL,
  `descBonus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salario_func`
--

INSERT INTO `salario_func` (`recibo`, `nome_func`, `bonus`, `total_hextras`, `dias_trab`, `sal_base`, `mes`, `salario`, `bonusExtra`, `descBonus`) VALUES
(71, 'Vanessa', 2000, 4, 28, 1785, 'Novembro', 57980, 0, ''),
(72, 'Dario', 500, 0, 15, 850, 'Setembro', 12750, 0, ''),
(75, 'Ivan', 1000, 3, 25, 850, 'Novembro', 89250, 65000, 'Despesas de falecimento'),
(91, 'Pedro', 1000, 3, 28, 700, 'Julho', 22600, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `utilizador` varchar(50) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `utilizador`, `senha`) VALUES
(1, 'Isaac', 'sharsan', '123pass'),
(2, 'Cremildo', 'come', '123crime');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
 ADD PRIMARY KEY (`cod_bonus`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`cod_catg`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
 ADD PRIMARY KEY (`cod_func`), ADD UNIQUE KEY `cod_func` (`cod_func`), ADD UNIQUE KEY `nome_func` (`nome_func`);

--
-- Indexes for table `funcionario_hextra`
--
ALTER TABLE `funcionario_hextra`
 ADD UNIQUE KEY `cod_func` (`cod_func`);

--
-- Indexes for table `horas_extras`
--
ALTER TABLE `horas_extras`
 ADD PRIMARY KEY (`cod_hextra`);

--
-- Indexes for table `mes`
--
ALTER TABLE `mes`
 ADD PRIMARY KEY (`cod_mes`), ADD UNIQUE KEY `mes` (`mes`);

--
-- Indexes for table `organizacao`
--
ALTER TABLE `organizacao`
 ADD PRIMARY KEY (`cod_org`), ADD UNIQUE KEY `nome_org` (`nome_org`), ADD UNIQUE KEY `nome_org_2` (`nome_org`);

--
-- Indexes for table `salario_func`
--
ALTER TABLE `salario_func`
 ADD PRIMARY KEY (`recibo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
MODIFY `cod_bonus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY `cod_catg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
MODIFY `cod_func` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `horas_extras`
--
ALTER TABLE `horas_extras`
MODIFY `cod_hextra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `mes`
--
ALTER TABLE `mes`
MODIFY `cod_mes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `organizacao`
--
ALTER TABLE `organizacao`
MODIFY `cod_org` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `salario_func`
--
ALTER TABLE `salario_func`
MODIFY `recibo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
