<?php
    require_once "Cliente.class.php";
    $cliente = new Cliente();
    $conect = $cliente -> conexao();
    $resultado = $cliente -> buscaCliente($conect);
    // echo "<pre>";
    // var_dump($resultado);
    // echo "</pre>";

    if($_GET){
        echo $_GET["msg"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Clientes</h1>
    <a href="form_cliente.html">Novo Cliente</a>
    <div class="tabela">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($resultado as $dado){
                echo "<tr>
                <td>{$dado -> nome}&nbsp;{$dado -> sobrenome}</td>
                <td>{$dado -> cpf}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>