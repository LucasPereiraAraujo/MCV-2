<?php
// CAMADA MODEL - manipulação dos dados da tabela usuarios
require_once 'conexao.php';

// Funções básicas do CRUD
function listarUsuarios() {
    global $conexao;
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    return mysqli_query($conexao, $sql);
}

function inserirUsuario($nome, $email, $telefone) {
    global $conexao;
    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    return mysqli_query($conexao, $sql);
}

function buscarUsuario($id) {
    global $conexao;
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

function atualizarUsuario($id, $nome, $email, $telefone) {
    global $conexao;
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
    return mysqli_query($conexao, $sql);
}

function excluirUsuario($id) {
    global $conexao;
    $sql = "DELETE FROM usuarios WHERE id = $id";
    return mysqli_query($conexao, $sql);
}
?>
