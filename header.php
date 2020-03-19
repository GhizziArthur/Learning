<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="my.css">
<meta charset="utf-8">

 <title>Mundo Yôga</title>


</head>

<body>
<header>  
		<div class="mainmenu">
			<div class="cabecalho">
				<div class="logo">
					<a href="./home.php"><img src="C:\Users\arthu\OneDrive\Área de Trabalho\programa\abzin.png"></a>
				<br/>	        
							<?php
								$valor = $_GET['pagina1'];
					            if ($valor == 'home'){ require_once 'home.php';}
					             ?>
					   <div class="menu">
				<ul>
					<li> <a href="./pagina1.php"> Início </a> </li>
					<li> <a href="./pagina2.php"> Artigos </a> </li>
					<li> <a href="./pagina3.php"> Contato </a> </li>
				</ul>
				</br>
				<?php
				            $url_get = %_GET['p'];
							switch ($url_get) {
							
							case 'início' : include 'pagina1.php';
							break;
							
							case 'Artigos' : include 'pagina2.php';
							break;
							
							case 'contato' : include 'pagina3.php';
							break;
							}
							?>
							
							
							


				       </div>
				</div>
			</div>
		</div>
		<?php wp_header(); ?>
</header>
