<?php
class Paciente
{
    public function __construct(
        private string $nome = "",
        private string $rg = "",
        private string $endereco = "",
        private string $telefone = "",
        private string $dataNascimento = "",
        private string $profissao = ""
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($novoNovo)
    {
        $this->nome = $novoNovo;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($RgNovo)
    {
        $this->rg = $RgNovo;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($enderecoNovo)
    {
        $this->endereco = $enderecoNovo;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefoneNovo)
    {
        $this->telefone = $telefoneNovo;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimentoNovo)
    {
        $this->dataNascimento = $dataNascimentoNovo;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao($profissaoNovo)
    {
        $this->profissao = $profissaoNovo;
    }
}
