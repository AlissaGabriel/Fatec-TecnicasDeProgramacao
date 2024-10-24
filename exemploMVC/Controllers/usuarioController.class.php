<?php

class usuarioController
{
    public function listar()
    {
        echo"Estou na classe usuarioController e executei o metodo listar";

        require_once "models/usuario.class.php";
        $usuario = new Usuario();
        $retorno = $usuario -> buscar_todos_usuarios();
        
        //mostrar os dados nas views
        require_once "Views/listar_usuarios.class.php";
    }

    public function inserir()
    {
        echo "estou no inserir";
    }

    public function alterar()
    {
        echo "estou no alterar";
    }

    public function excluir()
    {
        echo "estou no excluir";
    }
}

?>