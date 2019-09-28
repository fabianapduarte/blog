<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller 
{

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }

    public function index() {
        $this->load->view('administracao/index');
    }

    public function autenticar(){
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $verificar = $this->Usuarios_model->logar($email, $senha);

        if ($verificar){
            $this->session->set_userdata('usuario_logado', $usuario);
            $this->session->set_flashdata('success', 'Usuario logado');
            redirect(base_url().'home/index');
        }else{
            $this->session->set_flashdata('error', 'Usuario ou senha incorretos');
            redirect(base_url().'usuario/index');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url().'usuario/index');
    }
}