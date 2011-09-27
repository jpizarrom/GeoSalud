CREATE TABLE user (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	salt VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	profile TEXT
);

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `email`, `profile`) VALUES (1, 'admin', '1ed85e5377b8f00eec6512a288012987', '', '', NULL);
