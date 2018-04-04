<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class session01 extends CI_Model{
   public function index(){
       
        parent::__construct(); 
        //$this->load->model('tionModel');
        //$this->tionsModel->load->bfunction;
$newdata = array(
        'databaseConnection'  => 'connect_db("localhost","root","")'
);

$this->session->set_userdata($newdata);
    $this->load->library('table');
    
    $this->load->tionModel();
    $databaseConnection=connect_db("localhost","root","Mysql#16!");
    
    
       
       

}
}
?>