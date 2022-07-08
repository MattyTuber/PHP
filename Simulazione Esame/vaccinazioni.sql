CREATE DATABASE IF NOT EXISTS Vaccinazioni;
USE Vaccinazioni;

CREATE TABLE IF NOT EXISTS Citta(
    nome VARCHAR(50) NOT NULL,
    provincia VARCHAR(2),
    PRIMARY KEY (nome)
);

CREATE TABLE IF NOT EXISTS Paziente(
    id VARCHAR(20) NOT NULL,
    nome VARCHAR(20) NOT NULL,
    cognome VARCHAR(20) NOT NULL,
    data_nascita DATE NOT NULL,
    address VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    mail VARCHAR(20),
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (city) REFERENCES Citta(nome)
);

CREATE TABLE IF NOT EXISTS Operatore(
    codOp INT NOT NULL AUTO_INCREMENT,
    tessera_san VARCHAR(20) NOT NULL,
    nome VARCHAR(20) NOT NULL,
    cognome VARCHAR(20) NOT NULL,
    data_nascita DATE NOT NULL,
    address VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    mail VARCHAR(20),
    phone VARCHAR(20) NOT NULL,
    qualifica VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    PRIMARY KEY (codOp),
    FOREIGN KEY (city) REFERENCES Citta(nome)
);

CREATE TABLE IF NOT EXISTS Sede(
    codSede INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    indirizzo VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    PRIMARY KEY (codSede),
    FOREIGN KEY (city) REFERENCES Citta(nome)
);

CREATE TABLE IF NOT EXISTS Fornitore(
    ragSoc VARCHAR(30) NOT NULL,
    pIva VARCHAR(30) NOT NULL,
    indirizzo VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    PRIMARY KEY (ragSoc),
    FOREIGN KEY (city) REFERENCES Citta(nome)
);

CREATE TABLE IF NOT EXISTS Dose(
    codFiala INT NOT NULL AUTO_INCREMENT,
    lotto INT NOT NULL,
    data DATE NOT NULL,
    time VARCHAR(20) NOT NULL,
    idPaziente VARCHAR(20) NOT NULL,
    codOp INT NOT NULL,
    braccio VARCHAR(2) NOT NULL,
    codSede INT NOT NULL,
    ragSoc VARCHAR(30) NOT NULL,
    PRIMARY KEY (codFiala, lotto),
    FOREIGN KEY (idPaziente) REFERENCES Paziente(id),
    FOREIGN KEY (codOp) REFERENCES Operatore(codOp),
    FOREIGN KEY (codSede) REFERENCES Sede(codSede),
    FOREIGN KEY (ragSoc) REFERENCES Fornitore(ragSoc)
);

CREATE USER IF NOT EXISTS 'Paziente'@'localhost' IDENTIFIED BY '';
CREATE USER IF NOT EXISTS 'Operatore'@'localhost' IDENTIFIED BY '';

GRANT SELECT ON Vaccinazioni.Dose TO 'Paziente'@'localhost';
GRANT SELECT, UPDATE ON Vaccinazioni.Paziente TO 'Paziente'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON Vaccinazioni.* TO 'Operatore'@'localhost';

/*INSERT INTO Citta (nome, provincia) VALUES
('Bologna', 'BO'),
('Milano', 'MI'),
('Roma', 'RM'),
('Torino', 'TO'),
('Napoli', 'NA'),
('Firenze', 'FI'),
('Palermo', 'PA'),
('Genova', 'GE'),
('Bari', 'BA'),
('Catania', 'CA'),
('Messina', 'ME'),
('Bergamo', 'BG'),
('Venezia', 'VE'),
('Trieste', 'TS'),
('Padova', 'PD'),
('Ancona', 'AN'),
('Parma', 'PR'),
('Cagliari', 'CA'),
('Taranto', 'TA'),
('Cesena', 'CE'),
('Pescara', 'PE'),
('Bolzano', 'BZ'),
('Udine', 'UD'),
('Cuneo', 'CN'),
('Siena', 'SI'),
('Salerno', 'SA'),
('Foggia', 'FG'),
('Caltanissetta', 'CL'),
('Lecce', 'LE'),
('Alessandria', 'AL'),
('Vicenza', 'VI'),
('Terni', 'TR'),
('Rimini', 'RN'),
('Sassari', 'SS'),
('Brescia', 'BS'),
('Como', 'CO'),
('Novara', 'NO'),
('Asti', 'AT'),
('Bolzano-Bozen', 'BZ'),
('Verona', 'VR'),
('Ravenna', 'RA'),
('Trento', 'TN'),
('Piacenza', 'PC'),
('Pisa', 'PI'),
('Livorno', 'LI'),
('Perugia', 'PG'),
('Ghislarengo', 'VC');*/

/*INSERT INTO Sede (nome, indirizzo, city) VALUES
('Sede 1', 'Via Sede 1', 'Novara'),
('Sede 2', 'Via Sede 2', 'Brescia'),
('Sede 3', 'Via Sede 3', 'Milano'),
('Sede 4', 'Via Sede 4', 'Bergamo'),
('Sede 5', 'Via Sede 5', 'Bologna'),
('Sede 6', 'Via Sede 6', 'Firenze'),
('Sede 7', 'Via Sede 7', 'Genova'),
('Sede 8', 'Via Sede 8', 'Cagliari'),
('Sede 9', 'Via Sede 9', 'Cesena'),
('Sede 10', 'Via Sede 10', 'Cuneo'),
('Sede 11', 'Via Sede 11', 'Como');*/

/*INSERT INTO Fornitore (ragSoc, pIva, indirizzo, city) VALUES
('Fornitore 1', '12345678901', 'Via Fornitore 1', 'Bologna'),
('Fornitore 2', '12345678902', 'Via Fornitore 2', 'Bergamo'),
('Fornitore 3', '12345678903', 'Via Fornitore 3', 'Milano'),
('Fornitore 4', '12345678904', 'Via Fornitore 4', 'Bologna'),
('Fornitore 5', '12345678905', 'Via Fornitore 5', 'Firenze'),
('Fornitore 6', '12345678906', 'Via Fornitore 6', 'Genova');*/