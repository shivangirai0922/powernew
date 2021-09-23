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
$row=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<head>
<title></title>
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
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link rel="stylesheet" href="css/monthly.css">
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script type="text/javascript" class="init">




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
		<div class="row">
        <div class="col-lg-12">        
       <div class="panel panel-default">
        <div class="panel-heading">
     Employee <b>[ Employee Selected ]</b>
    </div>
    <div style="padding:10px"><br>
      <table class="table table-striped table-bordered" id="example" >
        <thead>
          <tr>
            <th>S.No</th>
            <th>Emp Id</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Mobile</th>
                     
            <th>Department</th>
            <th>Desiginition</th> 
            <th>Dob</th>
            <th>Gender</th>          
            <th>Sports</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		$k=1; 
		$qry2=mysqli_query($con,"select * from employee_entry order by id desc");
        while($row2=mysqli_fetch_array($qry2)){
		

		?>
          <tr>
            <td><?php echo $k++;?></td>
            <td><?php echo $row2['empid'] ?></td>           
            <td><?php echo $row2['empname'];?></td>
            <td><?php echo $row2['email'];?></td>
            <td><?php echo $row2['mobile'];?></td>
             <td><?php echo $row2['dept'];?></td>
            <td><?php echo $row2['des'];?></td>
            <td><?php echo $row2['dob'];?></td>
            <td><?php echo $row2['gender'];?></td>
            <td><?php echo $row2['sports'];?></td>
            <td><?php echo $row2['date'];?></td>
                      
            <td class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-danger" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="update-detail.php?id=<?php echo $row2['id'] ?>"  data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Update Detail</a></li>
         
        
            
            <li><a href="delete-select-employee.php?id=<?php echo $row2['id'];?>" onClick="return confirm('Are you sure you want to delete this ?');"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></li>

            
          </ul>
          
          </td>
          </tr>
          <!--Expiry Update-->
         
         
          
          <!--Update Detail-->
          
          <!--Add Interview-->
          
           <?php }?>
        </tbody>
       
      </table>
      <button class="btn btn-primary" onClick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

      
    </div>
  </div>  
        </div>
        </div>
</section>
 <!-- footer -->
		  <?php include('footer.php')?>
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
