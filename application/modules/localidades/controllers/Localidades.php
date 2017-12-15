<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends MX_Controller {

	function __construct(){
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} 
		else{
			parent::__construct();
			$this->load->model('Localidades_model');
		}
	}


function index(){
	$data['filas'] 	= $this->Localidades_model->get_all();		
	$data['view']   = 'localidades_home_view';
	$this->load->view('back/layout_back.php', $data);
}




}

/* End of file Localidades.php */
/* Location: ./application/modules/welcome.php */