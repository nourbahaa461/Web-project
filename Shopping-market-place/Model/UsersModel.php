<?php
require_once(__ROOT__ . "Model/Model.php");
require_once(__ROOT__ . "Model/UserModel.php");

class UsersModel extends Model 
{
	public $users;
    public $userss;
    private $dbh;
	function __construct() 
    {
		$this->fillArray();
        $this->fillArrayAdmin();
	}
    
    function fillArrayAdmin() {
		$this->userss = array();
		$this->dbh = $this->connect();
		$result = $this->readUsers2();
		while ($row = $result->fetch_assoc()) 
        {
			array_push($this->userss, new UserModel($row["id"],$row["username"],$row["password"],$row["created_at"],$row["type"]));
		}
	}

	function fillArray() {
		$this->users = array();
		$this->dbh = $this->connect();
		$result = $this->readUsers();
		while ($row = $result->fetch_assoc()) 
        {
			array_push($this->users, new UserModel($row["id"],$row["username"],$row["password"],$row["created_at"],$row["type"]));
		}
	}

	function getUsers() {
		return $this->users;
	}
    function getUserss() {
		return $this->userss;
	}

	function readUsers(){
		$sql = "SELECT * FROM users where type=0 "; //to get all users only

		$result = $this->dbh->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else 
        {
			return false;
		}
        
	}
    
    function readUsers2()
    {
		$sql = "SELECT * FROM users where type=1 "; //to get all users only

		$result = $this->dbh->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else 
        {
			return false;
		}
    }

	function insertUser($username, $password)
    {
        $sql = "INSERT INTO users (username, password,type) VALUES ('$username','$password',0)";
		if($this->dbh->query($sql) === true)
        {
			//echo "Records inserted successfully.";
            header("location:../View/userss.php");
			$this->fillArray();
		} 
		else
        {
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
    
    function deleteUser($id)
  {
    
    $sql = "DELETE FROM users 
            WHERE id=$id";

    if($this->dbh->query($sql) === true){
        //echo "user deleted successfully.";
        header("location:../View/userss.php");
        $this->fillArray();
    } else{
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
  }
    
    function deleteAdmin($id)
  {
    
    $sql = "DELETE FROM users 
            WHERE id=$id";

    if($this->dbh->query($sql) === true){
        //echo "user deleted successfully.";
        header("location:../View/Admins.php");
        $this->fillArrayAdmin();
    } else{
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
  }
 
    function reset_password($id,$password)
    {
        $sql="UPDATE `users` SET `password`='$password' WHERE id=$id";
        $dbh = new Dbh();
       $dbh->query($sql);
        
    }
    function login($username, $password){
	$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
        echo $sql;
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
        return $row;
		} 
//		else{
//			echo "ERROR: Could not able to execute $sql. " . $conn->error;
//		}

    }
    
}
?>
