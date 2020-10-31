<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  	<form action="acoes/cadastra.php" method="POST">
<div class="login-box">
  <h1>cadastro</h1>
  <?php 
if (isset( $_SESSION['msg'])) {
  echo  $_SESSION['msg'];
  unset( $_SESSION['msg']);
}
        ?>

    <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="email" name="email">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="senha" name="senha">
  </div>
    <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="nome" name="nome">
  </div>

   <input type="submit" class="btn" value="entrar">
   <a style="color: #4caf50;" href="index.php">ja tenho cadastro</a>
 
</div>
</form>

  </body>
</html>
