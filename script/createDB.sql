CREATE TABLE `authme` (
 `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `realname` varchar(255) NOT NULL,
 `password` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
 `ip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
 `lastlogin` bigint(20) DEFAULT NULL,
 `x` double NOT NULL DEFAULT 0,
 `y` double NOT NULL DEFAULT 0,
 `z` double NOT NULL DEFAULT 0,
 `world` varchar(255) NOT NULL DEFAULT 'world',
 `regdate` bigint(20) NOT NULL DEFAULT 0,
 `regip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
 `yaw` float DEFAULT NULL,
 `pitch` float DEFAULT NULL,
 `email` varchar(255) DEFAULT NULL,
 `isLogged` smallint(6) NOT NULL DEFAULT 0,
 `hasSession` smallint(6) NOT NULL DEFAULT 0,
 `totp` varchar(32) DEFAULT NULL,
 `uuid` varchar(36) DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=utf8;
CREATE TABLE `countdownloads` (
 `fileid` varchar(255) DEFAULT NULL,
 `plid` varchar(255) DEFAULT NULL,
 `countdown` int(11) NOT NULL,
 KEY `fk_countdownload_to_file` (`fileid`),
 KEY `fk_countdownload_to_plugin` (`plid`),
 CONSTRAINT `fk_countdownload_to_file` FOREIGN KEY (`fileid`) REFERENCES `file` (`fileid`),
 CONSTRAINT `fk_countdownload_to_plugin` FOREIGN KEY (`plid`) REFERENCES `plugin` (`plid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `file` (
 `fileid` varchar(255) NOT NULL,
 `filename` varchar(255) CHARACTER SET utf8 NOT NULL,
 `filecost` double NOT NULL,
 `link` varchar(255) NOT NULL,
 PRIMARY KEY (`fileid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `filedownloads` (
 `fileid` varchar(255) NOT NULL,
 `countdown` int(11) NOT NULL,
 KEY `FK_fildownloads_to_file` (`fileid`),
 CONSTRAINT `FK_fildownloads_to_file` FOREIGN KEY (`fileid`) REFERENCES `file` (`fileid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `playercoins` (
 `username` varchar(255) CHARACTER SET utf8 NOT NULL,
 `token` double NOT NULL DEFAULT 0,
 `coin` double NOT NULL DEFAULT 0,
 KEY `FK_to_authme` (`username`),
 CONSTRAINT `fk_playercoins_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `playercomments` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) CHARACTER SET utf8 NOT NULL,
 `email` varchar(255) CHARACTER SET utf8 NOT NULL,
 `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
 `time` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 KEY `FK_comments_to_authme` (`username`),
 CONSTRAINT `FK_playercomments_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
CREATE TABLE `playerfiles` (
 `id` smallint(6) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) CHARACTER SET utf8 NOT NULL,
 `filename` varchar(255) NOT NULL,
 `boughtat` timestamp NOT NULL DEFAULT current_timestamp(),
 `link` varchar(255) NOT NULL,
 `fileid` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_playerfiles_to_file` (`fileid`),
 KEY `fk_playerfiles_to_authme` (`username`),
 CONSTRAINT `fk_playerfiles_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`),
 CONSTRAINT `fk_playerfiles_to_file` FOREIGN KEY (`fileid`) REFERENCES `file` (`fileid`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
CREATE TABLE `playerplugins` (
 `id` smallint(6) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) CHARACTER SET utf8 NOT NULL,
 `plname` varchar(255) CHARACTER SET utf8 NOT NULL,
 `boughtat` timestamp NOT NULL DEFAULT current_timestamp(),
 `link` varchar(255) NOT NULL,
 `plid` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_playerplugins_to_plugin` (`plid`),
 KEY `fk_playerplugins_to_authme` (`username`),
 CONSTRAINT `fk_playerplugins_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`),
 CONSTRAINT `fk_playerplugins_to_plugin` FOREIGN KEY (`plid`) REFERENCES `plugin` (`plid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
CREATE TABLE `plugin` (
 `plid` varchar(255) NOT NULL,
 `plname` varchar(255) CHARACTER SET utf8 NOT NULL,
 `plcost` double NOT NULL,
 `link` varchar(255) NOT NULL,
 PRIMARY KEY (`plid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `rates` (
 `count_rate` int(11) NOT NULL,
 `total_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `salt` (
 `username` varchar(200) DEFAULT NULL,
 `salt` varchar(200) DEFAULT NULL,
 UNIQUE KEY `username` (`username`),
 CONSTRAINT `fk_salt_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `visitors` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `ip` varchar(255) NOT NULL,
 `view` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;