-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: shopqa
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (4,14,'Qui mollitia nulla o','images/2Pf2EDp7wmdbQNCBoT9DxpeholswB7UMbIP0wJhN.jpg','Kidsádasd','Iaculis nunc sit dis class sagittis hymenaeos cubilia volutpat inceptos, turpis elementum potenti, suscipit eget suspendisse nisl torquent. Tellus montes class felis. Erat ut ad justo cubilia, etiam odio quisque vel. Est commodo urna sociis cum purus. Enim pellentesque potenti pretium montes laoreet Justo suspendisse. Mollis Augue dui, senectus lacus sapien risus arcu felis aliquam elementum, est in sodales nisl velit per feugiat vel lorem est magna leo lorem pellentesque phasellus posuere sociis mus Est gravida posuere fermentum dictum pharetra sociosqu. Semper nunc mollis pretium enim sagittis suspendisse fusce platea montes accumsan integer augue aliquet est ultrices ad, semper lorem dui, suscipit venenatis orci tristique pulvinar aliquet tempus placerat facilisi lacinia rutrum. Sollicitudin Varius. Tellus tincidunt. Parturient, lobortis a sollicitudin ridiculus arcu ullamcorper dictum hendrerit laoreet at malesuada vivamus. Interdum neque. Elementum sit tempor turpis enim bibendum per a condimentum dui leo. Nisl pulvinar suscipit lacus sem sagittis semper dignissim aliquam metus urna arcu nec turpis porttitor, curabitur orci hymenaeos leo praesent litora vitae luctus porttitor magnis convallis duis nisl penatibus lacinia sagittis fusce per a class curabitur metus. Dictumst neque sapien at, dignissim, cum bibendum Felis congue gravida aptent posuere. Luctus commodo in parturient. Facilisi facilisis. Natoque lobortis aliquam nam, tristique lectus taciti curabitur lobortis, magnis natoque, imperdiet ligula maecenas morbi mus gravida mollis ornare morbi proin dapibus orci pharetra fringilla varius. Porttitor, eu fermentum quam erat a ut ultrices leo dolor. Et urna nullam maecenas. Vel. Fames primis. Commodo adipiscing primis euismod curabitur varius rhoncus mauris, nibh habitasse curabitur donec lacinia facilisi a eget aliquet ullamcorper nullam. Nascetur eu netus magnis Suspendisse dignissim. Auctor per per pellentesque scelerisque erat Habitasse. Libero, sollicitudin. Porttitor semper conubia a eleifend malesuada nonummy erat vivamus. Ultricies nam, condimentum sit ipsum condimentum mi blandit facilisis ipsum cursus bibendum imperdiet congue lectus praesent. Aenean lorem, molestie quam consectetuer vitae gravida nostra metus sit vehicula euismod. Fusce scelerisque hymenaeos. Laoreet. Leo, auctor, porttitor volutpat magna eleifend fermentum lacinia in ante bibendum pulvinar, hymenaeos nisi facilisis nisi viverra imperdiet nullam fusce rutrum natoque natoque nonummy nunc adipiscing tempor. Ligula. Feugiat. Enim eleifend pede diam cubilia conubia massa pede turpis aenean risus elit ridiculus congue vestibulum tortor venenatis. Primis. Potenti auctor. Porttitor purus nascetur viverra a pretium. Vehicula penatibus vel vivamus dolor nascetur iaculis massa, duis praesent purus. Diam mollis class donec Sapien fusce sed facilisi phasellus cras. Posuere cubilia quisque sociosqu odio pede duis lorem eleifend aptent lectus adipiscing primis, primis taciti pretium eleifend varius nonummy massa justo conubia lobortis hac adipiscing Vehicula facilisis metus posuere non ultricies primis. Taciti varius nunc, turpis dolor, iaculis in iaculis consectetuer elementum dolor cras. Per maecenas sociosqu habitant commodo sed penatibus duis natoque convallis nisi posuere arcu lobortis suscipit iaculis habitant, eleifend ridiculus non erat. Habitasse Nam ut vehicula tincidunt dapibus vestibulum condimentum integer nascetur praesent sed eget congue eros faucibus suspendisse. Primis velit, gravida urna.','2023-11-22 09:59:33','2023-11-22 09:59:33'),(5,14,'jjjjjjjujujujujujujuj','images/3brYlX4XRK8alPQUJY8Yi9ewegSVwedCU546NkWj.jpg','sdes','Iaculis nunc sit dis class sagittis hymenaeos cubilia volutpat inceptos, turpis elementum potenti, suscipit eget suspendisse nisl torquent. Tellus montes class felis. Erat ut ad justo cubilia, etiam odio quisque vel. Est commodo urna sociis cum purus. Enim pellentesque potenti pretium montes laoreet Justo suspendisse. Mollis Augue dui, senectus lacus sapien risus arcu felis aliquam elementum, est in sodales nisl velit per feugiat vel lorem est magna leo lorem pellentesque phasellus posuere sociis mus Est gravida posuere fermentum dictum pharetra sociosqu. Semper nunc mollis pretium enim sagittis suspendisse fusce platea montes accumsan integer augue aliquet est ultrices ad, semper lorem dui, suscipit venenatis orci tristique pulvinar aliquet tempus placerat facilisi lacinia rutrum. Sollicitudin Varius. Tellus tincidunt. Parturient, lobortis a sollicitudin ridiculus arcu ullamcorper dictum hendrerit laoreet at malesuada vivamus. Interdum neque. Elementum sit tempor turpis enim bibendum per a condimentum dui leo. Nisl pulvinar suscipit lacus sem sagittis semper dignissim aliquam metus urna arcu nec turpis porttitor, curabitur orci hymenaeos leo praesent litora vitae luctus porttitor magnis convallis duis nisl penatibus lacinia sagittis fusce per a class curabitur metus. Dictumst neque sapien at, dignissim, cum bibendum Felis congue gravida aptent posuere. Luctus commodo in parturient. Facilisi facilisis. Natoque lobortis aliquam nam, tristique lectus taciti curabitur lobortis, magnis natoque, imperdiet ligula maecenas morbi mus gravida mollis ornare morbi proin dapibus orci pharetra fringilla varius. Porttitor, eu fermentum quam erat a ut ultrices leo dolor. Et urna nullam maecenas. Vel. Fames primis. Commodo adipiscing primis euismod curabitur varius rhoncus mauris, nibh habitasse curabitur donec lacinia facilisi a eget aliquet ullamcorper nullam. Nascetur eu netus magnis Suspendisse dignissim. Auctor per per pellentesque scelerisque erat Habitasse. Libero, sollicitudin. Porttitor semper conubia a eleifend malesuada nonummy erat vivamus. Ultricies nam, condimentum sit ipsum condimentum mi blandit facilisis ipsum cursus bibendum imperdiet congue lectus praesent. Aenean lorem, molestie quam consectetuer vitae gravida nostra metus sit vehicula euismod. Fusce scelerisque hymenaeos. Laoreet. Leo, auctor, porttitor volutpat magna eleifend fermentum lacinia in ante bibendum pulvinar, hymenaeos nisi facilisis nisi viverra imperdiet nullam fusce rutrum natoque natoque nonummy nunc adipiscing tempor. Ligula. Feugiat. Enim eleifend pede diam cubilia conubia massa pede turpis aenean risus elit ridiculus congue vestibulum tortor venenatis. Primis. Potenti auctor. Porttitor purus nascetur viverra a pretium. Vehicula penatibus vel vivamus dolor nascetur iaculis massa, duis praesent purus. Diam mollis class donec Sapien fusce sed facilisi phasellus cras. Posuere cubilia quisque sociosqu odio pede duis lorem eleifend aptent lectus adipiscing primis, primis taciti pretium eleifend varius nonummy massa justo conubia lobortis hac adipiscing Vehicula facilisis metus posuere non ultricies primis. Taciti varius nunc, turpis dolor, iaculis in iaculis consectetuer elementum dolor cras. Per maecenas sociosqu habitant commodo sed penatibus duis natoque convallis nisi posuere arcu lobortis suscipit iaculis habitant, eleifend ridiculus non erat. Habitasse Nam ut vehicula tincidunt dapibus vestibulum condimentum integer nascetur praesent sed eget congue eros faucibus suspendisse. Primis velit, gravida urna.\r\n\r\nLigula rutrum tortor sociosqu Tristique nostra, cum accumsan nostra quis tempus penatibus porttitor. Etiam, pulvinar neque risus. Mauris sagittis faucibus egestas nascetur leo fermentum aptent ante aliquam purus senectus sociosqu aliquam facilisis metus tellus facilisi maecenas etiam facilisis interdum semper et sodales etiam laoreet, facilisis cum vivamus. Luctus venenatis posuere viverra gravida morbi parturient auctor cum elit dis semper quisque, pharetra eget vitae nam venenatis risus turpis nostra ultricies natoque commodo aptent mollis. Vehicula eleifend egestas inceptos augue class ridiculus vehicula. Orci mauris suspendisse neque ornare quam sociosqu ridiculus. Dolor cubilia. Per vivamus conubia suspendisse Nostra nibh ultricies facilisis feugiat at quisque volutpat habitasse molestie ullamcorper hac. Sed arcu sed dui dis nisl nisi diam nonummy tortor sociis erat ornare scelerisque cubilia quis non feugiat sociis, sollicitudin vehicula ut. Ornare orci, potenti suspendisse suscipit vehicula eros et aenean lacinia viverra aptent Dapibus pede integer quisque quisque, amet. Montes. Montes ipsum eu fames bibendum vivamus neque vestibulum natoque dictumst in feugiat metus gravida. Sapien nec dictumst. Habitant pharetra cursus nunc pellentesque lobortis senectus natoque rhoncus sapien accumsan nulla, mus porttitor metus porta molestie, eros et ultricies duis nostra consectetuer pulvinar Fermentum, platea semper nonummy praesent blandit risus nibh id velit dictum vivamus dolor. Inceptos vulputate. Conubia habitant etiam vitae eu facilisis tortor hendrerit curabitur facilisi. Ridiculus eros condimentum sociis mi. Neque id nonummy urna aptent adipiscing. Hendrerit ante arcu venenatis viverra aliquet. Commodo. Condimentum. Nibh adipiscing bibendum convallis ullamcorper quisque Purus. Phasellus per nonummy. Porta elit lobortis congue urna blandit, curabitur dis dictum. Purus neque cras lacus augue eu. Phasellus lobortis, sollicitudin proin eu tortor. Conubia. Nibh. Suscipit scelerisque eleifend nulla eu nam parturient curae;. Morbi phasellus vestibulum rhoncus eget fermentum massa lobortis Fusce penatibus dignissim lectus hac velit pretium condimentum molestie varius dolor mus.\r\n\r\nDapibus pharetra faucibus duis aliquet quisque. Volutpat ultrices curabitur pede commodo donec. Porta nostra eu rhoncus donec gravida, sed malesuada condimentum nullam torquent pretium hac consequat quis velit torquent. Sociosqu velit. Aptent diam cras id quis volutpat lacinia cubilia sollicitudin quam sem rutrum per potenti massa nascetur risus. Nisi fusce diam sem feugiat tellus Cursus eros. Vel vel urna litora imperdiet. Convallis Primis. Quis vestibulum hymenaeos potenti nam, eros ornare donec parturient porta habitant libero. Volutpat at. Nam hendrerit hendrerit pellentesque aliquam suspendisse arcu nibh ante. Odio ridiculus nulla montes dui justo non sapien curabitur. At quis lacus. Quis sem. Per purus praesent. Bibendum natoque parturient facilisis in nulla sit pulvinar eleifend risus. Convallis netus auctor luctus a consequat, per lacinia donec tortor sed aliquam parturient scelerisque sed tempus felis urna vel blandit interdum vivamus cum senectus, tincidunt praesent, duis, lacinia integer purus mus. Leo per rhoncus hendrerit neque feugiat elit, varius vulputate cubilia augue suscipit elit viverra. Mattis. Erat fringilla blandit parturient mattis taciti venenatis sapien accumsan interdum ligula ullamcorper tempus nostra donec dignissim facilisis tortor in blandit ut. Nisi. Feugiat est montes. Lacus conubia. Parturient quisque. Curae; aenean sociis ante mattis magna potenti lorem amet arcu libero libero nisl mauris dolor condimentum ad ac elementum, per etiam Vestibulum dis accumsan semper arcu sollicitudin conubia nisi turpis, potenti pede arcu sed ipsum eleifend. Bibendum proin velit lacinia class.','2023-11-22 09:59:48','2023-11-22 10:10:57'),(6,14,'Obcaecati est aliqui','images/RfLzRSCI9vah7o54dVBHSsFzdiTz0wmQKdIhLWDW.jpg','hnhnhn','Iaculis nunc sit dis class sagittis hymenaeos cubilia volutpat inceptos, turpis elementum potenti, suscipit eget suspendisse nisl torquent. Tellus montes class felis. Erat ut ad justo cubilia, etiam odio quisque vel. Est commodo urna sociis cum purus. Enim pellentesque potenti pretium montes laoreet Justo suspendisse. Mollis Augue dui, senectus lacus sapien risus arcu felis aliquam elementum, est in sodales nisl velit per feugiat vel lorem est magna leo lorem pellentesque phasellus posuere sociis mus Est gravida posuere fermentum dictum pharetra sociosqu. Semper nunc mollis pretium enim sagittis suspendisse fusce platea montes accumsan integer augue aliquet est ultrices ad, semper lorem dui, suscipit venenatis orci tristique pulvinar aliquet tempus placerat facilisi lacinia rutrum. Sollicitudin Varius. Tellus tincidunt. Parturient, lobortis a sollicitudin ridiculus arcu ullamcorper dictum hendrerit laoreet at malesuada vivamus. Interdum neque. Elementum sit tempor turpis enim bibendum per a condimentum dui leo. Nisl pulvinar suscipit lacus sem sagittis semper dignissim aliquam metus urna arcu nec turpis porttitor, curabitur orci hymenaeos leo praesent litora vitae luctus porttitor magnis convallis duis nisl penatibus lacinia sagittis fusce per a class curabitur metus. Dictumst neque sapien at, dignissim, cum bibendum Felis congue gravida aptent posuere. Luctus commodo in parturient. Facilisi facilisis. Natoque lobortis aliquam nam, tristique lectus taciti curabitur lobortis, magnis natoque, imperdiet ligula maecenas morbi mus gravida mollis ornare morbi proin dapibus orci pharetra fringilla varius. Porttitor, eu fermentum quam erat a ut ultrices leo dolor. Et urna nullam maecenas. Vel. Fames primis. Commodo adipiscing primis euismod curabitur varius rhoncus mauris, nibh habitasse curabitur donec lacinia facilisi a eget aliquet ullamcorper nullam. Nascetur eu netus magnis Suspendisse dignissim. Auctor per per pellentesque scelerisque erat Habitasse. Libero, sollicitudin. Porttitor semper conubia a eleifend malesuada nonummy erat vivamus. Ultricies nam, condimentum sit ipsum condimentum mi blandit facilisis ipsum cursus bibendum imperdiet congue lectus praesent. Aenean lorem, molestie quam consectetuer vitae gravida nostra metus sit vehicula euismod. Fusce scelerisque hymenaeos. Laoreet. Leo, auctor, porttitor volutpat magna eleifend fermentum lacinia in ante bibendum pulvinar, hymenaeos nisi facilisis nisi viverra imperdiet nullam fusce rutrum natoque natoque nonummy nunc adipiscing tempor. Ligula. Feugiat. Enim eleifend pede diam cubilia conubia massa pede turpis aenean risus elit ridiculus congue vestibulum tortor venenatis. Primis. Potenti auctor. Porttitor purus nascetur viverra a pretium. Vehicula penatibus vel vivamus dolor nascetur iaculis massa, duis praesent purus. Diam mollis class donec Sapien fusce sed facilisi phasellus cras. Posuere cubilia quisque sociosqu odio pede duis lorem eleifend aptent lectus adipiscing primis, primis taciti pretium eleifend varius nonummy massa justo conubia lobortis hac adipiscing Vehicula facilisis metus posuere non ultricies primis. Taciti varius nunc, turpis dolor, iaculis in iaculis consectetuer elementum dolor cras. Per maecenas sociosqu habitant commodo sed penatibus duis natoque convallis nisi posuere arcu lobortis suscipit iaculis habitant, eleifend ridiculus non erat. Habitasse Nam ut vehicula tincidunt dapibus vestibulum condimentum integer nascetur praesent sed eget congue eros faucibus suspendisse. Primis velit, gravida urna.\r\n\r\nLigula rutrum tortor sociosqu Tristique nostra, cum accumsan nostra quis tempus penatibus porttitor. Etiam, pulvinar neque risus. Mauris sagittis faucibus egestas nascetur leo fermentum aptent ante aliquam purus senectus sociosqu aliquam facilisis metus tellus facilisi maecenas etiam facilisis interdum semper et sodales etiam laoreet, facilisis cum vivamus. Luctus venenatis posuere viverra gravida morbi parturient auctor cum elit dis semper quisque, pharetra eget vitae nam venenatis risus turpis nostra ultricies natoque commodo aptent mollis. Vehicula eleifend egestas inceptos augue class ridiculus vehicula. Orci mauris suspendisse neque ornare quam sociosqu ridiculus. Dolor cubilia. Per vivamus conubia suspendisse Nostra nibh ultricies facilisis feugiat at quisque volutpat habitasse molestie ullamcorper hac. Sed arcu sed dui dis nisl nisi diam nonummy tortor sociis erat ornare scelerisque cubilia quis non feugiat sociis, sollicitudin vehicula ut. Ornare orci, potenti suspendisse suscipit vehicula eros et aenean lacinia viverra aptent Dapibus pede integer quisque quisque, amet. Montes. Montes ipsum eu fames bibendum vivamus neque vestibulum natoque dictumst in feugiat metus gravida. Sapien nec dictumst. Habitant pharetra cursus nunc pellentesque lobortis senectus natoque rhoncus sapien accumsan nulla, mus porttitor metus porta molestie, eros et ultricies duis nostra consectetuer pulvinar Fermentum, platea semper nonummy praesent blandit risus nibh id velit dictum vivamus dolor. Inceptos vulputate. Conubia habitant etiam vitae eu facilisis tortor hendrerit curabitur facilisi. Ridiculus eros condimentum sociis mi. Neque id nonummy urna aptent adipiscing. Hendrerit ante arcu venenatis viverra aliquet. Commodo. Condimentum. Nibh adipiscing bibendum convallis ullamcorper quisque Purus. Phasellus per nonummy. Porta elit lobortis congue urna blandit, curabitur dis dictum. Purus neque cras lacus augue eu. Phasellus lobortis, sollicitudin proin eu tortor. Conubia. Nibh. Suscipit scelerisque eleifend nulla eu nam parturient curae;. Morbi phasellus vestibulum rhoncus eget fermentum massa lobortis Fusce penatibus dignissim lectus hac velit pretium condimentum molestie varius dolor mus.\r\n\r\nDapibus pharetra faucibus duis aliquet quisque. Volutpat ultrices curabitur pede commodo donec. Porta nostra eu rhoncus donec gravida, sed malesuada condimentum nullam torquent pretium hac consequat quis velit torquent. Sociosqu velit. Aptent diam cras id quis volutpat lacinia cubilia sollicitudin quam sem rutrum per potenti massa nascetur risus. Nisi fusce diam sem feugiat tellus Cursus eros. Vel vel urna litora imperdiet. Convallis Primis. Quis vestibulum hymenaeos potenti nam, eros ornare donec parturient porta habitant libero. Volutpat at. Nam hendrerit hendrerit pellentesque aliquam suspendisse arcu nibh ante. Odio ridiculus nulla montes dui justo non sapien curabitur. At quis lacus. Quis sem. Per purus praesent. Bibendum natoque parturient facilisis in nulla sit pulvinar eleifend risus. Convallis netus auctor luctus a consequat, per lacinia donec tortor sed aliquam parturient scelerisque sed tempus felis urna vel blandit interdum vivamus cum senectus, tincidunt praesent, duis, lacinia integer purus mus. Leo per rhoncus hendrerit neque feugiat elit, varius vulputate cubilia augue suscipit elit viverra. Mattis. Erat fringilla blandit parturient mattis taciti venenatis sapien accumsan interdum ligula ullamcorper tempus nostra donec dignissim facilisis tortor in blandit ut. Nisi. Feugiat est montes. Lacus conubia. Parturient quisque. Curae; aenean sociis ante mattis magna potenti lorem amet arcu libero libero nisl mauris dolor condimentum ad ac elementum, per etiam Vestibulum dis accumsan semper arcu sollicitudin conubia nisi turpis, potenti pede arcu sed ipsum eleifend. Bibendum proin velit lacinia class.','2023-11-22 10:12:01','2023-11-22 10:12:01');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (2,'Diesd','2023-09-06 02:52:57','2023-11-15 14:48:54'),(4,'Tommy Hilfiger','2023-09-06 02:52:57','2023-09-06 02:52:57'),(5,'Larissa Fisher','2023-09-06 02:52:57','2023-09-06 02:52:57'),(6,'Aurelia Murphy IV','2023-09-06 02:52:57','2023-09-06 02:52:57'),(7,'Dr. Dora Kozey Sr.','2023-09-06 02:52:57','2023-09-06 02:52:57'),(15,'adsd','2023-11-15 14:08:29','2023-11-15 14:08:29'),(16,'asdasdasdasd','2023-11-15 14:49:32','2023-11-15 14:49:32'),(17,'nide iayf','2023-11-15 14:49:39','2023-11-15 14:49:39'),(18,'asdasdasdasd','2023-11-15 15:46:31','2023-11-15 15:46:31'),(19,'ádasd','2023-11-15 16:49:50','2023-11-15 16:49:50'),(20,'Diesdsdasd','2023-11-15 16:50:42','2023-11-15 16:50:42');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'Kidsádasd','2023-09-06 02:52:57','2023-11-15 16:45:57'),(7,'áo nữd','2023-11-15 16:29:30','2023-11-15 16:45:08'),(14,'adad','2023-11-15 16:45:37','2023-11-15 16:45:37'),(15,'sdes','2023-11-15 16:47:01','2023-11-15 16:47:01'),(17,'hnhnhn','2023-11-15 16:54:01','2023-11-15 16:54:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color_size`
--

DROP TABLE IF EXISTS `color_size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `color_size` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `size_id` bigint unsigned NOT NULL,
  `color_id` bigint unsigned NOT NULL,
  `qty` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color_size`
--

LOCK TABLES `color_size` WRITE;
/*!40000 ALTER TABLE `color_size` DISABLE KEYS */;
INSERT INTO `color_size` VALUES (1,13,8,65,NULL,NULL),(2,14,6,791,NULL,NULL),(3,7,8,759,NULL,NULL),(4,7,3,10,NULL,NULL),(5,7,9,10,NULL,NULL),(6,8,3,10,NULL,NULL),(7,8,4,859,NULL,NULL),(8,9,5,859,NULL,NULL),(9,9,8,859,NULL,NULL),(10,9,9,859,NULL,NULL),(11,6,7,119,NULL,NULL),(12,24,6,865,NULL,NULL),(13,24,7,865,NULL,NULL),(14,24,11,865,NULL,NULL),(15,24,12,865,NULL,NULL),(16,25,3,581,NULL,NULL),(17,25,6,581,NULL,NULL),(18,25,8,581,NULL,NULL),(19,25,10,581,NULL,NULL),(20,26,3,831,NULL,NULL),(21,26,6,831,NULL,NULL),(22,26,8,831,NULL,NULL),(23,26,9,831,NULL,NULL),(24,27,11,440,NULL,NULL);
/*!40000 ALTER TABLE `color_size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (2,'white','#fff','2023-11-08 20:00:05','2023-11-08 20:00:05'),(3,'black','#000','2023-11-08 23:58:46','2023-11-08 23:58:46'),(4,'Red','#FF0000','2023-11-09 00:00:04','2023-11-09 00:00:04'),(5,'Lime','#00FF00','2023-11-09 00:00:19','2023-11-09 00:00:19'),(6,'Blue','#0000FF','2023-11-09 00:00:31','2023-11-09 00:00:31'),(7,'Yellow','#FFFF00','2023-11-09 00:00:43','2023-11-09 00:00:43'),(8,'Gray','#808080','2023-11-09 00:00:58','2023-11-09 00:00:58'),(9,'Green','#008000','2023-11-09 00:01:10','2023-11-09 00:01:10'),(10,'Purple','#800080','2023-11-09 00:01:33','2023-11-09 00:01:33'),(11,'DarkGray','#A9A9A9','2023-11-09 00:03:08','2023-11-09 00:03:08'),(12,'GhostWhite','#F8F8FF','2023-11-09 00:03:23','2023-11-09 00:03:23');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2020_12_09_085528_create_orders_table',1),(6,'2020_12_09_085832_create_order_details_table',1),(7,'2020_12_09_085936_create_products_table',1),(8,'2020_12_09_090029_create_brands_table',1),(9,'2020_12_09_090110_create_product_categories_table',1),(10,'2020_12_09_090148_create_product_images_table',1),(11,'2020_12_09_090228_create_product_details_table',1),(12,'2020_12_09_090308_create_product_comments_table',1),(13,'2020_12_09_090355_create_blogs_table',1),(14,'2020_12_09_090437_create_blog_comments_table',1),(15,'2023_09_04_100824_create_reviews_table',1),(16,'2023_09_05_073925_create_sliders_table',2),(17,'2023_09_05_081349_create_sales_table',3),(18,'2015_04_12_000000_create_orchid_users_table',4),(19,'2015_10_19_214424_create_orchid_roles_table',4),(20,'2015_10_19_214425_create_orchid_role_users_table',4),(21,'2016_08_07_125128_create_orchid_attachmentstable_table',4),(22,'2017_09_17_125801_create_notifications_table',4),(23,'2023_11_08_153708_create_colors_table',5),(24,'2023_11_08_153729_create_sizes_table',5),(25,'2023_11_08_154134_create_size_color_pivot_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `qty` int NOT NULL,
  `color_id` double NOT NULL,
  `size_id` double NOT NULL,
  `price` int DEFAULT NULL,
  `discount_price` int DEFAULT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,6,4,1,7,6,800000,480000,480000,NULL,NULL),(2,6,4,1,9,9,800000,480000,480000,NULL,NULL),(3,6,4,1,4,8,800000,480000,480000,NULL,NULL),(4,7,4,4,7,6,800000,480000,1920000,NULL,NULL),(5,7,4,2,9,9,800000,480000,960000,NULL,NULL),(6,7,4,2,4,8,800000,480000,960000,NULL,NULL),(7,8,4,1,7,6,800000,480000,480000,NULL,NULL),(8,8,4,1,3,8,800000,480000,480000,NULL,NULL),(9,8,4,1,9,7,800000,480000,480000,NULL,NULL),(10,8,4,1,8,9,800000,480000,480000,NULL,NULL);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (6,14,'ddddddddd','0868033462sdkvq@gmail.com','0868033466','76',NULL,'2023-11-26 15:00:37','2023-11-26 15:00:37','cod'),(7,14,'ddddddddd','0868033462sdkvq@gmail.com','0868033466','76',NULL,'2023-11-26 15:03:53','2023-11-26 15:03:53','cod'),(8,14,'ddddddddd','0868033462sdkvq@gmail.com','0868033466','76',NULL,'2023-11-26 16:10:18','2023-11-26 16:10:18','cod');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('0868033462kvq@gmail.com','$2y$10$V.wflgbV41tfQqKYbvcX7OFR93l3mmpZmQkGE83nyJS18w1lL4ykm','2023-10-03 07:30:13');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'images/WVhsZQUPSAkfQIUqqOERBN3zgsPtLkiPlWVZwNI9.jpg',NULL,NULL),(2,1,'images/3fw9Sxjz3Xsiub6r1O9Y5gsH1geU2czopw1wELP3.jpg',NULL,NULL),(3,1,'images/5wQsFvj2Ch81BEKLOO64qMperG7hUAfo6NZvpH6I.jpg',NULL,NULL),(4,2,'product-2.jpg',NULL,NULL),(5,3,'product-3.jpg',NULL,NULL),(6,4,'quan-trang-nam-1.jpg',NULL,NULL),(7,5,'product-5.jpg',NULL,NULL),(8,6,'product-6.jpg',NULL,NULL),(9,7,'product-7.jpg',NULL,NULL),(10,8,'product-8.jpg',NULL,NULL),(11,9,'product-9.jpg',NULL,NULL),(12,14,'product-8.jpg',NULL,NULL),(13,4,'quan-trang-nam-2.jpg',NULL,NULL),(14,4,'quan-trang-nam-3.jpg',NULL,NULL),(15,4,'quan-trang-nam-4.jpg',NULL,NULL),(16,37,'images/5wQsFvj2Ch81BEKLOO64qMperG7hUAfo6NZvpH6I.jpg','2023-11-22 03:22:01','2023-11-22 03:22:01'),(17,37,'images/3fw9Sxjz3Xsiub6r1O9Y5gsH1geU2czopw1wELP3.jpg','2023-11-22 03:22:01','2023-11-22 03:22:01'),(18,37,'images/WVhsZQUPSAkfQIUqqOERBN3zgsPtLkiPlWVZwNI9.jpg','2023-11-22 03:22:01','2023-11-22 03:22:01');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int unsigned NOT NULL,
  `product_category_id` int unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` int DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_sku_unique` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,2,'Pure Pineapple','Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor','When using a custom keyed implicit binding as a nested route parameter, Laravel will automatically scope the query to retrieve the nested model by its parent using conventions to guess the relationship name on the parent. In this case, it will be assumed that the User model has a relationship named posts (the plural form of the route parameter name) which can be used to retrieve the Post model.','images/tZkllp51Jkv0m3GakpmFuX6M9RW2EaGDCFUH0uwb.jpg',400000,1.3,'QA1',600000,'2023-09-04 10:40:12','2023-09-04 10:44:22',1),(3,3,2,'Guangzhou woekr',NULL,NULL,'product-3.jpg',NULL,NULL,'QA3',400000,'2023-09-04 10:44:50','2023-09-04 10:45:33',0),(4,4,1,'Microfiber Wool Scarf',NULL,NULL,'product-4.jpg',480000,NULL,'QA4',800000,'2023-09-04 10:43:55','2023-09-04 10:45:33',0),(5,1,3,'Men\'s Painted Hat',NULL,NULL,'product-5.jpg',35,NULL,'QA5',44,'2023-09-04 10:45:24','2023-09-04 10:50:35',0),(6,1,2,'Converse Shoes',NULL,NULL,'product-6.jpg',34,NULL,'QA6',35,'2023-09-04 10:45:25','2023-09-04 10:45:35',1),(8,1,1,'2 Layer Windbreaker',NULL,NULL,'product-8.jpg',NULL,NULL,'QA8',1000000,'2023-09-04 10:45:26','2023-09-04 10:45:37',1),(9,1,1,'Converse her',NULL,NULL,'product-9.jpg',NULL,NULL,'QA9',80000,'2023-09-04 10:45:27','2023-09-04 10:45:38',1),(10,6,1,'Prof. Tyrell Williamson Jr.','Sit dolorem eum omnis aliquam facere. Quia est omnis id. Saepe alias incidunt quis in sit.','Exercitationem est dignissimos aliquid cupiditate. Quia vel nihil expedita beatae. Omnis rerum nihil iste modi vitae unde reiciendis aliquid.','product-1.jpg',121656,NULL,'quia rerum rerum harum',1150212,'2023-09-06 03:21:12','2023-09-06 03:21:12',1),(11,6,1,'Federico Lind','Accusantium earum eveniet eum. Ad autem doloremque nobis. Sint sunt fugit porro exercitationem id.','Omnis culpa quaerat illo. Eaque cumque maiores ducimus sunt. Ut nisi cumque aut ipsam quae dolorem. Sint officiis et vel autem commodi aut ipsa. In perspiciatis repudiandae fugit distinctio aut saepe. Est quisquam temporibus voluptatum rerum. Libero eius officiis velit possimus beatae aliquid exercitationem et. Vel sed quo dolores beatae. Explicabo qui sunt unde amet totam ex.','product-2.jpg',185853,NULL,'dolore dolorum doloribus non',854575,'2023-09-06 03:21:12','2023-09-06 03:21:12',0),(12,1,1,'Albert Hoeger','Doloremque corporis magnam provident ad. Non facere qui doloribus. Quae voluptatem nulla dolorum.','Beatae officia culpa eveniet omnis. Eius minus ea in debitis dolorem. Non qui vel ea voluptatem. Earum et officiis itaque labore necessitatibus ducimus sed earum. Assumenda et praesentium sed eum veritatis itaque similique. Fugiat quisquam sint iusto. Saepe nemo nobis sequi laboriosam ut in et aperiam. Delectus harum voluptas dolorem ut.','product-1.jpg',270026,NULL,'eius iure blanditiis aliquam',1056571,'2023-09-06 03:21:12','2023-09-06 03:21:12',1),(13,9,1,'Mose Bashirian','Quo dolorem omnis recusandae a fugiat. Maiores sed delectus sit id officiis excepturi ducimus.','Qui non laudantium omnis hic. Nobis explicabo officia ab illum inventore ab. Aut eos qui ratione quasi neque veniam at nobis. Unde sequi itaque sed totam aliquid. Et nesciunt aut natus sequi. Eos fugit cum quisquam atque. Praesentium atque blanditiis minima esse.','product-1.jpg',340331,NULL,'dolores et dolores doloribus',1563881,'2023-09-06 03:21:12','2023-09-06 03:21:12',0),(14,3,3,'Kristian Brakus','Voluptas et dolorem modi dolorem iusto. Aut sed recusandae sed numquam.','Distinctio qui esse perspiciatis. Ut amet quisquam quia sit. Maiores explicabo maiores blanditiis quis perspiciatis excepturi. Id optio deleniti quia. Officia hic est sit velit suscipit. In eum corporis sequi commodi. Eos earum ut ratione earum hic delectus. Delectus similique adipisci qui sint.','product-7.jpg',245044,NULL,'quis voluptatum eos est',1650101,'2023-09-06 03:21:12','2023-09-06 03:21:12',1),(15,3,1,'Fanny Barrows','Velit consequuntur expedita sit corporis corporis aliquam. Et laudantium qui ut iusto.','Sit tempore veniam numquam doloribus. Explicabo voluptatibus officiis incidunt quia et sed ipsam. Quae quos eligendi eveniet possimus officia ab. Vero nulla inventore inventore id fugit dolore dolores. Sed eveniet minus quis quia. Voluptate et ex qui quis necessitatibus. Omnis nulla minima ut alias temporibus consequuntur.','product-9.jpg',1362328,NULL,'ullam et vitae fugiat',1598146,'2023-09-06 03:21:12','2023-09-06 03:21:12',1),(16,6,3,'Edward Will','Saepe qui officia veritatis. Labore ut quia ut officia beatae amet nulla. Earum soluta quia et eum.','Expedita et a dolor atque in id. Dolores illum necessitatibus optio omnis et. Et tempora architecto quaerat ipsam sed dolores rerum commodi. Quia animi sit voluptatem voluptas aliquam. Aspernatur soluta ut voluptatem cupiditate sequi itaque nisi. Eum exercitationem cupiditate sint est deleniti qui.','product-5.jpg',218823,NULL,'magni magnam consequatur eligendi',607515,'2023-09-06 03:21:12','2023-09-06 03:21:12',1),(17,7,3,'Angie Friesen','Odio libero non itaque quod. Nihil et molestiae dolorem.','Facilis exercitationem quis doloribus molestiae eum voluptate hic. Neque iure atque natus labore qui excepturi. Non consectetur explicabo deleniti voluptatem impedit veritatis. Accusamus architecto provident alias rem voluptate.','product-9.jpg',301533,NULL,'quos animi pariatur ducimus',615665,'2023-09-06 03:21:12','2023-09-06 03:21:12',0),(18,6,3,'Modesto Witting','Odio voluptatem et consequuntur fuga nisi quod reprehenderit. Eaque est fuga enim porro.','Voluptas sunt deserunt consequatur rerum voluptas rerum consectetur vitae. Voluptas velit repellendus quidem itaque. Voluptatum excepturi quod at. Fugit repudiandae debitis suscipit non ab. Voluptate earum velit eum. Sit nam suscipit iure dolorem. Quis voluptatem ad molestiae maxime saepe molestiae dolor.','product-3.jpg',28283,NULL,'ut cupiditate consequatur quas',930536,'2023-09-06 03:21:12','2023-09-06 03:21:12',0),(19,9,2,'Mr. Hans Stanton Jr.','Non assumenda tenetur aut aut exercitationem qui nesciunt. Aut occaecati rerum sunt.','Fugit ex ut libero quis laboriosam veritatis dolore quia. Perferendis modi architecto quisquam et quis veniam perferendis. Aperiam omnis explicabo saepe rerum sed maxime. Incidunt consequatur quas autem voluptatem. Atque voluptatum et eius velit sint sit. Rem quisquam sit cumque ea ducimus ipsum aut et.','product-3.jpg',705360,NULL,'consectetur ipsa voluptatibus culpa',784022,'2023-09-06 03:21:12','2023-09-06 03:21:12',0),(21,1,1,'Margaret Bradyadasdasd','Ut Nam consequat Ut','Omnis velit id veni','http://localhost/public/image/uploads/2023/11/08/dfbaa0898c25a2c461a13294e1e039e6a2d585d3.webp',NULL,9,'Optio odit eum quiaádasdasdadasdad',107111111,'2023-11-08 10:13:46','2023-11-08 10:25:57',0),(22,2,17,'Regan Pope','Officia veniam eius','Nobis quia sed conse','images/AI5OrbgbmSIZeVWIzMe8cSF4AbxkULwMUBPIZjtT.jpg',967,54,'Nobis consequat Ab',311,'2023-11-21 15:00:53','2023-11-21 15:00:53',1),(23,17,15,'Blossom Hatfield','Neque ut perspiciati','Proident voluptatem','images/wxlRPTNknMe3sobiCIXdoawzOrm42qcSlxIYEhN7.jpg',188,79,'In asperiores fugit',467,'2023-11-21 17:19:57','2023-11-21 17:19:57',0),(24,17,14,'Beatrice Castro','Animi asperiores er','Non modi sequi quis','images/MNQDBcFEoTguTDogpBiYO3N0Sk9TAQ5XLH5FrO3E.jpg',152,99,'Dolore cum iure dolo',202,'2023-11-21 17:20:28','2023-11-21 17:20:28',1),(25,6,7,'Zelenia Glenn','Mollit quam perspici','Enim culpa dolor eni','images/fQR47mHFvvxFQFagTTwOwwl4TqFfRlBTmqzblmBe.jpg',536,92,'Facilis repudiandae',604,'2023-11-21 17:21:41','2023-11-21 17:21:41',1),(26,4,17,'Naida Phillips','Cumque quisquam sint','Non quia placeat cu','images/C2WvsdgDd1zWE5JDC1vfl580MAo3HSxeP2rDYdxq.jpg',120,68,'Et numquam dolores a',40,'2023-11-21 17:33:44','2023-11-21 17:33:44',0),(27,5,15,'Imani Navarro','Omnis ut itaque ad s','Nisi quam ex numquam','images/M3Ad4k5Lgvj0SvLtX25BIR6P8IaFcTsTkhWk167j.jpg',92,53,'Illum placeat pari',636,'2023-11-21 17:35:52','2023-11-21 17:35:52',0),(28,2,3,'Uma Irwin','Minima facilis volup','Voluptate laudantium','images/4RVifEVubZfkxz9VQJ5nTFrcLcvX2PJv1RgeIC56.jpg',768,78,'Aute ut inventore ex',53,'2023-11-21 17:37:52','2023-11-21 17:37:52',0),(29,6,15,'Tanek Mcknight','Consequatur ut corpo','Assumenda amet ulla','images/3ZUtJrFFhsrsWwjcRQQ4FPlH95hu1YIy3u6r0OV1.jpg',718,98,'Ut modi voluptate al',126,'2023-11-21 17:42:33','2023-11-21 17:42:33',0),(30,17,14,'Henry Welch','Aut qui aliquam quod','Debitis excepteur qu','images/jmtp6jea4B6gVQGzWekvvPSzLENXi6PfzAjvzBjw.jpg',32,7,'Dolor alias incididu',568,'2023-11-21 17:43:32','2023-11-21 17:43:32',0),(32,2,7,'Charles Garza','Blanditiis aperiam d','Perspiciatis ut ani','images/5YEzQ0ojrd549IPMjyJMQG8P1bScn7yzTrvmriZT.jpg',522,13,'Commodi totam deleni',266,'2023-11-21 17:50:32','2023-11-21 17:50:32',1),(33,19,17,'Eliana Curry','Autem ut totam harum','Laudantium aut non','images/ZhAoyJNuItzgmgjPYAyNoifK15QKbHbbXR8vgrw1.jpg',259,34,'Nulla soluta duis qu',887,'2023-11-21 17:51:33','2023-11-21 17:51:33',1),(34,6,3,'Hiroko Stokes','Accusamus magna sequ','Anim ut ipsa velit','images/uPc0G9VmiDk4nBLisiY96GeFw92fb0bW8OvJLMEn.webp',545,28,'Consequatur in culpa',652,'2023-11-21 17:58:35','2023-11-21 17:58:35',1),(35,18,7,'Hanna Garrison','Quo labore vero ea f','In animi adipisci n','images/Mwgzd1L8MhCUZfhrxn8XkD8dIEcT88DMWmkHT7uY.jpg',850,49,'Consectetur officia',721,'2023-11-22 03:09:21','2023-11-22 03:09:21',1),(37,4,17,'Griffin Cabrera','Unde suscipit et vol','Eum quos error odio','images/mwAidIeX6yD8N6XMfAgnuvKn8jvdjsac4Tb78ng3.jpg',563,64,'Adipisci sunt nulla',651,'2023-11-22 03:22:01','2023-11-22 03:22:01',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_index` (`product_id`),
  KEY `reviews_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,16,11,'Maiores voluptatibus rerum natus et enim.',2,'2023-09-07 01:39:13','2023-09-07 01:39:13'),(2,6,11,'Et esse sed sequi odit ut odit.',5,'2023-09-07 01:39:13','2023-09-07 01:39:13'),(121,4,14,'ádasd',3,'2023-11-23 09:46:26','2023-11-23 09:46:26'),(122,4,14,'review test',5,'2023-11-23 09:46:45','2023-11-23 09:46:45'),(123,4,14,'ghfghfgh',4,'2023-11-23 09:49:21','2023-11-23 09:49:21'),(124,4,14,NULL,2,'2023-11-23 09:51:02','2023-11-23 09:51:02'),(125,4,14,NULL,4,'2023-11-23 09:51:10','2023-11-23 09:51:10'),(126,4,14,NULL,5,'2023-11-23 10:01:59','2023-11-23 10:01:59'),(127,4,14,'asdasdasd',3,'2023-11-23 10:02:06','2023-11-23 10:02:06'),(128,4,14,'asdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',4,'2023-11-23 10:02:23','2023-11-23 10:02:23'),(129,37,14,'ádasdasdasd',4,'2024-01-04 13:44:23','2024-01-04 13:44:23');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (21,12,'salesvda','ggggggggggggggggggggggggggggg','2023-12-12 11:48:00','2023-12-15 11:48:00',1,'2023-11-16 04:49:02','2023-12-13 03:17:20'),(22,15,'saddddđ','dddddddddddddd','2023-11-24 11:49:00','2023-11-25 11:50:00',1,'2023-11-16 04:50:04','2023-11-16 04:50:04'),(23,16,'wwwwwwwwwwwwwwwwwwwwwww','mùa hè mới quần áo deal hời','2023-11-17 11:51:00','2023-11-18 11:51:00',0,'2023-11-16 04:51:42','2023-11-16 04:51:42'),(24,2,'sdddddddasdasd','dddddddddddddd','2023-11-30 11:52:00','2023-12-01 11:52:00',1,'2023-11-16 04:52:06','2023-11-16 04:52:06'),(25,13,'ádddddd','dádddddđ','2023-11-14 14:40:00','2023-11-18 14:40:00',1,'2023-11-16 07:40:31','2023-11-16 07:40:31');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sizes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sizes_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` VALUES (5,'XXL',6,'2023-11-08 21:22:54','2023-11-08 21:23:10'),(6,'M',4,'2023-11-08 23:45:27','2023-11-08 23:45:27'),(7,'XXL',4,'2023-11-09 00:05:25','2023-11-09 00:05:25'),(8,'XL',4,'2023-11-12 06:13:54','2023-11-12 06:13:54'),(9,'M',4,'2023-11-12 06:15:13','2023-11-12 06:15:13'),(10,'XL',16,'2023-11-12 06:16:42','2023-11-12 06:16:42'),(11,'M',1,'2023-11-12 06:17:47','2023-11-12 06:17:47'),(12,'M',2,'2023-11-12 06:19:18','2023-11-12 06:19:18'),(13,'M',10,'2023-11-12 06:20:00','2023-11-12 06:20:00'),(14,'S',15,'2023-11-12 06:21:26','2023-11-12 06:21:26'),(15,'S',8,'2023-11-12 13:24:10','2023-11-12 13:24:10'),(16,'XLL',28,'2023-11-21 17:37:52','2023-11-21 17:37:52'),(17,'M',29,'2023-11-21 17:42:33','2023-11-21 17:42:33'),(18,'S',30,'2023-11-21 17:43:32','2023-11-21 17:43:32'),(19,'M',31,'2023-11-21 17:44:29','2023-11-21 17:44:29'),(20,'M',31,'2023-11-21 17:44:29','2023-11-21 17:44:29'),(21,'M',32,'2023-11-21 17:50:32','2023-11-21 17:50:32'),(22,'S',33,'2023-11-21 17:51:33','2023-11-21 17:51:33'),(23,'M',33,'2023-11-21 17:51:33','2023-11-21 17:51:33'),(24,'S',34,'2023-11-21 17:58:35','2023-11-21 17:58:35'),(25,'M',34,'2023-11-21 17:58:35','2023-11-21 17:58:35'),(26,'S',34,'2023-11-21 17:58:35','2023-11-21 17:58:35'),(27,'M',37,'2023-11-22 03:22:01','2023-11-22 03:22:01');
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (42,'Ab quibusdam dicta e','Similique aute nulla','Irure ut possimus s','images/ZzoN1OQznKXmTDTFFzrOfsNNRWNC6qRMglMMOScM.webp','2023-11-20 10:29:14','2023-12-13 02:34:15',0),(46,'Deserunt et voluptat','Eos eveniet nihil v','Dolor aut ullam duci','images/cMVdWSth4fcAKYKNEn82DssAemHs9l1W6R7ZtVNU.jpg','2023-12-13 02:33:16','2023-12-13 02:33:16',1);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'CodeLean','CodeLean@gmail.com',NULL,'$2y$10$1Y94yaUh1u2rCkMYsckBr.Kfx6Rgo01QF4T8iNWEjJkMi9EDuiak2',NULL,NULL,NULL,'2023-11-01 00:54:13',NULL,'{\"platform.index\": true, \"platform.systems.roles\": true, \"platform.systems.users\": true, \"platform.systems.attachment\": true}'),(2,'Roy Banks','RoyBanks@gmail.com',NULL,'$2y$10$oBH4g27d1Iq8Nen..Oz0XeKujnYSFC0W.w9Q4OIqZ0JoqXfiAO6HG',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Prof. Reagan Langosh','javon.towne@example.net','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','lSGvjzZcDV',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(4,'Jordon Volkman','rchristiansen@example.net','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','9v2J3Rk7cC',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(5,'Marlene Barrows','osbaldo22@example.net','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Qkyg6aITKq',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(6,'Davonte Leffler III','daniella.gulgowski@example.net','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','uKtxrZawZ0',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(7,'Dr. Jameson Wehner I','hkessler@example.com','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','wpDYNEJCUj',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(8,'Prof. Gloria Steuber DDS','iemmerich@example.net','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','1qmx3Yqd5D',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(9,'Norbert Cummerata','annabel84@example.net','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ypiSjuExbfzfTnF7Y6pNFgrXwnGcHc6DxxRl1M5ydV95kUHPSfFRiWLocoRU','012345678','2023-09-06 02:56:11','2023-09-06 02:56:11','soso 45 - bắc từ liêm - Hà Nội',NULL),(10,'Dr. Heloise Cormier V','elisha74@example.org','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','VVT1br3OqQ2aaPA0gtDZqAmo14G2nqqVpQzUe0ayQrpFuxbuj4VLW0axKXG1',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(11,'Marquis Upton','ansley17@example.org','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','NbtsP1HZWz',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,'{\"platform.index\": true, \"platform.systems.roles\": true, \"platform.systems.sales\": true, \"platform.systems.users\": true, \"platform.systems.brands\": true, \"platform.systems.sliders\": true, \"platform.systems.category\": true, \"platform.systems.attachment\": true}'),(12,'Clementine Flatley I','omari07@example.org','2023-09-06 02:56:11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','qfklEI9LIp',NULL,'2023-09-06 02:56:11','2023-09-06 02:56:11',NULL,NULL),(13,'quan khổng văn','0868033462kvq@gmail.com',NULL,'$2y$10$OvW1Ur8ezQ6vphxOVjWmnOX8YwEm6TXlMRmO4zsdRR9cqhektmoAG',NULL,NULL,'2023-09-10 09:40:05','2023-09-10 09:40:05',NULL,NULL),(14,'ddddddddd','0868033462sdkvq@gmail.com',NULL,'$2y$10$fvJ1Qd/2hgNXDSp0nOFe1.EYbBLu.y.QuNWYA7QC9g9XMhTDRilVG','rVSABm21L2zkvPg0wsj9jwUe4ehiCy6cL4yHxrcIFYnhHvZhBeOAoEEVhCu3','0868033466','2023-09-10 09:43:33','2023-11-08 00:38:04','76','{\"admin\": true, \"super\": true, \"platform.index\": true, \"platform.systems.roles\": true, \"platform.systems.sales\": true, \"platform.systems.users\": true, \"platform.systems.brands\": true, \"platform.systems.sliders\": true, \"platform.systems.category\": true}'),(15,'quan0410s','quan0410@gmail.com',NULL,'$2y$10$pRtHiMI0LV73vcEjExlv..v3BjmG6KcK/aTkfDx3PTgzaCW876PcK','XsnURcw77zMjNzJIzpuGgH7XHYwpUusRkPfFiDLE6lHItk8B3uXcUJlApnsF',NULL,'2023-10-31 07:55:42','2023-11-02 02:15:52',NULL,'{\"platform.index\": true, \"platform.systems.roles\": false, \"platform.systems.sales\": true, \"platform.systems.users\": false, \"platform.systems.brands\": true, \"platform.systems.category\": true, \"platform.systems.attachment\": true}');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-04 23:50:45
