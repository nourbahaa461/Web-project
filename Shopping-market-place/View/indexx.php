

                    <!-- HTML -->
<!DOCTYPE html>

<html lang="en" >
    
<head>
  <meta charset="UTF-8">
  <title>Market</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/p.jpg" type="image/x-icon"> <!-- logo f el title -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link href="style.css" type="text/css" rel="Stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

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

<body>
    <div id="header-hero-container">
        
<!-- Header -->
        
        <header>
            <div class="flex container">
                <a id="logo" href="#">Welcome to our website <br> hope you like it</a>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>

                    <ul id="nav-menu"> 
                      <li><a href="indexx.php"><img src="images/nn.png" style="width:60px;height:60px;"></a></li>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>

                  
<!-- Shop menu -->
						
						<div id="mySidepanel" class="sidepanel">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            
                            <!-- Table Tennis -->
                            
                  <button class="dropdown-btn">Shopping
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <li><a href="userStyle.php">style</a></li>
	<li><a href="userShoes.php">Shoes & Socks</a></li>
	<li><a href="userBags.php">Bags</a></li>

	<li><a href="userAccessories.php">Accessories</a></li>
  </div>

 
                  </div>

                  <button class="openbtn" onclick="openNav()">&#9776; Shop</button>
						
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
    </header>
        
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
                    <h4> <font color="black">Welcome</font></h4>
                    <video width="350" controls >
                        <source src="videos/v1.mp4" type="video/mp4">
                    </video>
                </div>

                <div>
                    <h4> <font color="black">To our</font></h4>
                    <video width="350" controls >
                        <source src="videos/v2.mp4" type="video/mp4">
                    </video>
                </div>

                <div>
                    <h4> <font color="black">web page</font></h4>
                    <video width="350" controls >
                        <source src="videos/v3.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    
        </div>

</section>
    
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
<li><a href="https://www.facebook.com/TABLETENNISAboAli"><span class="fab fa-facebook-f"></span></a></li>
<!-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> -->
<li><a href="https://www.facebook.com/search/top?q=shopping%20online"><span class="fab fa-instagram"></span></a></li>
<!-- <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li> -->
</ul>
</div>
</div>
</footer>

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

           $('#properties-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
                nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 530,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
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
    
</html>