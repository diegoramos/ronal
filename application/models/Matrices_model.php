<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matrices_model extends CI_Model {
	var $table = 'matrices';
	function get_all()
	{
		return $this->db->select('matrices_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$matrices_id){
		$this->db->where('matrices_id',$matrices_id)->update($this->table, $dat);
	}
	function get_by_id($matrices_id){
		return $this->db->get_where($this->table,['matrices_id'=>$matrices_id])->row();
	}

}
 ?>