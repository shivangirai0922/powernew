<?php ob_start();?>
<!DOCTYPE html>
<head>
<title>Power Grid</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Admin SignIn</h2>
		<form action="" method="post">
			<input type="text" class="ggg" name="user" placeholder="USERNAME" required="">
			<input type="password" class="ggg" name="pass" placeholder="PASSWORD" required="">
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
        <?php	
	include('connect.php');
	if(isset($_POST['login']))
	{
		$user=mysqli_real_escape_string($con,$_POST['user']);
		$pass=mysqli_real_escape_string ($con,$_POST['pass']);
		$rs2=mysqli_query($con,"SELECT * from `admin` WHERE " .    
               "userid='" . $user . "' AND " .           
               "password='" . $pass . "'" ) or die(mysqli_error());
if(mysqli_num_rows($rs2)< 1)
        {
    	$msg="<p style='padding:5px;color:#fff;font-size:16px;'>Invalid user name or password ! try agian</p>";
        }
        else
        {
         $rs2=mysqli_query($con,"select * from admin where userid='$userid' and password='$pass'") or die(mysqli_error());
         $result1=mysqli_query($rs2);
    	 session_start();
	     $_SESSION["userid"]="$userid";
		 $_SESSION["password"]="$pass";
         header("Location:admin-profile.php");
        }
	}
	 ?>
		
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
