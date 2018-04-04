<?php

Class validateModel extends CI_Model{
    
       function request($data,$url,$sol)
{

            date_default_timezone_set('UTC');
           $time=date("Y-m-d H:i:s"); 
         $data= array(
        
        'URL'=>$url,
        'serial'=>$data['serial'],
        'hwfingerprint'=>$data['hwfingerprint'],
        'totalcdsburned'=>$data['totalcdsburned'],
        'date'=>$time,
        'type'=>$data['type']
               );
              // var_dump($data);
     $this->db->insert($sol.'_requests',$data);
        
           
           
           
           
           
           
           
           
       }
    
       function mainlog($message_to_log)
{
           
           
           $dat = date("Y-m-d H:i:s", time());
           $data=$dat.' - '.$message_to_log."\n";
           
           
            if ( ! write_file(base_url('resources').'/mainlog', $data))
            {
                 return 0 ;
            }
            else
            {
                 return 1 ;
            }

} 
    
    
    
	function check_serial($serial,$url)
        {
            
            
            
           $ds= $this->db->select('*')
                        ->from($url.'_serials')
                        ->where('serial',$serial['serial'])
                        ->get();
        
           
           
        
       
        //$seriall= $serial['serial'];
         //$hwfinger=$serial['hwfingerprint'];
         //var_dump($serial);
        if($ds){
            return $ds->result_array();
        
   
    }else{
        //serial dont exist
        return $ds=0;
                         } 
}


public static function respond($status = 400, $body = '', $content_type = 'application/json')
	{
		ob_clean();
		ob_start();
		// build the status header
		$httpCode = 'HTTP/1.1 ' . $status . ' ' . self::getHttpCode($status);
		// set the status header
		header($httpCode);
		// set the content type
		header('Content-type: ' . $content_type . '; charset=utf-8');
		// enable CORS (optional)
		header("Access-Control-Allow-Origin: *");
		// alternatively you could replace * with a allowed domain gained from your authentication step and passed to this method as a forth property.
		//header("Access-Control-Allow-Origin: ".$allowed_domains);
     
		// pages with body are easy
		if($body != '')
		{
			echo($body);
		}
		else
		{
			// servers don't always have a signature turned on (this is an apache directive "ServerSignature On")
			$sign = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];
         
			// optional body messages
			$message = '';
			switch($status)
			{
				case 400:
				$message = 'The API could not understand your request. Please check the documentation to ensure your requests are well formed. '.$body;
				break;
				case 401:
				$message = 'You must be authorized to view this page.';
				break;
				case 404:
				$message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
				break;
				// add as many custom messaged as you have defined Http codes in getHttpCode()
			}
			// this should be a template
			$body = ' '. $status . ' ' . self::getHttpCode($status) . '' . $message . '' . $sign . ''; 
			echo $body; 
			exit; 
		} 
	}
     

function send_response($status,$status_message,$body,$url)
{
	ob_clean();
	ob_start();
	$this->output->get_header("HTTP/1.1 ".$status." ".$status_message);
	$this->output->get_header('Content-Type: application/json');
	echo $body;
        
       
        
        
}


	public function validate($data,$url)
	{
            
            $row=$this->check_serial($data,$url);
            
            
            //var_dump($date = new Datetime('now')); // Take date with object very usefull
            //var_dump($date->date);
            foreach ($row as $ret)
            {
                $datetime1= new DateTime($ret['expirationdate']);
                $datetime2= new DateTime('now');
                $diff=date_diff($datetime1,$datetime2)->days;
                // $datetime1->diff($datetime2);    var_dump();             
              
                
                
                
                
      /*          var_dump($row);
            $datetime1 = date_create($ret['expirationdate'], $object);
$datetime2 =new datetime('now');
$interval = date_diff($datetime2, $datetime1);
var_dump($interval->format('%R%d days'));
var_dump(time());
*/

            //var_dump($ret['expirationdate'] /*& date("Ymd")*/ );
            if($ret==0)
		{
                
			$resp["errorcode"]="100";
			$resp["description"]="Wrong Serial";
			$this->send_response(400,'Bad Request',json_encode($resp));
			//$this->mainlog("Wrong Serial Post: Hwfingerprint: ".$data["hwfingerprint"]." and Serial: ".$data["serial"]);
		}
		else
		{
                    
                    
                    
			if($diff>=1)
			{
				if(strcmp($ret["status"],"0")==0)
				{
					if($this->register_serial($ret,$data["serial"],$data["hwfingerprint"],$url)==TRUE){
                                            
                                        
					$resp["Result"]='REGISTER SUCCESSFULLY';    
					$resp["hwfingerprint"]=$data["hwfingerprint"];
					$resp["serial"]=$ret["serial"];
					$resp["expirationtimestamp"]=$ret["expirationdate"];
					$resp["nextverificationtimestamp"]=$ret["period"];
					$resp["licensetype"]=$ret["lictype"];
					//$this->mainlog("New serial registered:".$ret["serial"]." with fingerprint: ".$data["hwfingerprint"]);
					$this->send_response(200,'OK',json_encode($resp));
                                        }else{
                                           $resp["Result"]='ERROR - CANT REGIST THAT SERIAL W/THAT HWFINGERPRINT';    
					$resp["hwfingerprint"]=$data["hwfingerprint"];
					$resp["serial"]=$ret["serial"];
					$resp["expirationtimestamp"]=$ret["expirationdate"];
					$resp["nextverificationtimestamp"]=$ret["period"];
					$resp["licensetype"]=$ret["lictype"];
					//$this->mainlog("New serial registered:".$ret["serial"]." with fingerprint: ".$data["hwfingerprint"]);
					$this->send_response(400,'Bad Request',json_encode($resp)); 
                                            
                                        }
                                            
                                            
                                            
                                        
				}
				if(strcmp($ret["status"],"1")==0)
				{
					if($this->check_hwfingerprint($ret["serial"],$data["hwfingerprint"],$url)==1)
					{
                                                $resp["ID"]=$ret["Id"];
						$resp["hwfingerprint"]=$data["hwfingerprint"];
						$resp["DB - hwfingerprint"]=$ret["hwfingerprint"];
						$resp["serial"]=$ret["serial"];
						$resp["expirationtimestamp"]=$ret["expirationdate"];
						$resp["nextverificationtimestamp"]=$ret["period"];
						$resp["licensetype"]=$ret["lictype"];
						$this->send_response(200,"OK",json_encode($resp));
						//$this->mainlog("Right Serial:".$ret["serial"]);
					}
					else
					{
						$resp["errorcode"]="100";
						$resp["description"]="Registered Serial, Wrong HWfingerprint";
						$this->send_response(400,"Bad Request",json_encode($resp));
						//mainlog("Wrong Serial:".$ret["serial"]);
					}
				}
				if(strcmp($ret["status"],"2")==0)
				{
                                    
                                    
					if($this->register_serial($ret,$data["serial"],$data["hwfingerprint"],$url)==TRUE){
					$resp["Result"]='Serial Register with new Hwfingerprint';                                            
					$resp["hwfingerprint"]=$data["hwfingerprint"];
					$resp["serial"]=$ret["serial"];
					$resp["expirationtimestamp"]=$ret["expirationdate"];
					$resp["nextverificationtimestamp"]=$ret["period"];
					$resp["licensetype"]=$ret["lictype"];
					$this->send_response(200,"OK",json_encode($resp));
					//$this->mainlog("Registered revoked Serial:".$ret["serial"]);
                                            
                                        }else{
                                            $resp["Result"]='ERROR - While Register with new Hwfingerprint'; 
                                            $resp["Details"]='Possible Wrong Serial';                                              
					$resp["hwfingerprint"]=$data["hwfingerprint"];
					$resp["serial"]=$ret["serial"];
					$resp["expirationtimestamp"]=$ret["expirationdate"];
					$resp["nextverificationtimestamp"]=$ret["period"];
					$resp["licensetype"]=$ret["lictype"];
					$this->send_response(200,"OK",json_encode($resp));
					//$this->mainlog("Registered revoked Serial:".$ret["serial"]);
                                            
                                        }
				}
				if(strcmp($ret["status"],"3")==0)
				{
					$resp["errorcode"]="100";
					$resp["description"]="This Serial was removed";
					$this->send_response(400,"Bad Request",json_encode($resp));
					//$this->mainlog("Serial Removed:".$ret["serial"]);
				}
			}
			else
			{
                            
                            if($this->remove_serial($ret,$url)==TRUE){
                                    
				$resp["Procced to "]="Remove Hwfingerprint";
                                }
				$resp["errorcode"]="100";
				$resp["description"]="Time is up! - EXPIRED - ";
				$this->send_response(400,"Bad Request",json_encode($resp));
				//mainlog("Serial out of time:".$ret["serial"]);
			}
		}
            
           
        }    
    
} 


function register_serial($ret,$serial,$hwfingerprint,$url)
{
    
    $query_update = "UPDATE ".$url."_serials SET status='1',hwfingerprint='".$hwfingerprint."'  WHERE serial='".$serial."' and (status='0' OR status='2') ;";
          
        if($this->db->query($query_update)){
            return TRUE;
        }else{return FALSE;}
}


function check_hwfingerprint ($serial,$hwfingerprint,$url)
{
        
        $fecth=$this->db->select('*')
                ->from($url.'_serials')
                ->where('serial',$serial)
                ->get();
        
        foreach($fecth->result_array() as $f){
            
            
        if($f['hwfingerprint'] == ''){
            
            if($f['hwfingerprint'] != $hwfingerprint){
            
        
                     return 1;
        
            }else
                {
                return 0;
                }
          
         }else{return 0;}
            
            
        }
	
        
        
            
            
}



function revoke ($data,$url)
{
    
        $rets=$this->check_serial_revoke($data['serial'],$data['hwfingerprint'],$url);
    
    foreach ($rets as $ret ) {
                
                $datetime1= new DateTime($ret['expirationdate']);
                $datetime2= new DateTime('now');
                $diff=date_diff($datetime1,$datetime2)->days;
                
		if($ret==0)
		{
			$resp["errorcode"]="100";
			$resp["description"]="License revoking not accepted";
			$resp["details"]="It's possible that serial w/that Hwfingerprint dont exist in DB";
			$this->send_response(400,'Bad Request',json_encode($resp));
			//mainlog("Wrong Serial Post: Hwfingerprint: ".$data["hwfingerprint"]." and Serial: ".$data["serial"]);
		}
		else
		{
			if($diff>=1)
			{
				if($this->revoke_serial($data,$url)==TRUE){
                                  
				$resp["Status"]='Revoked';
				$resp["hwfingerprint"]=$data["hwfingerprint"];
				$resp["serial"]=$data["serial"];
				$this->send_response(200,'OK',json_encode($resp));
			  
                                }else{$resp["Possible_Error"]='Serial Already Revoked';
				$resp["Stun_In"]='Revoke_serial';
				$this->send_response(400,'OK',json_encode($resp));}
                                
                                }
			else 
			{
				if($this->remove_serial($ret,$url)==TRUE){
                                    
				$resp["Proceed to "]="Remove Hwfingerprint";
                                }
				$resp["errorcode"]="100";
				$resp["description"]="Time is up! - EXPIRED - ";
				$this->send_response(400,"Bad Request",json_encode($resp));
				//mainlog("Serial out of time:".$ret["serial"]);
			}
                }
    }
}



function check_serial_revoke($serial,$hwfinger,$url)
{
    
	$query_check_serial = "SELECT * FROM ".$url."_serials WHERE serial='".$serial."' AND hwfingerprint='".$hwfinger."' ;";
	
        $dd=$this->db->query($query_check_serial);
        
        if($dd){
            
            return $dd->result_array();
        
        }else{
            return 0;
        }
        
}
    
function revoke_serial($data,$url)
{
	$query_update = "UPDATE ".$url."_serials SET status='2', hwfingerprint=''  WHERE serial='".$data['serial']."' and hwfingerprint='".$data['hwfingerprint']."' ;";
	
        $dd=$this->db->query($query_update);
        if($dd){
            
            return TRUE;
        
        }else{return FALSE;}
        
	
}


function remove_serial($data,$url)
{
	$query_update = "UPDATE ".$url."_serials SET status='3'  WHERE serial='".$data['serial']."' and hwfingerprint='".$data['hwfingerprint']."' ;";

        $dd=$this->db->query($query_update);
        if($dd){
            
            return TRUE;
        
        }else{return FALSE;}

}




function url_routes_av($url){
    
    //var_dump($url);
   $ok=$this->db->query('show tables  like "%_serials"');
    
    // return $ok->result_array();
    $kk=$ok->result_array();
   $num_of_table= count($ok->result_array());
  // var_dump($num_of_table);
   for ($i = 0; $i < $num_of_table; $i++) {
            foreach ($kk[$i] as $row )
             {   
                if(strcmp(strstr($row,'_', true),$url)==0)
				{
                                    return true;
                                }


             }
    
    }
    
    
    
}

function url_routes_av2($url){
    
    //var_dump($url);
   $ok=$this->db->query('show tables  like "%_serials"');
    
    // return $ok->result_array();
    $kk=$ok->result_array();
   $num_of_table= count($ok->result_array());
  // var_dump($num_of_table);
   for ($i = 0; $i < $num_of_table; $i++) {
            foreach ($kk[$i] as $row )
             {   
                if(strcmp(strstr($row,'_', true),$url)==0)
				{
                                    return strstr($row,'_', true);
                                }


             }
    
    }
    
    
    
}




    
}
