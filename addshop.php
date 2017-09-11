<?php

include 'conn.php';
if(isset($_POST['submit']))
{	
 $a=$_POST["shop_name"];
 $b=$_POST["District"];
$c=$_POST["location"];
$d=$_POST["phone"];
$e=$_POST["email"];
$f=$_POST["password"];

$sql="INSERT INTO `shop_registration` (`shop_id`, `shop_name`, `dist_id`, `location`, `phone`, `role`) VALUES (NULL, '$a','$b','$c','$d','1')";
//$sql="INSERT INTO `shop_registration`(`shop_name`, `dist_id`, `location`, `phone`, `role`) VALUES ('$a','$b','$c','$d','1')";

$result=mysqli_query($con,$sql) or die(mysqli_error($con));
echo $result;


$sql2="select max(shop_id) as shop_id from shop_registration ";
$res=mysqli_query($con,$sql2);
$ar=mysqli_fetch_array($res);
$mid=$ar['shop_id'];
//echo($mid);
//header('location:login.php');

$sql3="INSERT INTO `login`( `email`, `password`,`role` ) VALUES ('$e','$f','1')";
$results=mysqli_query($con,$sql3) or die("error2");

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Demo Drop Down Responsive Menu with CSS/jQuery</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery lib from google server ===================== -->
	<script src="js/jquery-1.7.2.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="style.css" />
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>
<!-- end -->
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
          
			<header>
				<h1><span>Mob Galls</span>gallery work</h1>
            </header>       
     <!-- start header here-->
	<header>
		<div id="fdw">
				<!--nav-->
					<nav>
						<ul>
							<li class="current"><a href="">home<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a class="subCurrent" href="">Home Service</a></li>
									<li><a href="">Home Responsive</a></li>
								</ul>
							</li>
							<li><a href="">about</a></li>
							<li><a href="">services</a></li>
							<li>
								<a href="">Item details<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="addmobiles.php">Add Phones </a></li>
									<li><a href="viewaddmobiles.php">View Phones </a></li>
									<li><a href="mobilebrand.php">Add Brand</a></li>
									
								</ul>
							</li>
							<li>
								<a href="">Shop<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="addshop.php">Add Shop</a></li>
									<li><a href="viewshop.php">View Shop</a></li>
								
									</li>
								</ul>
							</li>
							<li><a href="">contact</a></li>
						</ul>
					</nav>
		</div><!-- end fdw -->
		<script src="reg.js"></script>
<link rel="stylesheet" href="reg.css" />
</head>
<body>
<div class="menu">
  <table  style="color: #fff;
						font-size: 2em;
						font-weight: 200;
						font-family: 'Georgia', cursive;
						align="right";
						>
			<tr>
			
	
	</a></td>
	<
	
	</a></td></tr>
	</table>
	</div>
<form action= "#"  method="POST" name="myform"  id="form">
  <h1>Add New Shops</h1>
  <div class="inset">
    <p>
    <input type="text" name="shop_name" placeholder="shop_name" />
  </p>
  <p>
  District&nbsp&nbsp<select  name="District" >
  
   <option value="1">kannur</option>
   <option value="2">wayanad</option>
   <option value="3">calicut</option>
   <option value="4">ernakulam</option>
    <option value="5">kasargod</option>
	 <option value="6">malappuram</option>
	  <option value="7">thrissure</option>
	   <option value="8">idukki</option>
	    <option value="9">kottayam</option>
		 <option value="10">alappuzha</option>
		  <option value="11">pathanamthitta</option>
		   <option value="12">kollam</option>
		    <option value="13">trivandrum</option>
   
   </select>
  <p>
    <input type="text" name="location" placeholder="location" />
  </p>
  <p>
    <input type="text" name="phone" placeholder="Phone" />
  </p>
  <p>
   <input type="text" name="email" placeholder="Email" />
  </p>
  <p>
   <input type="password" name="password" placeholder="password" />
  </p>
  
  </div>
  <p class="p-container">
   
    <input type="submit" name="submit" id="submit" value="Add me">
  </p>
</form>
	</header><!-- end header -->
    
</div>
</body>
</html>
