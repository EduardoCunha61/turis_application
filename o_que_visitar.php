<?php if(!isset($_SESSION)) session_start();
	if(isset($_SESSION) && isset($_SESSION['id_u']) && $_SESSION['id_u']>0){
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>O que visitar?</title>
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
	<h1 class="text-center">&bullet; O que visitar ? &bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">

	</ul>
	</div>
	
    <div class="grid">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="imagens/Famalicão_Made_In.jpg" alt="Famalicão Made In">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Famalicão Made In</h3>
								<p><br> </p>
                                <a href="http://www.famalicaomadein.pt/"> WEBSITE <br> </a>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<div class="txthover">
					<img src="imagens/Parque_da_Devesa.jpg" alt="Parque da Devesa">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Parque da Devesa</h3>
								<p><br></p>
                                <a href="http://www.parquedadevesa.com/"> WEBSITE <br> </a>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
            <div class="txthover">
                <img src="imagens/Museu_Bernardino_Machado.jpg" alt="Museu Bernardino Machado">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">Museu Bernardino Machado</h3>
                            <p><br></p>
                            <a href="http://www.bernardinomachado.org/"> WEBSITE <br> </a>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
                </div>
            </div>	 
			
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
            <div class="txthover">
                <img src="imagens/Casa_de_Camilo_Castelo_Branco.jpg" alt="Casa Camilo Castelo Branco">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">Casa Camilo Castelo Branco</h3>
                            <p><br></p>
                            <a href="http://www.camilocastelobranco.org/"> WEBSITE <br> </a>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
            </div>	 
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
			<div class="txthover">
					<img src="imagens/Museu_da_Industria_Textil_da_Bacia_do_Ave.jpg" alt="Museu Indústria Têxtil">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Museu da Indústria Têxtil</h3>
								<p><br> </p>
                                <a href="http://www.museudaindustriatextil.org/"> WEBSITE <br> </a>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
			</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<div class="txthover">
					<img src="imagens/Biblioteca_Camilo_Castelo_Branco.jpg" alt="Biblioteca Camilo Castelo Branco">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Biblioteca Camilo Castelo Branco</h3>
								<p><br></p>
                                <a href="http://www.bibliotecacamilocastelobranco.org/"> WEBSITE <br> </a>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
            <div class="txthover">
                <img src="imagens/Casa_Das_Artes.jpg" alt="Casa Das Artes">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">Casa Das Artes</h3>
                            <p><br></p>
                            <a href="http://www.casadasartes.org/"> WEBSITE <br> </a>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
                </div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
            <div class="txthover">
                <img src="imagens/Fundacao_Cupertino_de_Miranda.jpg" alt="Fundação Cupertino de Miranda">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">Fundação Cupertino de Miranda</h3>
                            <p><br></p>
                            <a href="http://www.fcm.org.pt/"> WEBSITE <br> </a>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
            </div>
	</div>
</body>
</html>
<?php 
}
	else echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php \" >";
?>