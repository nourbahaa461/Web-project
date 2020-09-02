<?php
  require_once(__ROOT__ . "Model/Model.php");
?>

<?php
class CategoriesModel extends Model 
{
    public $id;
    public $catigory;
    public $producttype_id;

  function __construct($id) 
  {
    if($id!=null)
    {
      $this->readCategory($id);
    }else
    {
      $this->id = $id;
    }
  }

    function getCatigory() 
  {
    return $this->catigory;
  }

  function setCatigory($catigory) 
  {
    return $this->catigory = $catigory;
  }
  
    function getProductTypeid() 
  {
    return $this->producttype_id;
  }

  function setProductTypeid($producttype_id) 
  {
    return $this->producttype_id = $producttype_id;
  }
    

  function getID() {
    return $this->id;
  }

  function readCategory($id)
  {
    $sql = "SELECT * FROM catigory where id=".$id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $dbh->fetchRow();
        $this->catigory = $row["catigory"];
        $this->producttype_id = $row["producttype_id"];
    }
    else 
    {
        $this->catigory = "";
        $this->producttype_id = "";
    }
    //$this->conn->close();
  }
    
   public function SelectAllCategories()
	{
		$sql="SELECT * FROM catigory ";
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
