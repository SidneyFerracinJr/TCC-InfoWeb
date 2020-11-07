<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <p class="text-primary m-0 font-weight-bold">Ordens de Serviços</p>
                </div>
                <div class="col-md-6"><a class="btn btn-primary btn-sm float-right btn-icon-split" role="button" href="<?php echo base_url(); ?>index.php/os/adicionar"><span class="text-white-50 icon"><i class="fas fa-diagnoses"></i></span><span class="text-white text">Adicionar OS</span></a></div>
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
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Responsável</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Valor Total</th>
                            <th class="text-center">Configurações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        if (!$results) {
                            echo '<tr>
                                    <td colspan="10">Nenhuma OS Cadastrada</td>
                                  </tr>';
                        }
                        foreach ($results as $r) {
                            $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
                            if ($r->dataFinal != null) {
                                $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));
                            } else {
                                $dataFinal = "";
                            }
                            switch ($r->status) {
                                case 'Aberto':
                                    $cor = '#00cd00';
                                    break;
                                case 'Em Andamento':
                                    $cor = '#436eee';
                                    break;
                                case 'Orçamento':
                                    $cor = '#CDB380';
                                    break;
                                case 'Cancelado':
                                    $cor = '#CD0000';
                                    break;
                                case 'Finalizado':
                                    $cor = '#256';
                                    break;
                                case 'Faturado':
                                    $cor = '#B266FF';
                                    break;
                                case 'Aguardando Peças':
                                    $cor = '#FF7F00';
                                    break;
                                default:
                                    $cor = '#E0E4CC';
                                    break;
                            }
                            $vencGarantia = '';

                            if ($r->garantia && is_numeric($r->garantia)) {
                                $vencGarantia = dateInterval($r->dataFinal, $r->garantia);
                            }

                            echo '<tr>';
                            echo '<td>' . $r->idOs . '</td>';
                            echo '<td>' . $r->nomeCliente . '</td>';
                            echo '<td>' . $r->nome . '</td>';
                            echo '<td>' . $dataInicial . '</td>';
                            echo '<td>' . $dataFinal . '</td>';
                            echo '<td>' . $vencGarantia. '</td>';
                            echo '<td>R$ ' . number_format($r->totalProdutos + $r->totalServicos, 2, ',', '.') . '</td>';
                            echo '<td>R$ ' . number_format($r->valorTotal, 2, ',', '.') . '</td>';
                            echo '<td><span class="badge" style="background-color: ' . $cor . '; border-color: ' . $cor . '">' . $r->status . '</span> </td>';
                            echo '<td>' . $r->refGarantia . '</td>';
                            echo '<td>';
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                                echo '<a style="margin-right: 1%" href="' . base_url() . 'index.php/os/visualizar/' . $r->idOs . '" class="btn tip-top" title="Ver mais detalhes"><i class="fas fa-eye"></i></a>';
                                echo '<a style="margin-right: 1%" href="' . base_url() . 'index.php/os/imprimir/' . $r->idOs . '" target="_blank" class="btn btn-inverse tip-top" title="Imprimir Normal A4"><i class="fas fa-print"></i></a>';
                                echo '<a style="margin-right: 1%" href="' . base_url() . 'index.php/os/imprimirTermica/' . $r->idOs . '" target="_blank" class="btn btn-inverse tip-top" title="Imprimir Termica Não Fiscal"><i class="fas fa-print"></i></a>';

                                $zapnumber = preg_replace("/[^0-9]/", "", $r->celular_cliente);
                                echo '<a class="btn btn-success tip-top" style="margin-right: 1%" title="Enviar Por WhatsApp" id="enviarWhatsApp" target="_blank" href="https://web.whatsapp.com/send?phone=55' . $zapnumber . '&text=Prezado(a)%20*' . $r->nomeCliente . '*.%0d%0a%0d%0aSua%20*O.S%20' . $r->idOs . '*%20referente%20ao%20equipamento%20*' . strip_tags($r->descricaoProduto) . '*%20foi%20atualizada%20para%20*' . $r->status . '*.%0d%0aFavor%20entrar%20em%20contato%20para%20saber%20mais%20detalhes.%0d%0a%0d%0aAtenciosamente,%20_' . ($emitente ? $emitente[0]->nome : '') . '%20' . ($emitente ? $emitente[0]->telefone : '') . '_"><i class="fab fa-whatsapp" style="font-size:16px;"></i></a>';
                                echo '<a style="margin-right: 1%" href="' . base_url() . 'index.php/os/enviar_email/' . $r->idOs . '" class="btn btn-warning tip-top" title="Enviar por E-mail"><i class="fas fa-envelope"></i></a>';
                            }
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                                echo '<a style="margin-right: 1%" href="' . base_url() . 'index.php/os/editar/' . $r->idOs . '" class="btn btn-info tip-top" title="Editar OS"><i class="fas fa-edit"></i></a>';
                            }
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dOs')) {
                                echo '<a href="#modal-excluir" role="button" data-toggle="modal" os="' . $r->idOs . '" class="btn btn-danger tip-top" title="Excluir OS"><i class="fas fa-trash-alt"></i></a>  ';
                            }
                            echo  '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><strong>Id</strong></td>
                            <td class="text-center"><strong>Cliente</strong></td>
                            <td class="text-center"><strong>Responsável</strong></td>
                            <td class="text-center"><strong>Status</strong></td>
                            <td class="text-center"><strong>Valor Total</strong></td>
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