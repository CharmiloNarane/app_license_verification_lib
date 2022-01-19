-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jan-2022 às 10:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `package_purchase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `purchase_code` varchar(150) NOT NULL,
  `website` varchar(150) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `purchase`
--

INSERT INTO `purchase` (`id`, `package_name`, `purchase_code`, `website`, `status`) VALUES
(1, 'charmilo.example.com', 'frw342', 'www.charmilonarane.com', 1),
(5, 'vavdbfw', '64vw56c', 'rvevf dfv', 0),
(6, 'test.example.com', 'test545', 'acoiaon', 1),
(10, 'afsfscr', 'hrthbrfshb', 'bvdfxbfdbdd', 1),
(11, 'fsewfw', 'wefw', 'fwewef', 1),
(12, 'vfvfsfsfesef', 'wevsVsv', 'ecdscsdcsc', 1),
(13, 'nflns', 'efsCscfs', 'ravzbthg', 0),
(14, 'ovoiwbiwe', 'lvfoinad', 'faddcadv.com', 0),
(15, 'com.app1.test', 'faofien43', 'pdcsncos.com', 1),
(17, 'test11', 'test11', 'test11.com', 0),
(18, 'test_echo_result.com', '3t3evws', 'ewfcwec.com', 1),
(19, 'fewfw', 'wfsdcd', 'wfswef', 0),
(20, 'asdasdsa', 'grevsc4', 'ascac', 1),
(21, 'adasd', 'fadad', 'wdadsa', 1),
(22, 'http.android.com', 'frebe44t35', 'efvdsfs.com', 1),
(23, 'test.delete.com', 'ad3ecs3', 'safwrds.com', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purchase_code` (`purchase_code`),
  ADD UNIQUE KEY `package_name` (`package_name`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
