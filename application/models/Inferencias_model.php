<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inferencias_model extends CI_Model {
	var $table = 'inferencias';
	function get_all()
	{
		return $this->db->select('inferencias_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$inferencias_id){
		$this->db->where('inferencias_id',$inferencias_id)->update($this->table, $dat);
	}
	function get_by_id($inferencias_id){
		return $this->db->get_where($this->table,['inferencias_id'=>$inferencias_id])->row();
	}

}

 ?>