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
	
	public function salvar()
	{	
		$inputTitulo = $_POST['inputTitulo'];
		$this->Post_model->titulo = $inputTitulo;

		$inputCategoria = $_POST['inputCategoria'];
		$this->Post_model->categoria_id = $inputCategoria;

		$inputDescricao = $_POST['inputAddress'];
		$this->Post_model->descricao = $inputDescricao;
		
		$inputText = $_POST['inputText'];
		$this->Post_model->texto = $inputText;
		
		$img = $_POST['img'];
		$this->Post_model->img = $img;

		$this->Post_model->inserirPost();
	}
}
