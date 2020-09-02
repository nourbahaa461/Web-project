<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class message extends Model {
    private $id;
    private $name;
    private $phone;
	private $message;

  function __construct($id,$name="",$phone="",$message="") 
  {
    $this->id = $id;
    if(""===$name){
      $this->readmessage($id);
    }else{
      $this->name = $name;
      $this->phone = $phone;
	  $this->message = $message;

    }
  }

  function getName() {
    return $this->name;
  }

  function setName($name) {
    return $this->name = $name;
  }

  function getPhone() {
    return $this->phone;
  }
  function setPhone($phone) {
    return $this->phone = $phone;
  }
  
   function getMessage() {
    return $this->message;
  }
  function setMessage($message) {
    return $this->message = $message;
  }

  function getID() {
    return $this->id;
  }

  function readmessage($id){
    $sql = "SELECT * FROM messages where id=".$id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1){
        $row = $dbh->fetchRow();
        $this->name = $row["name"];
        $this->username = $row["phone"];
	    $this->message = $row["message"];

    }
    else {
        $this->name = "";
        $this->phone = "";
		$this->message = "";

    }
    //$this->conn->close();
  }
}