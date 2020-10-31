<?php 
session_start();
// receber os campos enviados via POST
$categoria = $_POST['categoria'];
$categoria_cadastro_por = $_SESSION['cod_login'];

$operacao = $_POST['operacao'] ?: $_GET['operacao'];


// verificar o tipo da operaçao

if ($operacao == 'cadastrar') {
	
    $sql = "INSERT INTO tbl_categoria (categoria,categoria_cadastrado_por)
                            VALUES ('$categoria','$categoria_cadastrado_por')";

    $msg = "Categoria cadastrada com sucesso!";
}


if ($operacao == 'editar'){
	
    $cod_categoria = $_POST['cod_categoria'];

    $sql = "UPDATE tbl_categoria SET categoria='$categoria' WHERE cod_categoria='$cod_categoria' ";
    
    $msg = "Categoria alterada com sucesso!";
}


if ($operacao == 'excluir'){
	
	$cod_categoria = $_GET['cod_categoria'];

	$sql = "DELETE FROM tbl_categoria WHERE cod_categoria='$cod_categoria' ";

	$msg = "Categoria excluida com sucesso!";
}



include("../conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");


//método query = executa com o banco de dados 
$executaSql = $database->query($sql);


if ($executaSql) {
	 header ("location:index.php?pg=listaCategorias&msg=$msg");
}else{
	 header ("location:index.php?pg=listaCategorias&msg=Erro ao executar, contato o suporte.");
}


 ?>