<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
</head>

<body>
    <h1>Usuários</h1>
    <a href="index.php?controle=usuarioController&metodo=inserir">Novo usuário</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </table>
    <?php
    foreach ($retorno as $dado) {
        echo "<tr>
                  <td> $dado </td>
                  <td>
                  <a href='index.php?controle=usuarioController&metodo=alterar'>Alterar</a>
                  <a href='index.php?controle=usuarioController&metodo=excluir'>Excluir</a>
                  </td>
              </tr><br>";
    }
    ?>
</body>

</html>