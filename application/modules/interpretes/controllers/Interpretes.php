<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interpretes extends MX_Controller {

	function __construct(){
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} 
		else{
			parent::__construct();
			$this->load->model('Interpretes_model');
		}
	}


function index(){
		
	$data['view']   = 'interpretes_home_view';
	$this->load->view('back/layout.php', $data);

}




}

/* End of file interpretes.php */
/* Location: ./application/modules/welcome.php */