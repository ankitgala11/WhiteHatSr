<?php 

	$name = $_POST['name'];//takes value from form
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['c_password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);
 	if($password===$confirmpassword)
 	{
		//echo $name."<br>".$email."<br>".$password."<br>";//prints the details again

	$con = mysqli_connect("localhost", "root", "root", "project");
	
	if($con){
// 		echo "Connected Successfully.<br>";
		$s="SELECT * FROM student WHERE email='$email'";
		$d = mysqli_query($con, $s);
		if (mysqli_num_rows($d) > 0) {
			//echo "<h1>Sorry... email already taken</h1>";
		//	sleep(60);
			//header("location:register.html");
			echo " <script>alert('Email already taken');</script>" ;
			echo "<script>window.location.href='register.html'</script>";
		}
			
			else{
		
		$sql="INSERT INTO student VALUES('$name','$email','$hash')";
//  		echo $sql;

		$data= mysqli_query($con, $sql);
// 		var_dump($data);

	//	echo "<br>".$data;
		//header("location:success.html");
		echo " <script>alert('Successfully registered');</script>" ;
		echo "<script>window.location.href='login.html'</script>";
			}
	}
	else{
		die("connection insuccessful ,dying.");
	}
	}
	else
	{
	echo "<script type='text/javascript'>alert('Password do not match');</script>";
//	echo "<script>window.location.href='register.html'</script>";
	}

	
?>