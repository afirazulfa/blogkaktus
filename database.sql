CREATE TABLE category (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
text_category varchar(100) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE post (
id int(11) NOT NULL AUTO_INCREMENT,
date_post date NOT NULL,
slug varchar(100) NOT NULL,
title varchar(100) NOT NULL,
text_post text NOT NULL,
cat_id int(11) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (cat_id)
REFERENCES category (id)
);

CREATE TABLE photos (
id int(11) NOT NULL AUTO_INCREMENT,
date_photos date NOT NULL,
title varchar(100) NOT NULL,
text_photos text NOT NULL,
post_id int(11) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (post_id)
REFERENCES post (id)
);

CREATE TABLE album (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(100) NOT NULL,
 text_album varchar(100) NOT NULL,
 photo_id int(11) NOT NULL,
 PRIMARY KEY (id),
 FOREIGN KEY (photo_id)
REFERENCES photos (id)
 );

CREATE TABLE tb_user (
  user_id int(10) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  PRIMARY KEY (user_id)
  );