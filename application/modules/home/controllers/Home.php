<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct(){
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} 
		else{
			parent::__construct();
		}
	}

	public function index(){
	    
		$data['title'] = 'PF';
		$data['breadcrumb'] = array(
							'Inicio' => base_url()
						);	

		$data['view']	= "home_view";
		$this->load->view('layout', $data);
	}


}
