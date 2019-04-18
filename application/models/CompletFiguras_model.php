<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CompletFiguras_model extends CI_Model {
	var $table = 'completamiento_figuras';
	function get_all()
	{
		return $this->db->select('completamiento_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$completamiento_id){
		$this->db->where('completamiento_id',$completamiento_id)->update($this->table, $dat);
	}
	function get_by_id($completamiento_id){
		return $this->db->get_where($this->table,['completamiento_id'=>$completamiento_id])->row();
	}

}

 ?>