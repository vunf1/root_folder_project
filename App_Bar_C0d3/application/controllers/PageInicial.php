<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageInicial extends CI_Controller {


	    function __construct() {
	        parent::__construct();
	        $this->output->set_header('Access-Control-Allow-Origin: *');

	        $this->load->model('tionmodel');
	        $this->load->database();
	        //Load them in the constructor


	    }


	public function index()
	{
		require_once('application/libraries/Mobile_Detect.php');
	    $detect=new Mobile_Detect();
	    if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()|| $detect->isIOS()) {
	        /* MOBILE TRIGGER */
			$this->load->view('standardLoads');
			$this->load->view('pagina_inicial');
	    }else{
	    	/* PC TRIGGER */
			$this->load->view('standardLoads');
			$this->load->view('pagina_inicial');
	    }

	}

	public function loadALL()
	{
		$ok=$this->tionmodel->info();
		echo $ok;
		//$this->load->view('pagina_dois');
	
	}


	public function pageMenu()
	{

		$this->load->view('pagina_menu');
	
	}




}
