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

		$this->load->view('menu', $data);
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

		$inputDescricao = $_POST['inputDescricao'];
		$this->Post_model->descricao = $inputDescricao;
		
		$inputText = $_POST['inputText'];
		$this->Post_model->texto = $inputText;
		
		$img = $_POST['img'];
		$this->Post_model->img = $img;

		$this->Post_model->inserirPost();

		header('Location: http://localhost/blog/posts/todososposts');
	}

	public function buscar()
	{
		$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'Resultado da busca';
		$data['pagina'] = 'Posts';

		$busca = $this->input->post('busca');
		$data2['busca'] = $busca;

		$this->db->like('titulo', $busca);
		$this->db->or_like('texto', $busca);
		$data2['posts'] = $this->Post_model->recuperarPost();

		$this->load->view('menu', $data);
		$this->load->view('publicacoes', $data2);
		$this->load->view('footer');
	}

	public function visualizar($id)
	{
		$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'Publicação';
		$data['pagina'] = 'Posts';

		$parametro['postagens'] = $this->Post_model->getPost($id);

		$this->load->view('menu', $data);
		$this->load->view('verpost', $parametro, $data);
		$this->load->view('footer');
	}

	public function editar($id)
	{
		$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'Publicação';
		$data['pagina'] = 'Posts';

		$parametro['postagens'] = $this->Post_model->getPost($id);
		$parametro['categoria'] = $this->Post_model->recuperarCategoria();

		$this->load->view('menu', $data);
		$this->load->view('editarpost', $parametro, $data);
		$this->load->view('footer');
	}

	public function atualizar()
	{
		$data['usuario'] = $this->Post_model->recuperarUsuario();
		$data['titulo'] = 'Publicação';
		$data['pagina'] = 'Posts';

		$postagem = $this->input->post();
		$this->$Post_model->atualizar($postagem);
		redirect('home/index');
	}
}
