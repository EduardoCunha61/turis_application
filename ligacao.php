<?php 
$conn=new mysqli("localhost", "root", "", "dinis");
if($conn->connect_error){
	die("Erro na ligação ".$conn->connect_error);
}
?>