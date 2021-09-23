<?php
 session_start();
 if($_SESSION["email"]==""){
 header("location:login.php");
 
 }else{
 include("connect.php");
  $email=$_SESSION["email"];
 
 $qry=mysqli_query($con,"select * from form_submit where email='$email'");
 $row=mysqli_fetch_array($qry);
 $password=$row['login_id'];
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Power Grid Corporation Of India Limited</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">

<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div class="row">
<div class="col-lg-12">
<img src="images/logo.png" style="margin-left:400px; margin-top:25px; ">
</div>
<div class="w3ls-main">
<h2>WELCOME H.O.D</h2>
<div class="w3ls-form" style="margin-left:200px;">
 <form action="hod-show.php" method="post" enctype="multipart/form-data">
<ul class="fields">
<div class="Refer_w3l">
<h3>Your details</h3>

     <li>	
		<label class="w3ls-opt">PLEASE ENTER YOUR H.O.D ID:<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
        
        
        
			<input type="text" name="hod"  placeholder="hod id"  />
		</div>
	</li>
    <div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" value="Submit "> 
	
                    </div>
                                          

    <li style="font-size:24px; margin-top:30px;">
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>LogOut</span>
                    </a>
                </li>

</body>
</html>
