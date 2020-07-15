<?php if(!isset($_SESSION)) session_start();
	if(isset($_SESSION) && isset($_SESSION['id_u']) && $_SESSION['id_u']>0){
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar conta</title>
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
						<h1 id="h1left" >Editar conta</h1>
						<?php
							require "ligacao.php";
							$sql=$conn->query("SELECT * FROM users where id='".$_SESSION['id_u']."' ") or die();
							if($sql->num_rows>0){
								$row=$sql->fetch_assoc();
								$nome=$row['nome'];
								$email=$row['email'];
							}
						?>
							<div class="form-group group-coustume">
								<input type="text" id="nome" class="form-control name-form" placeholder="Nome" value="<?php echo $nome;?>">
								<input type="email" id="email" class="form-control email-form" placeholder="Email" value="<?php echo $email;?>">
								<button type="button" id="atualizar" class="btn btn-default btn-submit" style="margin-left:64.5%">Submit</button>
								<p id="msg"></p>
							</div>
					</div>
			</div>
			<div class="google-maps">
			 <img id="image_border" src="imagens/Nova_Igreja_Matriz.jpg" width=250px height=300px alt="border">

			</div>
		</div>

	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script src="jquery-1.11.0.min.js"></script>
<script>
	$(document).ready(function(){
		$("#atualizar").click(function(){
			var nome=$('#nome').val();
			var email=$('#email').val();
			if(nome!="" && nome!=" " && email!="" && email!=" "){
						var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("msg").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "funcoes.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("nome="+nome+"&email="+email+"&opc=3");
			}
			else{
				$("#msg").css("color","red");
				$("#msg").html("Preencha todos os campos!!");
			}
		});
	});
</script>
</body>
</html>
	<?php } else echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \" >";?>