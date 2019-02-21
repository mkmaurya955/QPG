<!DOCTYPE html>
<?php 
include("connect.php");

$result = mysqli_query($con,"SELECT * FROM Handled_By");


if(!$result){
	 
	 echo "<script>alert('No results found!')</script>";
	 echo "<script>self.location='report.php'</script>";
}
echo "";
echo "<div class = 'wrapper'>
		<div class = 'container'>";
echo "Teacher - Subject Map<br><br>";


echo "<center><table>

<tr>
<th>Teacher ID</th>
<th>Teacher Name</th>

<th>Course ID</th>
<th>Course Name</th>

<th>Number of Hours</th>
<th>Course Year</th>
</tr>";
  
while($row1 = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row1['Teacher_ID'] . "</td>";

  $tid=$row1['Teacher_ID'];
  $sql = "SELECT 	Designation,FName,MName,LName FROM Teacher WHERE Teacher_ID='$tid'";
  $result2 = mysqli_query($con,$sql);
  while($row1 = mysqli_fetch_array($result2))
  {
    echo "<td>" .$row1['FName'] . "</td>";
  }

  echo "<td>" .$row1['Course_ID'] . "</td>";

  $n=$row1['Course_ID'];

  $sql = "SELECT Course_Name FROM Course WHERE Course_ID='$n'";
  
  $result1 = mysqli_query($con,$sql);
  
  while($row1 = mysqli_fetch_array($result1))
  {
    echo "<td>" .$row1['Course_Name'] . "</td>";
  }
  echo "<td>" . $row1['No_of_Hours'] . "</td>";
  echo "<td>" . $row1['Course_Year'] . "</td>";
  echo "<td>" . $row1['Course_Year'] . "</td>";
  echo "</tr>";

}

?>

<head>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='style.css'></head>
  <body>
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
	
	  <a class="navbar-brand" href='admindash.php'>Generate Reports  &nbsp |  &nbsp Teacher-Subject Map</a>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admindash.php">Logged in As     <?php echo $_SESSION["Admin_ID"]; ?></a></li>
       
     
      </ul>
    </div>
  </div>
</nav>