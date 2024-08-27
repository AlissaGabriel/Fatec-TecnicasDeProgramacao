<?php
if ($_GET) {
    require_once 'Cliente.class.php';

    $obj = new Cliente(nome: $_GET["nome"], sobrenome: $_GET["sobrenome"], cpf: $_GET["cpf"]);

    //abrir conexão com o BD
    //conect = retornar para conexao aberta
    $conect = $obj->conexao();


    // $obj->nome = $_GET["nome"];
    // $obj->sobrenome = $_GET["sobrenome"];
    // $obj->cpf = $_GET["cpf"];

    $msg = $obj->inserir($conect);
    echo $msg;

    // echo "<pre>";
    // var_dump($obj);
    // echo "</pre>";
} else {
    header("location:index.html");
}

// echo "<h1 style='color:purple'>O nome é: " . $_GET["nome"] . "</h1> <br>";
// echo "O sobrenome é: {$_GET["sobrenome"]} <br>";
