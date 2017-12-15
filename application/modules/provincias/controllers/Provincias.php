<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provincias extends MX_Controller {

	function __construct(){
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} 
		else{
			parent::__construct();
			$this->load->model('Provincias_model');
		}
	}


function index(){
	$data['filas'] 	= $this->Provincias_model->get_all();
	$data['controlador'] = "provincias";		
	$data['view']   = 'provincias_home_view';
	$this->load->view('back/layout_back.php', $data);
}




}

/* End of file Provincias.php */
/* Location: ./application/modules/welcome.php */