<?php

class Usuario
{
    public function __construct(
        public string $nome = "",
        public string $email = "",
        public string $senha = ""
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setNome($nomeNovo)
    {
        $this->nome = $nomeNovo;
    }

    public function setEmail($emailNovo)
    {
        $this->email = $emailNovo;
    }

    public function setSenha($senhaNovo)
    {
        $this->senha = $senhaNovo;
    }
}
