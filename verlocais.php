<?php if(!isset($_SESSION)) session_start();
	require "ligacao.php";
	if(isset($_GET['idtl'])){
		$idtl=$_GET['idtl'];
		$sql=$conn->query("SELECT nome FROM tipo_local where id='".$idtl."'") or die();
		$row1=$sql->fetch_assoc();
		$nometl=$row1['nome'];
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Locais listados</title>
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
<br>
<br>
<div class="allcontain">
	<div class="contact">
		<div class="newslettercontent" style="margin-top:20px; margin-left:20px; width:95%;">
	<table id="tabela" class="display" cellspacing="0" width="100%" style="border:0;">
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
				<?php
					require "ligacao.php";
					$sql1=$conn->query("SELECT * FROM locais where id_tipo_local='".$idtl."'") or die("ERRO!!!");
					if($sql1->num_rows>0){
						while($row=$sql1->fetch_assoc()){
							$id=$row['id'];
							$nome=$row['nome'];
							$data=$row['data'];
							$mora=$row['morada'];
							$idloca=$row['id_localidade'];
							$idtipo_local=$row['id_tipo_local'];
							$foto=$row['foto'];
					$sql2=$conn->query("SELECT * FROM localidades where localidades.id='".$idloca."'") or die("ERRO!!!");
					if($sql2->num_rows>0){
						$row2=$sql2->fetch_assoc();
							$loca=$row2['nome'];
					}
					$sql2=$conn->query("SELECT * FROM tipo_local where tipo_local.id='".$idtipo_local."'") or die("ERRO!!!");
					if($sql2->num_rows>0){
						$row2=$sql2->fetch_assoc();
							$tipo_local=$row2['nome'];
					}
					$sql=$conn->query("SELECT * FROM comentarios where id_local='".$id."'") or die("ERRO!!!");
							$total=$sql->num_rows;
				?>
            <tr>
                <td  style="border-bottom: 1px solid #636363;">
					<div class="post type-post status-publish format-standard hentry category-uncategorized hentry-post group blog-small" style="text-align:left;">
			                <div class="thumbnail" style="float:left; margin: 20px 20px 20px 20px;">
			                    <img style="width:200px;height:200px;" src="imagens/<?php echo $foto;?>" class="attachment-blog_small wp-post-image" alt="blog1" title="blog1" />                        
			                </div>
							<div style="float:left;">
								<p><h2 class="post-title"><a href="local.php?idl=<?php echo $id;?>" style="margin-left:3.5%;"><?php echo $nome;?></a></h2></p>
								<div class="meta-bottom">
									<div class="meta group">
										<p class="author"><i class="icon-user"></i> <span><strong>Data: </strong><?php echo $data;?></span></p>
										<p class="author"><i class="icon-user"></i> <span><strong>Morada: </strong><?php echo $mora;?></span></p>
										<p class="author"><i class="icon-user"></i> <span><strong>Localidade: </strong><?php echo $loca;?></span></p>
										<p class="author"><i class="icon-user"></i> <span><strong>Tipo: </strong><?php echo $tipo_local;?></span></p>
										<p class="comments"><i class="icon-comment"></i> <span><a href="local.php?idl=<?php echo $id;?>" title="Comment on Another great article of the blog"><?php echo $total;?> comentários</a></span></p>
									</div>
								</div>
							</div>
			        </div>
				</td>
            </tr>
            <?php
						}
					}
			?>
		</tbody>
    </table>
		</div>

	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script src="jquery-1.11.0.min.js"></script>

<link rel="stylesheet" type="text/css" href="DataTables/dataTable.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.js"></script>
<script>
	$(document).ready(function() {
    $('#tabela').DataTable({ "sPaginationType": "full_numbers" });
} );
</script>
</body>
</html>
<?php 
}
	else echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \" >";
?>