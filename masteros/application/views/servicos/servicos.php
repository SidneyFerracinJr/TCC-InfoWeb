<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <p class="text-primary m-0 font-weight-bold">Serviços</p>
                </div>
                <div class="col-md-6"><a class="btn btn-primary btn-sm float-right btn-icon-split" role="button" href="<?php echo base_url() ?>index.php/servicos/adicionar"><span class="text-white-50 icon"><i class="fas fa-tools"></i></span><span class="text-white text">Adicionar Serviço</span></a></div>
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
                            <th class="text-center">ID</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Descrição</th>
                            <th class="text-center">Preço</th>
                            <th class="text-center">Apto</th>
                            <th class="text-center">Configurações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!$results) {
                        echo '<tr>
                                <td colspan="5">Nenhum Serviço Cadastrado</td>
                              </tr>';
                    }
                    foreach ($results as $r) {
                        echo '<tr>';
                        echo '<td>' . $r->idServicos . '</td>';
                        echo '<td>' . $r->nome . '</td>';
                        echo '<td>' . number_format($r->preco, 2, ',', '.') . '</td>';
                        echo '<td>' . $r->descricao . '</td>';
                        echo '<td>';
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
                            echo '<a style="margin-right: 1%" href="' . base_url() . 'index.php/servicos/editar/' . $r->idServicos . '" class="btn btn-info tip-top" title="Editar Serviço"><i class="fas fa-edit"></i></a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dServico')) {
                            echo '<a href="#modal-excluir" role="button" data-toggle="modal" servico="' . $r->idServicos . '" class="btn btn-danger tip-top" title="Excluir Serviço"><i class="fas fa-trash-alt"></i></a>  ';
                        }
                        echo '</td>';
                        echo '</tr>';
                    } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><strong>ID</strong></td>
                            <td class="text-center"><strong>Nome</strong></td>
                            <td class="text-center"><strong>Descrição</strong></td>
                            <td class="text-center"><strong>Preço</strong></td>
                            <td class="text-center"><strong>Apto</strong></td>
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
</div>