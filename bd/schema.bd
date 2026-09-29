-- criação da database
create database neris_machine;
use neris_machine;
-- criação das tabelas

CREATE TABLE categoria (
id_categoria INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
descricao VARCHAR(255)
);

CREATE TABLE usuario (
id_usuario INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(120) NOT NULL,
email VARCHAR(150) UNIQUE NOT NULL,
senha VARCHAR(255) NOT NULL,
perfil VARCHAR(30) NOT NULL
);

CREATE TABLE equipamento (
id_equipamento INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(120) NOT NULL,
descricao VARCHAR(255),
status VARCHAR(30),
id_categoria INT NOT NULL,
FOREIGN KEY (id_categoria)
REFERENCES categoria(id_categoria)
);

CREATE TABLE emprestimo (
id_emprestimo INT PRIMARY KEY AUTO_INCREMENT,
data_retirada DATE,
data_prevista_devolucao DATE,
data_devolucao DATE,
id_usuario INT NOT NULL,
id_equipamento INT NOT NULL,
status VARCHAR(30),
FOREIGN KEY (id_usuario)
REFERENCES usuario(id_usuario),
FOREIGN KEY (id_equipamento)
REFERENCES equipamento(id_equipamento)
);

CREATE TABLE manutencao (
id_manutencao INT PRIMARY KEY AUTO_INCREMENT,
data_manutencao DATE,
descricao VARCHAR(255),
tipo VARCHAR(100),
status VARCHAR(30),
id_equipamento INT NOT NULL,
FOREIGN KEY (id_equipamento)
REFERENCES equipamento(id_equipamento)
);

-- inserção de dados

INSERT INTO categoria(nome, descricao)
VALUES
('Furadeiras', 'Equipamentos de perfuração'),
('Betoneiras', 'Mistura de concreto'),
('Ferramentas Elétricas', 'Equipamentos elétricos');

INSERT INTO usuario(nome, email, senha, perfil)
VALUES
('Administrador', 'admin@devisate.com', '123456', 'ADMIN'),
('Carlos Silva', 'carlos@devisate.com', '123456', 'USUARIO'),
('Felipe Canto', 'felipe@devisate.com', '123456', 'USUARIO');

INSERT INTO equipamento(nome, descricao, status, id_categoria)
VALUES
('Furadeira Bosch', 'Furadeira de impacto', 'DISPONIVEL', 1),
('Betoneira 400L', 'Betoneira para concreto', 'DISPONIVEL', 2);

INSERT INTO emprestimo(data_retirada, data_prevista_devolucao, data_devolucao, id_usuario, id_equipamento, status)
VALUES
('2026-09-14', '2026-10-14', '2026-10-14', 1, 1, 'PENDENTE'),
('2026-08-14', '2026-9-14', '2026-9-14', 3, 2, 'DEVOLVIDO');
