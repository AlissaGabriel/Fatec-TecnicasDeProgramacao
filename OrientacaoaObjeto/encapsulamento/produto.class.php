<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $preco = 0.00
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nomeNovo)
    {
        $this->nome = $nomeNovo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricaoNova)
    {
        $this->descricao = $descricaoNova;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque($estoqueNovo)
    {
        $this->estoque = $estoqueNovo;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setValor($precoNovo)
    {
        $this->preco = $precoNovo;
    }
}
