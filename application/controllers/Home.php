<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$postagens['posts'] = $this->Post_model->recuperarNovosPosts();
		$postagens['carousel'] = $this->Post_model->recuperarPostCarousel();
		$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'My Blog - Página Inicial';
		$data['pagina'] = 'Home';

		$this->load->view('menu', $data);
		$this->load->view('home', $postagens, $data);
		$this->load->view('footer');
	}

}
