<?php
class CategoriaDAO extends Conexao
{
	public function __construct()
	{
		parent::__construct();
	}

	public function inserir($categoria)
	{
		$sql = "INSERT INTO categorias (descritivo) VALUES(?)"; //O ponto de interrogação evita a injeção de SQL
		try {
			$stm = $this->db->prepare($sql); //Preparando a frase
			$stm->bindValue(1, $categoria->getDescritivo()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->execute(); //Executando a frase preparada
			$this->db = null; //Fechando a conexão com o banco (boa prática)
			return "Categoria inserida com sucesso";
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
	public function alterarCategoria($categoria)
	{
		$sql = "UPDATE categorias set descritivo=? WHERE id_categoria = ?";
		try {
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getDescritivo());
			$stm->bindValue(2, $categoria->getId_Categoria());
			$this->db = null;
			$stm->execute();
			
			return "Categoria alterada com sucesso!";
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}

	public function excluirCategoria($categoria)
	{
		$sql = "DELETE FROM categorias WHERE id_categoria = ?";
		try {
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getId_categoria());
			$stm->execute();
			$this->db = null;
			return "Categoria Excluida com sucesso!";
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
	public function buscarTodas()
	{
		$sql = "SELECT * FROM categorias";
		try {
			$stm = $this->db->prepare($sql); //Preparando a frase
			$stm->execute(); //Executando a frase preparada
			$this->db = null; //Fechando a conexão com o banco (boa prática)
			return $stm->fetchAll(PDO::FETCH_OBJ); //Você escolhe como quer que ele retorne o array
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
	public function buscarUmaCategoria($categoria)
	{
		$sql = "SELECT * FROM categorias WHERE id_categoria = ?";
		try {
			$stm = $this->db->prepare($sql); //Preparando a frase
			$stm->bindValue(1, $categoria->getId_categoria());
			$stm->execute(); //Executando a frase preparada
			$this->db = null; //Fechando a conexão com o banco (boa prática)
			return $stm->fetchAll(PDO::FETCH_OBJ); //Você escolhe como quer que ele retorne o array
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
} //fim da classe
