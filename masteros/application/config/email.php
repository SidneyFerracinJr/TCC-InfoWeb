<?php

$config['protocol']         = 'smtp';
$config['smtp_host']        = 'smtp.mailtrap.io';
$config['smtp_crypto']      = 'STARTTLS'; // tls or ssl
$config['smtp_port']        = 2525; 
$config['smtp_user']        = '6d86f299c3648c';
$config['smtp_pass']        = 'bc1af9e1b172c3';
$config['validate']         = true; // validar email
$config['mailtype']         = 'html'; // text ou html
$config['charset']          = 'utf-8';
$config['newline']          = "\r\n";
$config['bcc_batch_mode']   = false;
$config['wordwrap']         = false;
$config['priority']         = 3; // 1, 2, 3, 4, 5 | Email Priority. 1 = highest. 5 = lowest. 3 = normal.
