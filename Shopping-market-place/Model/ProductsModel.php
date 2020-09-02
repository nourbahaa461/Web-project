<?php
  require_once(__ROOT__ . "Model/Model.php");
  require_once(__ROOT__ . "Model/ProductModel.php");
?>

<?php
class ProductsModel extends Model 
{
    public $products;
    private $dbh;
  function __construct() 
  {
      $this->fillArray();
  }

  function fillArray() {
    $this->products = array();
    $this->dbh = $this->connect();
    $result = $this->readProducts();
    while ($row = $result->fetch_assoc()) {
     array_push($this->products, new ProductModel($row["id"],$row["colorid"],$row["catid"],$row["sizeid"],$row["name"],$row["price"],$row["image"],$row["amount"]));
    }
    
  }

  function getProducts() {
    return $this->products;
  }

  function readProducts(){
    $sql = "SELECT * FROM products";
    
    $result = $this->dbh->query($sql);
    if ($result->num_rows > 0)
    {
        return $result;
    }
    else 
    {
        return false;
    }
  }

  function insertProduct($colorid,$catid,$sizeid,$name, $price,$image,$amount)
  {
        // Attempt insert query execution
        $name = $this->dbh->getConn()->real_escape_string($name);
        $price = $this->dbh->getConn()->real_escape_string($price);
        $sql = "INSERT INTO products (colorid, catid, sizeid, name, price, image, amount) VALUES ('$colorid', '$catid','$sizeid', '$name', '$price', '$image', '$amount')";

        if($this->dbh->query($sql) === true){
            echo "Product inserted successfully.";
            header("location:../View/Edproducts.php");    
            $this->fillArray();
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
  
  function editProduct($colorid,$catid,$sizeid,$name, $price,$image,$amount,$id)
  {

    $sql = "UPDATE products SET colorid = '$colorid' , catid = '$catid' , sizeid = '$sizeid' , name = '$name' , price = '$price' , image = '$image' , amount = '$amount' WHERE id='$id'";

    if($this->dbh->query($sql) === true){
        echo "Product edited successfully.";
        header("location:../View/Edproducts.php");
        $this->fillArray();
    } else{
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
  }

  function deleteProduct($id)
  {
    
    $sql = "DELETE FROM products 
            WHERE id=$id";

    if($this->dbh->query($sql) === true){
        echo "Product deleted successfully.";
        header("location:../View/Edproducts.php");
        $this->fillArray();
    } else{
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
  }
    
   public function WeSuggest()
	{
		$sql="SELECT * FROM products WHERE wesuggest=1";
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
    
    public function SelectAllNike()
	{
		$sql="SELECT * FROM products WHERE catid=1";
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
    
    public function SelectAllAdidas()
	{
		$sql="SELECT * FROM products WHERE catid=2";
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
    
    public function SelectAllReebok()
	{
		$sql="SELECT * FROM products WHERE catid=3";
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
    
    public function SelectAllActive()
	{
		$sql="SELECT * FROM products WHERE catid=4";
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
    
    public function SelectAllUnderArmor()
	{
		$sql="SELECT * FROM products WHERE catid=5";
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
    
    public function SelectAllMizuno()
	{
		$sql="SELECT * FROM products WHERE catid=6";
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
    
    public function SelectAllOtherSB()
	{
		$sql="SELECT * FROM products WHERE catid=7";
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
    
    public function SelectAllRubbers()
	{
		$sql="SELECT * FROM products WHERE catid=8";
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
    
    public function SelectAllBlades()
	{
		$sql="SELECT * FROM products WHERE catid=9";
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
    
    public function SelectAllStyle()
	{
		$sql="SELECT * FROM products WHERE catid=10";
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
    
    public function SelectAllShoes()
	{
		$sql="SELECT * FROM products WHERE catid=11";
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
    
    public function SelectAllBags()
	{
		$sql="SELECT * FROM products WHERE catid=12";
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
    
    public function SelectAllTables()
	{
		$sql="SELECT * FROM products WHERE catid=13";
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
    
    public function SelectAllAccessories()
	{
		$sql="SELECT * FROM products WHERE catid=14";
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
