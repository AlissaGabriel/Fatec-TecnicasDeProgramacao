<?php
class ProdutoController
{
    public function listar()
    {
        $produtoDao = new produtoDao();
        $retorno = $produtoDao->buscarTodos();
        require_once "Views/listarProdutos.php";
    }

    public function inserir()
    {
        $msg = array("", "", "", "", "");
        $erro = false;

        if ($_POST) {
            //verificação
            if (empty($_POST["nome"])) {
                $msg[0] = "Preencha o nome do produto!";
                $erro = true;
            }
            if (empty($_POST['descritivo'])) {
                $msg[1] = 'O descritivo é obrigatório!';
                $erro = true;
            }
            if (empty($_POST['preco'])) {
                $msg[2] = 'O preço é obrigatório!';
            }
            if ($_POST["categoria"] == "0") {
                $msg[3] = "Escolha uma categoria!";
                $erro = true;
            }
            if ($_FILES["imagem"]["name"] == "") {
                $msg[4] = "Escolha uma imagem!";
                $erro = true;
            } else if ($_FILES["imagem"]["type"] != "image/png" && $_FILES["imagem"]["type"] != "image/jpg" && $_FILES["imagem"]["type"] != "image/jpeg") {
                $msg[4] = "Tipo de Imagem Inválido!";
                $erro = true;
            }
            if (!$erro) {
                $categoria = new Categoria($_POST["categoria"]);
                $produto = new Produto(0, $_POST["nome"], $_POST["descritivo"], $_POST["preco"], $_FILES["imagem"]["name"], "Ativa", $categoria);

                $produtoDAO = new ProdutoDAO();
                $retorno = $produtoDAO->inserir($produto);
                header("location:/lojamvc/produto?mensagem=$retorno");
            }
        }
        $categoriaDAO = new CategoriaDAO();
        $retorno = $categoriaDAO->buscarTodas();
        require_once "Views/formProduto.php";
    }

    public function alterar() {}

    public function alterarSituacao() {}
}
