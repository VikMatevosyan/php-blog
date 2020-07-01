CREATE DATABASE blog;

CREATE TABLE blog_posts (
id INT,
title VARCHAR(40),
text VARCHAR(40),
author VARCHAR(40),
publishDate VARCHAR(40),
isActive VARCHAR(40)
);

CREATE TABLE categories (
id INT,
name VARCHAR(100)
);

CREATE TABLE users (
id INT,
name VARCHAR(100),
email VARCHAR(80),
avatar VARCHAR(40),
password VARCHAR(40),
isActive VARCHAR(40)
);



