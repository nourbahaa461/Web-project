<?php

require_once(__ROOT__ . "Controller/Controller.php");
class UserController extends Controller
{
	public function insert() 
    {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$this->model->insertUser($username,$password);
        header("location: login.php");
	}

	public function edit($password, $confirm_password) 
    {
        if($password==$confirm_password)
		$this->model->reset_password($_SESSION['id'],$password);
        header("location: index.php");
	}
	
	public function deleteUser()
    {
        $id = $_REQUEST['id'];
		$this->model->deleteUser($id);
	}
    
    public function deleteAdmin()
    {
        $id = $_REQUEST['id'];
		$this->model->deleteAdmin($id);
	}
    
    public function login ($username, $password)
    {
        $row= $this->model->login($username,$password);
//        $_SESSION["id"]=$row["id"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["id"]=$row["id"];
        if($row["type"]==0)
        {
            header("location: index.php");
        }
        else header("location: admin.php");
//        header("location: index.php");
    }
    
    
    
    
}
?>