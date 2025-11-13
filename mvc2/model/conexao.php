<?php
// CAMADA MODEL - responsável pela conexão com o banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_dados = "crud_php";

// Criação da conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_dados);

// Verifica se deu erro
if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
}

/*
-- Criação do banco e tabela (executar no MySQL uma vez)
CREATE DATABASE crud_php CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE crud_php;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20)
);
*/
?>
