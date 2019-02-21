<?php 
//session_start();
include("connect.php");
$cid=$_SESSION['subject'];

$result = mysqli_query($con,"SELECT * FROM Topics where Course_Id = '$cid' ");
if(!$result){
	
	 echo "<script>alert('No results found!')</script>";
	// echo "<script>self.location='syllabus.php'</script>";
}
echo "<body>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>";

echo "<link rel='stylesheet' href='style.css'>";

echo "<div class = 'wrapper'>
      <div class = 'container'>";
echo "<h2>Syllabus : $cid</h2><br><br>";
echo "<center><table border='1'>
<tr>
<th>Unit Number</th>
<th>Topics</th>
</tr>";
 
//$options='';
while($row = mysqli_fetch_array($result))
{
//$f=$row['Ques_ID'];
echo "<tr>";
echo "<td>" . $row['Unit_Number'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "</tr>";
//$options.="<OPTION VALUE=\"$f\">".$f."</OPTION>"; 
}

echo "</table></center>";
mysqli_close($con);



?>
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
	
	  <a class="navbar-brand" href='facultydash.php'>View Syllabus for <?php print $cid ?> </a>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="facultydash.php">Logged in As     <?php  echo $_SESSION["Teacher_ID"]; ?></a></li>
       
     
      </ul>
    </div>
  </div>
</nav>
	</div>

</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</html>
