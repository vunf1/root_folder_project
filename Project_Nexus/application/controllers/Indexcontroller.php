<?php

class IndexController extends CI_Controller{
    public function index(){
        
        $this->output->set_header('Access-Control-Allow-Origin: *');
        //$this->output->set_header('X-FRAME-OPTIONS: SAMEORIGIN');
        
        $this->load->view('index');
    } 
    public function requests(){
        
        
    $this->load->model('tionmodel');
    $data['request_results'] = $this->tionmodel->list_requests();
    
        $this->load->view('home_request',$data);
    } 
    public function create_newserial(){
        
        $this->load->database();
        $this->load->model('session01'); 
        $this->load->model('tionModel');
        $this->tionmodel->create_new_serial();
        return TRUE;
        
        
    } 
    public function revoke(){
         
        $Id=$this->input->post('Id');
        
        $this->load->database();
        $this->load->model('session01'); 
        $this->load->model('tionModel');
        $data=$this->tionmodel->revoke_serial($Id);
    echo json_encode($data);
        
            
        //};
    }  
    public function edit(){
        $this->load->model('tionModel');
        $re=$this->input->post('edit_id');
        $revo=$this->tionmodel->edit_serial($re);
       
            
        //};
    }  
    public function delete(){
        $this->load->model('tionModel');
        $delete=$this->input->post('delete_id');
        $revo=$this->tionmodel->delete_serial($delete);

       
            
        //};
    } 
   public function getvalue(){
       $this->load->database;
       $this->load->model('tionmodel');
       $query['records']=$this->tionmodel->get_serials();
       
   }
}
?>