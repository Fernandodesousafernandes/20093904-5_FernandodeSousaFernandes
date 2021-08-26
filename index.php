<?php


 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>MAPA Back End 1</title>
   <link rel="icon" type="imagem/png" href="images/logo2.jpg" />
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
  <div id="topo">
  <div id="header">
    <div id="logo">
      <a href="?pg=1" ><img src="images/logo2.jpg"></a>
    </div>
      <p id="p1">Tradição e arte em fazer doces<br>
        Desde 1998</p>
  </div>
  <div id="menu">
    <nav>
         <ul>
           <li><a href="index.php?pg=1">Home</a></li>
           <li><a href="index.php?pg=2">Produtos</a></li>
           <li><a href="index.php?pg=3">Quem somos</a></li>
           <li><a href="index.php?pg=4">Contato</a></li>
           <li><a href="index.php?pg=5">Localização</a></li>
          </ul>
        </nav>
  </div>
</div>
<br><br><br>

  <div id="main">
    <div class="article">
      <h1>
        <?php
          include_once('function/controlar.php');
          @$valor = $_GET['pg'];
          controlarAcesso($valor);

         ?>

      </h1>
    </div>
    </div>
  <div id="sidebar">

  </div>
<br>
  <div id="footer">
    <p>
      ALUNO: Fernando de Sousa Fernandes <br>
      RA: 20093904-5<br>
      CURSO: SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET<br>
      UNIVERSIDADE CESUMAR - UNICESUMAR
    </p>
  </div>


</body>
</html>
