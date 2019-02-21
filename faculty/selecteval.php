<!DOCTYPE html>
<?php
include("connect.php");
//session_start();
$date=date("Y/m/d");
$sql="SELECT Eval_Start_Date,Eval_Type,Eval_ID FROM  Evaluation WHERE Eval_Start_Date > '$date'";
$result=mysqli_query($con,$sql);  
$options="";   
$i = 1;

  while ($row=mysqli_fetch_array($result)) { 
    $f=$row["Eval_Start_Date"]; 
	$k=$row["Eval_Type"];
	$n=$row["Eval_ID"];
	$type[$n]=$k;
    $options.="<OPTION VALUE=\"$n\">".$f.' '.$k."</OPTION>"; 
    $i++;
  }

if(isset($_REQUEST['save'])){
	
	if(isset($_REQUEST['eval'])){
		
		$_SESSION['evaltype']=$type[$_REQUEST['eval']];
		$_SESSION['eval']=$_REQUEST['eval'];
	    if($type[$_REQUEST['eval']]=='CIE')
		echo "<script>self.location='ciedetcol.php'</script>";
		else echo "<script>self.location='qpgensee_updated.php'</script>";
		
	}
	
	
	
}



?>
<head>
		
	 <meta charset="UTF-8">
    <title>Select the Evluation</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
</head>


<body>1234
	<div class = "wrapper">
		<div class = "container">
			<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand">Automatic QP Generator &nbsp   |  </a>
    
	
    </div>
	
	  <a class="navbar-brand" href='facultydash.php'>Generate Question Paper &nbsp |&nbsp  Select Evaluation </a>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="facultydash.php">Logged in As     <?php echo $_SESSION["Teacher_ID"]; ?></a></li>
       
     
      </ul>
    </div>
  </div>
</nav>


			<br>
			
			<h1>Select an evaluation</h1>
			<br><br><br> 
			<form method="post">
			<select name="eval">
				<?php echo($options);?>		
				</select>
			<br>
			<br>
			<br>
			<br>
			<button name="save" type="submit" id="login-button">Next</button>
			</form>
</div>

			
</div></body></html>
