<?php
class CategoriaController
{
	public function listar()
	{
		$categoriaDAO = new CategoriaDAO();
		$retorno = $categoriaDAO->buscarTodas();
		require_once "Views/listarCategorias.php";
	}
	public function inserir()
	{
		$msg = "";
		if ($_POST) {
			if (empty($_POST["descritivo"])) {
				$msg = "Preencha o descritivo";
			} else {
				//salvar no banco de dados
				$categoria = new Categoria(descritivo: $_POST["descritivo"]);
				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO->inserir($categoria);
				header("location:/lojaMVC/categoria");
			}
		}
		require_once "Views/formCategoria.php";
	}

	function excluir()
	{
		if (isset($_GET["id"])) {
			$categoria = new Categoria($_GET["id"]);
			$categoriaDAO = new CategoriaDAO;
			$retorno = $categoriaDAO->excluirCategoria($categoria);
			header("location:/lojaMVC/categoria?msg=$retorno");
		}
	}


	public function alterar()
	{
		$msg = "";
		if ($_POST) {
			if (empty($_POST["descritivo"])) {
				$msg = "Preencha o descritivo";
			} else {
				//alterar o registro no banco
				$categoria = new Categoria($_POST["idcategoria"], $_POST["descritivo"]);
				$categoriaDAO = new categoriaDAO;
				$retorno = $categoriaDAO->alterarCategoria($categoria);
				header("location:/lojaMVC/categoria?msg=$retorno");
			}	
		}
		if (isset($_GET["id"])) {
			$categoria = new Categoria($_GET["id"]);
			$categoriaDAO = new categoriaDAO;
			$retorno = $categoriaDAO->buscarUmaCategoria($categoria);
		}
		require_once "Views/editCategoria.php";
	}
}
