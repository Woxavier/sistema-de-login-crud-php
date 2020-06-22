DROP DATABASE IF EXISTS sistema;
CREATE DATABASE sistema;

USE sistema;

CREATE TABLE users(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(200),
    `username` VARCHAR(200),
    `password` VARCHAR(200)
);