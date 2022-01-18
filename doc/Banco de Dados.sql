-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2021 às 13:04
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(10) UNSIGNED NOT NULL,
  `nome_aluno` varchar(100) DEFAULT NULL,
  `email_aluno` varchar(100) DEFAULT NULL,
  `fone_aluno` varchar(20) DEFAULT NULL,
  `rgm_aluno` varchar(10) DEFAULT NULL,
  `data_nasc_aluno` date DEFAULT NULL,
  `genero_aluno` varchar(10) DEFAULT NULL,
  `end_aluno` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `email_aluno`, `fone_aluno`, `rgm_aluno`, `data_nasc_aluno`, `genero_aluno`, `end_aluno`) VALUES
(3, 'Guilherme Rodrigues Ferreira', 'guilhermer024@gmail.com', '61993140312', '3476856', '2003-01-13', 'Masculino', 'Quadra 4 Conj 4i casa 41 - Jardim Roriz'),
(5, 'Brenna Rodrigues Ferreira', 'brennarodrigues@gmail.com', '96060967', '65438987', '1999-02-13', 'Feminino', 'Q 1 conj 14 lote 25'),
(8, 'Francilene Rodrigues da silva', 'francilene.ferrera@gmail.com', '995673224', '8347358465', '1976-09-08', 'Feminino', 'Q 6 conj i lote 25 Vila buritis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendente`
--

CREATE TABLE `atendente` (
  `id_atendente` int(10) UNSIGNED NOT NULL,
  `biblioteca_id_biblioteca` int(10) UNSIGNED NOT NULL,
  `nome_atendente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendente`
--

INSERT INTO `atendente` (`id_atendente`, `biblioteca_id_biblioteca`, `nome_atendente`) VALUES
(12, 7, 'Lucas'),
(13, 4, 'Gabriel Lucas'),
(14, 1, 'Mariana'),
(15, 8, 'Pedro Junior'),
(16, 8, 'Thamilly');

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id_biblioteca` int(10) UNSIGNED NOT NULL,
  `nome_biblioteca` varchar(100) DEFAULT NULL,
  `end_biblioteca` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biblioteca`
--

INSERT INTO `biblioteca` (`id_biblioteca`, `nome_biblioteca`, `end_biblioteca`) VALUES
(1, 'Biblioteca Mário de Andrade', 'São Paulo - SP'),
(2, 'Getúlio Vargas', 'Avenida de São paulo - SP'),
(3, 'Campos Planaltina UNB', 'Planaltina - DF'),
(4, 'Biblioteca Nacional de Brasília, Leonel de Moura Brizola', 'Esplanada Dos Ministérios, Brasília - DF'),
(7, 'Biblioteca Nacional de Brasília', 'Setor Cultural da República, Área Cívica - Brasília -DF'),
(8, 'Biblioteca São sebastião', 'São sebastião, Brasília - DF'),
(9, 'Biblioteca Bras cuba ', 'Rua da cultura, são paulo - SP ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `nome_categoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(4, 'Ação'),
(5, 'Ficção cientifica'),
(6, 'Comedia'),
(7, 'conto de fada'),
(9, 'Fantasia'),
(10, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(10) UNSIGNED NOT NULL,
  `categoria_id_categoria` int(10) UNSIGNED NOT NULL,
  `titulo_livro` varchar(100) DEFAULT NULL,
  `autor_livro` varchar(100) DEFAULT NULL,
  `editora_livro` varchar(45) DEFAULT NULL,
  `edicao_livro` char(3) DEFAULT NULL,
  `localidade_livro` varchar(20) DEFAULT NULL,
  `ano_livro` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `categoria_id_categoria`, `titulo_livro`, `autor_livro`, `editora_livro`, `edicao_livro`, `localidade_livro`, `ano_livro`) VALUES
(6, 0, 'Admirável mundo novo', 'Aldous Leonard Huxley ', 'Biblioteca Azul', '1', 'Brasília - DF', 2014);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(10) UNSIGNED NOT NULL,
  `aluno_id_aluno` int(10) UNSIGNED NOT NULL,
  `livro_id_livro` int(10) UNSIGNED NOT NULL,
  `atendente_id_atendente` int(10) UNSIGNED NOT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `aluno_id_aluno`, `livro_id_livro`, `atendente_id_atendente`, `data_emprestimo`, `data_devolucao`) VALUES
(8, 5, 6, 14, '2021-12-14', '2022-01-20'),
(10, 3, 6, 12, '2021-12-02', '2022-01-04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Índices para tabela `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`id_atendente`),
  ADD KEY `atendente_FKIndex1` (`biblioteca_id_biblioteca`);

--
-- Índices para tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id_biblioteca`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `livro_FKIndex1` (`categoria_id_categoria`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `atendente`
--
ALTER TABLE `atendente`
  MODIFY `id_atendente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id_biblioteca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
