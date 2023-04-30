-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2018 às 04:46
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `preco` double(5,2) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `preco`, `imagem`) VALUES
(1, 'salon line-brilho  maximo', 100, 25.99, 'carrinho1.jpg'),
(2, 'Salon line - hidrataçao profunda (Azul) ', 50, 25.99, 'carrinho2.jpg'),
(3, 'Tutanat Bang - Se joga nos cachos', 50, 30.50, ''),
(4, 'to de cacho- crespo divino', 103, 16.90, ''),
(5, 'salon line - definiçao intensa', 79, 25.99, ''),
(6, 'salon line - ativador de cachos queratina', 200, 15.99, ''),
(7, 'Salon line - kit SOS bomba', 103, 50.99, ''),
(8, 'Salon line - kit SOS bomba transiçao capilar', 50, 50.99, ''),
(9, 'NOVEX meus cachos de cinema - creme de pentear', 100, 15.99, ''),
(10, 'SKAFE K KERAFORM creme de pentear', 50, 10.50, ''),
(11, 'Salon line sos cachos nutritivo ativador de cachos', 50, 15.50, ''),
(12, 'seda - cachos perfeitos e definidos', 100, 8.99, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Normal (1) e Administrador (2)',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `usuario`, `senha`, `email`, `sexo`, `nivel`, `ativo`, `cadastro`) VALUES
(5, 'Administrador Teste', '', 'admin', 'admin', 'admin@demo.com.br', '', 2, 1, '2014-10-06 16:15:46'),
(4, 'Usuário Teste', '', 'demo', 'demo', 'usuario@demo.com.br', '', 1, 1, '2014-10-06 16:15:46'),
(6, 'Ana', 'maria', 'ana', '123', 'ana@maria.com', 'F', 1, 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `niveis` (`nivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
