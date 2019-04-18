<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class RetDigitos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('RetencionDigitos_model');
	}

	public function index(){
		$data['info'] = $this->RetencionDigitos_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('retenciondigitos/listado',$data);
		$this->load->view('template/footer');
	}
	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('retenciondigitos/retdigitos');
		$this->load->view('template/footer');
	}

	public function guardar(){
		$data = array();
		$lista1 = array();
		$lista2 = array();
		$lista3 = array();
		$lista4 = array();
		foreach ($_POST['lista1'] as $key => $item) {
			$lista1[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		foreach ($_POST['lista2'] as $key => $item) {
			$lista2[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		foreach ($_POST['lista3'] as $key => $item) {
			$lista3[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		foreach ($_POST['lista4'] as $key => $item) {
			$lista4[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		$reddig = json_encode(
			array(
				'lista1' =>$lista1
				,'lista2'=>$lista2,
				'lista3'=>$lista1,
				'lista4'=>$lista4
			)
		);
		$dat = array('cuerpo' => $reddig,
			'puntaje_total1'=>$this->input->post('puntaje_total1'),
			'puntaje_total2'=>$this->input->post('puntaje_total2'),
			'puntaje_total3'=>$this->input->post('puntaje_total3'),
			'puntaje_total4'=>$this->input->post('puntaje_total4'),
			'puntaje_retencion_global'=>$this->input->post('puntaje_retencion_global'),
			'created_at' => date('Y-m-d H:i:s') );
		$this->RetencionDigitos_model->save($dat);
		echo json_encode(array('status'=>true));
	}
	public function update($retencion_id){
		$data = array();
		$lista1 = array();
		$lista2 = array();
		$lista3 = array();
		$lista4 = array();
		foreach ($_POST['lista1'] as $key => $item) {
			$lista1[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		foreach ($_POST['lista2'] as $key => $item) {
			$lista2[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		foreach ($_POST['lista3'] as $key => $item) {
			$lista3[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		foreach ($_POST['lista4'] as $key => $item) {
			$lista4[$key] = array(
				'puntaje' => isset($item['punt'])?$item['punt']:0
				);
		}
		$reddig = json_encode(
			array(
				'lista1' =>$lista1
				,'lista2'=>$lista2,
				'lista3'=>$lista1,
				'lista4'=>$lista4
			)
		);
		$dat = array('cuerpo' => $reddig,
			'puntaje_total1'=>$this->input->post('puntaje_total1'),
			'puntaje_total2'=>$this->input->post('puntaje_total2'),
			'puntaje_total3'=>$this->input->post('puntaje_total3'),
			'puntaje_total4'=>$this->input->post('puntaje_total4'),
			'puntaje_retencion_global'=>$this->input->post('puntaje_retencion_global'),
			'updated_at' => date('Y-m-d H:i:s') );
		$this->RetencionDigitos_model->update($dat,$retencion_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($retencion_id=-1){
		$data = array();
		$data['retencion_id'] = $retencion_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('retenciondigitos/retdigitos',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($retencion_id=-1)
	{
		$result = $this->RetencionDigitos_model->get_by_id($retencion_id);
		echo json_encode($result);
	}
	
}
 ?>
