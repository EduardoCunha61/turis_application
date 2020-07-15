<?php  if(!isset($_SESSION)) session_start();
if(isset($_GET['idl']) && $_GET['idl']>0){
	?>
<?php
					require "ligacao.php";
					$sql=$conn->query("SELECT * FROM locais where id='".$_GET['idl']."'") or die("ERRO!!!");
					if($sql->num_rows>0){
						$row=$sql->fetch_assoc();
						$id=$row['id'];
						$nome=$row['nome'];
						$data=$row['data'];
						$mora=$row['morada'];
						$idloca=$row['id_localidade'];
						$idtipo_local=$row['id_tipo_local'];
						$foto=$row['foto'];
						$desc=$row['descricao'];
						$lat=$row['latitude'];
						$lon=$row['longitude'];
						$sql2=$conn->query("SELECT nome FROM localidades where localidades.id='".$idloca."'") or die("ERRO!!!");
						if($sql2->num_rows>0){
							$row2=$sql2->fetch_assoc();
							$loca=$row2['nome'];
						}
						$sql2=$conn->query("SELECT nome FROM tipo_local where tipo_local.id='".$idtipo_local."'") or die("ERRO!!!");
						if($sql2->num_rows>0){
							$row2=$sql2->fetch_assoc();
							$tipo_local=$row2['nome'];
						}
					}
					?>
	<!doctype html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $nome;?> </title>
		<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
		<meta name="author" content="Web Domus Italia">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="style/slider.css">
		<link rel="stylesheet" type="text/css" href="style/mystyle.css">
		<link rel="stylesheet" type="text/css" href="style/contactstyle.css">
	</head>
	<body>
		<!-- Header -->
		<?php require "menu.php";?>
		<!--_______________________________________ Carousel__________________________________ -->

		<div class="allcontain">
			<div class="contact">
				<div class="newslettercontent">
					<div class="leftside">
						<div class="contact-form">
							<h1><?php echo $nome;?></h1>
							<br>
							<p><strong>NOME:</strong> <?php echo $nome;?></p>
							<p><strong>MORADA:</strong> <?php echo $mora;?></p>
							<p><strong>LOCALIDADE:</strong> <?php echo $loca;?></p>
							<p><strong>TIPO:</strong> <?php echo $tipo_local;?></p>
							<p><strong>DATA DE INSERÇÃO:</strong> <?php echo $data;?></p>
							<p><strong>DESCRIÇÃO:</strong> <?php echo $desc;?></p>
							<p><strong><a href="googlemaps.php">LOCALIZAÇÃO</a></strong></p>
							<div id="map" style="width:120%;height:250px;">
								<script>
									function myMap() {
  									var mapCanvas = document.getElementById("map");
  									var mapOptions = {
    									center: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $lon;?>), zoom:20
  									};
  									var map = new google.maps.Map(mapCanvas, mapOptions);
									}
								</script>

								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-hnj31JTRucpJsOcKKfgkZ374flSlg7w
&callback=myMap">
                				</script>
            				</div>

							<h1>Comentários</h1>
							<div id="respond">
								<h3>Deixe o seu Comentário</h3>
								<form action="local.php?idl=<?php echo $id?>&postcom=1" method="post" id="commentform">
									<?php if(isset($_SESSION['id_u']) && isset($_SESSION['tipo_u'])){
										?>
									<p style="width:962px; max-width:965px;">Comentário</p><textarea id="mensagem" name="mensagem" cols="45" rows="8" ></textarea>
									<div class="clear"></div>
										<p style="margin-left:0;">
											<input name="submit" type="submit" id="submit" value="Postar comentário"/>
										</p>
										<?php }else{?>
											<h4>Para comentar precisa de entrar na sua conta. Faça <a href="login.php">Login</a> ou <a href="register.php">Registe-se</a>.</h4>
										<?php }?>

								</form>
							</div>
								<h3>
									<?php 
									$sql=$conn->query("SELECT * FROM comentarios where id_local='".$id."'") or die("ERRO!!!");
									$total=$sql->num_rows;
									echo "<span>".$total."</span> comentários";
									?>		
								</h3>
								<ol>
									<?php 
									if($sql->num_rows>0){
										while($row=$sql->fetch_assoc()){
											$id_user=$row['id_user'];
											$idcom=$row['id'];
											$mens=$row['mensagem'];
											$data_hora=$row['data_hora'];
											$sql2=$conn->query("SELECT id, nome FROM users where id='".$id_user."'") or die("ERRO!!!");
											$row=$sql2->fetch_assoc();
											$nome=$row['nome'];
											?>
											<li>
												<div class="coment">
													<p><strong>Nome: </strong> <?php echo $nome;?> <strong style="padding-left:10%;">Data: </strong> <?php echo $data_hora; ?></p>
													<p><strong>Mensagem: </strong> <?php echo $mens; ?></p>
													<!-- se for o utilizador ou um admin-->
													<?php if(isset($_SESSION) && isset($_SESSION['id_u']) && isset($_SESSION['tipo_u'])) { if($_SESSION['id_u']==$id_user || isset($_SESSION['tipo_u'])>0){ ?>
													<div>
														<a href="local.php?idl=<?php echo $id;?>&comdel=<?php echo $idcom;?>">Apagar</a>                
													</div>
													<?php }}?>
												</div>
											</li>
											<?php }}?>
										</ol>
							</div>
						</div>
													</div>

													
								<div class="google-maps" style="width:30%;height:400px;">
									<?php if(isset($_SESSION['tipo_u']) && $_SESSION['tipo_u']>0)
									echo "<a href='editarlocal.php?idl=".$id."'>Editar</a>&nbsp<a href='local.php?idl=".$id."&del=1'>Apagar</a>";
									?>
									<br><br>
									<img id="image_border" src="imagens/<?php echo $foto;?>" width="340px" height="340px" alt="border">
								</div>

							<div id="map" style="width:50%;height:400px;">
				<script>
					function myMap() {
  						var mapCanvas = document.getElementById("map");
  						var mapOptions = {
    						center: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $lon;?>), zoom: 7
  						};
  						var map = new google.maps.Map(mapCanvas, mapOptions);
					}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-hnj31JTRucpJsOcKKfgkZ374flSlg7w
&callback=myMap">
                </script>
            </div>
							<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
							<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

							<script>
							$(window).resize(function(){
								var new_height = $("#image_border").height();
								console.log(new_height);
								$("#googleMap").height(new_height);
							});

							$(window).load(function(){
								var new_height = $("#image_border").height();
								console.log(new_height);
								$("#googleMap").height(new_height);
								google.maps.event.addDomListener(window, 'load', initialize());
							});

							</script>
							<script type="text/javascript" src="source/js/myscript.js"></script>
							<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
						</body>
						</html>
						<?php 
						if(isset($id_user))
							if($_SESSION['id_u']==$id_user || ($_SESSION['tipo_u'])>0){
								if(isset($_GET['comdel']) && $_GET['comdel']>0 && isset($_GET['idl']) && $_GET['idl']>0){
									$comdel=$_GET['comdel'];
									$idl=$_GET['idl'];
									$sql=$conn->query("DELETE FROM comentarios where id='".$comdel."'") or die("ERRO!!!");
									echo "<meta http-equiv=\"refresh\" content=\"0; url=local.php?idl=".$idl." \" >";
								}
							}
							if(isset($_GET['postcom']) && $_GET['postcom']==1 && isset($_GET['idl']) && $_GET['idl']>0){
								$idl=$_GET['idl'];
								date_default_timezone_set('Europe/Lisbon');
								$datahora = date('Y-m-d H:i:S');
								$mensagem=$_POST['mensagem'];
								$sql=$conn->query("INSERT INTO comentarios (id_local, id_user, mensagem, data_hora) VALUES ('".$idl."', '".$_SESSION['id_u']."', '".$mensagem."', '".$datahora."')") or die("ERRO!!!");
								echo "<meta http-equiv=\"refresh\" content=\"0; url=local.php?idl=".$idl." \" >";
							}
							if(isset($_GET['del']) && $_GET['del']==1 && $_SESSION['tipo_u']>0 && isset($_GET['idl']) && $_GET['idl']>0){
								$del=$_GET['idl'];
								$sql=$conn->query("DELETE FROM locais where id='".$del."'") or die("ERRO!!!");
								echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \" >";
							}	
						}
						else echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \" >";
						?>