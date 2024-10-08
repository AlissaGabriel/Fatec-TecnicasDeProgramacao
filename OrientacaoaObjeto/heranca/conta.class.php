<?php
class Conta
{
    public function __construct(
        protected string $agencia = "",
        protected string $numero = "",
        protected string $titular = "",
        protected float $saldo = 0.00
    ) {}

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function setAgencia($agenciaNovo)
    {
        $this->agencia = $agenciaNovo;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numeroNovo)
    {
        $this->numero = $numeroNovo;
    }

    public function getTitutlar()
    {
        return $this->titular;
    }

    public function setTitular($titularNovo)
    {
        $this->titular = $titularNovo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldoNovo)
    {
        $this->saldo = $saldoNovo;
    }

    public function sacar(float $valorNovo)
    {
        $this->saldo = $this->saldo - $valorNovo;
    }

    public function depositar(float $valorNovo)
    {
        $this->saldo = $this->saldo + $valorNovo;
    }
}
