<?php 
include("conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");

$email = $_POST['email'];

$consultalogin =  "SELECT * FROM tbl_login
                   where email='$email' 
                   and status_login=1";

$totalConsulta = $database->now_rows($consultalogin);
if ($totalConsulta==1) {
	echo "recuperar senha";
	# code...
}else{
	header("location:login.php?erro=Usuario ou senha invalido");
}



?>