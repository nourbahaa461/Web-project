<?php require_once("navbar.php") ?>
  <title>Admin</title>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["type"]) || $_SESSION["type"] != true){
    header("location: index.php");
    exit;
}
?>


<style>
#hero {
  background: url('images/ss.jpg') center center no-repeat;
  background-size: cover;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 100%;
  width: 100%;

}
#nav li {
    display:block;
    position:relative;
    float:left;
    background: #006633; /* menu background color */
    }

#nav li a {
    display:block;
    padding:0;
    text-decoration:none;
    width:200px; /* this is the width of the menu items */
    line-height:35px; /* this is the hieght of the menu items */
    color:#ffffff; /* list item font color */
    }
        
#nav li li a {font-size:80%;} /* smaller font size for sub menu items */
    
#nav li:hover {background:#003f20;} /* highlights current hovered list item and the parent list items when hovering over sub menues */



/*--- Sublist Styles ---*/
#nav ul {
    position:absolute;
    padding:0;
    left:0;
    display:none; /* hides sublists */
    }

#nav li:hover ul ul {display:none;} /* hides sub-sublists */

#nav li:hover ul {display:block;} /* shows sublist on hover */

#nav li li:hover ul {
    display:block; /* shows sub-sublist on hover */
    margin-left:200px; /* this should be the same width as the parent list item */
    margin-top:-35px; /* aligns top of sub menu with top of list item */
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
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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
    
</style>

    <!-- Header -->
        
        <header>
            <div class="flex container">
                <a id="logo" href="#"> Market</a>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"> </span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>

                    <ul id="nav-menu"> 
                        <li><a href="index.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
                        <li><a href="Edproducts.php">All Products</a></li>
                        <li><a href="reports.php">Reports</a></li>
                        <li><a href="userss.php">Users</a></li>
                        <li><a href="Admins.php">Admins</a></li>
                        <li><a href="registerAdmin.php">Register as Admin</a></li>
                        <li><a href="logout.php">Logout</a></li>
                  </div>
       
    </header>
    
<body>
    
<div class="page-header">
        <h4>Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> to your site.</h4>
    </div>
    <div id="header-hero-container">
        
<!-- section el sora (sport can change world) -->
        
        <section id="hero">
            <div class="fade"></div>
            <div class="hero-text">
                <h1> </h1>
<p> </p>
<p> </p>
            </div>
        </section>
        
    </div>

</section>
    
<!-- section Stay At Home -->
    
    <section id="the-best">
        <div class="flex container">
            <img src="images/sn.jpg" />
            <div>
                <h2>We Are the on of the Best sports wear </h2>
                <ul>
                    <li>We get an original sport wear</li>
                    <li>People really like Us.</li>
<li> You could see people feedback. </li>
                   
                </ul>
            </div>
        </div>
    </section>
    
<!-- section videos -->

    <section id="properties">
        <div class="container">
            <h2><u> Videos </u></h2>
            <div class="flex">
                <div>
                    <h4> <font color="black">Table Tennis At Home</font></h4>
                    <video width="350" controls >
                        <source src="videos/v1.mp4" type="video/mp4">
                    </video>
                </div>

                <div>
                    <h4> <font color="black">Top 5 Unique serves in Table-Tennis</font></h4>
                    <video width="350" controls >
                        <source src="videos/v2.mp4" type="video/mp4">
                    </video>
                </div>

                <div>
                    <h4> <font color="black">Timo boll VS KUKA robot</font></h4>
                    <video width="350" controls >
                        <source src="videos/v3.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>


</body>
        <!-- Footer -->
        <?php require_once("Footer.php") ?>
