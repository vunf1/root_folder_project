<?php


Class Websitecontroller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->output->set_header('Access-Control-Allow-Origin: *');
        //$this->output->set_header('X-FRAME-OPTIONS: Allow');
		
		
		$this->load->helper(array('form', 'url'));
		
		$this->load->view('loadscripts');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		//Load them in the constructor
		
		
	}
	
	
	public function index() {
		if($this->session->userdata('logged_in')==true){
			
			
			$this->load->view('socketcliente');
			
			
		}else{redirect('solutioncontroller/index');}
		
		
		
	}
}
	
	?>