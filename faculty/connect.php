<?php
session_start();
$con=mysqli_connect("localhost","root","","question_paper_generator") or die($con);


if (isset($_POST['login1'])){
		$username=mysqli_real_escape_string($con, $_POST['uname']);
		$password=mysqli_real_escape_string($con, $_POST['password']);

		//ensure that the form fields are  filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");  
		}  
		if (empty($password)) {
			array_push($errors, "Password is required");  
		}
		if (count($errors)==0) {
			$password=$password;
			//$password=md5($password); // encrpt password before comparing with that from database
			$sql1= "SELECT * FROM teacher WHERE Teacher_ID='$username' AND Password ='$password'";
			$res=mysqli_query($con, $sql1);

			$check = mysqli_fetch_array($res);
 
			if(isset($check) and $response != null && $response->success){
			$date=date("Y/m/d");
			$time=date("h:i:sa");
			$type='Faculty';
			$sql2 = "INSERT INTO Login_History VALUES('$date','$time','$username','$type')"	;
			mysqli_query($con,$sql2);
		}

			if (mysqli_num_rows($res)==1) {
				// log teacher in
				$_SESSION['Teacher_ID']=$username;
				//$_SESSION['success']="You are now logged in";
    			}
				header('location:faculty/facultydash.php'); // redirect to the home page
			}else{
				array_push($errors, "Wrong username and password");
			}
		}
?>
