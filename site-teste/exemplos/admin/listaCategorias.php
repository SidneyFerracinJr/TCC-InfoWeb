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
              <li class="breadcrumb-item active">Categorias</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <a href="index.php?pg=formCategoria&operacao=cadastrar" class="btn btn-default">
        <i class="fa fa-plus-square-o" aria-hidden="true"></i> Nova categoria
      </a>
    </h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
   <div class="row">
    <div class="col-sm-3">
      <?php // exibe mensagem
        if (isset($_GET['msg'])) {
            echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
        }
       ?>
    </div>
   </div> 

    <table class="table table-sm">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Categoria</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
<?php 
  // executando uma consulta e exibindo os dados


include("../conexao/class.db.php");
$database = new DB();
$database->query("SET NAMES UTF8");

$consulta = "SELECT * FROM tbl_categoria";

//verificar se a consulta retornou alguma linha
$totalLinhasConsulta = $database->num_rows($consulta);

if ($totalLinhasConsulta<1) {
  echo "<tr> <td colspan='4'> Nenhuma caregoria cadastrada </td> </tr>";
}else{

    // obter os dados da consulta e exibir utilizando um laço de repetição 
    $dadosConsulta = $database->get_results($consulta);

    foreach ($dadosConsulta as $row){ ?>

  <tr>
        <td><?php echo $row['cod_categoria']; ?></td>
        <td><?php echo $row['categoria'];  ?></td>
        <td>
          <a href="index.php?pg=formCategoria&operacao=editar&cod_categoria=<?php echo $row['cod_categoria']; ?>">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
          </a>
        </td>
        <td>
          <a href="acoesCategoria.php?operacao=excluir&cod_categoria=<?php echo $row['cod_categoria']; ?>">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Excluir
          </a>
        </td>
      </tr>
      
<?php    } // fim foreach

} // fim else

?>
      
 
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>