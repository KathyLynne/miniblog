##################################################
# Create Database
##################################################
CREATE DATABASE if not exists miniblog;

GRANT all privileges on miniblog.*
    to 'miniblog'@'localhost'
    identified by 'secret';

##################################################
# Create Table
##################################################
USE miniblog;

CREATE TABLE post (
    id int not null auto_increment primary key,
    title varchar(255) not null,
    body varchar(500) not null,
    created timestamp not null 
);

##################################################
# Sample Post
##################################################
insert into post (title, body, created) values ('1st Post',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.', now());
insert into post (title, body, created) values ('2st Post',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.', now());
insert into post (title, body, created) values ('3st Post',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.', now());
insert into post (title, body, created) values ('4st Post',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.', now());
