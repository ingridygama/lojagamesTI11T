-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2021 às 19:13
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojagames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `codCli` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `cpfCli` char(14) NOT NULL,
  `foneCli` char(12) NOT NULL,
  `datanasCli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionarios`
--

CREATE TABLE `tbfuncionarios` (
  `codFun` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeFun` varchar(50) NOT NULL,
  `funcaoFun` varchar(10) NOT NULL,
  `foneFun` char(12) NOT NULL,
  `datanasFun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogos`
--

CREATE TABLE `tbjogos` (
  `codJog` int(4) NOT NULL,
  `nomeJog` varchar(30) NOT NULL,
  `tamanhoJog` char(10) NOT NULL,
  `precoJog` decimal(6,2) NOT NULL,
  `requisitosJog` varchar(500) NOT NULL,
  `consoleJog` varchar(100) NOT NULL,
  `classificacaoJog` varchar(10) NOT NULL,
  `avaliacaoJog` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbjogos`
--

INSERT INTO `tbjogos` (`codJog`, `nomeJog`, `tamanhoJog`, `precoJog`, `requisitosJog`, `consoleJog`, `classificacaoJog`, `avaliacaoJog`) VALUES
(1, 'Call of Duty Black Ops 2', '2 gb', '54.00', 'Processador: Intel Core 2 Duo E8200 2.66 GHz ou AMD Phenom X3 8750 2.4 GHz. Memória RAM: 2 GB para sistemas 32-bits ou 4 GB para sistemas 64-bits. Placa de vídeo: NVIDIA GeForce 8800GT 512 MB ou ATI R', 'Xbox, Playstation e ', '18 anos', 5),
(11, 'Barbie ', '102', '70.00', '1gb', 'xbox', '2', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedidos`
--

CREATE TABLE `tbpedidos` (
  `codPed` int(4) NOT NULL,
  `codCliFK` int(11) NOT NULL,
  `codFunFK` int(4) NOT NULL,
  `codJogFK` int(4) NOT NULL,
  `qtdJogPed` int(6) NOT NULL,
  `totalJogPed` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `codUsu` int(4) NOT NULL,
  `emailUsu` varchar(60) NOT NULL,
  `senhaUsu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`codCli`),
  ADD KEY `relacaoCodUsu_CodUsuFK` (`codUsuFK`);

--
-- Índices para tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD PRIMARY KEY (`codFun`),
  ADD KEY `relacapCodUsuFK_CodUsuFK2` (`codUsuFK`);

--
-- Índices para tabela `tbjogos`
--
ALTER TABLE `tbjogos`
  ADD PRIMARY KEY (`codJog`);

--
-- Índices para tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD PRIMARY KEY (`codPed`),
  ADD KEY `relacaoCodCli_CodCliFK` (`codCliFK`),
  ADD KEY `relacaoCodFun_CodFunFK` (`codFunFK`),
  ADD KEY `relacaoCodJog_CodJogFK` (`codJogFK`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `codCli` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  MODIFY `codFun` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbjogos`
--
ALTER TABLE `tbjogos`
  MODIFY `codJog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  MODIFY `codPed` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `codUsu` int(4) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD CONSTRAINT `relacaoCodUsu_CodUsuFK` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuario` (`codUsu`);

--
-- Limitadores para a tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD CONSTRAINT `relacapCodUsuFK_CodUsuFK2` FOREIGN KEY (`codUsuFK`) REFERENCES `tbfuncionarios` (`codFun`);

--
-- Limitadores para a tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD CONSTRAINT `relacaoCodCli_CodCliFK` FOREIGN KEY (`codCliFK`) REFERENCES `tbclientes` (`codCli`),
  ADD CONSTRAINT `relacaoCodFun_CodFunFK` FOREIGN KEY (`codFunFK`) REFERENCES `tbfuncionarios` (`codFun`),
  ADD CONSTRAINT `relacaoCodJog_CodJogFK` FOREIGN KEY (`codJogFK`) REFERENCES `tbjogos` (`codJog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
