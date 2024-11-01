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
			if($_POST)
			{
				if(empty($_POST["descritivo"]))
				{
					$msg = "Preencha o descritivo";
				}
				else
				{
					//salvar no banco de dados
					$categoria = new Categoria(descritivo:$_POST["descritivo"]);
					
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO->inserir($categoria);
					header("location:/lojaMVC/categoria");
				}
			}
			require_once "Views/formCategoria.php";
		}
	}
?>