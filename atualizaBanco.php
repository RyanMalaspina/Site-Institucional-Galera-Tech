<?php

// Configurações do banco
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "galeratech";

// Conexão com MySQL
$conn = new mysqli($host, $usuario, $senha);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Cria o banco se não existir
$sqlBanco = "CREATE DATABASE IF NOT EXISTS `$banco`
             CHARACTER SET utf8mb4
             COLLATE utf8mb4_unicode_ci";

if ($conn->query($sqlBanco) === TRUE) {
    echo "Banco de dados verificado/criado com sucesso.<br>";
} else {
    die("Erro ao criar banco: " . $conn->error);
}

// Seleciona o banco
$conn->select_db($banco);

// Lista de tabelas
$tabelas = [];

// CTA
$tabelas[] = "
CREATE TABLE IF NOT EXISTS cta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tag VARCHAR(80),
    titulo VARCHAR(180),
    descricao TEXT,
    texto_botao_1 VARCHAR(80),
    link_botao_1 VARCHAR(255),
    texto_botao_2 VARCHAR(80),
    link_botao_2 VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

// SOBRE
$tabelas[] = "
CREATE TABLE IF NOT EXISTS sobre (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tag VARCHAR(120),
    titulo VARCHAR(180),
    texto_1 TEXT,
    texto_2 TEXT,
    imagem VARCHAR(255),
    alt_imagem VARCHAR(180)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

// SITE CONFIG
$tabelas[] = "
CREATE TABLE IF NOT EXISTS site_config (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

// PUBLICO
$tabelas[] = "
CREATE TABLE IF NOT EXISTS publico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(120),
    descricao TEXT,
    ordem INT DEFAULT 0,
    ativo TINYINT(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

// Executa criação das tabelas
foreach ($tabelas as $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Tabela criada/verificada com sucesso.<br>";
    } else {
        echo "Erro ao criar tabela: " . $conn->error . "<br>";
    }
}

echo "<br><strong>Processo concluído!</strong>";

$conn->close();
