<?php
class Cliente
{
    //Atributos
    public function __construct(
        public int $id_cliente = 0,
        public string $nome = "",
        public string $sobrenome = "",
        public string $cpf = ""
    ) {}


    //Métodos
    public function inserir($conexao)
    {
        $sql = "INSERT INTO cliente (nome, sobrenome, cpf) VALUES (?, ?, ?)";
        $stm = $conexao->prepare($sql);
        $stm->bindValue(1, $this->nome);
        $stm->bindValue(2, $this->sobrenome);
        $stm->bindValue(3, $this->cpf);
        $stm->execute();
        return "Cliente inserido com sucesso!";
    }

    public function conexao()
    {
        //parametros para abrir conexao com banco de dados utilizando a classe PDO
        $parametros = "mysql:host=localhost;dbname=exemplo;charset=utf8mb4";
        //instanciando um objeto da classe PDO, que é uma classe que vem com o PHP
        //usuario = root e senha = ""
        $conexao = new PDO($parametros, "root", "");
        //retornando a conexão aberta
        return $conexao;
    }

    //instancia = um novo objeto criado dessa classe, com o operador new
}
