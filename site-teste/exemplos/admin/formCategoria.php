 <?php @session_start(); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categorias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?pg=listaCategorias">Categorias</a></li>
              <li class="breadcrumb-item active">Form Categoria</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <a href="index.php?pg=listaCategorias" class="btn btn-default">
        <i class="fa fa-undo" aria-hidden="true"></i> Voltar
      </a>
    </h3>
  </div>
<?php 

$operacao = $_GET["operacao"];
echo $operacao;

if ($operacao == 'editar'){
  
// receber o codigo da categoria
$cod_categoria = $_GET['cod_categoria'];

include("../conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");

$consulta = "SELECT * FROM tbl_categoria WHERE cod_categoria='$cod_categoria' ";

$totalConsulta = $database->num_rows($consulta);

if ($totalConsulta<1) {
   echo "<div class='alert alert-danger'>Violaçao de dados! </div>";
   exit();
}else{
   // obter os dados da consulta 
   $dadosConsulta = $database->get_results($consulta);
   
   $dados = $dadosConsulta[0];
   
}

}
?>


  <!-- /.card-header -->
  <div class="card-body p-0">
  	<div class="row">
  		<div class="col-md-4 offset-md-4">
  			<form method="POST" action="acoesCategoria.php">
		        <div class="form-group mb-3">
		          <label for="Categoria">Categoria</label>
		          <input type="text" class="form-control" name="categoria" id="categoria" required="required" value="<?php echo @$dados['categoria']; ?>">
		        </div> 
            <input type="hidden" name="cod_categoria" value="<?php echo @$dados['cod_categoria'];  ?>">
		        <input type="hidden" name="operacao" value="<?php echo $operacao; ?>">

		        <button class="btn btn-primary">Gravar</button> 		
  			</form>
  		</div>	
  </div>
  </div>
</div>  	