<?php
// CAMADA CONTROLLER - recebe ações e decide o que fazer
require_once '../model/usuario_model.php';

// Controla o fluxo da aplicação
$acao = $_GET['acao'] ?? 'listar';

switch ($acao) {
    case 'inserir':
        if (isset($_POST['salvar'])) {
            inserirUsuario($_POST['nome'], $_POST['email'], $_POST['telefone']);
            header("Location: usuario_controller.php");
            exit;
        }
        include '../view/inserir.php';
        break;

    case 'editar':
        $id = $_GET['id'];
        $usuario = buscarUsuario($id);

        if (isset($_POST['atualizar'])) {
            atualizarUsuario($id, $_POST['nome'], $_POST['email'], $_POST['telefone']);
            header("Location: usuario_controller.php");
            exit;
        }

        include '../view/editar.php';
        break;

    case 'excluir':
        $id = $_GET['id'];
        excluirUsuario($id);
        header("Location: usuario_controller.php");
        exit;

    default:
        $usuarios = listarUsuarios();
        include '../view/listar.php';
        break;
}
?>
