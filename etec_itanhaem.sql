-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Dez-2018 às 14:14
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_etec_itanhaem`
--
CREATE DATABASE IF NOT EXISTS `db_etec_itanhaem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_etec_itanhaem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `cd_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nm_aluno` varchar(220) NOT NULL,
  `nr_rm` char(5) NOT NULL,
  `nm_login` varchar(220) DEFAULT NULL,
  `nm_senha` varchar(20) DEFAULT NULL,
  `id_turma` int(11) NOT NULL,
  PRIMARY KEY (`cd_aluno`),
  KEY `id_turma` (`id_turma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=349 ;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`cd_aluno`, `nm_aluno`, `nr_rm`, `nm_login`, `nm_senha`, `id_turma`) VALUES
(1, 'ABNER LIMA TAVARES DE FREITAS', '16031', NULL, NULL, 3),
(2, 'BRUNNO LUKAS MOURA TEIXEIRA', '16004', NULL, NULL, 3),
(3, 'CAIO HENRIQUE DE OLIVEIRA SEVERO', '16079', 'caioh_severo@hotmail.com', NULL, 3),
(4, 'CAIO LUIZ PIRAMIDES OLIVEIRA', '16148', NULL, NULL, 3),
(5, 'CAROLINE ALMEIDA LINS DO CARMO', '16088', NULL, NULL, 3),
(6, 'CAUÃŠ MARTINS DO NASCIMENTO', '16029', 'ynevisk@bol.com', NULL, 3),
(7, 'DANIEL DE OLIVEIRA SOARES', '16214', NULL, NULL, 3),
(8, 'DANILO CANUTO PEREIRA', '16009', NULL, NULL, 3),
(9, 'DIEGO PEREIRA GONZALEZ NATALO', '16016', NULL, NULL, 3),
(10, 'EDUARDO ALBUIXECH DE MOURA', '16099', NULL, NULL, 3),
(11, 'EDUARDO HERNANI MENDES BOLIZE', '16205', NULL, NULL, 3),
(12, 'EDUARDO MARTINS DE OLIVEIRA', '16134', NULL, NULL, 3),
(13, 'EDUARDO RIBEIRO ADOGLIO', '16035', NULL, NULL, 3),
(14, 'FERNANDO GUSTAVO ALVES DOS SANTOS', '16084', NULL, NULL, 3),
(15, 'GABRIEL FERREIRA DE OLIVEIRA', '16024', NULL, NULL, 3),
(16, 'GUILHERME BALOG GARDINO', '16063', NULL, NULL, 3),
(17, 'GUSTAVO GUIMARÃƒES CERVO', '16191', 'gustavo.cervo14@gmail.com', '123', 3),
(18, 'HARISON COSTA DOS SANTOS', '16007', 'hcosta959@gmail.com', NULL, 3),
(19, 'ISABELA PEREIRA MELIM', '16164', NULL, NULL, 3),
(20, 'LETÍCIA VITÓRIA RODRIGUES ROSA', '16036', NULL, NULL, 3),
(21, 'LUANA GOMES DE SOUSA', '16025', NULL, NULL, 3),
(22, 'LUCAS BARRIONUEVO RIBEIRO', '16023', NULL, NULL, 3),
(23, 'LUIZ GUSTAVO DA SILVA VASCONCELLOS', '16037', NULL, NULL, 3),
(24, 'MOISES SANTANA DE MIRANDA JUNIOR', '16072', NULL, NULL, 3),
(25, 'PEDRO MACIEL DE SOUZA SANTOS', '16107', NULL, NULL, 3),
(26, 'PEDRO ROCHA', '16065', NULL, NULL, 3),
(27, 'RAFAEL VICTOR PEREIRA', '16032', NULL, NULL, 3),
(28, 'SARA DE LIMA SANTOS', '16069', NULL, NULL, 3),
(29, 'TABATA LUZIA MORAES CHAVES', '16083', NULL, NULL, 3),
(30, 'THAYNA SKERRATT PEREIRA', '16015', NULL, NULL, 3),
(31, 'VICTOR GUSTAVO FERREIRA TALAMONI', '16110', NULL, NULL, 3),
(32, 'VINICIUS FRANCISCO DE SOUSA PEREIRA', '16028', NULL, NULL, 3),
(33, 'VITORIA ALMEIDA GUTIERRES', '16129', NULL, NULL, 3),
(34, 'VITORIA PENICHE SANTOS', '16141', NULL, NULL, 3),
(35, 'WESLEY DUARTE JAKOB FEITOSA', '16022', NULL, NULL, 3),
(36, 'YVE JOSE ZULATTO', '16166', NULL, NULL, 3),
(37, 'ALEX AUGUSTO VILLA BELLA FRANULOVIC', '18040', NULL, NULL, 1),
(38, 'BEATRIZ VIEIRA DA SILVA', '18037', NULL, NULL, 1),
(39, 'BIANCA CRISTINA FERNANDES DA SILVA', '18121', NULL, NULL, 1),
(40, 'BIANCA DE FARIAS SANTOS', '18008', NULL, NULL, 1),
(41, 'BRUNO BERNARDO HENRIQUES CARDOSO', '18033', NULL, NULL, 1),
(42, 'CAIO HIROSHI SZAZI', '18009', NULL, NULL, 1),
(43, 'CELSO DOS SANTOS NEGOCIO', '18045', NULL, NULL, 1),
(44, 'CESAR FERREIRA BARRICHELLO', '18065', NULL, NULL, 1),
(45, 'CHRISTOPHER RAI AURELIANO ALVES DA SILVA', '17218', NULL, NULL, 1),
(46, 'DIOGO HORA WALLNER', '18054', NULL, NULL, 1),
(47, 'ENZO DE CASTRO UMEHARA', '18047', NULL, NULL, 1),
(48, 'ERIC DE PAULA SILVA', '18096', NULL, NULL, 1),
(49, 'ERIC KIDA MENESES CORREA', '18018', NULL, NULL, 1),
(50, 'GABRIEL DOS SANTOS SANTANA', '18133', NULL, NULL, 1),
(51, 'GABRIEL JUSTINO ROCHA GOMES', '18092', NULL, NULL, 1),
(52, 'GABRIELLE GOMES FRAZAO', '18087', NULL, NULL, 1),
(53, 'GUILHERME MARINHO SANTOS', '18089', NULL, NULL, 1),
(54, 'GUSTAVO CAUA DOS SANTOS', '18049', NULL, NULL, 1),
(55, 'JEFFERSON VITOR SOUZA DA CUNHA', '18056', NULL, NULL, 1),
(56, 'JUAN CARLOS REIS GUIMARAES', '18053', NULL, NULL, 1),
(57, 'KAHUAN DE SOUZA DA SILVA', '18152', NULL, NULL, 1),
(58, 'LARISSA SARTORI RIBEIRO SANTOS ANCHIA', '18064', NULL, NULL, 1),
(59, 'LETICIA LIMA SANTIAGO', '18184', NULL, NULL, 1),
(60, 'LIVIA AMANCIO RAMOS', '18010', NULL, NULL, 1),
(61, 'LUÍS HENRIQUE SANT''ANA', '18015', NULL, NULL, 1),
(62, 'LUIZ FABIANO KOMORIZONO DOS SANTOS', '18149', NULL, NULL, 1),
(63, 'LUIZ HENRIQUE MEDEIROS DOS SANTOS', '18084', NULL, NULL, 1),
(64, 'LUIZ HENRIQUE NAVARRO FONSECA', '18048', NULL, NULL, 1),
(65, 'LUIZ SCARABEL NETO', '18187', NULL, NULL, 1),
(66, 'MANUELA TEIXEIRA PICÃO DE FREITAS', '18066', NULL, NULL, 1),
(67, 'MARCELO CORDEIRO ROELLA', '18204', NULL, NULL, 1),
(68, 'MATHEUS CALIXTO DE OLIVEIRA', '18082', NULL, NULL, 1),
(69, 'MIGUEL CHICHORRO DE OLIVEIRA', '18021', NULL, NULL, 1),
(70, 'MURILO AUGUSTO SANTOS DO NASCIMENTO', '18078', NULL, NULL, 1),
(71, 'NATHAN YURI CARVALHO DE CAMARGO', '18052', NULL, NULL, 1),
(72, 'NICOLE MENDES GERMANO', '18129', NULL, NULL, 1),
(73, 'OTÁVIO RODRIGUES BAMBANS', '18126', NULL, NULL, 1),
(74, 'RAFAEL DA CONCEIÇÃO DE HUNGRIA', '18109', NULL, NULL, 1),
(75, 'THIAGO KENZO CHIBA SUZUKI', '18055', NULL, NULL, 1),
(76, 'THIAGO ROSAS MARQUES', '18050', NULL, NULL, 1),
(77, 'WELINGTON CARVALHO QUINTANA', '18028', NULL, NULL, 1),
(78, 'ANA CAMILY RIBEIRO GARRIDO', '17221', NULL, NULL, 2),
(79, 'ANA CRISTINA GONCALVES DA SILVA', '17034', NULL, NULL, 2),
(80, 'BIANCA RAMOS CARDOZO', '17127', NULL, NULL, 2),
(81, 'BRENO DOMINISCKI SANT''ANNA', '17151', NULL, NULL, 2),
(82, 'CAMILA MENDONÇA DOS SANTOS', '17009', NULL, NULL, 2),
(83, 'CAMILLA RAMOS RIBEIRO', '17173', NULL, NULL, 2),
(84, 'CARLOS ALBERTO LIMA FILHO', '17169', NULL, NULL, 2),
(85, 'CRISTIAN DOS SANTOS DE OLIVEIRA', '17082', NULL, NULL, 2),
(86, 'EDUARDA CAROLINE BARBOZA DA SILVA', '17121', NULL, NULL, 2),
(87, 'EDUARDA CERATO ZAMBON', '17088', NULL, NULL, 2),
(88, 'EDUARDO FERREIRA DOS SANTOS', '17115', NULL, NULL, 2),
(89, 'EDUARDO ONOFRE DE RAMOS JUNIOR', '17166', NULL, NULL, 2),
(90, 'GABRIEL CELESTINO NETO DA SILVA', '17079', NULL, NULL, 2),
(91, 'GABRIEL DA SILVA CALASANS', '17124', NULL, NULL, 2),
(92, 'GABRIEL GOMES GARCIA', '17080', NULL, NULL, 2),
(93, 'GABRIEL LEONOR MENDES', '17043', NULL, NULL, 2),
(94, 'GABRIELA DE LIMA PEREIRA', '17132', NULL, NULL, 2),
(95, 'GABRIELLA FERREIRA GUERRA', '17031', NULL, NULL, 2),
(96, 'GUILHERME FERNANDES SANTOS', '17039', NULL, NULL, 2),
(97, 'HECTOR LOPES LOURENCO', '16138', NULL, NULL, 2),
(98, 'IGOR SANTOS DE OLIVEIRA', '17002', NULL, NULL, 2),
(99, 'ISAAC APARECIDO DE OLIVEIRA SANTOS', '17201', NULL, NULL, 2),
(100, 'JOÃO PEDRO NARDES ATAULO', '17171', NULL, NULL, 2),
(101, 'JOAO VITOR DA SILVA ACACIO', '17208', NULL, NULL, 2),
(102, 'JORGE LUCAS TRIGO CORONADO', '17092', NULL, NULL, 2),
(103, 'JUAN PABLO CARRILHO', '17106', NULL, NULL, 2),
(104, 'LUCAS DE AQUINO ASSUNCAO', '17213', NULL, NULL, 2),
(105, 'LUCAS HENRIQUE DOS SANTOS GONÇALVES', '17041', NULL, NULL, 2),
(106, 'LUCAS SOUZA DA SILVA', '17181', NULL, NULL, 2),
(107, 'LUIZ FELIPE DOS SANTOS SILVA', '17130', NULL, NULL, 2),
(108, 'MARCOS YUUKI TERUYA', '17069', NULL, NULL, 2),
(109, 'MATHEUS CAVALCANTE GOMES', '17011', NULL, NULL, 2),
(110, 'NELSON RODRIGUES TEMPOBONO', '17162', NULL, NULL, 2),
(111, 'NICOLAS GOMES RUIZ', '17061', NULL, NULL, 2),
(112, 'PEDRO HENRIQUE DA SILVA MELO', '17044', NULL, NULL, 2),
(113, 'PEDRO LUIZ AZEVEDO FRATI', '17017', NULL, NULL, 2),
(114, 'PEDRO RICARDO SOUZA DA COSTA', '17122', NULL, NULL, 2),
(115, 'THALYA RANGEL', '17099', NULL, NULL, 2),
(116, 'WALLACE PEDROSO RIBEIRO DA SILVA', '17077', NULL, NULL, 2),
(117, 'ALICE GOMES DA SILVA', '18119', NULL, NULL, 4),
(118, 'BRENO HENRIQUE DA SILVA SANTOS', '18175', NULL, NULL, 4),
(119, 'BRUNA CRISTINE FERREIRA SOUZA', '18139', NULL, NULL, 4),
(120, 'CAMILLE FERREIRA CRUZ', '18198', NULL, NULL, 4),
(121, 'DAVI MONTEIRO NUNES', '18080', NULL, NULL, 4),
(122, 'DIOGO SANTOS CAMPACHI', '18004', NULL, NULL, 4),
(123, 'EMANNUELLA KARLA DE PONTES GOMES', '18032', NULL, NULL, 4),
(124, 'ESTHER MACIEL DE SOUZA SANTOS', '18081', NULL, NULL, 4),
(125, 'FABRICIO DAKANG WU ZHENG', '18157', NULL, NULL, 4),
(126, 'FABRÍZIO VERNAGLIA', '18035', NULL, NULL, 4),
(127, 'GABRIEL DA SILVA', '18209', NULL, NULL, 4),
(128, 'GEOVANNA CRISTINA MARTINS SIQUEIRA', '18024', NULL, NULL, 4),
(129, 'GIANCARLO NUNES SILVA', '18165', NULL, NULL, 4),
(130, 'GIOVANNA BORGES DE MIRANDA', '18026', NULL, NULL, 4),
(131, 'GIOVANNA FERRARI MASSUDA', '18020', NULL, NULL, 4),
(132, 'GUSTAVO FERNANDES DE OLIVEIRA', '18068', NULL, NULL, 4),
(133, 'ISABELE ZANATA GONCALEZ', '18118', NULL, NULL, 4),
(134, 'ISABELLA LEITE PATRIOTA', '18030', NULL, NULL, 4),
(135, 'IZABELLY CRISTINY BERINGUI LEITE', '18156', NULL, NULL, 4),
(136, 'JOSE PAULO PEDROSO DOS SANTOS', '18145', NULL, NULL, 4),
(137, 'JOYCE OLIVEIRA BARBOSA', '18192', NULL, NULL, 4),
(138, 'LARA CAETANO', '18060', NULL, NULL, 4),
(139, 'LARISSA SANTANA MENEZES', '17384', NULL, NULL, 4),
(140, 'LAURA RIBEIRO PEREIRA', '18074', NULL, NULL, 4),
(141, 'LEONARDO DOS SANTOS', '18136', NULL, NULL, 4),
(142, 'LUCAS LIMA DE SANTANA', '18105', NULL, NULL, 4),
(143, 'LUIS FERNANDO OLIVEIRA SILVA', '18036', NULL, NULL, 4),
(144, 'LUIZA NASCIMENTO DE CARVALHO SOUZA', '18019', NULL, NULL, 4),
(145, 'MAIRA ADRIA DA SILVA SOUSA', '18038', NULL, NULL, 4),
(146, 'MARCELLY LOUISE DA SILVA ALVES DE LIMA', '18029', NULL, NULL, 4),
(147, 'MELL MELISSA DE OLIVEIRA SANTOS BOTELHO', '18124', NULL, NULL, 4),
(148, 'MICHELLE MARIANO DOS SANTOS MOURA', '18022', NULL, NULL, 4),
(149, 'MURILLO UBIRATAM DE MOURA PIRES', '18016', NULL, NULL, 4),
(150, 'NATHALI ALBUQUERQUE VIEIRA DA SILVA', '18195', NULL, NULL, 4),
(151, 'NAYRANA DI FATIMA DA SILVA SOUZA', '18011', NULL, NULL, 4),
(152, 'PAOLA VICTORIA SARDINHA DE OLIVEIRA', '18108', NULL, NULL, 4),
(153, 'RAYSSA FLORES DE FREITAS', '18113', NULL, NULL, 4),
(154, 'RENAN RODRIGO OLIVEIRA SANTOS', '18025', NULL, NULL, 4),
(155, 'RODRIGO CALEFFI DE SOUZA', '18181', NULL, NULL, 4),
(156, 'SABRINA DE SOUZA SANTOS', '18007', NULL, NULL, 4),
(157, 'THIAGO PATRICIO DE SOUZA', '18106', NULL, NULL, 4),
(158, 'ALANIS DE SOUZA AGUIRRE', '17001', NULL, NULL, 5),
(159, 'ALESSANDRA BYNS DO NASCIMENTO', '17178', NULL, NULL, 5),
(160, 'ANA JULIA DE SOUZA SANTOS', '17032', NULL, NULL, 5),
(161, 'ANDRE LUIZ DE OLIVEIRA JUNIOR', '17128', NULL, NULL, 5),
(162, 'AURÉLIO SEBASTIAN GIANNINI', '17035', NULL, NULL, 5),
(163, 'BRUNO DOS SANTOS CAMARGO', '17022', NULL, NULL, 5),
(164, 'DANILO DIAS BATISTA', '17190', NULL, NULL, 5),
(165, 'FRANCISCA DE MELO PEREIRA', '17083', NULL, NULL, 5),
(166, 'GABRIELA DIAS SANTIAGO', '17104', NULL, NULL, 5),
(167, 'GUSTAVO DELMIRO PEREIRA SANTOS', '17026', NULL, NULL, 5),
(168, 'HIAGO LUZ DE SOUSA', '17028', NULL, NULL, 5),
(169, 'IGOR DE LIMA MELO', '17136', NULL, NULL, 5),
(170, 'IRIS DA SILVA', '17219', NULL, NULL, 5),
(171, 'JULIA PIRES DE ARAUJO', '17158', NULL, NULL, 5),
(172, 'LAVINIA ISABELLA GUEDES', '17118', NULL, NULL, 5),
(173, 'LEONARDO PORTELLA GARBIN', '17073', NULL, NULL, 5),
(174, 'LIVIA DOS SANTOS PEREIRA', '17050', NULL, NULL, 5),
(175, 'LUIS ANTONIO DA SILVA', '17070', NULL, NULL, 5),
(176, 'LUIZA PEREIRA DE LIMA', '17098', NULL, NULL, 5),
(177, 'MANOELLA MELRO GARCIA', '17036', NULL, NULL, 5),
(178, 'MARCOS VINICIUS DA SILVA', '17006', NULL, NULL, 5),
(179, 'MARIA EDUARDA HARUMI EIZO', '17019', NULL, NULL, 5),
(180, 'MARINA ESCORCE NUNES', '17107', NULL, NULL, 5),
(181, 'MONIZE COUTO MIRANDA', '17189', NULL, NULL, 5),
(182, 'NAYARA APARECIDA SCHNEIDER', '17010', NULL, NULL, 5),
(183, 'NICOLE CRAVO DE MORAIS', '17047', NULL, NULL, 5),
(184, 'PAULA EDUARDA GONCALVES MACHADO', '17150', NULL, NULL, 5),
(185, 'PHELIPE SAMUEL E SOUZA', '17045', NULL, NULL, 5),
(186, 'PRISCILA SILVA NUNES', '17210', NULL, NULL, 5),
(187, 'RAFAEL NUNO GONCALVES DE CARVALHO', '17105', NULL, NULL, 5),
(188, 'RAPHAELA RIBEIRO DE SOUSA', '17067', NULL, NULL, 5),
(189, 'RENAN CANDIDO ARAUJO DE LIMA', '17085', NULL, NULL, 5),
(190, 'SAMIRA DA SILVA SANTOS', '17163', NULL, NULL, 5),
(191, 'SOPHIA VALÉRIO PINTO', '17131', NULL, NULL, 5),
(192, 'STEPHANY ZAFIRA DOS SANTOS SILVA', '17100', NULL, NULL, 5),
(193, 'THAMIRES SANTOS DE MELO', '17018', NULL, NULL, 5),
(194, 'VICTOR SELYMES BARBOSA', '17054', NULL, NULL, 5),
(195, 'YASMIN SOUZA RODRIGUES', '17012', NULL, NULL, 5),
(196, 'ANDRÉ LUIZ GARCIA PONTES', '16039', NULL, NULL, 6),
(197, 'BÁRBARA DE FARIA BORDIN', '16053', NULL, NULL, 6),
(198, 'BRUNA GOMES DA SILVA', '16049', NULL, NULL, 6),
(199, 'BRUNO SIMÃO GOMES', '16169', NULL, NULL, 6),
(200, 'CARLOS GOMES ARAGÃO JÚNIOR', '16096', NULL, NULL, 6),
(201, 'CINTHIA CALEFFI DE SOUZA', '16136', NULL, NULL, 6),
(202, 'EVELYN ARAGÃO PIRES', '16080', NULL, NULL, 6),
(203, 'GABRIEL VITOR DOS SANTOS SANTANA', '16005', NULL, NULL, 6),
(204, 'GESSICA ARAUJO DOS SANTOS', '16216', NULL, NULL, 6),
(205, 'GIOVANNA TAVARES CAIÑA', '16077', NULL, NULL, 6),
(206, 'GIOVANNA VITOR NOVAES DA COSTA', '16150', NULL, NULL, 6),
(207, 'GUILHERME LEITE BARRETO DA SILVA', '16171', NULL, NULL, 6),
(208, 'HELOÍSA ALENCAR GUIMARÃES', '16236', NULL, NULL, 6),
(209, 'ISABELLA CRISTHINE SOUSA DA SILVA', '16211', NULL, NULL, 6),
(210, 'JEISIELLE DOS SANTOS', '16194', NULL, NULL, 6),
(211, 'JHENYFFER MARY RODRIGUES GONÇALVES', '16237', NULL, NULL, 6),
(212, 'LUANNA GONÇALVES FERREIRA', '16113', NULL, NULL, 6),
(213, 'MANUELLA AGUIAR LIMA', '16178', NULL, NULL, 6),
(214, 'MARIA LUIZA ALVES DA SILVA', '16123', NULL, NULL, 6),
(215, 'MARINA HITOMI MUTO CABRAL', '16100', NULL, NULL, 6),
(216, 'MATHEUS JESUS DE SANTANA', '16006', NULL, NULL, 6),
(217, 'MAYARA PEREIRA FREITAS SANTOS', '16062', NULL, NULL, 6),
(218, 'NATHALIA PAES DOS SANTOS', '16050', NULL, NULL, 6),
(219, 'NICOLE FELIPE DE SOUZA', '16127', NULL, NULL, 6),
(220, 'NICOLI OLIVEIRA VALERIO', '16111', NULL, NULL, 6),
(221, 'PABLO HENRIQUE MARTINS DO NASCIMENTO', '16220', NULL, NULL, 6),
(222, 'PAMELA ALMEIDA OLIVEIRA', '16090', NULL, NULL, 6),
(223, 'PAULO ROBERTO DA SILVA', '16019', NULL, NULL, 6),
(224, 'PEDRO HENRIQUE GONÇALVES ADALBERTO', '16268', NULL, NULL, 6),
(225, 'PEDRO MATHEUS SANTOS MARQUES FERREIRA', '16219', NULL, NULL, 6),
(226, 'RAFAELLA VITORIO SANTOS PUPO MUNIZ', '16200', NULL, NULL, 6),
(227, 'REBECA CRISTIANE OLIVEIRA DA SILVA', '16269', NULL, NULL, 6),
(228, 'SABRINA SIMÕES DE OLIVEIRA', '16012', NULL, NULL, 6),
(229, 'SARA RENATA SANTOS REIS', '16021', NULL, NULL, 6),
(230, 'VICTOR ALBERTO AMORIM FERREIRA', '16222', NULL, NULL, 6),
(231, 'VITÓRIA ERNESTO SOUSA', '16225', NULL, NULL, 6),
(232, 'WELLITON DIAS FREITAS COSTA', '16143', NULL, NULL, 6),
(233, 'ALICIA PILCSUK FERRACINI', '18094', NULL, NULL, 7),
(234, 'AMANDA DE FREITAS ARAUJO', '18043', NULL, NULL, 7),
(235, 'ANDERSON VINICIUS MONTEIRO DE OLIVEIRA', '18046', NULL, NULL, 7),
(236, 'ARTHUR AGUIAR RODRIGUES', '18128', NULL, NULL, 7),
(237, 'BEATRIZ AKEMI GARCIA TAHIRA', '18031', NULL, NULL, 7),
(238, 'CAIO HENRIQUE COELHO DE SOUSA', '18147', NULL, NULL, 7),
(239, 'CAMILA CRISTINA DEFENDI PINHEIRO', '18044', NULL, NULL, 7),
(240, 'DALIZE MARIA RIBEIRO SILVA', '18090', NULL, NULL, 7),
(241, 'GIOVANNA SILVA TOSTA', '18190', NULL, NULL, 7),
(242, 'GIULLIA CAROLINE OSTI', '18057', NULL, NULL, 7),
(243, 'GUILHERME LADISLAU DE JESUS', '18072', NULL, NULL, 7),
(244, 'ISABELA DENZELER TOCHETE', '18093', NULL, NULL, 7),
(245, 'JAQUELINE DUARTE JAKOB FEITOSA', '18027', NULL, NULL, 7),
(246, 'JEFERSON LUIZ DO NASCIMENTO', '18115', NULL, NULL, 7),
(247, 'JHONATAN ORAGIO DA SILVA', '18051', NULL, NULL, 7),
(248, 'JOAO PEDRO RODRIGUES FERRAZ', '18073', NULL, NULL, 7),
(249, 'JULIA RODRIGUES BARBERO', '18199', NULL, NULL, 7),
(250, 'KARINA VITORIA CARVALHO FARIA', '18122', NULL, NULL, 7),
(251, 'KAUÃ SILVA ALVES', '18002', NULL, NULL, 7),
(252, 'LEONARDO TENORIO DE SIQUEIRA', '18141', NULL, NULL, 7),
(253, 'LETICIA DE ANDRADE BIANCHINI', '18039', NULL, NULL, 7),
(254, 'LUANA APARECIDA FERREIRA DA SILVA', '18185', NULL, NULL, 7),
(255, 'LUCAS OLIVEIRA DE CARVALHO', '18003', NULL, NULL, 7),
(256, 'MARCOS ANTONIO ELIAS GOBBO FILHO', '18188', NULL, NULL, 7),
(257, 'MARIA EDUARDA DA SILVA SANTOS', '18059', NULL, NULL, 7),
(258, 'MATHEUS DE CAMARGO LOPES', '18130', NULL, NULL, 7),
(259, 'MAYARA GONÇALVES SANTOS', '18006', NULL, NULL, 7),
(260, 'MURILO COUTINHO MOREIRA DA CRUZ', '18041', NULL, NULL, 7),
(261, 'NATALIA AMORIM BATISTA', '18155', NULL, NULL, 7),
(262, 'NICOLLY GONZAGA FERREIRA LUZ', '18085', NULL, NULL, 7),
(263, 'PEDRO D''LUCA TEIXEIRA SILVA', '18058', NULL, NULL, 7),
(264, 'PIETRA DE FRANCA BELFORT SANTOS', '18023', NULL, NULL, 7),
(265, 'RAFAELA GONÇALVES', '18208', NULL, NULL, 7),
(266, 'RAFAELLA DE CARVALHO OLIVEIRA', '18112', NULL, NULL, 7),
(267, 'REBECA DOS SANTOS LIMA', '18150', NULL, NULL, 7),
(268, 'SABRINA SARAH CORAS VIEIRA', '18063', NULL, NULL, 7),
(269, 'THAISSA VICTORIA MARIQUITO CAMPOS', '18012', NULL, NULL, 7),
(270, 'THIAGO TRESSINO MARANGONI', '18186', NULL, NULL, 7),
(271, 'VICTÓRIA MARIA BENVINDA DOS REYS LOURENÇO', '18102', NULL, NULL, 7),
(272, 'WILLIAN VITOR VIEIRA SANTANA', '18138', NULL, NULL, 7),
(273, 'AMANDA ACRAS BORTOLOTO', '17091', NULL, NULL, 8),
(274, 'BIANCA LOUZADA DIZ DA SILVA', '17089', NULL, NULL, 8),
(275, 'BRENDON ALEXANDER FONTES BARBOSA RIBEIRO', '17094', NULL, NULL, 8),
(276, 'DANIEL PALMA PENDON', '17141', NULL, NULL, 8),
(277, 'EDUARDA BRAZ MARTINELLI DANZI', '17137', NULL, NULL, 8),
(278, 'EMILY EMERICK MARTINS DA SILVA', '17116', NULL, NULL, 8),
(279, 'ÉRICA OLIVEIRA RODRIGUES', '17123', NULL, NULL, 8),
(280, 'FABIO ASSIS GONCALVES', '17142', NULL, NULL, 8),
(281, 'FABIOLA MARTINEZ', '17024', NULL, NULL, 8),
(282, 'GABRIEL MATOS DOS SANTOS', '17187', NULL, NULL, 8),
(283, 'GABRIELA MARCHETTI ABREU', '17087', NULL, NULL, 8),
(284, 'GABRIELA NOVAIS PEREIRA', '17215', NULL, NULL, 8),
(285, 'GIOVANA APARECIDA SPIGARIOL DE SOUZA', '17059', NULL, NULL, 8),
(286, 'GUILHERME FERREIRA DE SOUZA', '17110', NULL, NULL, 8),
(287, 'GUILHERME MIRANDA DA SILVA', '17074', NULL, NULL, 8),
(288, 'GUIOVANA ANTONIA COSTA AZEVEDO', '17040', NULL, NULL, 8),
(289, 'HELOÍSA HELENA SEVERO DE SANT''ANNA', '17068', NULL, NULL, 8),
(290, 'ISABELA DOVERI IBARZO SOARES', '17058', NULL, NULL, 8),
(291, 'JOÃO PEDRO SAMPAIO NUNES', '17177', NULL, NULL, 8),
(292, 'JOAO VICTOR AQUINO PINTO', '17157', NULL, NULL, 8),
(293, 'JULIA DA SILVA MORAIS', '17020', NULL, NULL, 8),
(294, 'KATIA BATISTA COSTA', '17165', NULL, NULL, 8),
(295, 'KAUE PERES TEODORO', '17005', NULL, NULL, 8),
(296, 'LARA RODRIGUES FERDERLE', '17148', NULL, NULL, 8),
(297, 'LARISSA MANOEL ALVES DE SOUZA', '17014', NULL, NULL, 8),
(298, 'LUCAS SOARES DE SOUZA', '17093', NULL, NULL, 8),
(299, 'LUDMILLA MUNIZ CARPIGIANI', '17097', NULL, NULL, 8),
(300, 'MARCELLE GALAN MARTINS DA COSTA', '17202', NULL, NULL, 8),
(301, 'MARIA CLARA SIQUEIRA GOMES', '17129', NULL, NULL, 8),
(302, 'MARIANA BALDIN', '17013', NULL, NULL, 8),
(303, 'MARLON SALES AZEVEDO', '17007', NULL, NULL, 8),
(304, 'MELLANIE LOPES SILVA DE OLIVEIRA', '17033', NULL, NULL, 8),
(305, 'MICHELLY ALVES MORATO', '17030', NULL, NULL, 8),
(306, 'MYCHELLE DA SILVA DIAS CRISTOVÃO', '17095', NULL, NULL, 8),
(307, 'PEDRO CARDOSO DE OLIVA PITTA', '17172', NULL, NULL, 8),
(308, 'SAMARA DELIA CORAS VIEIRA', '17025', NULL, NULL, 8),
(309, 'SOPHIA FIGUEIREDO DE SOUSA', '17084', NULL, NULL, 8),
(310, 'THIAGO CRUZ ALEXANDRE', '17027', NULL, NULL, 8),
(311, 'VICTORIA DIAS BARBOZA', '17049', NULL, NULL, 8),
(312, 'ADRIANA SOUZA MIRANDA', '16163', NULL, NULL, 9),
(313, 'ALICE GOMES FERREIRA SANTOS', '16085', NULL, NULL, 9),
(314, 'ANNE LISSA PRATES', '16013', NULL, NULL, 9),
(315, 'BARBARA KAZAKEVICIUS SERPA', '16042', NULL, NULL, 9),
(316, 'BEATRIZ TENORIO DE SIQUEIRA', '16097', NULL, NULL, 9),
(317, 'BIANCA IVANOF MARQUES', '16056', NULL, NULL, 9),
(318, 'BRUNO DA LUZ LEAL', '16075', NULL, NULL, 9),
(319, 'CAMILA HELLEN DE OLIVEIRA POCIUS', '16092', NULL, NULL, 9),
(320, 'ELENI NASCIMENTO SIQUEIRA LEITE', '16160', NULL, NULL, 9),
(321, 'ENZO BARROS DE ARAUJO', '16074', NULL, NULL, 9),
(322, 'GABRIELA FONSECA DO NASCIMENTO', '16130', NULL, NULL, 9),
(323, 'GABRIELLY SOUZA FERNANDES', '16010', NULL, NULL, 9),
(324, 'GUILHERME BARBOSA DOS SANTOS', '16124', NULL, NULL, 9),
(325, 'GUILHERME NASCIMENTO CONT', '16026', NULL, NULL, 9),
(326, 'GUILHERME RINALDI CIRQUEIRA', '16014', NULL, NULL, 9),
(327, 'JENNIFER SERDOZ GONCALVES', '16043', NULL, NULL, 9),
(328, 'JOSE MANUEL VICENTE DE OLIVEIRA', '16101', NULL, NULL, 9),
(329, 'JULIA MARINA OLIMPIA MENEZES CLEMENTINO', '16204', NULL, NULL, 9),
(330, 'KAUE ANTONIO FRANCA MARQUES', '16227', NULL, NULL, 9),
(331, 'LORRAINY BARBOSA DE SOUZA', '16203', NULL, NULL, 9),
(332, 'LUAN MATHEUS NUNES LIMA TRIGO', '16098', NULL, NULL, 9),
(333, 'LUANA MARQUES CHIOVETO', '16142', NULL, NULL, 9),
(334, 'LUCAS MORAIS TONIAL', '16011', NULL, NULL, 9),
(335, 'LUIZ GUILHERME CAVALCANTE PARI', '16174', NULL, NULL, 9),
(336, 'MARIA LUIZA RODRIGUES FERRAZ', '16109', NULL, NULL, 9),
(337, 'MONYQUE SILVA LOURENCO LODI', '16116', NULL, NULL, 9),
(338, 'PALOMA MARIA BISCARO OLSEN', '16087', NULL, NULL, 9),
(339, 'PEDRO HENRIQUE SALGADO FREITAS', '16086', NULL, NULL, 9),
(340, 'ROSEANNE MARIA SANTOS PINHEIRO', '16048', NULL, NULL, 9),
(341, 'SAMARA TIEMI NAKASHIMA', '16250', NULL, NULL, 9),
(342, 'TAIS AMANCIO DE SOUSA', '16206', NULL, NULL, 9),
(343, 'TATIANE KOSO JULIO', '16125', NULL, NULL, 9),
(344, 'VICTOR HUGO DA COSTA FERNANDES', '16054', NULL, NULL, 9),
(345, 'VITORIA APARECIDA PRADO ALMEIDA', '16131', NULL, NULL, 9),
(346, 'YNGRID DE SOUZA TAKANO', '16106', NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_artigo`
--

CREATE TABLE IF NOT EXISTS `tb_artigo` (
  `cd_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `nm_artigo` varchar(220) NOT NULL,
  `nm_foto` varchar(220) NOT NULL,
  `st_noticia` tinyint(1) NOT NULL,
  `ds_conteudo` varchar(10000) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_artigo`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tb_artigo`
--

INSERT INTO `tb_artigo` (`cd_artigo`, `nm_artigo`, `nm_foto`, `st_noticia`, `ds_conteudo`, `id_usuario`) VALUES
(1, 'HistÃ³rico', 'foto-artigos/predio_etec.jpg', 0, ' <p>A ETEC de ItanhaÃ©m iniciou suas atividades em 01/08/2006, como Classe Descentralizada da ETEC â€œAdolpho Berezinâ€ de MongaguÃ¡, atravÃ©s de um convÃªnio do Governo do Estado de SÃ£o Paulo com a atual administraÃ§Ã£o da Prefeitura Municipal de ItanhaÃ©m.</p> O convÃªnio foi assinado em 2006 pelo ExcelentÃ­ssimo Governador Sr. Geraldo Alkimin e ExcelentÃ­ssimo Prefeito Sr. JosÃ© Carlos Forssell, esta parceria viabilizou o prÃ©dio da Unidade Escolar, que era ocupado por alunos da Rede Municipal de Ensino.   No inÃ­cio, compartilhamos o mesmo prÃ©dio com os alunos da Rede Municipal e tÃ­nhamos apenas dois cursos TÃ©cnicos em Recursos HÃ­dricos e Saneamento, ambos com 40 alunos, no perÃ­odo noturno.   Na ocasiÃ£o, esses dois cursos foram escolhidos pelo Prefeito da cidade, para suprir futuras necessidades de um Projeto de Saneamento BÃ¡sico em toda RegiÃ£o Metropolitana da Baixada Santista.   Em 2007 o entÃ£o Governador Eleito ExcelentÃ­ssimo Sr. JosÃ© Serra assinou seu primeiro decreto como Governador, criando a ETEC de ItanhaÃ©m como unidade prÃ³pria e independente, em 24/01/07, decreto nÂº 51.500. No segundo semestre de 2007, implantamos mais dois cursos TÃ©cnicos em AdministraÃ§Ã£o e Web Design ambos com quarenta alunos, o Ãºltimo no perÃ­odo vespertino. No final de 2007, nÃ£o compartilhÃ¡vamos o prÃ©dio da escola, nos possibilitando a ampliar nossos cursos.   Em 2008 a escola ganhou uma nova cara, uma nova identidade, iniciaram as aulas do Ensino MÃ©dio, com oitenta alunos no perÃ­odo diurno.   Assim, desde 2008 temos a escola em funcionamento manhÃ£, tarde e noite.   Em fevereiro de 2009 iniciamos mais um curso no perÃ­odo da tarde, TÃ©cnico em Secretariado, com quarenta alunos. Ganhamos uma Classe Descentralizada de PeruÃ­be com dois cursos TÃ©cnicos em Contabilidade e LogÃ­stica. Em 2010, tivemos inÃ­cio tambÃ©m do curso Modelagem de VestuÃ¡rio.     Em 2012, alguns cursos TÃ©cnicos foram para o perÃ­odo noturno, possibilitando que os cursos tÃ©cnicos de Secretariado e InformÃ¡tica para Internet, pudessem atender as pessoas que sÃ³ tem o perÃ­odo noturno para se atualizar profissionalmente.     TambÃ©m no ano de 2012, iniciaram o nosso Ensino MÃ©dio Integrado em AdministraÃ§Ã£o e InformÃ¡tica para Internet,  onde possibilitou que os Jovens da RegiÃ£o tivessem uma formaÃ§Ã£o mais completa, pois ao mesmo tempo que estÃ£o fazendo o Ensino MÃ©dio, tambÃ©m estÃ£o complementando com uma formaÃ§Ã£o tÃ©cnica profissionalizante.     Em 2013 iniciamos com o Curso TÃ©cnico em Meio Ambiente.     Em 2016 iniciamos com o ETIM - Ensino MÃ©dio Integrado com Meio Ambiente.', 1),
(3, 'ETIM - AdministraÃ§Ã£o', 'foto-artigos/etim-mad.png', 0, 'O Ensino MÃ©dio integrado da ETEC de ItanhaÃ©m oferece ao aluno todo conhecimento da base nacional comum do ensino mÃ©dio porÃ©m oferece tambÃ©m a EducaÃ§Ã£o Profissional, o que Ã© uma forma de fazer o ensino mÃ©dio (formaÃ§Ã£o bÃ¡sica) junto com a educaÃ§Ã£o profissional (formaÃ§Ã£o tÃ©cnica), um atalho paraos alunos, pois ao concluirem o ensino mÃ©dio,jÃ¡ terÃ£o uma formaÃ§Ã£o profissional tÃ©cnica.O TÃ©cnico em AdministraÃ§Ã£o adota postura Ã©tica na execuÃ§Ã£o da rotina administrativa, na elaboraÃ§Ã£o do planejamento da produÃ§Ã£o e materiais, recursos humanos, financeiros e mercadolÃ³gicos. Realiza atividades de controles e auxilia nos processos de direÃ§Ã£o utilizando ferramentas da informÃ¡tica bÃ¡sica. Fomenta ideias e prÃ¡ticas empreendedoras.  Mercado de Trabalho:  InstituiÃ§Ãµes pÃºblicas, privadas e terceiro setor.', 1),
(4, 'ETIM - InformÃ¡tica para Internet', 'foto-artigos/zika.png', 0, 'O Ensino MÃ©dio integrado da ETEC de ItanhaÃ©m oferece ao aluno todo conhecimento da base nacional comum do ensino mÃ©dio porÃ©m oferece tambÃ©m a EducaÃ§Ã£o Profissional, o que Ã© uma forma de fazer o ensino mÃ©dio (formaÃ§Ã£o bÃ¡sica) junto com a educaÃ§Ã£o profissional (formaÃ§Ã£o tÃ©cnica), um atalho paraos alunos, pois ao concluirem o ensino mÃ©dio,jÃ¡ terÃ£o uma formaÃ§Ã£o profissional tÃ©cnica.  O TÃ©cnico em InformÃ¡tica para Internet desenvolve e realiza manutenÃ§Ãµes em Websites, portais na Internet e Intranet. Utiliza ferramentas de desenvolvimento de projetos para construir soluÃ§Ãµes que auxiliam o processo de criaÃ§Ã£o de interfaces e aplicativos empregados no comÃ©rcio e marketing eletrÃ´nicos.  Mercado de trabalho  InstituiÃ§Ãµes pÃºblicas, privadas e terceiro setor.', 1),
(5, 'ETIM - Meio Ambiente', 'foto-artigos/etim-mam.png', 0, 'O Ensino MÃ©dio integrado da ETEC de ItanhaÃ©m oferece ao aluno todo conhecimento da base nacional comum do ensino mÃ©dio porÃ©m oferece tambÃ©m a EducaÃ§Ã£o Profissional, o que Ã© uma forma de fazer o ensino mÃ©dio (formaÃ§Ã£o bÃ¡sica) junto com a educaÃ§Ã£o profissional (formaÃ§Ã£o tÃ©cnica), um atalho paraos alunos, pois ao concluirem o ensino mÃ©dio,jÃ¡ terÃ£o uma formaÃ§Ã£o profissional tÃ©cnica.  O TÃ©cnico em Meio Ambiente Ã© o profissional que coleta, armazena e interpreta informaÃ§Ãµes, dados e documentaÃ§Ãµes ambientais. Colabora na elaboraÃ§Ã£o de laudos, relatÃ³rios, estudos e no acompanhamento e execuÃ§Ã£o de sistemas de gestÃ£o ambiental. Atua na organizaÃ§Ã£o de programas de educaÃ§Ã£o ambiental, de conservaÃ§Ã£o e preservaÃ§Ã£o de recursos naturais, de reduÃ§Ã£o, reuso e reciclagem. Identifica as intervenÃ§Ãµes ambientais, analisa suas consequÃªncias e operacionaliza a execuÃ§Ã£o de aÃ§Ãµes para preservaÃ§Ã£o, conservaÃ§Ã£o, otimizaÃ§Ã£o, minimizaÃ§Ã£o e remediaÃ§Ã£o dos seus efeitos.   Mercado de trabalho  InstituiÃ§Ãµes pÃºblicas, terceiro setor, empresas prestadoras de serviÃ§os na Ã¡rea ambiental, laboratÃ³rios e centros de pesquisa, industrias, consultorias tÃ©cnico-ambientais.', 1),
(6, 'InformÃ¡tica para Internet', 'foto-artigos/inf.png', 0, 'O Ensino TÃ©cnico modular de InformÃ¡tica para Internet tem duraÃ§Ã£o de 3 semestres (3 mÃ³dulos).    O TÃ©cnico em InformÃ¡tica para Internet desenvolve e realiza manutenÃ§Ãµes em Websites, portais na Internet e Intranet. Utiliza ferramentas de desenvolvimento de projetos para construir soluÃ§Ãµes que auxiliam o processo de criaÃ§Ã£o de interfaces e aplicativos empregados no comÃ©rcio e marketing eletrÃ´nicos.  Mercado de Trabalho:  InstituiÃ§Ãµes pÃºblicas, privadas e terceiro setor que demandem programaÃ§Ã£o de computadores para Internet.', 1),
(7, 'AdministraÃ§Ã£o', 'foto-artigos/adm.png', 0, 'O Ensino TÃ©cnico modular de AdministraÃ§Ã£o tem duraÃ§Ã£o de 3 semestres (3 mÃ³dulos).  O TÃ©cnico em AdministraÃ§Ã£o Ã© o profissional que adota postura Ã©tica na execuÃ§Ã£o da rotina administrativa, na elaboraÃ§Ã£o do planejamento da produÃ§Ã£o e materiais, recursos humanos, financeiros e mercadolÃ³gicos.  Realiza atividades de controles e auxilia nos processos de direÃ§Ã£o utilizando ferramentas da informÃ¡tica bÃ¡sica. Fomenta ideias e prÃ¡ticas empreendedoras.  Mercado de Trabalho:  InstituiÃ§Ãµes pÃºblicas, privadas e terceiro setor.', 1),
(8, 'Meio Ambiente', 'foto-artigos/amb.png', 0, 'O Ensino TÃ©cnico modular de Meio Ambiente tem duraÃ§Ã£o de 3 semestres (3 mÃ³dulos).  O TÃ©cnico em Meio Ambiente Ã© o profissional que coleta, armazena e interpreta informaÃ§Ãµes, dados e documentaÃ§Ãµes ambientais. Colabora na elaboraÃ§Ã£o de laudos, relatÃ³rios, estudos e no acompanhamento e execuÃ§Ã£o de sistemas de gestÃ£o ambiental. Atua na organizaÃ§Ã£o de programas de educaÃ§Ã£o ambiental, de conservaÃ§Ã£o e preservaÃ§Ã£o de recursos naturais, de reduÃ§Ã£o, reuso e reciclagem. Identifica as intervenÃ§Ãµes ambientais, analisa suas consequÃªncias e operacionaliza a execuÃ§Ã£o de aÃ§Ãµes para preservaÃ§Ã£o, conservaÃ§Ã£o, otimizaÃ§Ã£o, minimizaÃ§Ã£o e remediaÃ§Ã£o dos seus efeitos.   Mercado de trabalho  InstituiÃ§Ãµes pÃºblicas, terceiro setor, empresas prestadoras de serviÃ§os na Ã¡rea ambiental, laboratÃ³rios e centros de pesquisa, industrias, consultorias tÃ©cnico-ambientais.', 1),
(18, 'APM', 'download/apm.jpg', 0, '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_calendario`
--

CREATE TABLE IF NOT EXISTS `tb_calendario` (
  `cd_calendario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tipo` varchar(220) NOT NULL,
  `ds_conteudo` varchar(10000) NOT NULL,
  `nm_foto` varchar(220) DEFAULT NULL,
  `nm_cor` varchar(220) NOT NULL,
  `dt_inicio` datetime NOT NULL,
  `dt_fim` datetime NOT NULL,
  `st_ativo` tinyint(1) DEFAULT NULL,
  `st_publico_privado` tinyint(1) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nm_evento` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`cd_calendario`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_calendario`
--

INSERT INTO `tb_calendario` (`cd_calendario`, `nm_tipo`, `ds_conteudo`, `nm_foto`, `nm_cor`, `dt_inicio`, `dt_fim`, `st_ativo`, `st_publico_privado`, `id_usuario`, `nm_evento`) VALUES
(1, 'safrsfds', 'Apresentação dos trabalhos de conclusão de curso', 'imagens/eventos/artigo.jpg', '#dc3545', '2023-04-06 14:00:00', '2024-06-06 15:40:00', 1, 1, 1, 'Previa do TCC'),
(8, '', 'Festa, Bebidas, Weeds e muito mais. TUDO isso aqui no ETEC FEST! Venha conferir. EndereÃ§o no site www.etecitanhaem.com', 'imagens/eventos/', '#28a745', '2018-12-01 22:00:00', '2018-12-02 01:00:00', 1, 1, 1, 'ETEC FEST');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_calendario_turma`
--

CREATE TABLE IF NOT EXISTS `tb_calendario_turma` (
  `cd_avaliacao_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `id_calendario` int(11) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_avaliacao_grupo`),
  KEY `id_calendario` (`id_calendario`),
  KEY `id_turma` (`id_turma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE IF NOT EXISTS `tb_curso` (
  `cd_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nm_curso` varchar(220) NOT NULL,
  `sg_curso` char(3) NOT NULL,
  PRIMARY KEY (`cd_curso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`cd_curso`, `nm_curso`, `sg_curso`) VALUES
(1, 'InformÃ¡tica para Internet Integrado ao Ensino MÃ©dio', 'Min'),
(2, 'AdministraÃ§Ã£o Integrado ao Ensino MÃ©dio', 'Mad'),
(3, 'Meio Ambiente Integrado ao Ensino MÃ©dio', 'Mam'),
(4, 'InformÃ¡tica para Internet', 'Inf'),
(5, 'AdministraÃ§Ã£o', 'Adm'),
(6, 'Meio Ambiente', 'Amb'),
(7, 'Ensino MÃ©dio', 'EM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_duvida`
--

CREATE TABLE IF NOT EXISTS `tb_duvida` (
  `cd_duvida` int(11) NOT NULL AUTO_INCREMENT,
  `ds_duvida` varchar(220) NOT NULL,
  `st_publica` tinyint(1) NOT NULL,
  `dt_postagem` date NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_aluno` int(11) NOT NULL,
  PRIMARY KEY (`cd_duvida`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_aluno` (`id_aluno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fale_conosco`
--

CREATE TABLE IF NOT EXISTS `tb_fale_conosco` (
  `cd_fale_conosco` int(11) NOT NULL AUTO_INCREMENT,
  `nm_publico` varchar(220) NOT NULL,
  `nm_sobrenome` varchar(220) NOT NULL,
  `nm_email` varchar(220) NOT NULL,
  `nm_tipo` varchar(220) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`cd_fale_conosco`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `cd_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_funcionario` varchar(220) NOT NULL,
  `nm_sobrenome` varchar(220) NOT NULL,
  `nm_foto` varchar(220) NOT NULL,
  `nm_cargo` varchar(220) NOT NULL,
  `ds_cargo` varchar(220) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`cd_funcionario`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`cd_funcionario`, `nm_funcionario`, `nm_sobrenome`, `nm_foto`, `nm_cargo`, `ds_cargo`, `id_usuario`) VALUES
(2, 'Anali', 'Rodrigues', 'foto-funcionario/anali.jpg', 'Assistente Administrativo', ' Auxilia na DireÃ§Ã£o de ServiÃ§os e na Diretoria AcadÃªmica.', 1),
(3, 'Lucymilia', 'PÃ¡jaro', 'foto-funcionario/lucymilia.jpg', 'Auxiliar Administrativo', 'Trabalha diretamente na Secretaria, atendendo alunos e funcionÃ¡rios, e apoiando no processo de documentaÃ§Ã£o necessÃ¡ria a administraÃ§Ã£o da ETEC.', 1),
(4, 'Ederson', 'Teixeira', 'foto-funcionario/ed.jpg', 'Auxiliar Administrativo', 'Trabalha diretamente na Secretaria, atendendo alunos e funcionÃ¡rios, e apoiando no processo de documentaÃ§Ã£o necessÃ¡ria a administraÃ§Ã£o da ETEC.', 1),
(5, 'Jairo', 'Malta Miranda', 'foto-funcionario/jairo.jpg', 'Auxiliar Administrativo', 'Trabalha diretamente na Secretaria, atendendo funcionÃ¡rios e professores da unidade.', 1),
(6, 'Noemia', 'Tomoko', 'foto-funcionario/tomoko.jpg', 'Auxiliar Administrativo', 'Trabalha diretamente na Secretaria, atendendo alunos e funcionÃ¡rios, e apoiando no processo de documentaÃ§Ã£o necessÃ¡ria a administraÃ§Ã£o da ETEC.', 1),
(7, 'DÃ©bora', 'Cravo', 'foto-funcionario/debora.jpg', 'Auxiliar Administrativo', 'Trabalha diretamente na Secretaria, atendendo alunos e funcionÃ¡rios, e apoiando no processo de documentaÃ§Ã£o necessÃ¡ria a administraÃ§Ã£o da ETEC.', 1),
(8, 'AntÃ´nio', 'Felipe', 'foto-funcionario/felipe.jpg', 'Auxiliar Docente', 'ResponsÃ¡vel pelo CI - Centro de InformÃ¡tica da Etec.', 1),
(9, 'Rodrigo', 'Arruda', 'foto-funcionario/rodrigo.jpg', 'Auxiliar Docente', 'ResponsÃ¡vel pelo CI - Centro de InformÃ¡tica da Etec. ', 1),
(10, 'Fabiano', 'Groppo', 'foto-funcionario/fabiano.jpg', 'Auxiliar Docente', 'ResponsÃ¡vel pelos LaboratÃ³rios de QuÃ­mica e Biologia.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_horario_coordenador`
--

CREATE TABLE IF NOT EXISTS `tb_horario_coordenador` (
  `cd_horario_coordenador` int(11) NOT NULL AUTO_INCREMENT,
  `hr_entrada` time NOT NULL,
  `hr_saida` time NOT NULL,
  `nm_dia_semana` varchar(220) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_horario_coordenador`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Extraindo dados da tabela `tb_horario_coordenador`
--

INSERT INTO `tb_horario_coordenador` (`cd_horario_coordenador`, `hr_entrada`, `hr_saida`, `nm_dia_semana`, `id_usuario`) VALUES
(30, '20:30:00', '21:30:00', 'Sexta-feira', 9),
(29, '14:30:00', '18:30:00', 'Sexta-feira', 9),
(28, '08:00:00', '14:00:00', 'Quinta-feira', 9),
(18, '16:00:00', '22:00:00', 'Segunda-feira', 8),
(19, '16:00:00', '21:00:00', 'TerÃ§a-feira', 8),
(20, '09:00:00', '12:30:00', 'Quarta-feira', 8),
(21, '13:30:00', '18:00:00', 'Quarta-feira', 8),
(22, '14:00:00', '17:00:00', 'Quinta-feira', 8),
(23, '14:30:00', '18:30:00', 'Sexta-feira', 8),
(24, '20:30:00', '21:30:00', 'Sexta-feira', 8),
(25, '15:00:00', '21:00:00', 'Segunda-feira', 9),
(26, '08:00:00', '14:00:00', 'TerÃ§a-feira', 9),
(27, '13:30:00', '18:30:00', 'Quarta-feira', 9),
(31, '07:30:00', '11:30:00', 'Segunda-feira', 10),
(32, '10:00:00', '16:00:00', 'TerÃ§a-feira', 10),
(33, '16:30:00', '19:30:00', 'Quarta-feira', 10),
(34, '14:00:00', '17:00:00', 'Quinta-feira', 10),
(35, '10:00:00', '14:00:00', 'Sexta-feira', 10),
(36, '15:00:00', '17:00:00', 'Sexta-feira', 10),
(37, '19:00:00', '20:30:00', 'Segunda-feira', 11),
(38, '16:00:00', '20:30:00', 'Quarta-feira', 11),
(39, '10:00:00', '12:00:00', 'Quinta-feira', 11),
(40, '21:00:00', '23:00:00', 'Quinta-feira', 11),
(41, '17:30:00', '18:30:00', 'Segunda-feira', 12),
(42, '21:00:00', '23:00:00', 'Segunda-feira', 12),
(43, '15:30:00', '20:30:00', 'Quarta-feira', 12),
(44, '10:00:00', '11:30:00', 'Quinta-feira', 12),
(45, '10:00:00', '11:30:00', 'Sexta-feira', 12),
(46, '21:30:00', '23:00:00', 'Segunda-feira', 13),
(47, '19:30:00', '21:30:00', 'TerÃ§a-feira', 13),
(48, '15:00:00', '19:00:00', 'Quarta-feira', 13),
(49, '20:30:00', '21:30:00', 'Quinta-feira', 13),
(50, '20:30:00', '23:00:00', 'Sexta-feira', 13),
(51, '16:00:00', '18:30:00', 'TerÃ§a-feira', 14),
(52, '11:40:00', '12:40:00', 'Quarta-feira', 14),
(53, '09:30:00', '14:30:00', 'Segunda-feira', 15),
(54, '12:30:00', '17:30:00', 'TerÃ§a-feira', 15),
(55, '13:20:00', '14:00:00', 'Quarta-feira', 15),
(56, '14:50:00', '17:50:00', 'Quarta-feira', 15),
(57, '12:30:00', '14:50:00', 'Quinta-feira', 15),
(58, '15:40:00', '17:40:00', 'Quinta-feira', 15),
(59, '12:30:00', '14:30:00', 'Sexta-feira', 15),
(60, '16:00:00', '21:30:00', 'Segunda-feira', 16),
(61, '09:30:00', '12:30:00', 'TerÃ§a-feira', 16),
(62, '18:00:00', '21:30:00', 'Quarta-feira', 16),
(63, '09:30:00', '12:30:00', 'Quinta-feira', 16),
(64, '09:30:00', '12:30:00', 'Sexta-feira', 16),
(65, '18:00:00', '19:00:00', 'Sexta-feira', 16),
(66, '20:30:00', '21:30:00', 'Sexta-feira', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia`
--

CREATE TABLE IF NOT EXISTS `tb_materia` (
  `cd_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nm_materia` varchar(220) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`cd_materia`),
  KEY `id_curso` (`id_curso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_materia`
--

INSERT INTO `tb_materia` (`cd_materia`, `nm_materia`, `id_curso`) VALUES
(1, 'matematica', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_materia_usuario` (
  `cd_materia_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_materia_usuario`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_materia` (`id_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_materia_usuario`
--

INSERT INTO `tb_materia_usuario` (`cd_materia_usuario`, `id_materia`, `id_usuario`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo`
--

CREATE TABLE IF NOT EXISTS `tb_tipo` (
  `cd_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tipo` varchar(220) NOT NULL,
  PRIMARY KEY (`cd_tipo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_tipo`
--

INSERT INTO `tb_tipo` (`cd_tipo`, `nm_tipo`) VALUES
(1, 'adm'),
(2, 'Coordenador'),
(3, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE IF NOT EXISTS `tb_turma` (
  `cd_turma` int(11) NOT NULL AUTO_INCREMENT,
  `dt_ano_inicio` year(4) NOT NULL,
  `dt_ano_fim` year(4) NOT NULL,
  `nr_ano` int(11) NOT NULL,
  `st_ativo` tinyint(1) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`cd_turma`),
  KEY `id_curso` (`id_curso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`cd_turma`, `dt_ano_inicio`, `dt_ano_fim`, `nr_ano`, `st_ativo`, `id_curso`) VALUES
(1, 2018, 2020, 1, 1, 1),
(2, 2017, 2019, 2, 1, 1),
(3, 2016, 2018, 3, 1, 1),
(4, 2018, 2020, 1, 1, 2),
(5, 2017, 2019, 2, 1, 2),
(6, 2016, 2018, 3, 0, 2),
(7, 2018, 2020, 1, 1, 3),
(8, 2017, 2019, 2, 0, 3),
(9, 2016, 2018, 3, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(220) NOT NULL,
  `nm_sobrenome` varchar(220) NOT NULL,
  `nm_foto` varchar(220) NOT NULL,
  `ds_descricao` varchar(200) NOT NULL,
  `nm_login` varchar(220) NOT NULL,
  `nm_senha` varchar(20) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  PRIMARY KEY (`cd_usuario`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `nm_sobrenome`, `nm_foto`, `ds_descricao`, `nm_login`, `nm_senha`, `id_tipo`) VALUES
(1, 'Gustavo', 'GuimarÃ£es Cervo', 'foto-coordenadores/elissangela.jpg', 'Administrador do site', 'gustavo.adm@gmail.com', '123', 1),
(9, 'Nalita', 'Gomes', 'foto-coordenadores/nalita.jpg', 'Orientadora Educacional', 'nalita.gomes@gmail.com', '123', 2),
(8, 'ElissÃ¢ngela', 'Leite', 'foto-coordenadores/elissangela.jpg', 'Coordenadora PedagÃ³gica', 'elissangela.leite@gmail.com', '123', 2),
(10, 'Thiago', 'Pellegrini', 'foto-coordenadores/thiago.jpg', 'Coordenador do Ensino MÃ©dio Integrado', 'thiago.pellegrini@gmail.com', '123', 2),
(11, 'Jussimar', 'Leal', 'foto-coordenadores/jussimar.jpg', 'Coordenador do Curso TÃ©cnico de InformÃ¡tica para Internet', 'jussimar.leal@gmail.com', '123', 2),
(12, 'Regina', 'CÃ©lia Luz', 'foto-coordenadores/regina.jpg', 'Coordenadora do Curso TÃ©cnico de AdministraÃ§Ã£o', 'regina.celia@gmail.com', '123', 2),
(13, 'Tadeu', 'Dantas', 'foto-coordenadores/tadeu.jpg', ' Coordenador do Curso TÃ©cnico de Meio Ambiente', 'tadeu.dantas@gmail.com', '123', 2),
(14, 'Michelle', 'Barbosa', 'foto-coordenadores/michelle.jpg', 'Coordenadora do Projeto: LaboratÃ³rio PedagÃ³gico', 'michelle.barbosa@gmail.com', '123', 2),
(15, 'Roseli', 'Zizka', 'foto-coordenadores/roseli.jpg', 'ResponsÃ¡vel pela Biblioteca', 'roseli.zizka@gmail.com', '123', 2),
(16, 'Arlete', 'AtaÃ­de', 'foto-coordenadores/arlete.jpg', 'ResponsÃ¡vel pela Biblioteca', 'arlete.ataide@gmail.com', '123', 2),
(18, 'Alex', 'Marcelo dos Santos', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'alex.marcelo@gmail.com', '123', 3),
(19, 'Alex', 'Paulo de AraÃºjo', 'foto-professor/', 'Professor do Curso de Meio Ambiente', 'alex.paulo@gmail.com', '123', 3),
(20, 'Alexsandro', 'Morais dos Santos', 'foto-professor/', 'Professor do Curso de Meio Ambiente', 'alexsandro.morais@gmail.com', '123', 3),
(21, 'Amauri', 'Rodrigues de Souza', 'foto-professor/', 'Professor de MatemÃ¡tica no Ensino MÃ©dio do curso TÃ©cnico em Meio Ambiente', 'amauri.rodrigues@gmail.com', '123', 3),
(22, 'AndrÃ©', 'Luiz Ferraz', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'andre.luiz@gmail.com', '123', 3),
(23, 'Arlete', 'AtaÃ­de', 'foto-professor/', 'Professora de LÃ­ngua Portuguesa e InglÃªs TÃ©cnico nos Cursos TÃ©cnicos', 'arlete.ataide@gmail.com', '123', 3),
(24, 'ClÃ¡udio', 'Lopes Ferrini Garcia', 'foto-professor/', 'Professor de InformÃ¡tica para Internet', 'claudio.ferrini@gmail.com', '123', 3),
(25, 'DiÃ³genes', 'Leandro Pereira', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'diogenes.pereira@gmail.com', '123', 3),
(26, 'Eduardo', 'Francisco Pereira de Souza', 'foto-professor/', 'Professor do Curso TÃ©cnico em AdministraÃ§Ã£o', 'eduardo.francisco@gmail.com', '123', 3),
(27, 'Eliamar', 'Gutierres Augusto', 'foto-professor/', 'Professora do Curso TÃ©cnico em AdministraÃ§Ã£o', 'eliamar.augusto@gmail.com', '123', 3),
(28, 'Elisangela', 'Xavier Pereira dos Santos', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'elisangela.xavier@gmail.com', '123', 3),
(29, 'ElissÃ¢ngela', 'Leite', 'foto-professor/', 'Professora de Artes e Coordenadora PedagÃ³gica', 'elissangela.leite@gmail.com', '123', 3),
(30, 'Fulvio', 'Fusaro Caratin', 'foto-professor/', 'Professor do Ensino MÃ©dio', 'fulvio.fusaro@gmail.com', '123', 3),
(31, 'JoÃ£o', 'Bosco Gianotti', 'foto-professor/', 'Professor de Biologia do Ensino MÃ©dio e do curso TÃ©cnico em Meio Ambiente', 'joao.bosco@gmail.com', '123', 3),
(32, 'JoÃ£o', 'GonÃ§alves Macedo', 'foto-professor/', 'Professor de HistÃ³ria do Ensino MÃ©dio', 'joao.macedo@gmail.com', '123', 3),
(33, 'Joelma', 'Lucia Sartori Ribeiro', 'foto-professor/', 'Professora do Curso de InformÃ¡tica para Internet', 'joelma.sartori@gmail.com', '123', 3),
(34, 'JosÃ©', 'Adriano de Barros', 'foto-professor/', 'Professor de QuÃ­mica do Ensino MÃ©dio e do curso TÃ©cnico em Meio Ambiente', 'jose.adriano@gmail.com', '123', 3),
(35, 'JosÃ©', 'Wellington Costa Silva', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'jose.wellington@gmail.com', '123', 3),
(36, 'JÃºlio', 'CÃ©sar Menezes Borges', 'foto-professor/', 'Professor de Biologia do Ensino MÃ©dio e do curso TÃ©cnico em Meio Ambiente', 'julio.borges@gmail.com', '123', 3),
(37, 'Jussimar', 'Leal', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'jussimar.leal@gmail.com', '123', 3),
(38, 'Karina', 'Verdum Galhardo', 'foto-professor/', 'Professora do Ensino MÃ©dio', 'karina.verdum@gmail.com', '123', 3),
(39, 'Lucas', 'de Souza Machado Costa', 'foto-professor/', 'Professor de Biologia do Ensino MÃ©dio e do Curso TÃ©cnico em Meio Ambiente', 'lucas.costa@gmail.com', '123', 3),
(40, 'Luiz', 'Fernando Mosolino de Oliveira', 'foto-professor/', 'Professor de FÃ­sica e MatemÃ¡tica do Ensino MÃ©dio', 'luiz.mosolino@gmail.com', '123', 3),
(41, 'Marcelo', 'Gazzo', 'foto-professor/', 'Professor do Curso TÃ©cnico em Meio Ambiente', 'marcelo.gazzo@gmail.com', '123', 3),
(42, 'Marcelo', 'HipÃ³lito de Moura', 'foto-professor/', 'Professor do Curso de AdministraÃ§Ã£o', 'marcelo.moura@gmail.com', '123', 3),
(43, 'Michelle', 'Barbosa AraÃºjo', 'foto-professor/', 'Professora do Curso de InformÃ¡tica para Internet', 'michelle.barbosa@gmail.com', '123', 3),
(44, 'Moema', 'Setubal de Souza', 'foto-professor/', 'Professora de AdministraÃ§Ã£o', 'moema.setubal@gmail.com', '123', 3),
(45, 'Murillo', 'da Silva Nascimento', 'foto-professor/', 'Professor de MatemÃ¡tica', 'murillo.nascimento@gmail.com', '123', 3),
(46, 'Nalita', 'Gomes', 'foto-professor/', 'Professora de Ã‰tica e Sociologia do Ensino MÃ©dio', 'nalita.gomes@gmail.com', '123', 3),
(47, 'Nivaldo', 'Fernandes', 'foto-professor/', 'Professor de Artes do Ensino MÃ©dio', 'nivaldo.fernandes@gmail.com', '123', 3),
(48, 'Oswaldo', 'Luiz Bertoli', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'oswaldo.bertoli@gmail.com', '123', 3),
(49, 'Regina', 'CÃ©lia Vieira de Morais', 'foto-professor/', 'Professor do Curso de AdministraÃ§Ã£o', 'regina.morais@gmail.com', '123', 3),
(50, 'Rodolfo', 'AraÃºjo', 'foto-professor/', 'Professor do Curso de InformÃ¡tica para Internet', 'rodolfo.araujo@gmail.com', '123', 3),
(51, 'Rodrigo', 'Ferraz', 'foto-professor/', 'Professora de Geografia do Ensino MÃ©dio e do curso TÃ©cnico Meio Ambiente', 'rodrigo.ferraz@gmail.com', '123', 3),
(52, 'Roseli', 'Zizka', 'foto-professor/', 'Professora de QuÃ­mica do Ensino MÃ©dio e do curso TÃ©cnico Meio Ambiente', 'roseli.zizka@gmail.com', '123', 3),
(53, 'Tadeu', 'Dantas de Souza', 'foto-professor/', 'Professor de Biologia do Ensino MÃ©dio e do curso TÃ©cnico Meio Ambiente', 'tadeu.souza@gmail.com', '123', 3),
(54, 'Thiago', 'Pellegrini', 'foto-professor/', 'Professor de Biologia do Ensino MÃ©dio e do curso TÃ©cnico Meio Ambiente', 'thiago.pellegrini@gmail.com', '123', 3),
(55, 'Valdemar', 'Cardoso', 'foto-professor/', 'Professor de FÃ­sica do Ensino MÃ©dio', 'valdemar.cardoso@gmail.com', '123', 3),
(56, 'Viviane', 'Barbosa Rasga Aires', 'foto-professor/', 'Professor de LÃ­ngua Portuguesa do Ensino MÃ©dio', 'viviane.rasga@gmail.com', '123', 3),
(57, 'Willians', 'Souza de Oliveira', 'foto-professor/', 'Professor de EducaÃ§Ã£o FÃ­sica do Ensino MÃ©dio', 'willians.souza@gmail.com', '123', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
