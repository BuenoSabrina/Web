<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $pokemon;

    public function __construct() {
        parent::__construct();
        $this->load->model("Listar", "listarpokemon");
        $this->pokemon = $this->listarpokemon->consultar_pokemon();
    }

    public function index() {
        $this->load->helper('text');
        $data['pokemon'] = $this->pokemon;
        $this->load->view('html-header');
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer');
        $this->load->view('html-footer');
    }

}
