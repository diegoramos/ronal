<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cubos_model extends CI_Model {

	function get_all()
	{
		return $this->db->select('cubo_id,puntaje_total,puntaje_total_sin,created_at')->get('cubos')->result();
	}
	function save($dat){
		$this->db->insert('cubos', $dat);
	}
	function update($dat,$cubo_id){
		$this->db->where('cubo_id',$cubo_id)->update('cubos', $dat);
	}
	function get_by_id($cubo_id){
		return $this->db->get_where('cubos',['cubo_id'=>$cubo_id])->row();
	}

}

/* End of file Cubos_model.php */
/* Location: ./application/models/Cubos_model.php */

 ?>