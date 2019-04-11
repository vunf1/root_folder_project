<?php
Class Solutioncontroller extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        $this->output->set_header('X-FRAME-OPTIONS: SAMEORIGIN');
       
    
        $this->load->view('loadscripts');
        $this->load->model('Tionmodel');
        
        $this->load->helper(array('form', 'url','html'));
    
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->load->database();
        $this->load->dbforge();
        
        //Load them in the constructor
        
        
    }
public function userinfo() {
    
    $this->load->model('Tionmodel');
    $id=$this->input->post('id');
   //$this->Tionmodel->userinfo($id);
    
    $dd=$this->Tionmodel->userinfo($id);
    return $dd;
    
}


public function chat() {
    $this->load->view('loadscripts');
    $this->load->view('chat_box');
    }


public function chat_send() {
    $user="Client";
    $text=$this->input->post('text_chat');
    $this->Tionmodel->chat_send($user,$text);
    
}
    
    
    






public function index() {

    
    if($this->session->userdata('logged_in')==true){
        $this->load->view('solution');
        //$this->load->view('footer');
    }else{redirect('LoginController/index');}

/*

*/

}



      
    public function logout() {
            
            $dd=$this->Tionmodel->logout();
        } 
        
        

    public function muser(){
    
        $this->load->view('loadscripts');
        
        $c= json_encode($this->Tionmodel->get_users());
        $data=array('lotsofdata'=>$c);
        //var_dump($data);
        //$this->users->get();
        
    
        $this->load->view('manage_users_html',$data); 
    }
    public function save_pw_user(){
        
               $id=$this->input->post('id');
               $n_pw=$this->input->post('n_pw');
               
       $this->Tionmodel->save_pw_user($id,$n_pw);
               
        
    }
    public function muser_save(){
        $ac_id=$this->input->post('ac_id');
               $id=$this->input->post('news_id');
               $email=$this->input->post('news_email');
               $name=$this->input->post('news_name');
       $this->Tionmodel->save_users($id,$email,$name,$ac_id);
      redirect('users');
       
        
    
    }
     public function get_table_name(){
        
        //$this->load->view('loadscripts');
        
        
        $data["table_name"]=$this->get_tables();
        $this->load->view('solution',$data); 
        
        
    }
    
    
    
    
    
    
    
    
    public function solution_management(){
        
        $this->load->view('loadscripts');
        
        
        $this->load->view('create_solution'); 
        
        
        
    }
     public function solution_create(){
        //555555555555555
         $solution_name=$this->input->post('Id');
        
        
        echo $this->Tionmodel->create_solution($solution_name);
        
        
    }
    
    
    
    
    
    public function solution_rename(){
        
         $solution_name=$this->input->post('Id');
         $nsolution_name=$this->input->post('nId');
        
        echo $this->Tionmodel->rename_solution($solution_name,$nsolution_name);
    
        
        
    }
    
    
    
    
    public function solution_delete(){
        //5555555
        
         $solution_name=$this->input->post('Id');
        
        echo $this->Tionmodel->delete_solution($solution_name);
      
        
        
    }
    
    
    public function get_solution_name(){
        
            
        $dat=$this->Tionmodel->get_tables_name();
        $da= json_encode($dat);
        print_r($da);
    }
    
    public function Load_dashboard_solution(){
        
         
        $this->load->view('loadscripts');
       $this->load->view('load_solution');
          
            
        
    }
    
    public function load_solution(){
        
        $this->output->set_header('Access-Control-Allow-Origin: *');
         $id=$this->input->post('Id');
        
        
        $newdata = array(
                                    'solution'     => $id,
                                                        );
                            $this->session->set_userdata($newdata);
        
            echo true;
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    public function muser_create(){
        
               $id=$this->input->post('id');
               $password=$this->input->post('password');
               $email=$this->input->post('email');
               $name=$this->input->post('name');
               $status=$this->input->post('status');
               $log=$this->input->post('log');
               
        
        $this->Tionmodel->create_users($id,$password,$email,$name,$status,$log);
           
        
    
    }
    public function muser_delete(){
        
        $id=$this->input->post('id');       
        
        $this->Tionmodel->delete_users($id);
    
    }
    public function create_tb(){
        
               $solution_name=$this->input->post('Id');
               
              echo $this->Tionmodel->create_solution($solution_name);
           
        
    
    }
    
    
    public function muser_status_update(){
        
               $id=$this->input->post('id');
               $select=$this->input->post('select');
               //var_dump($id,$select);
             return $this->Tionmodel->update_status($id,$select);
           
        
    }
    public function serial_status_update(){
        
               $id=$this->input->post('id');
               $select=$this->input->post('select');
               $sol=$this->input->post('sol');
               
             return $this->Tionmodel->update_serial_status($id,$select,$sol);
           
        
    }
    public function serial_lictype_update(){
        
               $id=$this->input->post('id');
               $select=$this->input->post('select');
               $sol=$this->input->post('sol');
               
             return $this->Tionmodel->update_serial_lic($id,$select,$sol);
           
        
    }
    
}
