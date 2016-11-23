<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    private $pokemon;

    public function __construct() {
        parent::__construct();
        $this->load->model("Listar", "listarpokemon");
        $this->pokemon = $this->listarpokemon->consultar_pokemon();
    }

    public function index() {
        $this->load->helper('text');
        $this->load->view('login');
    }

    public function logar() {
        $this->load->helper('form');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_login();
        } else {
            $this->db->where('email', $this->input->post('email'));
            $this->db->where('senha', $this->input->post('senha'));

            $usuario = $this->db->get('usuario')->result();
            if (count($usuario) == 1) {
                $dadosSessao['usuario'] = $usuario[0];
                $dadosSessao['logado'] = TRUE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url("index.php/Home"));
            } else {
                $dadosSessao['usuario'] = NULL;
                $dadosSessao['logado'] = FALSE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url("index.php/Login"));
            }
        }
    }

    public function logout() {
        $dadosSessao['usuario'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url("index.php/Login"));
    }

}
