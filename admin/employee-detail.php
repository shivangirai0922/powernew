<?php
include('connect.php');
ob_start();
session_start();
if(!isset($_SESSION['userid']) && !isset($_SESSION['password']))
{
  header("location:index.php");
}
else
{
$email=$_SESSION['userid'];
$qry=mysqli_query($con,"select * from admin where userid='$email'");
$row1=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<head>
<title><?php echo $row1['userid'];?></title>
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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
  
<script language="Javascript" src="../assets/plugins/jquery.js"></script>
<script type="text/JavaScript" src='../assets/plugins/state.js'></script>

<script type="text/javascript" src="../assets/multi-select/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="../assets/multi-select/bootstrap-3.3.2.min.js"></script>

<link rel="stylesheet" href="../assets/multi-select/bootstrap-multiselect.css" type="text/css">
<script type="text/javascript" src="../assets/multi-select/bootstrap-multiselect.js"></script>

    
</head>
<body>

<section id="container">
<!--header start-->
<?php include('top.php');?>
<!--header end-->
<!--sidebar start-->
<aside>
    <?php include('sidebar.php');?>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
    
		
		<div class="row">
        <div class="col-lg-12">
        <section class="panel">
                        <header class="panel-heading">
                        Employee Detail Entry
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            
                            
                            
                                <form class="form-horizontal" action="" method="post">                               

<div class="form-group">
<label class="col-md-3 control-label">Emp Id</label>
<div class="col-md-8">
<input name="empid" placeholder="emp id" class="form-control input-md" type="text"  style="width:320px">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Employee Name</label>
<div class="col-md-8">
<input name="empname"  placeholder="Employee Name"  class="form-control input-md" type="text" style="width:320px" required>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Email</label>
<div class="col-md-8">
<input placeholder="Email"  name="email"   class="form-control input-md" type="email" required  style="width:320px" required>

</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Mobile</label>
<div class="col-md-8">
<input name="mobile" placeholder="Mobile" class="form-control input-md" type="text" required style="width:320px">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Department</label>
<div class="col-md-8">
<input name="dept"  class="form-control input-md" type="text" style="width:320px">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Desiginition</label>
<div class="col-md-8">
<input name="des" placeholder="Desiginition"    class="form-control input-md" type="text" required style="width:320px">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Dob</label>
<div class="col-md-8">
<input name="dob"    class="form-control input-md" type="date" style="width:320px">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Gender</label>
<div class="col-md-8">
<label class="radio-inline">
<input name="gender" value="Male" checked="checked" type="radio">Male </label>
<label class="radio-inline">
<input name="gender" value="Female" type="radio">Female </label>
<label class="radio-inline">
<input name="gender" value="Others" type="radio">Others </label>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Password</label>
<div class="col-md-8">
<input name="password"    class="form-control input-md" type="text" style="width:320px">
</div>
</div>



<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-8"><input type="submit" name="submit" class="btn btn-success btn-lg"></div>
</div>
</form>
<?php
if(isset($_POST['submit'])){
include('connect.php');
 $empid=$_POST['empid'];
 $name1=$_POST['empname'];
 $name2=$_POST['email'];
 $name3=$_POST['mobile'];
 $name4=$_POST['dept'];
 $name5=$_POST['des'];
 $name6=$_POST['dob'];
     
 $name8=$_POST['gender'];
 $name9=$_POST['password'];

 
 
 date_default_timezone_set("Asia/kolkata");
        $d=date("Y-m-d h:i:sa");
$status='0';
		
$qr1=mysqli_query($con,"select * from emp_entry where email='$name2'");
if(mysqli_num_rows($qr1)>0)
{
echo"<script>alert('Email already Registered  us');</script>";
echo"<script>window.location.href='employee-detail.php'</script>";
}
else
{



	
$qr=mysqli_query($con,"insert into emp_entry(empid,empname,email,mobile,dept,des,dob,gender,password,date,status)values
 ('$empid','$name1','$name2','$name3','$name4','$name5','$name6','$name8','$name9','$d','$status')")
 or die("insert query error".mysqli_error($con));

         
	   
	   echo"<script>alert('Successfully Enterd Employee Details');</script>";
	   echo"<script>window.location.href='employee-detail.php'</script>";
}	  
}
?>

                            
                            
                            
                            </div>

                        </div>
                    </section>
        </div>
        
        </div>
        
        
</section>
 <!-- footer -->
		  <?php include('footer.php')?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>

<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
</body>
</html>
<?php }?>
