CREATE DATABASE IF NOT EXISTS Clienti;
USE Clienti;

CREATE TABLE IF NOT EXISTS Utente(
    CF VARCHAR(16) NOT NULL,
    Password VARCHAR(16) NOT NULL,
    Nome VARCHAR(30) NOT NULL,
    Cognome VARCHAR(30) NOT NULL,
    DataNascita VARCHAR(10) NOT NULL,
    PRIMARY KEY(CF)
)