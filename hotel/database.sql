CREATE TABLE `hevent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(30) DEFAULT NULL,
  `event_dat` int(11) DEFAULT NULL,
  `event_mon` varchar(5) DEFAULT NULL,
  `event_yr` int(11) DEFAULT NULL,
  `event_organiser` varchar(20) DEFAULT NULL,
  `event_hr` int(11) DEFAULT NULL,
  `event_min` int(11) DEFAULT NULL,
  `event_daytim` varchar(5) DEFAULT NULL,
  `event_venue` varchar(30) DEFAULT NULL,
  `event_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `hevent` VALUES (1,'Singing Competition',7,'Oct',2015,'Warden & Brothers',7,15,'PM','Jubliee Hall','Friends all are invited to sing and can get the prizes kindly give your names to Brother...\r\n'),(2,'Dance Competition',10,'Oct',2015,'Warden & Brothers',5,30,'PM','Jubliee Hall','Friends all are invited to Dance and can get the prizes kindly give your names to Brother...'),(3,'Seminar on Project',7,'Oct',2015,'Mr. Julias Ceaser',9,15,'AM','Conference Hall','Conference on project if Students failed to come necessary Action Will be taken ');


CREATE TABLE `sfee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(20) DEFAULT NULL,
  `g_gender` varchar(10) DEFAULT NULL,
  `g_datetim` datetime DEFAULT NULL,
  `g_fee` varchar(20) DEFAULT NULL,
  `g_reason` text,
  `g_startdate` varchar(10) DEFAULT NULL,
  `g_lastdate` varchar(10) DEFAULT NULL,
  `g_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `sfee` VALUES (1,'Chinnappan','Male','2015-08-25 11:57:00','100','Did not Come For last Singing Class.','25-8-2015','26-8-2015','Not Paid'),(2,'Jerin','Male','2015-08-25 12:00:00','200','Using laptop in Hostel Premises','25-8-2015','27-8-2015','Not Paid'),(3,'Jershome','Male','2015-08-25 12:02:00','70','Sleeping under the cot continuously','25-8-2015','halfday/24','Not Paid'),(4,'Micheal Dezoza','Male','2015-08-25 12:04:00','200','Always Coming late for Evening Study','25-8-2015','26-8-2015','not paid');