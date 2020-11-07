<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mapos_model');
    }

    public function index()
    {
        $this->load->view('login/login');
    }

    public function sair()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function verificarLogin()
    {
        header('Access-Control-Allow-Origin: ' . base_url());
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail', 'valid_email|required|trim');
        $this->form_validation->set_rules('senha', 'Senha', 'required|trim');
        if ($this->form_validation->run() == false) {
            $json = ['result' => false, 'message' => validation_errors()];
            echo json_encode($json);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('senha');
            $this->load->model('Mapos_model');
            $user = $this->Mapos_model->check_credentials($email);

            if ($user) {
                // Verificar se acesso está expirado
                if ($this->chk_date($user->dataExpiracao)) {
                    $json = ['result' => false, 'message' => 'A conta está expirada, contate o administrador do sistema.'];
                    echo json_encode($json);
                    die();
                }

                // Verificar credenciais do usuário
                if (password_verify($password, $user->senha)) {
                    $session_data = ['nome' => $user->nome, 'email' => $user->email, 'id' => $user->idUsuarios, 'permissao' => $user->permissoes_id, 'logado' => true];
                    $this->session->set_userdata($session_data);
                    log_info('Efetuou login no sistema');
                    $json = ['result' => true];
                    echo json_encode($json);
                } else {
                    $json = ['result' => false, 'message' => 'Os dados de acesso estão incorretos.'];
                    echo json_encode($json);
                }
            } else {
                $json = ['result' => false, 'message' => 'Usuário não encontrado, verifique se suas credenciais estão corretas.'];
                echo json_encode($json);
            }
        }
        die();
    }

    private function chk_date($data_banco)
    {
        $data_banco = new DateTime($data_banco);
        $data_hoje = new DateTime("now");

        return $data_banco < $data_hoje;
    }
}
