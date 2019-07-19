# LolMatchmaking

LolMatchmaking
!-This application requires the use of the use of an XAMPP or similar software that runs localhost on your machine with a working database connection.

Please run these queries into phpMyAdmin MySQL database before running application.

CREATE DATABASE loginlol; CREATE TABLE login( id int(10) NOT NULL AUTO_INCREMENT, username varchar(50) NOT NULL, email varchar(100) NOT NULL, upassword varchar(50) NOT NULL, PRIMARY KEY (id) )

CREATE DATABASE contactlol; CREATE TABLE feedback( id int(10) NOT NULL AUTO_INCREMENT, name varchar(50) NOT NULL, email varchar(100) NOT NULL, subject varchar(255) NOT NULL, message varchar(255) NOT NULL, PRIMARY KEY (id) )
