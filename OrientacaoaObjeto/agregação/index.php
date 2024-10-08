<?php
require_once 'categoria.class.php';
require_once 'produto.class.php';

$categoria = new Categoria("Material Escolar");

$produto1 = new Produto("Caderno", "Caderno Brochura", 15.3, 120, $categoria);

$produto2 = new Produto("Apontador", "Apontador Resistente", 4, 100, $categoria);

$produto3 = new Produto("Bola", "Bola de Futebol", 100, 50);

$produto4 = new Produto("Chuteira", "Chuteira Rosa", 190, 60);

$categoria1 = new Categoria("Material Esportivo", array($produto3, $produto4));

echo "<h3>Produto 1 </h3>";
echo "Nome: {$produto1->getNome()}<br>";
echo "Descrição: {$produto1->getDescricao()}<br>";
$preco = number_format($produto1->getPreco(), 2, ',', '.');
echo "Preço: R$ $preco <br>";
echo "Estoque: {$produto1->getEstoque()}<br>";
echo "Categoria: {$produto1->getCategoria()->getDescritivo()}<br>";
echo "<h3>Categoria</h3>";
echo "Descritivo: {$categoria->getDescritivo()}";


echo "<h3>Categoria: </h3>";
echo "Descritivo: {$categoria1->getDescritivo()}<br>";
echo "<h3>Produto: </h3>";
foreach ($categoria1->getProduto() as $dado) {
    echo "Nome: {$dado->getNome()}<br>";
    echo "Descrição: {$dado->getDescricao()}<br>";
    echo "Estoque: {$dado->getEstoque()}<br>";
    $preco = number_format($dado->getPreco(), 2, ',', '.');
    echo "Preço: R$ $preco <br><br> ";
}
