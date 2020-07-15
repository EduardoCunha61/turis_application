<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="https://en.wikipedia.org/wiki/Vila_Nova_de_Famalic%C3%A3o"><i class="fa fa-wikipedia-w"></i></a></li>
				<li><a href="https://www.facebook.com/places/O-que-fazer-em-Vila-Nova-de-Famalicao/111725175510792/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/cmvnfamalicao?lang=en"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="https://www.youtube.com/watch?v=lsgAwSMCgpg"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://www.tempo.pt/vila-nova-de-famalicao.htm"><i class="fa fa-sun-o"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li></li>
			</ul>
			<ul class="logreg">
				<?php if(isset($_SESSION['id_u']) && $_SESSION['id_u']!=""){
					if(isset($_SESSION['tipo_u']) && $_SESSION['tipo_u']>0)
				?>
                <li><a href="inserirlocal.php">Inserir local</a></li>
                <li><a href="editarconta.php"><span class="register">Editar conta</span></a></li>
                <li><a href="index.php?log=1"><span class="register">Logout</span></a></li>
				<?php } else{?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php"><span class="register">Register</span></a></li>
				<?php } ?>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="http://www.cm-vnfamalicao.pt/"><img src="imagens/logo2.jpg" alt="logo" width=60px height=60px></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.php">HOME</a> </li>
				<li class="active"><a href="verlocais.php?idtl=1">ALOJAMENTOS</a> </li>
				<li class="active"><a href="verlocais.php?idtl=2">IGREJAS</a> </li>
				<li class="active"><a href="verlocais.php?idtl=3">MUSEUS</a> </li>
				<li class="active"><a href="verlocais.php?idtl=4">RESTAURANTES</a> </li>
				<li class="active"><a href="verlocais.php?idtl=5">PONTOS DE INTERESSE</a> </li>
				<li class="active"><a href="o_que_visitar.php">O QUE VISITAR?</a> </li>
				<li class="active"><a href="quem_somos.php">QUEM SOMOS?</a> </li>
			</ul>
		</div>
	</nav>
</div>
<?php 
	if(isset($_GET['log']) && $_GET['log']==1){
		session_destroy();
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \">";
	}
?>