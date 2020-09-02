<?php require_once("navbar.php") ?>
<title> View Product </title>

<?php
// Initialize the session
session_start();

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ViewProductwol.php");
    exit;
}
?>

<?php
  define('__ROOT__', "../");
  require_once(__ROOT__ . "Model/ProductsModel.php");
  require_once(__ROOT__ . "Model/ColorModel.php");
  require_once(__ROOT__ . "Model/SizeModel.php");
  require_once(__ROOT__ . "Model/CategoriesModel.php");
  require_once(__ROOT__ . "Controller/ProductController.php");
  require_once(__ROOT__ . "View/ViewAllProducts.php");

  $model = new ProductsModel();
  $controller = new ProductController($model);
  $view = new ViewAllProducts($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) 
{
  $controller->{$_GET['action']}();
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
        
        $color=new ColorModel($productColor);
        $color_name=$color->name;
        $size= new SizeModel($productSize);
        $size_name=$size->size;
        $category= new CategoriesModel($productCategory);
        $category_name = $category -> catigory;
        
    }
}

?>

<style>
		#hero {
		  background: url('images/q.jpg')  center no-repeat;
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
  background-color: #808080;
  cursor: pointer;
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
    
    * {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 0px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #FFA500;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 0px 0px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #FFA500;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #FFA500;
}

    game-title
    {
        text-align: center;
        padding: 5px;
        background: #333;
        color:#fff;
    }
    
 .details-price
    {
        text-align: center;
        font-size: 25px;
        background: #63CAD0;
        margin-bottom: 20px;
    }
    
</style>

	<div id="header-hero-container">
		<header> 
			<div class="flex container">
		    <a id="logo" href="#">Product</a>
			<nav>
			<button id="nav-toggle" class="hamburger-menu">
				<span class="strip"></span>
				<span class="strip"></span>
				<span class="strip"></span>
			</button>
			<ul id="nav-menu">
				<li><a href="index.php"><img src="images/p.jpg" style="width:50px;height:50px;"></a></li>
				

 </header>
                

    
    <body>
	<div id="header-hero-container">
<section id="hero">
		<div class="fade"></div>
		<div class="hero-text">
	
</section>   
            
		</div>
        <section>
            

	<div class="details-price">
               <div class="col-md-4">
                   <img src='images/Products/<?php echo $productImage ?>' id='disp_img' height="350px" width="350px" mar>
                   
        </div>
        
		    <div class="details-price">
            
            <h1> <label > Product Name: </label> <?php echo $productName ?> </h1>
              
            </div>    
                
            <div class="row details">
            
            <h1> <label > Quantity Avaliable: </label> <?php echo $productAmount ?> </h1>
            </div>
            
            <div class="details-price">
                
                <h1> <label > Price in $: </label> <?php echo $productPrice ?> </h1>
            </div>
            
            <div class="row details">
            
                <?php 
                    $mysqli=new MySQLi('localhost','root','','work');
                    $result= $mysqli ->query("select * from catigory");
?>
            
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $catigory=$rows['catigory'];
                    $ID=$rows['ID'];
                }
            ?>
                
            <h1> <label > Category: </label> <?php echo $category_name ?> </h1>
            </div>
            
            <div class="row details">
            
                <?php 
                    $mysqli=new MySQLi('localhost','root','','work');
                    $result= $mysqli ->query("select * from size");
?>          
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $size=$rows['size'];
                    $id=$rows['id'];
                }
            ?>
                
            <h1> <label > Size: </label> <?php echo $size_name ?> </h1>
            </div>
                
            <div class="row details">
            <?php 
                $mysqli=new MySQLi('localhost','root','','work');
                $result= $mysqli ->query("select * from colors");
?>
            
                <?php 
                while ($rows=$result->fetch_assoc())
                {
                    $name=$rows['name'];
                    $id=$rows['id'];
                }
            ?>
            <h1> <label > Color: </label> <?php echo $color_name ?> </h1>
            </div>
            
        
</body>
            
        <?php require_once("Footer.php") ?>
