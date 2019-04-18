<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class RazFiguras extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('RazFiguras_model');
	}
	public function index(){
		$data = array();
		$data['info'] = $this->RazFiguras_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('razonamientofigura/listado',$data);
		$this->load->view('template/footer');
	}
	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('razonamientofigura/razfiguras');
		$this->load->view('template/footer');
	}
	public function guardar(){
		$data = array();
		foreach ($_POST['lista'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:null
				);
		}
		$razs = json_encode($data);
		$dat = array('cuerpo' => $razs,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'created_at' => date('Y-m-d H:i:s') );
		$this->RazFiguras_model->save($dat);
		echo json_encode(array('status'=>true));
	}
	public function update($razonamiento_id){
		$data = array();
		foreach ($_POST['lista'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:null
				);
		}
		$razs = json_encode($data);
		$dat = array('cuerpo' => $razs,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'updated_at' => date('Y-m-d H:i:s') );
		$this->RazFiguras_model->update($dat,$razonamiento_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($razonamiento_id=-1){
		$data = array();
		$data['razonamiento_id'] = $razonamiento_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('razonamientofigura/razfiguras',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($razonamiento_id=-1)
	{
		$result = $this->RazFiguras_model->get_by_id($razonamiento_id);
		echo json_encode($result);
	}
	
}
 ?>