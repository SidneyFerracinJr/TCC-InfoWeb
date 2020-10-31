<?php if (!isset($dados) || $dados == null) { ?>
    <div class="row-fluid" style="margin-top:0">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="fas fa-align-justify"></i>
                    </span>
                    <h5>Dados do Emitente</h5>
                </div>
                <div class="widget-content ">
                    <div class="alert alert-danger">Nenhum dado foi cadastrado até o momento. Essas informações
                        estarão disponíveis na tela de impressão de OS.</div>
                    <a href="#modalCadastrar" data-toggle="modal" role="button" class="btn btn-success">Cadastrar Dados</a>
                </div>
            </div>

        </div>
    </div>


    <div id="modalCadastrar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form action="<?= site_url('mapos/cadastrarEmitente'); ?>" id="formCadastrar" enctype="multipart/form-data" method="post" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel"><?= $this->config->item('app_name') ?> - Cadastrar Dados do Emitente</h3>
            </div>
            <div class="modal-body">


                <div class="control-group">
                    <label for="nome" class="control-label">Razão Social<span class="required" style="color: red;">*</span></label>
                    <div class="controls">
                        <input id="nome" type="text" name="nome" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="cnpj" class="control-label">CNPJ<span class="required" style="color: red;">*</span></label>
                    <div class="controls">
                        <input class="" type="text" name="cnpj" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">IE</label>
                    <div class="controls">
                        <input type="text" name="ie" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">Logradouro<span class="required" style="color: red;">*</span></label>
                    <div class="controls">
                        <input type="text" name="logradouro" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">Número<span class="required">*</span></label>
                    <div class="controls">
                        <input type="text" name="numero" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">Bairro<span class="required">*</span></label>
                    <div class="controls">
                        <input type="text" name="bairro" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">Cidade<span class="required">*</span></label>
                    <div class="controls">
                        <input type="text" name="cidade" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">UF<span class="required">*</span></label>
                    <div class="controls">
                        <input type="text" name="uf" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">Telefone<span class="required">*</span></label>
                    <div class="controls">
                        <input type="text" name="telefone" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">E-mail<span class="required">*</span></label>
                    <div class="controls">
                        <input type="text" name="email" value="" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="logo" class="control-label">Logotipo</label>
                    <div class="controls">
                        <input type="file" name="userfile" value="" />
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true" id="btnCancelExcluir">Cancelar</button>
                <button class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>

<?php
} else { ?>

    <div class="row-fluid" style="margin-top:0">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="fas fa-align-justify"></i>
                    </span>
                    <h5>Dados do Emitente</h5>
                </div>
                <div class="widget-content ">
                    <div class="span12">Os dados abaixo serão utilizados no cabeçalho das telas de impressão.</div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 200px; align-content: center;"><img src=" <?= $dados[0]->url_logo; ?> "></td>
                                <td> <span style="font-size: 20px; ">
                                        <?= $dados[0]->nome; ?> </span> </br><span>
                                        <?= $dados[0]->cnpj; ?> </br>
                                        <?= $dados[0]->rua . ', nº:' . $dados[0]->numero . ', ' . $dados[0]->bairro . ' - ' . $dados[0]->cidade . ' - ' . $dados[0]->uf; ?> </span> </br> <span> E-mail:
                                        <?= $dados[0]->email . ' - Fone: ' . $dados[0]->telefone; ?></span></td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="#modalAlterar" data-toggle="modal" role="button" class="btn btn-primary">Atualizar Dados</a>
                    <a href="#modalLogo" data-toggle="modal" role="button" class="btn btn-inverse">Atualizar Logo</a>
                </div>
            </div>
        </div>
    </div>




    <div id="modalAlterar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form action="<?= site_url('mapos/editarEmitente'); ?>" id="formAlterar" enctype="multipart/form-data" method="post" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id=""><?= $this->config->item('app_name') ?> - Editar Dados do Emitente</h3>
            </div>
            <div class="modal-body">


                <div class="control-group">
                    <label for="nome" class="control-label">Razão Social<span class="required">*</span></label>
                    <div class="controls">
                        <input id="nome" type="text" name="nome" value="<?= $dados[0]->nome; ?>" />
                        <input id="nome" type="hidden" name="id" value="<?= $dados[0]->id; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="cnpj" class="control-label"><span class="required">CNPJ*</span></label>
                    <div class="controls">
                        <input class="" type="text" name="cnpj" value="<?= $dados[0]->cnpj; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">IE</label>
                    <div class="controls">
                        <input type="text" name="ie" value="<?= $dados[0]->ie; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label"><span class="required">Logradouro*</span></label>
                    <div class="controls">
                        <input type="text" name="logradouro" value="<?= $dados[0]->rua; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label"><span class="required">Número*</span></label>
                    <div class="controls">
                        <input type="text" name="numero" value="<?= $dados[0]->numero; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label"><span class="required">Bairro*</span></label>
                    <div class="controls">
                        <input type="text" name="bairro" value="<?= $dados[0]->bairro; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label"><span class="required">Cidade*</span></label>
                    <div class="controls">
                        <input type="text" name="cidade" value="<?= $dados[0]->cidade; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label"><span class="required">UF*</span></label>
                    <div class="controls">
                        <input type="text" name="uf" value="<?= $dados[0]->uf; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label">Telefone</label>
                    <div class="controls">
                        <input type="text" name="telefone" value="<?= $dados[0]->telefone; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="descricao" class="control-label"><span class="required">E-mail*</span></label>
                    <div class="controls">
                        <input type="text" name="email" value="<?= $dados[0]->email; ?>" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true" id="btnCancelExcluir">Cancelar</button>
                <button class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

    <div id="modalLogo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form action="<?= site_url('mapos/editarLogo'); ?>" id="formLogo" enctype="multipart/form-data" method="post" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id=""><?= $this->config->item('app_name') ?> - Atualizar Logotipo</h3>
            </div>
            <div class="modal-body">
                <div class="span12">*Selecione uma nova imagem da logotipo. Tamanho indicado (130 x 130).</div>
                <div class="control-group">
                    <label for="logo" style="text-align: center;"><span class="required">Logotipo</span></label>
                    <td style="width: 20%"><img src=" <?= $dados[0]->url_logo; ?> "></td>
                    <div>
                        <input type="file" name="userfile" value="" />
                        <input id="nome" type="hidden" name="id" value="<?= $dados[0]->id; ?>" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true" id="btnCancelExcluir">Cancelar</button>
                <button class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

<?php } ?>


<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#formLogo").validate({
            rules: {
                userfile: {
                    required: true
                }
            },
            messages: {
                userfile: {
                    required: '<div class="span" style="color: red;">Insira um arquivo ou clique em cancelar.</div>'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });


        $("#formCadastrar").validate({
            rules: {
                userfile: {
                    required: true
                },
                nome: {
                    required: true
                },
                cnpj: {
                    required: true
                },
                logradouro: {
                    required: true
                },
                numero: {
                    required: true
                },
                bairro: {
                    required: true
                },
                cidade: {
                    required: true
                },
                uf: {
                    required: true
                },
                email: {
                    required: true
                }
            },
            messages: {
                userfile: {
                    required: 'Campo Requerido.'
                },
                nome: {
                    required: 'Campo Requerido.'
                },
                cnpj: {
                    required: 'Campo Requerido.'
                },
                logradouro: {
                    required: 'Campo Requerido.'
                },
                numero: {
                    required: 'Campo Requerido.'
                },
                bairro: {
                    required: 'Campo Requerido.'
                },
                cidade: {
                    required: 'Campo Requerido.'
                },
                uf: {
                    required: 'Campo Requerido.'
                },
                email: {
                    required: 'Campo Requerido.'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });


        $("#formAlterar").validate({
            rules: {
                userfile: {
                    required: true
                },
                nome: {
                    required: true
                },
                cnpj: {
                    required: true
                },
                logradouro: {
                    required: true
                },
                numero: {
                    required: true
                },
                bairro: {
                    required: true
                },
                cidade: {
                    required: true
                },
                uf: {
                    required: true
                },
                email: {
                    required: true
                }
            },
            messages: {
                userfile: {
                    required: 'Campo Requerido.'
                },
                nome: {
                    required: 'Campo Requerido.'
                },
                cnpj: {
                    required: 'Campo Requerido.'
                },
                logradouro: {
                    required: 'Campo Requerido.'
                },
                numero: {
                    required: 'Campo Requerido.'
                },
                bairro: {
                    required: 'Campo Requerido.'
                },
                cidade: {
                    required: 'Campo Requerido.'
                },
                uf: {
                    required: 'Campo Requerido.'
                },
                email: {
                    required: 'Campo Requerido.'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });

    });
</script>
