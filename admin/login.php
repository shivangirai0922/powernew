<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Power Grid Corporation Of India Limited</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Club Membership Registration form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
<div class="col-lg-12">
<img src="images/logo.png" style="margin-left:400px; margin-top:25px; ">
</div>
<div class="w3ls-main">
<h2>Login Form</h2>

<div class="w3ls-form">
<form action="#" method="post">


<ul class="fields">


<div class="Refer_w3l">

<h3>Your details</h3>



<div class="panel-body">
<h3><strong>Use Email Id as Username And Date Of Birth as Password</strong></h3>
<li style="color:#FFFFFF;">
<label>Choose Category</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="0" required>&nbsp;&nbsp;Employee
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="1">&nbsp;&nbsp;Selected Employee
</li>

<li>	
		<label class="w3ls-opt">employee email :<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="email" name="email"  placeholder="Employee email" required=" "/>
		</div>
	</li>
<li>
		
			<label class="w3ls-opt">password :<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="password" name="password" placeholder="Password" required=""/>
			</span>
		
	</li>
<div class="w3ls-btn">
		<input type="submit" name="login" value="Login">
	</div>
</form>

<?php	
	include('connect.php');
	if(isset($_POST['login']))
	{
	    $ty=$_POST['type'];
		if($ty=='0'){
		$user=mysqli_real_escape_string($con,$_POST['email']);
		$pass=mysqli_real_escape_string ($con,$_POST['password']);
		$rs2=mysqli_query($con,"SELECT * from `emp_entry` WHERE " .    
               "email='" . $user . "' AND " .           
               "password='" . $pass . "'") or die(mysqli_error());
if(mysqli_num_rows($rs2)< 1)
        {
    	echo "<script>alert('Invalid username or Password')</script>";
        }
        else
        {
         $rs2=mysqli_query($con,"select * from emp_entry where email='$user' and password='$pass'") or die(mysqli_error());
         $result1=mysqli_query($rs2);
    	 session_start();
	     $_SESSION["email"]="$user";
		 $_SESSION["password"]="$pass";
         header("Location:apply-form.php");
		 }
		 }
		 if($ty=='1'){
		 $user=mysqli_real_escape_string($con,$_POST['email']);
		$pass=mysqli_real_escape_string ($con,$_POST['password']);
		$rs2=mysqli_query($con,"SELECT * from `employee_entry` WHERE " .    
               "email='" . $user . "' AND " .           
               "password='" . $pass . "'") or die(mysqli_error());
if(mysqli_num_rows($rs2)< 1)
        {
    	echo "<script>alert('Invalid username or Password')</script>";
        }
        else
        {
         $rs2=mysqli_query($con,"select * from employee_entry where email='$user' and password='$pass'") or die(mysqli_error());
         $result1=mysqli_query($rs2);
    	 session_start();
	     $_SESSION["email"]="$user";
		 $_SESSION["password"]="$pass";
         header("Location:employee-profile.php");
		 }
        }
	}
	 ?>
     
</div>
	
	
	</div>	

</ul>

</form>
</div>
</div>
<footer>2018 Sports Requisition Form. All Rights Reserved | Designed by Anu Shivangi & Avneet</footer>
</html>