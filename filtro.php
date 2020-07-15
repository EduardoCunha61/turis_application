

<?php /*
require "ligacao.php";
	if(isset($_POST['filtro']) && $_POST['filtro']>0)
		$filtro=$_POST['filtro'];
	if(isset($filtro)){
		switch($filtro){
			case 1: $query="SELECT * FROM locais ORDER BY RAND() LIMIT 8"; break;
			case 2: $query="SELECT * FROM locais ORDER BY id ASC LIMIT 8"; break;
			case 3: $query="SELECT * FROM locais ORDER BY id DESC LIMIT 8"; break;
			case 4: $query="SELECT * FROM locais ORDER BY nome ASC LIMIT 8"; break;
			case 5: $query="SELECT * FROM locais ORDER BY nome DESC LIMIT 8"; break;
		}
		require "ligacao.php";
						$sql=$conn->query($query) or die("ERRO!!!1");
						if($sql->num_rows>0){
							while($row=$sql->fetch_assoc()){
								$id=$row['id'];
								$nome=$row['nome'];
								$data=$row['data'];
								$mora=$row['morada'];
								$idloca=$row['id_localidade'];
								$idtipo_local=$row['id_tipo_local'];
								$foto=$row['foto'];
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
								?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="imagens/<?php echo $foto;?>" width="341.66px" alt="car1">
						<div class="txtcontent">
							<div class="stars">
							</div>
							<div class="simpletxt">
								<h3 class="name"><?php echo $nome;?></h3>
								<br/>
								<p>Tipo: <?php echo $tipo_local;?><br/>
								Data: <?php echo $loca;?><br/>
								Localidade: <?php echo $loca;?></p>
	 							<button><a href="local.php?idl=<?php echo $id;?>" style="text-decoration:none; color:#E7E7E7;">Ver mais</a></button><br>
							</div>
							<div class="stars2">
							</div>
						</div>
				</div>	 
			</div>
*/

/*<div class="latestcars">
	<h1 class="text-center">&bullet; Locais &bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">Filtrar por: </span></li>
		<li data-filter=".RECENT" role="presentation"><button type="button" name="aleatorio" id="aleatorio" style="color:#6D6D6D; font-size: 14.8px;">ALEATÓRIO </button></li>
		<li data-filter=".RECENT" role="presentation"><button type="button" name="mais_recentes" id="mais_recentes" style="color:#6D6D6D; font-size: 14.8px;">MAIS RECENTES </button></li>
		<li data-filter=".RECENT" role="presentation"><button type="button" name="mais_antigos" id="mais_antigos" style="color:#6D6D6D; font-size: 14.8px;">MAIS ANTIGOS </button></li>
		<li data-filter=".POPULAR" role="presentation"><button type="button" name="a_z" id="a_z" style="color:#6D6D6D; font-size: 14.8px;">A - Z </button></li>
		<li data-filter=".POPULAR" role="presentation"><button type="button" name="z_a" id="z_a" style="color:#6D6D6D; font-size: 14.8px;">Z - A </button></li>
		<li id="hideonmobile">
	</ul>
</div>
<br>
<br>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script>
	$(document).ready(function(){
		var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("filtro").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "filtro.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("filtro=1");
		$("#aleatorio").click(function(){
						var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("filtro").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "filtro.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("filtro=1");
		});
		$("#mais_recentes").click(function(){
						var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("filtro").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "filtro.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("filtro=2");
		});
		$("#mais_antigos").click(function(){
						var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("filtro").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "filtro.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("filtro=3");
		});
		$("#a_z").click(function(){
						var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("filtro").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "filtro.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("filtro=4");
		});
		$("#z_a").click(function(){
						var xhttp;
						xhttp=new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState==4 && this.status==200){
								document.getElementById("filtro").innerHTML=this.responseText;
							}
						};
						xhttp.open("POST", "filtro.php", true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("filtro=5");
		});
	});
</script>
*/