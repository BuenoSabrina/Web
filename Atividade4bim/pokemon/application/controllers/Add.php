<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public $pokemon;

    public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }

    public function index() {
        $this->load->helper('text');
        $this->load->view('html-header');
        $this->load->view('header');
        $this->load->view('adicionar');
        $this->load->view('footer');
        $this->load->view('html-footer');
    }

    public function cadastrar() {
        $this->load->helper(array("form", "url"));
        $this->load->database();
        $info['nome'] = $this->input->post('nome');
        $info['data_captura'] = $this->input->post('data_captura');
        $info['tipo_pokemon'] = $this->input->post('tipo_pokemon');
        if ($this->db->insert('pokemon', $info)) {
            redirect(base_url("index.php/Home"));
        }
    }

}
