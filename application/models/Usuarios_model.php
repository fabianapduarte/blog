<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function logar($email, $senha) {
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);

        $usuario = $this->db->get('usuario')->row_array();
        return $usuario;
    }
    
}