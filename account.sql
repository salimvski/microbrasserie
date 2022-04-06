-- Database creation
CREATE DATABASE IF NOT EXISTS projet3;

-- Table : account
CREATE TABLE IF NOT EXISTS projet3 . account (
	username VARCHAR(100) NOT NULL,
	pass VARCHAR(100) NOT NULL
	);


INSERT INTO projet3 . account(username, pass)
VALUES ('ift3225','sésame');

INSERT INTO projet3 . account(username, pass)
VALUES ('admin','ouvre-toi');