<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-color: rgb(57,86,147);">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3"><img src="<?php echo base_url() ?>assets/img/logotipo/logotipo.png" style="width: 150px;"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link <?php if (isset($menuPainel)) { echo 'active'; }; ?>" href="<?= base_url() ?>"><i class="fas fa-tachometer-alt"></i><span>Painel de controle</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?php if (isset($menuOs)) { echo 'active'; }; ?>" href="<?= site_url('os') ?>"><i class="fas fa-diagnoses"></i><span>Ordens de Serviços</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?php if (isset($menuClientes)) { echo 'active'; }; ?>" href="<?= site_url('clientes') ?>"><i class="fas fa-users"></i><span>Clientes</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?php if (isset($menuServicos)) { echo 'active'; }; ?>" href="<?= site_url('servicos') ?>"><i class="fas fa-user-cog"></i><span>Serviços</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?php if (isset($menuArquivos)) { echo 'active'; }; ?>" href="<?= site_url('arquivos') ?>"><i class="fas fa-hdd"></i><span>Arquivos</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"><i class="fas fa-th-list"></i><span>Relatórios</span></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog"></i><span>Configurações</span></a>
                        <div class="dropdown-menu rounded-0" role="menu"><a class="dropdown-item" role="presentation" href="#">Sistema</a><a class="dropdown-item" role="presentation" href="#">Empresa</a><a class="dropdown-item" role="presentation" href="#">Usuários</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= site_url('login/sair'); ?>"><i class="fas fa-sign-out-alt"></i><span>Sair</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>