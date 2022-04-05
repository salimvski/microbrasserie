CREATE DATABASE projet3;

USE projet3;


CREATE TABLE brasseries (
	Nom VARCHAR(100), 
	`Appellation légal` VARCHAR(100),
    `Autre appellation` VARCHAR(100), 
    Adresse VARCHAR(100), 
    Ville VARCHAR(100),
    `Code Postal` VARCHAR(100),
    Province VARCHAR(100),
    Pays VARCHAR(100),
    Latitude double,
    Longitude double,
    `Région Administrative` int,
    Permis VARCHAR(100),
    `Brasse sous le permis` VARCHAR(100),
    `Type de Permis` VARCHAR(100),
    `Membre de AMBQ` int,
    `Annee fondation` VARCHAR(100),
    `Site web` VARCHAR(100),
    Courriel VARCHAR(100),
    Téléphone VARCHAR(100),
    Facebook VARCHAR(128),
    Ratebeer VARCHAR(128),
    Untappd VARCHAR(128),
    AuMenu VARCHAR(128),
    Twitter VARCHAR(128),
    Wikidata VARCHAR(128),
    Youtube VARCHAR(128),
    Instagram VARCHAR(128),
    Pinterest VARCHAR(128),
    Snapchat VARCHAR(128),
    Autre VARCHAR(128),
    Notes VARCHAR(128)



    );


CREATE TABLE account (
	username VARCHAR(100) NOT NULL,
	pass VARCHAR(100) NOT NULL
	);


INSERT INTO account(username, pass)
VALUES ('ift3225','sésame');
INSERT INTO account(username, pass)
VALUES ('admin','ouvre-toi');

 
LOAD DATA LOCAL INFILE 'microbrasseries.sql' INTO TABLE brasseries FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\n' IGNORE 1 ROWS;
