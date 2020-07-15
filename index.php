<?php if(!isset($_SESSION)) session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Turis</title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
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
<!--_______________________________________ Carousel__________________________________ -->
<div class="latestcars">
	<h1 class="text-center">Bem-vindos a Vila Nova de Famalicão! </h1>
	<ul class="nav nav-tabs navbar-left latest-navleft"> </ul>
</div>
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="imagens/1.jpg">
				<center><figcaption>Câmara Municipal de Vila Nova de Famalicão</figcaption></center>
			</div>
			<div class="item">
				<img src="imagens/2.jpg" >
				<center><figcaption>Igreja Matriz</figcaption></center>
			</div>
			<div class="item">
				<img src="imagens/3.jpg">
				<center><figcaption>Edifício Sagres</figcaption></center>
			</div>
			<div class="item">
				<img src="imagens/4.jpg">
				<center><figcaption>Câmara Municipal de Vila Nova de Famalicão</figcaption></center>
			</div>
			<div class="item">
				<img src="imagens/5.jpg">
			</div>
		</div>
	</div>
</div>
<br>
<br>


<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>