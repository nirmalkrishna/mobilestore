<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> login screen</title>
  
  
  
      <link rel="stylesheet" href="css/newloginstyle.css">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		<form action="logcon.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<input type="text" placeholder="Username" name="user" required/ >
			<input type="password" placeholder="Password" name="pass" required/ >
			<input type="submit" value=" Login"name="submit" required/>
			<a href="forgot.php">Forgot password?
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/newloginindex.js"></script>

</body>
</html>
