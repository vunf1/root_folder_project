<?php

class IndexController extends CI_Controller{
    
 function __construct() {
    parent::__construct();
    $this->output->set_header('Access-Control-Allow-Origin: *');
    //$this->output->set_header('X-FRAME-OPTIONS: SAMEORIGIN');
    $this->load->database();
    
    $this->load->model('Tionmodel');
    

    
}
    public function index(){
        $this->load->view('index');
    } 

    public function requests(){
        
        $data['request_results'] = $this->Tionmodel->list_requests();
    
        $this->load->view('home_request',$data);
    } 

    public function create_newserial(){
        
        $this->Tionmodel->create_new_serial();
        return TRUE;
        
        
    } 
    public function revoke(){
         
        $Id=$this->input->post('Id');
        
        $data=$this->Tionmodel->revoke_serial($Id);
        echo json_encode($data);
        
            
        //};
    }  
    public function edit(){
        
        $re=$this->input->post('edit_id');
        $revo=$this->Tionmodel->edit_serial($re);
       
            
        //};
    }  
    public function delete(){
        
        $delete=$this->input->post('delete_id');
        $revo=$this->Tionmodel->delete_serial($delete);

       
            
        //};
    } 
   public function getvalue(){
       
       $query['records']=$this->Tionmodel->get_serials();
       
   }
}
?>