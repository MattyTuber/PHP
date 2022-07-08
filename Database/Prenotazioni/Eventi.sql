CREATE DATABASE IF NOT EXISTS Eventi;
USE Eventi;

CREATE TABLE Evento (
    nome VARCHAR(50) NOT NULL,
    data DATE NOT NULL,
    ora TIME NOT NULL,
    PRIMARY KEY (nome)
);

CREATE TABLE Prenotazioni(
    idPrenotazione INT NOT NULL AUTO_INCREMENT,
    nomeEvento VARCHAR(50) NOT NULL,
    persone INT NOT NULL,
    PRIMARY KEY (idPrenotazione),
    FOREIGN KEY (nomeEvento) REFERENCES Evento(nome)
);

INSERT INTO Evento (nome, data, ora) VALUES
('Evento 1', '2020-01-01', '12:00:00'),
('Evento 2', '2021-01-01', '09:00:00'),
('Evento 3', '2022-01-01', '12:00:00'),
('Evento 4', '2023-01-01', '09:00:00'),
('Evento 5', '2024-01-01', '12:00:00'),
('Evento 6', '2025-01-01', '09:00:00'),
('Evento 7', '2026-01-01', '12:00:00'),
('Evento 8', '2027-01-01', '09:00:00'),
('Evento 9', '2028-01-01', '12:00:00'),
('Evento 10', '2029-01-01', '09:00:00'),
('Evento 11', '2030-01-01', '12:00:00'),
('Evento 12', '2031-01-01', '09:00:00'),
('Evento 13', '2032-01-01', '12:00:00'),
('Evento 14', '2033-01-01', '09:00:00'),
('Evento 15', '2034-01-01', '12:00:00'),
('Evento 16', '2035-01-01', '09:00:00'),
('Evento 17', '2036-01-01', '12:00:00'),
('Evento 18', '2037-01-01', '09:00:00'),
('Evento 19', '2038-01-01', '12:00:00'),
('Evento 20', '2039-01-01', '09:00:00'),
('Evento 21', '2040-01-01', '12:00:00'),
('Evento 22', '2041-01-01', '09:00:00'),
('Evento 23', '2042-01-01', '12:00:00'),
('Evento 24', '2043-01-01', '09:00:00'),
('Evento 25', '2044-01-01', '12:00:00');