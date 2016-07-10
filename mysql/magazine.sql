-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: magazine
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` char(20) NOT NULL,
  `name_id` char(30) NOT NULL,
  `comment` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `name_id` (`name_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`username`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`name_id`) REFERENCES `item` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'123','Batman Begins','312'),(2,'123','The Dark Knight','87685'),(3,'123','The Dark Knight','Hello MOTO'),(4,'sergeeva','Batman Begins','крутой сайт\r\n'),(5,'sergeeva','The Dark Knight','Беликпаппкеепный'),(6,'sergeeva','The Dark Knight','Здорово'),(7,'sergeeva','The Dark Knight','ва\r\n'),(8,'123','A Beautiful Mind','Топ 15 Кинопоиска'),(9,'123','A Beautiful Mind','dsa'),(10,'123','Batman Begins','ddd\r\n'),(11,'UkrGas','Batman Begins','Мышка. Начало'),(12,'UkrGas','Batman Begins','точнее Мышкачеловек. Начало'),(13,'crpdm','A Beautiful Mind','BEST FILM EVER'),(14,'knightL','The Dark Knight Rises','Странный фильм, не советовал бы покупать, не стоит он того ;-)'),(15,'123','A Beautiful Mind','dsadas'),(16,'kykyxDD','The Dark Knight Rises','Фильм легенда))'),(17,'123','A Beautiful Mind','42342'),(18,'crpdm','Shrek','Осел...'),(19,'GanievaEvelina','A Beautiful Mind','Super!!!'),(20,'zroom','The Dark Knight','Классные комменты :)');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `name` char(30) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` longtext,
  UNIQUE KEY `unique_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES ('A Beautiful Mind','include/image/5.jpg','От всемирной известности до греховных глубин — все это познал на своей шкуре Джон Форбс Нэш-младший. Математический гений, он на заре своей карьеры сделал титаническую работу в области теории игр, которая перевернула этот раздел математики и практически принесла ему международную известность.\n\nОднако буквально в то же время заносчивый и пользующийся успехом у женщин Нэш получает удар судьбы, который переворачивает уже его собственную жизнь.'),('Batman Begins','include/image/1.jpg','В детстве юный наследник огромного состояния Брюс Уэйн оказался свидетелем убийства своих родителей, и тогда он решил бороться с преступностью. Спустя годы он отправляется в путешествие по миру, чтобы найти способ восстановить справедливость. Обучение у мудрого наставника боевым искусствам дает ему силу и смелость. Вернувшись в родной город, Уэйн становится Бэтменом и ведет борьбу со злом.'),('Shrek','include/image/4.jpg','Жил да был в сказочном государстве большой зеленый великан по имени Шрек. Жил он в гордом одиночестве в лесу, на болоте, которое считал своим. Но однажды злобный коротышка — лорд Фаркуад, правитель волшебного королевства, безжалостно согнал на Шреково болото всех сказочных обитателей.\n\nИ беспечной жизни зеленого великана пришел конец. Но лорд Фаркуад пообещал вернуть Шреку болото, если великан добудет ему прекрасную принцессу Фиону, которая томится в неприступной башне, охраняемой огнедышащим драконом…'),('The Dark Knight','include/image/2.jpg','Бэтмен поднимает ставки в войне с криминалом. С помощью лейтенанта Джима Гордона и прокурора Харви Дента он намерен очистить улицы от преступности, отравляющей город. Сотрудничество оказывается эффективным, но скоро они обнаружат себя посреди хаоса, развязанного восходящим криминальным гением, известным испуганным горожанам под именем Джокер.'),('The Dark Knight Rises','include/image/3.jpg','Восемь лет назад Бэтмен растворился в ночи, превратившись из героя в беглеца. Приняв на себя вину за смерть прокурора Харви Дента, он пожертвовал всем. Вместе с комиссаром Гордоном они решили, что так будет лучше для всех. Пока преступность была раздавлена антикриминальным актом Дента, ложь действовала.\n\nТем не менее, еще опаснее становится появление нового врага Бэйна, чье лицо закрыто маской. Он разворачивает в Готэме чудовищную деятельность, и это вынуждает Брюса Уэйна выйти из импровизированного изгнания. Однако даже надев свой костюм, Бэтмен может проиграть Бэйну. Но с появлением хитрой воровки по прозвищу Женщина — Кошка с загадочным прошлым всё меняется.');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `username` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  UNIQUE KEY `unique_username` (`username`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('admin','password',''),('crpdm','andre231091S','andre231091@gmail.com'),('123','123','123'),('sergeeva','231056','maryia770@mail.ru'),('UkrGas','kkk1978','asgariod@gmail.com'),('knightL','knightL','knightLA@yandex.ru'),('kykyxDD','140692','by_happy_please@mail.ru'),('GanievaEvelina','123456789','ganieva.evelina25'),('zroom','13581321','shapov_i_26@mail.ru');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-14 22:27:34
