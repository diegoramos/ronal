<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Analogias_model extends CI_Model {
	var $table = 'analogias';
	function get_all()
	{
		return $this->db->select('analogia_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$analogia_id){
		$this->db->where('analogia_id',$analogia_id)->update($this->table, $dat);
	}
	function get_by_id($analogia_id){
		return $this->db->get_where($this->table,['analogia_id'=>$analogia_id])->row();
	}

}

/* End of file Analogias_model.php */
/* Location: ./application/models/Analogias_model.php */
 ?>