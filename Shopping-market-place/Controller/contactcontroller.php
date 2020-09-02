<?php

  require_once(__ROOT__ . "controller/Controller.php");

class contactcontroller extends Controller
{
    public function insert() 
    {
       
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];

      
        if(!preg_match( '/^[0-9]+$/', $name) && is_numeric($phone) && !empty($name) && !empty($phone) && !empty($message) && strlen($phone)==11 && ($phone)>=0)
         {
              $this->model->insertmessage($name,$phone,$message);
        }else
         {
           // Problem: please check your inputs
             echo 'Problem: please check your inputs';
        }
        
    }
	
	 public function delete()
    {
      $id = $_REQUEST['id'];
      $this->model->deletemessage($id); 
    }

  }
?>
