<?php

// log info
function log_info($task)
{
    $ci = &get_instance();
    $ci->load->model('Audit_model');
    date_default_timezone_set('America/Sao_Paulo');
    $data = [
        'usuario' => $ci->session->userdata('nome'),
        'ip' => $ci->input->ip_address(),
        'tarefa' => $task,
        'data' => date('Y-m-d'),
        'hora' => date('H:i:s'),
    ];

    $ci->Audit_model->add($data);
}
