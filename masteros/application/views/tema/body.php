<div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <a><h3 class="text-dark mb-0"><?= ucfirst($this->uri->segment(1)); ?></h3></a>
                    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Gerar Relatório</a></div>
                <div class="row">
                <?php if (isset($view)) {
              echo $this->load->view($view, null, true);
          } ?>
</div>