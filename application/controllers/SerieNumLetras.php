<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class SerieNumLetras extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('SerieNumLetras_model');
	}

	public function index(){
		$data = array();
		$data['info'] = $this->SerieNumLetras_model->get_all();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('serienumletras/listado',$data);
		$this->load->view('template/footer');
	}
	public function nuevo(){
		$data = array();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('serienumletras/serienumletras');
		$this->load->view('template/footer');
	}
	public function guardar(){
		$data = array();
		foreach ($_POST['lista'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:null
				);
		}
		$cuerpo = json_encode($data);
		$dat = array('cuerpo' => $cuerpo,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'created_at' => date('Y-m-d H:i:s') );
		$this->SerieNumLetras_model->save($dat);
		echo json_encode(array('status'=>true));
	}
	public function update($serie_id){
		$data = array();
		foreach ($_POST['lista'] as $key => $item) {
			$data[$key] = array(
				'puntaje' => isset($item['puntaje'])?$item['puntaje']:null
				);
		}
		$cuerpo = json_encode($data);
		$dat = array('cuerpo' => $cuerpo,
			'puntaje_total'=>$this->input->post('puntaje_total'),
			'updated_at' => date('Y-m-d H:i:s') );
		$this->SerieNumLetras_model->update($dat,$serie_id);
		echo json_encode(array('status'=>true));
	}
	public function edit($serie_id=-1){
		$data = array();
		$data['serie_id'] = $serie_id;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('serienumletras/serienumletras',$data);
		$this->load->view('template/footer');
	}
	public function get_editdata($serie_id=-1)
	{
		$result = $this->SerieNumLetras_model->get_by_id($serie_id);
		echo json_encode($result);
	}
	
}
 ?>