-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2025 às 20:51
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `investimentos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `investimentos`
--

CREATE TABLE `investimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` enum('Título','Fundo','Ação') NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `investimentos`
--

INSERT INTO `investimentos` (`id`, `nome`, `tipo`, `data`, `valor`) VALUES
(1, 'Fundo x', 'Ação', '2025-06-01', '1111.11'),
(2, 'Fundo y', 'Fundo', '2025-06-02', '2222.22'),
(3, 'Fundo z', 'Título', '2025-06-03', '3333.33');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `investimentos`
--
ALTER TABLE `investimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `investimentos`
--
ALTER TABLE `investimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
