<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Analogias extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Analogias_model');
	}

	public function index(){
		$data = array();
		$data['info'] = $this->Analogias_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('analogias/listado',$data);
		$this->load->view('template/footer');
	}
	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('analogias/analogias');
		$this->load->view('template/footer');
	}
	public function guardar(){
		$data = array();
		foreach ($_POST['data'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:0
				);
		}
		$analogias = json_encode($data);
		$dat = array('cuerpo' => $analogias,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'created_at' => date('Y-m-d H:i:s') );
		$this->Analogias_model->save($dat);
		echo json_encode(array('status'=>true));
	}
	public function update($analogia_id){
		$data = array();
		foreach ($_POST['data'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:0
				);
		}
		$analogias = json_encode($data);
		$dat = array('cuerpo' => $analogias,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'updated_at' => date('Y-m-d H:i:s') );
		$this->Analogias_model->update($dat,$analogia_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($analogia_id=-1){
		$data = array();
		$data['analogia_id'] = $analogia_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('analogias/analogias',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($analogia_id=-1)
	{
		$result = $this->Analogias_model->get_by_id($analogia_id);
		echo json_encode($result);
	}

}
 ?>