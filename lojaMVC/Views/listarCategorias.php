<?php
	require_once "header.php";
?>
<div class="content">
<div class="container">
	<h1>Categorias</h1>
	<a href="/lojaMVC/inserirCategoria" class="btn btn-primary">Nova Categoria</a>
	<table class="table table-striped">
		<tr>
			<th>Descritivo</th>
			<th>Ações</th>
		</tr>
		<?php
			foreach($retorno as $dado)
			{
				echo "<tr>
				      <td>{$dado->descritivo}</td>
					  <td>
						  <a href='' class='btn btn-warning'>Alterar</a>
						  &nbsp;&nbsp;
						  <a href='' class='btn btn-danger'>Excluir</a>
					  </td>
					  </tr>";
			}
			
		?>
	</table>
</div>
</div>
</body>
</html>