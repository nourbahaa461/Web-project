<?php
  require_once(__ROOT__ . "Model/Model.php");
?>

<?php
class UserModel extends Model 
{
    private $id;
    private $username;
	private $password;
	private $created_at;
	private $type;

  function __construct($id,$username="",$password="",$created_at="",$type) 
  {
    $this->id = $id;
    if(""===$username)
    {
      $this->readUser($id);
    }else
    {
      $this->username = $username;
	  $this->password=$password;
	  $this->created_at=$created_at;
	  $this->type=$type;
    }
  }

  function getUserName() {
    return $this->username;
  }
  function setUserName($username) {
    return $this->username = $username;
  }
  
   function getPassword() {
    return $this->password;
  }
  function setPassword($password) {
    return $this->password = $password;
  }
    
    function getCreatedAt() {
    return $this->created_at;
  }
  function setCreatedAt($created_at) {
    return $this->created_at = $created_at;
  }
    
    function getType() {
    return $this->type;
  }
  function setType($type) {
    return $this->type = $type;
  }
 

  function getID() {
    return $this->id;
  }

  function readUser($id)
  {
    $sql = "SELECT * FROM users where ID=".$id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $db->fetchRow();
        $this->username = $row["username"];
		$this->password=$row["Password"];
		$this->created_at=$row["created_at"];
		$this->type=$row["type"];
    }
    else {
        $this->username = "";
		$this->password="";
		$this->created_at="";
		$this->type="";
    }
  }
	 
}