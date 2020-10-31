 <?php @session_start();?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produtos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?pg=listaProdutos">Produtos</a></li>
              <li class="breadcrumb-item active">Form Produto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <a href="index.php?pg=listaProdutos" class="btn btn-default">
        <i class="fa fa-undo" aria-hidden="true"></i> Voltar
      </a>
    </h3>
  </div>

<?php 

$operacao= $_GET['operacao'];

echo $operacao;

 include("../conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");

?>



  <!-- /.card-header -->
  <div class="card-body p-0">
  	<div class="row">
  		<div class="col-md-4 offset-md-4">
  			<form method="POST" action="acoesProduto.php">
		        
            <div class="form-group">
		          <label for="categoria_produto">Categoria</label>
		          <select class="form-control" name="categoria_produto" required="required">
              <?php 
$consultaCategoria =" SELECT * FROM tbl_categoria";
$totalLinhascategoria = $database->now_rows($consultaCategoria);

if ($totalLinhascategoria<1) {
  echo "<option> nenhuma categoria cadastrada</option> ";
}else{

  $dadosCategoria = $database->get_results($consultaCategoria);
   echo "<option> nenhuma categoria cadastrada</option> ";

  foreach ($dadosCategoria as $rowCategoria){?>
    <option value=""></option>
    
  
  }
  }



              ?> <select class="form-control" name="categoria_produto" required="required">
              </select>
		        </div> 

            <div class="form-group">
              <label for="nome_produto">Nome do Produto</label>
              <input type="text" class="form-control" name="nome_produto" required="required">
            </div> 

            <div class="form-group">
              <label for="preco">Preço</label>
              <input type="text" class="form-control" name="preco" required="required">
            </div> 

            <div class="form-group">
              <label for="descricao">Descrição</label>
              <textarea class="form-control" name="descricao" required="required"></textarea>
            </div> 

            <div class="form-group">
              <label for="Imagem">Imagem</label>
              <input type="file" class="form-control" name="Imagem">
            </div> 

		        <input type="hidden" name="operacao" value="<?php echo $operacao;?> ">

		        <button class="btn btn-primary">Gravar</button> 		
  			</form>
  		</div>	
  </div>
 </div>
</div>  	