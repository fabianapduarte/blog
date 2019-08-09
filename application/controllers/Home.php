<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$postagens['post'] = $this->db->get('post')->result();
		$data['titulo'] = 'My Blog - Página Inicial';
		$data['pagina'] = 'Home';

		$this->load->view('menu', $data);
		$this->load->view('content', $postagens);
	}

}
