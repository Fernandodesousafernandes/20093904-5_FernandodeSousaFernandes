	<?php
		function controlarAcesso($valor){
			//@$valor = $_GET['pg'];

			if($valor == 1){
				require 'pages/home.php';
			}
			else if($valor == 2){
				include('pages/produtos.php');
			}
			else if($valor == 3){
				include('pages/quemsomo.php');
			}
			else if($valor == 4){
				include('pages/contato.php');
			}
			else if($valor == 5){
				include('pages/localizacao.php');
			}
			else if($valor == 6){
				include('pages/informacaoProduto.php');
			}
			else{
				require 'pages/home.php';
			}



		}


	 ?>
