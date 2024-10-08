<?php
class Servico
{
    public function __construct(
        protected string $descricao = "",
        protected float $preco = 0.00,
    ) {}

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricaoNovo)
    {
        $this->descricao = $descricaoNovo;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($precoNovo)
    {
        $this->preco = $precoNovo;
    }
}
