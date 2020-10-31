<?php session_start()

include("../conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");



$dadosproduto = array('categoria_produto' => $_POST['categoria_produto'],
	                   'nome_produto' => $_POST['nome_produto'],
	                   'preco' => $_POST['preco'],
	                   'descricao' => $_POST['descricao'],
	                   'produto_usuario' => $_SESSION['cod_login']);

$operacao = $_POST['operacao'];

if ($operacao== 'cadastrar') {
	$executasql = $database->insert('tbl_produto',$dadosproduto);

	$msg = "produto adicionado com sucesso";
}

if ($executasql) {
	header("location:index.php?pg=listaProduto&msg=$msg");
}else{


header("location:index.php?pg=listaProduto&msg=erro contate o administrador");
}




 ?>