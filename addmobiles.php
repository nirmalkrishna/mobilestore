<?php

include 'conn.php';
if(isset($_POST['submit']))
{	
 $a=$_POST["brand_id"];
 $b=$_POST["model"];
$c=$_POST["sim_type"];
$d=$_POST["sim_size"];
$e=$_POST["color"];
$f=$_POST["internalm"];
$g=$_POST["externalm"];
$h=$_POST["backcam"];
$i=$_POST["frontcam"];
$j=$_POST["flash"];
$k=$_POST["tg"];
$l=$_POST["fg"];
$m=$_POST["wifi"];
$n=$_POST["bluetooth"];
$o=$_POST["reserve_qty"];
$p="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $o);
$q=$_POST["price"];


$sql="INSERT INTO `mobile_details`(`mob_id`, `brand_id`, `model`, `sim_type`, `sim_size`, `color`, `internalm`, `externalm`, `backcam`, `frontcam`, `flash`, `tg`, `fg`, `wifi`, `bluetooth`, `reserve_qty`, `image`, `price`) VALUES (NULL, '$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q')";


$result=mysqli_query($con,$sql);
//echo"<script>alert('Data Entered Successfully');</script>)";

//echo $result;


//$sql2="select max(shop_id) as shop_id from shop_registration ";
//$res=mysqli_query($con,$sql2);
//$ar=mysqli_fetch_array($res);
//$mid=$ar['shop_id'];
//echo($mid);
//header('location:login.php');

//$sql3="INSERT INTO `login`( `email`, `password`,`role` ) VALUES ('$e','$f','1')";
//$results=mysqli_query($con,$sql3) or die("error2");

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
<form action= "#"  method="POST" name="myform"  id="form" enctype="multipart/form-data">
  <h1>Add New Shops</h1>
  <div class="inset">
  	Brand&nbsp&nbsp<select style="width:150px; height:20px;" name="brand_id" >
  
   <option value="1">sony</option>
   <option value="2">samsung</option>
    <option value="3">oppo</option>
	 <option value="4">moto</option>
	  <option value="5">lenovo</option>
	
 </select>
  <br>
    <p>
    <input type="text" name="model" placeholder="model" / >
  </p>
  <p>
 
  <p>
    <input type="text" name="sim_type" placeholder="sim type" onchange='checksim()' />
  </p>
   <br>
  Sim size&nbsp&nbsp<select  name="sim_size" >
  
   <option value="1">1</option>
   <option value="2">2</option>
   </select>
 
  
  
  <p>
    <br>
   color&nbsp&nbsp<select  name="color" >
  
   <option value="black">Black</option>
   <option value="white">White</option>
   <option value="gold">Gold</option>
   </select>
     <br>
 
  </p>
  <p>
   <input type="text" name="internalm" placeholder="Internal memory" />
  </p>
  <p>
   <input type="text" name="externalm" placeholder="External memory" />
  </p>
  <p>
   <input type="text" name="backcam" placeholder="backcam" />
  </p>
  <p>
   <input type="text" name="frontcam" placeholder="frontcam" />
  </p>
  <br>
    Flash&nbsp&nbsp<select  name="flash" >
  
   <option value="yes">YES</option>
   <option value="no">NO</option>

   
   </select>
   <br>
     <br>
   
    3G&nbsp&nbsp<select  name="tg" >
  
   <option value="yes">YES</option>
   <option value="no">NO</option>
   </select>
   <br>
     <br>
   
    4G&nbsp&nbsp<select  name="fg" >
  
   <option value="yes">YES</option>
   <option value="no">NO</option>
   </select>
   <br>
     <br>
   
    WIFI&nbsp&nbsp<select  name="wifi" >
  
   <option value="yes">YES</option>
   <option value="no">NO</option>
   </select>
   <br>
     <br>
   
    Bluetooth&nbsp&nbsp<select  name="bluetooth" >
  
   <option value="yes">YES</option>
   <option value="no">NO</option>
   </select>
   <br>
     <br>
  
  <p>
   <input type="number_format" name="reserve_qty" placeholder="Reserve Quanty" />
  </p>
  <p>
  <input type="file" name="photo" id="photo" placeholder="" ></td>
  </p>
  <p>
   <input type="number_format" name="price" placeholder="Price" />
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
