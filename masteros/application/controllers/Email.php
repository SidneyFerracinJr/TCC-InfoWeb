<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }
    
    public function send()
    {
        
$this->email->from("0866e8821c-bcc01c@inbox.mailtrap.io", '6d86f299c3648c');
$this->email->subject("Assunto do e-mail");
$this->email->reply_to("sidney.ferracin99@gmail.com");
$this->email->to("sidney.ferracin99@gmail.com"); 
$this->email->cc('renoaravare@hotmail.com');
$this->email->bcc('sidney.ferracin@etec.sp.gov.br');
$this->email->message("Aqui vai a mensagem ao seu destinatário");
$this->email->send();

    }

    public function process()
    {
        if (!$this->input->is_cli_request()) {
            show_404();
        }

        $this->email->send_queue();
    }

    public function retry()
    {
        if (!$this->input->is_cli_request()) {
            show_404();
        }

        $this->email->retry_queue();
    }
}
