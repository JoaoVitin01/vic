-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2024 às 19:18
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bibliotech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admusuario`
--

CREATE TABLE `admusuario` (
  `id_admusuario` int(11) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `senha` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admusuario`
--

INSERT INTO `admusuario` (`id_admusuario`, `nome`, `email`, `senha`) VALUES
(1, 'Franciene', 'fran123@gmail.com', '$2y$10$t7QADbh5.M6zl2cVGzSnZ.M/tP9hVMS6Gen3a3xeCQLxBf4Pse6AO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `cod_rigistro` int(11) NOT NULL,
  `nomealuno` varchar(65) NOT NULL,
  `seriealuno` varchar(65) NOT NULL,
  `cursoaluno` varchar(65) NOT NULL,
  `livro` varchar(64) NOT NULL,
  `Rtombo` int(11) DEFAULT NULL,
  `datemprestimo` date DEFAULT NULL,
  `datdevolucao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`cod_rigistro`, `nomealuno`, `seriealuno`, `cursoaluno`, `livro`, `Rtombo`, `datemprestimo`, `datdevolucao`) VALUES
(8, 'João Vitor Ferreira Alvs teste excluir', '3d', 'Desenvolviento de Sistemas', 'harry potter', 435235, '2024-06-11', '2024-06-25'),
(9, 'Maria Claa Silva \"teste editar\"', '3d', 'Desenvolvimento de sistemas', 'A seleção', 75345456, '2024-06-11', '2024-06-20'),
(10, 'iasmin monteiro', '3d', 'Desenvolviento de Sistemas', 'eu e esse meu coração', 32456767, '2024-06-12', '2024-06-28'),
(11, 'jhonata lima ', '1c', 'informatica', 'a cabana', 3772498, '2024-06-11', '2024-06-26'),
(12, 'letycia oliveira', '3d', 'Desenvolviento de Sistemas', 'assim que acaba', 46876846, '2024-06-11', '2024-06-24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admusuario`
--
ALTER TABLE `admusuario`
  ADD PRIMARY KEY (`id_admusuario`);

--
-- Índices para tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cod_rigistro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admusuario`
--
ALTER TABLE `admusuario`
  MODIFY `id_admusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `cod_rigistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
