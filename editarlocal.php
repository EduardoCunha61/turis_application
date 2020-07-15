<?php if(!isset($_SESSION)) session_start();
	if(isset($_SESSION) && isset($_SESSION['id_u']) && $_SESSION['id_u']>0 && isset($_SESSION['tipo_u']) && $_SESSION['tipo_u']>0){
	require "ligacao.php";
	if(isset($_POST['guardar'])){
		if(isset($_POST['nome']) && $_POST['nome']!="" && isset($_POST['mora']) && $_POST['mora']!="" && isset($_POST['loca']) && $_POST['loca']!="" && isset($_POST['tipo_local']) && $_POST['tipo_local']!=""){
			if(isset($_FILES['arquivo']['name']) && !empty($_FILES['arquivo']['name'])){//['arquivo']-> name do input da imagem | ['name']->nome do ficheiro (incluindo a extensao)
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
					$sql=$conn->query("UPDATE locais SET nome='".$_POST['nome']."', morada='".$_POST['mora']."', id_localidade='".$_POST['loca']."', id_tipo_local='".$_POST['tipo_local']."', data='".$_POST['data']."', descricao='".$_POST['desc']."', foto='".$novonome."', latitude='".$_POST['lat']."', longitude='".$_POST['lon']."' where id='".$_GET['idl']."'") or die ("Erro ".$conn->connect_error);
					if($sql){
						$msg="<h4>Atualizado com sucesso.</h4>";
						//echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?pg=14&pga=6 \" >"; exit;
					}
					else{
						$msg="<h4>Ops... Erro na atualização.</h4>";
					}
				}
				else{
					$msg="<h4>Não é uma imagem.</h4>";
				}
			}
			else{
					$sql=$conn->query("UPDATE locais SET nome='".$_POST['nome']."', morada='".$_POST['mora']."', id_localidade='".$_POST['loca']."', id_tipo_local='".$_POST['tipo_local']."', data='".$_POST['data']."', descricao='".$_POST['desc']."', latitude='".$_POST['lat']."', longitude='".$_POST['lon']."' where id='".$_GET['idl']."'") or die ("Erro ".$conn->connect_error);
					if($sql){
						$msg="<h4>Atualizado com sucesso.</h4>";
						//echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?pg=14&pga=6 \" >"; exit;
					}
					else{
						$msg="<h4>Ops... Erro na atualização.</h4>";
					}
			}
		}
		else{
			$msg="<h4>Dados por preencher verifique.</h4>";
		}
	}
	$sql=$conn->query("SELECT * FROM locais where id='".$_GET['idl']."' ") or die();
	if($sql->num_rows>0){
		$bd=$sql->fetch_assoc();
		$nome=$bd['nome'];
		$mora=$bd['morada'];
		$loca=$bd['id_localidade'];
		$tipo_local=$bd['id_tipo_local'];
		$data=$bd['data'];
		$desc=$bd['descricao'];
		$foto=$bd['foto'];
		$lat=$bd['latitude'];
		$lon=$bd['longitude'];
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar local</title>
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
						<h1 id="h1left" >Editar local</h1>
						<form action="editarlocal.php?idl=<?php echo $_GET['idl'];?>" id="contact-form-example" class="contact-form" method="post" enctype="multipart/form-data">
							<div class="form-group group-coustume">
								<p id="msg"><?php if(isset($msg) && $msg!="")echo $msg;?></p>
								<p>*Só submeta imagem se pretender <strong>atualizar</strong> a imagem!</p>
								<input type="text" id="nome" name="nome" class="form-control name-form" placeholder="Nome"  value="<?php echo $nome;?>">
								<input type="text" id="mora" name="mora" class="form-control name-form" placeholder="Morada" value="<?php echo $mora;?>">
								<input type="text" id="lat" name="lat" class="form-control name-form" placeholder="Latitude" value="<?php echo $lat;?>">
								<input type="text" id="lon" name="lon" class="form-control name-form" placeholder="Longitude" value="<?php echo $lon;?>">
								<input type="text" id="data" name="data" class="form-control name-form" placeholder="Data" value="<?php echo $data;?>">
								
								<span style="color:#9d9d9d; padding-left: 12px;">Tipo de local</span>
								<select name="tipo_local" id="tipo_local" class="required" style="padding: 6px 103px; border:0; border-bottom: 1px solid #636363;" required="">
									<?php 
											$sql=$conn->query("SELECT * FROM tipo_local where id='".$tipo_local."'") or die();
											if($sql->num_rows>0){
														$bd=$sql->fetch_assoc();
														$tipo_local_nome_u=utf8_encode($bd['nome']);
														echo "<option value=".$tipo_local.">".$tipo_local_nome_u."</option>";
											}
											$sql=$conn->query("SELECT * FROM tipo_local where tipo_local.id!='".$tipo_local."' ") or die();
													if($sql->num_rows>0){
														while($bd=$sql->fetch_assoc()){
															$tipo_local_id=$bd['id'];
															$tipo_local_nome=utf8_encode($bd['nome']);
															echo "<option value=".$tipo_local_id.">".$tipo_local_nome."</option>";
														}
													}
											?>
								</select>

								<span style="color:#9d9d9d; padding-left: 12px;"><br><br>Localidade</span>
								<select name="loca" id="loca" class="required" style="padding: 6px 13px; border:0;    border-bottom: 1px solid #636363;" required="">
									<?php 
											$sql=$conn->query("SELECT * FROM localidades where id='".$loca."'") or die();
											if($sql->num_rows>0){
														$bd=$sql->fetch_assoc();
														$loca_nome_u=utf8_encode($bd['nome']);
														echo "<option value=".$loca.">".$loca_nome_u."</option>";
											}
											 $sql=$conn->query("SELECT * FROM localidades where localidades.id!='".$loca."' ") or die();
													if($sql->num_rows>0){
														while($bd=$sql->fetch_assoc()){
															$loca_id=$bd['id'];
															$loca_nome=utf8_encode($bd['nome']);
															echo "<option value=".$loca_id.">".$loca_nome."</option>";
														}
													}
											?>
								</select>



								<textarea type="text" id="desc" name="desc" class="form-control name-form" placeholder="descricao" style="border-bottom: 1px solid #636363;"><?php echo $desc;?></textarea>
								
								<span style="color:#9d9d9d; padding-left: 12px;">Imagem</span>
								<input type="file" id="arquivo" name="arquivo" class="form-control email-form">
								
								<input type="submit" id="guardar" name="guardar" class="btn btn-default btn-submit" style="margin-left:64.5%" value="Guardar">


								<p id="msg"></p>
							</div>
						</form>
					</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
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