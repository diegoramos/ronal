<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Aritmetica_model extends CI_Model {
	var $table = 'aritmetica';
	function get_all()
	{
		return $this->db->select('aritmetica_id,puntaje_total,created_at')->get($this->table)->result();
	}
	function save($dat){
		$this->db->insert($this->table, $dat);
	}
	function update($dat,$aritmetica_id){
		$this->db->where('aritmetica_id',$aritmetica_id)->update($this->table, $dat);
	}
	function get_by_id($aritmetica_id){
		return $this->db->get_where($this->table,['aritmetica_id'=>$aritmetica_id])->row();
	}

}
 ?>