<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class ParteA extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('partea');
		$this->load->view('template/footer');
	}
	
}
 ?>