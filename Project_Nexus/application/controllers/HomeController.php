<?php

        
class Homecontroller extends CI_Controller{
    
    

    function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        //$this->output->set_header('X-FRAME-OPTIONS: SAMEORIGIN');
       
        $this->load->model('tionmodel');
         $this->load->database();
        //Load them in the constructor
        
        
    }
    public function Index(){
        
        
        
        $newdata = array(
            'type'  => 'serial'
            $this->session->set_userdata($newdata);

            $this->load->view('loadscripts');

            if($this->session->userdata('logged_in')== true){
                $this->load->view('home');
            }else{redirect('Logincontroller/index');}
  
    
    }

    public function logout() {
        
        $dd=$this->tionmodel->logout();
        echo $dd;
    }
        
 
    
    
    public function indexedit(){
        
        $sol=  $this->session->userdata('solution');
        //$this->output->set_content_type('application/json');
        $Id=$this->input->post('Id');
        $serial=$this->input->post('serial');
        $hwfinger=$this->input->post('hwfingerprint');
        $expiration=$this->input->post('expirationdate');
        $period=$this->input->post('period');
        
        $description=$this->input->post('description');
        
        
        
        $this->load->model('tionModel');
        $this->tionmodel->edit($Id,$serial,$hwfinger,$expiration,$period,$description,$sol);
        
    } 
    public function indexdel(){
        
        
        $Id=$this->input->post('Id');
        
        echo $this->tionmodel->del($Id);
        
    } 
    
    public function indexx(){
        
        $Id=$this->input->post('Id');
        $newdata = array(
                                    'type'  => 'serial'
                                                        );
                            $this->session->set_userdata($newdata);
        
        $data=$this->tionmodel->get_serials();
         echo json_encode($data);
        
         
// 
        
    } 
    public function indexId(){
        $Id=$this->input->post('Id');
        $ac_solution=$this->input->post('Sol');
               
        $this->load->view('loadscripts');
       
       $this->tionmodel->fetchSerialDataID($Id,$ac_solution);

       $data['datas']=$this->tionmodel->fetchSerialDataID($Id,$ac_solution);
   // 
        $this->load->view('modalhtml',$data);
    
    //echo json_encode($data);
        
         
// 
        
    } 
    
    
     public function indexrequestId(){
        
        
        $Id=$this->input->post('Id');
        
    
               $ac_solution=$this->input->post('Sol');
               $this->tionmodel->get_requestsId($Id,$ac_solution);
       $data['datas']=$this->tionmodel->get_requestsId($Id,$ac_solution);
   // 
        $this->load->view('modalrequestshtml',$data);
      
    
        
    }
    
    
    
    
    
    
    
    public function indexsearch(){
        
        
        $Id=$this->input->post('Id');
       
        
    $data=$this->tionmodel->fetchSearch($Id);
    echo json_encode($data);
    
        
         
// 
        
    } 
    
    public function indexrevoke(){
        
        
        $Id=$this->input->post('Id');
        
        $this->load->database();
        
        $this->load->model('tionModel');
        $data=$this->tionmodel->revoke_serial($Id);
    echo json_encode($data);
    
        
         
// 
        
    } 
     public function indexrequests(){
        
        $newdata = array(
                                    'type'  => 'requests'
                                                        );
                            $this->session->set_userdata($newdata);
        $data=$this->tionmodel->get_requests();
    echo json_encode($data);
    
        
         
// 
        
    }  
    
    public function create_newserial(){
        
        echo $this->tionmodel->create_new_serial();
        
        
        
    }  
    
    
    
    
    
     public function save_requests(){
        
        
        $Id=$this->input->post('Id');
        $url=$this->input->post('url');
        $serial=$this->input->post('serial');
        $hwfingerprint=$this->input->post('hwfingerprint');
        $totalcdsburned=$this->input->post('totalcdsburned');
        $date=$this->input->post('date');
        $type=$this->input->post('type');
        $sol=$this->input->post('sol');
       
        
    $this->tionmodel->save_req($Id,$url,$serial,$hwfingerprint,$totalcdsburned,$date,$type,$sol);
    
    
        
         
// 
        
    } 
   
    public function del_requests(){
        
        $Id=$this->input->post('Id');
        $sol=$this->input->post('sol');
        $this->tionmodel->del_req($Id,$sol);
        
        
        
    }  
    
    
    
}

  




