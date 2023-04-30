-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2018 às 02:48
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

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
(7, 'Salon line - kit SOS bomba Explosão de Crescimento', 103, 120.50, ''),
(8, 'Salon line - kit SOS bomba transiçao capilar', 50, 120.50, ''),
(9, 'NOVEX meus cachos de cinema - creme de pentear', 100, 15.99, ''),
(10, 'SKAFE K KERAFORM creme de pentear', 50, 10.50, ''),
(11, 'Salon line sos cachos nutritivo ativador de cachos', 50, 15.50, ''),
(12, 'seda - cachos perfeitos e definidos', 100, 8.99, ''),
(13, 'Skafe-Kit Bomba e Vitaminas', 100, 115.99, ''),
(14, 'Kit Salon line 3', 100, 45.50, ''),
(15, 'NOVEX-Oléo de Argan', 100, 10.50, ''),
(16, 'Yamasterol Clássico', 100, 9.90, ''),
(17, 'Mascara de HIdratação - Olive Oil', 103, 19.90, ''),
(18, 'Máscara Capilar CANTU', 50, 15.60, ''),
(19, 'Kit Salon Line - Tratamento Para Abalar!', 100, 30.50, ''),
(20, 'Novex - Creme de Hidratação Pra Bombar! 1Kg', 50, 25.99, ''),
(21, 'Salon Line - Kit Maria Natureza 350ml', 60, 25.99, ''),
(22, 'Salon Line - Kit SOS Cachos Kids+Máscara de Hidratação', 50, 120.90, ''),
(23, 'Novex Creme de Hidratação - O Poderoso Carvão 1kg', 105, 15.20, ''),
(24, 'Novex Nutrire - Óleo de Argan 300ml', 50, 11.90, ''),
(25, 'Novex Nutrire - Meus Cachos Soltos com Proteção Solar 300ml', 105, 11.90, ''),
(26, 'Novex Nutrire - Meus Cachos Naturais 2A,2B,2C 300ml', 50, 11.90, ''),
(27, 'Novex Socorro Todos os Cachos - Seu Poder de Volta 500ml', 50, 11.90, ''),
(30, 'Novex Nutrire - Leave-In Meus Cachos Soltos 500g', 50, 11.90, ''),
(31, 'Novex Nutrire - Leave-In Meus Cachos Suaves 500g', 50, 11.90, ''),
(32, 'Novex Nutrire-Creme de Peantear Restaura que eu Gamo 700g', 50, 11.90, ''),
(33, 'Novex Nutrire-Creme de Peantear Toma que o Brilho é Teu 700g', 50, 11.90, ''),
(34, 'Kit Novex - Memorizador Cachos', 50, 25.90, ''),
(35, 'Kit Novex - Óleo de Coco', 50, 25.90, ''),
(36, 'Kit Novex - Tudo de Bom', 50, 25.90, ''),
(37, 'Kit Novex - Cachos de Cinema', 50, 25.90, ''),
(38, 'Kit Novex-Óleo de Argan Vitay', 50, 25.90, ''),
(39, 'Kit Novex - Meus Cachos Vitay', 50, 25.90, ''),
(40, 'Kit Novex - O Poderoso Carvão', 50, 25.90, ''),
(41, 'Kit Novex - Broto de Bambu', 50, 25.90, ''),
(42, 'Novex - TNT Bomba 1kg', 50, 15.20, ''),
(43, 'Novex - Oleo de Argan 1kg', 50, 15.20, ''),
(44, 'Novex - O Poderoso Carvão 1kg', 50, 15.20, ''),
(45, 'Novex-multinutrição integrada 1kg', 50, 15.20, ''),
(46, 'Novex-Mix Restaurador 1kg', 50, 15.20, ''),
(47, 'Novex - Cabelos de Princesa 1kg', 50, 15.20, ''),
(48, 'Novex - Memorizador Cachos 1Kg', 50, 15.20, ''),
(49, 'Novex - Santo Black Poderoso 1Kg\r\n', 50, 15.20, ''),
(50, 'Novex - Bionutrição Intensa 1Kg', 50, 15.20, ''),
(51, 'Novex - Azeite de Oliva 1kg', 50, 15.20, ''),
(52, 'Novex - Iogurte Grego 1kg', 50, 15.20, ''),
(53, 'Novex - Pra Bombar 1kg', 50, 15.20, ''),
(54, 'Creme para pentear - Bilho Máximo 1Kg', 50, 19.90, ''),
(55, 'Creme para pentear - Hidratação Profunda 1Kg', 50, 19.90, ''),
(56, 'Creme para pentear - Nutrição Reparadora 1Kg', 50, 19.90, ''),
(57, 'Creme para pentear - Definição Intensa 1Kg', 50, 19.90, ''),
(58, 'Creme para pentear - Cachos dos Sonhos 500ml', 50, 11.90, ''),
(59, 'Creme para pentear - Crespo Divino 300ml', 50, 10.50, ''),
(60, 'Creme para pentear - Crespíssimo Poderoso 4ABC 500ml', 50, 11.90, ''),
(61, 'Creme para pentear - Só tipo2 Ondulados Cheio de Onda 300ml', 50, 11.90, ''),
(62, 'Kit - Cachos SOS', 50, 19.90, ''),
(63, 'Kit - Cachos SOS de Coco', 50, 19.90, ''),
(64, 'Kit - Transição Capilar', 50, 19.90, ''),
(65, 'Kit - Show de Limpeza!', 50, 19.90, ''),
(66, 'Kit - Explosão de Crescimento', 50, 11.90, ''),
(67, 'Kit-Cachos ressecados Jamais e Desmaia Cachos', 50, 11.90, ''),
(68, 'Kit - Explosão de Crescimento', 50, 11.90, ''),
(69, 'Kit - Salon Line Babosa', 50, 11.90, ''),
(70, 'Máscara KIDS - Legal é para Hidratar 500g', 50, 14.90, ''),
(71, 'Máscara TodeCacho - Já Quero! 500g', 50, 14.90, ''),
(72, 'Máscara TodeCacho - Hidratação Poderosa! 500g', 50, 14.50, ''),
(73, 'Máscara TodeCacho - Meu Pudinzinho de Coco 500g', 50, 15.99, ''),
(74, 'Salon Line Máscara Hidratante SOS Bomba 500g', 50, 25.90, ''),
(75, 'Máscara TodeCacho - Hidratação Poderosa! 1Kg', 50, 32.89, ''),
(76, 'Máscara de Maionese - Uma Nutrição Power! 500g', 50, 19.90, ''),
(77, 'Máscara Veganese - Maionese Vegana de Coco 500g', 50, 13.99, ''),
(78, 'Crescenew-Máscara Afro-pós progressiva 500g', 50, 29.90, ''),
(79, 'Ámavia Cacho Sublime-Oléo de Argan+Colagéno 370g', 50, 64.83, ''),
(80, 'ForeverLiss-Cachos Máscara Antifrizz+Definição 250g', 50, 22.90, ''),
(81, 'HidraBell - Cachos Perfeitos Óleo de Coco', 50, 35.49, ''),
(82, 'HidraBell-Máscara de reparação Divino Cachos 500ml', 50, 37.99, ''),
(83, 'Lola Cosméticos - Meu Cacho Minha Vida 330g\r\n', 50, 39.90, ''),
(84, 'Salon Line - Máscara Hidratação Milagrosa! 500g', 50, 15.99, ''),
(85, 'Silicon Mix - Tratamento Bambu Hidratação Nutritiva 225g', 50, 35.90, ''),
(86, 'Kit Salon Line de Coco', 50, 120.50, ''),
(87, 'Kit SOS Bomba de Vitaminas', 50, 75.90, ''),
(88, 'Kit SOS Bomba de Vitaminas', 50, 120.50, ''),
(89, 'Kit Transição Capilar', 50, 120.90, ''),
(90, 'Kit Salon Line SOS Cachos Kids', 50, 120.90, ''),
(91, 'Kit Tratamento Para Abalar!', 50, 75.90, ''),
(92, 'Kit SOS Bomba de Vitaminas Liberado', 50, 75.90, ''),
(93, 'Kit Salon Line Mãe e Filha\r\n', 50, 120.90, ''),
(94, 'Tangle Teezer Rosa', 50, 65.50, ''),
(95, 'Tangle Teezer Rosa Claro', 50, 65.50, ''),
(96, 'Tangle Teezer Lilás', 50, 65.50, ''),
(97, 'Tangle Teezer Roxa', 50, 65.50, ''),
(98, 'Tangle Teezer Preta', 50, 65.50, ''),
(99, 'Tangle Teezer The Ultimate cor Rosa', 50, 102.90, ''),
(100, 'Tangle Teezer The Ultimate cor Preta', 50, 102.90, ''),
(101, 'Pente Garfo Santa Clara', 50, 4.66, ''),
(102, 'Pente Garfo de Madeira Anti-estático', 50, 4.66, ''),
(103, 'Esponja Modeladora para Nudreds', 50, 25.90, ''),
(104, 'Pomada Capilar + Pente Garfo', 50, 45.90, ''),
(105, 'Skala Expert Oleo De Coco Vegano 1000g\r\n', 50, 17.50, ''),
(106, 'SKALA EXPERT BOMBA DE VITAMINAS COM BANANA', 50, 17.50, ''),
(107, 'SKALA EXPERT Skala Divino Potão Creme 1kg', 50, 17.50, ''),
(108, 'SKALA EXPERT Mais Cachos Vegano 1kg', 50, 17.50, ''),
(109, 'Kit Be Happy - Shampoo,Condicionador e Creme de Pentear', 50, 108.83, ''),
(110, 'Kit Meu Cacho Minha Vida - Shampoo e Condicionador', 50, 65.80, ''),
(111, 'Kit Curly Wurly - Shampoo,Condicionador e Máscara\r\n', 50, 119.90, ''),
(112, 'Kit Creoula - Shampoo,Condicionador e Creme de Pentear', 50, 89.90, ''),
(113, 'Kit Morte Súbita - Shampoo+Condicionador', 50, 60.00, ''),
(114, 'Kit Creoula - Shampoo,Condicionador e Máscara', 50, 122.00, ''),
(115, 'Kit Volumão - Shampoo,Condicionador e Spray', 50, 175.90, ''),
(116, 'Kit Morte Súbita Reparação Total- Shampoo Sólido,Máscara e Spray\r\n', 50, 239.98, ''),
(117, 'Kit Tarja Preta - Queratina Liquida+Máscara Restauradora', 50, 68.90, ''),
(118, 'Kit Rebelde com Causa - Shampoo e Máscara', 50, 66.00, ''),
(119, 'Kit Ultra Baphônico - Cronograma Capilar + Cofrinho', 50, 58.50, '');

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
(6, 'Ana', 'maria', 'ana', '123', 'ana@maria.com', 'F', 1, 1, '0000-00-00 00:00:00'),
(7, '', '', '', '', '', '', 1, 1, '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
