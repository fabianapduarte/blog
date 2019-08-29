<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller 
{

	public function todosOsPosts()
	{
		$postagens['posts'] = $this->Post_model->recuperarPost();
		$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'Todas as publicações';
		$data['pagina'] = 'Posts';

		$this->load->view('menu', $data);;
		$this->load->view('publicacoes', $postagens, $data);
		$this->load->view('footer');
	}

    public function novoPost() 
    {
    	$categorias['categoria'] = $this->Post_model->recuperarCategoria();
      	$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'Nova Publicação';
        $data['pagina'] = 'Posts';
        
        $this->load->view('menu', $data);
		$this->load->view('novopost', $categorias, $data);
		$this->load->view('footer');
    }
}
