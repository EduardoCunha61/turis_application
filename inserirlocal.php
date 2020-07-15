<?php if(!isset($_SESSION)) session_start();
	if(isset($_SESSION) && isset($_SESSION['id_u']) && $_SESSION['id_u']>0 && isset($_SESSION['tipo_u']) && $_SESSION['tipo_u']>0){
	require "ligacao.php";
	if(isset($_POST['inserir'])){
		if(isset($_POST['nome']) && $_POST['nome']!="" && isset($_POST['mora']) && $_POST['mora']!="" && isset($_POST['loca']) && $_POST['loca']!="" && isset($_POST['tipo_local']) && $_POST['tipo_local']!=""){
			if(isset($_FILES['arquivo']['name'])){//['arquivo']-> name do input da imagem | ['name']->nome do ficheiro (incluindo a extensao)
				//guardar o nome do ficheiro
				$nome=$_FILES['arquivo']['name'];
				$arquivo_tmp=$_FILES['arquivo']['tmp_name'];
				//vamos retirar a extensao ao ficheiro para saber se é mesmo uma imagem
				$ext=strchr($nome, '.');
				//strchr retira a ultima parte da variavel nome até ao ponto ou seja nome da imagem foto.jpg ele guarda o .jpg
				//vamos colocar em minusculas
				$ext=strtolower($ext);
				//verifica se a extensão é válida
				if(strstr('.jpg; .jpeg; .png; .gif',$ext)){
					//vamos criar  um novo nome para ter a certeza que nunca se repete
					$novonome=md5(microtime()).$ext;
					//vamos definir onde guardar a imagem
					$caminho="imagens/".$novonome;
					//vamos tentar mover a imagem
					if(@move_uploaded_file($arquivo_tmp, $caminho));
					$sql=$conn->query("SELECT nome FROM locais") or die("Erro!!!");
					$aux=0;
					if($sql->num_rows>0){
						while($row=$sql->fetch_assoc()){
							if($row['nome']==$_POST['nome'])
								$aux=1;
						}
					}
					if($aux!=1){
						$sql=$conn->query("INSERT INTO locais (nome, morada, id_localidade, id_tipo_local, data, descricao, foto, latitude, longitude) VALUES ('".$_POST['nome']."', '".$_POST['mora']."', '".$_POST['loca']."', '".$_POST['tipo_local']."', '".$_POST['data']."', '".$_POST['desc']."', '".$novonome."', '".$_POST['lat']."', '".$_POST['lon']."')") or die ("Erro ".$conn->connect_error);
						if($sql){
							$msg="<h3>Inserido com sucesso!!</h3>";
							echo "<meta http-equiv=\"refresh\" content=\"0; url=inserirlocal.php \" >"; exit;
						}
						else{
							$msg="<h3>Ops... Erro na inserção!!</h3>";
						}
					}
					else{
						$msg="<h3>Esse nome já existe!!</h3>";
					}
				}
				else{
					$msg="<h3>Por favor insira uma imagem válida!!</h3>";
				}
			}
		}
		else{
			$msg="<h3>Por favor preencha todos os dados!!</h3>";
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inserir novo local</title>
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
						<br>
						<h1 id="h1left" >Inserir local</h1>
						<form action="inserirlocal.php" id="contact-form-example" class="contact-form" method="post" enctype="multipart/form-data">
							<div class="form-group group-coustume">
								<p id="msg"><?php if(isset($msg) && $msg!="")echo $msg;?></p>
								<br>
								<input type="text" id="nome" name="nome" class="form-control name-form" placeholder="Nome">
								<input type="text" id="mora" name="mora" class="form-control name-form" placeholder="Morada">
								<input type="text" id="lat" name="lat" class="form-control name-form" placeholder="Latitude">
								<input type="text" id="lon" name="lon" class="form-control name-form" placeholder="Longitude">
								<input type="text" id="data" name="data" class="form-control name-form" placeholder="Data">
								

								<span style="color:#9d9d9d; padding-left: 12px;">Tipo de local<br></span>
								<select name="tipo_local" id="tipo_local" class="required" style="padding: 6px 103px; border:0; border-bottom: 1px solid #636363;" required="">
									<?php $sql=$conn->query("SELECT * FROM tipo_local") or die("ERRO!!!");
											if($sql->num_rows>0){
												while($row=$sql->fetch_assoc()){
													echo "<option value='".$row['id']."'>".$row['nome']."</option>";
												}
											}
									?>
								</select>

								<span style="color:#9d9d9d; padding-left: 12px;"><br><br>Localidade</span>
								<select name="loca" id="loca" class="required" style="padding: 6px 13px; border:0;    border-bottom: 1px solid #636363;" required="">
									<?php $sql=$conn->query("SELECT * FROM localidades") or die("ERRO!!!");
										if($sql->num_rows>0){
											while($row=$sql->fetch_assoc()){
												echo "<option value='".$row['id']."'>".utf8_encode($row['nome'])."</option>";
											}
										}
									?>
								</select>
	
								<textarea type="text" id="desc" name="desc" class="form-control name-form" placeholder="Descrição" style="border-bottom: 1px solid #636363;"></textarea>
								<span style="color:#9d9d9d; padding-left: 12px;">Imagem</span>
								<input type="file" id="arquivo" name="arquivo" class="form-control email-form">
								<input type="submit" id="inserir" name="inserir" class="btn btn-default btn-submit" style="margin-left:64.5%" value="Inserir">
								<p id="msg"></p>
							</div>
						</form>
					</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script src="jquery-1.11.0.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$(function(){
		$("#data").datepicker({ dateFormat: 'yy/mm/dd' });
	});
</script>
</body>
</html>
<?php }
	else
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \" >";
?>