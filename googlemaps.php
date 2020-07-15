<?php if(!isset($_SESSION)) session_start();
	if(isset($_SESSION) && isset($_SESSION['id_u']) && $_SESSION['id_u']>0){
?>


<html>
	<head>
		<meta charset="UTF-8">
		<title>Localização</title>
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
		<?php		require "ligacao.php";
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
        <center>
			<h1> Nome do local </h1>
			<br>
            <div id="map" style="width:50%;height:400px;">
				<script>
					function myMap() {
  						var mapCanvas = document.getElementById("map");
  						var mapOptions = {
							// Aqui é suposto adicionar a latitude e longitude de cada local
    						center: new google.maps.LatLng(51.5, -0.2), zoom: 7
  						};
  						var map = new google.maps.Map(mapCanvas, mapOptions);
					}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-hnj31JTRucpJsOcKKfgkZ374flSlg7w
&callback=myMap">
                </script>
            </div>
        </center>

    <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
    <script type="text/javascript" src="source/js/isotope.js"></script>
    <script type="text/javascript" src="source/js/myscript.js"></script> 
    <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
    <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    </body>
</html>
    
<?php 
}
	else echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php \" >";
?>