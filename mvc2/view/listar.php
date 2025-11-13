<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Usuários</title>
<style>
    body { font-family: Arial; margin: 40px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; }
    th { background: #eee; }
    .botao { background: green; color: white; padding: 6px 10px; border-radius: 4px; text-decoration: none; }
</style>
</head>
<body>

<h1>Usuários Cadastrados</h1>
<a href="usuario_controller.php?acao=inserir" class="botao">+ Novo Usuário</a>

<table>
<tr>
<th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th>
</tr>

<?php while ($linha = mysqli_fetch_assoc($usuarios)) { ?>
<tr>
<td><?= $linha['id'] ?></td>
<td><?= $linha['nome'] ?></td>
<td><?= $linha['email'] ?></td>
<td><?= $linha['telefone'] ?></td>
<td>
<a href="usuario_controller.php?acao=editar&id=<?= $linha['id'] ?>">Editar</a> |
<a href="usuario_controller.php?acao=excluir&id=<?= $linha['id'] ?>" onclick="return confirm('Excluir este usuário?')">Excluir</a>
</td>
</tr>
<?php } ?>

</table>

</body>
</html>
