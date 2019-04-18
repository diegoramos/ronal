<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SerieNumLetras_model extends CI_Model {
	var $table = 'serie_numero_letra';
	function get_all()
	{
		return $this->db->select('serie_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$serie_id){
		$this->db->where('serie_id',$serie_id)->update($this->table, $dat);
	}
	function get_by_id($serie_id){
		return $this->db->get_where($this->table,['serie_id'=>$serie_id])->row();
	}

}

/* End of file Analogias_model.php */
/* Location: ./application/models/Analogias_model.php */
 ?>