<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data['post'] = $this->db->get('post')->result();

		$this->load->view('menu');
		$this->load->view('content', $data);
	}

}
