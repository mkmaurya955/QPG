<!DOCTYPE html>
<?php
include("connect.php");
  $username = $_SESSION['Admin_ID'];
  $sql="SELECT Course_ID from Course"; 
  $result=mysqli_query($con,$sql); 
   
  $options="";   
//  $i = 1;
  while ($row=mysqli_fetch_array($result)) { 
    $f=$row["Course_ID"]; 
    $options.="<OPTION VALUE=\"$f\">".$f."</OPTION>"; 

  }
  
  if(isset($_REQUEST['add'])){
	  
	  $_SESSION['sub']=$_REQUEST['subject'];
    echo "<center><img src='graph1.php'/></center>"; 
	  
	  
  }
  

?>
<head>
		
	 <meta charset="UTF-8">
    <title>LOD Composition</title>

</head>



<center>Select Subject 
			<form method="post">
			<select name="subject">
			<?php echo($options);?>				
							
			</select>
				<button type="submit" name="add" id="addquestions">Generate</button><br><br>
				<button type="button" name="back" id="addquestions" onClick="location.href='report.php'">Back</button>
        
</center>
