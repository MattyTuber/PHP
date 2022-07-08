DROP DATABASE IF EXISTS Studenti;
CREATE DATABASE Studenti;
USE Studenti;

CREATE TABLE Studente(
    Nome VARCHAR(30) NOT NULL,
    Cognome VARCHAR(30) NOT NULL,
    Nascita DATE NOT NULL,
    Matricola INT NOT NULL,
    Media FLOAT NOT NULL,
    PRIMARY KEY (Matricola)
);