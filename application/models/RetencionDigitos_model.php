<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class RetencionDigitos_model extends CI_Model {
	var $table='retencion_digitos';
	function get_all()
	{
		return $this->db->select('retencion_id,puntaje_retencion_global,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$retencion_id){
		$this->db->where('retencion_id',$retencion_id)->update($this->table, $dat);
	}
	function get_by_id($retencion_id){
		return $this->db->get_where($this->table,['retencion_id'=>$retencion_id])->row();
	}

}

/* End of file Analogias_model.php */
/* Location: ./application/models/Analogias_model.php */
 ?>