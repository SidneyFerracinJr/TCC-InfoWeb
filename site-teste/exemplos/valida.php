<?php 

include("conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");

$email = $_POST['email'];
$senha = $_POST['senha'];

$consultaLogin = "	
SELECT*FROM tbl_login
WHERE email='$email'
AND senha=md5('$senha')
AND status_login=1";

$totalConsulta = $database->num_rows($consultaLogin);

if($totalConsulta==1){
	header("location:admin/index.php");
}else{
	header("location:admin/login.php?erro=usuario ou senha invalida");
}

?>