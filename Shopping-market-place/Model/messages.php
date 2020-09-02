<?php
  require_once(__ROOT__ . "model/Model.php");
  require_once(__ROOT__ . "model/message.php");
?>

<?php
class messages extends Model {
    public $messages;
    private $dbh;
  function __construct() {
      $this->fillArray();
  }

  function fillArray() {
    $this->messages = array();
    $this->dbh = $this->connect();
    $result = $this->readmessages();
    while ($row = $result->fetch_assoc()) {
     array_push($this->messages, new message($row["id"],$row["name"],$row["phone"],$row["message"]));
    }
    
  }

  function getmessages() {
    return $this->messages;
  }

  function readmessages(){
    $sql = "SELECT id, name, phone , message FROM messages";
    
    $result = $this->dbh->query($sql);
    if ($result->num_rows > 0){
        return $result;
    }
    else {
        return false;
    }
  }

  function insertmessage($name, $phone,$message)
  {
        // Attempt insert query execution
        $name = $this->dbh->getConn()->real_escape_string($name);
        $phone = $this->dbh->getConn()->real_escape_string($phone);
		$message = $this->dbh->getConn()->real_escape_string($message);

        $sql = "INSERT INTO messages (name, phone,message) VALUES ('$name', '$phone','$message')";

        if($this->dbh->query($sql) === true){
            //echo "Records inserted successfully.";
            header("location:../View/usercontact.php");    
            $this->fillArray();
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
        //array_push($this->fruits, new Fruit("0","test","1.0"));

  }
  
 

  function deletemessage($id){
    
    $sql = "DELETE FROM messages 
            WHERE id=$id";

    if($this->dbh->query($sql) === true){
        //echo "Record deleted successfully.";
        header("location:../View/reports.php");
        $this->fillArray();
    } else{
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
  }


}