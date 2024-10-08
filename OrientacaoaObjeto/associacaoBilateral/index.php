<?php
require_once 'produto.class.php';
require_once 'fornecedor.class.php';

$produto1 = new Produto("Lápis Preto", "Lápis Preto número 6", 3.20, 1000);

$produto2 = new Produto("Caixa de lápis de cor", "Caixa com 12 unidades", 20, 100);

$fornecedor = new Fornecedor("Faber Castell", "11.111.111/001-91", "(12)8928277", array($produto1, $produto2));

$produto3 = new Produto("Borracha", "Borracha Macia", 3.1, 200);

$fornecedor->setProduto($produto3);

$fornecedor1 = new Fornecedor("Tilibra", "22.222.222/002-90", "(16)83910385");

$fornecedor2 = new Fornecedor("Pilot", "33.333.333/003-70", "(16)93743149");

$produto4 = new Produto("Caderno", "Caderno Espiral", 100, 1000, array($fornecedor1, $fornecedor2));

// echo"<pre>";
// var_dump($fornecedor);
// echo"</pre>";

echo "<h3>Fornecedor</h3>";
echo "Razão Social: {$fornecedor->getRazaoSocial()}<br>";
echo "CPNJ: {$fornecedor->getcnpj()}<br>";
echo "Telefone: {$fornecedor->getTelefone()}<br>";
echo "<h4>Produtos: </h4>";
foreach ($fornecedor->getProduto() as $produto) {
    "<br>";
    echo "Nome: {$produto->getNome()}<br>";
    echo "Descrição: {$produto->getDescricao()}<br>";
    $preco = number_format($produto->getPreco(), 2, ',', '.');
    echo "Preço: R$ $preco <br>";
    echo "Estoque: {$produto->getEstoque()}<br><br>";
}


echo "<h3>Produtos</h3>";
echo "Nome: {$produto4->getNome()}<br>";
echo "Descrição: {$produto4->getDescricao()}<br>";
$preco = number_format($produto4->getPreco(), 2, ',', '.');
echo "Preço: R$ $preco <br>";
echo "Estoque: {$produto4->getEstoque()}<br><br>";
echo "<h4>Fornecedor</h4>";
foreach ($produto4->getFornecedor() as $dados) {
    "<br>";
    echo "Razão Social: {$dados->getRazaoSocial()}<br>";
    echo "CNPJ: {$dados->getCnpj()}<br>";
    echo "Telefone: {$dados->getTelefone()}<br><br>";
}
