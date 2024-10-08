<?php

require_once 'pessoa.php';
require_once 'endereco.php';

//endereco saber a quem pertence

$pessoa1 = new Pessoa("Maria da Silva", "123.123.123-23");
$endereco1 = new Endereco("Rua XV de Novembro", "123", "17230456", $pessoa1);

$endereco2 = new Endereco("Rua 7 de setembro", "125", "17230456", $pessoa1);

// echo "<pre>";
// var_dump($endereco1);
// echo "</pre>";

echo "<h3>Endereço</h3>";
echo "Logradouro: {$endereco1->getLogradouro()}<br>";
echo "Número: {$endereco1->getNumero()}<br>";
echo "CEP: {$endereco1->getCep()}<br>";
echo "<h4>O endereço pertence</h4>";
echo "Nome: {$endereco1->getPessoa()->getNome()}<br>";
echo "CPF: {$endereco1->getPessoa()->getCPF()}";

//Pessoa quais são os endereços

$pessoa2 = new Pessoa("João da Silva", "333.333.333-33", "Rua Ramos", "234", "12000000");

$pessoa2->setEndereco("Rua Pedro", "123", "8947390", null);

//  echo "<pre>";
//  var_dump($pessoa2);
//  echo "</pre>";

echo "<h3> Dados da Pessoa </h3>";

echo "Nome: {$pessoa2->getNome()}<br>";
echo "CPF: {$pessoa2->getCPF()}<br>";

echo "<h4>Endereço</h4>";   
foreach ($pessoa2->getEndereco() as $endereco) {
    echo "Logradouro: {$endereco->getLogradouro()} - {$endereco->getNumero()} <br>";
    echo "CEP: {$endereco->getCep()}<br><br>";
}
