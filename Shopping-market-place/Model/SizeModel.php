<?php
  require_once(__ROOT__ . "Model/Model.php");
?>

<?php
class SizeModel extends Model 
{
    public $id;
    public $size;

  function __construct($id) 
  {
    if($id!=null)
    {
      $this->readSize($id);
    }else
    {
      $this->id = $id;
    }
  }

    function getSize() 
  {
    return $this->size;
  }

  function setSize($size) 
  {
    return $this->size = $size;
  }
  

  function getID() {
    return $this->id;
  }

  function readSize($id)
  {
    $sql = "SELECT * FROM size where id=".$id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $dbh->fetchRow();
        $this->size = $row["size"];
    }
    else 
    {
        $this->size = "";
    }
    //$this->conn->close();
  }
    public function SelectAllSizes()
	{
		$sql="SELECT * FROM size";
		$i=0;
		$ObjArray=array();
        $result = $this->dbh->query($sql);
		while($row=mysqli_fetch_array($result))
		{
			$MyObj= new ProductModel($row["id"]);
			$ObjArray[$i]=$MyObj;
			$i++;
		}
		return $ObjArray;
	}
}
?>
