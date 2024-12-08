<?php
class ProdutoDAO extends Conexao
{
	public function __construct()
	{
		parent::__construct();
	}

	public function inserir($produto)
	{
		$sql = "INSERT INTO produtos (nome, descricao, preco, imagem, id_categoria, situacao) VALUES(?, ?, ?, ?, ?, ?)"; //O ponto de interrogação evita a injeção de SQL
		try {
			$stm = $this->db->prepare($sql); //Preparando a frase
			$stm->bindValue(1, $produto->getNome()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->bindValue(2, $produto->getDescricao()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->bindValue(3, $produto->getPreco()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->bindValue(4, $produto->getImagem()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->bindValue(5, $produto->getCategoria()->getId_categoria()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->bindValue(6, $produto->getSituacao()); //Substituindo o valor "?". Caso haja vários campos, são várias "?" que devem ser substituídos na ordem!! 
			$stm->execute(); //Executando a frase preparada
			$this->db = null; //Fechando a conexão com o banco (boa prática)
			return "Produto inserido com sucesso";
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
	public function alterarproduto($produto)
	{
		$sql = "UPDATE produtos set descritivo=? WHERE id_produto = ?";
		try {
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $produto->getDescritivo());
			$stm->bindValue(2, $produto->getId_produto());
			$this->db = null;
			$stm->execute();

			return "Produto alterado com sucesso!";
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}

	public function excluirproduto($produto)
	{
		$sql = "DELETE FROM produtos WHERE id_produto = ?";
		try {
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $produto->getId_produto());
			$stm->execute();
			$this->db = null;
			return "Produto Excluido com sucesso!";
		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
	public function buscarTodos()
	{
		$sql = "SELECT p.*, c.descritivo FROM produtos as p, categorias as c where p.id_categoria = c.id_categoria";
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
	public function buscarUmproduto($produto)
	{
		$sql = "SELECT * FROM produtos WHERE id_produto = ?";
		try {
			$stm = $this->db->prepare($sql); //Preparando a frase
			$stm->bindValue(1, $produto->getId_produto());
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
