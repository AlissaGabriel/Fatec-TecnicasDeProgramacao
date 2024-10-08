<?php
class Exame extends Servico
{
    public function __construct(
        private string $medidaPreventiva = "",
        private string $TipodeExame = "",
        string $descricao = "",
        float $preco = 0.00,
    ) {
        parent:: __construct($descricao, $preco);
    }

    public function getMedida()
    {
        return $this->medidaPreventiva;
    }

    public function setMedida($medidaPreventivaNovo)
    {
        $this->medidaPreventiva = $medidaPreventivaNovo;
    }

    public function getTipoExame()
    {
        return $this->TipodeExame;
    }

    public function setTipoExame($TipodeExameNovo)
    {
        $this->TipodeExame = $TipodeExameNovo;
    }
}
