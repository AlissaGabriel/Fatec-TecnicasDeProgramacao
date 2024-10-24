<?php

class Produto
{
    public function __construct(
        public string $descritivo = "",
    ) {}

    public function getDescritivo()
    {
        return $this->descritivo;
    }

    public function setDescritivo($descritivoNovo)
    {
        $this->descritivo = $descritivoNovo;
    }
}
