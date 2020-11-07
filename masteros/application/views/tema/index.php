<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $configuration['app_name'] ?: 'Master-OS' ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/logotipo/logo.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/fontawesome-all.min.css">
</head>
<body id="page-top">
    <div id="wrapper">
<?php include 'menu.php' ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
<?php include 'header.php'?>
            
<?php include 'body.php' ?>

        </div>
    </div>

    <?php include 'footer.php' ?>
    
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

</html>

