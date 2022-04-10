CREATE TABLE `authme` (
 `username` varchar(255) DEFAULT NULL,
 `password` varchar(255) DEFAULT NULL,
 `email` varchar(255) DEFAULT NULL,
 `token` varchar(255) DEFAULT NULL,
 `status` smallint(1) DEFAULT NULL,
 `email_verified_at` timestamp NULL DEFAULT NULL,
 UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `visitors` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `ip` varchar(255) NOT NULL,
 `view` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `rates` (
 `total_star` int(11) NOT NULL,
 `count_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `comments` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) CHARACTER SET utf8 NOT NULL,
 `email` varchar(255) CHARACTER SET utf8 NOT NULL,
 `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
 `time` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

CREATE TABLE `coins` (
 `username` varchar(255) NOT NULL,
 `token` double NOT NULL DEFAULT 0,
 `coin` double NOT NULL DEFAULT 0,
 PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `nhinguyen`.`files` ( `username` VARCHAR(255) NOT NULL , `fileid` VARCHAR(255) NOT NULL , `filename` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `filecost` INT NOT NULL , `bought` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `linkdownload` VARCHAR(255) NOT NULL , PRIMARY KEY (`fileid`)) ENGINE = InnoDB;

CREATE TABLE `libraries` (
 `fileid` varchar(255) NOT NULL,
 `countdown` int(11) NOT NULL,
 PRIMARY KEY (`fileid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;