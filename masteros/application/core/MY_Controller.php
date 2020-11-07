<?php

class MY_Controller extends CI_Controller
{
    public $data = [
        'configuration' => [
            'per_page' => 10,
            'next_link' => '<button class="page-link"><span aria-hidden="true">»</span></button>',
            'prev_link' => '<button class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></button>',
            'full_tag_open' => '<nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers "><ul class="pagination pagination alternate">',
            'full_tag_close' => '</ul></nav>',
            'num_tag_open' => '<li class="page-item"><button class="page-link">',
            'num_tag_close' => '</button></li>',    
            'cur_tag_open' => '<li class="page-item"><button class="page-link">',
            'cur_tag_close' => '</button></li>',
            'prev_tag_open' => '<li class="page-item">',
            'prev_tag_close' => '</li>',
            'next_tag_open' => '<li class="page-item">',
            'next_tag_close' => '</li>',
            'first_link' => 'Primeira',
            'last_link' => 'Última',
            'first_tag_open' => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',
            'app_name' => 'Master-OS',
            'app_theme' => 'default',
            'os_notification' => 'cliente',
            'control_estoque' => '1',
        ],
    ];

    public function __construct()
    {
        parent::__construct();

        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
        }
        $this->load_configuration();
    }

    private function load_configuration()
    {
        $this->CI = &get_instance();
        $this->CI->load->database();
        $configuracoes = $this->CI->db->get('configuracoes')->result();

        foreach ($configuracoes as $c) {
            $this->data['configuration'][$c->config] = $c->valor;
        }
    }

    public function layout()
    {
        // load views
        $this->load->view('tema/index', $this->data);
    }
}
