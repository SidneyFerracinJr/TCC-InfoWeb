
    <div class="container">
    <div class="card shadow">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <p class="text-primary m-0 font-weight-bold">Clientes Cadastrados</p>
            </div>
            <div class="col-md-6"><a class="btn btn-primary btn-sm float-right btn-icon-split" role="button" href="<?php echo base_url(); ?>index.php/clientes/adicionar"><span class="text-white-50 icon"><i class="fas fa-user-plus"></i></span><span class="text-white text">Adicionar Cliente</span></a></div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Mostrar <select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected>10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div>
            </div>
            <div class="col-md-6">
                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Pesquisar" /></label></div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table dataTable my-0" id="dataTable">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Contato</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">CPF/CNPJ</th>
                        <th class="text-center">Configurações</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    if (!$results) {
                        echo '<tr>
                                <td colspan="5">Nenhum Cliente Cadastrado</td>
                                </tr>';
                    }
                    foreach ($results as $r) {
                        echo '<tr>';
                        echo '<td>' . $r->idClientes . '</td>';
                        echo '<td>' . $r->nomeCliente . '</td>';
                        echo '<td>' . $r->documento . '</td>';
                        echo '<td>' . $r->telefone . '</td>';
                        echo '<td>' . $r->email . '</td>';
                        echo '<td>';
                        echo '<button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button><div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">';
                        
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
                            echo '<a class="dropdown-item" role="presentation" href="' . base_url() . 'index.php/clientes/visualizar/' . $r->idClientes . '"> Visualizar</a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                            echo '<a class="dropdown-item" role="presentation" href="' . base_url() . 'index.php/clientes/editar/' . $r->idClientes . '"> Editar</a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
                            echo '<a class="dropdown-item" role="presentation" href="#modal-excluir" data-toggle="modal" cliente="' . $r->idClientes . '"> Excluir</a>';
                        }     
                        echo '</div></div>';
                    } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center"><strong>Id</strong></td>
                        <td class="text-center"><strong>Nome</strong></td>
                        <td class="text-center"><strong>Contato</strong></td>
                        <td class="text-center"><strong>Email</strong></td>
                        <td class="text-center"><strong>CPF/CNPJ</strong></td>
                        <td class="text-center"><strong>Configurações</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Mostrando de 1 à 10 de 27</p>
            </div>
            <div class="col-md-6">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Excluir Cliente</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" id="idCliente" name="id" value="" />
            <h5 style="text-align: center">Deseja realmente excluir este cliente e os dados associados a ele (OS, Vendas, Receitas)?</h5>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn btn-danger">Excluir</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var cliente = $(this).attr('cliente');
            $('#idCliente').val(cliente);
        });
    });
</script>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>