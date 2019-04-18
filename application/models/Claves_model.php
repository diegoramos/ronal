<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Claves_model extends CI_Model {
	var $table = "claves";
	function get_all()
	{
		return $this->db->select('claves_id,puntaje_total1,puntaje_total2,puntaje,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$claves_id){
		$this->db->where('claves_id',$claves_id)->update($this->table, $dat);
	}
	function get_by_id($claves_id){
		return $this->db->get_where($this->table,['claves_id'=>$claves_id])->row();
	}

}

/* End of file Analogias_model.php */
/* Location: ./application/models/Analogias_model.php */
 ?>