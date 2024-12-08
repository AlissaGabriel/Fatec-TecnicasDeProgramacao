<?php

class Rotas
{
    public array $rotas = [];

    public function get(string $nome_rota, array $dados)
    {
        $this->rotas["GET"][$nome_rota] = $dados;
    }

    public function post(string $nome_rota, array $dados)
    {
        $this->rotas["POST"][$nome_rota] = $dados;
    }

    public function verificar_rota($metodo, $nome_rota)
    {
        if (isset($this->rotas[$metodo][$nome_rota])) {
            $dados = $this->rotas[$metodo][$nome_rota];
            $method = $dados[1];
            $obj = new $dados[0]();
            return $obj->$method();
        }
        exit("Rota é inválda!");
    }
} //fim da classe

//instanciar um objeto classe Rotas
$route = new Rotas();
$route->get("/", [InicioController::class, "inicio"]);
//rotas de categoria
$route->get("/categoria", [CategoriaController::class, "listar"]);

$route->get("/inserirCategoria", [CategoriaController::class, "inserir"]);

$route->post("/inserirCategoria", [CategoriaController::class, "inserir"]);

$route->get("/excluirCategoria", [CategoriaController::class, "excluir"]);

$route->get("/alterarCategoria", [CategoriaController::class, "alterar"]);

$route->post("/alterarCategoria", [CategoriaController::class, "alterar"]);
//rotas de produto
$route->get("/produto", [ProdutoController::class, "listar"]);

$route->get("/inserirProduto", [ProdutoController::class, "inserir"]);

$route->post("/inserirProduto", [ProdutoController::class, "inserir"]);

$route->get("/alterarProduto", [ProdutoController::class, "alterar"]);

$route->post("/alterarProduto", [ProdutoController::class, "alterar"]);

$route->get("/alterarSituacao", [ProdutoController::class, "alterarSituacao"]);
