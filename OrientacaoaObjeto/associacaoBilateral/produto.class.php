<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $preco = 0.00,
        private array $fornecedor = array()
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    public function setFornecedor(Fornecedor $fornecedorNovo)
    {   
        $this->fornecedor[] = $fornecedorNovo;
    }
}
