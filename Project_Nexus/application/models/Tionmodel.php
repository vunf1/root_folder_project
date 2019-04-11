<?php
class Tionmodel extends CI_Model{
    
    
public function userinfo($username)
{    
    $query = $this->db->select('*')->from('users')->where('id',$username)->get();
                    
                foreach ($query->result_array() as $row)
        {
                    echo json_encode($row);
        }
     /*if($query->num_rows()==1){
        
     //} */
}
  


public function chat_send($user,$text)
{
    $data = array(
            'user' => $user ,
            'texto'=>$text
);

if($this->db->insert('chat_log', $data)){

    return true;
    
}
    
    
}   



  
public function checklogin($username,$pwd)
{    
     $query=$this->db
             ->select('*')
             ->from('users')
             ->where('id',$username)
             ->where('password',sha1($pwd))->get();
     if($query->num_rows()==1){
         
        foreach ($query->result_array() as $row)
        {
            
        
            if($row['status']=="1"){
                $data= array(
                'log'=>'1');
            
            
                if($this->db->set('log','1')->where('id',$username)->update('users'))
                        {
                    

                    return 'okadmin';
                }
            
        }
        if($row['status']=="2"){
            
                $data= array(
                    'log'=>'1'
                );  
                    if($this->db->set('log','1')->where('id',$username)->update('users')){

                                return "okuser";
                                }
            
                                    }
            if($row['status']=="0"){
                $data= array(
                'log'=>'1');
            
            
                if($this->db->set('log','1')->where('id',$username)->update('users'))
                        {
                    

                    return 'Dev';
                }
            
        }
        }
    }
    else
    { return false; }
}





public function checklog() {
    
    $this->db->select('log');
    $this->db->from('users');
    $this->db->where('log','1');
    $fetch= $this->db->get();
    
    if($fetch->num_rows() == 1){
        
        return TRUE ;
        
    }else
    {
        return false;
    }
    
}
public function logout() {
    
    $query=$this->db
             ->select('*')->from('users')
             ->where('id',$this->session->userdata('username'))
            ->get();
    
    if($query->num_rows()==1){
        
        
                        $data=array(
                            'log'=>'0'
                        );
                        
       $this->db->from('users')->where('id',$this->session->userdata('username'))->update('users',$data);
    
        $this->session->sess_destroy();
        $newdata = array(
               'logged_in' => false
              );
                            $this->session->set_userdata($newdata);
                           
     //return true;
    
        
        
}}



    
public function fetchRowId($id) {
    $sol=$this->session->userdata('solution');
    
            $query = $this->db->query("SELECT * FROM ".$sol+"_serials WHERE Id ="+$id);
            return json_encode($query->result());
}   
    

public function get_requests()
{$sol=$this->session->userdata('solution');
    
      $query = $this->db->query("SELECT * FROM ".$sol."_requests");
      
     return json_encode($query->result());  
   
}public function get_requestsId($Id,$sol)
{
    
       $this->db->select('*');
                       $this->db->from($sol.'_requests');
                       $this->db->where('Id',$Id);
                    $query = $this->db->get();
                    return $query->result();
   
}



public function get_serials($id = NULL)
{
    $sol=$this->session->userdata('solution');
    if($id){
      $query = $this->db->query("SELECT * FROM ".$sol."_serials WHERE Id ="+$id);
     return json_encode($query->result());  
    }else
    
    //$this->db->get();

     $query = $this->db->query("SELECT * FROM ".$sol."_serials");
     return json_encode($query->result());
    
    
    
}

public function list_requests()
{
    $sol=$this->session->userdata('solution');

	$this->db->select('*');
 $this->db->from($sol.'_requests');
 $this->db->order_by('id', 'DESC');

 $query = $this->db->get();
 return $query->result();
}



public function create_new_serial()
{
    $sol=$this->session->userdata('solution');
    
    $this->load->helper('string');
$size8=random_string('alnum',8);
$size4=random_string('alnum',4);
$size4_2=random_string('alnum',4);
$size4_3=random_string('alnum',4);
$size12=random_string('alnum',12);
	//do {
		$serial=$size8."-".$size4."-".$size4_2."-".$size4_3."-".$size12;
		
	//$currentDate =  time();
        // $date = strtotime(date("Y-m-d H:i:s", $currentDate) . " +1 year");       
	//$expirationepoch = time() + (30 * 24 * 60 * 60);
	$expiration=date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
                //date('Y/m/d', $expirationepoch);date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + 365 day"));
                $periodms=60000;
	//,strtotime("+1 year -1 hour")$query_insert = "INSERT INTO Serials (serial,expirationdate,period,lictype,status) VALUES ('".$serial."','".$expirationepoch."','".$periodms."','NORMAL','2');";
    
        $data = array(
            'serial' => $serial ,
            'hwfingerprint'=>'',
            'expirationdate' => $expiration ,
             'period' => $periodms,
            'lictype' =>'NORMAL',
            'status'=>'0',
            'description'=>''
);

if($this->db->insert($sol.'_serials', $data)){

    return true;
    
}
       
        
        

}


public function edit($Id,$serial,$hwfinger,$expiration,$period,$description,$sol) 
	{

    $data= array(
        
        'serial'=>$serial,
        'hwfingerprint'=>$hwfinger,
        'expirationdate'=>$expiration,
        'period'=>$period,
        'description'=>$description
    );
    //$this->output->set_content_type('application/json');
    //$this->db->select('*');
  

$where = "id =".$Id;


$this->db->update($sol.'_serials', $data, $where); 
//return $sol;
   }
        
        
        
        
        
public function del($Id) {
    
    $sol=$this->session->userdata('solution');
$this->db->delete($sol.'_serials', array('Id' => $Id));
}

public function fetchSerialData($id = null) 
	{
        $sol=$this->session->userdata('solution');
		if($id) {
			$sql = "SELECT * FROM ".$sol."_serials WHERE Id = $id";
			$query = $this->db->query($sql, array($id));
			return json_encode($query->result_array());
		}else

		$sql = "SELECT * FROM ".$sol."_serials";
		$query = $this->db->query($sql);
		return json_encode($query->result_array());
	}     
     
       
      
        
       
public function fetchSerialDataID($id,$sol) 
	{
    
                       $this->db->select('*');
                       $this->db->from($sol.'_serials');
                       $this->db->where('Id',$id);
                    $query = $this->db->get();
                    return $query->result();
        }

public function remove($id = null) {
    $sol=$this->session->userdata('solution');
		if($id) {
			$sql = "DELETE FROM ".$sol."_serials WHERE Id = $id";
			$query = $this->db->query($sql, array($id));

			// ternary operator
			return json_encode(($query === true) ? true : false);			
		} // /if
	}






public function revoke_serial($re)
{$sol=$this->session->userdata('solution');
	
        $data = array('status' => '2', 'hwfingerprint' => '', 'description'=> NULL);
        
        $this->db->select('*');
        $this->db->from($sol.'_serials');
        $this->db->where('id',$re);
        $this->db->update($sol.'_serials', $data);
        
            
        
 }
 public function edit_serial($re)
{$sol=$this->session->userdata('solution');
	// -----------
        $data = array('status' => '2', 'hwfingerprint' => NULL);
 $this->db->from($sol.'_serials');
        $this->db->where('id',$re);
        $this->db->update($sol.'_serials', $data);
            redirect('HomeController/index');
            
        
 }
 public function delete_serial($id)
{
	$sol=$this->session->userdata('solution');
        //$data = array('status' => '2', 'hwfingerprint' => NULL);
$this->db->select('*');
        /*$this->db->where('id',$id);
        $this->db->delete('serials');
        $this->db->get();*/
        return $this->db->from($sol.'_serials')->where('id',$id)->delete('serials');
        
            redirect('HomeController/index');
 }
       
	






public function fetchSearch($Id) 
        { 
    $sol=$this->session->userdata('solution');
    $this->db->select('*');
     $this->db->or_like('Id',$Id);
     $this->db->or_like('serial',$Id);
     $this->db->or_like('hwfingerprint',$Id);
     $this->db->or_like('expirationdate',$Id);
     $this->db->or_like('period',$Id);
     $this->db->or_like('lictype',$Id);
     $this->db->or_like('status',$Id);
     $this->db->or_like('description',$Id);

$query  = $this->db->get($sol.'_serials');

			return json_encode($query->result_array());
/*$result = $query->result_array();
    
    
       return json_encode($result);*/
        
        
    
}

public function get_users() {
    
    
        $data=$this->db->select('*')->from('users')->get();
            return $data->result_array();
    /*$query="SELECT * FROM users";
    $dd= $this->db->query($query);
    return json_encode($dd->result_array());*/
}

  public function save_pw_user($id,$pass) {
      
     $data= array(
        'password'=>sha1($pass)
      
    );
      
         

$where =array('id' => $id); 

echo $this->db->update('users', $data, $where);
      
      
  }
  
  
  public function save_users($id,$email,$na,$ac_id) {
    //Dont Modify id(username) work as unique-> in future find other primary key / for modify go DB 
    
     $data= array(
         'id'=>$id,
        'email'=>$email,
        'name'=>$na
      
    );
      
         

$where =array('id' => $ac_id); 

$this->db->update('users', $data, $where);
    
/*$query="UPDATE users SET password='".$pass."',email='".$email."',name='".$na."',status='".$status."',log='".$log."' WHERE Id='".$id."'";
   $this->db->query($query);*/
}


 public function create_users($id,$pass,$na,$email,$status,$log) {
    //Dont Modify id(username)-> in future find other primary key / for modify go DB 
    $data= array(
        
       'id'=>$id,
        'password'=>sha1($pass),
        'name'=>$na,
        'email'=>$email,
        'status'=>$status,
        'log'=>$log
    );
        if($this->db->insert('users',$data))
        {
            return true;
            
        }else{
            return false;
            
            
        }
        
    /*$query="SELECT * FROM users";
    $dd= $this->db->query($query);
    return json_encode($dd->result_array());*/
}



 public function delete_users($id) {
     
    
  $this -> db -> where('id', $id);
  $this -> db -> delete('users');
     
     
     
 }

 public function create_solution_serial($solution_name) {
     
   
     
   /*  
     $tableCreate = 'CREATE TABLE '+$solution_name+'
(Id bigint(20),
serial varchar(36),
hwfingerprint varchar(36),
expirationdate date,
period int(11),
lictype varchar(10),
status varchar(1),
 varchar(255)
)';
    return json_decode($this->db->query($tableCreate));
      
     */
     
     
         
               
            $serial_collumn = array(
                        'Id' =>array('type' => 'bigint','constraint'=>10,
                                    'auto_increment' => TRUE,'unsigned'=>true)
                   ,'serial' => array('type' => 'VARCHAR',
                            'constraint'=>36)
                   ,'hwfingerprint' => array('type' => 'VARCHAR',
                            'constraint'=>36,'null' => true)
                   ,'expirationdate' => array('type' => 'date')
                   ,'period' => array('type' => 'int','constraint'=>11)
                   ,'lictype' => array('type' => 'varchar','constraint'=>10)
                   ,'status' => array('type' => 'varchar','constraint'=>1)
                   ,'description' => array('type' => 'varchar','constraint'=>255));
    $this->dbforge->add_field($serial_collumn);
    $this->dbforge->add_key('Id',TRUE);
 if($this->dbforge->create_table($solution_name.'_serials', TRUE)){
     
    return true;
}else{return false;}
    
    
    
 }
     
 
 
 public function create_solution_requests($solution_name) {
     
   
               
            $requests_fields = array('Id' => array('type' => 'bigint','constraint'=>20,'auto_increment' => TRUE,'unique' => TRUE),'URL' => array('type' => 'text'),'serial' => array('type' => 'VARCHAR','constraint'=>36),'hwfingerprint' => array('type' => 'varchar','constraint'=>64),'totalcdsburned' => array('type' => 'int','constraint'=>11,'null' => true),'date' => array('type' => 'datetime'),'type' => array('type' => 'varchar','constraint'=>20,'null' => true));
    $this->dbforge->add_field($requests_fields);
    $this->dbforge->add_key('Id',TRUE);
if($this->dbforge->create_table($solution_name.'_requests', TRUE)){
    
    return true;
}else{return false;}
    
           
 }


 public function create_solution($solution_name) {
    $check_serial_cr= $this->create_solution_serial($solution_name);
    $check_requests_cr= $this->create_solution_requests($solution_name);
   // $check_requests_cr= $this->create_requests_serial($solution_name);
     
     // serial and requests
if($check_serial_cr ||$check_requests_cr == TRUE){
    
    return true;
    
}else{return false;}

 }
 
 
 
 
 public function check_rename_solution_serial($solution_name,$nsolution_name) {
     
     if($this->dbforge->rename_table($solution_name.'_serials', $nsolution_name.'_serials')== true){
         
         return true;
     }else{return false;}
     
 }
 
 public function check_rename_solution_requests($solution_name,$nsolution_name) {
     
      if($this->dbforge->rename_table($solution_name.'_requests', $nsolution_name.'_requests')== true){
         
         return true;
     }else{return false;}
     
 }
 
 
 
 
 
 
 public function rename_solution($solution_name,$nsolution_name) {
    $check_serial_rn= $this->check_rename_solution_serial($solution_name,$nsolution_name);
    $check_requests_rn= $this->check_rename_solution_requests($solution_name,$nsolution_name);
   // $check_requests_cr= $this->create_requests_serial($solution_name);
     
     // serial and requests
if($check_serial_rn ||$check_requests_rn == TRUE){
    
    return true;
    
}else{return false;}

 }
 
 
 
 
 
 
  public function check_delete_solution_serial($solution_name) {
     
     if($this->dbforge->drop_table($solution_name.'_serials',TRUE))
     {
         
         return true;
     }else{return false;}
     
 }
 
 public function check_delete_solution_requests($solution_name) {
     
      if($this->dbforge->drop_table($solution_name.'_requests',TRUE)){
         
         return true;
     }else{return false;}
     
 }
 
 
 
 
 
 
 public function delete_solution($solution_name) {
    $check_serial_dt= $this->check_delete_solution_serial($solution_name);
    $check_requests_dt= $this->check_delete_solution_requests($solution_name);
   // $check_requests_cr= $this->create_requests_serial($solution_name);
     
     // serial and requests
if($check_serial_dt ||$check_requests_dt == TRUE){
    
    return true;
    
}else{return false;}

 }
 
 
 
 

public function get_tables_name() { 
    
    
    
    $ok=$this->db->query('show tables like "%_serials"');
    echo json_encode($ok->result_array());


 }
 
 
 
 
 
 
public function save_req($Id,$url,$serial,$hwfingerprint,$totalcdsburned,$date,$type,$sol) { 
    
     
$data= array(
         'Id'=>$Id,
        'URL'=>$url,
        'serial'=>$serial,
        'hwfingerprint'=>$hwfingerprint,
        'totalcdsburned'=>$totalcdsburned,
        'date'=>$date,
        'type'=>$type);
      
      
         

$where = "id =".$Id;


return $this->db->update($sol.'_requests', $data, $where); 
    
    
    
}

 
public function del_req($Id,$sol) {
    
    
  $this->db->where('Id', $Id);
  $this->db->delete($sol.'_requests');
    
    
    
}
    
     
 public function update_status($id,$sel) {
     
         
$data= array(
         'status'=>$sel);
      
      
         

$where = "id =".$id;


if($this->db->update('users', $data, $where)){
    
    return 1;
} else{return 0;}
    
     
     
     
 }
public function update_serial_status($id,$sel,$sol){
     
         
$data= array(
         'status'=>$sel);
      
      
         

$where = "id =".$id;


if($this->db->update($sol.'_serials', $data, $where)){
    
    return 1;
} else{return 0;}
    
     
     
     
 }
public function update_serial_lic($id,$sel,$sol){
     
         
$data= array(
         'lictype'=>$sel);
      
      
         

$where = "id =".$id;


if($this->db->update($sol.'_serials', $data, $where)){
    
    return 1;
} else{return 0;}
    
     
     
     
 }



}
 
 
 
 
 
 


?>
