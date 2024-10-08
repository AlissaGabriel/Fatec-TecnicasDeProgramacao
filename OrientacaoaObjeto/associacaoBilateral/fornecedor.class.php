<?php
class Fornecedor
{
    public function __construct(
        private string $razaoSocial = "",
        private string $cnpj = "",
        private string $telefone = "",
        private array $produto = array()
    ) {}

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto(Produto $produtoNovo){
        $this->produto[] = $produtoNovo;
    }
}
