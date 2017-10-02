-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 02/10/2017 às 17:04
-- Versão do servidor: 5.5.57-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `DBCadastro`
--
CREATE DATABASE IF NOT EXISTS `DBCadastro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `DBCadastro`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `TBMercadoria`
--

CREATE TABLE IF NOT EXISTS `TBMercadoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoDaMercadoria` varchar(20) NOT NULL,
  `tipoDaMercadoria` varchar(20) NOT NULL,
  `nomeDaMercadoria` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `tipoDoNegocio` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
