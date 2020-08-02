-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: bookentory
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `author` varchar(1000) DEFAULT NULL,
  `language` varchar(1000) DEFAULT NULL,
  `ISBN` varchar(1000) DEFAULT NULL,
  `year_published` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Pride and Prejudice','Jane Austen','English','9780679783268',1813),(2,'1984','George Orwell','English','',1949),(3,'The Great Gatsby','F. Scott Fitzgerald','English','',1925),(4,'Jane Eyre','Charlotte Brontë','English','9780142437209',1847),(5,'Crime and Punishment','Fyodor Dostoyevsky','English','9780143058144',1866),(6,'The Adventures of Huckleberry Finn','Mark Twain','English','9780142437179',1884),(7,'Lolita','Vladimir Nabokov','English','',1955),(8,'Wuthering Heights','Emily Brontë','English','9780393978896',1847),(9,'Of Mice and Men','John Steinbeck','English','9780142000670',1937),(10,'The Count of Monte Cristo','Alexandre Dumas','English','9780140449266',1844),(11,'Brave New World','Aldous Huxley','English','9780060929879',1932),(12,'One Hundred Years of Solitude','Gabriel García Márquez','English','',1967),(13,'Anna Karenina','Jane','Leo Tolstoy','',1877),(14,'The Brothers Karamazov','Fyodor Dostoyevsky','English','9780374528379',1879),(15,'Catch-22','Joseph Heller','English','9780684833392',1961),(16,'The Grapes of Wrath','John Steinbeck','English','',1939),(17,'Slaughterhouse-Five','Kurt Vonnegut Jr.','English','9780385333849',1969),(18,'A Tale of Two Cities','Charles Dickens','English','9780141439600',1859),(19,'The Old Man and the Sea','Ernest Hemingway','English','9780684830490',1952),(20,'War and Peace','Leo Tolstoy','English','',1867),(21,'Moby-Dick or, the Whale','Herman Melville','English','9780142437247',1851),(22,'Don Quixote','Miguel de Cervantes Saavedra','English','9780142437230',1605),(23,'The Metamorphosis and Other Stories','Franz Kafka','English','9781593080297',1915),(24,'East of Eden','John Steinbeck','English','9780142000656',1952),(25,'The Sound and the Fury','William Faulkner','English','',1929),(26,'All Quiet on the Western Front','Erich Maria Remarque','English','9780449213940',1929),(27,'The Name of the Rose','Umberto Eco','English','9780156001311',1980),(28,'The Scarlet Letter','Nathaniel Hawthorne','English','9780142437261',1850),(29,'Ulysses','James Joyce','English','',1922),(30,'Candide','Voltaire','English','9780486266893',1759),(31,'The Master and Margarita','Mikhail Bulgakov','English','9780679760801',1967),(32,'David Copperfield','Charles Dickens','English','',1850),(33,'To the Lighthouse','Virginia Woolf','English','9781406792393',1927),(34,'Tess of the D\'Urbervilles','Thomas Hardy','English','',1891),(35,'For Whom the Bell Tolls','Ernest Hemingway','English','',1940),(36,'Invisible Man','Ralph Ellison','English','',1952),(37,'The Catcher in the Rye','J.D. Salinger','English','9780316769174',1951),(38,'The Plague','Albert Camus','English','',1947),(39,'The Heart Is a Lonely Hunter','Carson McCullers','English','9780618084746',1940),(40,'Things Fall Apart','Chinua Achebe','English','',1958),(41,'Their Eyes Were Watching God','Zora Neale Hurston','English','9780061120060',1937),(42,'Brideshead Revisited','Evelyn Waugh','English','9780316926348',1945),(43,'A Confederacy of Dunces','John Kennedy Toole','English','9780802130204',1980),(44,'Blindness','José Saramago','English','9780156007757',1995),(45,'The Awakening','Kate Chopin','English','9780543898081',1899),(46,'I, Claudius','Robert Graves','English','9780679724773',1934),(47,'Blood Meridian, or the Evening Redness in the West','Cormac McCarthy','English','',1985),(48,'Infinite Jest','David Foster Wallace','English','9780316921176',1996),(49,'Sons and Lovers','D.H. Lawrence','English','9780375753732',1913),(50,'My Ántonia','Willa Cather','English','9781583485095',1918),(51,'Middlemarch/Silas Marner/Amos Barton','George Eliot','English','9781402718854',1994),(52,'In Search of Lost Time','Marcel Proust','English','9780812969641',1927),(53,'Vanity Fair','William Makepeace Thackeray','English','9780141439839',1847),(54,'Light in August','William Faulkner','English','9780679732266',1932),(55,'All the King\'s Men','Robert Penn Warren','English','9780156004800',1946),(56,'The Tin Drum','Günter Grass','English','9780099483502',1959),(57,'Ficciones','Jorge Luis Borges','English','9780802130303',1944),(58,'To Kill a Mockingbird','Harper Lee','English','',1960),(59,'The House of Mirth','Edith Wharton','English','9781844082933',1905),(60,'Pale Fire','Vladimir Nabokov','English','9780141185262',1962),(61,'The Magic Mountain','Thomas Mann','English','9780679772873',1924),(62,'Dead Souls','Nikolai Gogol','English','9780140448078',1842),(63,'The History of Tom Jones, a Foundling','Henry Fielding','English','9780140436228',1749),(64,'Tropic of Cancer','Henry Miller','English','9780802131782',1934),(65,'The Maltese Falcon, The Thin Man, Red Harvest','Dashiell Hammett','English','9780375411250',1987),(66,'The Life and Opinions of Tristram Shandy, Gentleman','Laurence Sterne','English','9780141439778',1759),(67,'Cancer Ward','Aleksandr Solzhenitsyn','English','9780099575511',1968),(68,'Gilead','Marilynne Robinson','English','9780312424404',2004),(69,'Cat\'s Eye','Margaret Atwood','English','9780385491020',1988),(70,'An American Tragedy','Theodore Dreiser','English','9780451527707',1925),(71,'The Adventures of Augie March','Saul Bellow','English','9780143039570',1953),(72,'Death Comes for the Archbishop','Willa Cather','English','9781442939882',1927),(73,'Rabbit Angstrom: The Four Novels','John Updike','English','9780679444596',1994),(74,'The Alexandria Quartet','Lawrence Durrell','English','9780140153170',1960),(75,'V.','Thomas Pynchon','English','9782020418775',1963),(76,'Lost Illusions','Honoré de Balzac','English','9781406506587',1837),(77,'The Stranger','Albert Camus','English','',1942),(78,'A House for Mr Biswas','V.S. Naipaul','English','9780330487191',1961),(79,'The Forsyte Saga (The Forsyte Chronicles, #1-3)','John Galsworthy','English','9780192838629',1921),(80,'Bridge of Sighs','Richard Russo','English','9780375414954',2007),(81,'Adam Bede','George Eliot','English','9780375759017',1859),(82,'Under the Volcano','Malcolm Lowry','English','9780060955229',1947),(83,'Jazz','Toni Morrison','English','9780452269651',1992),(84,'The Sot-Weed Factor','John Barth','English','9780385240888',1960),(85,'The Tale of Genji','Murasaki Shikibu','English','9780142437148',1008),(86,'Therese Raquin','Émile Zola','English','2940000748909',1867),(87,'Finnegans Wake','James Joyce','English','9780141181264',1939),(88,'The Vicar of Wakefield','Oliver Goldsmith','English','9780192805126',1766),(89,'The Recognitions','William Gaddis','English','9780140187083',1955),(90,'The Tenth Man','Graham Greene','English','9780671019099',1985),(91,'Life and Fate','Vasily Grossman','English','9781590172018',1960),(92,'Mason & Dixon','Thomas Pynchon','English','9780312423209',1997),(93,'Humboldt\'s Gift','Saul Bellow','English','9780140189445',1975),(94,'JR','William Gaddis','English','9780140187076',1975),(95,'1919 (U.S.A., #2)','John Dos Passos','English','9780618056828',1932),(96,'The Death of Virgil','Hermann Broch','English','9780679755487',1945),(97,'Middlesex','Jeffrey Eugenides','English','9780312422158',2002),(98,'Native Son','Richard Wright','English','9780099282938',1940),(99,'The Tunnel','William H. Gass','English','9781564782137',1995),(100,'Darconville?s Cat','Alexander Theroux','English','9780805043655',1981),(101,'Fahrenheit 451','Ray Bradbury','English','',1953),(102,'The Handmaid\'s Tale (The Handmaid\'s Tale, #1)','Margaret Atwood','English','',1985),(103,'Othello','William Shakespeare','English','9789626349298',1603),(104,'Lord of the Flies','William Golding','English','',1954),(105,'The Destinies of Darcy Dancer, Gentleman','J.P. Donleavy','English','9780871132895',1976),(106, 'Les Misérables', 'Victor Hugo', 'French', '9780140444308', 1862),(107, 'The Stranger', 'Albert Camus', 'French', '9780679720201', 1942),(108, 'Don Quixote', 'Miguel de Cervantes', 'Spanish', '9780142437230', 1605), (109, 'Dream of the Red Chamber', 'Cao Xueqin', 'Chinese', '9780385093798', 1791), (110, 'Return of the Condor Heroes', 'Jin Yong', 'Chinese', '', 1959), (111, 'The Heaven Sword and Dragon Saber', 'Jin Yong', 'Chinese', '', 1961), (112, 'The Legend of the Condor Heroes', 'Jin Yong', 'Chinese', '', 1957);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-21  3:44:35
