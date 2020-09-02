<?php
  require_once(__ROOT__ . "Model/Model.php");
?>

<?php
class ColorModel extends Model 
{
    public $id;
    public $name;
    public $colors;
  function __construct($id) 
  {
    if($id!=null)
    {
      $this->readColor($id);
      //$this->fillArray();
    }else
    {
      $this->id = $id;
    }
  }
function fillArray() 
{
    $this->colors = array();
    $this->dbh = $this->connect();
    $result = $this->readColors();
    while ($row = $result->fetch_assoc()) 
    {
     array_push($this->colors, new ColorModel($row["id"],$row["name"]));
    }
}
    function getColor() 
  {
    return $this->name;
  }

  function setColor($name) 
  {
    return $this->name = $name;
  }
  

  function getID() {
    return $this->id;
  }

  function readColor($id)
  {
    $sql = "SELECT * FROM colors where id=".$id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $dbh->fetchRow();
        $this->name = $row["name"];
    }
    else 
    {
        $this->name = "";
    }
    //$this->conn->close();
  }
    
    function readColors()
  {
    $sql = "SELECT * FROM colors";
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $dbh->fetchRow();
        $this->id = $row["id"];
        $this->name = $row["name"];
    
        
    }
    else 
    {
        $this->name = "";
    }
    //$this->conn->close();
  }
    
    public function SelectAllColors()
	{
		$sql="SELECT * FROM colors ";
		$i=0;
		$ObjArray=array();
        $result = $this->dbh->query($sql);
		while($row=mysqli_fetch_array($result))
		{
			$MyObj= new CategoriesModel($row["id"]);
			$ObjArray[$i]=$MyObj;
			$i++;
		}
		return $ObjArray;
	}
}
?>
