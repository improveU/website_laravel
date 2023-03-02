/*
USE MASTER;
CREATE DATABASE improveyou;
USE improveyou;
*/

CREATE TABLE subscription(
                             id INT AUTO_INCREMENT NOT NULL,
                             model VARCHAR(10),
                             PRIMARY KEY(id)
);

CREATE TABLE category(
                         id INT AUTO_INCREMENT NOT NULL,
                         categoryname VARCHAR(50),
                         imagepath VARCHAR(50),
                         PRIMARY KEY(id)
);

CREATE TABLE tags(
                     id INT AUTO_INCREMENT NOT NULL,
                     tagname VARCHAR(50),
                     PRIMARY KEY(id)
);

CREATE TABLE users(
                      id INT AUTO_INCREMENT NOT NULL,
                      fk_subscriptionID INT NOT NULL,
                      firstname VARCHAR(30),
                      lastname VARCHAR(30),
                      email VARCHAR(50),
                      username VARCHAR(50),
                      profilepicturepath VARCHAR(50),
                      PASSWORD VARCHAR(64),
                      PRIMARY KEY(id),
                      FOREIGN KEY(fk_subscriptionID) REFERENCES subscription(id)
);

CREATE TABLE course(
                       id INT auto_increment NOT NULL,
                       fk_creatorID INT NOT NULL,
                       fk_categoryID INT NOT NULL,
                       title VARCHAR(50),
                       introduction VARCHAR(255),
                       imagepath VARCHAR(50),
                       coursedescription VARCHAR(10000),
                        PRIMARY KEY(id),
                        FOREIGN KEY(fk_creatorID) REFERENCES users(id),
                        FOREIGN KEY(fk_categoryID) REFERENCES category(id)
);

CREATE TABLE tagging(
                        id int AUTO_INCREMENT NOT NULL,
                        fk_courseID INT NOT NULL,
                        fk_tagID INT NOT NULL,
                        PRIMARY KEY(id),
                        FOREIGN KEY(fk_courseID) REFERENCES course(id),
                        FOREIGN KEY(fk_tagID) REFERENCES tags(id)
);
