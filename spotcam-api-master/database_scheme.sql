CREATE TABLE `location` (
  `locationID` int(11) NOT NULL auto_increment,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `lname` varchar(90) NOT NULL,
  `type` varchar(90) NOT NULL,
  `city` varchar(90) NOT NULL,
  `country` varchar(90) NOT NULL,
  `timeUploaded` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`locationID`)
)