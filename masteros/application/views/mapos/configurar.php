
<!-- SESSÃO CONFIGURAÇÕES -->
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <!-- TÍTULO -->
                <span class="icon"><i class="fas fa-wrench"></i></span><h5>Configurações do Sistema</h5></div>
                
                <!-- INÍCIO DO FORMULÁRIO -->
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formConfigurar" method="post" class="form-horizontal">
                
                <div class="control-group">
                        <label for="app_name" class="control-label">Nome do Sistema</label>
                        <div class="controls">
                            <input type="text" required name="app_name" value="<?= $configuration['app_name']?>">
                            <span class="help-inline">Aparecerá nos títulos e demais lugares que o contenham.</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="app_theme" class="control-label">Tema do Sistema</label>
                        <div class="controls">
                            <select name="app_theme" id="app_theme">
                                <option value="default">Escuro</option>
                                <option value="white" <?= $configuration['app_theme'] == 'white' ? 'selected' : ''; ?> >Claro</option>
                            </select>
                            <span class="help-inline">Selecione o tema que mais agrada a sua visão.</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="per_page" class="control-label">Registros por Página</label>
                        <div class="controls">
                            <select name="per_page" id="theme">
                                <option value="10">10</option>
                                <option value="20" <?= $configuration['per_page'] == '20' ? 'selected' : ''; ?> >20</option>
                                <option value="50" <?= $configuration['per_page'] == '50' ? 'selected' : ''; ?> >50</option>
                                <option value="100" <?= $configuration['per_page'] == '100' ? 'selected' : ''; ?> >100</option>
                            </select>
                            <span class="help-inline">Quantos elementos serão exibidos por vez nas listas.</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="os_notification" class="control-label">Notificação de OS</label>
                        <div class="controls">
                            <select name="os_notification" id="os_notification">
                                <option value="todos">Notificar a Todos</option>
                                <option value="cliente" <?= $configuration['os_notification'] == 'cliente' ? 'selected' : ''; ?> >Somente o Cliente</option>
                                <option value="tecnico" <?= $configuration['os_notification'] == 'tecnico' ? 'selected' : ''; ?> >Somente o Técnico</option>
                                <option value="emitente" <?= $configuration['os_notification'] == 'emitente' ? 'selected' : ''; ?> >Somente o Emitente</option>
                                <option value="nenhum" <?= $configuration['os_notification'] == 'nenhum' ? 'selected' : ''; ?> >Não Notificar</option>
                            </select>
                            <span class="help-inline">Quem receberá a notificação por email quando uma OS for cadastrada.</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="control_estoque" class="control-label">Controlar Estoque</label>
                        <div class="controls">
                            <select name="control_estoque" id="control_estoque">
                                <option value="1">Sim</option>
                                <option value="0" <?= $configuration['control_estoque'] == '0' ? 'selected' : ''; ?> >Não</option>
                            </select>
                            <span class="help-inline">Escolha se deseja ou não que o controle do estoque seja dado baixa automaticamente.</span>
                        </div>
                    </div>
                    <!-- BOTÕES -->
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span8">
                                <button type="submit" class="btn btn-primary" ><i class="fa fa-check-circle"></i> Salvar Configurações</button>
                                <button id="update-database" type="button" class="btn btn-warning"><i class="fas fa-sync-alt"></i> Atualizar Banco de Dados</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#update-database').click(function () {
        if (confirm('Confirma a atualização do banco de dados?')) {
            window.location = "<?= site_url('mapos/atualizarBanco') ?>"
        }
    });

    $('#update-mapos').click(function() {
        if (confirm('Confirma a atualização do mapos?')) {
            window.location = "<?= site_url('mapos/atualizarMapos') ?>"
        }
    });
</script>
