-- Database creation
CREATE DATABASE IF NOT EXISTS elrhilas_projet3;

-- Table : account
CREATE TABLE IF NOT EXISTS elrhilas_projet3 . account (
	username VARCHAR(100) NOT NULL,
	pass VARCHAR(100) NOT NULL
	);


INSERT INTO elrhilas_projet3 . account(username, pass)
VALUES ('ift3225','sésame');

INSERT INTO elrhilas_projet3 . account(username, pass)
VALUES ('admin','ouvre-toi');