-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Fev-2022 às 19:49
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cgmsystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adminfornecedor`
--

DROP TABLE IF EXISTS `adminfornecedor`;
CREATE TABLE IF NOT EXISTS `adminfornecedor` (
  `IdAdmin` int(4) NOT NULL,
  `IdFornecedor` int(4) NOT NULL,
  PRIMARY KEY (`IdAdmin`,`IdFornecedor`),
  KEY `fk_Forn` (`IdFornecedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `IdAdmin` int(1) NOT NULL AUTO_INCREMENT,
  `Login` varchar(15) NOT NULL,
  `Senha` varchar(8) NOT NULL,
  `Tipo` int(1) NOT NULL,
  PRIMARY KEY (`IdAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`IdAdmin`, `Login`, `Senha`, `Tipo`) VALUES
(1, 'Gabs', 'king', 1),
(2, 'Bode', 'livro', 1),
(3, 'Ban', 'miranha', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica_produto`
--

DROP TABLE IF EXISTS `caracteristica_produto`;
CREATE TABLE IF NOT EXISTS `caracteristica_produto` (
  `IdCP` int(4) NOT NULL AUTO_INCREMENT,
  `IdProduto` int(4) NOT NULL,
  `Valor_Bruto` float NOT NULL,
  `Valor_Vendido` float NOT NULL,
  `Quantidade` int(2) NOT NULL,
  `Tamanho` int(2) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  PRIMARY KEY (`IdCP`),
  KEY `fk_CPprod` (`IdProduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `IdCliente` int(4) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `custo_extra`
--

DROP TABLE IF EXISTS `custo_extra`;
CREATE TABLE IF NOT EXISTS `custo_extra` (
  `IdCE` int(4) NOT NULL AUTO_INCREMENT,
  `IdProduto` int(4) NOT NULL,
  `Valor_Sacola` float NOT NULL,
  `Valor_Tag` float NOT NULL,
  `Valor_Gasolina` float NOT NULL,
  `Valor_Brinde` float NOT NULL,
  PRIMARY KEY (`IdCE`),
  KEY `fk_CEprod` (`IdProduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `divida`
--

DROP TABLE IF EXISTS `divida`;
CREATE TABLE IF NOT EXISTS `divida` (
  `IdDivida` int(4) NOT NULL AUTO_INCREMENT,
  `IdProduto` int(4) NOT NULL,
  `IdCliente` int(4) NOT NULL,
  `Preco_Unit` float NOT NULL,
  PRIMARY KEY (`IdDivida`),
  KEY `fk_DivProd` (`IdProduto`),
  KEY `fk_Divcliente` (`IdCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `IdEndereco` int(4) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(4) NOT NULL,
  `Logradouro` varchar(20) NOT NULL,
  `Numero` varchar(5) NOT NULL,
  `Bairro` varchar(20) NOT NULL,
  `Complemento` varchar(100) NOT NULL,
  `CEP` int(8) NOT NULL,
  PRIMARY KEY (`IdEndereco`),
  KEY `fk_EndCliente` (`IdCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `IdFornecedor` int(4) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`IdFornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`IdFornecedor`, `Nome`, `Descricao`) VALUES
(1, 'Shopee', 'Loja on-line de tudo'),
(2, 'Shein', 'Loja do gringo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `IdFuncionario` int(4) NOT NULL AUTO_INCREMENT,
  `Login` varchar(15) NOT NULL,
  `Senha` varchar(8) NOT NULL,
  `Tipo` int(1) NOT NULL,
  PRIMARY KEY (`IdFuncionario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `IdProduto` int(4) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) NOT NULL,
  `Imagem` varchar(100) NOT NULL,
  `Descricao` varchar(255) DEFAULT NULL,
  `IdFornecedor` int(4) NOT NULL,
  PRIMARY KEY (`IdProduto`),
  KEY `fk_ProdForn` (`IdFornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`IdProduto`, `Nome`, `Imagem`, `Descricao`, `IdFornecedor`) VALUES
(1, 'Blusa', 'kamsm', 'Blusa legal só que não', 1),
(2, 'Brusinha', 'asas', 'Brusinha feia', 1),
(3, 'Vestido', 'asas', 'Vestido justo', 1),
(4, 'Saia curta colegial', 'asas', 'Curta e justa', 2),
(6, 'Short', 'sdasd', 'Short feio', 2),
(7, 'asda', 'asdas', 'asda', 2),
(8, 'asdas', 'asdas', 'asdasd', 2),
(9, 'asndlja', 'asdas', 'asdas', 1),
(10, 'Irregular', 'askbasb', 'Preto e feio', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

DROP TABLE IF EXISTS `relatorio`;
CREATE TABLE IF NOT EXISTS `relatorio` (
  `IdRelatorio` int(4) NOT NULL AUTO_INCREMENT,
  `IdVenda` int(4) NOT NULL,
  `IdCP` int(4) NOT NULL,
  `Data` date NOT NULL,
  `Lucro` float NOT NULL,
  PRIMARY KEY (`IdRelatorio`),
  KEY `fk_RelVenda` (`IdVenda`),
  KEY `fk_RelCP` (`IdCP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

DROP TABLE IF EXISTS `telefone`;
CREATE TABLE IF NOT EXISTS `telefone` (
  `IdTelefone` int(4) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(4) NOT NULL,
  `Telefone` int(12) DEFAULT NULL,
  `Celular` int(12) NOT NULL,
  PRIMARY KEY (`IdTelefone`),
  KEY `fk_EndCliente` (`IdCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `IdVenda` int(4) NOT NULL AUTO_INCREMENT,
  `IdProduto` int(4) NOT NULL,
  `IdCliente` int(4) NOT NULL,
  `Desconto_Produto` float NOT NULL,
  `Entrega` tinyint(1) NOT NULL,
  `Forma_Pagamento` varchar(15) NOT NULL,
  PRIMARY KEY (`IdVenda`),
  KEY `fk_VendProd` (`IdProduto`),
  KEY `fk_VenCliente` (`IdCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
