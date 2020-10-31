<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

<?php session_start();
$nome =$_POST['nome'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$confirmasenha =$_POST['confirmasenha'];
$termos = $_POST['termos'];

include("conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");


$dadosVerificaEmail = array('email'=>$email);

$verificaEmail  $database->exists('tbl_login','email',$dadosVerificaEmail); 


$_SESSION['dados_form'] = $_POST;


 $mensagem_erro ="";

 if (empty($nome)) {
 	$mensagem_erro = " - o nome e obrigatorio <br>";
 	# code...
 }
  if (empty($email)) {
 	$mensagem_erro = $mensagem_erro. " - o email e obrigatorio <br>";
 	# code...
 }
 if ($verificaEmail==true) {
	$mensagem_erro = $mensagem_erro."-este email ja existe <br>";
}
 if (strlen($senha)<6) {
 	$mensagem_erro = $mensagem_erro. " - a senha e obrigatorio <br>";
 	# code...
 }
 if (empty($senha<>$confirmasenha)) {
 	$mensagem_erro = " - a senha e obrigatorio <br>";
 	# code...
 }
 if ($termos!='agree') {
 	$mensagem_erro = $mensagem_erro. " - voce deve aceitar os termos para criar a conta ";
 	# code...
 }
 if (!empty($mensagem_erro)) {
 	header("location:registro.php?erro=mensagem_erro");
 	exit();
 	# code...
 }

$linkativacao = md5($email);

$dadosConta = array
(
'nome'=>$nome,
'email'=>$email,
'senha'=>md5($senha),
'tipo_usuario'=>'user',
'status_login'=>0,
'link_ativacao'=>$linkativacao);

$gravaConta = $database->insert('tbl_login',$dadosConta);


if ($gravaConta==true) {

$destinatario = $email;
$tituloMensagem = "DS@ - Ativação de conta";
$mensagem = "<p> ola $nome clique no link abaixo para ativar a sua conta </p>
<p><a href='ativaConta.php?ativacao=$linkAtivacao'>ativar conta </a></p>";

$headers = 'MINE-Version 1.0'."\r\n".'content-type: text?html; charset=utf-8'."\r\n";

mail($destinatario, $tituloMensagem, $mensagem, $headers);





	echo "<p>conta criada com sucesso! clique no link abaixo para ativar a conta</p>
			<a href='http://localhost/ds2_projeto/ativaConta.php?ativacao=$linkAtivacao'>ativar conta </a>";
}else{
	echo"<p>nao foi possivel criar a conta </p>";}




  ?>
   </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>