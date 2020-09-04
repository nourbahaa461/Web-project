<?php

?>

                    <!-- HTML -->
<!DOCTYPE html>

<html lang="en">
    
<head>
  <meta charset="UTF-8">
  <title>About us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link href="style.css" type="text/css" rel="Stylesheet" />
  <link rel="icon" href="images/p.jpg" type="image/x-icon"> <!-- logo f el title -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
    
<style>
    
  #hero {
    background: url('images/AddedPhotos/offices.jpg') center center no-repeat;
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
    <!-- Java Script -->  
      
    <script>
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

<body>
    
    <div id="header-hero-container">
      <header> 
        <div class="flex container">
            <a id="logo" href="#">Market</a>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                </button>
                <ul id="nav-menu">
                    <li><a href="indexx.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
                    <li><a href="register.php">Register</a></li>
				            <li><a href="login.php">Login</a></li>

							
<!-- Shop menu -->							
							
							<div id="mySidepanel" class="sidepanel">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                

                                
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
  <section id="hero">
      <div class="fade"></div>
      <div class="hero-text">
          <details>
              <summary><h3> ABOUT US </h3></summary>
			  
              <p> - Here / you will find every thing for <br> shopping wear<br> In general .
and we have more than these.
			  </p>
            </details>
            <details>
                <summary><h3> OUR QUALITY </h3></summary>
                <p> We have the best quality with perfect prices <br> Anyone can search for <br> </p>
            </details>
       </div>
      </section>
  </div>
    
<!-- Footer -->
    
  <footer>
    <div id="footer-subscribe">
        <div class="container">
            <h2>How It Works</h2>
            <div class="flex">
                <div>
                    <span class="fas fa-home"></span>
                    <h4>Find your perfect wear.</h4>
                    <p><font color="white">We will try our best to satisfy.</font></p>
                </div>

                <div>
                    <span class="fas fa-dollar-sign"></span>
                    <h4>Payment option.</h4>
                    <p><font color="white">You're free to buy either cash or credit.</font></p>
                </div>

                <div>
                    <span class="fas fa-chart-line"></span>
                    <h4>FeedBack.</h4>
                    <p><font color="white">You're welcome to leave your experience with us.</font></p>
                </div>
            </div>
        </div>
  <div class="flex container">
            <div class="footer-about">
                          <h3><font color="orange">About Stated</font> </h3>
              <p><font color="white">Since 2010.</font></p>
            </div>
    <div class="footer-subscribe"> 
        <h3><font color="orange">Follow Us</font> </h3>
        <ul>
        <li><a href="https://www.facebook.com/search/top?q=shopping%20online"><span class="fab fa-facebook-f"></span></a></li>
        <!-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> -->
        <li><a href="https://www.instagram.com/shoppal.eg/"><span class="fab fa-instagram"></span></a></li>
        <!-- <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li> -->
        </ul>
        </div>
    </div>
  </footer>
      

</body>
       
</html> 
