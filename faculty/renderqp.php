<!DOCTYPE html>
<?php 
//session_start();
include("connect.php");
$qpid=$_SESSION['qpaper'];
$sub=$_SESSION['subject'];
echo "<body>
	<form method='post'>
		<center><button type='submit' id='appr' name='approve'>Print this Paper</button></center>
			
	</form>
</body>";
$eval=$_SESSION['eval'];
include("connect.php");
if(isset($_REQUEST['approve'])){

$qp=$_SESSION['qp'];
print $qp;
echo "
 <script type='text/javascript'>
        
            var ButtonControl = document.getElementById('appr');
            ButtonControl.style.visibility = 'hidden';
            window.print();
        
    </script>";
}
if(isset($_REQUEST['display'])){
$qpid=$_REQUEST['qps'];
$_SESSION['qpaper']=$qpid;
$query="SELECT Content from Prev_Qp where QP_ID='$qpid'";
$res=mysqli_query($con,$query);
if(!$res){
		echo "<script>alert('Question Paper Not Found!!');</script>";
}
else{
$qp=mysql_result($res,0,'Content');

$_SESSION['qp']=$qp;

//$SESSION['l1q']=(int)$l1;
//$SESSION['l2q']=(int)$l2;
//$SESSION['l3q']=(int)$l3;
//echo "<center><img src='gp2.php'/></center>";
var_dump($qp);	
}
	
}
?>

	  	
	
