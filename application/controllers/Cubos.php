<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cubos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cubos_model');
	}

	public function index(){
		$data = array();
		$data['info'] = $this->Cubos_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('cubos/listado',$data);
		$this->load->view('template/footer');
	}

	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('cubos/cubos');
		$this->load->view('template/footer');
	}

	public function guardar(){
		$data = array();
		foreach ($_POST['data'] as $key => $item) {
			$data[$key] = array(
				'hora' => isset($item['hora'])?$item['hora']:0,
				'correcto' => isset($item['correcto'])?$item['correcto']:NULL,
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:NULL
				);
		}
		$cubos = json_encode($data);
		$dat = array('cuerpo' => $cubos,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'puntaje_total_sin'=>$this->input->post('puntaje_total_sin'),
			'created_at' => date('Y-m-d H:i:s') );
		$this->Cubos_model->save($dat);
		echo json_encode(array('status'=>true));
	}
	public function update($cubo_id){
		$data = array();
		foreach ($_POST['data'] as $key => $item) {
			$data[$key] = array(
				'hora' => isset($item['hora'])?$item['hora']:0,
				'correcto' => isset($item['correcto'])?$item['correcto']:NULL,
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:NULL
				);
		}
		$cubos = json_encode($data);
		$dat = array(
			'cuerpo' => $cubos,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'puntaje_total_sin'=>$this->input->post('puntaje_total_sin'),
			'updated_at' => date('Y-m-d H:i:s')
			 );
		$this->Cubos_model->update($dat,$cubo_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($cubo_id=-1){
		$data = array();
		$data['cubo_id'] = $cubo_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('cubos/cubos',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($cubo_id=-1)
	{
		$result = $this->Cubos_model->get_by_id($cubo_id);
		echo json_encode($result);
	}
}
 ?>