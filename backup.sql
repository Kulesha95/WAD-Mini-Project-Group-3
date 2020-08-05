-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.50


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema hotel_system
--

CREATE DATABASE IF NOT EXISTS hotel_system;
USE hotel_system;

--
-- Definition of table `amenity`
--

DROP TABLE IF EXISTS `amenity`;
CREATE TABLE `amenity` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `amenity` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amenity`
--

/*!40000 ALTER TABLE `amenity` DISABLE KEYS */;
INSERT INTO `amenity` (`id`,`amenity`,`type`,`icon`) VALUES 
 (1,'Free Wi-Fi','Connectivity','fas fa-wifi'),
 (2,'Telephone','Connectivity','fas fa-phone-square-alt'),
 (3,'Radio','Connectivity','fas fa-broadcast-tower'),
 (4,'Multimedia connectivity panel','Connectivity','fas fa-tv'),
 (5,'LED TV','Connectivity','fas fa-tv'),
 (6,'Complimentary bottled water replenished daily','Services','fas fa-wine-bottle'),
 (7,'Daily cleaning service','Services','fas fa-broom'),
 (8,'In-room dining','Services','fas fa-hamburger'),
 (9,'230V electrical sockets','Extras','fas fa-plug'),
 (10,'Ironing facilities','Extras','fas fa-charging-station'),
 (11,'Tea and coffee making facilities','Extras','fas fa-mug-hot'),
 (12,'Connecting rooms (on-request)','Extras','fas fa-person-booth');
/*!40000 ALTER TABLE `amenity` ENABLE KEYS */;


--
-- Definition of table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `reserved_date` date DEFAULT NULL,
  `reserved_time` time DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_booking_user1_idx` (`user_id`),
  KEY `fk_booking_room1_idx` (`room_id`),
  CONSTRAINT `fk_booking_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_booking_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`id`,`from`,`to`,`reserved_date`,`reserved_time`,`user_id`,`room_id`,`status`) VALUES 
 (1,'2020-08-08','2020-08-10','2020-08-04','13:57:36',3,1,0);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;


--
-- Definition of table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE `cms` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(45) DEFAULT NULL,
  `value` longtext,
  `group_code` varchar(45) DEFAULT NULL,
  `page` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` (`id`,`key`,`value`,`group_code`,`page`) VALUES 
 (1,'logo','img/Cms/Logo20200803080634.png','logo1','home'),
 (2,'icon','fas fa-utensils','contact_facilitiesdetails1','home'),
 (3,'facility','Restaurant','contact_facilitiesdetails1','home'),
 (4,'description','Make memorable dining experience','contact_facilitiesdetails1','home'),
 (5,'icon','fas fa-glass-cheers','contact_facilitiesdetails2','home'),
 (6,'facility','Bar','contact_facilitiesdetails2','home'),
 (7,'description','Perfect atmosphere to enjoy','contact_facilitiesdetails2','home'),
 (8,'icon','fas fa-hotel','contact_facilitiesdetails3','home'),
 (9,'facility','Banquet Hall','contact_facilitiesdetails3','home'),
 (10,'description','Reserved for the special moments in life','contact_facilitiesdetails3','home'),
 (11,'icon','fas fa-swimmer','contact_facilitiesdetails4','home'),
 (12,'facility','Swimming Pool','contact_facilitiesdetails4','home'),
 (13,'description','Enjoy the sunset and take a dip in the leisure pool','contact_facilitiesdetails4','home'),
 (14,'icon','fas fa-hands-helping','contact_facilitiesdetails5','home'),
 (15,'facility','24x7 Reception','contact_facilitiesdetails5','home'),
 (16,'description','Round the clock accessibility','contact_facilitiesdetails5','home'),
 (17,'icon','fas fa-dumbbell','contact_facilitiesdetails6','home'),
 (18,'facility','GYM','contact_facilitiesdetails6','home'),
 (19,'description','Stay positive. Attitude is everything','contact_facilitiesdetails6','home'),
 (20,'bannerImage','img/Cms/Carousel_120200803081612.jpg','banner1','home'),
 (21,'welcomeText','Welcome Avenra Garden Hotel','main_details1','home'),
 (22,'roomDescription','Avenra Garden is the newest addition to the historical city, Negombo which has been renowned for the Dutch influence which gave it a colonial atmosphere and allure. Located in a charmingly characteristic, quiet and lively area within short walk distance to all attractive sites and the hotel is surrounded by the extraordinary beauty of churches, buildings, picturesque lagoon and golden beaches.','main_details1','home'),
 (23,'quote','Come to your dream paradise','main_details1','home'),
 (24,'quoteBy','Avenra Garden Hotel','main_details1','home'),
 (25,'quoteImage','img/Cms/garden920200803082405.jpg','quote1','home'),
 (26,'singleRoomsImage','img/Cms/G001B20200803083033.jpg','rooms1','home'),
 (27,'doubleRoomsImage','img/Cms/G002B20200803083045.jpg','rooms2','home'),
 (28,'tripleRoomsImage','img/Cms/G003B20200803083057.jpg','rooms3','home'),
 (29,'contactNumber','+94 312 228 000 / +94 312 228 100/+94 773566999','contact_details1','contact'),
 (30,'addressLine1','Avenra Garden Hotel, ','contact_details1','contact'),
 (31,'addressLine2','22 Negombo - Giriulla Rd, Negombo','contact_details1','contact'),
 (32,'website','https://www.avenrahotels.com','contact_details1','contact'),
 (33,'email','info@avenragardenhotel.com','contact_details1','contact'),
 (34,'googleMapSrc','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2038000268385!2d79.8532200146439!3d7.217579194789506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2eec1cf287c89%3A0xe14018d2425ce2f2!2sAvenra%20Garden%20Hotel!5e0!3m2!1sen!2slk!4v1594030144860!5m2!1sen!2slk','contact_details1','contact'),
 (35,'writeUsImage','img/Cms/gardens00120200803112002.jpg','contact_details2','contact'),
 (36,'description','Whether you book one of our Deluxe Rooms or our choice of Suites, feel free to make yourself at home.\r\nAll of our rooms and suites feature ample space to live, work and play in, with a private terrace to take in the most mesmerising sunrises and sunsets. Subtle accents to the dÃ©cor showcase modern Sri Lankan architecture, with its colonial influences, contemporary clean lines and a calming colour palette in light blue that pays homage to the seascape. The floor-to-ceiling windows let in an abundance of natural daylight and look out onto incredible views of the bay.','accomodation_details1','accomodation'),
 (37,'accomodationImage','img/Cms/15299644320200803124130.jpg','accomodation_details2','accomodation'),
 (38,'description','We, Avenra Group, Filled with hospitality, warmth of the sunny climate and the cool of the sea breeze provide you a very unique experience to your money making your holiday a dreamlike. If you are planning a wedding, a corporate function, a meeting or any other social function, we are equipped to serve you with most elegant and state of the art facilities whilst enhancing your image and desire.\r\n\r\n-Mr. Danesh De Silva, Owner & Founder of Avenra Group-','about_details1','about'),
 (39,'vision','Our vision is to be the ultimate hospitality brand in Sri Lanka.','about_details1','about'),
 (40,'mission','Our mission is to own and manage hotels and resorts in Sri Lanka where we can deliver exceptional hospitality by going beyond the call of duty and extending a personalized, friendly and professional service at every given opportunity.','about_details1','about'),
 (41,'icon','fas fa-bed','icon_area1','about'),
 (42,'line1','200','icon_area1','about'),
 (43,'line2','Rooms','icon_area1','about'),
 (44,'icon','fas fa-bath','icon_area2','about'),
 (45,'line1','80','icon_area2','about'),
 (46,'line2','Bathrooms','icon_area2','about'),
 (47,'icon','fas fa-car','icon_area3','about'),
 (48,'line1','2+','icon_area3','about'),
 (49,'line2','Parks','icon_area3','about'),
 (50,'icon','fas fa-ruler','icon_area4','about'),
 (51,'line1','2500+','icon_area4','about'),
 (52,'line2','sqft','icon_area4','about'),
 (53,'aboutImage1','img/Cms/1836534620200803125258.jpg','about_images1','about'),
 (54,'aboutImage2','img/Cms/1836668120200803125237.jpg','about_images2','about');
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;


--
-- Definition of table `feature`
--

DROP TABLE IF EXISTS `feature`;
CREATE TABLE `feature` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `feature` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feature`
--

/*!40000 ALTER TABLE `feature` DISABLE KEYS */;
INSERT INTO `feature` (`id`,`feature`,`type`,`icon`) VALUES 
 (3,'Balcony','Overview','fas fa-building'),
 (6,'Work space','Bedroom','fas fa-laptop'),
 (7,'Safety box','Bedroom','fas fa-first-aid'),
 (8,'Individual climate control','Bedroom','fas fa-fan'),
 (9,'Mini-bar','Bedroom','fas fa-wine-glass-alt'),
 (10,'Shower','Bathroom','fas fa-shower'),
 (11,'Bathrobes and slippers','Bathroom','fas fa-shoe-prints'),
 (12,'Complimentary toiletries','Bathroom','fas fa-toilet-paper'),
 (13,'Hair-dryer','Bathroom','fas fa-fan'),
 (14,'Shaving point','Bathroom','fas fa-cut'),
 (15,'Towels','Bathroom','fas fa-mitten');
/*!40000 ALTER TABLE `feature` ENABLE KEYS */;


--
-- Definition of table `gallery_image`
--

DROP TABLE IF EXISTS `gallery_image`;
CREATE TABLE `gallery_image` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(200) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `location_name` varchar(45) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_image`
--

/*!40000 ALTER TABLE `gallery_image` DISABLE KEYS */;
INSERT INTO `gallery_image` (`id`,`path`,`type`,`location_name`,`description`) VALUES 
 (2,'img/gallery/00120200803070533.jpg','Interior','',''),
 (3,'img/gallery/000220200803070551.jpg','Exterior','',''),
 (4,'img/gallery/00320200803070603.jpg','Interior','',''),
 (5,'img/gallery/00520200803070616.jpg','Exterior','',''),
 (6,'img/gallery/00620200803070626.jpg','Exterior','',''),
 (7,'img/gallery/00720200803070639.jpg','Exterior','',''),
 (8,'img/gallery/00820200803070653.jpg','Interior','',''),
 (9,'img/gallery/01020200803070706.jpg','Exterior','',''),
 (10,'img/gallery/01120200803070718.jpg','Interior','',''),
 (11,'img/gallery/15299644320200803070730.jpg','Interior','',''),
 (12,'img/gallery/carousel_520200803070743.jpg','Interior','',''),
 (13,'img/gallery/untitled-320200803070810.jpg','Exterior','',''),
 (14,'img/gallery/BrownsBeachNegombo20200803075332.png','Places Near By','Browns Beach Negombo','Enjoyable place to visit during the evening hours. '),
 (15,'img/gallery/St.SebastiansChurch20200803075704.png','Places Near By','St. Sebasthians Church','Roman Catholic Church in Negombo, Sri Lanka'),
 (16,'img/gallery/WaterParkNegombo20200803075812.png','Places Near By','Water Park Negombo','Great place to visit with kids');
/*!40000 ALTER TABLE `gallery_image` ENABLE KEYS */;


--
-- Definition of table `menu_item`
--

DROP TABLE IF EXISTS `menu_item`;
CREATE TABLE `menu_item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` longtext,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_item`
--

/*!40000 ALTER TABLE `menu_item` DISABLE KEYS */;
INSERT INTO `menu_item` (`id`,`name`,`description`,`price`,`image`,`type`) VALUES 
 (1,'String Hoppers','Red or white string hoppers with two curries.','100','img/Food/unnamed20200803121504.jpg','Breakfast'),
 (2,'Rice & Curry','Red or white rice with 5 traditional Sril Lankan curries. Veg/Egg/Fish/Chicken available ','150','img/Food/Sri-Lankan-Rice-and-Curry20200803121629.jpg','Breakfast'),
 (3,'Milk Rice','Traditional Sri Lankan food with spicy sambol.','100','img/Food/milk-rice-on-plate20200803121730.jpg','Breakfast'),
 (4,'Noodles','Sri Lankan Spicy noodles. VEG/Egg/Fish/Chicken/Sea Food available','300','img/Food/69396504-the-noodles-are-popular-sri-lankan-dish-served-with-meat-fish-shrimps-squids-and-vegetables-ahangama20200803123117.jpg','Breakfast'),
 (5,'Rice & Curry','Red or white rice with 5 traditional Sril Lankan curries. Veg/Egg/Fish/Chicken available','150','img/Food/Sri-Lankan-Rice-and-Curry20200803123221.jpg','Lunch'),
 (6,'Fried Rice','Chinese spicy Fried Rice. Veg/Egg/Fish/Chicken/Sea Food available','350','img/Food/chicken-fried-rice-5034429720200803123308.jpg','Lunch'),
 (7,'Noodles','Sri Lankan Spicy noodles. VEG/Egg/Fish/Chicken/Sea Food available','300','img/Food/69396504-the-noodles-are-popular-sri-lankan-dish-served-with-meat-fish-shrimps-squids-and-vegetables-ahangama20200803123344.jpg','Lunch'),
 (8,'Noodles','Sri Lankan Spicy noodles. VEG/Egg/Fish/Chicken/Sea Food available','300','img/Food/69396504-the-noodles-are-popular-sri-lankan-dish-served-with-meat-fish-shrimps-squids-and-vegetables-ahangama20200803123421.jpg','Dinner'),
 (9,'Fried Rice','Chinese spicy Fried Rice. Veg/Egg/Fish/Chicken/Sea Food available','350','img/Food/chicken-fried-rice-5034429720200803123446.jpg','Dinner'),
 (10,'Rice & Curry','Red or white rice with 5 traditional Sril Lankan curries. Veg/Egg/Fish/Chicken available','150','img/Food/Sri-Lankan-Rice-and-Curry20200803123521.jpg','Dinner'),
 (11,'Kottu','Sri Lankan spicy fast food. Veg/Egg/Fish/Chicken available','350','img/Food/srilankan-kottu-a-tasty20200803123611.jpg','Dinner'),
 (12,'String Hoppers','Red or white string hoppers with two curries.','100','img/Food/unnamed20200803123659.jpg','Dinner'),
 (13,'Pasta','Chinese pasta. Veg/Egg/Fish/Chicken available','400','img/Food/Pasta-with-Mushroom-&-Herb-Sauce_43_1.1.2_326X58020200803123752.jpg','Dinner');
/*!40000 ALTER TABLE `menu_item` ENABLE KEYS */;


--
-- Definition of table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` longtext,
  `user_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_message_user1_idx` (`user_id`),
  CONSTRAINT `fk_message_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`id`,`name`,`email`,`subject`,`message`,`user_id`) VALUES 
 (1,'Nimal Perera','nimal_perera@gmail.com','About Packages','Do you have any special packages for small groups?',NULL),
 (2,'Anuradha Panagoda','anuradha@gmail.com','Thank You.!','Thank you for the friendly and valuable service you have been provided.',3);
/*!40000 ALTER TABLE `message` ENABLE KEYS */;


--
-- Definition of table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` tinyint(4) DEFAULT NULL,
  `review` longtext,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_review_user1_idx` (`user_id`),
  CONSTRAINT `fk_review_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`id`,`rate`,`review`,`date`,`time`,`user_id`) VALUES 
 (1,5,'Food is really tasty. Staff is very friendly and the prices are very reasonable. The fruit juices are very fresh and yum. Secure parking facilities are available at the hotel.','2020-08-03','11:22:44',3),
 (2,2,'Reputation precedes the actual quality of the place. Location is beautiful, but the service is not satisfactory. The inexperienced staff is not trained well to handle guests.','2020-08-03','11:28:30',4),
 (3,4,'Avenra Garden hotel is popular for the wedding functions. Situated away from the busy Negombo city. They have large reception halls and large parking space.','2020-08-03','11:29:39',5);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;


--
-- Definition of table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` longtext,
  `size` int(11) DEFAULT NULL,
  `bed_type` varchar(45) DEFAULT NULL,
  `ideal_for` varchar(100) DEFAULT NULL,
  `view` varchar(45) DEFAULT NULL,
  `inter_connections` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` (`id`,`name`,`description`,`size`,`bed_type`,`ideal_for`,`view`,`inter_connections`) VALUES 
 (1,'Deluxe Ocean View','Enter an oasis of tranquillity, leave the cares of the world behind. Our Deluxe Ocean View featuring a private balcony, 40-inch LED TV and free Wi-Fi have been designed for you to ease the mind.',39,'King or twin beds','2 adults and 1 child or 3 adults','Ocean view','Available'),
 (2,'Deluxe Ocean View Horizon','Relax in the Deluxe Ocean View Horizon at our beachfront resort in Galle. Open-plan and spacious, the room features black-out curtains, modern furnishings and a private balcony.',39,'King or twin beds','2 adults and 1 child or 3 adults','Ocean view','Available'),
 (3,'Grand Deluxe Ocean View','Perhaps you want to watch the sun gradually sink beneath the horizon or perhaps listen to the waves break ashore just beyond your private balcony to fall asleep. Peaceful and light, end a long day of exploration in our Grand Deluxe Ocean View room with the 40-inch LED TV or simply revitalise with the rain shower.',57,'King bed','2 adults and 1 child or 3 adults','Ocean view','Available');
/*!40000 ALTER TABLE `room` ENABLE KEYS */;


--
-- Definition of table `room_has_amenity`
--

DROP TABLE IF EXISTS `room_has_amenity`;
CREATE TABLE `room_has_amenity` (
  `room_id` bigint(20) NOT NULL,
  `amenity_id` bigint(20) NOT NULL,
  PRIMARY KEY (`room_id`,`amenity_id`),
  KEY `fk_room_has_amenity_amenity1_idx` (`amenity_id`),
  KEY `fk_room_has_amenity_room1_idx` (`room_id`),
  CONSTRAINT `fk_room_has_amenity_amenity1` FOREIGN KEY (`amenity_id`) REFERENCES `amenity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_room_has_amenity_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_has_amenity`
--

/*!40000 ALTER TABLE `room_has_amenity` DISABLE KEYS */;
INSERT INTO `room_has_amenity` (`room_id`,`amenity_id`) VALUES 
 (1,1),
 (2,1),
 (3,1),
 (1,2),
 (2,2),
 (3,2),
 (2,3),
 (3,3),
 (2,4),
 (3,4),
 (2,5),
 (3,5),
 (1,6),
 (2,6),
 (3,6),
 (1,7),
 (2,7),
 (3,7),
 (2,8),
 (3,8),
 (1,9),
 (2,9),
 (3,9),
 (2,10),
 (3,10),
 (1,11),
 (2,11),
 (3,11),
 (1,12),
 (2,12),
 (3,12);
/*!40000 ALTER TABLE `room_has_amenity` ENABLE KEYS */;


--
-- Definition of table `room_has_feature`
--

DROP TABLE IF EXISTS `room_has_feature`;
CREATE TABLE `room_has_feature` (
  `room_id` bigint(20) NOT NULL,
  `feature_id` bigint(20) NOT NULL,
  PRIMARY KEY (`room_id`,`feature_id`),
  KEY `fk_room_has_feature_feature1_idx` (`feature_id`),
  KEY `fk_room_has_feature_room1_idx` (`room_id`),
  CONSTRAINT `fk_room_has_feature_feature1` FOREIGN KEY (`feature_id`) REFERENCES `feature` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_room_has_feature_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_has_feature`
--

/*!40000 ALTER TABLE `room_has_feature` DISABLE KEYS */;
INSERT INTO `room_has_feature` (`room_id`,`feature_id`) VALUES 
 (1,3),
 (2,3),
 (3,3),
 (2,6),
 (3,6),
 (1,7),
 (2,7),
 (3,7),
 (2,8),
 (3,8),
 (2,9),
 (3,9),
 (1,10),
 (2,10),
 (3,10),
 (1,11),
 (2,11),
 (3,11),
 (1,12),
 (2,12),
 (3,12),
 (1,13),
 (2,13),
 (3,13),
 (2,14),
 (3,14),
 (1,15),
 (2,15),
 (3,15);
/*!40000 ALTER TABLE `room_has_feature` ENABLE KEYS */;


--
-- Definition of table `room_image`
--

DROP TABLE IF EXISTS `room_image`;
CREATE TABLE `room_image` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(200) DEFAULT NULL,
  `thumbnail` tinyint(4) DEFAULT NULL,
  `room_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_room_image_room_idx` (`room_id`),
  CONSTRAINT `fk_room_image_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_image`
--

/*!40000 ALTER TABLE `room_image` DISABLE KEYS */;
INSERT INTO `room_image` (`id`,`path`,`thumbnail`,`room_id`) VALUES 
 (2,'img/Room/deluxe-ocean-view_king-bed-view20200727103537.jpg',0,2),
 (3,'img/Room/deluxe-ocean-view_king-bed20200727103547.jpg',0,2),
 (4,'img/Room/deluxe-ocean-view_twin-bed-view20200727103601.jpg',0,2),
 (5,'img/Room/deluxe-ocean-view_bathroom-120200727103635.jpg',0,2),
 (6,'img/Room/deluxe-ocean-view_bathroom-220200727103649.jpg',0,2),
 (7,'img/Room/deluxe-ocean-view_twin-bed-view2020072710360120200727104402.jpg',0,1),
 (9,'img/Room/grand-deluxe-ocean-view20200727111620.jpg',0,3),
 (10,'img/Room/grand-deluxe-ocean-view_terrace20200727111651.jpg',0,3),
 (11,'img/Room/grand-deluxe-ocean-view_bathroom20200727111705.jpg',0,3),
 (13,'img/Room/deluxe-ocean-view_bathroom-22020072710364920200727115700.jpg',0,1),
 (14,'img/Room/deluxe-ocean-view_living-area2020072710352020200727121412.jpg',0,1);
/*!40000 ALTER TABLE `room_image` ENABLE KEYS */;


--
-- Definition of table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `direct` varchar(16) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` (`id`,`title`,`first_name`,`last_name`,`designation`,`email`,`mobile`,`direct`,`type`) VALUES 
 (1,'Mr.','Ananda','Talwatte ','Director','','','','Director'),
 (2,'Mr.','Nishantha','De Silva','Chairman','','','','Chairman'),
 (3,'Mr.','Anura','Senanayake','Operation Manager','anura@gmail.com','0775425638','0119567863','Management Team'),
 (4,'Mr.','Nimal','Jayasinghe','Human Resource Manager','nimalj@gmail.com','0715468965','0115478823','Management Team');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`,`first_name`,`last_name`,`image`,`username`,`password`,`email`,`status`) VALUES 
 (3,'Anuradha','Panagoda','img/User/photo20200803112157.png','anuradha','anuradha','anuradha@gmail.com',1),
 (4,'Lahiru','Gunarathne','img/User/photo(1)20200803112730.png','lahiru','lahiru','lahiru@gmail.com',1),
 (5,'Mahesh','Abeyratne','img/User/photo(2)20200803112803.png','mahesh','mahesh','mahesh@gmail.com',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
