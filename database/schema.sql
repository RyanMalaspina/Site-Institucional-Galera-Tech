--
-- Database: `galeratech`
--
CREATE DATABASE IF NOT EXISTS `galeratech` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `galeratech`;


CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL UNIQUE,
    senha_hash VARCHAR(255) NOT NULL,
    ativo TINYINT(1) DEFAULT 1,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE site_config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo_site VARCHAR(180),
    descricao_site TEXT,
    logo VARCHAR(255),
    texto_botao_menu VARCHAR(80),
    instagram VARCHAR(120),
    instagram_link VARCHAR(255),
    whatsapp_formatado VARCHAR(80),
    whatsapp_link VARCHAR(255),
    endereco VARCHAR(255),
    texto_rodape TEXT,
    link_apeti VARCHAR(255),
    link_inscricao VARCHAR(255),
    link_padrinho VARCHAR(255)
);

CREATE TABLE hero_slides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tag VARCHAR(120),
    titulo_html TEXT,
    subtitulo TEXT,
    texto_botao_1 VARCHAR(80),
    link_botao_1 VARCHAR(255),
    texto_botao_2 VARCHAR(80),
    link_botao_2 VARCHAR(255),
    card_titulo VARCHAR(160),
    card_texto TEXT,
    imagem VARCHAR(255),
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE indicadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icone VARCHAR(80),
    numero VARCHAR(40),
    descricao TEXT,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE sobre (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tag VARCHAR(120),
    titulo VARCHAR(180),
    texto_1 TEXT,
    texto_2 TEXT,
    imagem VARCHAR(255),
    alt_imagem VARCHAR(180)
);

CREATE TABLE jornada (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(20),
    titulo VARCHAR(120),
    descricao TEXT,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE aprendizado (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icone VARCHAR(80),
    titulo VARCHAR(120),
    descricao TEXT,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE publico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(120),
    descricao TEXT,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE experiencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icone VARCHAR(80),
    titulo VARCHAR(120),
    descricao TEXT,
    imagem VARCHAR(255),
    destaque TINYINT(1) DEFAULT 0,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE depoimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120),
    cargo VARCHAR(120),
    texto TEXT,
    foto VARCHAR(255),
    destaque TINYINT(1) DEFAULT 0,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE instagram_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(80),
    titulo VARCHAR(180),
    imagem VARCHAR(255),
    link VARCHAR(255),
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE parceiros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120),
    logo VARCHAR(255),
    link VARCHAR(255),
    destaque_carrossel TINYINT(1) DEFAULT 0,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
);

CREATE TABLE cta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tag VARCHAR(80),
    titulo VARCHAR(180),
    descricao TEXT,
    texto_botao_1 VARCHAR(80),
    link_botao_1 VARCHAR(255),
    texto_botao_2 VARCHAR(80),
    link_botao_2 VARCHAR(255)
);
