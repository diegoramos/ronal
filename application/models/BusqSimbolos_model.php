<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class BusqSimbolos_model extends CI_Model {
	var $table = 'busqueda_simbolo';
	function get_all()
	{
		return $this->db->select('busqueda_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$busqueda_id){
		$this->db->where('busqueda_id',$busqueda_id)->update($this->table, $dat);
	}
	function get_by_id($busqueda_id){
		return $this->db->get_where($this->table,['busqueda_id'=>$busqueda_id])->row();
	}

}
 ?>