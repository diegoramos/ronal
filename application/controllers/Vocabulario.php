<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vocabulario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Vocabulario_model');
	}
	public function index(){
		$data = array();
		$data['info'] = $this->Vocabulario_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('vocabulario/listado',$data);
		$this->load->view('template/footer');
	}
	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('vocabulario/vocabulario');
		$this->load->view('template/footer');
	}
	public function guardar(){
		$data = array();
		foreach ($_POST['lista'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:null
				);
		}
		$voca = json_encode($data);
		$dat = array('cuerpo' => $voca,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'created_at' => date('Y-m-d H:i:s') );
		$this->Vocabulario_model->save($dat);
		echo json_encode(array('status'=>true));
	}
	public function update($vocabulario_id){
		$data = array();
		foreach ($_POST['lista'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:null
				);
		}
		$voca = json_encode($data);
		$dat = array('cuerpo' => $voca,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'updated_at' => date('Y-m-d H:i:s') );
		$this->Vocabulario_model->update($dat,$vocabulario_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($vocabulario_id=-1){
		$data = array();
		$data['vocabulario_id'] = $vocabulario_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('vocabulario/vocabulario',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($vocabulario_id=-1)
	{
		$result = $this->Vocabulario_model->get_by_id($vocabulario_id);
		echo json_encode($result);
	}
	
}
 ?>