<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 4/6/2017
 * Time: 1:48 PM
 */

$sql1="CREATE DATABASE `ten` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$sql2="CREATE TABLE IF NOT EXISTS user (
   userid INT NOT NULL AUTO_INCREMENT,
   userimage  VARCHAR(30) NOT NULL DEFAULT '',
   username VARCHAR(16) NOT NULL,
   email  VARCHAR(30) NOT NULL,
   telephone CHAR(11) NOT NULL　UNIQUE,
   password VARCHAR(32) NOT NULL,
   user_level INT NOT NULL DEFAULT 0,  
   login_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
   login_ip VARCHAR(32) NOT NULL,
   register_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   addr1 VARCHAR(100) NOT NULL DEFAULT '',
   addr2 VARCHAR(100) NOT NULL DEFAULT '',
   addr3 VARCHAR(100) NOT NULL DEFAULT '',
   UNIQUE(username),
   PRIMARY KEY (userid)
  )engine=INNODB auto_increment=10000000 default charset=utf8;";