<?php
class Cliente_model extends CI_Model 
{
	public function listar()
	{
		$this->db->select("*")
			->from("cliente");

		$clientes=$this->db->get();
		return $clientes->result();
	}

	public function buscar($id)
	{
		$this->db->select("*")
			->from("cliente as c")
			->where("c.idCliente", $id);
		$cliente = $this->db->get();

		$this->db->select('*')
			->from('telefone as t')
			->where('t.idCliente', $id);
		$telefones = $this->db->get();

		$this->db->select('*')
			->from('endereco as e')
			->where('e.idCliente', $id);
		$enderecos = $this->db->get();

		$cliente = $cliente->result();
		$cliente['telefones'] = $telefones->result();
		$cliente['enderecos'] = $enderecos->result();

		return $cliente;
	}
}