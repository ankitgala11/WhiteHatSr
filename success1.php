<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if($_SESSION['email'])
{
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="900;url=logout1.php" /> <!-- auto logout after 15 mins -->
  <title>Good job</title>
  <link rel="stylesheet" href="./style.css">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
<!-- partial:index.partial.html -->
<div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="title">
 <?php 
                     echo '<div style="font-size:20px;color:#66E8E4; margin-bottom:20px; transform: translateY(100px);
animation: slideUp .8s ease forwards .5s;">Congratulations, <span style="font-size:20px;color:#66E8E4;">'.$_SESSION['email'].'</span></div>';
                    // echo "Hello, " .$_SESSION['email'];
                    
 ?>
</div>
<div class="par">
<p>
You have successfully logged in!
Welcome to your one stop solution of being a better student, view your notices, assignments, free courses and much more! 
</p>
</div>
<div class="btns">
<button onclick="window.location.href = 'index1.php';" class='btns_more' id='button'>  ENLIGHTEN ME </button>
</div>
</div>
</div>
 <div class="container_outer_img">
 <div class="img-inner">
 <img src="22.PNG" alt="" class="container_img"/>
       </div>
     </div>
  </div>
<div class="overlay"></div>
<!-- partial -->
  
</body>
</html>
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
        <!-- <div class = "jumbotron">  -->
            <div class="card mx-auto" style="width: 25rem;">
                <img src="https://media1.tenor.com/images/8f9348bafd06805f1a71144a756f3401/tenor.gif?itemid=14378671" class="card-img-top" alt="..." height ="380rem">
                <div class="card-body">
                  <h5 class="card-title">*FACEPALM*</h5>
                  <p class="card-text">You're logged out dumdum, try logging in again 🤦‍♂️</p>
                  <a href="login.html" class="btn btn-primary">LOGIN</a>
                </div>
            </div>
        </div>
    </div>

    <br>
</body>
</html>

<?php } ?>