create database gym;
use gym;
CREATE TABLE users (
username VARCHAR(50) NOT NULL UNIQUE PRIMARY KEY,
name varchar(50) not null,
email varchar(255) not null,
password VARCHAR(255) NOT NULL, 
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

