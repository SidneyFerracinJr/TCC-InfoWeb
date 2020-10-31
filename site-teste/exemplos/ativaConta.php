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

      <?php 
$linkAtivacao = $_GET['ativacao'];
 
 include("conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");

$sqlVerificaLink = "SELECT * FROM tbl_login WHERE link_ativacao='$linkAtivacao'";

$totalConsulta = $database->num_rows($sqlVerificaLink);

if ($totalConsulta==1) {

  $dadosConta = $database->get_results($sqlVerificaLink);
  $codConta = array('cod_login'=>$dadosConta[0]['cod_login']);

  $dadosAtivaConta = array('status_login'=>1,
                           'link_ativacao'=>'');
  $ativaConta = $database->update('tbl_login',$dadosAtivaConta,$codConta);

  if($ativaConta==true){echo "<p>Conta ativada com sucesso</p>
      <a href='admin/login.php'>faça o login para acessar o sistema</a>"  ;}
      else {
  echo "<p class='alert alert-danger'>link de aticaçao invalido!</p>";
  # code...
}


 
} else {
  echo "<p class='alert alert-danger'>link de aticaçao invalido!</p>";
  # code...
}



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
