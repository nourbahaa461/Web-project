<?php require_once("navbar.php") ?>
<title> Edit Product </title>

<?php
  define('__ROOT__', "../");
  require_once(__ROOT__ . "Model/ProductsModel.php");
  require_once(__ROOT__ . "Controller/ProductController.php");
  require_once(__ROOT__ . "View/ViewAllProducts.php");

  $model = new ProductsModel();
  $controller = new ProductController($model);
  $view = new ViewAllProducts($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller->{$_GET['action']}();
}

?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["type"]) || $_SESSION["type"] != true){
    header("location: index.php");
    exit;
}
?>


<?php
$id = $_GET['id'];
foreach ($model->products as $product)
{
    if ($product->getID() == $id)
    {
        $productColor = $product->getColorid();
        $productCategory = $product->getCatid();
        $productSize = $product->getSizeid();
        $productName = $product->getName();
        $productPrice = $product->getPrice();
        $productImage = $product->getImage();
        $productAmount = $product->getAmount();
        $productID = $product->getID();
    }
}

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/work2/lib/css/mycss.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://localhost/work2/lib/css/mycss.css">
</head>

<header> 
			<div class="flex container">
		    <a id="logo" href="#">Edit the product</a>
			<nav>
			<button id="nav-toggle" class="hamburger-menu">
				<span class="strip"></span>
				<span class="strip"></span>
				<span class="strip"></span>
			</button>
			<ul id="nav-menu">
				        <li><a href="admin.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
                        <li><a href="Edproducts.php">All Products</a></li>
                        <li><a href="logout.php">Logout</a></li>
		</div>		
 </header>
                
<style>
		#hero {
		  background: url('images/q.jpg') center center no-repeat;
		  background-size: cover;
		  position: absolute;
		  top: 0;
		  left: 0;
		  z-index: 1;
		  height: 100%;
		  width: 100%;
	  }
	  
.sidepanel {
  height: 1000px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  right: 0;
  background-color: #FFF; /* white*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
}

/* The sidepanel links */
.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #111;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: #FFA500;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #808080;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #FFA500;
}	




/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
 right: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #111;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #FFA500;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: orange;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #FFF;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
    
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #FFA500;
}
</style>

<body>
	<div id="header-hero-container">
 <section id="hero">
		<div class="fade"></div>
		<div class="hero-text">
           
            </section>   
            
		</div>
        <section>
            
<form  method = "post" action="Edproducts.php?action=edit">
<div class="container jumbotron text-center">
<div class="divTable paleBlueRows">
<div class="divTableHeading">
<div class="divTableRow">
    <div class="divTableHead">Image</div>
    <div class="divTableHead">Color</div>
    <div class="divTableHead">Category</div>
    <div class="divTableHead">Size</div>
    <div class="divTableHead">Name</div>
    <div class="divTableHead">Price</div>
    <div class="divTableHead">Amount</div>
</div>
</div>
<div class="divTableRow">
    <div class="divTableCell"> 
        <label>Edit Image:</label>
        <img src='images/Products/<?php echo $productImage ?>' id='disp_img' height="100px" width="100px">
        <input type="file"  id="image"  name="image" onchange="change_img(this)" required>
    </div>
    
        <div class="divTableCell"> 
        <!--input type="text"  id="colorid" placeholder="Edit Color" name="colorid" value="<?php echo $productColor ?>"--> 
            
            <?php 
    $mysqli=new MySQLi('localhost','root','','work');
    $result= $mysqli ->query("select * from colors");
?>
            <select id= "colorid"name="colorid">
            
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $name=$rows['name'];
                    $id=$rows['id'];
                    if($id==$productColor)
                    {
                        echo "<option selected='selected'  value='$id'>$name</option>";
                    }
                    else echo "<option value='$id'>$name</option>";
                }
            ?>
            </select>
    </div>
    
    <div class="divTableCell"> 
        <!--input type="text"  id="catid" placeholder="Edit Category" name="catid" value="<?php echo $productCategory ?>"-->
        
        <?php 
    $mysqli=new MySQLi('localhost','root','','work');
    $result= $mysqli ->query("select * from catigory");
?>
            <select id= "catid" name='catid'>
            
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $catigory=$rows['catigory'];
                    $ID=$rows['ID'];
                    if($ID==$productCategory)
                    {
                        echo "<option selected='selected'  value='$ID'>$catigory</option>";
                    }
                    else echo "<option value='$ID'>$catigory</option>";
                }
            ?>
            </select>
        
    </div>
    
    <div class="divTableCell"> 
        <!--input type="text"  id="sizeid" placeholder="Edit Size" name="sizeid" value="<?php echo $productSize ?>"--> 
        
        <?php 
    $mysqli=new MySQLi('localhost','root','','work');
    $result= $mysqli ->query("select * from size");
?>
            <select id= "sizeid"name="sizeid">
            
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $size=$rows['size'];
                    $id=$rows['id'];
                    if($id==$productSize)
                    {
                        echo "<option selected='selected'  value='$id'>$size</option>";
                    }
                    echo "<option value='$id'>$size</option>";
                }
            ?>
            </select>
        
    </div>
    
    <div class="divTableCell"> 
        <input type="varchar" maxlength="30" id="name" placeholder="Edit name" name="name" required value="<?php echo $productName ?>" required> 
    </div>
    <div class="divTableCell"> 
    <input type="Number"  min="0" max="20000" required id="price" placeholder="Edit Price" name="price" value="<?php echo $productPrice ?>">
    </div>
    
    <div class="divTableCell"> 
        <input type="number" min="1" max="500"  required id="amount" placeholder="Edit Amount" name="amount" value="<?php echo $productAmount ?>"> 
    </div>
    <div class="divTableCell"> <button type="submit" class="btn btn-default">Confirm Edit?</button> </div>
    
</div>
</div>
</div>
<input type="text" name="id" value="<?php echo $productID; ?>" hidden>
</form>
			
</body>
        
<script>
function change_img(img)
    {
        var img=img.value;
        console.log(img)
        var filename = img.replace(/^.*\\/, "");
        img='images/Products/'+filename
        document.getElementById("disp_img").src = img ; 
        console.log(img)
        document.getElementById("image").value=img
    }
</script>
            
        <?php require_once("Footer.php") ?>
