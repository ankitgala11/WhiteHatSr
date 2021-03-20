<?php 
session_start();
    // $_SESSION["email"] = $email;
	//takes value from form
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//$name = $_POST['name'];


//echo $email."<br>".$password."<br>";//prints the details again

	$con=new mysqli("localhost", "root", "root", "project");
	if($con){
	//	echo "Connected Successfully.<br>";
		
		$sql="SELECT * FROM faculty WHERE email='$email'";
	//	echo $sql;

		$data = mysqli_query($con, $sql);
			//var_dump($data);

	//	echo "<br>.$data";


		if(!$data)
		    die("died");
		 else{
		    
		     if(mysqli_num_rows($data)>0)
		     {
		        $row = $data -> fetch_assoc();
		        $hash=$row["password"];
		        
		        if (password_verify($password, $hash)) {
		        	//echo "valid password";
		        	//print_r($row["name"]."<br>");
		        //	print_r($row["email"]."<br>");
		        //	print_r($row["password"]."<br>");
		        	 $_SESSION["email"]="$email";
		        	// $_SESSION["name"]
		        	 //$n="select name FROM r_form WHERE email='$email'";
		        	// echo $n;
		        	 //echo $_SESSION["name"];
		        	 //echo $_SESSION['email'];
		        	echo "<script>window.location.href='success.php'</script>";
		          //  header("Location: success.html");
		        } else {
		            //echo "Invalid Password";
		            	//echo "<script>window.location.href='invalid.html'</script>";
		           // header("Location:inavlid.html");
		           echo " <script>alert('Invalid Password');</script>" ;
			echo "<script>window.location.href='facultylogin.html'</script>";
		        }
		     }
		    else
		    {  // echo "Please register first";
		    	//echo "<script>window.location.href='pass.html'</script>";
		        //header("Location:pass.html");
		        echo " <script>alert('Invalid credentials, please try again');</script>" ;
			echo "<script>window.location.href='facultylogin.html'</script>";
		     }
		 }


	}

	else{
		die("connection insuccessful ,dying.");
	}	
?>