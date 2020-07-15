<?php if(!isset($_SESSION)) session_start();
	if(isset($_SESSION) && isset($_SESSION['id_u']) && $_SESSION['id_u']>0){
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Quem somos?</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
	<!-- Header -->
	<?php require "menu.php"?>

	<div class="latestcars">
	<h1 class="text-center">&bullet; Quem Somos &bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">

	</ul>
	</div>
	
	<p>  &nbsp A Turis foi criada em 2018, com o fim de revolucionar os sites de turismo. </p>

	<p>  &nbsp
	Criada para poder facilitar a vida aos turistas que venham há cidade de Vila Nova de Famalicão e não saibam o que visitar, onde comer, ou mesmo até onde dormir.
A nossa plataforma está preparada para esclarecer os nossos usuários acerca de qualquer restaurante, ponto de interesse, igreja, museu, ou qualquer tipo de alojamento.
	</p>

	<p>  &nbsp
	Pertendemos também com esta plataforna conseguir atrair mais turistas para Vila Nova de Famalicão, para promover e desemvolver o turismo e a esconomia da nossa cidade.
A Cidade de Vila Nova de Famalicão, desde que lançamos a plataforma já aumentou o nível de turismo, e a economia também têm vindo a crescer.
	</p>

</body>
</html>	
<?php 
}
	else echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php \" >";
?>