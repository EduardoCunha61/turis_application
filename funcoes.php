<?php if(!isset($_SESSION)) session_start();
require "ligacao.php";
	if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['opc']) && $_POST['opc']==1){
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$pass=md5($_POST['pass']);
		$sql=$conn->query("SELECT email FROM users where email='".$email."'") or die();
		if($sql->num_rows==0){
			$sql=$conn->query("INSERT INTO users (nome, email, pass, tipo) VALUES ('".$nome."', '".$email."', '".$pass."', 0)") or die("Erro!!!");
			echo "<span style='color:green;'>Conta registada com sucesso.</span>";
		}
		else{
			echo "<span style='color:red;'>Essa conta ja existe.</span>";
		}
	}
	if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['opc']) && $_POST['opc']==2){
		$email=$_POST['email'];
		$pass=md5($_POST['pass']);
		$sql=$conn->query("SELECT id, email, nome, tipo FROM users where email='".$email."' and pass='".$pass."'") or die();
		if($sql->num_rows>0){
			$row=$sql->fetch_assoc();
			$_SESSION['id_u']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['nome']=$row['nome'];
			$_SESSION['tipo_u']=$row['tipo'];
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php \" >";
		}
		else{
			echo "<span style='color:red;'>Email ou palavra-chave errados.</span>";
		}
	}
	if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['opc']) && $_POST['opc']==3){
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$sql=$conn->query("UPDATE users SET nome='".$nome."', email='".$email."' where id='".$_SESSION['id_u']."'") or die("Erro ao atualizar a conta");
			if($sql){
						echo "<h4>Atualizado com sucesso.</h4>";
					}
					else{
						echo "<h4>Ops... Erro na atualização.</h4>";
					}
	}
?>