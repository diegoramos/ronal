<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprension_model extends CI_Model {
	var $table = 'comprension';
	function get_all()
	{
		return $this->db->select('comprension_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$comprension_id){
		$this->db->where('comprension_id',$comprension_id)->update($this->table, $dat);
	}
	function get_by_id($comprension_id){
		return $this->db->get_where($this->table,['comprension_id'=>$comprension_id])->row();
	}

}

 ?>