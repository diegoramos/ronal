<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacion_model extends CI_Model {
	var $table = 'informacion';
	function get_all()
	{
		return $this->db->select('informacion_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$informacion_id){
		$this->db->where('informacion_id',$informacion_id)->update($this->table, $dat);
	}
	function get_by_id($informacion_id){
		return $this->db->get_where($this->table,['informacion_id'=>$informacion_id])->row();
	}

}

 ?>