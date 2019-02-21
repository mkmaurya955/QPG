<!DOCTYPE html>
<?php 
//session_start();
include 'connect.php';

echo "<body>
	<form method='post'>
		<center><button type='submit' id='appr' name='approve'>Approve Paper</button></center>
			
	</form>
</body>
</html>";



$qpid=$_SESSION['qps'];

$_SESSION['qpaper']=$qpid;
$query="SELECT Content,L1,L2,L3 FROM  Question_Paper WHERE QP_ID='$qpid'";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
if(!$res){
		echo "<script>alert('Question Paper Not Found!!');</script>";
}
else{
	while($row=mysqli_fetch_assoc($res)){
$qp=$row['Content'];
$l1=$row['L1'];
$l2=$row['L2'];
$l3=$row['L3'];

$_SESSION['qp']=$qp;
//var_dump($l1);
//$SESSION['l1q']=(int)$l1;
//$SESSION['l2q']=(int)$l2;
//$SESSION['l3q']=(int)$l3;
//echo "<center><img src='gp2.php'/></center>";
print $qp;	
}
}	

	

$qpid=$_SESSION['qps'];

$sub=$_SESSION['subject'];

$eval=$_SESSION['eval'];
include("connect.php");

if(isset($_REQUEST['approve'])){

$qp=$_SESSION['qp'];
print $qp;
$qp=mysqli_real_escape_string($con,$qp);
$sql = "INSERT INTO Prev_Qp VALUES('$qpid','$eval','$sub','$qp')";
$res=mysqli_query($con,$sql);
if(!$res){
		echo "<script>alert('Error!! Paper might have already been selected!');</script>";
}
echo "
 <script type='text/javascript'>
        
            var ButtonControl = document.getElementById('appr');
            ButtonControl.style.visibility = 'hidden';
            window.print();
        
    </script>";
}



?>

	  	
	
