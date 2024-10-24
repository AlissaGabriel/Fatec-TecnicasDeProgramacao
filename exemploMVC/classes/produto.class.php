<?php

class Produto
{
    public function __construct(
        public string $nome = "",
        public string $descricao = "",
        public float $preco = 0.00,
        public string $imagem = ""
        //public int $id_categoria = 0
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setNome($nomeNovo)
    {
        $this->nome = $nomeNovo;
    }

    public function setDescricao($descricaoNovo)
    {
        $this->descricao = $descricaoNovo;
    }

    public function setPreco($precoNovo)
    {
        $this->preco = $precoNovo;
    }

    public function setImagem($imagemNovo)
    {
        $this->imagem = $imagemNovo;
    }
}
