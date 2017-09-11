<?php

include'conn.php';
session_start();
echo($_SESSION['user_name']);
if(!(isset( $_SESSION['user_name'])))
{
	header("location:newloginindex.php");
}

if(isset($_POST['submit']))
{

$email=$_SESSION['email'];
 $_SESSION['email']=$a;
 $_SESSION['password']=$b;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sell anythign: Premium Responsive Template develope by bootstrappage.com (bootstrap 2.3.1 version)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- styles -->

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="themes/js/less/less.js" type="text/javascript"></script>

	<!-- favicon-icons -->
    <link rel="shortcut icon" href="themes/images/favicon.ico">
  </head>
<body>
  <!-- Facebook script -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<header class="header">

<div class="container">
<div class="row">
	<div class="offset6 span6 right-align loginArea">
		 
		<a href="logout.php"><span class="btn btn-mini btn-danger"> LogOut </span></a> 
	</div>
</div>

<!-- Login Block -->
<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3>Sell Anythings : Login Block</h3>
  </div>
  <div class="modal-body">
	<form class="form-horizontal loginFrm">
	  <div class="control-group">								
		<input type="text" id="inputEmail" placeholder="Email">
	  </div>
	  <div class="control-group">
		<input type="password" id="inputPassword" placeholder="Password">
	  </div>
	  <div class="control-group">
		<label class="checkbox">
		<input type="checkbox"> Remember me
		</label>
	  </div>
	</form>		
	<button type="submit" class="btn btn-success">Sign in</button>
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<div class="navbar">
<div class="navbar-inner">
	<a class="brand" href="index.php"><img src="themes/images/new_logo.png" alt="Bootsshop"></a>
	<div class="nav-collapse">
		<ul id="topMenu" class="nav pull-right">
		 <li class="">
		 <form class="form-inline navbar-search" method="post" action="products.php" style="padding-top:5px;">
			<select class="span3" style="padding:11px 4px; height:auto">
				<option>All</option>
				<option>Galaxy s8 </option>
				<option>Gionee </option>
				<option>Nokia </option>
				<option>Oppo </option>
			</select> 
			<input class="span4" type="text" placeholder="eg. Nokia" style="padding:11px 4px;">
			<button type="submit" class="btn btn-warning btn-large" style="margin-top:0"> GO </button>
		</form>
		</li>
		</ul>
	</div>
	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
  </div>
</div>
</div>
</header>
<!-- ======================================================================================================================== -->
<div class="container">
<section id="mainCarousel">
	<div class="displayStyle">
	<div id="myCarousel" class="carousel slide">
		<span class="newTag tagRight"></span>
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
			<div class="carousel-inner">
			<div class="item active">
				<div class="row">
					<div class="span6">
						<img src="themes/images/carousel/ph5.jpg" alt="#" />
					</div>
					<div class="span6">
						<div class="promoDetail">
								  <h1>IPhone 7<span>Your best choice</span></h1>
									
								  <p>Apple</p>
								<ul>
								<li>apple A10,64 bit</li>
								<li>Storage: 32 GB</li>
								<li>4.7 retina HD display</li>
								<li>cam:12mp Rear cam</li>
									<li>2GB RAM</li>
								<li>battery:1960 mAh</li>	
								</ul>
								   
								<p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star-empty"></i></p>
								<br>
								<div class="cntr">
								<h3>Price: 45897 <small class="oldPrice">47000</small></h3>
								<a class="btn btn-success" href="details.php" >5% off BUY NOW</a> 
								<br>
								<br>
								<div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
								<br>
								</div>
						</div>
					</div>
				</div>
			</div>
			  <div class="item">
				  <div class="row">
						<div class="span6">
							<img src="themes/images/carousel/ph1.jpg" alt="#" />
						</div>
						<div class="span6">
							<div class="promoDetail">
							  <h1>Redmi Note 3   <span>All in your price </span></h1>
							  <p>Xiaomi</p>
							  <ul>
								<li>android 5.0.2</li>
								<li>Storage: 16 GB</li>
								<li>5.5 display</li>
								<li>cam:13mp</li>
								<li>3 GB Ram</li>
								<li>battery:4000 mAh</li>
							  </ul>
							   <p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i>  <i class="icon-star"></i> <i class="icon-star-empty"></i></p>
							  <br/>
							<div class="cntr">
							  <h3>Price:11999 <small class="oldPrice">12500</small></h3>
							  <br/>
								<a class="btn btn-warning" href="details.php" >5% off BUY NOW</a> 
							  <br/>
							  <br/>
								<div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
							</div>
							</div>
					</div>
				  </div>
			  </div>
			   <div class="item">
			   <div class="row">
			   <div class="span6">
					<img src="themes/images/carousel/ph2.jpg" alt="#" />
				</div>
				<div class="span6">
					<div class="promoDetail">
						  <h1>Moto Z2 <span>ALL In Hand </span></h1>
						  <p>Moto </p>
						  <ul>
							<li></li>
								<li>Storage: 64 GB</li>
								<li>5.5 display</li>
								<li>cam:12mp,5mp front</li>
								<li>4 GB Ram</li>
								<li>battery:3000 mAh</li>
						  </ul>
						   <p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star-empty"></i></p>
						  <br/>
						 <div class="cntr">
						   <h3>Price: 27999 <small class="oldPrice">28500</small></h3>
							<a class="btn btn-danger" href="details.php" >5% off BUY NOW</a>
							<br>
							<br>
						 <div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
						</div>

					</div>
				</div>
				</div>
			  </div>
			</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	</div>
	</div>
</section>

<section id="featuredProduct">
<h3 class="title"><span>New Products</span></h3>
<div id="myCarouselOne" class="carousel slide">
	<!-- Dot Indicators -->
	<div class="carousel-inner">
	<div class="item active">
		<div class="row">
			<div class="span3">
				<div class="well well-small">
					<span class="newTag"></span>
					
					<a class="displayStyle" href="#"><img src="themes/images/clothes/ph7.jpg" alt="#"/></a>
					<h5>NOKIA 8</h5>
					<p>
						<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
						<a class="btn" href="details.php">view details</a>
					</p>
					<p><span class="price"><small>$</small>10289</span></p>
					
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
				
					<span class="priceTag">
						
						<span class="newPrice"><small>$</small>15999</span>
					</span>
					<a class="displayStyle" href="#"><img src="themes/images/clothes/ph8.jpg"  alt="#"/></a>
					<h5>Moto G5</h5>
					<p>
						<a class="btn btn-success" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
						<a class="btn" href="details1.php">view details</a>
					</p>
					<p>
					<span class="price"><small>$</small>15999</span>
					</p>
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
				<span class="priceTag">
					
					<span class="newPrice"><small>$</small>64900</span>
				</span>
					<a class="displayStyle" href="#"><img src="themes/images/clothes/ph9.jpg" alt="#"/></a>
					<h5>Galaxy s8 plus </h5>
					<p>
						<a class="btn btn-danger" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
						<a class="btn" href="details2.php">view details</a>
					</p>
					<p>
					<span class="price"><small>$</small>64900</span>
					</p>
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
					<span class="priceTag">
					
					<span class="newPrice"><small>$</small>31900</span>
					</span>
					<span class="saleTag tagRight"></span>
					<a class="displayStyle" href="#"><img src="themes/images/clothes/ph10.jpg" alt="#"/></a>
					<h5>Galaxy C9</h5>
					<p>
						<a class="btn btn-primary" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
						<a class="btn" href="details3.php">view details</a>
					</p>
					<p>
					<span class="price"><small>$</small>31900</span>
					</p>
				</div>
			</div>			
		</div>
		</div>
	<div class="item">
	<div class="row">
		<div class="span3">
			<div class="well well-small">
				<span class="newTag"></span>
				<span class="priceTag">
					
					<span class="newPrice"><small>$</small>10499</span>
				</span>
				<a class="displayStyle" href="#"><img src="themes/images/clothes/ph11.jpg" alt="#"/></a>
				<h5>Lenovo Vibe K5</h5>
				<p>
					<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
					<a class="btn" href="details4.php">view details</a>
				</p>
				<p><span class="price"><small>$</small>10499</span></p>
				
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
				<span class="priceTag">
					
					<span class="newPrice"><small>$</small>27990</span>
				</span>
				<a class="displayStyle" href="#"><img src="themes/images/clothes/ph12.jpg"  alt="#"/></a>
				<h5>Oppo f3 Plus</h5>
				<p>
					<a class="btn btn-success" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
					<a class="btn" href="details5.php">view details</a>
				</p>
				<p>
				<span class="price"><small>$</small>27990</span>
				</p>
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
			<span class="priceTag">
			
				<span class="newPrice"><small>$</small>17990</span>
			</span>
				<a class="displayStyle" href="#"><img src="themes/images/clothes/ph13.jpg" alt="#"/></a>
				<h5>Oppo f1S </h5>
				<p>
					<a class="btn btn-danger" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
					<a class="btn" href="details6.php">view details</a>
				</p>
				<p>
				<span class="price"><small>$</small>17990</span>
				</p>
			</div>
		</div>
		<div class="span3">
			<div class="well well-small">
				<span class="priceTag">
				
				<span class="newPrice"><small>$</small>19999</span>
				</span>
				<span class="saleTag tagRight"></span>
				<a class="displayStyle" href="#"><img src="themes/images/clothes/ph14.jpg" alt="#"/></a>
				<h5>Gionee A1</h5>
				<p>
					<a class="btn btn-primary" href="#" > Add to <i class="icon-shopping-cart"></i></a> 
					<a class="btn" href="details7.php">view details</a>
				</p>
				<p>
				<span class="price"><small>$</small>19999</span>
				</p>
			</div>
		</div>			
	</div>
	</div>
	</div>
		<a class="left carousel-control" href="#myCarouselOne" data-slide="prev">‹</a>
		<a class="right carousel-control" href="#myCarouselOne" data-slide="next">›</a>
</div>
		
<h3 class="title"><span>Popular Items</span></h3>
<div id="showCase" class="row">
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item active">
			<a  href="details12.php" ><img src="themes/images/clothes/f103.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details6.php" ><img src="themes/images/clothes/oppof1s.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details8.php" ><img src="themes/images/clothes/htcuultra.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details10.php" ><img src="themes/images/clothes/desire626.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details9.php" ><img src="themes/images/clothes/lgg5.jpg" alt="#"/>
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item active">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details6.php" ><img src="themes/images/clothes/oppof1s.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details8.php" ><img src="themes/images/clothes/htcuultra.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details10.php" ><img src="themes/images/clothes/desire626.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details9.php" ><img src="themes/images/clothes/lgg5.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details12.php" ><img src="themes/images/clothes/f103.jpg" alt="#"/>
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item active">
			<a  href="details6.php" ><img src="themes/images/clothes/oppof1s.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details8.php" ><img src="themes/images/clothes/htcuultra.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details10.php" ><img src="themes/images/clothes/desire626.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details9.php" ><img src="themes/images/clothes/lgg5.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details12.php" ><img src="themes/images/clothes/f103.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item active">
			<a  href="details8.php" ><img src="themes/images/clothes/htcuultra.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details10.php" ><img src="themes/images/clothes/desire626.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details9.php" ><img src="themes/images/clothes/lgg5.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details12.php" ><img src="themes/images/clothes/f103.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details6.php" ><img src="themes/images/clothes/oppof1s.jpg" alt="#"/>
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item active">
			<a  href="details10.php" ><img src="themes/images/clothes/desire626.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details9.php" ><img src="themes/images/clothes/lgg5.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details12.php" ><img src="themes/images/clothes/f103.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details6.php" ><img src="themes/images/clothes/oppof1s.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details8.php" ><img src="themes/images/clothes/htcuultra.jpg" alt="#"/>
			View Details</a>
			</div>
	</div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
	<div class="carousel-inner">
			<div class="item active">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details12.php" ><img src="themes/images/clothes/f103.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details11.php" ><img src="themes/images/clothes/zenphone3.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details6.php" ><img src="themes/images/clothes/oppof1s.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details8.php" ><img src="themes/images/clothes/htcuultra.jpg" alt="#"/>
			View Details</a>
			</div>
			<div class="item">
			<a  href="details10.php" ><img src="themes/images/clothes/desire626.jpg" alt="#"/>
			View Details</a>
			</div>
	</div>
</div>
</div>
</div>

</section>
<section id="scn">
<h3 class="title"><span>WELCOME !</span></h3>
<div class="row">
	<div class="span4">
	<h1><i class="icon-heart"></i> </h1>
	<h4>Who we are?</h4>	
	<p> </p>
	<p> </p>
	</div>
	<div class="span4">
	<div class="seperator">
		<h1><i class="icon-truck iconShipping"></i> </h1>		
		<h4>Shipping Information</h4>		
		<p>We are providing the best shipping fecility,and also free shipping for your purchases</p>
		<p class="shipping"><span class="shippingCall">Free Shipping On Orders Over 1000</span></p>
	</div>
	</div>
	<div class="span4">
		<h1><i class="icon-comments-alt"></i> </h1>
		<h4>Find us in</h4>
		<p class="findUs">
			<a href="#"><i class="icon-facebook"></i> </a>
			<a href="#"><i class="icon-twitter"></i> </a>
			<a href="#"><i class="icon-google-plus"></i> </a>
		</p>
		
</div>
</div>
</section>
<hr class="soften"/>
<section id="client">
<h3 class="title"><span>BRANDS</span></h3>
<div id="clients" class="carousel slide">
		<div class="carousel-inner">
		<div class="item active">
		<div class="span12">
		<img src="themes/images/clients/ic1.png" alt="#" />
		<img src="themes/images/clients/ic2.png" alt="#" />
		<img src="themes/images/clients/ic3.png" alt="#" />
		<img src="themes/images/clients/ic4.png" alt="#" />
		<img src="themes/images/clients/ic6.png" alt="#" />
		<img src="themes/images/clients/ic7.png" alt="#" />
		</div>
		</div>
		<div class="item">
		<div class="span12">
		<img src="themes/images/clients/ic1.png" alt="#" />
		<img src="themes/images/clients/ic8.png" alt="#" />
		<img src="themes/images/clients/ic2.png" alt="#" />
		<img src="themes/images/clients/ic3.png" alt="#" />
		<img src="themes/images/clients/ic4.png" alt="#" />
		<img src="themes/images/clients/ic5.png" alt="#" />
		</div>
		</div>
</div>
	<a class="left carousel-control" href="#clients" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#clients" data-slide="next">›</a>
</div>
</section>
</div>
<!-- Footer
================================================== -->
<footer class="footer">
<div class="container">
<h5>Accepted Payment Methods </h5>
<p><a href="#"><img src="themes/images/payment_methods.png" alt="payment methods"/></a></p>
<hr class="soften"/>
<div class="footerMenu">
	
	<a href="about_us.php"> ABOUT US</a> | 
	
	<a href="contact_us.php">CONTACT </a>
<p class="pull-right"><a href="#">Terms and condition allowed</a> &copy; </p>
</div>
</div>
</footer>
<span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>

<!--  javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/homejquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/homebootstrap.min.js"></script>
    <script src="themes/js/homesmart.js"></script>
  </body>
</html>