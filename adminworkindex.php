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
	</header><!-- end header -->
    
</div>
</body>
</html>
