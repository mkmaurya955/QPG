<html>
	<?php 
//session_start();
include("connect.php");
if(isset($_REQUEST['save']))
{
    $date=($_REQUEST['eval_date']);
    $type=$_REQUEST['eval_type'];
	$id=uniqid();
	$added=$_SESSION['Admin_ID'];
    $query="insert into Evaluation(`Eval_Start_Date`,`Eval_Type`,`Eval_ID`,`Added_By`)  
    VALUES('$date','$type','$id','$added')";   
   
    $res=mysqli_query($con,$query);
   	if($res){
    echo "<script>alert('Addition of evaluation successful!')</script>";
    echo "<script>self.location='admin/admindash.php'</script>";
	   }
	   
	else echo "<script>alert('Error! Please try again')</script>";

}

?>

<head>
    <meta charset="UTF-8">
    <title>Add Evaluation</title>
    
     
    
         <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

    
    
    
  </head>

  <body>
	<script src="https://code.jquery.com/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script language="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.22/jquery-ui.min.js"></script>
		<script src="course.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

    <div class="wrapper" id="wr">
<div class="container">
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
	
	  <a class="navbar-brand" href='admin/admindash.php'>Add a new Evaluation</a>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admindash.php">Logged in As     <?php echo $_SESSION["Admin_ID"]; ?></a></li>
       
     
      </ul>
    </div>
  </div>
</nav>
		
<br>
	<form id="form1" method="post">
			<input type="date" name= "eval_date" id="date" placeholder="Start date(YYYY-MM-DD)" required>
			<br>
			Select the type of evaluation:<br><br>
			<select id="eval_type" name="eval_type" required>
				<option value="CIE">Continous Internal Evaluation</option>
				<option value="SEE">Semester End Examination</option>
			</select>
				<button type="submit" id="sub" name= "save" id="save-button">Add Evaluation</button>
			
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
  <footer>
  <p>Automatic QP Gen</p>
  <p>By, Mkumar Copyright 2019</p>
</footer>

    
    
    
  </body>
 
</html>
