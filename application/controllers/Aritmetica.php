<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Aritmetica extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('aritmetica');
		$this->load->view('template/footer');
	}
	
}
 ?>