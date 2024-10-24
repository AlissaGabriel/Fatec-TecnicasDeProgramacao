<?php

if ($_GET) {

    //outras rotas 
    //http://localhost/exemploMVC/index.php?controle=usuarioController&metodo=listar

    $controle = $_GET["controle"];
    $metodo = $_GET["metodo"];

    require_once 'Controllers/' . $controle . '.class.php';

    $obj = new $controle();
    $obj->$metodo();
} else {
    //rota inicial http://localhost/exemploMVC/index.php

    require_once 'Controllers/inicioController.class.php';
    $obj = new inicioController();
    $obj->inicio();
}
