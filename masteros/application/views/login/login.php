<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MasterOS - Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logotipo/logo.png" />
</head>

<body class="bg-gradient-primary" style="background-image: url(&quot;<?php echo base_url(); ?>assets/img/login/fundo.png&quot;);">
<!-- INICIO DO CONTAINER DE LOGIN -->
    <div id="loginbox" class="container justify-content-center mx-auto" data-aos="fade" style="margin-top: 10%;">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;<?php echo base_url(); ?>assets/img/login/av-paulista.jpg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                            <h3><img src="<?= base_url() ?>assets/img/logotipo/logotipo.png" alt="Logo" style="width: 20%;" /></h3>
                                <h4 class="text-dark mb-4">Seja bem vindo!</h4>
                                
                            </div>


                            
                            <form class="user" id="formLogin" method="post" action="<?= site_url('login/verificarLogin') ?>">
                            
                            <?php if ($this->session->flashdata('error') != null) { ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="email" name="email" aria-describedby="emailHelp" placeholder="Endereço de email"></div>
                                <div class="form-group"><input class="form-control form-control-user" type="password" name="senha" id="senha" placeholder="Senha" name="senha"></div>
                                <button class="btn btn-primary btn-block text-white btn-user" id="btn-acessar" type="submit">Entrar</button>
                                <div id="alerta" class="alert alert-danger fade alerta" role="alert">
                                <h6 id="mensagem">
                                </div>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Esqueci minha senha</a></div>
                            <div class="text-center"><a class="small" href="login.html">Criar conta</a></div>
                        </div>
                        <!-- FIM DO CONTAINER DE LOGIN -->





                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/tema/menu.js"></script>
    <script src="<?= base_url() ?>assets/js/validate.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#email').focus();
            $("#formLogin").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    senha: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: 'Campo Requerido.',
                        email: 'Insira Email válido'
                    },
                    senha: {
                        required: 'Campo Requerido.'
                    }
                },
                submitHandler: function(form) {
                    var dados = $(form).serialize();
                    $('#btn-acessar').addClass('disabled');
                    $('#progress-acessar').removeClass('hide');

                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('login/verificarLogin?ajax=true'); ?>",
                        data: dados,
                        dataType: 'json',
                        success: function(data) {
                            if (data.result == true) {
                                window.location.href = "<?= site_url('mapos'); ?>";
                            } else {


                                $('#btn-acessar').removeClass('disabled');
                                $('#progress-acessar').addClass('hide');
                                
                                $('#alerta').removeClass('fade');
                                $('#mensagem').text(data.message || 'Os dados de acesso estão incorretos, por favor tente novamente!');
                                $('#alerta').trigger('click');
                            }
                        }
                    });

                    return false;
                },

                errorClass: "help-inline",
                errorElement: "span",
                highlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });

        });
    </script>
</body>

</html>