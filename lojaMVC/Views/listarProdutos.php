<?php
require_once "header.php";
?>
<div class="content">
	<div class="container">
		<?php
		if (isset($_GET["msg"])) {
			echo "<div class='alert alert-success' role='alert'>{$_GET["msg"]}</div>";
		}
		?>
		<h1>Produtos</h1>
		<a href="/lojaMVC/inserirProduto" class="btn btn-primary">Novo Produto</a>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<!-- <th>Descrição</th> -->
				<th>Preço</th>
				<!-- <th>Imagem</th> -->
				<th>Categoria</th>
				<th>Situação</th>
				<th>Ações</th>
			</tr>
			<?php
			foreach ($retorno as $dado) {
				$preco = number_format($dado->preco, 2, ",", ".");
				echo "<tr>
				      <td>{$dado->nome}</td>
				      <td>$preco</td>
				      <td>{$dado->descritivo}</td>
				      <td>{$dado->situacao}</td>
					  <td>
						  <a href='/lojaMVC/alterarProduto?id={$dado->id_produto}' class='btn btn-warning'>Alterar</a>
						  &nbsp;&nbsp;";
				if ($dado->situacao == "Ativa") {
					//inativar
					echo "<a href='/lojaMVC/alterarSituacao?idproduto={$dado->id_produto}&situacao= Inativa' class='btn btn-warning'>Inativar</a>";
				} else {
					//ativar
					echo "<a href='/lojaMVC/alterarSituacao?idproduto={$dado->id_produto}&situacao= Ativa' class='btn btn-warning'>Ativar</a>";
				}
				echo "</td></tr>";
			} //fim foreach
			?>
		</table>
	</div>
</div>
</body>

</html>