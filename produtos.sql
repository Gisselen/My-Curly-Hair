-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2018 às 12:03
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
(26, 'Novex Nutrire - Meus Cachos Naturais 2A,2B,2C 300ml', 50, 28.50, ''),
(27, 'Novex Socorro Todos os Cachos - Seu Poder de Volta 500ml', 200, 11.90, ''),
(30, 'Novex Nutrire - Leave-In Meus Cachos Soltos 500g', 100, 11.90, ''),
(31, 'Novex Nutrire - Leave-In Meus Cachos Suaves 500g', 200, 11.90, ''),
(32, 'Novex Nutrire-Creme de Peantear Restaura que eu Gamo 700g', 100, 11.90, ''),
(33, 'Novex Nutrire-Creme de Peantear Toma que o Brilho é Teu 700g', 200, 11.90, ''),
(34, 'Kit Novex - Memorizador Cachos', 100, 25.90, ''),
(35, 'Kit Novex - Óleo de Coco', 200, 25.90, ''),
(36, 'Kit Novex - Tudo de Bom', 100, 25.90, ''),
(37, 'Kit Novex - Cachos de Cinema', 200, 25.90, ''),
(38, 'Kit Novex-Óleo de Argan Vitay', 50, 25.90, ''),
(39, 'Kit Novex - Meus Cachos Vitay', 200, 25.90, ''),
(40, 'Kit Novex - O Poderoso Carvão', 100, 25.90, ''),
(41, 'Kit Novex - Broto de Bambu', 200, 25.90, ''),
(42, 'Novex - TNT Bomba 1kg', 50, 15.20, ''),
(43, 'Novex - Oleo de Argan 1kg', 200, 15.20, ''),
(44, 'Novex - O Poderoso Carvão 1kg', 50, 15.20, ''),
(45, 'Novex-multinutrição integrada 1kg', 200, 15.20, ''),
(46, 'Novex-Mix Restaurador 1kg', 50, 15.20, ''),
(47, 'Novex - Cabelos de Princesa 1kg', 200, 15.20, ''),
(48, 'Novex - Memorizador Cachos 1Kg', 50, 15.20, ''),
(49, 'Novex -  Santo Black Poderoso 1Kg', 200, 15.20, ''),
(50, 'Novex -  Bionutrição Intensa 1Kg', 50, 15.20, ''),
(51, 'Novex -  Azeite de Oliva 1kg', 200, 15.20, ''),
(52, 'Novex -  Iogurte Grego 1kg', 50, 15.20, ''),
(53, 'Novex -  Pra Bombar 1kg', 200, 15.20, ''),
(54, 'Creme para pentear  - Bilho Máximo 1Kg', 50, 19.90, ''),
(55, 'Creme para pentear  - Hidratação Profunda 1Kg', 200, 19.90, ''),
(56, 'Creme para pentear  - Nutrição Reparadora 1Kg', 50, 19.90, ''),
(57, 'Creme para pentear  - Definição Intensa 1Kg', 200, 19.90, ''),
(58, 'Creme para pentear  - Cachos dos Sonhos 500ml', 50, 11.90, ''),
(59, 'Creme para pentear - Crespo Divino 300ml', 200, 11.90, ''),
(60, 'Creme para pentear - Crespíssimo Poderoso 4ABC 500ml', 50, 11.90, ''),
(61, 'Creme para pentear - Só tipo2 Ondulados Cheio de Onda 300ml', 200, 11.90, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
