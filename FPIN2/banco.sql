-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 31/05/2016 às 22:13
-- Versão do servidor: 10.1.10-MariaDB
-- Versão do PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro1`
--

CREATE TABLE `cadastro1` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 NOT NULL,
  `idade` int(11) NOT NULL,
  `usuario` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `curso` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(35) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cadastro1`
--

INSERT INTO `cadastro1` (`idusuario`, `nome`, `idade`, `usuario`, `email`, `senha`, `sexo`, `curso`, `tipo`) VALUES
(22, 'Douglas Cananea', 29, 'cananeadouglas', 'cananeadouglas@gmail.com', '123', 'masc', 'Sistema de Informação', 'Aluno'),
(33, 'Maria', 25, 'maria', 'maria@hotmail.com', '123', 'femi', 'Sistema de InformaÃ§Ã£o', 'Aluno'),
(35, 'Admin', 18, 'admin', 'admin@hotmail.com', '123', 'masc', 'Sistema de InformaÃ§Ã£o', 'Adm'),
(51, 'dany', 26, 'dany', 'dany@dany.com', '123', 'femi', '', 'Coordenador de Evento'),
(43, 'MarcÃ­lio', 30, 'marcilio', 'marcilio@hotmail.com', '123', 'masc', 'Sistema de InformaÃ§Ã£o', 'Coordenador de Curso'),
(42, 'Manoel', 40, 'manoel', 'manoel@hotmail.com', '123', 'masc', 'Engenharia Civil', 'Coordenador de Evento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `nomeevento` varchar(30) NOT NULL,
  `localevento` varchar(30) NOT NULL,
  `layoutevento` int(11) NOT NULL,
  `diaevento` date NOT NULL,
  `descricao` varchar(90) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`idevento`, `nomeevento`, `localevento`, `layoutevento`, `diaevento`, `descricao`, `idusuario`) VALUES
(9, 'JAVA Man', 'IFal', 0, '2016-06-01', 'localizaÃ§Ã£o no ifal. centro de informÃ¡tica', 42),
(8, 'CSS Day New', 'Ifal', 0, '2016-05-02', 'diretor: falcÃ£o\r\nJuiz: Atriz', 42),
(10, 'C++ course', 'FAT', 0, '2016-12-07', 'organizado....', 42),
(11, 'Haskel Programing', 'ifal', 0, '2017-01-01', 'curso bÃ¡sico de haskel', 42);

-- --------------------------------------------------------

--
-- Estrutura para tabela `inscreve_evento`
--

CREATE TABLE `inscreve_evento` (
  `inscricao` int(11) NOT NULL,
  `idevento` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `participou` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `inscreve_evento`
--

INSERT INTO `inscreve_evento` (`inscricao`, `idevento`, `idusuario`, `participou`) VALUES
(1, 10, 33, 'True'),
(2, 8, 33, '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro1`
--
ALTER TABLE `cadastro1`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`);

--
-- Índices de tabela `inscreve_evento`
--
ALTER TABLE `inscreve_evento`
  ADD PRIMARY KEY (`inscricao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cadastro1`
--
ALTER TABLE `cadastro1`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `inscreve_evento`
--
ALTER TABLE `inscreve_evento`
  MODIFY `inscricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
