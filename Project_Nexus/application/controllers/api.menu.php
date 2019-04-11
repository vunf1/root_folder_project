<?php
$this->model->tionmodel;
$this->load->db;

Class apmenu {
  public function apimenu(){
   
// create our object
$requestObj = new Controller();
// retrieve the request url path
$request = $requestObj->getRequest();

// retrieve data sent with the request if any
$data = $requestObj->getData();

// run through your application methods making use of $data and $request easily where needed

//Only accept POST REQUEST, DENIED ALL

switch( $requestObj->getMethod() )
{
    case 'get':
		Controller::respond( 400 ,"Method GET not Available");
		header("Location: index.php");
        break;
    case 'post':
		if (strcmp($_SERVER['REQUEST_URI'],"/validate")==0)
		{
			if (isset($data["hwfingerprint"]) && isset($data["serial"]))
			{
				Controller::validate($data,$databaseConnection);
			}
			else
			{
				Controller::respond( 400 ,"post validate no hw or serial");
			}
		}
		elseif (strcmp($_SERVER['REQUEST_URI'],"/revoke")==0)
		{
			if (isset($data["hwfingerprint"]) && isset($data["serial"]))
			{
				Controller::revoke($data,$databaseConnection);
			}
			else
			{
				Controller::respond( 400 ,"post revoke no hw or serial");
			}
		}
		break;
	case 'put':
		Controller::respond( 400 ,"Method PUT not Available");
		break;
	case 'delete':
		Controller::respond( 400 ,"Method DELETE not Available");
		break;
	default:
		Controller::respond( 400 ,"Method Undefined and not Available");
        break;
}

exit;   
  }
}
