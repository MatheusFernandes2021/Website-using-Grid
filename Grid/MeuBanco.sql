-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Ago-2022 às 18:10
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `katchau`
--
CREATE DATABASE IF NOT EXISTS `MeuBanco` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `MeuBanco`;

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `datanasc` date NOT NULL,
  `endereco` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `telefone` varchar(11) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `clientes`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
