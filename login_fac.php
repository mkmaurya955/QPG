<!DOCTYPE html>
<html >
<?php
include("connect.php");
session_start();

?>
<head>
    <meta charset="UTF-8">
    <title>Teacher Login</title>
    
    
    
    
        <link rel="stylesheet" href="style.css">
 
  </head>

  <body>
	
    <div class="wrapper">
	<div class="container">
		<br><br><br>
		<h1>Welcome to Automatic Question Paper Generator</h1>
<br>
		Hello Teacher! Please enter your credentials to login
		<br><br><br>
		<form class="form" method="post" action="login_fac.php">
			<input type="text" name="uname" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			
			<button type="submit" name="login1" id="login-button">Login</button>
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
    
  </body>
</html>
