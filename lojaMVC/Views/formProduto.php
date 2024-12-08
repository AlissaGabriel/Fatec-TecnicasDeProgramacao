<?php
require_once "header.php";
?>
<div class="content">
	<div class="container">
		<br><br>
		<h1>Produtos</h1><br>
		<form action="/lojaMVC/inserirProduto" method="post" enctype="multipart/form-data">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome">
			<div style="color:red;font-size:11px;"><?php echo $msg[0]; ?></div>
			<br><br>
			<label for="descritivo">Descritivo:</label>
			<textarea name="descritivo" id="descritivo"></textarea>
			<div style="color:red;font-size:11px;"><?php echo $msg[1]; ?></div>
			<br><br>
			<label for="preco">Preço:</label>
			<input type="text" name="preco" id="preco">
			<div style="color:red;font-size:11px;"><?php echo $msg[2]; ?></div>
			<br><br>
			<label for="categoria">Categoria:</label>
			 <select name="categoria" id="categoria"> 
				<option value="0">Escolha uma categoria: </option>
				<?php
				foreach ($retorno as $dado) {
					echo "<option value='{$dado->id_categoria}'>{$dado->descritivo}</option>";
				}
				?>
			</select>
			<div style="color:red;font-size:11px;"><?php echo $msg[3]; ?></div>
			<br><br>
			<label for="imagem">Imagem: </label>
			<input type="file" name="imagem" onchange="mostrar(this)">
			<div style="color:red;font-size:11px;"><?php echo $msg[4]; ?></div>
			<br>
			<img src="" id="img">
			<br><br>

			<input type="submit" class="btn btn-primary">
		</form>

	</div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	function mostrar(img) {
		if (img.files && img.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#img')
					.attr('src', e.target.result)
					.width(170)
					.height(100);
			};
			reader.readAsDataURL(img.files[0]);
		}
	}
</script>

</html>