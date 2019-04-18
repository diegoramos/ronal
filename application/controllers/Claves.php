<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Claves extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Claves_model');
	}
	public function index(){
		$data = array();
		$data['info'] = $this->Claves_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('claves/listado',$data);
		$this->load->view('template/footer');
	}
	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('claves/claves');
		$this->load->view('template/footer');
	}
	public function guardar(){
		$data = array();
		$data['hora1'] = $this->input->post('hora1');
		$data['hora2'] = $this->input->post('hora2');
		$data['puntaje_total1'] = $this->input->post('puntaje_total1');
		$data['puntaje_total2'] = $this->input->post('puntaje_total2');
		$data['puntaje'] = $this->input->post('puntaje');
		$data['created_at'] = date('Y-m-d H:i:s');
		$this->Claves_model->save($data);
		echo json_encode(array('status'=>true));
	}
	public function update($claves_id){
		$data = array();
		$data['hora1'] = $this->input->post('hora1');
		$data['hora2'] = $this->input->post('hora2');
		$data['puntaje_total1'] = $this->input->post('puntaje_total1');
		$data['puntaje_total2'] = $this->input->post('puntaje_total2');
		$data['puntaje'] = $this->input->post('puntaje');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$this->Claves_model->update($data,$claves_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($claves_id=-1){
		$data = array();
		$data['claves_id'] = $claves_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('claves/claves',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($claves_id=-1)
	{
		$result = $this->Claves_model->get_by_id($claves_id);
		echo json_encode($result);
	}
}
 ?>