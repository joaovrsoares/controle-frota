CREATE DATABASE controle_frota;
USE controle_frota;

CREATE TABLE viaturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prefixo VARCHAR(10) NOT NULL,
    placa VARCHAR(10) NOT NULL,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    ano INT,
    limite_manutencao INT NOT NULL
);

CREATE TABLE quilometragens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    viatura_id INT,
    quilometragem INT,
    data DATE,
    FOREIGN KEY (viatura_id) REFERENCES viaturas(id)
);

CREATE TABLE manutencao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    viatura_id INT,
    tipo VARCHAR(50),
    data DATE,
    FOREIGN KEY (viatura_id) REFERENCES viaturas(id)
);
