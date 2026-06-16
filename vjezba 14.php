/*
SQL kod za izradu baze i tablice users

CREATE DATABASE vjezba14;

USE vjezba14;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(50) NOT NULL,
    prezime VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    lozinka VARCHAR(255) NOT NULL,
    drzava VARCHAR(50),
    opis TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

*/