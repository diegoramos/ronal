<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class RazFiguras_model extends CI_Model {

	var $table='razonamiento_figura';
	function get_all()
	{
		return $this->db->select('razonamiento_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$razonamiento_id){
		$this->db->where('razonamiento_id',$razonamiento_id)->update($this->table, $dat);
	}
	function get_by_id($razonamiento_id){
		return $this->db->get_where($this->table,['razonamiento_id'=>$razonamiento_id])->row();
	}

}

/* End of file Analogias_model.php */
/* Location: ./application/models/Analogias_model.php */
 ?>