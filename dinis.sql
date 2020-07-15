-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Fev-2018 às 12:37
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mensagem` varchar(350) NOT NULL,
  `data_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `morada` varchar(250) NOT NULL,
  `id_localidade` int(11) NOT NULL,
  `id_tipo_local` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(3500) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `latitude` varchar(250) DEFAULT NULL,
  `longitude` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`id`, `nome`, `morada`, `id_localidade`, `id_tipo_local`, `data`, `descricao`, `foto`, `latitude`, `longitude`) VALUES
(9, 'Hotel Moutados', 'Av. do Brasil 1223, 4764-983 Vila Nova de FamalicÃ£o', 14, 1, '2018-02-04', 'Famoso pelos seus cozinhados', 'Hotel_Moutados.jpg', '', ''),
(25, 'Restaurante Forever', 'R. Nuno SimÃµes 103, 4760-372 Vila Nova de FamalicÃ£o', 34, 4, '2018-02-05', 'A marca Forever restaurantes surgiu em 1987 em Vila Nova de FamalicÃ£o. O que comeÃ§ou por ser um pequeno cafÃ© e onde se comeÃ§aram a cozinhar as primeiras refeiÃ§Ãµes rapidamente se transformou num restaurante devido Ã  excelente adesÃ£o de novos clientes.\r\nA marca foi evoluindo e passou a ser uma referÃªncia na cidade de Vila Nova de FamalicÃ£o devido Ã  excelÃªncia do seu espaÃ§o e Ã  qualidade do serviÃ§o e dos seus produtos nomeadamente a francesinha.\r\nHÃ¡ quem jure a pÃ©s juntos que nunca comeu uma francesinha melhor que esta. Da apresentaÃ§Ã£o ao sabor, as francesinhas do Forever levaram a boa fama da marca atÃ© Ã  cidade de Braga.\r\nEm 2012 surgiu o Forever Braga, um espaÃ§o moderno e acolhedor com um ambiente informal onde se pode degustar um bife de novilho, um bacalhau com natas, uma salada de salmÃ£o, um menu infantil, um hambÃºrguer e, claro, as francesinhas em tamanho pequeno, mÃ©dio e super.\r\nTemos tambÃ©m, um desafio para os mais valentes, ou seja, a pessoa que conseguir comer uma super francesinha com batatas e uma francesinha mÃ©dia com batatas nÃ£o tem de pagar nada.', '454be22e98c0307de526f510aeb2b90b.jpg', '', ''),
(26, 'Restaurante Moutados De Baixo', 'Av. do Brasil 1701, 4760-001 Vila Nova de FamalicÃ£o', 14, 4, '2018-02-05', 'Cozinha tradicional num bom restaurante. ConfeÃ§Ã£o tipicamente minhota. Sabe-se sempre o que se espera. Muito bom.', 'fb910e639a332d2a612146fd6889cc76.jpg', '', ''),
(27, 'Hotel Concha', ' Largo Vitorino FrÃ³is 21, 2465 - 684 SÃ£o Martinho do Porto', 32, 1, '2018-02-05', 'O Hotel Concha, em SÃ£o Martinho do Porto, dispÃµe de acomodaÃ§Ãµes, de um salÃ£o partilhado e de um bar. Este hotel de 3 estrelas apresenta quartos com ar condicionado e uma casa de banho privativa.', 'bed6169f5708d28866e008f8259c6729.jpg', '', ''),
(28, 'Igreja de Santiago de Antas', 'Igreja de Santiago de Antas', 30, 2, '2018-02-05', 'A Igreja de Santiago de Antas localiza-se na freguesia de Antas, no concelho de Vila Nova de FamalicÃ£o, distrito de Braga, em Portugal.', '99651e18e719ce9cbaba5def8cc98e75.jpg', '', ''),
(29, 'Igreja Matriz', 'Alameda Cardeal Cerejeira 105, 4760-108 Vila Nova de FamalicÃ£o', 34, 2, '2018-02-05', 'Os pÃ¡rocos querem estar prÃ³ximos das pessoas e Ã© esta a razÃ£o porque se envolvem tÃ£o profundamente na vida da sociedade e das pessoas.', 'e255e5fa284122e6c4c34017a695c4bc.jpg', '', ''),
(30, 'Parque da Devesa', 'Vila Nova de FamalicÃ£o', 34, 5, '2018-02-05', 'O Parque da Devesa, Ã© um Parque urbano situado no municÃ­pio de Vila Nova de FamalicÃ£o, Portugal, destinado ao lazer, atividades lÃºdicas e desportivas. Ã‰ atravessado pelo rio Pelhe. DispÃµe de um Anfiteatro com capacidade para 1000 espectadores.', '4786e227245ecaca6ddf773952ab980b.jpg', '', ''),
(31, 'Museu da IndÃºstria TÃªxtil da Bacia do Ave', 'R. JoÃ£o Machado da Silva 290, Vila Nova de FamalicÃ£o', 34, 3, '2018-02-05', '\r\nLocalizada no Noroeste de Portugal, a Bacia do Ave constitui uma Ã¡rea fortemente marcada pela indÃºstria tÃªxtil algodoeira, tendo a primeira fÃ¡brica tÃªxtil moderna sido fundada em 1845, em Negrelos, Vila das Aves. Uma das principais razÃµes para o florescimento da indÃºstria na Bacia do Ave estÃ¡ relacionada com o aproveitamento de energia hidrÃ¡ulica para o accionamento das fÃ¡bricas. Desde entÃ£o, a indÃºstria tÃªxtil constitui a sua principal actividade econÃ³mica â€“ principalmente nos concelhos de Fafe, GuimarÃ£es, Vila Nova de FamalicÃ£o e Santo Tirso â€“, e actualmente Ã© a mais importante regiÃ£o tÃªxtil de Portugal.', '72e427608defec056208ee8283d621b5.jpg', '', ''),
(32, 'Museu Bernardino Machado', 'R. Adriano Pinto Basto 79, 4760 - 114 Vila Nova de FamalicÃ£o', 34, 3, '2018-02-05', 'O Museu Bernardino Machado Ã© um museu dedicado ao estadista Bernardino Machado, localizado na freguesia e concelho de Vila Nova de FamalicÃ£o, distrito de Braga, em Portugal.', 'e3dc7aa23c035d933d5bb81547b41340.jpg', '', ''),
(33, 'FundaÃ§Ã£o Cupertino de Miranda', 'PraÃ§a Dona Maria II, 4760-111 Vila Nova de FamalicÃ£o', 34, 5, '2018-02-06', 'FundaÃ§Ã£o Cupertino Miranda em FamalicÃ£o. O espaÃ§o do surrealismo portugues, livraria da fundaÃ§Ã£o, onde pode encontrar ediÃ§Ãµes da assirio alvim. ConheÃ§a as nossas actividades educativas e nossa agenda cultural. NÃ£o perca os nossos encontros MÃ¡rio Cesariny.', '94a4dbaac5b483c8e9a28e667bcc92bc.jpg', '', ''),
(34, 'FamalicÃ£o Made In', 'Avenida Marechal Humberto Delgado, 180 3Âº B, 4760-012 Vila Nova de FamalicÃ£o', 34, 5, '2018-02-08', 'A iniciativa FamalicÃ£o Made IN Ã© uma das grandes apostas do MunicÃ­pio de Vila Nova de FamalicÃ£o para promover o desenvolvimento econÃ³mico do concelho. Baseada na promoÃ§Ã£o de um contexto municipal facilitador da iniciativa empresarial, procura valorizar e promover a genÃ©tica empreendedora do municÃ­pio.', 'db7359be410c3ad0b8b8ec07ddf269a2.jpg', '', ''),
(35, 'Casa de Camilo Castelo Branco', 'R. SÃ£o Miguel 758, 4770-631 SÃ£o Miguel Seide', 34, 3, '2018-02-05', 'A Casa-Museu de Camilo foi construÃ­da nos inÃ­cios do sÃ©c. XIX por Manuel Pinheiro Alves, um brasileiro de torna viagem. Depois da sua morte em 1863, Camilo Castelo Branco veio instalar-se na mansÃ£o de Ceide com Ana PlÃ¡cido em finais desse ano, e aÃ­ permaneceu com certa regularidade.', 'ab72a1805e941264082817b50f6c8233.jpg', '', ''),
(36, 'Casa das Artes de Vila Nova de FamalicÃ£o', 'Parque de SinÃ§Ã£es, Portugal, Av. Carlos Bacelar, Vila Nova de FamalicÃ£o', 34, 5, '2018-02-06', 'O CartÃ£o QuadrilÃ¡tero Cultural Ã© um cartÃ£o de fidelizaÃ§Ã£o, pessoal e intransmissÃ­vel, para o acesso, com benefÃ­cios e em condiÃ§Ãµes vantajosas, a equipamentos e eventos culturais nas quatro cidades do QuadrilÃ¡tero', '57b0f5a50075e07d0aec5c6fb7fd64ea.jpg', '', ''),
(37, 'Biblioteca Municipal Camilo Castelo Branco', 'Av. do Brasil 2450, 4760-019 Vila Nova de FamalicÃ£o', 34, 5, '2018-02-06', 'A Biblioteca Municipal Camilo Castelo Branco, que durante um longo perÃ­odo inicial localizou-se na actual Casa da Cultura, na Rua Direita, transferiu-se depois para a cave do edifÃ­cio dos PaÃ§os do Concelho.', '9841000fe01f66544c1b5f82ba68543c.jpg', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localidades`
--

CREATE TABLE `localidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `localidades`
--

INSERT INTO `localidades` (`id`, `nome`) VALUES
(1, 'Seide'),
(2, 'Landim'),
(3, 'Antas e Abade de Vermoim'),
(4, 'Arnoso (Santa Maria e Santa EulÃ¡lia) e Sezures'),
(5, 'Avidos e Lagoa'),
(6, 'Bairro'),
(7, 'Brufe'),
(8, 'Carreira e Bente'),
(9, 'CastelÃµes'),
(10, 'Cruz'),
(11, 'DelÃ£es'),
(12, 'Esmeriz e Cabeçudos'),
(13, 'Fradelos'),
(14, 'GaviÃ£o'),
(15, 'Gondifelos, CavalÃµes e Outiz'),
(16, 'Joane '),
(17, 'Lemenhe, Mouquim e Jesufrei'),
(18, 'Louro'),
(19, 'Lousado'),
(20, 'Mogege'),
(21, 'Nine'),
(22, 'Oliveira Santa Maria'),
(23, 'Oliveira SÃ£o Mateus'),
(24, 'Pousada de Saramagos'),
(25, 'Pedome'),
(26, 'RequiÃ£o'),
(27, 'Riba de Ave'),
(28, 'RibeirÃ£o'),
(29, 'RuivÃ£es e Novais'),
(30, 'Santiago de Antas'),
(31, 'Vale (SÃ£o Cosme), Telhado e Portela'),
(32, 'Vale (SÃ£o Martinho)'),
(33, 'Vermoim'),
(34, 'Vila Nova de FamalicÃ£o e CalendÃ¡rio'),
(35, 'Vilarinho das Cambas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_local`
--

CREATE TABLE `tipo_local` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_local`
--

INSERT INTO `tipo_local` (`id`, `nome`) VALUES
(1, 'Alojamento'),
(2, 'Igreja'),
(3, 'Museu'),
(4, 'Restaurante'),
(5, 'Ponto de interesse');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `pass`, `tipo`) VALUES
(2, 'admin', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, 'user', 'user@user.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locais`
--
ALTER TABLE `locais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_local`
--
ALTER TABLE `tipo_local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locais`
--
ALTER TABLE `locais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tipo_local`
--
ALTER TABLE `tipo_local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
