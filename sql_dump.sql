# Host: localhost  (Version: 5.1.38-community)

DROP DATABASE IF EXISTS `stshop`;
CREATE DATABASE `stshop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stshop`;

#
##	table: login  
##	fields: eadd-> email address, pass-> password
#
CREATE TABLE `login` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

#
##	table: products 
##	fields: title-> title, image-> image(image_name eg:5.jpg), price-> price, category-> category
##  categories are 'msrt' -> Mens shirts, 'msh' -> Mens Shoes , 'macc' -> Mens Accessories, 
##		'wsrt' -> Womens Tops, 'wacc' -> Womens Accessories, 'wsh' -> Womens Footwear
#
CREATE TABLE `prod` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

#
##	table: paypal 
##	fields: eadd-> email address, pass-> password, add-> address
#
CREATE TABLE `paypal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eadd` tinytext NOT NULL,
  `pass` text NOT NULL,
  `add` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

#
##	table: credit card 
##	fields: ccn-> credit card no., csc-> credit secure code, month-> month, year-> year,
##			add-> address, cs-> country/state, tele-> telephone		
#
CREATE TABLE `cc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ccn` int(11) NOT NULL,
  `csc` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `add` text NOT NULL,
  `cs` text NOT NULL,
  `tele` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;