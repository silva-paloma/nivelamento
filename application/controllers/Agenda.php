<?php
class Agenda extends CI_Controller
{
	public function index()
	{
		$dados["clientes"]=$this->Cliente->listar();
		$dados["telefone"]="123456dfrth";
		$this->load->view("cliente/listar",$dados);
	}

	public function getbyId($id)
	{
		$dados['detalhes'] = $this->Cliente->buscar($id); 
		$this->load->view("cliente/detalhes",$dados);
	}

}