<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function consultar_pokemon() {
        return $this->db->get('pokemon')->result();
    }

}

?>
