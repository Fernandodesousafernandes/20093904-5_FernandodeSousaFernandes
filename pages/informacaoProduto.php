	<?php
		include_once("dados/inforProdutos.php");
		$cod = $_GET['cod'];

	 ?>

	<div id="imagemPaginaPrincipal">

		<div class="imgDestaqueInformacaoProduto">

			<img src=" <?php echo $produtos[$cod]['img']?>">

		</div>
		<div class="destaque">
			<h1><?php echo $produtos[$cod]['titulo']  ?></h1>
			<p>
				<?php echo $produtos[$cod]['informacao']  ?>
			</p>
			<h2>R$: <?php echo $produtos[$cod]['valor']  ?></h2>
			<select name="select">
				<option value="#" selected>Quantidade</option>
				<option value="valor1"> 1</option>
				<option value="valor2"> 2</option>
				<option value="valor3"> 3</option>
			</select>
			<select name="select1">
				<option value="#" selected>Tamanho</option>
				<option value="valor1"> 300g</option>
				<option value="valor2"> 375g</option>
				<option value="valor3"> 650g</option>
				<option value="valor4"> 700g</option>
			</select></br></br>
			<a href="index.php?pg=1&cod=<?php echo$cod ?>"> <p class="comprar"> COMPRAR</p></a>
		</div>

	</div>
