-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cosmic
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `blog` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (243,'Abhishek Purty',_binary 'hallo'),(244,'Abhishek Purty',_binary '<h1>Hello World</h1>\r\n<p>Halp me plox</p>\r\n<i>We are all smol</i>\r\n'),(245,'Abhishek Purty',_binary 'adaw'),(246,'Abhishek Purty',_binary 'adaw'),(247,'Abhishek Purty',_binary 'halp me plox'),(248,'Abhishek Purty',_binary 'halp\r\noijid\r\n'),(249,'Abhishek Purty',_binary 'sddd\r\nasda'),(250,'Abhishek Purty',_binary 'halp'),(251,'Abhishek Purty',_binary 'yolo <br> yolo tolo\r\n'),(252,'Abhishek Purty',_binary '<h1>Purpose of Life</h1> Life jhand ho rakhi hai btech karne se.'),(254,'Abhishek Purty',_binary 'asd asdasdasd'),(255,'Abhishek Purty',_binary '<h1>Ek din marr jayega</h1> kutte ki maut'),(256,'Abhishek Purty',_binary '<h1>Ek din marr jayega</h1> kutte ki maut'),(257,'Abhishek Purty',_binary '<h1>Test 257</h1> First line\r\nSecond line'),(258,'Abhishek Purty',_binary '<h1>Test 258</h1> First line\r\n\r\nSecond line with 2 br.\r\n     Third line with space'),(259,'Abhishek Purty',_binary '<h1>hello</h1> qwert\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<i>yuiop</i>'),(260,'Abhishek Purty',_binary '<h1>Hello</h1> <b>[your content]</b>'),(261,'Abhishek Purty',_binary '<h1>test 261</h1> hello\r\n\r\nalternate test case, trying out 261'),(262,'Abhishek Purty',_binary '<h1>Print</h1> I.am.a.boy.I.am.a.girl.\r\n'),(263,'Abhishek Purty',_binary '<h1>null</h1> Hello, mere gharwaale pure mental hain. Ek saala bolta hi nhi, ek ka muh band hi nhi hota. Help me escape from here plox.'),(264,'Abhishek Purty',_binary '<h1>null</h1> Hello, mere gharwaale pure mental hain. Ek saala bolta hi nhi, ek ka muh band hi nhi hota. Help me escape from here plox.'),(265,'Abhishek Purty',_binary '<h1>s</h1> Hello, mere gharwaale pure mental hain. Ek saala bolta hi nhi, ek ka muh band hi nhi hota. Help me escape from here plox.'),(266,'Abhishek Purty',_binary '<h1>null</h1> Hello, mere gharwaale pure mental hain. Ek saala bolta hi nhi, ek ka muh band hi nhi hota. Help me escape from here plox.'),(267,'Abhishek Purty',_binary '<h1>sad</h1> adwef'),(268,'Abhishek Purty',_binary '<h1>null</h1> Hello, mere gharwaale pure mental hain. Ek saala bolta hi nhi, ek ka muh band hi nhi hota. Help me escape from here plox.'),(269,'Abhishek Purty',_binary '<h1>adsewfew</h1> ewf'),(270,'Abhishek Purty',_binary '<h1>null</h1> Hello, mere gharwaale pure mental hain. Ek saala bolta hi nhi, ek ka muh band hi nhi hota. Help me escape from here plox.');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `blog` longblob,
  `heading` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'mc420','ak124445@gmail.com',_binary 'Knowing God is a classic by JI Packer, having sold over a million copies. Its possibly the best selling Contemporary Evangelical book. The book is a study in theology proper, that is, a study of God. The language is simple and accessible to the lay reader and hence its popularity. This book is also endorsed by many evangelical voices such as RC Sproul, Joni Eareckson Tada, and Chuck Swindoll.\r\n\r\nThe book is divided into three sections. “Know the Lord”, “Behold Your God”, and “If God is for us”. The first section contains six chapters introducing the book and explains what it means to know God and how can we know Him. The author makes a distinction between the knowledge about God and the knowledge of God. The former being an intellectual profession and the latter being something who end is God Himself. The second section lays down different attributes that are found in scripture, Immutability, Wisdom, Majesty, Grace, Wrath, etc. Finally, in the last section, he shows how these attributes come together in the gospel and by extension in our lives. He explains the privileges that come by being the child of God on, handling trials, and concludes with a chapter on the adequacy of God.\r\n\r\nThe book is quite readable and should be considered as an introductory book on understanding the Godhead. His work is not exhaustive. I think important attributes of God such as his sovereignty, the election of sinners needed separate chapters. Nevertheless, this book was helpful in reminding me of many attributes of God. One quote that impressed me was <i>“He never abandons anyone on whom he has set his love … It is as false as it is irreverent to accuse God of forgetting, or overlooking, or losing interest in, the state and needs of his own people. If you have been resigning yourself to the thought that God has left you high and dry, seek grace to be ashamed of yourself. Such unbelieving pessimism deeply dishonors our great God and Savior “</i>\r\n\r\nIn short, I think this is a book that I would recommend anyone to read.','Knowing God – JI Packer'),(2,'banboy38','anirbanhalder38@ymail.com',_binary 'There is a constant debate on the implications of the genre of Genesis 1-11 on the historicity of the events detailed in it. This book presents three views by three different scholars on the genre of Genesis and its implications to three events: creation, flood and the tower of Babel\r\n\r\nBook overview\r\nThe first view is by James Hoffmeier. He essentially espouses the view that all of Genesis is essentially a historically accurate narrative. his main defense lies in the presence of geographical incidentals found in these chapters. He also explains the similarity of Genesis with other Ancient Near East (ANE) is only due to the recollection of a single event and not because the bible borrowed it from them.\r\n\r\nThe second view, by Gordon Wenham, claims that Genesis 1-11 is protohistory. In his own words, ‘history is the photograph\r\nof the past, fiction is like a movie, whereas protohistory is a portrait of the past.’ He, however, does not explain in clear words whether he believes the historicity of Genesis. I think he tries to take a middle ground and ends up confusing the audience.\r\n\r\nThe third view, by Kenton Sparks, claims that Genesis 1-11 is essentially a myth. Sparks lays down some of his presuppositions clearly, which include, the notion that interpretation of scripture should be subservient to modern scientific discovery, the bible could contains elements that are wrong or contradictory, etc. Naturally, with these assumptions, he comes to a different conclusion on Genesis.\r\n\r\nMy review\r\nI think that Hoffmeier uses weak arguments to prove his point. He never resorts to the fact that Genesis is the word of God to defend the historicity of the events. Wenham simply fails to explain what he actually believes in. Even Sparks points this out in his rebuttal to Wenham. Even simple questions as to whether a worldwide flood happened or not, was not answered. He keeps beating around the bush. Finally, I have to reject Sparks’ interpretation because he essentially has non-Christian presuppositions. (Although, I think that his writing was the clearest of them all).\r\n\r\nIn all, I would not recommend anyone to pick up this book unless they are doing extensive research on this subject. It does not offer any substantial value to an average Christian.','Genesis: History, Fiction, or Neither?'),(3,'tanker','',_binary 'Life is a characteristic that distinguishes physical entities that have biological processes, such as signaling and self-sustaining processes, from those that do not, either because such functions have ceased (they have died), or because they never had such functions and are classified as inanimate. Various forms of life exist, such as plants, animals, fungi, protists, archaea, and bacteria. Biology is the science concerned with the study of life.\r\n\r\nThere is currently no consensus regarding the definition of life. One popular definition is that organisms are open systems that maintain homeostasis, are composed of cells, have a life cycle, undergo metabolism, can grow, adapt to their environment, respond to stimuli, reproduce and evolve. Other definitions sometimes include non-cellular life forms such as viruses and viroids.\r\n\r\nAbiogenesis is the natural process of life arising from non-living matter, such as simple organic compounds. The prevailing scientific hypothesis is that the transition from non-living to living entities was not a single event, but a gradual process of increasing complexity. Life on Earth first appeared as early as 4.28 billion years ago, soon after ocean formation 4.41 billion years ago, and not long after the formation of the Earth 4.54 billion years ago.[1][2][3][4] The earliest known life forms are microfossils of bacteria.[5][6] Researchers generally think that current life on Earth descends from an RNA world,[7] although RNA-based life may not have been the first life to have existed.[8][9] The classic 1952 Miller–Urey experiment and similar research demonstrated that most amino acids, the chemical constituents of the proteins used in all living organisms, can be synthesized from inorganic compounds under conditions intended to replicate those of the early Earth. Complex organic molecules occur in the Solar System and in interstellar space, and these molecules may have provided starting material for the development of life on Earth.','The Way Life is'),(4,'babu','ammanminz@gmail.com',_binary '“Blog” is an abbreviated version of “weblog,” which is a term used to describe websites that maintain an ongoing chronicle of information. A blog features diary-type commentary and links to articles on other websites, usually presented as a list of entries in reverse chronological order. Blogs range from the personal to the political, and can focus on one narrow subject or a whole range of subjects.\r\n\r\nMany blogs focus on a particular topic, such as web design, home staging, sports, or mobile technology. Some are more eclectic, presenting links to all types of other sites. And others are more like personal journals, presenting the author’s daily life and thoughts.\r\n\r\nGenerally speaking (although there are exceptions), blogs tend to have a few things in common:\r\n\r\n-> A main content area with articles listed chronologically, newest on top. Often, the articles are organized \r\n     into categories.An archive of older articles.\r\n-> A way for people to leave comments about the articles.\r\n-> A list of links to other related sites, sometimes','Introduction to Blogging');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `query` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'Abhishek Purty','ak124445@gmail.com','Mera site andha hang karra hai'),(2,'Abhishek Purty','ak124445@gmail.com','Blog kahan likhoon be'),(3,'Abhishek Purty','ak124445@gmail.com','Bhaiiiii site dikh toh achha lag raha hai, backend nhi samajh aara bas'),(4,'Abhishek Purty','ak124445@gmail.com','Test query'),(5,'ANIRBAN ADITYA HALDER','ANIRBANHALDER38@YMAIL.COM','aaja mere khwaja'),(6,'Futanari','ak124445@gmail.com','Zindagi jhand hai');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `people` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES (1,'babu','theSUNisalsoastar<3','ammanminz@gmail.com',NULL),(2,'tanker','youngdumbbroke',NULL,NULL),(3,'elhaaaam____','frenchfries','elhamfaizy2808@gmail.com',NULL),(4,'banboy38','Purtyisthebest<3','anirbanhalder38@ymail.com','Anirban Halder'),(5,'mc420','halp','ak124445@gmail.com',NULL);
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (1,'anirbanhalder38@ymail.com','+91 9971380284');
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-10  2:45:49
