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
		<h1>Categorias</h1>
		<a href="/lojaMVC/inserirCategoria" class="btn btn-primary">Nova Categoria</a>
		<table class="table table-striped">
			<tr>
				<th>Descritivo</th>
				<th>Ações</th>
			</tr>
			<?php
			foreach ($retorno as $dado) {
				echo "<tr>
				      <td>{$dado->descritivo}</td>
					  <td>
						  <a href='/lojaMVC/alterarCategoria?id={$dado->id_categoria}' class='btn btn-warning'>Alterar</a>
						  &nbsp;&nbsp;
						 ";
			?>
				<a href='/lojaMVC/excluirCategoria?id=<?php echo $dado->id_categoria ?>' class='btn btn-danger' onclick="return confirm('Confirmar a exclusão? ')">Excluir</a>
				</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
</body>

</html>