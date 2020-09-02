<?php require_once("navbar.php") ?>
<title>All USer </title>
 
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
  define('__ROOT__', "../");
  require_once(__ROOT__ . "Model/UsersModel.php");
  require_once(__ROOT__ . "Controller/UserController.php");
  require_once(__ROOT__ . "View/ViewAllUsers.php");

  $model = new UsersModel();
  $controller = new UserController($model);
  $view = new ViewAllUsers($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) 
{
  $controller->{$_GET['action']}();
}

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link href="http://localhost/work2/lib/bootstrap-css-only-master/css/bootstrap.min.css"> 
</head>

<style>
		#hero {
		  background: url('images/us.jpg') center center no-repeat;
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

<header> 
			<div class="flex container">
		    <a id="logo" href="#">All Users</a>
			<nav>
			<button id="nav-toggle" class="hamburger-menu">
				<span class="strip"></span>
				<span class="strip"></span>
				<span class="strip"></span>
			</button>
			<ul id="nav-menu">
				<li><a href="admin.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
				<li><a href="Edproducts.php">All Products</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="Admins.php">Admins</a></li>
                <li><a href="registerAdmin.php">Register as Admin</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
                </nav>
    </div>
 </header>
                
<body>
	<div id="header-hero-container">
<section id="hero">
		<div class="fade"></div>
		<div class="hero-text">
				<h1>All Users</h1>
				<p>you can delete anyone.</p>
			</div>
        </section>
</section>   
            
		</div>
        <section>
<form method = "post" action="userss.php?action=insert">
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">User ID</th>
              <th scope="col">User Name</th>
              <th scope="col">Register Date</th>
              <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $view->output(); ?>
        </tbody>
    </table>
</form>
        </section>
			
</body>
        <?php require_once("Footer.php") ?>