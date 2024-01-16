-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/01/2024 às 22:38
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque_open`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `ID_Produto` int(6) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Qntd` varchar(4) NOT NULL,
  `Peso` varchar(10) NOT NULL,
  `Fornecedor` varchar(30) NOT NULL,
  `Lote` varchar(10) NOT NULL,
  `Nota_fiscal` varchar(9) NOT NULL,
  `Data_validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`ID_Produto`, `Marca`, `Modelo`, `Qntd`, `Peso`, `Fornecedor`, `Lote`, `Nota_fiscal`, `Data_validade`) VALUES
(1, 'Red Bull', 'Energy Drink', '128', '473ml', 'JMoreira Comercial de Alimento', '2032121032', '685406098', '0000-00-00'),
(2, 'Downy', 'Amaciante Concentrado', '64', '1,5l', 'JMoreira Comercial de Alimento', '9350215249', '707607827', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID_Produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `ID_Produto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
