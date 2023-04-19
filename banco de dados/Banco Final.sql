CREATE DATABASE  IF NOT EXISTS `geekclub` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `geekclub`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: geekclub
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Vestuário'),(2,'Colecionáveis'),(3,'Acessórios'),(4,'Jogos e Brinquedos'),(5,'Televisívos'),(6,'Papelaria'),(7,'Destaques');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `CPF` bigint(20) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Sobrenome` varchar(30) NOT NULL,
  `Telefone` varchar(11) NOT NULL,
  `Sexo` enum('F','M') NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `NumeroCasa` int(11) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Estado` char(2) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nivel` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (123456789,'Emilly ','Cartacho','11967543476','F','Rua das rosas',524,'SÃ£o Paulo','SP','emilly','123','1'),(1860750141,'Beatriz','Siqueira','11996888049','F','rua artur de oliveira',704,'sÃ£o paulo','SP','beatriz','123','2');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idp` int(11) NOT NULL,
  `idc` bigint(20) DEFAULT NULL,
  `numerocartao` int(11) NOT NULL,
  `datavalidade` date NOT NULL,
  `codigoseguranca` int(11) NOT NULL,
  `pagamento` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idp` (`idp`),
  KEY `idc` (`idc`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `produtos` (`id`),
  CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idc`) REFERENCES `cliente` (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` varchar(10) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `subcategoria` varchar(100) DEFAULT NULL,
  `tema` varchar(100) DEFAULT NULL,
  `tamanho_imagem` varchar(100) DEFAULT NULL,
  `tipo_imagem` varchar(100) DEFAULT NULL,
  `nome_imagem` varchar(100) DEFAULT NULL,
  `imagem` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (2,'Camiseta Masculina - Capitao America','Tecido de 100% algodao, com fio 30.1 penteado da melhor categoria.','59,90','1','2','Marvel','37931','image/jpeg','mas2.jpg',NULL),(3,'Blusa 3D Super-Heroi Manga Longa - Pantera Negra	','Imperdivel roupa masculina com estampa 3D inspirada no personagem Pantera Negra.','94,90','1','2','Marvel','66952','image/jpeg','mas3.jpg',NULL),(4,'Camiseta Masculina - Angry Birds','Camiseta em personalizada, 100% Poliester','49,90','1','2','Jogos','24790','image/jpeg','mas4.jpg',NULL),(5,'Camiseta Esquadrao Suicida - Coringa','Estampa do personagem Coringa (Suicide Squad) alta qualidade, malha penteada 100% algodao','59,99','1','2','Dc','127693','image/jpeg','mas5.jpg',NULL),(6,'Camiseta Masculina - Marshmello','Malha 100% Algodao com fio 30.1 penteado','79,90','1','2','musica','126904','image/jpeg','mas9.jpg',NULL),(7,'Camiseta personalizada - Radiohead','Malha 100% algodao penteado 30.1 de excelente qualidade','35,90','1','2','musica','78251','image/jpeg','mas10.jpg',NULL),(9,'Mascara Star Wars','Mascara, sua fantasia ficar ainda mais completa nao deixando faltar nada.','55,50','2','4','Star Wars','24310','image/jpeg','r7.jpg',NULL),(10,'Gerador de Pulso De Alta Tensao Geek','Isto e Perigoso!!! Dispositivo de teste.','158,50','2','4','Tecnologia','37345','image/jpeg','r8.jpg',NULL),(12,'Replica De Navio 3d Metal','A linha 3D Metal Model 360 realmente impressiona pelos incriveis detalhes nas pecas.','95,90','2','4','Metal Geek','92050','image/jpeg','r2.jpg',NULL),(13,'Kit Mini Replicas de Montar Star Trek','E um perfeito passa-tempo e hobbie para amantes de miniaturas','230,20','2','4','Star Trek','21281','image/jpeg','r3.jpg',NULL),(14,'Mini Replica de Montar Star Wars Rogue One K-2SO','O robozinho mais famoso do cinema, montado por voce!','99,99','2','4','Star Wars','14205','image/jpeg','r4.jpg',NULL),(15,'Kit Mini Replicas de Montar Marvel','O kit acompanha 4 Replicas: Homem de Ferro e capacete, Martelo do Thor e Escudo do Capitao America','120,70','2','4','Marvel','35678','image/jpeg','r1.jpg',NULL),(16,'Mini Replica de Montar Halo Master Chief Helmet','Um dos personagens mais famosos do mundo gamer, montado por voce!','139,40','2','4','Halo','169083','image/jpeg','r5.jpg',NULL),(17,'Fone de Ouvido Sem fio Bluetooth','Intra Auricular sem fio com Player Portatil','59,90','3','7','Bluetooth','6851','image/jpeg','fo2.jpg',NULL),(18,'Fone de Ouvido Earphone Intraauricular Caveira','Conexao Stereo 3.5, alcance de frequencia 20Hz-2000Hz com poder maximo ','29,90','3','7','Skul','9925','image/jpeg','fo3.jpg',NULL),(19,'Pikachu - Pelucia Pokemon','Personagem De Pelucia Pokemon - Pikachu - Com Aproximadamente 25 Cm De Altura','59,90','2','6','PokemÃ³n','5556','image/jpeg','p1.jpg',NULL),(20,'Flash Pelucia DC','Cor: Vermelho com tamanho aproximadamente de 18cm','49,90','2','6','Dc','111005','image/jpeg','p5.jpg',NULL),(21,'Boneco Naruto - Pop Funk','Boneco em PVC altamente detalhado, na caixa. Produto importado no Brasil','75,00','2','5','Naruto','101028','image/jpeg','p3.jpg',NULL),(22,'Carrie A Estranha - Stephen King','Produto com material de vinil com altura acima de 10cm. Nao recomendado para menores de 5 anos','94,90','2','5','Terror','46049','image/jpeg','p6.jpg',NULL),(23,'Metal Die Cast Batman Classico','Sao pecas feitas em metal de qualidade e sao extremamente detalhadas.','95,90','4','12','Dc','7481','image/jpeg','a4.jpg',NULL),(24,'Metal Die Cast Homem de Ferro','Sao pecas feitas em metal de qualidade e sao extremamente detalhadas.','149,90','4','12','Marvel','6610','image/jpeg','a6.jpg',NULL),(25,'Jogo VocÃª Sabia?- estrela','Esse jogo de tabuleiro e muito divertido. Voce vai aprender muitas curiosidades do mundo brincando','89,95','4','10','You Tube','48252','image/jpeg','j9.jpg',NULL),(26,'Jogo Detetive - Estrela','Dr. Pessoa e a vitima do crime. Sao muitas pistas para atrapalhar a investigaÃ§ao','99,95','4','10','Estrela','190059','image/jpeg','j11.jpg',NULL),(27,'Fifa 18 - Xbox 360','FIFA 18 traz o artilheiro historico do Real Madrid Cristiano Ronaldo.','129,99','4','11','Futebol','93290','image/jpeg','xbox 10.jpg',NULL),(28,'Crash Bandicoot n`Sane Trilogy','Seu marsupial favorito, Crash Bandicoot, esta de volta! Ele esta melhorado, animado e pronto para a ','149,50','4','11','Crash','150173','image/jpeg','pla4 5.jpg',NULL),(29,'Caderno Jogos Vorazes 96fls','Miolo pautado, folha de adesivos, 96 folhas e formato 200 x 275 da Tilibra','19,90','6','15','Jogos Vorazes','53871','image/jpeg','ca4.jpg',NULL),(30,'Caderno Universitario Batman X Super Homem','Caderno espiral universitario de capa dura 12 x 1 de 240 folhas da Jandaia ','45,90','6','15','Dc','465320','image/png','ca7.png',NULL),(31,'Moletom unissex  Personalizado - La Casa De Papel','Super quentinho flanelado na parte interna, material unica de alta qualidade que vai lhe proporcinar','259,95','1','3','La Casa de Papel','125570','image/jpeg','m11.jpg',NULL),(35,'Camiseta Masculina - Hulk','Camiseta masculina personalizada confeccionada em tecido algodao.\r\n','39,90','1','2','Marvel','41766','image/jpeg','mas1.jpg',''),(37,'Chaveiro EsquadrÃ£o Suicida Arlequina','Leve para sua mochila o esquadrÃ£o suicida,chaveiro feito em metal fosco com os grandes anti-herÃ³is','19,95','3','8','Dc','5442','image/jpeg','ch1.jpg',''),(38,'Chaveiro PelÃºcia Cyberman Doctor Who','Carregue o seu proprio Cyberman para onde vocÃª for, Chaveiro pelÃºcia Cyberman.\r\nUm Cyberman nunca ','29,90','3','8','Doctor Who','3768','image/jpeg','ch2.jpg',''),(39,'Estojo Multiuso Play','Estojo Play com visual super bacana de controle de video game, um item multiuso para vocÃª guardar o','25,80','6','18','Papelaria','36745','image/jpeg','e1.jpg',''),(40,'Estojo Naruto Sasuke Sakura Anime','Peso do Item:100g Altura do Item:9cm Material do Forro:AlgodÃ£o ComposiÃ§Ã£o: PU Leather Nylon','22,50','6','18','Naruto','95672','image/jpeg','e2.jpg',''),(41,'Mochila Escolar Anime Death Note ','Mochila escolar death note, Ã³tima qualidade, linda mochila, tamanho da mochila Ã© de 45cm de altura','215,90','3','9','Anime','29174','image/jpeg','mo1.jpg',''),(42,'Mala de viagem media  herÃ³is Marvel ','Nunca perder a mala na viagem, com essa mala de herÃ³is tudo ficara salvo\r\nTamanho:\r\nAltura: 66,6 cm','245,90','3','9','Marvel','382674','image/jpeg','mo2.jpg',''),(45,'Caneta Flutuante C-3PO Star Wars\r\n','Produto oficial.\r\nC-3PO do Star Wars.\r\nCor da tinta: Preto.\r\nC-3PO flutuante na caneta.\r\nDivertido p','14,95','6','17','Star Wars','18160','image/jpeg','c1.jpg',''),(46,'Caneta do Batman com detalhes ','Ã‰ sempre bom ter uma caneta por perto. Nunca se sabe quando podemos precisar de uma.','25,90','6','17','Dc','37420','image/jpeg','c2.jpg',''),(47,'Blusa feminina','cor: branca\r\nTECIDO: O tecido das camisetas Ã© 100% algodÃ£o, com fio 30.1 penteado','29,99','1','1','Game of thrones','17240','image/jpeg','f1.jpg',''),(49,'Camiseta Feminina ','tecido 100% algodÃ£o, malha penteada / fio 30.1;\r\nestampa desbotada (Yoda)\r\n- tag interno com recome','35,90','1','1','Star Wars','5582','image/jpeg','f2.jpg',''),(50,'Liga da JustiÃ§a','Impulsionado pela restauraÃ§Ã£o de sua fÃ© na humanidade e inspirado pelo ato altruÃ­sta do Superman','24,95','5','13','Dc','21301','image/jpeg','fs1.jpg',''),(51,'Serie DARK  ','A histÃ³ria acompanha quatro diferentes famÃ­lias que vivem em uma pequena cidade alemÃ£. Suas vidas','45,90','5','14','Netflix','1056448','image/jpeg','fs2.jpg',''),(52,'Agenda Super Mario ','Agenda com imagem do Super Mario\r\nMario Time\r\nMedidas: 14 cm x 20.5 ','56,80','6','16','Jogos','34278','image/jpeg','a2.jpg','');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategorias`
--

DROP TABLE IF EXISTS `subcategorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategorias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategorias`
--

LOCK TABLES `subcategorias` WRITE;
/*!40000 ALTER TABLE `subcategorias` DISABLE KEYS */;
INSERT INTO `subcategorias` VALUES (1,'Camisetas Femininas',1),(2,'camisetas Masculinas',1),(3,'Moletom',1),(4,'Réplicas',2),(5,'POP FUNK',2),(6,'Pelucias',2),(7,'Fones de ouvidos',3),(8,'Chaveiros',3),(9,'Malas e Mochilas',3),(10,'Tabuleiros',4),(11,'Video Games',4),(12,'Action Figure',4),(13,'Filmes',5),(14,'Séries',5),(15,'Cadernos',6),(16,'Agendas',6),(17,'Canetas',6),(18,'Estojos',6);
/*!40000 ALTER TABLE `subcategorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'geekclub'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

