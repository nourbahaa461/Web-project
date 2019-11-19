<!DOCTYPE html>
<html>
<head>
	<title>Real Estate</title>
	<link rel="stylesheet" type="text/css" href="homecss.css"> 
	<!--dol tb3 elrefresh button -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript">
		function refresh() {
			location.reload();
		}
		function viewPrf () {
			window.location.href="ViewProfile.php";
		}
    </script>
    <style>
        body{
            background-color: #BDBDBD;
        }
    </style>
</head> 
<body>
	<header>
		<img src="RealEstate.png" alt="logo" id="logo">
		<input type="text" placeholder="Search.." id="searchbar">
		<button type="button" onclick="" id="searchBtn">Search</button>
		<button onclick="viewPrf()" id="vPbtn">View Profile</button>
		<button onclick="location.href='Login.html'" id="logout">Log Out</button>
	</header>

	<nav>
		<button class="btn btn-default btn-sm">  <!--Select Menu-->
			<span class="glyphicon glyphicon-check"></span>
			<select class="Sdrpdwn">
				<option value="empty"></option>
				<option value="Buy">All</option>
				<option value="offers">offers</option>
			</select>
		</button>
	</nav>

	<div>
		<div class="section">
			<section>
				<br><br>

				
			</section>
		</div>

		<div class="aside" >
			<aside>
				<ul>
                <li><a href="#home">Home</a></li>
				<li><a href="#Details">Details</a></li>
				<li><a href="#contact">Contacts</a></li>
				<li><a href="#about">About Us</a></li>
			</ul>
			</aside>
		</div>

</body>
</html>