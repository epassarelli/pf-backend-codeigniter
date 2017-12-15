<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paises extends MX_Controller {

	function __construct(){
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} 
		else{
			parent::__construct();
			$this->load->model('Paises_model');
		}
	}


function index(){
	$data['filas'] 	= $this->Paises_model->get_all();		
	$data['view']   = 'paises_home_view';
	$this->load->view('back/layout_back.php', $data);
}




}

/* End of file interpretes.php */
/* Location: ./application/modules/welcome.php */