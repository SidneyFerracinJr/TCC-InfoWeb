<?php 
$destinatario = "shatow15@gmail.com";
$titulo = "fale conosco";
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$textoMensagem = "enviado por $nome; email: $email <br> $mensagem";

$enviaEmail = mail($destinatario,$titulo,$textoMensagem);

if ($enviaEmail==true) {
	echo "email enviado";
	# code...
} else {
	echo "no momento nao foi possivel enviar o email ";
	# code...
}

?>