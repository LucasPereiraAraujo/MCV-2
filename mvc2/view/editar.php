<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Usuário</title>
</head>
<body>
<h2>Editar Usuário</h2>

<form method="POST" action="">
    Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br><br>
    Telefone: <input type="text" name="telefone" value="<?= $usuario['telefone'] ?>"><br><br>
    <button type="submit" name="atualizar">Atualizar</button>
</form>

<a href="usuario_controller.php">Voltar</a>
</body>
</html>
