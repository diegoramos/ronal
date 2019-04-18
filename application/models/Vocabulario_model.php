<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Vocabulario_model extends CI_Model {
	var $table = "vocabulario";
	function get_all()
	{
		return $this->db->select('vocabulario_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$vocabulario_id){
		$this->db->where('vocabulario_id',$vocabulario_id)->update($this->table, $dat);
	}
	function get_by_id($vocabulario_id){
		return $this->db->get_where($this->table,['vocabulario_id'=>$vocabulario_id])->row();
	}

}

/* End of file Analogias_model.php */
/* Location: ./application/models/Analogias_model.php */
 ?>