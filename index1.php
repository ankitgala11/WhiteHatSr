<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "root", "project");  
//  if(isset($_POST["insert"]))  
//  {  
//       $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
//       $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
//       if(mysqli_query($connect, $query))  
//       {  
//            echo '<script>alert("Image Inserted into Database")</script>';  
//       }  
//  }  
 ?>  

<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

if($_SESSION['email'])
{
?>


 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>WhiteHatSr</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

           <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: black;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
    /* padding-top: 7px; */
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

</style>
</head> 


<body style="background : #3f4045;">
      
      <nav class="navbar navbar-expand-lg navbar-dark" style= "background-color: #000000;">
      <a class="navbar-link-active" style ="color:white; text-decoration:underline" href="index1.php">WhiteHatSr</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="success.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://getmentored.courses/" target="_blank" >Courses <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://open.spotify.com/playlist/37i9dQZF1DX8NTLI2TtZa6" target="_blank">Spotify <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.tutorialspoint.com/whiteboard.htm" target="_blank">Whiteboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.onlinegdb.com/" target="_blank">Online IDE <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
        </li> -->
  
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="margin-right: 10px">Search</button>
        <button class="btn btn-outline-info my-2 my-sm-0"><a href="logout1.php" style ="color:#5bc0de; text-decoration:None; display:inline-block; ">Logout</a></button>
      </form> -->
      </div>
      </nav>
          
      
      <br /><br />  


           <div class="container" style="width:500px;">  
                <h3 align="center"><span style="background-color: #F08080">ASSIGNMENTS AND NOTICE BOARD!</span></h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <!-- <input type="file" name="image" id="image" />   -->
                     <br />  
                     <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />   -->
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="700" width="500" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
<br>
<footer class="footer-distributed">

<div class="footer-left">

<h3>Created with &#128151 by : 
        <br><span>
        <a href="https://github.com/ankitgala11/WhiteHatSr" target="_blank" style ="color : lightseagreen;">Team Helloworld</a>
        </span></br>
</h3>

            <p class="footer-links">
                 <a href="http://adnaanlalani.000webhostapp.com/" target="_blank" class="link-1">Home</a>
                 
                 
            
            
            
                 <a href="http://adnaanlalani.000webhostapp.com/about.html" target="_blank">About</a>
                 
                 
                 
                 <a href="http://adnaanlalani.000webhostapp.com/contact.html" target="_blank">Contact</a>
            </p>

            <p class="link">
  <a href="http://adnaanlalani.000webhostapp.com/" target="_blank" style ="color : lightseagreen;">www.adnaanlalani.000webhostapp.com</a>
</p>
       </div>

       <div class="footer-center">

            <div>
                 <i class="fa fa-map-marker"></i>
                 <a href="https://www.google.co.in/maps/place/K.+J.+Somaiya+Institute+of+Engineering+and+Information+Technology/@19.046058,72.8688922,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7cf21727f6e19:0x473006136ad440dc!8m2!3d19.046058!4d72.8710809" 
                 target="_blank" style="color : lightseagreen">KJSIEIT, Sion</a>
            </div>

            <div>
                 <i class="fa fa-phone"></i>
                 <a href="tel://9920367471" style="color : lightseagreen">+91 9920367471</a>
            </div>

            <div>
                 <i class="fa fa-envelope"></i>
                 <a href="mailto:adnaan.l@somaiya.edu " style="color : lightseagreen">adnaan.l@somaiya.edu</a>
            </div>

       </div>
			<div class="footer-right">

				<p class="footer-company-about">
					<span>About this website</span>
					This website was created back in March 2021 for Hackticks Hackathon.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/adnaan.lalani"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/adnaan22"><i class="fa fa-github"></i></a>
          <a href="https://www.instagram.com/adnaananananana/"><i class="fa fa-instagram"></i></a>
          <a href="https://scan.snapchat.com/snapcodes"><i class="fa fa-snapchat"></i></a>

				</div>

			</div>

</footer>
 </body>  
 </html>  
 
 
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
 
 
 <?php
}
else {
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <title>GET OUT</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body style="background-image: linear-gradient(to right, #24C6DC, #514A9D);">
    <div class= 'container'>
   
        <br>
        <!-- <div class = "jumbotron">   -->
             <div class="card mx-auto" style="width: 25rem;">
                <img src="https://media1.tenor.com/images/8f9348bafd06805f1a71144a756f3401/tenor.gif?itemid=14378671" class="card-img-top" alt="..." height ="380rem">
                <div class="card-body">
                  <h5 class="card-title">*FACEPALM*</h5>
                  <p class="card-text">You're logged out dumdum, try logging in first 🤦‍♂️ </p>
                  <a href="login.html" class="btn btn-primary">LOGIN</a>
                </div>
            </div>
        </div>
    </div>

    <br>
</body>
</html>

<?php } ?>