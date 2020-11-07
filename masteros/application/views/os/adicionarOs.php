<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>

<div class="container-fluid">
<div class="card shadow">
    <div class="card-body" id="divProdutosServicos">
        <div class="row">
            <div class="col" id="divCadastrarOs">
                <form class="bootstrap-form-with-validation" action="<?php echo current_url(); ?>" method="post" id="formOs">
                    <h2 class="text-center">Adicionar Ordem de Serviço</h2>
                    <hr />
                    <?php if ($custom_error == true) { ?>
                        <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Dados incompletos, verifique os campos com asterisco ou se selecionou corretamente cliente, responsável e garantia.<br />Ou se tem um cliente e um termo de garantia cadastrado.</div>
                    <?php
                    } ?>
                    <div class="row">
                    <div class="col">
                    <div class="form-row">
                    <div class="form-group">
                    <label for="cliente">Cliente<span class="required">*</span> </label>
                    <input type="text" class="form-control" id="cliente" name="cliente" /></div>
                    <input id="clientes_id" class="form-control" type="hidden" name="clientes_id" value="" />
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group"><label for="tecnico">Técnico / Responsável<span class="required">*</span></label>
                    <input type="text" class="form-control" id="tecnico" name="tecnico" value="<?= $this->session->userdata('nome'); ?>" /></div>
                    <input id="usuarios_id" class="form-control" type="hidden" name="usuarios_id" value="<?= $this->session->userdata('id'); ?>" />

                    </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                            <label for="status">Estado</label>
                            <select class="form-control" name="status" id="status" value="">
                            <option value="Orçamento">Orçamento</option>
                            <option value="Aberto">Aberto</option>
                            <option value="Em Andamento">Em Andamento</option>
                            <option value="Finalizado">Finalizado</option>
                            <option value="Cancelado">Cancelado</option>
                            <option value="Aguardando Peças">Aguardando Peças</option>
                            </select></div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                            <input type="text" autocomplete="off" class="form-control datepicker" id="dataInicial" name="dataInicial" value="<?php echo date('d/m/Y'); ?>" /></div>
                        </div>
                        <div class="col">
                        <label for="dataFinal">Data Final</label>
                        <input type="text" autocomplete="off" class="form-control datepicker" id="dataFinal" name="dataFinal" value="" /></div>
                    </div>
                    <div class="form-group"><label for="textarea-input">Descrição</label><textarea class="form-control" id="textarea-input" name="textarea-input"></textarea><label for="textarea-input">Defeito</label><textarea class="form-control" id="textarea-input-1" name="textarea-input"></textarea>
                        <label
                            for="textarea-input">Observações</label><textarea class="form-control" id="textarea-input-2" name="textarea-input"></textarea><label for="textarea-input">Laudo Técnico</label><textarea class="form-control" id="textarea-input-3" name="textarea-input"></textarea></div>
                    <hr
                    />
                    <div class="form-row">
                        <div class="col text-center"><a class="btn btn-primary btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-tag"></i></span><span class="text-white text">Adicionar Produto</span></a>
                            <hr />
                        </div>
                        <div class="col text-center"><a class="btn btn-info btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-tools"></i></span><span class="text-white text">Adicionar Serviço</span></a>
                            <hr />
                        </div>
                        <div class="col text-center"><a class="btn btn-warning btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-upload"></i></span><span class="text-white text">Adicionar Anexo</span></a>
                            <hr />
                        </div>
                        <div class="col text-center"><a class="btn btn-danger btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-bookmark"></i></span><span class="text-white text">Adicionar Anotação</span></a>
                            <hr />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col text-center"><label class="text-center" for="textarea-input">Produtos</label>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>List Group Item 1</span></li>
                                    <li class="list-group-item"><span>List Group Item 2</span></li>
                                    <li class="list-group-item"><span>List Group Item 3</span></li>
                                </ul>
                            </div>
                            <div class="col text-center"><label class="text-center" for="textarea-input">Serviços</label>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>List Group Item 1</span></li>
                                    <li class="list-group-item"><span>List Group Item 2</span></li>
                                    <li class="list-group-item"><span>List Group Item 3</span></li>
                                </ul>
                            </div>
                            <div class="col text-center"><label class="text-center" for="textarea-input">Anexos</label>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>List Group Item 1</span></li>
                                    <li class="list-group-item"><span>List Group Item 2</span></li>
                                    <li class="list-group-item"><span>List Group Item 3</span></li>
                                </ul>
                            </div>
                            <div class="col text-center"><label class="text-center" for="textarea-input">Anotação</label><input type="text" class="form-control form-control-lg" disabled style="height: 147px;" /></div>
                        </div>
                    </div>
                </form>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col text-center"><a class="btn btn-success btn-circle ml-1" role="button"><i class="fas fa-check text-white"></i></a></div>
            <div class="col text-center"><a class="btn btn-danger btn-circle ml-1" role="button"><i class="fas fa-times text-white"></i></a></div>
        </div>
        <div class="row" style="padding: 40px;">
            <div class="col"><a class="btn btn-success btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-cash-register"></i></span><span class="text-white text">Faturar</span></a></div>
            <div class="col"><a class="btn btn-info btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Atualizar</span></a></div>
            <div class="col"><a class="btn btn-light btn-icon-split" role="button"><span class="text-black-50 icon"><i class="fas fa-eye"></i></span><span class="text-dark text">Visualizar</span></a></div>
            <div class="col"><a class="btn btn-secondary btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-print"></i></span><span class="text-white text">Imprimir</span></a></div>
            <div class="col"><a class="btn btn-secondary btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-print"></i></span><span class="text-white text">Térmica</span></a></div>
            <div class="col"><a class="btn btn-warning btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-mail-bulk"></i></span><span class="text-white text">Email</span></a></div>
            <div class="col"><a class="btn btn-success btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fab fa-whatsapp"></i></span><span class="text-white text">Whatsapp</span></a></div>
        </div>
    </div>
</div>
</div>