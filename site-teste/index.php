<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login com hierarquia</title>

            <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <form method="POST" action="acoes/login.php">
          <div class="login-box">
  <h1>Login</h1>
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

  <input type="submit" class="btn" value="entrar">

  <a style="color: #4caf50;" href="criaConta.php">nao tenho cadastro</a>
</div>
        </form>
    </body>
</html>