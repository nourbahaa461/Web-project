<?php
  require_once(__ROOT__ . "Model/Model.php");
?>

<?php
class ProductModel extends Model 
{
    public $id;
    public $colorid;
    public $catid;
    public $sizeid;
    public $name;
    public $price;
    public $image;
    public $amount;

    
    function __construct($id) 
  {
    $this->id = $id;
    if($id != null)
    {
      $this->readProduct($id);
    }else
    {
      $this->id =$id;  
      $this->colorid = $colorid;
      $this->catid = $catid;
      $this->sizeid = $sizeid;
      $this->name = $name;
      $this->price = $price;
      $this->image = $image;
      $this->amount = $amount;
    }
  }
//  function __construct($id,$colorid,$catid,$sizeid,$name="",$price="",$image="",$amount="") 
//  {
//    $this->id = $id;
//    if(""===$name)
//    {
//      $this->readProduct($id);
//    }else
//    {
//      $this->colorid = $colorid;
//      $this->catid = $catid;
//      $this->sizeid = $sizeid;
//      $this->name = $name;
//      $this->price = $price;
//      $this->image = $image;
//      $this->amount = $amount;
//    }
//  }

    function getColorid() 
  {
    return $this->colorid;
  }

  function setColorid($colorid) 
  {
    return $this->colorid = $colorid;
  }
    
      function getCatid() 
  {
    return $this->catid;
  }

  function setCatid($catid) 
  {
    return $this->catid = $catid;
  }
    
      function getSizeid() 
  {
    return $this->sizeid;
  }

  function setSizeid($sizeid) 
  {
    return $this->sizeid = $sizeid;
  }
    
    
  function getName() 
  {
    return $this->name;
  }

  function setName($name) 
  {
    return $this->name = $name;
  }

  function getPrice() 
  {
    return $this->price;
  }
    
  function setPrice($price) 
  {
    return $this->price = $price;
  }
     function getImage() 
  {
    return $this->image;
  }

  function setImage($image) 
  {
    return $this->image = $image;
  }
     function getAmount() 
  {
    return $this->amount;
  }

  function setAmount($amount) 
  {
    return $this->amount = $amount;
  }


  function getID() {
    return $this->id;
  }

  function readProduct($id)
  {
    $sql = "SELECT * FROM products where id=".$id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);
    if ($result->num_rows == 1)
    {
        $row = $dbh->fetchRow();
        $this->colorid = $row["colorid"];
        $this->catid = $row["catid"];
        $this->sizeid = $row["sizeid"];
        $this->name = $row["name"];
        $this->price = $row["price"];
        $this->image = $row["image"];
        $this->amount = $row["amount"];
    }
    else 
    {
        $this->colorid = "";
        $this->catid = "";
        $this->sizeid = "";
        $this->name = "";
        $this->price = "";
        $this->image = "";
        $this->amount = "";
    }
    //$this->conn->close();
  }
}
?>
