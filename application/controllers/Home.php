<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$postagens['posts'] = $this->db->get('post', 6)->result();
		$postagens['carousel'] = $this->db->get('post', 3)->result();
		$data['titulo'] = 'My Blog - Página Inicial';
		$data['pagina'] = 'Home';

		$this->load->view('menu', $data);
		$this->load->view('content', $postagens);
	}

}
