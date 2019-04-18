<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model {
	var $table = 'registros';
	function get_all()
	{
		return $this->db->select('registros_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$registros_id){
		$this->db->where('registros_id',$registros_id)->update($this->table, $dat);
	}
	function get_by_id($registros_id){
		return $this->db->get_where($this->table,['registros_id'=>$registros_id])->row();
	}

}
 ?>