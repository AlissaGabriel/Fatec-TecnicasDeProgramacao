<?php
class Limpeza extends Servico
{
    public function __construct(
        private string $materialUsado = "",
        private string $denteTratado = "",
        string $descricao = "",
        float $preco = 0.00,
    ) {
        parent:: __construct($descricao, $preco);
    }

    public function getMaterialUsado()
    {
        return $this->materialUsado;
    }

    public function setMaterialUsado($materialUsadoNovo)
    {
        $this->materialUsado = $materialUsadoNovo;
    }

    public function getDenteTratado()
    {
        return $this->denteTratado;
    }

    public function setDenteTratado($denteTratadoNovo)
    {
        $this->denteTratado = $denteTratadoNovo;
    }
}
