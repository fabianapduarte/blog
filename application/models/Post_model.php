<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model{
	public function recuperarPost() //método para recuperação de tabela post 
	{
		return $postagens = $this->db->get('post')->result();
	}
	public function recuperarUsuario() //método para recuperação de tabela usuario
	{
		return $data = $this->db->get('usuario', 1)->result();
	}
	public function recuperarCategoria() //método para recuperação de tabela categoria
	{
		return $categorias = $this->db->get('categoria')->result();
	}
}
