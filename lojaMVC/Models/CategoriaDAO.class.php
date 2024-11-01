<?php
	class CategoriaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($categoria)
		{
			$sql = "INSERT INTO categorias (descritivo) VALUES(?)"; //O ponto de interrogação evita a injeção de SQL
			try
			{
				$stm = $this->db->prepare($sql); //Preparando a frase
				$stm->bindValue(1, $categoria->getDescritivo()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
				$stm->execute(); //Executando a frase preparada
				$this->db = null; //Fechando a conexão com o banco (boa prática)
				return "Categoria inserida com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function alterar()
		{
		}
		public function excluir()
		{
		}
		public function buscarTodas()
		{
			$sql = "SELECT * FROM categorias";
			try
			{
				$stm = $this->db->prepare($sql); //Preparando a frase
				$stm->execute(); //Executando a frase preparada
				$this->db = null; //Fechando a conexão com o banco (boa prática)
				return $stm->fetchAll(PDO::FETCH_OBJ); //Você escolhe como quer que ele retorne o array
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function buscarUma()
		{
		}
	}//fim da classe
?>