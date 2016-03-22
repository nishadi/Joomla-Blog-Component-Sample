DROP TABLE IF EXISTS `#__tbl_post`;

CREATE TABLE `#__tbl_post` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL,
	`articletext` VARCHAR(1000) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__tbl_post` (`title`) VALUES
('Hello World Post!'),
('Good bye World Post!');