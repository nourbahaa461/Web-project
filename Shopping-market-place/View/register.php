<?php

require_once "config.php";
 

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
 
 function admin_protect() {
	 
	 
 }

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
       
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
           
            $param_username = trim($_POST["username"]);
            
            
            if(mysqli_stmt_execute($stmt)){
             
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }
	if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $_POST["username"]) === 0)
$username_err = '<p class="errText">User must be bigger that 5 chars and contain only digits, letters and underscore</p>';
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
       
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
            
            if(mysqli_stmt_execute($stmt)){
              
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

         
            mysqli_stmt_close($stmt);
        }
    }
    
  
    mysqli_close($link);
}
?>

                <!-- HTML -->

<!DOCTYPE html>

<html>
    
<head>
<meta charset="UTF-8">
<title> Register </title>
<meta name ="viewport" content= "width= device-width, initial=scale=1.0">
<link rel="icon" href="images/p.jpg" type="image/x-icon"> <!-- logo f el title -->
<meta http-equiv="X-UA-Compatible" content= "ie=edge" > 
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link href="style.css" type="text/css" rel="Stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
    
<style>
		#hero {
		  background: url('images/rr.jpg') center center no-repeat;
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
    
</style>
    
<body>
    
	<div id="header-hero-container">
        
<!-- Header -->        
        
		<header> 
			<div class="flex container">
		    <a id="logo" href="#"> Market</a>
			<nav>
			<button id="nav-toggle" class="hamburger-menu">
				<span class="strip"></span>
				<span class="strip"></span>
				<span class="strip"></span>
			</button>
			<ul id="nav-menu">
                <li><a href="indexx.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="login.php">Login</a></li>
                
<!-- Shop menu -->				
				
				<div id="mySidepanel" class="sidepanel">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    
                                    <!-- Table Tennis -->
                    
<button class="dropdown-btn">Shopping
    <i class="fa fa-caret-down"></i>
</button>
  <div class="dropdown-container">
    <li><a href="Style.php">style</a></li>
	<li><a href="Shoes.php">Shoes & Socks</a></li>
	<li><a href="Bags.php">Bags</a></li>
	
	<li><a href="Accessories.php">Accessories</a></li>
  </div>

 
                  </div>

                  <button class="openbtn" onclick="openNav()">&#9776; Shop</button>
				<li id="close-flyout"><span class="fas fa-times"></span></li>
			</ul>
		</nav>
	</div>
 </header>
 
<!-- section el sora (rowad) -->
        
 <section id="hero">
		<div class="fade"></div>
		<div class="hero-text">
				<h1>Register</h1>
			</div>
        </section>
	
	</div>

<!-- section Register -->
    
	<section id="contact">
			<div class="container">
        <h2>Please fill out this form to regist</h2>	
				<div class="flex">
					<div id="form-container">
					
					<!--	<h2> Create a new account </h2> -->
					
						 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						 
							<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
                <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
							
							
	
			   <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
                <span class="help-block"><?php echo $password_err; ?></span>
                </div>
				
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>"required>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
                 </div>
				
							<br>
							
							<button class="rounded"  >Register</button>
							<p>Already have an account? <a href="login.php">Login here</a>.</p>
						</form>
					</div>
					</div>
				</div>
		</section>	
		
    

	
<!-- Java Script -->
    
	<script>

	function validate(){
        var password = document.forms["SignUp"]["password"].value;
        var cpassword = document.forms["SignUp"]["cpassword"].value;
        if (password != cpassword){
        alert("Password & Confirm Password Don't Match");
          }
           }
					$(function () {
						let headerElem = $('header');
						let logo = $('#logo');
						let navMenu = $('#nav-menu');
						let navToggle = $('#nav-toggle');
						navToggle.on('click', () => {
               navMenu.css('right', '0');
           });
            $('#close-flyout').on('click', () => {
                navMenu.css('right', '-100%');
           });
           $(document).on('click', (e) => {
               let target = $(e.target);
               if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                   navMenu.css('right', '-100%');
               }
           });
					$(document).scroll(() => {
						let scrollTop = $(document).scrollTop();
						if (scrollTop > 0) {
						navMenu.addClass('is-sticky');
						logo.css('color', '#000');
						headerElem.css('background', '#fff');
						navToggle.css('border-color', '#000');
						navToggle.find('.strip').css('background-color', '#000');
						} else {
						navMenu.removeClass('is-sticky');
						logo.css('color', '#fff');
						headerElem.css('background', 'transparent');
						navToggle.css('bordre-color', '#fff');
						navToggle.find('.strip').css('background-color', '#fff');
						}
					    headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
					   });
					$(document).trigger('scroll');
						});
			</script>
			
    <script>
	function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}


function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
	</script>
	
	<script>
	
	var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
    
</body>
    
    <!-- Footer --> 
<?php require_once("Footer.php") ?>

</html>
