/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `fiches`;
CREATE TABLE `fiches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civility` enum('M','Mme','Mlle') NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `fiches` (`id`, `civility`, `name`, `firstname`, `address`, `postal_code`, `city`, `country`, `date_of_birth`, `phone`, `fax`, `email`, `url`) VALUES
(5, 'M', 'Dupont', 'Jean', '123 Rue de la Paix', '75000', 'Paris', 'France', '1990-01-15', '01 23 45 67 89', '01 23 45 67 88', 'jean.dupont@email.com', 'https://www.example.com');
INSERT INTO `fiches` (`id`, `civility`, `name`, `firstname`, `address`, `postal_code`, `city`, `country`, `date_of_birth`, `phone`, `fax`, `email`, `url`) VALUES
(6, 'Mme', 'Martin', 'Marie', '456 Avenue du Soleil', '69000', 'Lyon', 'France', '1988-05-20', '0123456789', '0123456788', 'marie.martin@email.com', 'https://www.example2.com');
INSERT INTO `fiches` (`id`, `civility`, `name`, `firstname`, `address`, `postal_code`, `city`, `country`, `date_of_birth`, `phone`, `fax`, `email`, `url`) VALUES
(7, 'Mlle', 'Doe', 'Jane', '789 Avenue de la Lune', '59000', 'Lille', 'France', '1991-09-12', '01 23 45 67 89', '01 23 45 67 88', 'jane.doe@email.com', 'https://www.example3.com');
INSERT INTO `fiches` (`id`, `civility`, `name`, `firstname`, `address`, `postal_code`, `city`, `country`, `date_of_birth`, `phone`, `fax`, `email`, `url`) VALUES
(8, 'M', 'BEN SAIAD', 'Ali', '148 rue winoc chocqueel', '59200', 'TOURCOING', 'France', '1988-10-03', '0605469408', '0605469408', 'ali.bensaiad@gmail.com', 'https://www.example3.com'),
(9, 'Mme', 'BEN', 'Alia', '148 rue winoc chocqueel', '59200', 'TOURCOING', 'France', '2004-06-22', '06 05 46 94 08', '06 05 46 94 08', 'alia.ben@gmail.com', 'https://www.example5.com'),
(10, 'Mlle', 'Ali', 'Ali', '148 rue winoc chocqueel', '59200', 'TOURCOING', 'France', '2004-02-21', '06 05 46 94 08', '06 05 46 94 08', 'ali.ali@gmail.com', 'https://www.example6.com'),
(11, 'M', 'BEN SAIAD', 'Ali', '148 rue winoc chocqueel', '59100', 'roubaix', 'France', '2009-01-29', '0605469408', '0605469608', 'ali.bensaiad@gmail.com', 'https://www.example5.com'),
(12, 'M', 'BEN SAIAD', 'Ali', '148 rue winoc chocqueel', '59100', 'roubaix', 'France', '2009-01-29', '0605469408', '0605469608', 'ali.bensaiad@gmail.com', 'https://www.example5.com'),
(13, 'Mme', 'BEN SAIADA', 'AliA', '148 rue winoc chocqueel', '59200', 'TOURCOING', 'France', '2000-07-02', '0605469408', '0605469608', 'ali.bensaiad@gmail.com', 'https://www.example4.com'),
(14, 'M', 'BEN SAIAD', '<h2>sklafjhkjfol</h2>', '148 rue winoc chocqueel', '59200', 'TOURCOING', 'France', '2023-07-21', '0605469408', '0123456788', 'ali.bensaiad@gmail.com', 'https://www.example6.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;