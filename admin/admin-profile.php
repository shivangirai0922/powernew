<?php
include('connect.php');
session_start();
if(!isset($_SESSION['userid']) && !isset($_SESSION['password']))
{
  header("location:index.php");
}
else
{
$email=$_SESSION['userid'];
$qry=mysqli_query($con,"select * from admin where userid='$email'");
$row=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<head>
<title><?php echo $row['userid'];?></title>
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
<script type="text/javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.min.js">
	</script>
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
    <div class="market-updates">
            <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right" style="font-size:35px;color:#FFFFFF">
						<?php $val1=mysqli_query($con,"SELECT count(*) as total from emp_entry");
$data=mysqli_fetch_assoc($val1);
echo $data['total'];?>
					</div>
					<div class="col-md-8 market-update-left">
					     <h4>Register</h4>
						<h3>Employee</h3>
						<a href="admin-profile.php" style="color:#FFFFFF; text-decoration:none">Click Here</a>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right" style="font-size:40px;color:#FFFFFF">
					<?php $val1=mysqli_query($con,"SELECT count(*) as total from employee_entry");
$data=mysqli_fetch_assoc($val1);
echo $data['total'];?>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Selected</h4>
					<h3>Employee</h3>
						<a href="selected-employee.php" style="color:#FFFFFF; text-decoration:none">Click Here</a>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			
			
			
		   <div class="clearfix"> </div>
		</div>
				
		<div class="row">
        <div class="col-lg-12">   
        
       <div class="panel panel-default">
        <div class="panel-heading">
    Employee Enquiry
    </div>
    <div style="padding:10px"><br>
      <table class="table table-striped table-bordered" id="example" >
        <thead>
          <tr>
            <th style="color:#000">S.No</th>
            <th style="color:#000">Emp Id</th>
            <th style="color:#000">Emp Name</th>
            <th style="color:#000">Email</th>          
            
            <th style="color:#000">Password</th>
           <th style="color:#000">Mobile</th>
           
            
            <th style="color:#000">Dob</th>
             <th style="color:#000">Date</th>
             <th style="color:#000">Delete</th>
             
          </tr>
        </thead>
        <tbody>
        <?php
		$k=1; 
		$qry2=mysqli_query($con,"select * from register");
        while($row2=mysqli_fetch_array($qry2)){
		?>
          <tr>
            <td style="color:#000"><?php echo $k++;?></td>
            <td style="color:#000"><?php echo $row2['empid'];?></td>
            <td style="color:#000"><?php echo $row2['empname'];?></td>
            <td style="color:#000"><?php echo $row2['email'];?></td>
            <td style="color:#000"><?php echo $row2['password'];?></td>
            <td style="color:#000"><?php echo $row2['mobile'];?></td>
            
           <td style="color:#333"><?php echo $row2['dob'];?></td>
                
             <td style="color:#000"><?php echo $row2['date'];?></td>
             <td><a href="delete.php?id='<?php echo $row2['id'] ?>'" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this ?');">Delete</a></td>
            
          </tr> 
        <?php }?>        
        </tbody>
      </table>
    </div>
  </div>  
        </div>
        </div>
</section>
 <!-- footer -->
		  <?php include('footer.php') ?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
</body>
</html>
<?php }?>
