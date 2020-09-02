<?php require_once("navbar.php") ?>
  <title>All Products </title>

<?php
  define('__ROOT__', "../");
  require_once(__ROOT__. "View/navbar.php");
  require_once(__ROOT__ . "Model/ProductsModel.php");
  require_once(__ROOT__ . "Controller/ProductController.php");
  require_once(__ROOT__ . "View/ViewAllProducts.php");
  require_once(__ROOT__ . "Model/ColorModel.php");

  $model = new ProductsModel();
  $controller = new ProductController($model);
  $view = new ViewAllProducts($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) 
{
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



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/work2/lib/css/mycss.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://localhost/work2/lib/css/mycss.css">
</head>

<header> 
			<div class='flex container'>
		    <a id='logo' href='#'>Products</a>
			<nav>
			<button id='nav-toggle' class='hamburger-menu'>
				<span class='strip'></span>
				<span class='strip'></span>
				<span class='strip'></span>
			</button>
			<ul id='nav-menu'>
              <li><a href="admin.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
                <li><a href="userss.php">Users</a></li>
                <li><a href="Admins.php">Admins</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="registerAdmin.php">Register as Admin</a></li>
                <li><a href="logout.php">Logut</a></li>
				
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
	    
	  .column {
  float: left;
  width: 15%;
  margin-bottom: 10px;
  padding:  8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (width: 65 px) {
  .column {
    width: 50%;
    display: ;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
    .container {
  padding: 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

 .content-table {
  border-collapse: collapse;
  margin: 25px 0;
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
  padding: 12px 15px;
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

</style>  
    
<body>
	<div id="header-hero-container">
<section id="hero">
		<div class="fade"></div>
		<div class="hero-text">
	
</section>   
            
		</div>
        <section>
            
<form  method = "post" action="Edproducts.php?action=insert">
<div class="container jumbotron text-left">
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
    <div class="divTableHead">Edit</div>
    <div class="divTableHead">Delete</div>
</div>
</div>
<div class="divTableBody">

<?php
      echo $view->output();

?>

<div class="divTableRow">
    <div class="divTableCell"> 
        <label>Choose Image:</label>
        <input type="file"  id="image" name="image" required>
    </div>
    
        <div class="divTableCell"> 
        <!--input type="text"  id="colorid" placeholder="Enter Color" name="colorid"  -->
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
                    echo "<option value='$id'>$name</option>";
                }
            ?>
            </select>
    </div>
    
    <div class="divTableCell"> 
        <!--input type="text"  id="catid" placeholder="Enter Category" name="catid"--> 
        
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
                    echo "<option value='$ID'>$catigory</option>";
                }
            ?>
            </select>
        
    </div>
    
    <div class="divTableCell"> 
        <!--input type="text"  id="sizeid" placeholder="Enter Size" name="sizeid"--> 
        
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
                    echo "<option value='$id'>$size</option>";
                }
            ?>
            </select>
        
    </div>
    
    <div class="divTableCell"> 
        <input type="varchar" maxlength="30" id="name" placeholder="Enter Product name" name="name" required> 
    </div>
    <div class="divTableCell"> 
    <input type="Number" min="0" max="20000" id="price" placeholder="Enter Price" name="price" required>
    </div>
    
    <div class="divTableCell"> 
        <input type="number"  min="1" max="500" id="amount" placeholder="Enter Amount" name="amount" required> 
    </div>
    <div class="divTableCell"> <button type="submit" class="btn btn-default">Submit</button> </div>

</div>
      
</div>
</div>
    </div>
</form>  
	
			
</body>
                
        <?php require_once("Footer.php") ?>