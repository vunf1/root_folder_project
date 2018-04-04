<?php

Class LoginController extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        
        
                $this->load->helper(array('form', 'url'));

$this->load->view('loadscripts');
                $this->load->library('form_validation');
        $this->load->library('session');
        
        //Load them in the constructor
        
        
    }
public function index() {

        $this->output->set_header('Access-Control-Allow-Origin: *');
$this->load->view('loadscripts');
      $this->load->model('Tionmodel');
      
      
      
      
      if($this->session->userdata('logged_in')==false){
         
            
$this->load->view('login');

$this->load->view('footer');
          
      }else{redirect('Solutioncontroller/index');}
    
}


function login_user() {
    
      $this->load->model('Tionmodel');
      $username = $this->input->post('username');
      $pass  = $this->input->post('password');
      
      
     if($this->Tionmodel->checklogin($username,$pass))  
      {
         if($this->Tionmodel->checklogin($username,$pass)=='okadmin')
         {
             
          $newdata = array(
                                    'username'  => $username,
                                    'status'     => 'Admin',
                                    'logged_in' => TRUE
                                                        );
                            $this->session->set_userdata($newdata);
                            redirect('solution');
         }
         if($this->Tionmodel->checklogin($username,$pass)=='okuser')
         {
          $newdata = array(
                                    'username'  => $username,
                                    'password'     => $pass,
                                    'status'     => 'Normal',
                                    'logged_in' => TRUE
                                                        );
                            $this->session->set_userdata($newdata);
                            redirect('solution');
         }
         
         if($this->Tionmodel->checklogin($username,$pass)=='Dev')
         {
          $newdata = array(
                                    'username'  => $username,
                                    'password'     => $pass,
                                    'status'     => 'Developer',
                                    'logged_in' => TRUE
                                                        );
                            $this->session->set_userdata($newdata);
                            redirect('solution');
         }
         
      }else{redirect('login');}
          //$this->load->view('home',$data);
}




}
?>
